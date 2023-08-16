<!-- Education Section-->
<section class="container">
    <h2 class="text-secondary fw-bolder mb-4">Education</h2>
    <!-- Education Card 1-->

    <div id="allEducationInsider1">

    </div>

</section>

<script>
    const getAllExperience2 = async () =>{
        const allExperience = await axios.get('/getEducationDetails');
        if(allExperience.status === 200){
            allExperience.data.forEach((singleItem) => {
                const singleEducationCard = `<div class="card shadow border-0 rounded-4 mb-5">
        <div class="card-body p-5">
            <div class="row align-items-center gx-5">
                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                    <div class="bg-light p-4 rounded-4">
                        <div class="text-secondary fw-bolder mb-2">${singleItem.duration}</div>
                        <div class="mb-2">
                            <div class="small fw-bolder">${singleItem.institutionName}</div>
                        </div>
                        <div class="fst-italic">
                            <div class="small text-muted">${singleItem.field}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8"><div>
${singleItem.details}
</div></div>
            </div>
        </div>
    </div>`;
                document.getElementById('allEducationInsider1').innerHTML += singleEducationCard;
            })
        }
    }
    getAllExperience2();
</script>
