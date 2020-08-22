<html lang="en">
<wb-var base="/tpl" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Cache-Control" content="max-age=31536000, must-revalidate" />
		<link rel="stylesheet" href="{{_var.base}}/css/preloader.css">
    <title>{{title}}</title>
    <!-- jQuery -->
		<wb-snippet name="wbapp" />
		<wb-snippet name="fontawesome4" />
</head>

<body>

    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <!--Start Header-->
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4" id="logo">
                    <h4>
											<a href="/">
											<img data-src="{{_sett.logo.0.img}}" style="width:40px;margin-right:8px;" />
											Клуб <span>Тандэн</span>
											</a>
										</h4>
                </div>
                <div class="col-md-8" id="navigation">
										<wb-data wb="table=pages&item=menu">
                    	<ul class="nav" wb-tree="field=prop">
                    			<li>
														<a href="javascript:document.location.href = '/{{id}}'" wb-if='"{{_route.item}}" != "home"'>{{name}}</a>
														<a href="#{{id}}" wb-if='"{{_route.item}}" == "home"'>{{name}}</a>
													</li>
                    	</ul>
										</wb-data>
                </div>
            </div>
        </div>
    </header>
    <!--End Header-->

    <main>
    </main>

    <div id="footer">
        <p>Разработано в <a href="http://digiport.ru" target="_blank" rel="nofollow">WebBasic CMS Pandemic edition </a> &copy; 2020</p>
        <p class="social">
            <a wb-if='"{{_sett.vk}}" > ""' href="{{_sett.vk}}" target="_blank">
                <i class="fa fa-vk" aria-hidden="true"></i></a>
            <a wb-if='"{{_sett.fb}}" > ""' href="{{_sett.fb}}" target="_blank">
                <i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a wb-if='"{{_sett.insta}}" > ""' href="{{_sett.insta}}" target="_blank">
                <i class="fa fa-instagram" aria-hidden="true"></i></a>
        </p>
    </div>

    <!--Scroll Top button-->
    <div class="scrolltop">
        <a href="#" class="scrolltop_btn smoth-menu"></a>
    </div>
    <!--End Scroll Top button-->

		<script type="wbapp">
			wbapp.loadStyles([
				"{{_var.base}}/bootstrap/bootstrap.css"
				,"/engine/lib/fonts/font-awesome/css/font-awesome.min.css"
				,"/engine/lib/fonts/materialicons/materialicons.css"
		    ,"https://fonts.googleapis.com/css?family=Lato:300,400,700"
		    ,"{{_var.base}}/css/owl.carousel.css"
		    ,"{{_var.base}}/css/owl.theme.default.min.css"
		    ,"{{_var.base}}/css/circle.css"
		    ,"{{_var.base}}/css/lightbox.min.css"
		    ,"{{_var.base}}/css/slicknav.css"
		    ,"{{_var.base}}/css/animate.css"
		    ,"{{_var.base}}/style.css"
		    ,"{{_var.base}}/responsive.css"
				,"{{_var.base}}/js/YTPlayer/css/jquery.mb.YTPlayer.min.css"
			]);

			wbapp.loadScripts([
				 "{{_var.base}}/bootstrap/bootstrap.min.js"
				,"{{_var.base}}/js/owl.carousel.min.js"
				,"{{_var.base}}/js/jquery.easing.1.3.js"
				,"{{_var.base}}/js/jquery.waypoints.min.js"
				,"{{_var.base}}/js/jquery.counterup.min.js"
				,"{{_var.base}}/js/lightbox.min.js"
				,"{{_var.base}}/js/jquery.slicknav.min.js"
				,"{{_var.base}}/js/YTPlayer/jquery.mb.YTPlayer.min.js"
				,"{{_var.base}}/js/active.js"
			],'siteready',function(){
					siteinit();
			});

		</script>
</body>

</html>