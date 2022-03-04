<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/catalog.css">
<main class="main page page_catalog">
    <section class="pageCatalog catalog_js">
        <section class="sample firstSection_js">
            <div class="sample__container">
                <section class="breadCrumbs">
                    <ul class="breadCrumbs__list">
                        <li class="breadCrumbs__item">
                            <a href="/" class="breadCrumbs__link">Главная</a>
                        </li>
                        <li class="breadCrumbs__item">
                            <span class="breadCrumbs__span">Косметология</span>
                        </li>
                    </ul>
                </section>
                <div class="sample__content">
                    <div class="sampleHeader">
                        <div class="sampleHeader__title">
                            <span class="sampleHeaderTitle_js">Косметология</span>
                        </div>
                        <div class="sampleHeader__menu sampleHeaderMenu_js">
                            <div class="sampleHeader__selected sampleHeaderSelected_js">
                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/arrowShowHide.svg';?>
                            </div>
                            <div class="sampleHeader__drop">
                                <div class="sampleHeader__box">
                                    <div class="sampleHeader__ul">
                                        <a href="/catalog-cosmetology/" class="sampleHeader__li active">Косметология</a>
                                        <a href="/catalog-body/" class="sampleHeader__li">Коррекция фигуры</a>
                                        <a href="/catalog-life/" class="sampleHeader__li">Качество жизни</a>
                                        <a href="/catalog-salon/" class="sampleHeader__li">Салон красоты</a>
                                        <a href="/catalog-brands/" class="sampleHeader__li">Бренды</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sampleSearch">
                        <div class="sampleSearch__content">
                            <form class="sampleSearch__envelope">
                                <button class="sampleSearch__button">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/loupe.svg';?>
                                </button>
                                <input class="sampleSearch__input sampleSearchInput_js" placeholder="Введите название услуги" type="text">
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
                    <div class="sampleSelected">
                        <div class="sampleSelected__content">
                            <div class="sampleSelected__opted sampleSelectedOpted_js">
                                <span>По процедуре</span>
                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/arrowShowHide.svg';?>
                            </div>
                            <div class="sampleSelected__list">
                                <div class="sampleSelected__item sampleChoice_js" data-choice="all">Все услуги</div>
                                <div class="sampleSelected__item sampleChoice_js" data-choice="problem">По проблеме</div>
                                <div class="sampleSelected__item sampleChoice_js active" data-choice="procedure">По процедуре</div>
                                <div class="sampleSelected__item sampleChoice_js" data-choice="programm">Программы</div>
                                <div class="sampleSelected__item sampleChoice_js" data-choice="apparatus">Аппараты</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="catalogCards">
            <div class="catalogCards__content catalogCards_js hide" data-category="all">
                <div class="catalogCards__list">
                    <div class="card">
                        <a href="#" class="card__img cardHover_js" style="background-image:url(/dist/img/trash/card1.jpg)"></a>
                        <div class="card__content">
                            <a href="#" class="card__title cardHover_js">Идеальный овал лица</a>
                            <div class="card__cost card__cost_discount">
                                <span>18 500 &#8381;</span>
                                <span>7 500 &#8381;</span>
                            </div>
                            <ul class="card__composition">
                                <li class="card__device" style="background-image:url(/dist/img/trash/serviceProcedure1.jpg)"></li>
                                <li class="card__device" style="background-image:url(/dist/img/trash/firstScreen1.jpg)"></li>
                            </ul>
                            <div class="card__program">Программа  2 в 1</div>
                        </div>
                    </div>
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
                </div>
                <div class="btn btn_black catalogCards__btn">Показать еще</div>
            </div>
            <div class="catalogCards__content catalogCards_js hide" data-category="problem">
                <div class="catalogCards__list">
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
                </div>
                <div class="btn btn_black catalogCards__btn">Показать еще</div>
            </div>
            <div class="catalogCards__content catalogCards__content_procedure catalogCards_js" data-category="procedure">
                <div class="sampleSelected sampleSelected_middle">
                    <div class="sampleSelected__content">
                        <div class="sampleSelected__list">
                            <div class="sampleSelected__item middleChoice_js active" data-middle="face">Лицо</div>
                            <div class="sampleSelected__item middleChoice_js" data-middle="body">Тело</div>
                            <div class="sampleSelected__item middleChoice_js" data-middle="arms">Руки</div>
                            <div class="sampleSelected__item middleChoice_js" data-middle="legs">Ноги</div>
                            <div class="sampleSelected__item middleChoice_js" data-middle="hair">Волосы</div>
                        </div>
                    </div>
                </div>
                <div class="sampleDetailed">
                    <div class="sampleDetailed__content">
                        <div class="sampleDetailed__selected sampleDetailedSelected_js">
                            <span>Выберите проблему</span>
                            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/arrowShowHide.svg';?>
                        </div>
                        <div class="sampleDetailed__drop sampleHeader__drop sampleDetailed_js" data-problem="face">
                            <div class="sampleHeader__box">
                                <div class="sampleHeader__ul">
                                    <div class="sampleHeader__li sampleDetail_js" data-detail="wrinkles">Морщины</div>
                                    <div class="sampleHeader__li sampleDetail_js" data-detail="acne">Угри</div>
                                    <div class="sampleHeader__li sampleDetail_js" data-detail="elasticity">Снижения эластичности кожи</div>
                                    <div class="sampleHeader__li sampleDetail_js" data-detail="resilience">Снижения упругости кожи</div>
                                </div>
                            </div>
                        </div>
                        <div class="sampleDetailed__drop sampleHeader__drop sampleDetailed_js hide" data-problem="body">
                            <div class="sampleHeader__box">
                                <div class="sampleHeader__ul">
                                    <div class="sampleHeader__li sampleDetail_js" data-detail="stretchs">Растяжки</div>
                                    <div class="sampleHeader__li sampleDetail_js" data-detail="bodyAcne">Угри</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="catalogCards__list catalogCardsList_js" data-list="face">
                    face
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
                </div>
                <div class="catalogCards__list catalogCardsList_js hide" data-list="body">
                    body
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
                </div>
                <div class="catalogCards__list catalogCardsList_js hide" data-list="wrinkles">
                    face wrinkles
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
                </div>
                <div class="catalogCards__list catalogCardsList_js hide" data-list="acne">
                    face Acne
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
                </div>
                <div class="catalogCards__list catalogCardsList_js hide" data-list="stretchs">
                    body stretchs
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
                </div>
                <div class="catalogCards__list catalogCardsList_js hide" data-list="bodyAcne">
                    body acne
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
                </div>
                <div class="btn btn_black catalogCards__btn">Показать еще</div>
            </div>
            <div class="catalogCards__content catalogCards_js hide" data-category="programm">
                <div class="catalogCards__list">
                    <div class="card">
                        <a href="#" class="card__img cardHover_js" style="background-image:url(/dist/img/trash/card1.jpg)"></a>
                        <div class="card__content">
                            <a href="#" class="card__title cardHover_js">Идеальный овал лица</a>
                            <div class="card__cost card__cost_discount">
                                <span>18 500 &#8381;</span>
                                <span>7 500 &#8381;</span>
                            </div>
                            <ul class="card__composition">
                                <li class="card__device" style="background-image:url(/dist/img/trash/serviceProcedure1.jpg)"></li>
                                <li class="card__device" style="background-image:url(/dist/img/trash/firstScreen1.jpg)"></li>
                            </ul>
                            <div class="card__program">Программа  2 в 1</div>
                        </div>
                    </div>
                    <div class="card">
                        <a href="#" class="card__img cardHover_js" style="background-image:url(/dist/img/trash/card2.jpg)"></a>
                        <div class="card__content">
                            <a href="#" class="card__title cardHover_js">Комплекс идеальная фигура</a>
                            <div class="card__cost">120 000 &#8381;</div>
                            <ul class="card__composition">
                                <li class="card__device" style="background-image:url(/dist/img/trash/serviceProcedure1.jpg)"></li>
                                <li class="card__device" style="background-image:url(/dist/img/trash/firstScreen1.jpg)"></li>
                                <li class="card__device" style="background-image:url(/dist/img/trash/firstScreen2.jpg)"></li>
                            </ul>
                            <div class="card__program">Программа  3 в 1</div>
                        </div>
                    </div>
                    <div class="card">
                        <a href="#" class="card__img cardHover_js" style="background-image:url(/dist/img/trash/card3.jpg)"></a>
                        <div class="card__content">
                            <a href="#" class="card__title cardHover_js">Комплекс коррекции фигуры </a>
                            <div class="card__cost">134 000 &#8381;</div>
                            <ul class="card__composition">
                                <li class="card__device" style="background-image:url(/dist/img/trash/serviceProcedure1.jpg)"></li>
                                <li class="card__device" style="background-image:url(/dist/img/trash/firstScreen1.jpg)"></li>
                                <li class="card__device" style="background-image:url(/dist/img/trash/firstScreen2.jpg)"></li>
                                <li class="card__device" style="background-image:url(/dist/img/trash/serviceProcedure2.jpg)"></li>
                            </ul>
                            <div class="card__program">Программа  4 в 1</div>
                        </div>
                    </div>
                    <div class="card">
                        <a href="#" class="card__img cardHover_js" style="background-image:url(/dist/img/trash/card4.jpg)"></a>
                        <div class="card__content">
                            <a href="#" class="card__title cardHover_js">Идеальный овал лица</a>
                            <div class="card__cost card__cost_discount">
                                <span>18 500 &#8381;</span>
                                <span>7 500 &#8381;</span>
                            </div>
                            <ul class="card__composition">
                                <li class="card__device" style="background-image:url(/dist/img/trash/firstScreen1.jpg)"></li>
                                <li class="card__device" style="background-image:url(/dist/img/trash/firstScreen2.jpg)"></li>
                            </ul>
                            <div class="card__program">Программа  2 в 1</div>
                        </div>
                    </div>
                    <div class="card">
                        <a href="#" class="card__img cardHover_js" style="background-image:url(/dist/img/trash/card5.jpg)"></a>
                        <div class="card__content">
                            <a href="#" class="card__title cardHover_js">Комплекс идеальная фигура</a>
                            <div class="card__cost">120 000 &#8381;</div>
                            <ul class="card__composition">
                                <li class="card__device" style="background-image:url(/dist/img/trash/serviceProcedure1.jpg)"></li>
                                <li class="card__device" style="background-image:url(/dist/img/trash/firstScreen1.jpg)"></li>
                                <li class="card__device" style="background-image:url(/dist/img/trash/firstScreen2.jpg)"></li>
                            </ul>
                            <div class="card__program">Программа  3 в 1</div>
                        </div>
                    </div>
                    <div class="card">
                        <a href="#" class="card__img cardHover_js" style="background-image:url(/dist/img/trash/card6.jpg)"></a>
                        <div class="card__content">
                            <a href="#" class="card__title cardHover_js">Комплекс коррекции фигуры </a>
                            <div class="card__cost">134 000 &#8381;</div>
                            <ul class="card__composition">
                                <li class="card__device" style="background-image:url(/dist/img/trash/serviceProcedure1.jpg)"></li>
                                <li class="card__device" style="background-image:url(/dist/img/trash/firstScreen1.jpg)"></li>
                                <li class="card__device" style="background-image:url(/dist/img/trash/firstScreen2.jpg)"></li>
                                <li class="card__device" style="background-image:url(/dist/img/trash/serviceProcedure2.jpg)"></li>
                            </ul>
                            <div class="card__program">Программа  4 в 1</div>
                        </div>
                    </div>
                </div>
                <div class="btn btn_black catalogCards__btn">Показать еще</div>
            </div>
            <div class="catalogCards__content catalogCards__content_apparatus catalogCards_js hide" data-category="apparatus">
                <div class="catalogCards__list">
                    <a href="#" class="card card_brend">
                        <img src="/dist/img/trash/cardBrend1.png" alt="">
                    </a>
                    <a href="#" class="card card_brend">
                        <img src="/dist/img/trash/cardBrend2.png" alt="">
                    </a>
                    <a href="#" class="card card_brend">
                        <img src="/dist/img/trash/cardBrend3.png" alt="">
                    </a>
                    <a href="#" class="card card_brend">
                        <img src="/dist/img/trash/cardBrend4.png" alt="">
                    </a>
                </div>
            </div>
        </section>
        <section class="sliderInfo">
            <div class="sliderInfo__content">
                <div class="sliderInfo__list sliderInfo_js">
                    <div class="sliderInfo__item">
                        <div class="sliderInfo__img" style="background-image:url(/dist/img/trash/card3.jpg)"></div>
                        <div class="sliderInfo__box">
                            <div class="sliderInfo__wrapper">
                                <div class="sliderInfo__title">Комплексная коррекция фигуры</div>
                                <div class="sliderInfo__detail">
                                    <span>2 насадки криолиполиза</span>
                                    <span>4 сеанса ICOONE</span>
                                </div>
                                <div class="sliderInfo__cost sliderInfo__cost_discount">
                                    <span>28 500 &#8381;</span>
                                    <span>59 000 &#8381;</span>
                                </div>
                            </div>
                            <a href="#sliderInfoPopup" class="btn btn_blackBorder sliderInfo__btn sliderInfoBtn_js">Подробнее</a>
                        </div>
                    </div>
                    <div class="sliderInfo__item">
                        <div class="sliderInfo__img" style="background-image:url(/dist/img/trash/card3.jpg)"></div>
                        <div class="sliderInfo__box">
                            <div class="sliderInfo__wrapper">
                                <div class="sliderInfo__title">2 Комплексная коррекция фигуры</div>
                                <div class="sliderInfo__detail">
                                    <span>2 насадки криолиполиза</span>
                                    <span>4 сеанса ICOONE</span>
                                </div>
                                <div class="sliderInfo__cost">59 000 &#8381;</div>
                            </div>
                            <a href="#sliderInfoPopup" class="btn btn_blackBorder sliderInfo__btn sliderInfoBtn_js">Подробнее</a>
                        </div>
                    </div>
                    <div class="sliderInfo__item">
                        <div class="sliderInfo__img" style="background-image:url(/dist/img/trash/card3.jpg)"></div>
                        <div class="sliderInfo__box">
                            <div class="sliderInfo__wrapper">
                                <div class="sliderInfo__title">3 Комплексная коррекция фигуры</div>
                                <div class="sliderInfo__detail">
                                    <span>2 насадки криолиполиза</span>
                                    <span>4 сеанса ICOONE</span>
                                </div>
                                <div class="sliderInfo__cost sliderInfo__cost_discount">
                                    <span>28 500 &#8381;</span>
                                    <span>59 000 &#8381;</span>
                                </div>
                            </div>
                            <a href="#sliderInfoPopup" class="btn btn_blackBorder sliderInfo__btn sliderInfoBtn_js">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="textInfo">
            <div class="textInfo__content">
                <div class="textInfo__title">Косметология в Омске</div>
                <div class="textInfo__txt">
                    <p>
                        Единственная процедура с&nbsp;технологией микро-сфокусированного ультразвука для лифтинга кожи, одобренная FDA и&nbsp;разрешенная к&nbsp;применению в&nbsp;России, Западной Европе и&nbsp;США.
                    </p>
                    <p>
                        Действие процедуры направлено на&nbsp;низлежащий мышечно-апоневротический слой (SMAS), который образует поддерживающий каркас лица и&nbsp;плотно фиксирует мягкие ткани. В&nbsp;его состав (как и&nbsp;в&nbsp;состав дермы) входят волокна коллагена и&nbsp;эластина
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
<div id="sliderInfoPopup" class="mfp-hide white-popup-block popup">
	<div class="popup__content">
        <div class="popup__close popupClose_js">
            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/popupClose.svg';?>
        </div>
        <div class="popup__program">Программа  2 в 1</div>
        <div class="popup__title">Комплексная коррекция фигуры</div>
        <div class="popup__cost popup__cost_discount">
            <span>28 500 &#8381;</span>
            <span>59 000 &#8381;</span>
        </div>
        <div class="popup__description">
            Программа восстановление овала и&nbsp;упругости кожи на&nbsp;двух высокотехнологичных аппаратах
            одобренных в&nbsp;России и&nbsp;США. Лазерное омоложение на&nbsp;аппарате FOTONA позволяет в&nbsp;рамках
            одной процедуры выполнить комплекс из&nbsp;четырех запатентованных anti-age технологий
        </div>
        <ul class="popup__composition">
            <li class="popup__device">
                <span class="popup__device_img" style="background-image:url(/dist/img/trash/serviceProcedure1.jpg)"></span>
                <span class="popup__device_title">Ultherapy</span>
            </li>
            <li class="popup__device">
                <span class="popup__device_img" style="background-image:url(/dist/img/trash/serviceProcedure2.jpg)"></span>
                <span class="popup__device_title">Fotona 4D</span>
            </li>
        </ul>
        <div class="popup__bottom">
            <a href="#" class="btn btn_black popup__btn">Записаться</a>
            <a href="#" class="btn btn_blackBorder popup__btn">Подробнее</a>
        </div>
    </div>
</div>
<div class="smallHeader_js hidden"></div>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>