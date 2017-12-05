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
            <?php include 'header.php';  ?>
            <!-- Header Hotel End -->
            <!--Banner Wrap Start-->
            <div class="chr_banner banner-hotel">
                <ul class="slider arrows">
                    <li class="">
                        <!--Banner Thumb START-->
                        <div>
                            <img src="extra-images/bannr1.jpg" alt="Image here">
                            <div class="chr-caption-wrapper">
                                <div class="chr_banner_caption container">
                                    <div class="chr-caption">
                                        <h6 data-animation="fadeInUp" data-delay="0.3s" class="chr-caption-title">Come To Us</h6>
                                        <h6 data-animation="fadeInUp" data-delay="0.5s" class="chr-caption-text">Home Away From Home</h6>
                                        <div data-animation="fadeInUp" data-delay="1s" class="chr-caption-contant">
                                            Book a room at our Hotel now and get a discount of 30%. Fruit basket, soft drinks and cozy bed are waiting for you. We will do everything to make you feel at home.
                                        </div>
                                        <a href="blog-detail.html" data-animation="fadeInLeft" data-delay="1.3s" class="chr-btn fancy-btn">Explore Us</a>
                                        <a href="#" data-animation="fadeInRight" data-delay="1.3s" class="chr-btn fancy-btn">Bok Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Banner Thumb End-->
                    </li>
                    <li class="">
                        <!--Banner Thumb START-->
                        <div>
                            <img src="extra-images/bannr2.jpeg" alt="Image here">
                            <div class="chr-caption-wrapper">
                                <div class="chr_banner_caption container">
                                    <div class="chr-caption">
                                        <h6 data-animation="fadeInUp" data-delay="0.3s" class="chr-caption-title">Come To Us</h6>
                                        <h6 data-animation="fadeInUp" data-delay="0.5s" class="chr-caption-text">Home Away From Home</h6>
                                        <div data-animation="fadeInUp" data-delay="1s" class="chr-caption-contant">
                                            Book a room at our Hotel now and get a discount of 30%. Fruit basket, soft drinks and cozy bed are waiting for you. We will do everything to make you feel at home.
                                        </div>
                                        <a href="blog-detail.html" data-animation="fadeInLeft" data-delay="1.3s" class="chr-btn fancy-btn">Explore Us</a>
                                        <a href="#" data-animation="fadeInRight" data-delay="1.3s" class="chr-btn fancy-btn">Bok Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Banner Thumb End-->
                    </li>
                    <li class="">
                        <!--Banner Thumb START-->
                        <div>
                            <img src="extra-images/banner-03.jpg" alt="Image here">
                            <div class="chr-caption-wrapper">
                                <div class="chr_banner_caption container">
                                    <div class="chr-caption">
                                        <h6 data-animation="fadeInUp" data-delay="0.3s" class="chr-caption-title">Come To Us</h6>
                                        <h6 data-animation="fadeInUp" data-delay="0.5s" class="chr-caption-text">Home Away From Home</h6>
                                        <div data-animation="fadeInUp" data-delay="1s" class="chr-caption-contant">
                                            Book a room at our Hotel now and get a discount of 30%. Fruit basket, soft drinks and cozy bed are waiting for you. We will do everything to make you feel at home.
                                        </div>
                                        <a href="blog-detail.html" data-animation="fadeInLeft" data-delay="1.3s" class="chr-btn fancy-btn">Explore Us</a>
                                        <a href="#" data-animation="fadeInRight" data-delay="1.3s" class="chr-btn fancy-btn">Bok Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Banner Thumb End-->
                    </li>
                </ul>
                <!--Widget Booking Start-->
                <div class="widget widget-booking">
                    <div class="booking-form">
                        <!--Title Start-->
                        <h5 class="title">Room Booking</h5>
                        <!--Title End-->
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <!--Input Field Start-->
                                    <div class="input-field">
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                    <!--Input Field End-->
                                </div>
                                <div class="col-md-6">
                                    <!--Input Field Start-->
                                    <div class="input-field">
                                        <div class="rq-check-inout-wrapper rq-check-in-wrapper" id="rq-check-in-single">
                                            <div class="rq-check-inout-single-wrapper">
                                                <span class="rq-single-date">24</span>
                                                <span class="rq-month-year">
                                                    <span class="rq-single-month"></span>
                                                </span>
                                                <input type="hidden" name="date_in" />
                                            </div>
                                        </div>
                                    </div>
                                    <!--Input Field End-->
                                </div>
                                <div class="col-md-6">
                                    <!--Input Field Start-->
                                    <div class="input-field">
                                        <div class="rq-check-inout-wrapper rq-check-in-wrapper" id="rq-check-out-single">
                                            <div class="rq-check-inout-single-wrapper">
                                                <span class="rq-single-date">24</span>
                                                <span class="rq-month-year">
                                                    <span class="rq-single-month">sep</span>
                                                </span>
                                                <input type="hidden" name="date_out" />
                                            </div>
                                        </div>
                                    </div>
                                    <!--Input Field End-->
                                </div>
                                <div class="col-md-6">
                                    <!--Input Field Start-->
                                    <div class="input-field">
                                        <!-- TIME WRAP START-->
                                        <div title="check in" class="time_picker">
                                            <input id="rq-check-in-time" class="timepicker" placeholder="Time" name="time_in" />
                                        </div>
                                        <!--TIME WRAP END-->
                                    </div>
                                    <!--Input Field End-->
                                </div>
                                <div class="col-md-6">
                                    <!--Input Field Start-->
                                    <div class="input-field">
                                        <!-- TIME WRAP START-->
                                        <div title="check out" class="time_picker">
                                            <input id="rq-check-out-time" class="timepicker" placeholder="Time" name="time_out" />
                                        </div>
                                        <!--TIME WRAP END-->
                                    </div>
                                    <!--Input Field End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Input Field Start-->
                                    <div class="input-field">
                                        <select>
                                            <option value="">1 adult 1 room</option>
                                            <option value="aye">3 adult 1 room</option>
                                            <option value="eh">5 adult 2 room</option>
                                            <option value="ooh">8 adult 2 room</option>
                                            <option value="whoop">10 adult 3 room</option>
                                        </select>
                                    </div>
                                    <!--Input Field End-->
                                </div>
                            </div>
                            <!--Input Field Start-->
                            <div class="input-field">
                                <input class="chr-btn" type="submit" value="Check Availability">
                            </div>
                            <!--Input Field End-->
                        </form>
                    </div>
                </div>
                <!--Widget Booking End-->
            </div>
            <!--Banner Wrap End-->
            <div class="main-contant">
                <!--Offers Section Start-->
                <section>
                  <div class="container">
                    <div class="headind-1 text-center">
                        <h3 class="title">Alhind Calicut tower</h3>

                    </div>
                    <p style="text-align:center">Enjoy the time you spend at Hotel Asma Towers, Calicut. The hotel situated strategically at the heart of the city aims to please its patrons providing luxury and elegance. <br>
