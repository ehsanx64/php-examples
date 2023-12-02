<?php
$phplib = new controllers\PhplibController();
$phplibTranslateContent = $phplib->testTranslateContent();
?>
<?php /* --dis--
    <section class="main-section" id="overview">
        <div class="container">
            <h2>Overview</h2>
            <h6>Sample sources, tools and respective tests</h6>
            <div class="row">
                <div class="col-xs-12 wow fadeInLeft delay-05s">
                    <div class="service-list">
                        <div class="service-list-col1">
                            <i class="fa fa-paw"></i>
                        </div>
                        <div class="service-list-col2">
                            <h3>branding &amp; identity</h3>
                            <p>Proin iaculis purus digni consequat sem digni ssim. Donec entum digni ssim.</p>
                        </div>
                    </div>
                    <div class="service-list">
                        <div class="service-list-col1">
                            <i class="fa fa-gear"></i>
                        </div>
                        <div class="service-list-col2">
                            <h3>web development</h3>
                            <p>Proin iaculis purus consequat sem digni ssim. Digni ssim porttitora .</p>
                        </div>
                    </div>
                    <div class="service-list">
                        <div class="service-list-col1">
                            <i class="fa fa-apple"></i>
                        </div>
                        <div class="service-list-col2">
                            <h3>mobile design</h3>
                            <p>Proin iaculis purus consequat digni sem digni ssim. Purus donec porttitora entum.</p>
                        </div>
                    </div>
                    <div class="service-list">
                        <div class="service-list-col1">
                            <i class="fa fa-medkit"></i>
                        </div>
                        <div class="service-list-col2">
                            <h3>24/7 Support</h3>
                            <p>Proin iaculis purus consequat sem digni ssim. Sem porttitora entum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    --/dis */ ?>

<section class="main-section" id="php">
    <div class="container">
        <h2>PHP</h2>
        <h6>PHP Language and Built-In Libraries</h6>
        <div class="row">
            <div class="col-xs-12 wow fadeInLeft delay-05s tabs-wrapper">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a data-toggle="tab" href="#php-arrays">Arrays</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="php-arrays" class="tab-pane active">
                        <div class="row">
                            <div class="col-xs-12">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-section" id="phplib">
    <div class="container">
        <h2>phplib</h2>
        <h6>General Purpose PHP Library</h6>
        <div class="row">
            <div class="col-xs-12 wow fadeInLeft delay-05s tabs-wrapper">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a data-toggle="tab" href="#phplib-date">Date</a>
                    </li>
                    <li role="presentation">
                        <a data-toggle="tab" href="#phplib-translate">Translate</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="phplib-date" class="tab-pane active">
                        <div class="row">
                            <div class="col-xs-12">
                            </div>
                        </div>
                    </div>
                    <div id="phplib-translate" class="tab-pane">
                        <div class="row">
                            <div class="col-xs-12">
                                <?= $phplibTranslateContent; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-section" id="tools">
    <div class="container">
        <h2>Tools</h2>
        <h6>Tests related to 3rd-party PHP tools and/or libraries</h6>
        <div class="row">
            <div class="col-xs-12 wow fadeInLeft delay-05s">
            </div>
        </div>
    </div>
</section>

<?php /* --dis--
	<section class="business-talking">
		<!--business-talking-start-->
		<div class="container">
			<h2>Let’s Talk Business.</h2>
		</div>
	</section>
    --/dis */ ?>

<?php /* --dis--
	<!--business-talking-end-->
	<div class="container">
		<section class="main-section contact" id="contact">

			<div class="row">
				<div class="col-lg-6 col-sm-7 wow fadeInLeft">
					<div class="contact-info-box address clearfix">
						<h3><i class=" icon-map-marker"></i>Address:</h3>
						<span>308 Negra Arroyo Lane<br>Albuquerque, New Mexico, 87111.</span>
					</div>
					<div class="contact-info-box phone clearfix">
						<h3><i class="fa fa-phone"></i>Phone:</h3>
						<span>1-800-BOO-YAHH</span>
					</div>
					<div class="contact-info-box email clearfix">
						<h3><i class="fa fa-pencil"></i>email:</h3>
						<span>hello@knightstudios.com</span>
					</div>
					<div class="contact-info-box hours clearfix">
						<h3><i class="fa fa-clock-o"></i>Hours:</h3>
						<span><strong>Monday - Thursday:</strong> 10am - 6pm<br><strong>Friday:</strong> People work on Fridays now?<br><strong>Saturday - Sunday:</strong> Best not to ask.</span>
					</div>
					<ul class="social-link">
						<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
						<li class="gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
					</ul>
				</div>
				<div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
					<div class="form">

						<div id="sendmessage">Your message has been sent. Thank you!</div>
						<div id="errormessage"></div>
						<form action="" method="post" role="form" class="contactForm">
							<div class="form-group">
								<input type="text" name="name" class="form-control input-text" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control input-text" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control input-text" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<textarea class="form-control input-text text-area" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
								<div class="validation"></div>
							</div>

							<div class="text-center"><button type="submit" class="input-btn">Send Message</button></div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>

    --/dis */ ?>
