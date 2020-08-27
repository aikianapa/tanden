<html lang="en">
<wb-include wb-tpl="wrapper.inc.php" />

<wb-jq wb-html="main">
	<div id="blog-header" class="mt-30">
	         <div class="breadcumb"><a href="/"><i class="fa fa-home"></i></a>/
						 	<a href="{{_route.uri}}">{{header}}</a>
					 </div>
	      </div>
<div id="main">
	<wb-var type="article" wb-if='"{{_route.item}}" == "articles"' />
	<wb-var type="news" wb-if='"{{_route.item}}" != "articles"' />

	<div class="container">
		 <div class="row" id="blog">
			 	<wb-foreach wb="table=news&sort=date:d&size=6" wb-filter="{'active':'on','type':'{{_var.type}}'}">
			 		<wb-include wb-tpl="news.item.inc.php" />
				</wb-foreach>
		 </div>
	</div>

</div>

</wb-jq>
</html>