The hotel strives to meet up with the demands of its esteemed guests to the best of their abilities. It is said to be the most cost effective business hotel, with all facilities available within the reach of your hands. <br>
Reaching the malls or bus- stand does not take up much time for people staying, here.
Cosiness and simplicity are mixed to maintain the balance that makes up the ambience of the restaurant.
Scrumptious and mouth-watering food awaits one and all, who wish to dine here. Multi-cuisine restaurant offers the customers a plethora of food ranging from continental to Chinese and Indian.<br>
Since its overhaul that happened a few years back, the hotel provides its guests with extensive up to date services. The hotel believes in innovation as the stepping stone to making niche for itself amongst the people.
Catering to the exceeding demand, the Hotel makes way for top-notch amenities including Wi-Fi Internet access to the entire rooms, LCD TVs playing international channels and so on.<br>
Direct dialling facility, bath tubs in the bath room and such facilities are also offered at the hotel, thus making the stay there an awesome experience for one and all in a family. Hot water is available 24hours catering to the demands of the guests.
The complimentary breakfast offered with the typical Kerala food is simply delicious. The hotel as well offers options for the guests to choose between the executive and standard rooms at a fixed tariff.<br>
Not to be outdone, the hotel also has a Gym and Health Club, outfitting the work out requirements of all and making the hotel a wonderful place to spend some time with pleasure. The abundant grounds to park the vehicles also attract a hoard of customers to the hotel. The hotel thus strives to reach the excellence in hospitality.</p>

                  </div>
                </section>
                <section>
                    <div class="container">
                        <!--Heading 1 Start-->
                        <div class="headind-1 text-center">
                            <h3 class="title">Our Rooms</h3>
                        </div>
                        <!--Heading 1 End-->
                        <div class="chr-roomslider arrows">
                            <!--Room Thumb Start-->
                            <div class="col-md-4 col-sm-6">
                                <div class="chr-room-thumb fancy-thumb">
                                    <figure>
                                        <img src="extra-images/room1.jpg" alt="">
                                        <a href="#" class="price-tag th-bg">$ 100</a>
                                    </figure>
                                    <div class="text">
                                        <h5 class="title"><a href="#">Traditional Guest Room</a></h5>
                                        <p>Lorem Ipsum which looks many web sites pass websites is there fore always.</p>
                                        <ul class="blog-meta">
                                            <li><i class="fa fa-bed th-cl"></i><span>2 Bed</span></li>
                                            <li><i class="fa fa-user th-cl"></i><span>4 Sleeps</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Room Thumb End-->
                            <!--Room Thumb Start-->
                            <div class="col-md-4 col-sm-6">
                                <div class="chr-room-thumb fancy-thumb">
                                    <figure>
                                        <img src="extra-images/room2.jpg" alt="">
                                        <a href="#" class="price-tag th-bg">$ 200</a>
                                    </figure>
                                    <div class="text">
                                        <h5 class="title"><a href="#">Traditional Guest Room</a></h5>
                                        <p>Lorem Ipsum which looks many web sites pass websites is there fore always.</p>
                                        <ul class="blog-meta">
                                            <li><i class="fa fa-bed th-cl"></i><span>2 Bed</span></li>
                                            <li><i class="fa fa-user th-cl"></i><span>4 Sleeps</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Room Thumb End-->
                            <!--Room Thumb Start-->
                            <div class="col-md-4 col-sm-6">
                                <div class="chr-room-thumb fancy-thumb">
                                    <figure>
                                        <img src="extra-images/room3.jpg" alt="">
                                        <a href="#" class="price-tag th-bg">$ 250</a>
                                    </figure>
                                    <div class="text">
                                        <h5 class="title"><a href="#">Traditional Guest Room</a></h5>
                                        <p>Lorem Ipsum which looks many web sites pass websites is there fore always.</p>
                                        <ul class="blog-meta">
                                            <li><i class="fa fa-bed th-cl"></i><span>2 Bed</span></li>
                                            <li><i class="fa fa-user th-cl"></i><span>4 Sleeps</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Room Thumb End-->
                            <!--Room Thumb Start-->
                            <div class="col-md-4 col-sm-6">
                                <div class="chr-room-thumb fancy-thumb">
                                    <figure>
                                        <img src="extra-images/room4.jpg" alt="">
                                        <a href="#" class="price-tag th-bg">$ 350</a>
                                    </figure>
                                    <div class="text">
                                        <h5 class="title"><a href="#">Deluxe Guest Room</a></h5>
                                        <p>Lorem Ipsum which looks many web sites pass websites is there fore always.</p>
                                        <ul class="blog-meta">
                                            <li><i class="fa fa-bed th-cl"></i><span>2 Bed</span></li>
                                            <li><i class="fa fa-user th-cl"></i><span>4 Sleeps</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Room Thumb End-->
                        </div>
                    </div>
                </section>

                <!--Offers Section End-->
                <!--Services Tabs Section Start-->
                <section class="services-bg">
                    <div class="container">
                        <!--Heading 1 Start-->
                        <div class="headind-1 white text-center">
                            <h3 class="title">Our Services</h3>
                        </div>
                        <!--Heading 1 End-->
                        <div class="chr-main-services">
                            <!-- Nav tabs Start -->
                            <ul class="main-services-tab" role="tablist">
                                <li class="active" role="presentation"><a href="#spa" aria-controls="spa" role="tab" data-toggle="tab">Pick n drop</a></li>
                                <li role="presentation"><a href="#gym" aria-controls="gym" role="tab" data-toggle="tab">forex</a></li>
                                <li role="presentation"><a href="#restaurante" aria-controls="restaurante" role="tab" data-toggle="tab">tour packages</a></li>
                                <li role="presentation"><a href="#animate" aria-controls="animate" role="tab" data-toggle="tab">tickets</a></li>
                            </ul>
                            <!-- Nav tabs End -->
                            <!-- Tab panes Start -->
                            <div class="tab-content">
                                <!-- Tabs Panel Start -->
                                <div role="tabpanel" class="tab-pane active" id="spa">
                                    <!--About Us Inner Wrap Start-->
                                    <div class="chr-about-wrap">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <figure class="fancy-btn">
                                                    <img src="extra-images/pickndrop.jpg" alt="Oscar Themes">
                                                </figure>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="text">
                                                    <h4 class="title">Pick n drop</h4>
                                                    <p>Lorem ipsum dolor sit amet, maiestatis scriptorem at duo, mei ne porro pertinacia repudiandae. Nisl possim delicata nam et, saepe gubergren sed eu. Regione detracto petentium qui id. Ut nusquam recusabo eos, justo accusam sea et. Nostro commune.</p>
                                                    <ul class="chr-sr-list">
                                                        <li>Waterbom Bali</li>
                                                        <li>Tracking Experience</li>
                                                        <li>Mayong Village </li>
                                                        <li>Sekumpul Waterfalls</li>
                                                        <li>Ujung Water Palace</li>
                                                        <li>Tirta Gangga</li>
                                                        <li>Scuba & Snorkeling</li>
                                                        <li>Boat Tours</li>
                                                    </ul>
                                                    <a href="#" class="chr-btn fancy-btn">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--About Us Inner Wrap End-->
                                </div>
                                <!-- Tabs Panel End -->
                                <!-- Tabs Panel Start -->
                                <div role="tabpanel" class="tab-pane" id="gym">
                                    <!--About Us Inner Wrap Start-->
                                    <div class="chr-about-wrap">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <figure class="fancy-btn">
                                                    <img src="extra-images/forex.jpg" alt="Oscar Themes">
                                                </figure>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="text">
                                                    <h4 class="title">forex</h4>
                                                    <p>Lorem ipsum dolor sit amet, maiestatis scriptorem at duo, mei ne porro pertinacia repudiandae. Nisl possim delicata nam et, saepe gubergren sed eu. Regione detracto petentium qui id. Ut nusquam recusabo eos, justo accusam sea et. Nostro commune. </p>
                                                    <ul class="chr-sr-list">
                                                        <li>Waterbom Bali</li>
                                                        <li>Tracking Experience</li>
                                                        <li>Mayong Village </li>
                                                        <li>Sekumpul Waterfalls</li>
                                                        <li>Ujung Water Palace</li>
                                                        <li>Tirta Gangga</li>
                                                        <li>Scuba & Snorkeling</li>
                                                        <li>Boat Tours</li>
                                                    </ul>
                                                    <a href="#" class="chr-btn fancy-btn">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--About Us Inner Wrap End-->
                                </div>
                                <!-- Tabs Panel End -->
                                <!-- Tabs Panel Start -->
                                <div role="tabpanel" class="tab-pane" id="restaurante">
                                    <!--About Us Inner Wrap Start-->
                                    <div class="chr-about-wrap">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <figure class="fancy-btn">
                                                    <img src="extra-images/tour.jpg" alt="Oscar Themes">
                                                </figure>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="text">
                                                    <h4 class="title">Tour Pakags</h4>
                                                    <p>Lorem ipsum dolor sit amet, maiestatis scriptorem at duo, mei ne porro pertinacia repudiandae. Nisl possim delicata nam et, saepe gubergren sed eu. Regione detracto petentium qui id. Ut nusquam recusabo eos, justo accusam sea et. Nostro commune.</p>
                                                    <ul class="chr-sr-list">
                                                        <li>Waterbom Bali</li>
                                                        <li>Tracking Experience</li>
                                                        <li>Mayong Village </li>
                                                        <li>Sekumpul Waterfalls</li>
                                                        <li>Ujung Water Palace</li>
                                                        <li>Tirta Gangga</li>
                                                        <li>Scuba & Snorkeling</li>
                                                        <li>Boat Tours</li>
                                                    </ul>
                                                    <a href="#" class="chr-btn fancy-btn">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--About Us Inner Wrap End-->
                                </div>
                                <!-- Tabs Panel End -->
                                <!-- Tabs Panel Start -->
                                <div role="tabpanel" class="tab-pane" id="animate">
                                    <!-- Aminities List Start -->
                                    <ul class="aminities-list">
                                        <li>
                                            <!-- Aminities Thumb Start -->
                                            <div class="aminities-thumb">
                                                <span class="chricon-transport-1">
                                                    <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span><span class="path29"></span>
                                                </span>
                                                <h6>Master Bed Room</h6>
                                            </div>
                                            <!-- Aminities Thumb End -->
                                        </li>
                                        <li>
                                            <!-- Aminities Thumb Start -->
                                            <div class="aminities-thumb">
                                                <span class="chricon-transport-1">
                                                    <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span><span class="path29"></span>
                                                </span>
                                                <h6>Pick & Drop Service</h6>
                                            </div>
                                            <!-- Aminities Thumb End -->
                                        </li>
                                        <li>
                                            <!-- Aminities Thumb Start -->
                                            <div class="aminities-thumb">
                                                <span class="chricon-transport-1">
                                                    <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span><span class="path29"></span>
                                                </span>
                                                <h6>ATM Available</h6>
                                            </div>
                                            <!-- Aminities Thumb End -->
                                        </li>
                                        <li>
                                            <!-- Aminities Thumb Start -->
                                            <div class="aminities-thumb">
                                                <span class="chricon-transport-1">
                                                    <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span><span class="path29"></span>
                                                </span>
                                                <h6>Sea View Balcony</h6>
                                            </div>
                                            <!-- Aminities Thumb End -->
                                        </li>
                                        <li>
                                            <!-- Aminities Thumb Start -->
                                            <div class="aminities-thumb">
                                                <span class="chricon-transport-1">
                                                    <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span><span class="path29"></span>
                                                </span>
                                                <h6>Tasty Restaurant</h6>
                                            </div>
                                            <!-- Aminities Thumb End -->
                                        </li>
                                        <li>
                                            <!-- Aminities Thumb Start -->
                                            <div class="aminities-thumb">
                                                <span class="chricon-transport-1">
                                                    <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span><span class="path29"></span>
                                                </span>
                                                <h6>Free Wifi</h6>
                                            </div>
                                            <!-- Aminities Thumb End -->
                                        </li>
                                        <li>
                                            <!-- Aminities Thumb Start -->
                                            <div class="aminities-thumb">
                                                <span class="chricon-transport-1">
                                                    <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span><span class="path29"></span>
                                                </span>
                                                <h6>Pets Allowed</h6>
                                            </div>
                                            <!-- Aminities Thumb End -->
                                        </li>
                                        <li>
                                            <!-- Aminities Thumb Start -->
                                            <div class="aminities-thumb">
                                                <span class="chricon-transport-1">
                                                    <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span><span class="path29"></span>
                                                </span>
                                                <h6>24 / 7 Room Service</h6>
                                            </div>
                                            <!-- Aminities Thumb End -->
                                        </li>
                                    </ul>
                                    <!-- Aminities List End -->
                                </div>
                                <!-- Tabs Panel End -->
                            </div>
                            <!-- Tab panes End -->
                        </div>
                    </div>
                </section>
                <!--Services Tabs Section End-->
                <!--Staff Section Start-->
                <section>
                    <div class="container">
                        <!--Heading 1 Start-->
                        <div class="headind-1 text-center">
                            <h3 class="title">Our Special Offers</h3>
                        </div>
                        <!--Heading 1 End-->
                        <div class="row">
                            <ul class="port-grid masonry clearfix items-grid">
                                <!-- Event Thum Start -->
                                <li class="port-item col-md-4 col-sm-6">
                                    <div class="fancy-effect">
                                        <a href="#" class="chr-event-thumb fancy-thumb">
                                            <figure>
                                                <img src="extra-images/pkg-img1.jpg" alt="Oscar Themes">
                                            </figure>
                                            <div class="text p-middel">
                                                <p>Wedding Offer  </p>
                                                <h3 class="th-cl">60% <sup>off</sup></h3>
                                                <p>Book Advanced & Save </p>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <!-- Event Thum End -->
                                <!-- Event Thum Start -->
                                <li class="port-item col-md-4 col-sm-6">
                                    <div class="fancy-effect">
                                        <a href="#" class="chr-event-thumb fancy-thumb">
                                            <figure>
                                                <img src="extra-images/pkg-img2.jpg" alt="Oscar Themes">
                                            </figure>
                                            <div class="text p-middel">
                                                <p>Happy Family Offer  </p>
                                                <h3 class="th-cl">30% <sup>off</sup></h3>
                                                <p>Book Advanced & Save </p>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <!-- Event Thum End -->
                                <!-- Event Thum Start -->
                                <li class="port-item col-md-4 col-sm-6">
                                    <div class="fancy-effect">
                                        <a href="#" class="chr-event-thumb fancy-thumb event-arrived">
                                            <figure>
                                                <img src="extra-images/pkg-img3.jpg" alt="Oscar Themes">
                                            </figure>
                                            <div class="text p-middel">
                                                <h3>Refresh Your Mind</h3>
                                                <p>Lorem Ipsum is simply dummy text of the printing and is the best inisistin typesetting industry. Lorem Ipsum has been ..</p>
                                                <h3>Start 08 : 30  p. m</h3>
                                            </div>
                                            <div class="event-ticket-link th-bg"><em>Entrance</em><span>$50</span></div>
                                        </a>
                                    </div>
                                </li>
                                <!-- Event Thum End -->
                                <!-- Event Thum Start -->
                                <li class="port-item col-md-4 col-sm-6">
                                    <div class="fancy-effect">
                                        <a href="#" class="chr-event-thumb fancy-thumb">
                                            <figure>
                                                <img src="extra-images/pkg-img4.jpg" alt="Oscar Themes">
                                            </figure>
                                            <div class="text p-middel">
                                                <p>Groups & Entertainment</p>
                                                <h3 class="th-cl">40% <sup>off</sup></h3>
                                                <p>Book Advanced & Save </p>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <!-- Event Thum End -->
                                <!-- Event Thum Start -->
                                <li class="port-item col-md-4 col-sm-6">
                                    <div class="fancy-effect">
                                        <a href="#" class="chr-event-thumb fancy-thumb">
                                            <figure>
                                                <img src="extra-images/pkg-img5.jpg" alt="Oscar Themes">
                                            </figure>
                                            <div class="text p-middel">
                                                <p>Buffet & Restaurant</p>
                                                <h3 class="th-cl">35% <sup>off</sup></h3>
                                                <p>Book Advanced & Save </p>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <!-- Event Thum End -->
                            </ul>
                        </div>
                    </div>
                </section>
                <!--Staff Section End-->

                <!--Rooms Section Start-->

                <!--Rooms Section End-->
                <!--Masonry Gallery Section Start-->
                <section class="gray-bg">
                    <!--Heading 1 Start-->
                    <div class="headind-1 text-center">
                        <h3 class="title">Our Gallery</h3>
                    </div>
                    <!--Heading 1 End-->
                    <!--Gallery Navigation Start-->
                    <ul class="port-filter text-center">
                        <li>
                            <a href="#" class="filter active" data-filter="*">All Projects</a>
                        </li>
                        <li>
                            <a href="#" class="filter" data-filter=".gym">gym</a>
                        </li>
                        <li>
                            <a href="#" class="filter" data-filter=".spa">spa</a>
                        </li>
                        <li>
                            <a href="#" class="filter" data-filter=".hotel">hotel</a>
                        </li>
                    </ul>
                    <!--Gallery Navigation End-->
                    <!--Gallery Grid Start-->
                    <ul class="port-grid padding5 masonry clearfix" id="items-grid2">
                        <!--Masonry Item Start-->
                        <li class="port-item col-md-3 col-sm-3 mix spa hotel gym">
                            <!--Gallary Thumb Strat-->
                            <div class="gallary-thumb">
                                <div class="fancy-thumb">
                                    <figure>
                                        <img src="extra-images/room4.jpg" alt="">
                                    </figure>
                                    <div class="zoom-icon p-middel">
                                        <a data-rel="prettyphoto[]" href="extra-images/room4.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--Gallary Thumb End-->
                        </li>
                        <!--Masonry Item End -->
                        <!--Masonry Item Start-->
                        <li class="port-item col-md-3 col-sm-3 mix hotel">
                            <!--Gallary Thumb Strat-->
                            <div class="gallary-thumb">
                                <div class="fancy-thumb">
                                    <figure>
                                        <img src="extra-images/room1.jpg" alt="">
                                    </figure>
                                    <div class="zoom-icon p-middel">
                                        <a data-rel="prettyphoto[]" href="extra-images/room1.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--Gallary Thumb End-->
                        </li>
                        <!--Masonry Item End -->
                        <!--Masonry Item Start-->
                        <li class="port-item col-md-3 col-sm-3 mix hotel gym">
                            <!--Gallary Thumb Strat-->
                            <div class="gallary-thumb">
                                <div class="fancy-thumb">
                                    <figure>
                                        <img src="extra-images/room2.jpg" alt="">
                                    </figure>
                                    <div class="zoom-icon p-middel">
                                        <a data-rel="prettyphoto[]" href="extra-images/room2.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--Gallary Thumb End-->
                        </li>
                        <!--Masonry Item End -->
                        <!--Masonry Item Start-->
                        <li class="port-item col-md-3 col-sm-3 mix spa gym">
                            <!--Gallary Thumb Strat-->
                            <div class="gallary-thumb">
                                <div class="fancy-thumb">
                                    <figure>
                                        <img src="extra-images/room3.jpg" alt="">
                                    </figure>
                                    <div class="zoom-icon p-middel">
                                        <a data-rel="prettyphoto[]" href="extra-images/mgallary-img4.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--Gallary Thumb End-->
                        </li>
                        <!--Masonry Item End -->
                        <!--Masonry Item Start-->
                        <li class="port-item col-md-3 col-sm-3 mix hotel spa gym">
                            <!--Gallary Thumb Strat-->
                            <div class="gallary-thumb">
                                <div class="fancy-thumb">
                                    <figure>
                                        <img src="extra-images/outside1.jpg" alt="">
                                    </figure>
                                    <div class="zoom-icon p-middel">
                                        <a data-rel="prettyphoto[]" href="extra-images/outside1.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--Gallary Thumb End-->
                        </li>
                        <!--Masonry Item End -->
                        <!--Masonry Item Start-->
                        <li class="port-item col-md-3 col-sm-3 mix spa hotel">
                            <!--Gallary Thumb Strat-->
                            <div class="gallary-thumb">
                                <div class="fancy-thumb">
                                    <figure>
                                        <img src="extra-images/outside2.jpg" alt="">
                                    </figure>
                                    <div class="zoom-icon p-middel">
                                        <a data-rel="prettyphoto[]" href="extra-images/outside2.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--Gallary Thumb End-->
                        </li>
                        <li class="port-item col-md-3 col-sm-3 mix spa hotel">
                            <!--Gallary Thumb Strat-->
                            <div class="gallary-thumb">
                                <div class="fancy-thumb">
                                    <figure>
                                        <img src="extra-images/room4.jpg" alt="">
                                    </figure>
                                    <div class="zoom-icon p-middel">
                                        <a data-rel="prettyphoto[]" href="extra-images/room2.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--Gallary Thumb End-->
                        </li>
                        <li class="port-item col-md-3 col-sm-3 mix spa hotel">
                            <!--Gallary Thumb Strat-->
                            <div class="gallary-thumb">
                                <div class="fancy-thumb">
                                    <figure>
                                        <img src="extra-images/room2.jpg" alt="">
                                    </figure>
                                    <div class="zoom-icon p-middel">
                                        <a data-rel="prettyphoto[]" href="extra-images/room4.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--Gallary Thumb End-->
                        </li>
                        <!--Masonry Item End -->
                    </ul>
                    <!--Gallery Grid End-->
                </section>
                <!--Masonry Gallery Section End-->

                <!--Price Section Start-->

                <!--Price Section End-->
                <!--Brand Slider Start-->
                <!-- <div class="brnd-slider-wrap ">
                    <div class="container">
                        <div class="brnd-slider">
                            <div>
                                <a href="#" class="thumb">
                                    <img src="extra-images/brand1.png" alt="">
                                </a>
                            </div>
                            <div>
                                <a href="#" class="thumb">
                                    <img src="extra-images/brand2.png" alt="">
                                </a>
                            </div>
                            <div>
                                <a href="#" class="thumb">
                                    <img src="extra-images/brand3.png" alt="">
                                </a>
                            </div>
                            <div>
                                <a href="#" class="thumb">
                                    <img src="extra-images/brand4.png" alt="">
                                </a>
                            </div>
                            <div>
                                <a href="#" class="thumb">
                                    <img src="extra-images/brand5.png" alt="">
                                </a>
                            </div>
                            <div>
                                <a href="#" class="thumb">
                                    <img src="extra-images/brand6.png" alt="">
                                </a>
                            </div>
                            <div>
                                <a href="#" class="thumb">
                                    <img src="extra-images/brand1.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--Brand Slider End-->
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
