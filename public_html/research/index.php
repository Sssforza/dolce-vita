<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/research.css">
<main class="main page page_research">
    <section class="sample firstSection_js">
        <div class="sample__container">
            <section class="breadCrumbs">
                <ul class="breadCrumbs__list">
                    <li class="breadCrumbs__item">
                        <a href="/" class="breadCrumbs__link">Главная</a>
                    </li>
                    <li class="breadCrumbs__item">
                        <span class="breadCrumbs__span">Поиск</span>
                    </li>
                </ul>
            </section>
            <div class="sample__content">
                <div class="sampleHeader">
                    <div class="sampleHeader__title">
                        <span class="sampleHeaderTitle_js">Поиск по сайту</span>
                    </div>
                </div>
                <div class="sampleSearch">
                    <div class="sampleSearch__content">
                        <form class="sampleSearch__envelope">
                            <button class="sampleSearch__button">
                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/loupe.svg';?>
                            </button>
                            <input class="sampleSearch__input sampleSearchInput_js" value="Ulthera" placeholder="Введите название услуги" type="text">
                        </form>
                        <div class="headerSearch__contextual searchContextual searchContextual_js">
                            <div class="searchContextual__content">
                                <div class="searchContextual__scroll customScroll">
                                    <div class="searchContextual__list">
                                        <a href="#" class="searchContextual__item">
                                            <div class="searchContextual__img" style="background-image:url(/dist/img/trash/contextualImg1.jpg)"></div>
                                            <div class="searchContextual__name">
                                                Ulthera (Альтера) System
                                            </div>
                                        </a>
                                        <a href="#" class="searchContextual__item">
                                            <div class="searchContextual__img" style="background-image:url(/dist/img/trash/contextualImg1.jpg)"></div>
                                            <div class="searchContextual__name">
                                                Ulthera (Альтера) System
                                            </div>
                                        </a>
                                        <a href="#" class="searchContextual__item">
                                            <div class="searchContextual__img" style="background-image:url(/dist/img/trash/contextualImg1.jpg)"></div>
                                            <div class="searchContextual__name">
                                                Ulthera (Альтера) System
                                            </div>
                                        </a>
                                        <a href="#" class="searchContextual__item">
                                            <div class="searchContextual__img" style="background-image:url(/dist/img/trash/contextualImg1.jpg)"></div>
                                            <div class="searchContextual__name">
                                                Ulthera (Альтера) System
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="research">
        <div class="research__content">
            <div class="research__box">
                <div class="research__title">Услуги:</div>
                <div class="research__list research__list_service serviceProcedure">
                    <div class="serviceProcedure__item">
                        <a href="#" class="serviceProcedure__img serviceProcedureHover_js" style="background-image:url(/dist/img/trash/serviceProcedure1.jpg)"></a>
                        <div class="serviceProcedure__box">
                            <div class="serviceProcedure__name">
                                <a href="#" class="serviceProcedure__link serviceProcedureHover_js">Альтера-терапия</a>
                            </div>
                            <div class="serviceProcedure__cost">от 40 000</div>
                            <div class="serviceProcedure__seance">1 сеанс</div>
                        </div>
                    </div>
                    <div class="serviceProcedure__item">
                        <a href="#" class="serviceProcedure__img serviceProcedureHover_js" style="background-image:url(/dist/img/trash/serviceProcedure2.jpg)"></a>
                        <div class="serviceProcedure__box">
                            <div class="serviceProcedure__name">
                                <a href="#" class="serviceProcedure__link serviceProcedureHover_js">Лазерная эпияция LightSheer Duet</a>
                            </div>
                            <div class="serviceProcedure__cost">7 000</div>
                            <div class="serviceProcedure__seance">4 сеанса</div>
                        </div>
                    </div>
                    <div class="serviceProcedure__item">
                        <a href="#" class="serviceProcedure__img serviceProcedureHover_js" style="background-image:url(/dist/img/trash/serviceProcedure2.jpg)"></a>
                        <div class="serviceProcedure__box">
                            <div class="serviceProcedure__name">
                                <a href="#" class="serviceProcedure__link serviceProcedureHover_js">Криолиполиз</a>
                            </div>
                            <div class="serviceProcedure__cost">от 15 500</div>
                            <div class="serviceProcedure__seance">от 3 сеансов</div>
                        </div>
                    </div>
                    <div class="serviceProcedure__item">
                        <a href="#" class="serviceProcedure__img serviceProcedureHover_js" style="background-image:url(/dist/img/trash/serviceProcedure1.jpg)"></a>
                        <div class="serviceProcedure__box">
                            <div class="serviceProcedure__name">
                                <a href="#" class="serviceProcedure__link serviceProcedureHover_js">Лазерная эпияция LightSheer Duet</a>
                            </div>
                            <div class="serviceProcedure__cost">7 000</div>
                            <div class="serviceProcedure__seance">4 сеанса</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="research__box">
                <div class="research__title">Статьи:</div>
                <div class="research__list research__list_article blogArticles__list">
                    <div class="blogArticles__item">
                        <a href="#" class="blogArticles__img blogArticles_js" style="background-image:url(/dist/img/trash/blogArticles1.jpg)"></a>
                        <div class="blogArticles__title">
                            <a href="#" class="blogArticles__link blogArticles_js">
                                Аппарат М-22 от Lumenis является последней новинкой от компании Lumenis
                            </a>
                        </div>
                        <div class="blogArticles__date">25 марта 2021</div>
                    </div>
                    <div class="blogArticles__item">
                        <a href="#" class="blogArticles__img blogArticles_js" style="background-image:url(/dist/img/trash/blogArticles2.jpg)"></a>
                        <div class="blogArticles__title">
                            <a href="#" class="blogArticles__link blogArticles_js">
                                Криолиполиз — что это такое? Преимущества и недостатки
                            </a>
                        </div>
                        <div class="blogArticles__date">25 марта 2021</div>
                    </div>
                    <div class="blogArticles__item">
                        <a href="#" class="blogArticles__img blogArticles_js" style="background-image:url(/dist/img/trash/blogArticles3.jpg)"></a>
                        <div class="blogArticles__title">
                            <a href="#" class="blogArticles__link blogArticles_js">
                                Технология омоложения Fotona 4D
                            </a>
                        </div>
                        <div class="blogArticles__date">25 марта 2021</div>
                    </div>
                </div>
            </div>
            <div class="research__box">
                <div class="research__title">Товары:</div>
                <div class="research__list research__list_goods">
                    <div class="serviceCosmetics__item">
                        <div class="serviceCosmetics__img" style="background-image:url(/dist/img/trash/serviceCosmetics2.png)"></div>
                        <div class="serviceCosmetics__box">
                            <div class="serviceCosmetics__title">
                                <a href="#" class="serviceCosmetics__link">Ферментный Пилинг-Бальзам Refine Cellular</a>
                            </div>
                            <div class="serviceCosmetics__description">
                                <p>4&nbsp;x Ампулы 3D&nbsp;Лифтинг,</p>
                                <p>3&nbsp;x Ампулы Экспресс Лифтинг</p>
                            </div>
                        </div>
                        <div class="serviceCosmetics__bottom">
                            <div class="serviceCosmetics__cost">11 500 Р</div>
                            <div class="serviceCosmetics__basket">
                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/basket.svg';?>
                            </div>
                        </div>
                    </div>
                    <div class="serviceCosmetics__item">
                        <div class="serviceCosmetics__img" style="background-image:url(/dist/img/trash/serviceCosmetics3.png)"></div>
                        <div class="serviceCosmetics__box">
                            <div class="serviceCosmetics__title">
                                <a href="#" class="serviceCosmetics__link">Ампулы с Ретинолом DOCTOR BABOR</a>
                            </div>
                            <div class="serviceCosmetics__description">Эффективная альтернатива инъекционной коррекции</div>
                        </div>
                        <div class="serviceCosmetics__bottom">
                            <div class="serviceCosmetics__cost">28 500 Р</div>
                            <div class="serviceCosmetics__basket">
                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/basket.svg';?>
                            </div>
                        </div>
                    </div>
                    <div class="serviceCosmetics__item">
                        <div class="serviceCosmetics__img" style="background-image:url(/dist/img/trash/serviceCosmetics4.png)"></div>
                        <div class="serviceCosmetics__box">
                            <div class="serviceCosmetics__title">
                                <a href="#" class="serviceCosmetics__link">Ампулы с Ретинолом DOCTOR BABOR</a>
                            </div>
                            <div class="serviceCosmetics__description">Очищение с дополнительным увлажнением</div>
                        </div>
                        <div class="serviceCosmetics__bottom">
                            <div class="serviceCosmetics__cost">
                                <span>3 500 Р</span>
                                <span>7 500 Р</span>
                            </div>
                            <div class="serviceCosmetics__basket">
                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/basket.svg';?>
                            </div>
                        </div>
                    </div>
                    <div class="serviceCosmetics__item">
                        <div class="serviceCosmetics__img" style="background-image:url(/dist/img/trash/serviceCosmetics1.png)"></div>
                        <div class="serviceCosmetics__box">
                            <div class="serviceCosmetics__title">
                                <a href="#" class="serviceCosmetics__link">Thalion Thalisvelt</a>
                            </div>
                            <div class="serviceCosmetics__description">Крем против отеков</div>
                        </div>
                        <div class="serviceCosmetics__bottom">
                            <div class="serviceCosmetics__cost">11 500 Р</div>
                            <div class="serviceCosmetics__basket">
                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/basket.svg';?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<div class="smallHeader_js hidden"></div>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>