<!DOCTYPE html>
<html>

<head lang="en">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Hatim Shopify Custom Store</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet">
	<link href="assets/css/styles.css" rel="stylesheet">
	
	<meta name="salesforce-community" content="https://hatim-developer-edition.eu43.force.com/ciam">
    <meta name="salesforce-client-id" content="3MVG95NPsF2gwOiMMf2G1lq6L50JgMAPW.xV45..vdTaTkQf1x1zUgTZxKfMmoaYZTg0tZt1ONwmF0znc35so">
    <meta name="salesforce-redirect-uri" content="https://auchan-storefront.herokuapp.com/_callback.html">
    <meta name="salesforce-mode" content="modal">
    <meta name="salesforce-target" content="#sign-in-link">
    <meta name="salesforce-save-access-token" content="true">
    <meta name="salesforce-forgot-password-enabled" content="true">
    <meta name="salesforce-self-register-enabled" content="true">
    <meta name="salesforce-login-handler" content="onLogin">
    <meta name="salesforce-logout-handler" content="onLogout">
    <meta name="salesforce-mask-redirects" content="true">
	<link href="https://hatim-developer-edition.eu43.force.com/ciam/servlet/servlet.loginwidgetcontroller?type=css" rel="stylesheet" type="text/css" />
    <script src="https://hatim-developer-edition.eu43.force.com/ciam/servlet/servlet.loginwidgetcontroller?type=javascript_widget"></script>
</head>

<body>

	<header class="compact">		
		<h1><a href="#">Auchan Storefront</a></h1>
		<div id="sign-in-link" style="position: absolute; top: 20px;right: 20px;"></div>
	</header>
	
	<div class="main-content">
		<div class="all-products page">
			<div class="filters">
				<form>

					<div class="filter-criteria">
						<span>Manufacturer</span>
						<label><input type="checkbox" name="manufacturer" value="apple">Apple</label>
						<label><input type="checkbox" name="manufacturer" value="samsung">Samsung</label>
						<label><input type="checkbox" name="manufacturer" value="htc">HTC</label>
						<label><input type="checkbox" name="manufacturer" value="nokia">Nokia</label>
						<label><input type="checkbox" name="manufacturer" value="zte">ZTE</label>
						<label><input type="checkbox" name="manufacturer" value="sony">Sony</label>
					</div>

					<div class="filter-criteria">
						<span>Screen Size</span>
						<label><input type="checkbox" value="16" name="storage">16 GB</label>
						<label><input type="checkbox" value="32" name="storage">32 GB</label>
					</div>

					<div class="filter-criteria">
						<span>OS</span>
						<label><input type="checkbox" value="android" name="os">Android</label>
						<label><input type="checkbox" value="ios" name="os">iOS</label>
						<label><input type="checkbox" value="windows" name="os">Windows</label>
					</div>

					<div class="filter-criteria">
						<span>Camera</span>
						<label><input type="checkbox" value="5" name="camera">5 Mpx</label>
						<label><input type="checkbox" value="8" name="camera">8 Mpx</label>
						<label><input type="checkbox" value="12" name="camera">12 Mpx</label>
						<label><input type="checkbox" value="15" name="camera">15 Mpx</label>
					</div>

					<button>Clear filters</button>

				</form>

			</div>

			<ul class="products-list">
				<script id="products-template" type="x-handlebars-template">​
					{{#each this}}
						<li data-index="{{id}}">
							<a href="#" class="product-photo"><img src="{{image.small}}" height="130" alt="{{name}}"/></a>
							<h2><a href="#"> {{name}} </a></h2>
							<ul class="product-description">
								<li><span>Manufacturer: </span>{{specs.manufacturer}}</li>
								<li><span>Storage: </span>{{specs.storage}} GB</li>
								<li><span>OS: </span>{{specs.os}}</li>
								<li><span>Camera: </span>{{specs.camera}} Mpx</li>
							</ul>
							<button>Buy Now!</button>
							<p class="product-price">${{price}}</p>
							<div class="highlight"></div>
						</li>
					{{/each}}
				</script>
			</ul>
		</div>

		<div class="single-product page">
			<div class="overlay"></div>
			<div class="preview-large">
				<h3>Single product view</h3>
				<img src=""/>
				<p></p>
				<span class="close">×</span>
			</div>

		</div>

		<div class="error page">
			<h3>Sorry, something went wrong :(</h3>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.min.js"></script>
	<script src="assets/js/script.js"></script>
	
	<script>
		function onLogin(identity) {
			console.log("hello");

			var targetDiv = document.querySelector(SFIDWidget.config.target);   
			var img = document.createElement('img'); 
			img.src = identity.photos.thumbnail; 
			img.className = "sfid-avatar";

			var username = document.createElement('span'); 
			username.innerHTML = identity.username;
			username.className = "sfid-avatar-name";

			var iddiv = document.createElement('div'); 
			iddiv.id = "sfid-identity";
			iddiv.appendChild(img);     
			iddiv.appendChild(username);        

			targetDiv.innerHTML = '';
			targetDiv.appendChild(iddiv);   
		}

		function onLogout() {
			SFIDWidget.init();
		}

	</script>
	
</body>
</html>
