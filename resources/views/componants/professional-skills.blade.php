<section class="container">
    <!-- Skillset Card-->
    <div class="card shadow border-0 rounded-4 mb-5">
        <div class="card-body p-5">
            <!-- Professional skills list-->
            <div class="mb-5">
                <div class="d-flex align-items-center mb-4">
                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Professional Skills</span></h3>
                </div>
                <div id="proffessionalSkillsInsider2" class="row row-cols-1 row-cols-md-3 mb-4"> </div>
            </div>
        </div>
    </div>
</section>

<script>
    const getAllExperience3 = async () =>{
        const allSkills = await axios.get('/getProfessionalSkill');
        if(allSkills.status === 200){
            allSkills.data.forEach((singleItem) => {
                const singleSkill = `
                    <div class="col mb-4 mb-md-4"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">${singleItem.name}</div></div>

                `;
                document.getElementById('proffessionalSkillsInsider2').innerHTML += singleSkill;
            })
        }
    }
    getAllExperience3();
</script>
