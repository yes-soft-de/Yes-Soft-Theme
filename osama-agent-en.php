<?php
	/* Template Name: Osama Agent English  */
?>
	
<!DOCTYPE html>
<html>
	<head>
			
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-MQDG2KV');</script>
		<!-- End Google Tag Manager -->
		
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!-- Internet Explorer Meta -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- First Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Yes Soft</title>
		<link rel="icon" href="<?php echo get_template_directory_uri() . '/img/yes-ads-img/yessoft-logo.svg'; ?>">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/yes-ads-css/bootstrap.min.css'?>">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/yes-ads-css/all.css';?>">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/yes-ads-css/style1.css';?>">
	</head>
	<body>

		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MQDG2KV"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		
		<div class="container agent-page en">
			<h1 class="title">
				<a href="https://yes-soft.de/" target="_blank">
					<img src="<?php echo get_template_directory_uri() . '/img/yes-ads-img/yessoft-logo.svg'; ?>" class="img-fluid">
				</a>
			</h1>
			<div class="row">
				<div class="col-md-6 col-xs-12">
					<p class="main-para">
						<b>Yes Soft </b>is a software company specializing in e-commerce, website and application development located in Berlin / Germany. It adopts the open-source software methodology and all of its projects are available on <b>Github</b>.
						<br>
						Our team consists of developers, designers, content makers, testers, and team managers. They work together to provide the best results and use the latest technologies to turn imaginative requirements into reality.
						<br>
						For a closer look, you can check our services …
					</p>
				</div>
				<div class="col-md-6 col-xs-12 agent">
					<h3>Yes Soft agent</h3>
					<p>Osama Alhamoud</p>
					<a href="https://wa.me/96171575052"><span class="phone font"> +961-71-575-052 <i class="fas fa-phone"></i></span></a>
					
				</div>

			</div>
			<div class="row">

				<div class="col-md-6 col-xs-12 service-block ">
					<h3 class="block-title">
						Building eCommerce stores
					</h3>
					<p>
						You want to launch a comprehensive online-store or specialized in a specific field .. Our team is here to help, <b>Prestashop</b> platform will provide you with everything you need regarding eCommerce stores with many features for control and management
					</p>
					<ul>
						<li>Online-store with creative and modern design</li>
						<li>Great dashboard and provides many features from customer movement, goods and sales</li>
						<li>Multilingual store</li>
						<li>Multi-vendor store with various shipping methods and many payment ways.</li>
						<li>Compliant with SEO standards to rank in the top first page in search engines results.</li>
					</ul>
				</div>

				<!--<div class="col-md-6 col-xs-12">
					<form name="contact_form" id="contactForm" action="post">
					<div class="row">
							<div class="col-md-6 col-12 mb-3"><div id="mail-status" style="display:none">تم إرسال الرسالة بنجاح
						</div>
					</div>
					
					
					<div class="row">
						<div class="col-md-6 col-12 mb-3">
							<input class="form-control" type="text" id="userName" name="userName" placeholder="*الاسم الأول" required="required">
						</div>
						<div class="col-md-6 col-12 mb-3">
							<input class="form-control" type="text" id="lastName" name="lastName" placeholder="الاسم الأخير"/>
						</div>
						<div class="col-md-12 col-12 mb-3">
							<input class="form-control" type="text" name="subject" id="subject" placeholder="*الموضوع" required="required">
						</div>
						<div class="col-md-12 col-12 mb-3">
							<input class="form-control" type="email" id="userEmail" name="userEmail" placeholder="*البريد الإلكتروني" required="required">
						</div>
						<div class="col-md-12 col-12 mb-3">
							<textarea class="form-control" name="content" id="content" placeholder="*message" rows="4" required="required"></textarea>
						</div>
					</div>
					<div class="row">
         		    <div class="col">
                    
                  		<input type="submit" value="send" name="saveForm" class="send btn btn-primary">
                    
                  	</div>
                </div>

					</form>
				</div>-->

			</div>
			

		</div>	
		

		<div class="contact">
			<a href="https://wa.me/96171575052" class="whatsapp">
				<img src="<?php echo get_template_directory_uri() . '/img/yes-ads-img/whatsapp.png'; ?>">
			</a>
		</div>

		
	
	    <script src="<?php echo get_template_directory_uri() . '/js/yes-ads-js/jquery-2.1.4.js'; ?>"></script>
		<script src="<?php echo get_template_directory_uri() . '/js/yes-ads-js/bootstrap-arabic.min.js'; ?>"></script>
		<script src="<?php echo get_template_directory_uri() . '/js/yes-ads-js/all.js'; ?>"></script>
		<script src="<?php echo get_template_directory_uri() . '/js/yes-ads-js/plugin.js'; ?>"></script>
		<script type="text/javascript">
		$(document).ready(function (e){
			$("#contactForm").on('submit',function(e){
			    e.preventDefault();
	
				

				$.ajax({
    				url: "contact_mail.php",
    				type: "POST",
    				data:  new FormData(this),
    				contentType: false,
    				cache: false,
    				processData:false,
    				success: function(data){
    				$("#mail-status").fadeIn();
    				
    				},
				    error: function(data){
				       alert(JSON.stringify(data));
				    } 	        	
			    });
		    });
		});
	</script>


	</body>
</html>