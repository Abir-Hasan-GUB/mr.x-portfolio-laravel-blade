<!-- Experience Section-->
<section class="container pt-5" id="">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h2 class="text-primary fw-bolder mb-0">Experience</h2>
        <a class="btn btn-primary px-4 py-3" href="" target="_blank" id="resumeLink">
            <div class="d-inline-block bi bi-download me-2"></div>
            Download Resume
        </a>
    </div>

    <div id="experienceInside"></div>

</section>

<script>
    const getAllExperience1 = async () =>{
        document.getElementById('loading-div').classList.remove('d-none');
        const allExperience = await axios.get('/getExperienceDetails');
        document.getElementById('loading-div').classList.add('d-none');
        if(allExperience.status === 200){
            allExperience.data.forEach((singleItem) => {
                const singleExperienceCard = `<div class="card shadow border-0 rounded-4 mb-5">
        <div class="card-body p-5">
            <div class="row align-items-center gx-5">
                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                    <div class="bg-light p-4 rounded-4">
                        <div class="text-primary fw-bolder mb-2">${singleItem.duration}</div>
                        <div class="small fw-bolder">${singleItem.title}</div>
                        <div class="small text-muted">${singleItem.designation}</div>
                    </div>
                </div>
                <div class="col-lg-8"><div>
${singleItem.details}
</div></div>
            </div>
        </div>
    </div>`;
                document.getElementById('experienceInside').innerHTML += singleExperienceCard;
            })
        }
    }
    getAllExperience1();

    const getResumeLink = async () =>{
        const resumeBtn = document.getElementById('resumeLink');
        const link = await axios.get('/getResumeLink');
        console.log(link)
        if(link.status === 200){
            resumeBtn.setAttribute("href", link.data[0].dwonloadLink);
        }else{
            alert('Server not responding well!')
        }
    }

    getResumeLink();
</script>
