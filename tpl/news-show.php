<html>
<wb-include wb-tpl="wrapper.inc.php" />

<wb-jq wb-html="main">
	<div id="blog-header" class="mt-30">
	         <div class="breadcumb"><a href="/"><i class="fa fa-home"></i></a>/
						 	<a href="/news" wb-if='"{{type}}" !== "article"'>Новости</a>
							<a href="/articles" wb-if='"{{type}}" == "article"'>Статьи</a>
					 </div>
	      </div>
<div id="main">


	<div class="container">
		 <div class="row">
				<section class="col-md-8" id="content">
						<div class="blog-item">
							 <img src="/thumbc/750x500/src/{{images.0.img}}" alt="{{header}}" class="img-responsive">

								 <h2>{{header}}</h2>
								 <p class="posted">Опубликовано {{date}} | Автор <a href="single-blog.html">{{wbCorrelation("users",{{_creator}},"name")}}</a></p>
								 <script type="wbapp">
								 		wbapp.loadScripts([
											"https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js",
											"https://yastatic.net/share2/share.js"
										])
								 </script>
								 <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,twitter,whatsapp,telegram"></div>
								 {{text}}
						</div>



				</section>

				<aside class="col-md-4" id="sidebar">

						<!--Recent Post-->
						<div class="widget" wb-if='"{{type}}" !== "article"'>
							 <h2 class="widget-title">Последние новости</h2>
							 <ul id="recent-post">
								 <wb-foreach wb="{'table':'news','limit':'3','sort':'date:d'}" wb-filter="{'type':'news'}">
									 <li>
										<a href="/news/{{id}}/{{wbFurlGenerate({{header}})}}">
											{{wbGetWords({{header}},10)}}<br />
											<small class="hidden-xs">{{wbGetWords({{text}},20)}}</small>
										</a>
										<span class="posted">Опубликовано {{date}}</span>
									 </li>
								 </wb-foreach>

							 </ul>
						</div>

						<div class="widget" wb-if='"{{type}}" == "article"'>
							 <h2 class="widget-title">Последние статьи</h2>
							 <ul id="recent-post">
								 <wb-foreach wb="{'table':'news','limit':'3','sort':'date:d'}" wb-filter="{'type':'article'}">
									 <li>
										<a href="/articles/{{id}}/{{wbFurlGenerate({{header}})}}">
											{{wbGetWords({{header}},10)}}<br />
											<small class="hidden-xs">{{wbGetWords({{text}},20)}}</small>
										</a>
										<span class="posted">Опубликовано {{date}}</span>
									 </li>
								 </wb-foreach>

							 </ul>
						</div>

						<!--Post Category-->
						<wb-include wb-tpl="widget.contacts.inc.php" />

				</aside>
		 </div>
	</div>

</div>

</wb-jq>
</html>
