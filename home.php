<?php /*
Template Name: Home
*/ ?>

<?php get_header(); ?>

	<title>The UCF Print Shop: Home</title>

	<!-- Framework CSS -->
	<link rel="stylesheet" href="/css/blueprint/nscreen.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="/css/blueprint/print.css" type="text/css" media="print">
	<!--[if IE]><link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->
	
	<!-- Import fancy-type plugin for the sample page. -->
	<link rel="stylesheet" href="/css/blueprint/plugins/fancy-type/screen.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="/css/global.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="js/easySlider1.7/css/screen.css" type="text/css" media="screen">
	<link href='//fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
    
	<style type="text/css">
		<!--
		.style1 {
			font-family: inherit;
			}
		.style3 {
			color: #660000; 
			font-weight:bold;
			}
		.style6 {
			color: #000000;
			font-family: inherit;
		}
		.style10 {
			color: #000000
		}
		.style99 {
			font-size:14px; 
			color:#000; 
			text-align: justify;
		}

		.rightBox {
			background-color: #B2B2B2;
			opacity: .75;
			padding: 20px;
			width: 320px;
			height: 300px;
			position: absolute;
			top: 0;
			right: 0;
			/* border-top-right-radius: 20px; */
			border-right: 1px solid #ccc;
			border-top: 1px solid #ccc;
		}

		.rightBoxCopy {
			padding: 20px;
			width: 320px;
			height: 300px;
			overflow: hidden;
			position: absolute;
			top: 0;
			right: 0;
			opacity: 1;
			color: #000;
			font-size: 14px;
			text-align: center;
			letter-spacing: .5px;
		}

		.rightBoxCopy h4 {
			font-weight: 500;
		}

		.rightBoxBottom {
			background-color: #09c;
			color: #fff;
			float: left;
			font-size: 13px;
			line-height: 18px;
			overflow: hidden;
			margin-bottom: 20px;
			margin-top: -10px;
			/* padding: 23px; */
			text-align: left;
			width: 320px;
		}

		.rightBoxBottom h3 {
			color: #fff;
			font-weight: 500;
			letter-spacing: .5px;
			line-height: normal;
			text-align: left;	
		}

		#imageBox {
			position: absolute;
			top: 0;
			left: 0;
			width: 910px;
			border-top-right-radius: 20px;	
		}

		#imageBox img {
			border-top-left-radius: 20px;
			border-top-right-radius: 20px;
		}

		#main_content2 {
			background-color: #FFf;
			float: left;
			font-family: arial, sans-serif;
			font-size: 14px;
			height: 533px;
			margin-top: -10px;
			margin-bottom: 20px;
			padding-right: 40px;
			padding-top: 10px;
			width: 630px;
			font-weight: 400;
			color: #000;
		}

		#main_content2 > p {
			font-size: 16px;
			line-height: 20px;
			padding-bottom: 10px;
			padding-top: 18px;
			text-align: justify;
		}

		#main_content2 h4 {
			font-family: sans-serif;
			font-weight: 400;
			margin: 10px 0 5px;
			text-align: left;
			text-transform: uppercase;
		}

		#focusBox {
			width: 100%;
			height: 330px;
			position: relative;
			top: 20px;
			left: 0;
			clear: both;
			overflow: hidden;
		}

		.frontNav {
			background-color: #fff;
			padding: 3px 7px;
			text-transform: uppercase;
			color: #666;
			position: absolute;
			bottom: 10px;
			right: 10px;
			font-size: 10px;
			font-weight: 500;
			letter-spacing: 2px;
			text-align: center;
			border: 1px solid #CCC;
			border-radius: 5px;
		}

		.frontNav:hover {
			background-color: #09c;
			color: #fff;
		}

		#copy2 {
			display: none;
		}

		div#slider ul li {
			width: 281px;
			height: 281px;
		}

		.fsc {
			padding: 6px 20px 20px;
		}

		.fsc h3 {
			border-top: 1px solid #f7f7f7;
			margin-bottom: 12px;
			padding-top: 10px;
		}

		.fsc p {
			line-height: 16px;
		}

		.undergrad-research {
			background-color: #D26E35;
			color: #FFFFFF;
			font-family: 'Lato',sans-serif;
			font-size: 20px;
			line-height: 23px;
			padding: 27px 10px;
			text-align: center;
			text-transform: uppercase;
		}

		.undergrad-research:hover {
			background-color: #E03A2D;
		}

		.undergrad-research a:link, .undergrad-research a:visited {
			color: #FFFFFF;
			font-size: 18px;
			letter-spacing: 0.4px;
			line-height: 20px;
		}

		.undergrad-research a:hover, .undergrad-research a:active {
			color: #fff;
		}


		.undergrad-research .emphasis {
				color: #fff;
				font-family: 'Courgette', cursive;
				font-size: 18px;
			letter-spacing: .5px;
			text-transform: none;
		}

		.grad-research {
			background-color: #CDC673;
			color: #FFFFFF;
			font-family: 'Lato',sans-serif;
			font-size: 20px;
			line-height: 23px;
			padding: 26px 10px;
			text-align: center;
			text-transform: uppercase;
		}

		.grad-research:hover {
			background-color: #E03A2D;
		}

		.grad-research a:link, .grad-research a:visited {
			color: #FFFFFF;
			font-size: 18px;
			letter-spacing: 0.4px;
			line-height: 20px;
		}

		.grad-research a:hover, .grad-research a:active {
			color: #fff;
		}

		.grad-research .emphasis {
				color: #fff;
				font-family: 'Courgette', cursive;
				font-size: 18px;
			letter-spacing: .5px;
			text-transform: none;
		}

		/* Holdin' it together with bubblegum and wishes until the new site is ready */
		.holderer { height: 160px; padding: 20px; position: relative; }
		.holderer:hover, .holderer:focus { background-color: #DF9D2D; /* #d26e35; */ }
		.item-image { float: left; margin-left: 10%; text-align: center; width: 40%; }
		.item-image:last-child { margin-left: 0; }

		.star { background-color: purple; right: 6px; top: 0; }	
		.star:before { background-color: blue; content: ""; transform: rotate(30deg); -webkit-transform: rotate(30deg); -moz-transform: rotate(30deg); -ms-transform: rotate(30deg); }
		.star:after { background-color: green; content: ""; transform: rotate(15deg); -webkit-transform: rotate(15deg); -moz-transform: rotate(15deg); -ms-transform: rotate(15deg); }
		.starburst { background-color: yellow; color: white; transform: rotate(45deg); -webkit-transform: rotate(45deg); -moz-transform: rotate(45deg); -ms-transform: rotate(45deg); }
		.starburst:before { background-color: orange; content: ""; transform: rotate(-60deg); -webkit-transform: rotate(-60deg); -moz-transform: rotate(-60deg); -ms-transform: rotate(-60deg); }
		.starburst:after { background-color: red; content: ""; transform: rotate(-75deg); -webkit-transform: rotate(-75deg); -moz-transform: rotate(-75deg); -ms-transform: rotate(-75deg); }
		
		.star { background-color: #b20000; float: right; height: 40px; margin-left: 20px; position: relative; width: 40px; }
		.starburst, .star:before, .starburst:before, .star:after, .starburst:after { background-color: #b20000; height: 40px; position: absolute; width: 40px; }
		.starburst, .star:before, .starburst:before, .star:after, .starburst:after { right: 0; top: 0; }

		.centerer { display: table; height: 40px; left: 0; position: absolute; top: 0; width: 40px; z-index: 100; }
		.centerer p { color: #fff; display: table-cell; font-family: Georgia, serif; font-size: 14px; text-align: center; vertical-align: middle; }
		
		.footerer { border-top: 1px ridge #ccc; padding-top: 20px; }

		@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css);
*, *:before, *:after {
  box-sizing: border-box;
}

	.slider-main {
		width: 630px;
		color: #444;
		font-family: arial, sans-serif;
		font-size: 1rem;
		line-height: 1.5;
		height: 300px;
		position: relative;
		overflow: hidden;
		display: flex;
		flex-flow: row nowrap;
		align-items: flex-end;
		justify-content: center;
		float: left;
	}

	.slider__nav {
		width: 12px;
		height: 12px;
		margin: 2rem 12px;
		border-radius: 50%;
		z-index: 10;
		outline: 6px solid #ccc;
		outline-offset: -6px;
		box-shadow: 0 0 0 0 #333, 0 0 0 0 rgba(51, 51, 51, 0);
		cursor: pointer;
		backface-visibility: hidden;
	}

	.slider__inner {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		display: flex;
	}

	.slider__image {
		font-size: 2.7rem;
	}

	.slider__caption {
		font-weight: 700;
		margin: 2rem 0 1rem;
		text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
		text-transform: uppercase;
	}

	.slider__txt {
		color: #999;
		margin-bottom: 3rem;
		max-width: 300px;
	}

	.slide1,.slide2,.slide3 {
  position: absolute;
  width: 100%;
  height: 100%;
}

.slide1 {
  background: url(/images/frontImage1.png)no-repeat center;
		background-size: cover;
    animation:fade 15s infinite;
		-webkit-animation:fade 15s infinite;
} 

.slide2 {
  background: url(/images/frontImage2.png)no-repeat center;
		background-size: cover;
    animation:fade2 15s infinite;
	-webkit-animation:fade2 15s infinite;
}

.slide3 {
  background: url(/images/frontImage3-2.png)no-repeat center;
		background-size: cover;
    animation:fade3 15s infinite;
	-webkit-animation:fade3 15s infinite;
}

@keyframes fade
{
  0%   {opacity:1}
  33.333% { opacity: 0}
  66.666% { opacity: 0}
  100% { opacity: 1}
}
@keyframes fade2
{
  0%   {opacity:0}
  33.333% { opacity: 1}
  66.666% { opacity: 0 }
  100% { opacity: 0}
}
@keyframes fade3
{
  0%   {opacity:0}
  33.333% { opacity: 0}
  66.666% { opacity: 1}
  100% { opacity: 0}
}

		-->
	</style>
    
	<!-- ADD UCF HEADER -->
	<script type="text/javascript" src="https://universityheader.ucf.edu/bar/js/university-header.js"></script>
	<!-- END UCF HEADER -->
	
	<!-- Site specific CSS -->
	<script type="text/javascript" src="/js/global.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/easySlider1.7/js/easySlider1.7.js"></script>
		
	</head>

	<body>

		<!-- Emergency Alert Box -->
		<div id="ucf-alert" style="padding:40px; background-color:#8E0001; position:relative; z-index:1000; color:white; font-family:Georgia,'Times New Roman',Times,serif;text-align:left !important; line-height:normal !important;">

			<div id="ucf-alert-close" style="color:#4E0000; padding:20px; position:absolute; right:0; top:0; cursor:pointer; font-size:18px; font-weight:normal; font-family:Georgia,'Times New Roman',Times,serif;" onclick="closeThis()">ⓧ</div>
			<h1 style="font-family:Georgia,'Times New Roman',Times,serif;color:white;padding: 0 0 20px 0;">
				Main Campus Closed Until 12 for Classes, Employees
			</h1>
			<p style="font-family:Georgia,'Times New Roman',Times,serif;font-size:14px;color:white;padding-bottom:20px;">
				UCF's main campus is closed for classes and employees until noon. All classes scheduled to begin before noon will not be held today. Essential personnel should report to work. All classes and operations in the Central Florida Research Park and at all other campus locations will continue as scheduled. Police have found a suspicious device in ...
			</p>
			<a style="color:white; font-family:Georgia,'Times New Roman',Times,serif; text-decoration:underline; " href="http://www.ucf.edu/alert/">
				Click Here for More Information
			</a>

			<script>
				function closeThis(){
					document.getElementById('ucf-alert').style.display="none";
				}
				var current = new Date();
				var expiry = new Date("March 18, 2013 12:00:00")
				if(current.getTime() > expiry.getTime()) {
					document.getElementById('ucf-alert').style.display="none";
				}
			</script>

		</div> <!-- / #ucf-alert -->

		<div id="frame">
				<div class="container">
				
					<div class="span-23">
						<img src="images/PDC-UNIT.png" width="55%" height="55%" align="left" alt="Printing Services"/><br clear="all" />	
						<br>		
						<!--<h1 id="mainHeading">The UCF Print Shop</h1>-->
						<ul id="global_nav">
							<li><a href="/index/">Home</a></li>
							<li><a href="/order">Order</a>
							<li><a href="/services/">Print Services</a></li>
							<li><a href="/designservices/">Design Services</a></li>
							<!-- <li><a href="students/index/" />Students</a></li> -->
							<li><a href="/upload">Upload</a></li>
							<li><a href="/faqs/">FAQs</a></li>
							<li class="last"><a href="/contact_us/">Contact Us</a></li>
						</ul>
					</div>

					<p>&nbsp;</p>
					<!-- include virtual="/includes/nprintshop_header/" -->
					<div class="span-24 push-0">
						<!-- <div class="span-9 pull-0" position="absolute"> -->
						<div id="focusBox">
							<div class="slider-main">
								<div class="slider__inner">
									<div class="slide1"></div>
									<div class="slide2"></div>
									<div class="slide3"></div>
								</div>
							</div>

							<div class="rightBox">
							</div>
								<div class="rightBoxCopy">
									<div id="slider">
										<ul>				
											<li><img src="images/slide1.png" alt="Make Us Your Printer" /></a></li>
											<li><a href="http://www.doyouknowthefacts.com" target="_blank"><img src="images/slide5.png" alt="Do You Know the Facts" /></a></li>
											<li><img src="images/slide2.png" alt="We Accept Visa & Mastercard" /></li>
										<!--   <li><a href="students/index/" /><img src="images/slide3.png" alt="Official UCF Student Networking Cards" /></a></li> -->
										
										</ul>
									<!--<h4>Make Us Your Full Service Printer</h4>
										<p>
										The UCF Print Shop is here to provide you with the right mix of quality, affordability and speed.  
										</p>
										<p>Communicate your message to your target audience with our virtually endless list of options.                             </p>
										<p>If you don’t see it here, just ask.<br />We can do it. </p>
									-->
									</div>
						
								<div id="copy2">
									<h4>Now Accepting Credit Cards</h4>
									<p>
										The UCF Print Shop now accepts Visa and MasterCard for non-university purchases.
									</p>
								</div>
								<!--
								<a class="frontNav" href="https://printing.ucf.edu/services/">more information</a>
								-->
				
						</div>
					</div>
					<!-- </div> -->


					<div id="main_content2">
							<p align="justify">
								The UCF Print Shop has established our great reputation for quality, service, quick turnaround and competitive pricing. Our staff has vast experience in all areas of print and digital communications… from graphic design and printing, to signage and mailings services. We are here to lend our experience to provide you with the most professional looking, yet economical, solution that meets your needs. In addition, we offer free, local delivery throughout the campus community in order to make your experience as convenient as possible.
								<br><br>Our print center is flexible in its offerings and enjoys meeting and solving potential challenges that you may face with your projects. We have an experienced staff in graphic design, digital and offset production, bindery, mailings and signage, etc. Whether you’re looking for offset printing, large format printing, or digital printing services, The UCF Print Shop can do it all.<br><br>
							<u>Our services include</u>:<br>
								&nbsp;&nbsp;•&nbsp;   Brochures, flyers, and much more.<br>
								&nbsp;&nbsp;•&nbsp;		Poster and Banner printing<br>
								&nbsp;&nbsp;•&nbsp;		Letterhead, Envelopes and Business Cards<br>
								&nbsp;&nbsp;•&nbsp;   Mailing projects<br>
								&nbsp;&nbsp;•&nbsp;   Project planning consultation<br>
								&nbsp;&nbsp;•&nbsp;   Graphic design services<br>
								&nbsp;&nbsp;•&nbsp;   Skilled in-house offset and digital printing and full-service bindery<br>
								&nbsp;&nbsp;•&nbsp;   Economical chargeback function for completed projects<br>
							</p>
						
						</div>
				
					<div class="rightBoxBottom">
					
						<div class="undergrad-research">
							<a href="https://printing.ucf.edu/undergrad-research/">
								<div class="emphasis">Poster orders form <span>for</span></div>Annual Showcase of Undergraduate Research
							</a>
						</div><!-- .grad-research -->

						<div class="grad-research">
							<a href="https://printing.ucf.edu/grad-research/">
								<div class="emphasis">Poster orders form <span>for</span></div>Annual Graduate <br/>Research Forum
							</a>
						</div><!-- .grad-research -->
						
						<a href="//printing.ucf.edu/awards-presentations" alt="Printed Certificate Shells &amp; Folders Coming Soon" title="Printed Certificate Shells &amp; Folders Coming Soon">
							<div class="holderer">
								<!-- <div class="star">
								<div class="centerer">
									<p>NEW</p>
								</div>
								<div class="starburst"></div>
								</div> --> <!-- /.star -->
								<h3>Pocket Folders Now Available</h3>
									
								<div class="item-image">
									<img src="images/certificates-and-cover.png" alt="Certificates" width="118" height="94" />	
								</div>
									
								<div class="item-image">
									<img src="images/folders.png" alt="Presentation Folders" width="113" height="94" />
								</div>			
							</div>
						</a>
						
						<div class="fsc">
							<h3>Forest Stewardship Council Certification</h3>
							<p>The UCF Print Shop is Forest Stewardship Council (FSC) Chain-of-Custody Certified.</p>
						</div>
					</div>
							
					<div class="span-8 last" ></div>
				
				</div><br>
		
				<div class="span-24">
					<p align="justify" style="font-size:large">More than a Purchase, an Investment</p>
					<p align="justify">When you purchase from The UCF Print Shop, you are supporting the University of Central Florida. We invest our profits back into the university to help improve the education, facilities and lives of our students - your future employees.<br><br>All publications, whether prepared in-house or outsourced, must adhere to <a href="https://www.ucf.edu/brand/">UCF Graphic Standards</a>.</p>
				</div>
					
				<div class="span-24 footerer">
					<p align="center">P:&nbsp;407-823-2277 | F: 407-823-5523 | <a href="/contact_us/">E-mail |</a> 3987 Libra Drive, Orlando, FL 32816<br>
						<span class="small">
							&copy; <a id="year"></a> <a href="http://www.ucf.edu">University of Central Florida</a>. All rights reserved.
						| <a href="https://printing.ucf.edu">The UCF Print Shop</a> is a part of <a href="https://businessservices.ucf.edu/">UCF Business Services</a>
						</span></p>
				</div>
			</div>
		</div>
		<div class="clear"></div>

		<script src="js/now-year.js"></script>

		<script type="text/javascript">
			var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
			document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
			try {
			var pageTracker = _gat._getTracker("UA-7724959-1");
			pageTracker._trackPageview();
			} catch(err) {}

			$(document).ready(function(){	
				$("#slider").easySlider({
					auto: true,
					continuous: true,
					controlsShow: false,
					pause: 5000
				});
			});
		</script>

	</body>

<?php get_footer(); ?>