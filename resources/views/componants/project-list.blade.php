<!-- Projects Section-->
<section class="py-5">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8" id="project-cards-inside">
                <!-- Project Card 1-->

            </div>
        </div>
    </div>
</section>


<script>
    const callAllPostApi = async () =>{
        document.getElementById('loading-div').classList.remove('d-none');
        const getAllPost = await axios.get('/getAllProjectDetails');
        document.getElementById('loading-div').classList.add('d-none');

        console.log(getAllPost)
        if(getAllPost.status === 200){
            getAllPost.data.forEach((singleProject) => {
                let singlePost =  `<div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <h2 class="fw-bolder">${singleProject.title}</h2>
                                <p>${singleProject.details}</p>
                            </div>
                            <img class="img-fluid" src= ${singleProject.thumbLink} alt="..." />
                        </div>
                    </div>
                </div>`;

                document.getElementById('project-cards-inside').innerHTML += singlePost;
            })
        }
    }
    callAllPostApi();
</script>
