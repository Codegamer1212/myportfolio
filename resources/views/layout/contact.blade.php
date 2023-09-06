<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-4">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h1 class="big big-2">Contact</h1>
                <h2 class="mb-4">Contact Me</h2>
            </div>
        </div>

        <div class="row d-flex contact-info mb-5">
            <div class="col-md-6 col-lg-4 d-flex ftco-animate">
                <div class="align-self-stretch box text-center p-4 shadow">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-map-signs"></span>
                    </div>
                    <div>
                        <h3 class="mb-4">Address</h3>
                        <p>Savgun Society Behind Taluka Panchayat
                            Sihor,Bhavnagar -364240</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex ftco-animate">
                <div class="align-self-stretch box text-center p-4 shadow">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-phone2"></span>
                    </div>
                    <div>
                        <h3 class="mb-4">Contact Number</h3>
                        <p><a href="tel://1234567920">+91 8849112126</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex ftco-animate">
                <div class="align-self-stretch box text-center p-4 shadow">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-paper-plane"></span>
                    </div>
                    <div>
                        <h3 class="mb-4">Email Address</h3>
                        <p><a href="#">manavrathod6466@gmail.com</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row no-gutters block-9">
        <div class="col-md-6 order-md-last d-flex">
            <form action="{{route('sendmessage')}}" method="post" class="bg-light p-4 p-md-5 contact-form">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Name" name="name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Email" name="email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Subject" name="subject">
                </div>
                <div class="form-group">
                    <textarea id="" cols="30" rows="7" class="form-control" placeholder="Message" name="message"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                </div>
            </form>

        </div>

        <div class="col-md-6 d-flex">
            <div class="img" style="background-image: url(images/about.jpg);"></div>
        </div>
    </div>
    </div>
</section>