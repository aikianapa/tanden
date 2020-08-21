<html>
<wb-include wb-tpl="wrapper.inc.php" />

<wb-jq wb-html="main">
    <!--About Section-->
    <div id="about" class="section-padding mt-80">

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

    </div>


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
                    <wb-include wb-tpl="widget.contacts.inc.php" />
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
