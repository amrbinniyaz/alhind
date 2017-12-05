<!DOCTYPE html>
<html lang="en">

  <?php include 'head.php'; ?>
    <body>
        <!-- LOADER -->
        <div id="loader-overflow">
          <div id="loader3" class="loader-cont">Please enable JS</div>
        </div>
        <div class="chr-wrapper">
            <!-- Header Hotel Start -->
            <?php include 'header.php'; ?>
            <!-- Header Hotel End -->
            <!--Banner Wrap Start-->
            <div class="chr_banner chr-sub-banner text-center">
                <div class="container">
                    <h5>Contact Us</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Contact Us</li>
                    </ol>
                </div>
            </div>
            <!--Banner Wrap End-->
            <div class="main-contant">
                <div class="chr-map">
                    <div id="map-canvas"></div>
                </div>
                <!--Contact Us Section Start-->
                <section class="chr-contact-wrap">
                    <div class="container">
                        <!--Contact Wrap Start-->
                        <div class="row">
                            <!--Contact Thumb Start-->
                            <div class="col-md-4 col-sm-4">
                                <div class="chr-contact-thumb">
                                    <i class="fa fa-map-marker"></i>
                                    <h5 class="title">Address</h5>
                                    <p>Gulberg 3 , Walton Road , Usa</p>
                                </div>
                            </div>
                            <!--Contact Wrap End-->
                            <!--Contact Thumb Start-->
                            <div class="col-md-4 col-sm-4">
                                <div class="chr-contact-thumb">
                                    <i class="fa fa-phone"></i>
                                    <h5 class="title">Phone</h5>
                                    <p>+1 - 99 - 1234567</p>
                                </div>
                            </div>
                            <!--Contact Wrap End-->
                            <!--Contact Thumb Start-->
                            <div class="col-md-4 col-sm-4">
                                <div class="chr-contact-thumb">
                                    <i class="fa fa-envelope"></i>
                                    <h5 class="title">Email</h5>
                                    <p>info@alhind.com</p>
                                </div>
                            </div>
                            <!--Contact Wrap End-->
                        </div>
                        <!--Contact Wrap End-->
                    </div>
                </section>
                <!--Contact Us Section End-->
                <section class="gray-bg">
                    <div class="container">
                        <div class="contact-form">
                            <!--Heading 1 Start-->
                            <div class="headind-1 text-center">
                                <h3 class="title">Get In Touch</h3>
                            </div>
                            <!--Heading 1 End-->
                            <form id="contact-form" action="http://iqoniqthemes.com/html/jasminehotel/php/contact-form.php" method="POST">
                                <!--Divider Start-->
                                <div class="input-divider row">
                                    <div class="col-md-4 col-sm-4">
                                        <!--Input Field Start-->
                                        <div class="input-field">
                                            <input type="text" value="" data-msg-required="Please enter your name" maxlength="100" class="form-control " name="name" id="name" placeholder="Your Name" required>
                                        </div>
                                        <!--Input Field End-->
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <!--Input Field Start-->
                                        <div class="input-field">
                                            <input type="email" value="" data-msg-required="Please enter your email address" data-msg-email="Please enter a valid email address" maxlength="100" class="form-control " name="email" id="email" placeholder="Your Email" required>
                                        </div>
                                        <!--Input Field End-->
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <!--Input Field Start-->
                                        <div class="input-field">
                                            <input type="text" value="" data-msg-required="Please enter subject" maxlength="100" class="form-control " name="subject" id="subject" placeholder="Subject" required>
                                        </div>
                                        <!--Input Field End-->
                                    </div>
                                </div>
                                <!--Divider End-->
                                <!--Input Field Start-->
                                <div class="input-field">
                                    <textarea maxlength="5000" data-msg-required="Please enter your message" rows="4" class="form-control " name="message" id="message" placeholder="Your Message" required></textarea>
                                </div>
                                <!--Input Field End-->
                                <!--Input Field Start-->
                                <div class="input-field text-center">
                                    <input type="submit" value="SEND MESSAGE" class="button medium rounded gray font-open-sans mt-40" data-loading-text="Loading...">
                                </div>
                                <!--Input Field End-->
                                <div class="alert alert-success hidden animated pulse" id="contactSuccess">
                                    Thanks, your message has been sent to us.
                                </div>
                                <div class="alert alert-danger hidden animated shake" id="contactError">
                                    <strong>Error!</strong> There was an error sending your message.
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
            <!--News Letter Wrap Start-->
            <section class="news-letter">
                <div class="container">
                    <div class="js flex-text">
                        <h4 class="title">news letter</h4>
                        <!--Input Field Start-->
                        <div class="input-field">
                            <div id="mc_embed_signup" class="nl-form-container clearfix">
                                <form action="https://twitter.us16.list-manage.com/subscribe/post-json?u=c768d55d7a9fca1c581bc5614&amp;id=6db56c6523&amp;c=?" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletterform validate" target="_blank" novalidate>
                                    <input type="email" value="" name="EMAIL" class="email nl-email-input" id="mce-EMAIL" placeholder="Email address" required>
                                    <div style="position: absolute; left: -5000px;">
                                        <input type="text" name="b_ba37086d08bdc9f56f3592af0_e38247f7cc" tabindex="-1" value="">
                                    </div>
                                    <label class="search_icon"><input id="mc-embedded-subscribe" type="submit" name="subscribe" value=""></label>
                                </form>
                                <div id="notification_container"></div>
                            </div>
                        </div>
                        <!--Input Field End-->
                    </div>
                </div>
            </section>
            <!--News Letter Wrap End-->
            <!--Hotel Footer Start-->
          <?php include 'footer.php'; ?>
