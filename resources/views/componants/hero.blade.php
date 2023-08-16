<!-- Header-->
<header class="py-5">
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center">
            <div class="col-xxl-5">
                <!-- Header text content-->
                <div class="text-center text-xxl-start">
                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase" id="keyLine">Design &middot; Development &middot; Marketing</div></div>
                    <div class="fs-3 fw-light text-muted" id="title">I can help your business to</div>
                    <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline" id="short_title">Get online and grow fast</span></h1>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{{url('/resume')}}">Resume</a>
                        <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="{{url('/projects')}}">Projects</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7">
                <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                    <div class="profile">
                        <img class="profile-img" id="imgProfile" src="{{asset('assets/profile.png')}}" alt="..." />
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    const getHeroProperties = async () =>{
        document.getElementById('loading-div').classList.remove('d-none');
        const allProperties = await axios.get('getHeroproperties');
        if(allProperties.status === 200){
            document.getElementById('keyLine').innerText = allProperties.data[0].keyLine;
            document.getElementById('short_title').innerText = allProperties.data[0].short_title;
            document.getElementById('title').innerText = allProperties.data[0].title;
            document.getElementById('imgProfile').setAttribute('src', allProperties.data[0].img);
        }
    }

    getHeroProperties();
</script>
