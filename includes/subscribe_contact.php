
       <section class="subscriber-area section-padding" id="subscriber">
        <div class="subscriber-area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="subscriber-bg-left" data-parallax='{"x":150}'>
            <img src="img/about/2.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="subscriber-left-content wow fadeIn">
                        <h3>Join the Katoa Team</h3>
                        <h2>Sign up for the Katoa Newsletter</h2>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="subscriber-form wow fadeIn">
                        <p>Enter your Email Address</p>
                      <!--   <form action="#"
                            <input type="email" name="subscriber_email" id="subscriber_email">
                            <button type="submit">Submit</button>
                        </form>
                        -->
                        <form id="mc-form">
                            <label class="mt10" for="mc-email"></label>
                            <input type="email" id="mc-email" placeholder="email@example.com">
                            <button type="submit" class="plus-btn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="contact-form-area">
                        <!-- CONTACT FORM MODAL -->
                        <div class="modal fade" id="contact-form-modal" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Write Your Messge Here</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="contact-form">
                                            <form action="process.php" id="contact-form" method="post">
                                                <div class="form-group" id="name-field">
                                                    <div class="form-input">
                                                        <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Name.." required>
                                                    </div>
                                                </div>
                                                <div class="form-group" id="email-field">
                                                    <div class="form-input">
                                                        <input type="email" class="form-control" id="form-email" name="form-email" placeholder="Email.." required>
                                                    </div>
                                                </div>
                                                <div class="form-group" id="phone-field">
                                                    <div class="form-input">
                                                        <input type="text" class="form-control" id="form-phone" name="form-phone" placeholder="Phone..">
                                                    </div>
                                                </div>
                                                <div class="form-group" id="message-field">
                                                    <div class="form-input">
                                                        <textarea class="form-control" rows="6" id="form-message" name="form-message" placeholder="Your Message Here..." required></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit">Send Message <i class="icofont icofont-paper-plane"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- CONTACT FORM MODAL -->
                    </div>
                </div>
            </div>
        </div>
    </section>