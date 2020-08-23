<html lang="en">
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
		 <div class="row" id="blog">
			 	<wb-foreach wb="table=news&type=news&sort=date:d&size=6&render=server">
					<wb-var link="/news/{{id}}/{{wbFurlGenerate({{header}})}}" />
			 		<wb-include wb-tpl="news.item.inc.php" />
				</wb-foreach>
		 </div>
	</div>

</div>

</wb-jq>
</html>
