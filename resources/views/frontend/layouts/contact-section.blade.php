<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
        <h2>Contact</h2>
        <h3><span>Contact Us</span></h3>
        <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6">
            <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Our Address</h3>
            <p>264 Xo Viet Nghe Tinh, Da Nang , Viet Nam 500000</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>Email Us</h3>
            <p>shapeecloud@gmail.com</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>Call Us</h3>
            <p>+84 93 264 42 47</p>
            </div>
        </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.647865793236!2d108.21051991497687!3d16.031836144697024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421992bc7e8c35%3A0xf3e06dcceb9ac3aa!2zMjY0IFjDtCBWaeG6v3QgTmdo4buHIFTEqW5oLCBLaHXDqiBUcnVuZywgQ-G6qW0gTOG7hywgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1638864148552!5m2!1svi!2s" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div>

        <div class="col-lg-6">
            
            <form action="{{ route('contact.send') }}" method="POST" role="form" class="contact-form">
            @csrf
                <div class="row">
                    <div class="col form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
        </div>

        </div>
    </div>
</section>
