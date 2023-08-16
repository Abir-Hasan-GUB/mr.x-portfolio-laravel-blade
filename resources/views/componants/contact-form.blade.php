<!-- Page content-->
<section class="py-5">
    <div class="container px-5">
        <!-- Contact form-->
        <div class="bg-light rounded-4 py-5 px-4 px-md-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                <h1 class="fw-bolder">Get in touch</h1>
                <div class="alert alert-success w-50 ms-auto me-auto" id="formAleartSuccess" role="alert">
                    A simple success alert—check it out!
                </div>
                <div class="alert alert-danger w-50 ms-auto me-auto" id="formAleartFailed" role="alert">
                    A simple danger alert—check it out!
                </div>
                <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">

                    <form id="contactForm">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." required />
                            <label for="name">Full name</label>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" required />
                            <label for="email">Email address</label>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" required />
                            <label for="phone">Phone number</label>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" required ></textarea>
                            <label for="message">Message</label>
                        </div>
                <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button></div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>


<script>
    // form handle here
    document.getElementById('formAleartSuccess').style.display = 'none';
    document.getElementById('formAleartFailed').style.display = 'none';

    const contactForm = document.getElementById('contactForm');
    contactForm.addEventListener('submit',
        async (event) => {
            event.preventDefault()
            document.getElementById('loading-div').classList.remove('d-none');
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const message = document.getElementById('message').value;

            const formData = {
                fullName: name,
                email: email,
                phone: phone,
                message: message
            }

            const response = await axios.post('/postAContact', formData);
            document.getElementById('loading-div').classList.add('d-none');
            if (response.status === 200) {
                document.getElementById('formAleartSuccess').style.display = 'block';
                document.getElementById('formAleartSuccess').innerText = response.data.msg;
                contactForm.reset();
            } else {
            console.log("Error!")
            }
            setTimeout(function(){
                document.getElementById('formAleartSuccess').style.display = 'none';
            },2000);
        })
</script>
