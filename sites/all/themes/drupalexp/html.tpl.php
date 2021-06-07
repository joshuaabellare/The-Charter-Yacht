<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
    <meta name="google-site-verification" content="AHX1lq14-6-LNsT_Z8hysMwQg_wN1A8QBuDVtO7itrs" />
    <meta name="google-site-verification" content="mlIt2P7vFd3g5B-fmLE1Gkhn7STBFM9D85FKQb2lZpM" />
		<?php print $head; ?>
		<title><?php print $head_title; ?></title>
		<?php print $styles; ?>
		<?php print $scripts; ?>
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Quicksand&text=0123456789" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
		<!-- Chosen CSS -->
		<link rel="stylesheet" href="http://www.lxvyachts.com/sites/all/libraries/chosen/chosen.min.css">
		<!-- End of Chosen CSS -->
		<!-- WhatsHelp.io widget -->
		<script type="text/javascript">
		    (function () {
		        var options = {
		            facebook: "239915969682536", // Facebook page ID
		            whatsapp: "+63 9171627737", // WhatsApp number
		            viber: "+63 9171627737", // Viber number
		            email: "inquiries@lxvlifestyle.com", // Email
		            call: "+63 9171627737", // Call phone number
		            company_logo_url: "//storage.whatshelp.io/widget/25/251f/251f8ffe958305204f090b7e86d1b997/27867331_585467698460693_3617637590195205270_n.png", // URL of company logo (png, jpg, gif)
		            greeting_message: "Hello, how may we help you? Just send us a message now to get assistance.", // Text of greeting message
		            call_to_action: "Contact Us", // Call to action
		            button_color: "#3b5998", // Color of button
		            position: "right", // Position may be 'right' or 'left'
		            order: "facebook,whatsapp,viber,call,email" // Order of buttons
		        };
		        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
		        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
		        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
		        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
		    })();
		</script>
		<!-- /WhatsHelp.io widget -->
		<!-- Mailerlite Popup -->
		<script>
			(function(m,a,i,l,e,r){ m['MailerLiteObject']=e;function f(){
			var c={ a:arguments,q:[]};var r=this.push(c);return "number"!=typeof r?r:f.bind(c.q);}
			f.q=f.q||[];m[e]=m[e]||f.bind(f.q);m[e].q=m[e].q||f.q;r=a.createElement(i);
			var _=a.getElementsByTagName(i)[0];r.async=1;r.src=l+'?v'+(~~(new Date().getTime()/1000000));
			_.parentNode.insertBefore(r,_);})(window, document, 'script', 'https://static.mailerlite.com/js/universal.js', 'ml');

			var ml_account = ml('accounts', '730383', 'u1y2u1b0u2', 'load');
		</script>
		<!-- End of Mailerlite Popup -->
		<!-- Chosen JS -->
		<script src="http://www.lxvyachts.com/sites/all/libraries/chosen/chosen.jquery.min.js"></script>
		<!-- End of Chosen JS -->
	</head>
	<body class="<?php print $classes; ?>" <?php print $attributes;?>>
		<div id="skip-link">
		<a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
		</div>
		<?php print $page_top; ?>
		<?php print $page; ?>
		<?php print $page_bottom; ?>
	</body>
</html>
