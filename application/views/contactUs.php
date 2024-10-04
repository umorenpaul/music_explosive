    <!-- Start header section -->

    <!-- Start page-top-banner section -->
    <section class="page-top-banner section-gap-full relative" data-stellar-background-ratio="0.5">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row section-gap-half">
                <div class="col-lg-12 text-center">
                    <h1><?php echo $page_title?></h1>
                    <h4>Drop us Some Line</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- End about-top-banner section -->

    <!-- Start contact section -->
    <section class="contact-section contact-page-section padding-top-120" id="contact-section">
        <div class="container">
            <div class="row address-wrap justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6 single-address-col">
                    <div class="div">
                        <i class="ti ti-mobile"></i>
                        <p>
                            +234-80180086070
                            <br>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 single-address-col">
                    <div class="div">
                        <i class="ti ti-map-alt"></i>
                        <p>
                            Corporate Headquarters: Emori Village, Okuni, Ikom Local Government Area, Cross River State, Nigeria.
                            <br>Paris Office: 100 Rue Des Cite?, POBOX 93300, AUBERVILLIERS
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 single-address-col">
                    <div class="div">
                        <i class="ti ti-email"></i>
                        <p>
                            info@musicexplosive.com
                            <br> contact_mx@gmail.com
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center form-row">
                <div class="col-lg-9">
                    <form id="contact-form"  action="contact.php" method="post" >
                        <div class="row contact-form-wrap justify-content-center">
                            <div class="col-md-6 contact-name form-col">
                                <input name="name" id="name" class="form-control" type="text" placeholder="Name*"
                                    onfocus="this.placeholder=''" onblur="this.placeholder='Name*'">
                            </div>
                            <div class="col-md-6 contact-email form-col">
                                <input name="mail" id="mail" class="form-control" type="email" placeholder="E-mail*"
                                    onfocus="this.placeholder=''" onblur="this.placeholder='Email*'">
                            </div>
                            <div class="col-lg-12">
                                <textarea name="comment" id="comment" class="form-control" rows="8" placeholder="Message"
                                    onfocus="this.placeholder=''" onblur="this.placeholder='Message*'"></textarea>
                            </div>
                            <input type="submit" class="primary-btn" value="Send Message" id="submit-message">
                            <div id="msg" class="message"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End contact section -->

  

