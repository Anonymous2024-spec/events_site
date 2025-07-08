    <?php include './includes/header.php' ?>

            <!-- Content Wrapper Start -->
            <div class="content-wrapper">

                <!-- Breadcrumb Start -->
                <div class="breadcrumb-wrap">
                    <div class="container">
                        <img src="assets/img/shape-7.png" alt="Image" class="br-shape-one">
                        <img src="assets/img/shape-8.png" alt="Image" class="br-shape-two">
                        <img src="assets/img/shape-7.png" alt="Image" class="br-shape-three">
                        <img src="assets/img/shape-8.png" alt="Image" class="br-shape-four">
                        <div class="breadcrumb-title">
                            <h2>Contact Us</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="index.php">Home </a></li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Breadcrumb End -->

                <!-- Contact Us section Start -->
                <section class="contact-us-wrap ptb-100">
                    <div class="container">
                        <div class="section-title style1 text-center mb-30">
                            <span>Contact Us</span>
                            <h2>Don't Hesitate To Contact Us</h2>
                        </div>
                        <div class="row">
                            <div class="col-xl-8 col-lg-7 col-12">
                                <div class="contact-form">
                                    <form class="" id="contactForm">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="name" placeholder="Name*" id="name"
                                                        required data-error="Please enter your name">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" name="email" id="email" required
                                                        placeholder="Email*" data-error="Please enter your email">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="number" name="phone" id="phone" required
                                                        placeholder="Phone Number*" data-error="Please enter your email">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="msg_subject" placeholder="Subject*" id="msg_subject" required data-error="Please enter your subject">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group v1">
                                                    <textarea name="message" id="message" placeholder="Your Messages.." cols="30" rows="10" required data-error="Please enter your message"></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn style1">Send Message</button>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5 col-md-12">
                                <div class="contact-item-wrap">
                                    <div class="contact-item">
                                        <span class="contact-icon">
                                            <i class="ri-map-pin-fill"></i>
                                        </span>
                                        <div class="contact-info">
                                            <h3>Our Location</h3>
                                            <p>342/A, Milson Avenue, Brookleen Lane, USA
                                            </p>
                                        </div>
                                    </div>
                                    <div class="contact-item">
                                        <span class="contact-icon">
                                            <i class="ri-mail-fill"></i>
                                        </span>
                                        <div class="contact-info">
                                            <h3>Send An Email</h3>
                                            <a href="https://templates.hibotheme.com/cdn-cgi/l/email-protection#8ce4e9e0e0e3ccfbedf6e3a2efe3e1"><span class="__cf_email__" data-cfemail="7b131e1717143b0c1a011455181416">[email&#160;protected]</span></a>
                                            <a href="https://templates.hibotheme.com/cdn-cgi/l/email-protection#3a494f4a4a55484e7a4d5b405514595557"><span class="__cf_email__" data-cfemail="d6a5a3a6a6b9a4a296a1b7acb9f8b5b9bb">[email&#160;protected]</span></a>
                                        </div>
                                    </div>
                                    <div class="contact-item">
                                        <span class="contact-icon">
                                            <i class="ri-phone-fill"></i>
                                        </span>
                                        <div class="contact-info">
                                            <h3>Phone Number</h3>
                                            <a href="tel:88098787868">+44 587 154765</a>
                                            <a href="tel:88098787869">+55 576 234532</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Contact Us section End -->

                <!-- Map area start -->
                <div class="comp-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.5934879334886!2d30.65995647397025!3d-0.6082646352588524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19d91b002818a913%3A0xab63f36fc3ccc916!2sSt%20Paul%20Shopping%20Mall!5e0!3m2!1sen!2sug!4v1751981930433!5m2!1sen!2sug" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- Map area end -->

            </div>
            <!-- Content Wrapper End -->

            <!-- Footer Section Start -->
            <?php
           include './includes/footer.php'
?>
            <!-- Footer Section End -->
        
        </div>
        <?php
include './includes/script.php'
?>