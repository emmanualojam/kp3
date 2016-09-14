<?php require('includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Emmanuel Amodu">
		<title>Kwara State Public-Private Partnership Bureau</title>
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,400italic,600,300italic,300|Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">


		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/owl.theme.css" rel="stylesheet">
		<link href="css/owl.transitions.css" rel="stylesheet">
        <link href="css/styleppp.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">

	</head>
	<body data-spy="scroll" data-target=".main-nav">

		<header class="st-navbar">
			<nav class="navbar navbar-default navbar-fixed-top clearfix" role="navigation">
				<div class="container"><!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
					</div>
					<a class="navbar-brand" href="#"><img src="photos/logo_2.png" alt="" class="img-responsive"></a>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse main-nav" id="main-navbar">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="#home">Home</a></li>
							<li><a href="#about">About Us</a></li>
                            <li><a href="#library">Library</a></li>
							<li><a href="#blog">News features</a></li>
							<li><a href="#contact">Contact Us</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		</header>
		<div class="width:;"></div>
		
		<section class="home" id="home" data-stellar-background-ratio="0.4">
			<div class="container">
				<div class="row">
                    <div class="col-md-6">
						<div class="st-home-unit">
							<div class="boxers">
							    <br>
								<div class="hero-txt">
                                    <a href="#" class="btn btn-main btn-lg">Economic Advisory Programs</a>
									<p class="hero-work">Learn about of our effort and opportunities for Socoal and Economic development</p>
								</div>
								<br>
							</div>	
						</div>
					</div>
					<div class="col-md-6">
						<div class="st-home-unit">
							<div class="boxers">
							    <br>
								<div class="hero-txt">
                                    <a href="ppp.html" class="btn btn-main btn-lg">Our PPP Programs</a>
									<p class="hero-work">Partner with us to as we work towards closing the Kwara State infrastructure gap</p>
								</div>
								<br>
							</div>
						</div>
					</div>
				</div>
			</div>
			<ul class="row nav nav-pills" id="new-nav" style="width:80%; margin:0% 0% 0% 10%;">
		   		<li class="active col-md-12">
		   			<a style="background-color: transparent; font-size:14px;">
		   				<i class="fa fa-chevron-down bounce" aria-hidden="true"></i>
					</a>
				</li>
			</ul> 
		</section>

		

		<section class="about" id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title st-center">
							<h3>WelCome to Kwara State Public-Private Partnership Bureau</h3>
							<p class="act-title-t">About Us</p>
						</div>
						<div class="row mb90">
							<div class="col-md-7">
                                <?php 
                                    try {
                                        $stmt = $db->query('SELECT pageCont FROM page_content');
                                        while($row = $stmt->fetch()){
                                            echo $row['pageCont'];
                                        }

                                    }  catch(PDOException $e) {
                                            echo $e->getMessage();
                                    }
                                ?>
							</div>
							<div class="col-md-5">
								<p class="act-title" style="padding-left: 70px;">Our Team</p>
							    <div class="row">
									<div class="col-md-10">
										<div class="st-member">
											<div class="st-member-img">
												<img src="photos/yomi.png" alt="" class="img-responsive mem-size">
											</div>
											<div class="st-member-info">
												<strong class="st-member-name">Abayomi Ogunsola</strong>
												<p class="st-member-pos">Director General</p>
												<div class="st-member-social">
													<ul>
														<li><a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
														<li><a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
														<li><a href="#" class="linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">	
									<div class="col-md-10">
										<div class="st-member">
											<div class="st-member-img">
												<img src="photos/mosun.png" alt="" class="img-responsive mem-size">
											</div>
											<div class="st-member-info">
												<strong class="st-member-name">Mosunmola Bello-Shaaba</strong>
												<p class="st-member-pos">Assistant Director</p>
												
												<div class="st-member-social">
													<ul>
														<li><a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
														<li><a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
														<li><a href="#" class="linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>							
								</div>
								<div class="row">	
									<div class="col-md-10">
										<div class="st-member">
											<div class="st-member-img">
												<img src="photos/seyi.png" alt="" class="img-responsive mem-size">
											</div>
											<div class="st-member-info">
												<strong class="st-member-name">Oluwaseyi</strong>
												<p class="st-member-pos">Executive Assistant</p>
												
												<div class="st-member-social">
													<ul>
														<li><a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
														<li><a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
														<li><a href="#" class="linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>							
								</div>
								<div class="row">	
									<div class="col-md-10">
										
									</div>							
								</div>
								<div class="row">	
									<div class="col-md-10">
										<div class="st-member">
											<div class="st-member-img">
												<img src="photos/bimpe.png" alt="" class="img-responsive mem-size">
											</div>
											<div class="st-member-info">
												<strong class="st-member-name">Bimpe Ahmed</strong>
												<p class="st-member-pos"></p>
												
												<div class="st-member-social">
													<ul>
														<li><a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
														<li><a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
														<li><a href="#" class="linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>							
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="funfacts" data-stellar-background-ratio="0.4">
			<div class="container">
				<div class="row">
				    <div class="col-md-3">
						<div class="funfact">
							<div class="st-funfact-icon"><i class="fa fa-edit"></i></div>
							<div class="st-funfact-counter" ><span class="st-ff-count" data-from="0" data-to="50" data-runit="1">0</span>+</div>
							<strong class="funfact-title">Designed Projects</strong>
						</div>
					</div>
					<div class="col-md-3">
						<div class="funfact">
							<div class="st-funfact-icon"><i class="fa fa-folder-o"></i></div>
							<div class="st-funfact-counter" ><span class="st-ff-count" data-from="0" data-to="250" data-runit="1">0</span>+</div>
							<strong class="funfact-title">Recieved Proposals</strong>
						</div>
					</div>
					<div class="col-md-3">
						<div class="funfact">
							<div class="st-funfact-icon"><i class="fa fa-cogs"></i></div>
							<div class="st-funfact-counter" ><span class="st-ff-count" data-from="0" data-to="45" data-runit="1">0</span>+</div>
							<strong class="funfact-title">Ongoing Projects</strong>
						</div>
					</div>				
					<div class="col-md-3">
						<div class="funfact">
							<div class="st-funfact-icon"><i class="fa fa-magic"></i></div>
							<div class="st-funfact-counter" ><span class="st-ff-count" data-from="0" data-to="40" data-runit="1">0</span>+</div>
							<strong class="funfact-title">Completed Projects</strong>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="faq-sec">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title st-center">
							<h3>Some questions</h3>
							<p>frequently asked questions</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="faq">
							<h3><i class="fa fa-question-circle"></i> Where is the office located?</h3>
							<p>Praesidium quaerat doloribus turpis fruuntur vocant postremo optimus utraque, veserim vitae appellant fructuosam, mediocris consistat impetu illae coniunctione modi consequentis nosque, vis qui deorum, poenis fuisse timorem ferae fastidium.</p>
						</div>
						<div class="faq">
							<h3><i class="fa fa-question-circle"></i> Can I visits?</h3>
							<p>Pertinerent non importari, populo faciendi civium vetuit. Gravitate numquam praesentium fabulas. Abest ponatur ineruditus restat consoletur causam, ordiamur temperantiam repellat desistemus conquirendae molestia aiunt discenda monet.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="faq">
							<h3><i class="fa fa-question-circle"></i> How big is the office?</h3>
							<p>Quarum difficilius aegritudo epularum municipem alias. Vidisse litteris, rationibus eadem, mandaremus maluisset, delectus terrore angusta deduceret numquam fidelissimae mens gravissimo propter, tradit, fastidium facta facerem qua quippiam vacuitate cupiditatum admirer navigandi.</p>
						</div>
						<div class="faq">
							<h3><i class="fa fa-question-circle"></i> Molestiae dedocere effluere?</h3>
							<p>Habeo mala nocet perpetiuntur legendos dicemus levitatibus abducat futura, occultarum probant vitae evertunt laudantium docendi difficilem, offendit concederetur tuo hortensio deserere, molita gaudemus titillaret difficilius, parum timeret unum molestiam omnis vitae.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
        
        <section id="library">
            
            <div class="subscribe">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="subscribe-title">Available Document</h3>
                        </div>
                    </div>
                        <div class="col-md-3">
                            <img class="img-responsive posit3" src="images/competitive_adv.jpg">
                        </div>
                        <div class="col-md-3">
                            <img class="img-responsive posit3" src="images/fiscal_responsibility.jpg">
                        </div>
                        <div class="col-md-3">
                            <img class="img-responsive posit3" src="images/investing_responsibly.jpg">
                        </div>
                        <div class="col-md-3">
                            <img class="img-responsive posit3" src="images/shared_prosperity_prog.png">
                        </div>
                        <form class="contact-form docform js-request" role="form">
                            <input type="text" class="form-control" id="fname" name="fname" placeholder="Your Full Name">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your E-mail">
                            <input type="text" class="form-control" id="subj" name="subj" placeholder="Your Subject">
                            <button class="btn btn-main btn-lg" type="submit" id="send"><i class="fa fa-paper-plane"></i> Send</button>
                        </form>
                    </div>
                </div>
            </div>
		</section>
        
		<section class="blog" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title st-center">
                            <h3>Recent News</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                         <?php
                            try {

                                $stmt = $db->query('SELECT postID, postTitle, postSlug, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
                                while($row = $stmt->fetch()){

                                    echo '<div class="blog-post">';
                                        echo '<div class="post-meta">';
                                            echo '<span>Posted on <strong>'.date('jS M Y H:i:s', strtotime($row['postDate'])).'</strong></span>';
                                        echo '</div>';
                                            echo '<h2 class="post-title">'.'<a href="viewpost.php?id='.$row['postSlug'].'">'.$row['postTitle'].'</a>'.'</h2>';
                                            echo '<div class="post-content">'.$row['postDesc'].'<a href="viewpost.php?id='.$row['postSlug'].'">Read More<span class="meta-nav">&rarr;</span></a>'.'</div>';				
                                    echo '</div>';
                                }
                                
                            } catch(PDOException $e) {
                                echo $e->getMessage();
                            }
                          ?>
                        <a href="#" id="loadMore">Load More</a>
                   </div>
                    <div class="col-md-4">
                        <div class="widgets">
                            <div class="widget">
                                <h2 class="widget-title">Recent Post</h2>
                                <ul>
                                     <?php
                                        try {
                                            $stmt = $db->query('SELECT postID, postTitle, postSlug, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
                                            while($row = $stmt->fetch()){

                                                echo '<li><div class="recent-post clearfix">';
                                                     echo '<h2 class="post-title"><a href="viewpost.php?id='.$row['postSlug'].'">'.$row['postTitle'].'</a></h2>';
                                                        echo '<div class="post-meta"><span>Posted on <strong>'.date('jS M Y H:i:s', strtotime($row['postDate'])).'</strong></span></div>';
                                                echo '</div></li>';

                                            }
                                        } catch(PDOException $e) {
                                            echo $e->getMessage();
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="tweets-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Twitter feed</h1>
                    </div>
                </div>
            </div>
			<div class="container-fluid">
                <div class="row"></div>
            </div>
		</section>

		<section class="contact" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title st-center">
							<h3>Contact Us</h3>
							<p>Get in Touch with Us</p>
                            <ul class="subscribe-social">
                                <li><a href="#" class="social twitter"><i class="fa fa-twitter"></i> Follow</a></li>
                                <li><a href="#" class="social facebook"><i class="fa fa-facebook"></i> Like</a></li>
                                <li><a href="#" class="social linked"><i class="fa fa fa-linkedin"></i> Add</a></li>
                            </ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div id="form" class="col-md-12 docform">
						<form class="contact-form" role="form">
							<input type="text" class="form-control" id="fname" name="fname" placeholder="Your Full Name">
							<input type="email" class="form-control" id="email" name="email" placeholder="Your E-mail">
							<textarea id="mssg" name="mssg" placeholder="Your Message" class="form-control" rows="10"></textarea>
							<input type="text" class="form-control" id="subj" name="subj" placeholder="Your Subject">
                            <div style="margin:15% 0 0 48%; position: absolute;">
                                <address>
                                    <strong>Kwara State Public-Private Partnership Bureau.</strong><br>
                                    Kwara State Government House, Ahmadu Bello way.<br>
                                    Ilorin, Kwara State. Nigeria.<br>
                                    Phone: + (234) 817-053-4232.<br>
                                    Email: info@kwarappp.gov.ng.
                                </address>
                            </div>
                            <div style="margin:20% 0 0 74%; position: absolute;">
                                <button class="btn btn-main btn-lg" type="submit" id="send" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Sending..."><i class="fa fa-paper-plane"></i>Send</button>
                            </div>
                           
						</form>
                        
						<div id="result-message" role="alert"></div>
					</div>
				</div>
			</div>
		</section>
        
        <section class="call-us">
			<!--<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3>At KP3 We lookout for individuals that have what it takes to contribute to our goals. If you would love to join us</h3><br><br>
						<a href="#" class="btn btn-default-o btn-lg">Click Here.</a>
					</div>
				</div>
			</div>-->
		</section>
        
		<section class="clients">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="clients-carousel">
							<li><img src="photos/client.png" class="img-responsive" alt=""></li>
							<li><img src="photos/client2.png" class="img-responsive" alt=""></li>
							<li><img src="photos/client3.png" class="img-responsive" alt=""></li>
							<li><img src="photos/client4.png" class="img-responsive" alt=""></li>
							<li><img src="photos/client5.png" class="img-responsive" alt=""></li>
							<li><img src="photos/client6.png" class="img-responsive" alt=""></li>
							<li><img src="photos/client7.png" class="img-responsive" alt=""></li>
							<li><img src="photos/client8.png" class="img-responsive" alt=""></li>
							<li><img src="photos/client9.png" class="img-responsive" alt=""></li>
							<li><img src="photos/client10.png" class="img-responsive" alt=""></li>
                            <li><img src="photos/client11.png" class="img-responsive" alt=""></li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<footer class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						&copy; <a href="https://www.kwarappp.gov.ng/copyright.html">Kwara Public-Private Partnership Bureau (KP3)</a> 2016<script>new Date().getFullYear()>2016&&document.write("-"+new Date().getFullYear());</script>.
					</div>
				</div>
			</div>
		</footer>
        
        <script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/jquery.nicescroll.min.js"></script>
		<script src="js/jquery.countTo.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>