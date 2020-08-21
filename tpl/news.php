<meta data-wb-role="include" src="template" data-wb-name="wrapper.inc.php">

<div data-wb-html="main" data-wb-hide="*">

    <!--Start Blog Header-->
    <div id="blog-header">
        <div data-wb-where='"{{_route.category}}"="news"' class="breadcumb"><a href="/">Главная</a>/<a href="/news/">Новости</a></div>
        <div data-wb-where='"{{_route.category}}"="articles"' class="breadcumb"><a href="/">Главная</a>/<a href="/articles/">Статьи</a></div>
    </div>
    <!--End Blog Header-->

    <div id="main">
        <div class="container">
            <div class="row">
                <section class="col-md-8" id="content">
                    <div data-wb-role="foreach" data-wb-from="news" data-wb-size="7">
                        <div class="blog-item">
                            <a href="/{{_route.category}}/{{id}}/" data-wb-where=' "{{images[0].img}}" > ""' data-wb-hide="wb">
                                <img data-wb-role="thumbnail" data-wb-size="700;500;src" src="0" alt="{{header}}" data-wb-noimg="/tpl/images/blog/1.png">
                            </a>
                            <a href="/{{_route.category}}/{{id}}/">
                                <h2>{{header}}</h2>
                            </a>
                            <p>{{text->wbGetWords(@,20)}}</p>
                            <p class="posted">Опубликовано {{date("d.m.Y",strtotime({{date}}))}}</p>
                        </div>
                    </div>

                </section>

                <aside class="col-md-4" id="sidebar">

                    <!--Search Box-->
                    <form class="widget" method="post" action="/{{_route.category}}/">
                        <input type="text" name="find" class="search-box" placeholder="Поиск ...">
                        <button type="submit" class="search-btn">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>

                    <!--Recent Post-->
                    <div class="widget">
                        <h2 class="widget-title">Последние публикации</h2>
                        <ul id="recent-post" data-wb-role="foreach" data-wb-form="news" data-wb-where='active="on"' data-wb-limit="3" data-wb-tpl="false" data-wb-sort="date:d">
                            <meta data-wb-role="variable" var="category" data-wb-if='article="on"' value="articles" else="news" data-wb-hide="*">
                            <li>
                                <a href="/{{_var.category}}/{{id}}/">{{header}} </a>
                                <span class="posted">Опубликовано {{date("d.m.Y",strtotime({{date}}))}}</span>
                            </li>
                        </ul>
                    </div>

                    <!--Post Category-->
                    <div class="widget">
                        <h2 class="widget-title">Категории</h2>
                        <ul id="post-category">
                            <li><a href="/news/">Новости</a></li>
                            <li><a href="/articles/">Статьи</a></li>
                        </ul>
                    </div>

                </aside>
            </div>
        </div>

    </div>

</div>
