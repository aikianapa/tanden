<html>
<wb-include wb-tpl="wrapper.inc.php" />

<wb-jq wb-html="main">
	<div id="about" class="section-padding mt-80">
			<wb-data wb="table=pages&item=about-us">
					<div class="heading">
							<h1>Страница не найдена</h1>
					</div>

					<div class="row about-container">
							<div class="col-md-5 about-image" style="background-image: url({{images.0.img}});"></div>
							<div class="col-md-7 col-md-offset-5">
									<div class="about-content">
											<h3>Ошибка 404</h3>
											Запрошеная вами страница удалена, перемещена или никогда не существовала.
											Для дальнейшего просмотра сайта перейдите на домашнюю страницу.
											<div class="read">
												<a href="/" class="btn-order"><i class="fa fa-home"></i> домой</a>
											</div>
											{{_route}}
									</div>
							</div>
					</div>
			</wb-data>

	</div>
</wb-jq>
</html>
