<!DOCTYPE html>
<html lang="en">
<wb-include wb-tpl="wrapper.inc.php" />

<wb-jq wb-html="main">
    <!--Banner Section-->
				<div id="home" ></div>
        <div id="banner" style="background-image:url({{images.0.img}})">
            <div id="slider-content" wb-tree="field=prop&branch=slideshow&parent=false">
                <div class="owl-carousel owl-theme" id="content-slider">
                    <div class="sliding-content">
                        <h1 class="banner-heading animated fadeInUp">
                            <span class="first">АЙКИДО</span><span>АЙКИКАЙ</span>
                        </h1>
                        <h3 class="banner-content animated slideInRight">
                            {{name}}
                        </h3>
                        <p>

                        </p>
                        <br>
                        <p class="banner-btn animated bounceIn">
                            {{data.text}}
                        </p>
                    </div>
                </div>
            </div>
        </div>

    <!--End Banner Section-->


    <!--About Section-->
    <div id="about" class="section-padding">
        <wb-data wb="table=pages&item=about-us">
            <div class="heading">
                <h1>{{header}}</h1>
            </div>

            <div class="row about-container">
                <div class="col-md-5 about-image" style="background-image: url({{images.0.img}});"></div>
                <div class="col-md-7 col-md-offset-5">
                    <div class="about-content">
                        {{text}}
                    </div>
                </div>
            </div>
        </wb-data>

    </div>
    <!--End About Section-->



		    <!--Start Blog Section-->
		    <div id="blog" class="section-padding">
		        <div class="heading">
		            <h1>Наши <span>Новости</span></h1>
		        </div>
		        <div class="container">
		            <div class="row">
									 <wb-foreach wb="{'table':'news','limit':'3','sort':'date:d'}">
										 		<wb-var link="/news/{{id}}/{{wbFurlGenerate({{header}})}}" />
				                <div class="col-md-4 blog-item">
				                    <a class="image-link" href="{{_var.link}}">
				                        <img data-src="/thumbc/360x240/src/{{images.0.img}}" alt="{{header}}">
				                    </a>
				                    <h2>{{header}}</h2>
				                    <p>{{wbGetWords({{text}},20)}}</p>
				                    <a class="read-more" href="{{_var.link}}">Подробно</a>
				                </div>
										</wb-foreach>
		            </div>
		            <div class="clear"></div>
		            <a href="/news/" class="primary-btn">Все новости</a>
		        </div>
		    </div>
		    <!--End Blog Section-->

    <!--Start Team Section-->
    <div id="team" class="section-padding">
				<wb-data wb="table=pages&item=team">
        <div class="heading">
            <h1>{{header}}</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 owl-carousel owl-theme" id="team-carousel">
									<wb-foreach wb="from=prop.data">
                    <div class="col-md-12 team-member" wb-if='"{{active}}"=="on"'>
                        <img data-src="/thumbc/270x350/src/{{data.image.0.img}}" alt="{{name}}">
                        <div class="mask"></div>
                        <div class="social-links" data-wb-where='"{{data.prop.link.value}}">""'>
                            <a href="{{data.prop.link.value}}"><i class="fa fa-link" aria-hidden="true"></i><div>подробно</div></a>
                        </div>
                        <div class="title">
                            <p><b>{{name}}</b></p>
                            {{data.text}}
                        </div>
                    </div>
									</wb-foreach>
                </div>
            </div>
        </div>
				</div>
    </div>
    <!--End team Section-->


    <!--Start Work Section-->
    <!--div id="work" class="section-padding">
        <div class="heading">
            <h1>Our <span>Works</span></h1>
        </div>
        <div id="work-items">
            <div class="col-md-4 col-sm-6 single-item">
                <img src="images/works/1.png" alt="work">
                <div class="work-info">
                    <p class="title">Web Design Work</p>
                    <p class="links">
                        <a href="index-3.html"><i class="fa fa-paperclip" aria-hidden="true"></i></a>
                        <a href="images/works/1.png" data-lightbox="recent-work" data-title="Web Design Work"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 single-item">
                <img src="images/works/2.png" alt="work">
                <div class="work-info">
                    <p class="title">Mobile Apps</p>
                    <p class="links">
                        <a href="index-3.html"><i class="fa fa-paperclip" aria-hidden="true"></i></a>
                        <a href="images/works/2.png" data-lightbox="recent-work" data-title="Mobile Apps"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 single-item">
                <img src="images/works/3.png" alt="work">
                <div class="work-info">
                    <p class="title">Web Apps</p>
                    <p class="links">
                        <a href="index-3.html"><i class="fa fa-paperclip" aria-hidden="true"></i></a>
                        <a href="images/works/3.png" data-lightbox="recent-work" data-title="Web Apps"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 single-item">
                <img src="images/works/4.png" alt="work">
                <div class="work-info">
                    <p class="title">Logo Design</p>
                    <p class="links">
                        <a href="index-3.html"><i class="fa fa-paperclip" aria-hidden="true"></i></a>
                        <a href="images/works/4.png" data-lightbox="recent-work" data-title="Logo Design"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 single-item">
                <img src="images/works/5.png" alt="work">
                <div class="work-info">
                    <p class="title">Web Design Work</p>
                    <p class="links">
                        <a href="index-3.html"><i class="fa fa-paperclip" aria-hidden="true"></i></a>
                        <a href="images/works/5.png" data-lightbox="recent-work" data-title="Web Design Work"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 single-item">
                <img src="images/works/6.png" alt="work">
                <div class="work-info">
                    <p class="title">WordPress</p>
                    <p class="links">
                        <a href="index-3.html"><i class="fa fa-paperclip" aria-hidden="true"></i></a>
                        <a href="images/works/6.png" data-lightbox="recent-work" data-title="WordPress"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <a href="index-3.html" class="primary-btn top-margin">Load More</a>
    </div-->
    <!--End Work Section-->


    <!--Start Testemonial Section-->
    <div id="testemonial" class="section-padding">
				<wb-data wb="table=pages&item=testimonials">
        <div class="heading heading-inverse">
            <h1>Умные <span>слова</span></h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="owl-carousel owl-theme" id="client-carousel">
                    <wb-foreach wb-from="prop.data">
                    <div class="col-md-10 col-md-offset-1 single-item">
                        <p>{{data.text}}</p>
                        <div class="client">
                            <img data-wb-size="120;120;src" data-src="/thumbc/120x120/src/uploads/pages/home/{{data.image[0].img}}" alt="">
                            <p>{{name}}</p>
                        </div>
                    </div>
									</wb-foreach>
                </div>
            </div>
        </div>
				</wb-data>
    </div>
    <!--End Testemonial Section-->


		    <!--Раздел со статьями-->
		    <div id="service" class="section-padding">
		        <div class="heading">
		            <h1>Статьи</h1>
		        </div>
		        <div class="container">

		            <div class="row">
										<wb-foreach wb="{'table':'news','limit':'3','sort':'date:d'}" wb-filter="{'type':'article'}">
										<wb-var link="/articles/{{id}}/{{wbFurlGenerate({{header}})}}" />
		                <div class="col-md-4 col-sm-6">
		                    <div class="serviceBox">
		                        <div class="service-head">
		                            <h3>0{{_ndx}}</h3>
		                            <h4>{{header}}</h4>
		                        </div>
		                        <div class="service-content">
		                            {{wbGetWords({{text}},20)}}
		                        </div>
		                        <div class="read">
		                            <a href="{{_var.link}}" class="btn btn-default">читать</a>
		                        </div>
		                    </div>
		                </div>
										</wb-foreach>
		            </div>
		            <div class="clear mb-30"></div>
		            <a href="/articles/" class="primary-btn">Все статьи</a>
		        </div>
		    </div>
		    <!--End Service Section-->

    <!--Start Pricing Section -->
    <div id="pricing" class="section-padding">
				<wb-data wb="table=pages&item=schedule">
        <div class="heading">
            <h1>{{header}} <span>занятий</span></h1>
        </div>

        <div class="container">
            <div class="row">
								<wb-foreach wb-from="prop.data">
                <div class="col-md-6">
                    <div class="pricing-box">
                        <div class="pricing-head">
                            <h1>{{name}}</h1>
                            <h2>{{data.text}}</h2>
                        </div>
                        <div class="popular-tag" wb-if='"{{id}}"=="kids"'>от&nbsp;6&nbsp;лет</div>
                        <div class="plan-details">
                            <wb-foreach wb="from=data.prop">
                            <br>
                                <p><b>{{label}}</b> - <span>{{value}}</span></p>
                            </wb-foreach>
                            <a href="#contact" class="btn-order">Записаться</a>
                        </div>
                    </div>
                </div>
								</wb-foreach>
            </div>
        </div>
				</wb-data>
    </div>
    <!--End Pricing Section-->

    <!--Start Contact Section-->
    <div id="contact" class="section-padding">
        <div class="heading">
            <h1>наши <span>Контакты</span></h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8" id="contact-form">
                    <form method="post">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Ваше имя</label>
                                <input type="text" class="contact-control" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Эл.почта</label>
                                <input type="email" class="contact-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Телефон</label>
                                <input type="phone" class="contact-control" id="phone" name="phone">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="message">Сообщение</label>
                                <textarea class="contact-control" id="message" name="message" required></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <a style="cursor:pointer;" data-wb-ajax="/ajax/mail/" class="btn-order">Отправить сообщение</a>
                        </div>

                    </form>
                </div>
                <div class="col-md-4" id="contact-info">
                    <h2>Мы на <span>связи</span></h2>

                    <p>Эл.почта: <a href="mailto:{{_sett.email}}">{{_sett.email}}</a></p>
                    <p>Телефон: <a href="tel:{{_sett.phone}}">{{_sett.phone}}</a></p>
                    <br>
                    <p>Адрес: <a href="{{_ROUTE.uri}}#yamap_canvas0">{{_sett.city}}</a></p>
                    <p><a href="{{_ROUTE.uri}}#yamap_canvas0">{{_sett.address}}</a></p>

                </div>
            </div>
        </div>
    </div>
    <!--End Contact Section-->

    <!--Start Google Map-->
		<wb-include wb-tpl="widget.map.inc.php" />
    <!--End Google Map-->
</wb-jq>
</html>
