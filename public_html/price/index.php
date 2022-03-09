<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/price.css">
<main class="main page page_price">
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
                    <div class="sampleHeader__title sampleHeader__title_flex">
                        <span class="sampleHeaderTitle_js">Стоимость услуг</span>
                        <ul class="sampleHeader__reference">
                            <li>
                                <a href="#" class="sampleHeader__link">Гостевая карта</a>
                            </li>
                            <li>
                                <a href="#" class="sampleHeader__link">Подарочный сертификат</a>
                            </li>
                        </ul>
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
                            <span>Косметология</span>
                            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/arrowShowHide.svg';?>
                        </div>
                        <div class="sampleSelected__list">
                            <div class="sampleSelected__item samplePrice_js active" data-choice="cosmetology">Косметология</div>
                            <div class="sampleSelected__item samplePrice_js" data-choice="correction">Коррекция фигуры</div>
                            <div class="sampleSelected__item samplePrice_js" data-choice="quality">Качество жизни</div>
                            <div class="sampleSelected__item samplePrice_js" data-choice="salon">Салон красоты</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="price">
        <div class="price__container">
            <div class="priceAside__choice">Выберите услугу:</div>
            <div class="price__opted price__opted_action priceAsideOpted_js">
                <span>FOTONA</span>
                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/arrowShowHide.svg';?>
            </div>
            <div class="price__list sampleContent_js" data-category="cosmetology">
                <div class="price__aside priceAside">
                    <ul class="priceAside__list">
                        <li class="priceAside__item priceAside__item_action priceAsideItem_js active" data-aside="cosmetologyFototna">
                            <span>FOTONA</span>
                        </li>
                        <li class="priceAside__item priceAsideItem_js" data-aside="cosmetologyUlthera">
                            <span>Ulthera (Альтера) System</span>
                        </li>
                        <li class="priceAside__item priceAsideItem_js">
                            <span>Лазерная коррекция М22</span>
                        </li>
                        <li class="priceAside__item priceAsideItem_js">
                            <span>Газожидкостный пилинг Jet&nbsp;Peel</span>
                        </li>
                        <li class="priceAside__item priceAsideItem_js">
                            <span>Микроигольчатый <br>RF-лифтинг&nbsp;VIVACE</span>
                        </li>
                        <li class="priceAside__item priceAsideItem_js">
                            <span>Аппаратное <br>омоложение лица</span>
                        </li>
                        <li class="priceAside__item priceAsideItem_js">
                            <span>Уколы красоты</span>
                        </li>
                        <li class="priceAside__item priceAsideItem_js">
                            <span>Аква-пилинг</span>
                        </li>
                        <li class="priceAside__item priceAsideItem_js">
                            <span>Косметологическая <br>чистка лица</span>
                        </li>
                        <li class="priceAside__item priceAsideItem_js">
                            <span>Уходы для лица</span>
                        </li>
                    </ul>
                </div>
                <div class="price__content priceContent_js" data-detail="cosmetologyFototna">
                    <div class="priceAction">
                        <div class="priceAction__content">
                            <div class="priceAction__title">
                                <div class="priceAction__present">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/discount.svg';?>
                                </div>
                                <span>
                                    Скидка&nbsp;&minus;25% на&nbsp;лазерное омоложение <br>FOTONA 4D&nbsp;при покупке курса от&nbsp;трех процедур
                                </span>
                            </div>
                            <div class="priceAction__cost costDiscont">
                                <div class="costDiscont__total">30 000 &#8381;</div>
                                <div class="costDiscont__old">40 000 &#8381;</div>
                            </div>
                            <div class="priceAction__seance">цена за сеанс</div>
                            <div class="priceAction__bottom">
                                <a href="#enroll" class="btn btn_black priceAction__btn popupEnroll_js">Записаться со скидкой</a>
                                <div class="priceAction__certificate">
                                    <a href="#" class="priceAction__certificate_link">Подарить сертификат</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="priceList">
                        <div class="priceList__content">
                            <div class="priceList__box">
                                <div class="priceList__title">Комплексные технологии омоложения</div>
                                <div class="priceList__roster">
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">FOTONA  4D</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <object type="owo/uwu">
                                                <a href="#enroll"  class="btn btn_black priceList__btn popupEnroll_js">Записаться</a>
                                            </object>
                                            <div class="priceList__cost">15 680 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">4D Fotona 4D  /  от 3 процедур  /  цена за сеанс</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <object type="owo/uwu">
                                                <a href="#enroll"  class="btn btn_black priceList__btn popupEnroll_js">Записаться</a>
                                            </object>
                                            <div class="priceList__cost costDiscont">
                                                <div class="costDiscont__total">30 000 &#8381;</div>
                                                <div class="costDiscont__old">40 000 &#8381;</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">SMOOTHEye</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <object type="owo/uwu">
                                                <a href="#enroll"  class="btn btn_black priceList__btn popupEnroll_js">Записаться</a>
                                            </object>
                                            <div class="priceList__cost">95 780 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">SMOOTHLips</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <object type="owo/uwu">
                                                <a href="#enroll"  class="btn btn_black priceList__btn popupEnroll_js">Записаться</a>
                                            </object>
                                            <div class="priceList__cost">65 000 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">ThightSculping  /  1 зона 10х10см</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <object type="owo/uwu">
                                                <a href="#"  class="btn btn_black priceList__btn">Записаться</a>
                                            </object>
                                            <div class="priceList__cost">14 000 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper priceList__wrapper_program">
                                            <div class="priceList__name">Комплекс лечения кожи головы</div>
                                            <div class="priceList__program">Программа  2 в 1</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <object type="owo/uwu">
                                                <a href="#"  class="btn btn_black priceList__btn">Записаться</a>
                                            </object>
                                            <div class="priceList__cost">30 000 &#8381;</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="priceList__box">
                                <div class="priceList__title">Лечение сосудистой патологии</div>
                                <div class="priceList__roster">
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">Простое удаление сосудов на&nbsp;теле&nbsp;/ 15&nbsp;мин</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <object type="owo/uwu">
                                                <a href="#"  class="btn btn_black priceList__btn">Записаться</a>
                                            </object>
                                            <div class="priceList__cost">15 680 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">Сложное удаление сосудов на&nbsp;теле&nbsp;/ 30&nbsp;мин</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <object type="owo/uwu">
                                                <a href="#"  class="btn btn_black priceList__btn">Записаться</a>
                                            </object>
                                            <div class="priceList__cost">65 780 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">Лечение сосудистых патологий лица простое</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <object type="owo/uwu">
                                                <a href="#"  class="btn btn_black priceList__btn">Записаться</a>
                                            </object>
                                            <div class="priceList__cost">95 780 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">Лечение сосудистых патологий лица сложное</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <object type="owo/uwu">
                                                <a href="#"  class="btn btn_black priceList__btn">Записаться</a>
                                            </object>
                                            <div class="priceList__cost">65 000 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">Удаление сосудов на&nbsp;крыльях носа</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <object type="owo/uwu">
                                                <a href="#"  class="btn btn_black priceList__btn">Записаться</a>
                                            </object>
                                            <div class="priceList__cost">7 599 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">Лечение винного пятна&nbsp;/ до&nbsp;7&nbsp;кв.&nbsp;см</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <object type="owo/uwu">
                                                <a href="#"  class="btn btn_black priceList__btn">Записаться</a>
                                            </object>
                                            <div class="priceList__cost">4 250 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">Лечение единичных сосудистых патологий  /  шт</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <object type="owo/uwu">
                                                <a href="#"  class="btn btn_black priceList__btn">Записаться</a>
                                            </object>
                                            <div class="priceList__cost">500 &#8381;</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="price__content priceContent_js hide" data-detail="cosmetologyUlthera">
                    <div class="priceList">
                        <div class="priceList__content">
                            <div class="priceList__box">
                                <div class="priceList__title">Комплексные технологии омоложения</div>
                                <div class="priceList__roster">
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">FOTONA  4D</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <object type="owo/uwu">
                                                <a href="#"  class="btn btn_black priceList__btn">Записаться</a>
                                            </object>
                                            <div class="priceList__cost">15 680 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">4D Fotona 4D  /  от 3 процедур  /  цена за сеанс</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <object type="owo/uwu">
                                                <a href="#"  class="btn btn_black priceList__btn">Записаться</a>
                                            </object>
                                            <div class="priceList__cost costDiscont">
                                                <div class="costDiscont__total">30 000 &#8381;</div>
                                                <div class="costDiscont__old">40 000 &#8381;</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">SMOOTHEye</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <object type="owo/uwu">
                                                <a href="#"  class="btn btn_black priceList__btn">Записаться</a>
                                            </object>
                                            <div class="priceList__cost">95 780 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">SMOOTHLips</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <object type="owo/uwu">
                                                <a href="#"  class="btn btn_black priceList__btn">Записаться</a>
                                            </object>
                                            <div class="priceList__cost">65 000 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">ThightSculping  /  1 зона 10х10см</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <object type="owo/uwu">
                                                <a href="#"  class="btn btn_black priceList__btn">Записаться</a>
                                            </object>
                                            <div class="priceList__cost">14 000 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper priceList__wrapper_program">
                                            <div class="priceList__name">Комплекс лечения кожи головы</div>
                                            <div class="priceList__program">Программа  2 в 1</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <object type="owo/uwu">
                                                <a href="#"  class="btn btn_black priceList__btn">Записаться</a>
                                            </object>
                                            <div class="priceList__cost">30 000 &#8381;</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="priceList__box">
                                <div class="priceList__title">Лечение сосудистой патологии</div>
                                <div class="priceList__roster">
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">Простое удаление сосудов на&nbsp;теле&nbsp;/ 15&nbsp;мин</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <object type="owo/uwu">
                                                <a href="#"  class="btn btn_black priceList__btn">Записаться</a>
                                            </object>
                                            <div class="priceList__cost">15 680 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">Сложное удаление сосудов на&nbsp;теле&nbsp;/ 30&nbsp;мин</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <object type="owo/uwu">
                                                <a href="#"  class="btn btn_black priceList__btn">Записаться</a>
                                            </object>
                                            <div class="priceList__cost">65 780 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">Лечение сосудистых патологий лица простое</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <object type="owo/uwu">
                                                <a href="#"  class="btn btn_black priceList__btn">Записаться</a>
                                            </object>
                                            <div class="priceList__cost">95 780 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">Лечение сосудистых патологий лица сложное</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <object type="owo/uwu">
                                                <a href="#"  class="btn btn_black priceList__btn">Записаться</a>
                                            </object>
                                            <div class="priceList__cost">65 000 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">Удаление сосудов на&nbsp;крыльях носа</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <object type="owo/uwu">
                                                <a href="#"  class="btn btn_black priceList__btn">Записаться</a>
                                            </object>
                                            <div class="priceList__cost">7 599 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">Лечение винного пятна&nbsp;/ до&nbsp;7&nbsp;кв.&nbsp;см</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <object type="owo/uwu">
                                                <a href="#"  class="btn btn_black priceList__btn">Записаться</a>
                                            </object>
                                            <div class="priceList__cost">4 250 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">Лечение единичных сосудистых патологий  /  шт</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <object type="owo/uwu">
                                                <a href="#"  class="btn btn_black priceList__btn">Записаться</a>
                                            </object>
                                            <div class="priceList__cost">500 &#8381;</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="price__list sampleContent_js hide" data-category="correction">
                <div class="price__aside priceAside">
                    <ul class="priceAside__list">
                        <li class="priceAside__item priceAsideItem_js active" data-aside="correctionFotona">
                            <span>FOTONA фигура</span>
                        </li>
                        <li class="priceAside__item priceAsideItem_js" data-aside="correctionUlthera">
                            <span>Ulthera (Альтера) System</span>
                        </li>
                    </ul>
                </div>
                <div class="price__content priceContent_js" data-detail="correctionFotona">
                    <div class="priceList">
                        <div class="priceList__content">
                            <div class="priceList__box">
                                <div class="priceList__title">Комплексные технологии омоложения</div>
                                <div class="priceList__roster">
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">FOTONA  4D</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <div class="btn btn_black priceList__btn">Записаться</div>
                                            <div class="priceList__cost">15 680 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">4D Fotona 4D  /  от 3 процедур  /  цена за сеанс</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <div class="btn btn_black priceList__btn">Записаться</div>
                                            <div class="priceList__cost costDiscont">
                                                <div class="costDiscont__total">30 000 &#8381;</div>
                                                <div class="costDiscont__old">40 000 &#8381;</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">SMOOTHEye</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <div class="btn btn_black priceList__btn">Записаться</div>
                                            <div class="priceList__cost">95 780 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">SMOOTHLips</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <div class="btn btn_black priceList__btn">Записаться</div>
                                            <div class="priceList__cost">65 000 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">ThightSculping  /  1 зона 10х10см</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <div class="btn btn_black priceList__btn">Записаться</div>
                                            <div class="priceList__cost">14 000 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper priceList__wrapper_program">
                                            <div class="priceList__name">Комплекс лечения кожи головы</div>
                                            <div class="priceList__program">Программа  2 в 1</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <div class="btn btn_black priceList__btn">Записаться</div>
                                            <div class="priceList__cost">30 000 &#8381;</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="priceList__box">
                                <div class="priceList__title">Лечение сосудистой патологии</div>
                                <div class="priceList__roster">
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">Простое удаление сосудов на&nbsp;теле&nbsp;/ 15&nbsp;мин</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <div class="btn btn_black priceList__btn">Записаться</div>
                                            <div class="priceList__cost">15 680 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">Сложное удаление сосудов на&nbsp;теле&nbsp;/ 30&nbsp;мин</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <div class="btn btn_black priceList__btn">Записаться</div>
                                            <div class="priceList__cost">65 780 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">Лечение сосудистых патологий лица простое</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <div class="btn btn_black priceList__btn">Записаться</div>
                                            <div class="priceList__cost">95 780 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">Лечение сосудистых патологий лица сложное</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <div class="btn btn_black priceList__btn">Записаться</div>
                                            <div class="priceList__cost">65 000 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">Удаление сосудов на&nbsp;крыльях носа</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <div class="btn btn_black priceList__btn">Записаться</div>
                                            <div class="priceList__cost">7 599 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">Лечение винного пятна&nbsp;/ до&nbsp;7&nbsp;кв.&nbsp;см</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <div class="btn btn_black priceList__btn">Записаться</div>
                                            <div class="priceList__cost">4 250 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">Лечение единичных сосудистых патологий  /  шт</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <div class="btn btn_black priceList__btn">Записаться</div>
                                            <div class="priceList__cost">500 &#8381;</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="price__content priceContent_js hide" data-detail="correctionUlthera">
                    <div class="priceList">
                        <div class="priceList__content">
                            <div class="priceList__box">
                                <div class="priceList__title">Лечение сосудистой патологии</div>
                                <div class="priceList__roster">
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">Простое удаление сосудов на&nbsp;теле&nbsp;/ 15&nbsp;мин</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <div class="btn btn_black priceList__btn">Записаться</div>
                                            <div class="priceList__cost">15 680 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">Сложное удаление сосудов на&nbsp;теле&nbsp;/ 30&nbsp;мин</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <div class="btn btn_black priceList__btn">Записаться</div>
                                            <div class="priceList__cost">65 780 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">Лечение сосудистых патологий лица простое</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <div class="btn btn_black priceList__btn">Записаться</div>
                                            <div class="priceList__cost">95 780 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">Лечение сосудистых патологий лица сложное</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <div class="btn btn_black priceList__btn">Записаться</div>
                                            <div class="priceList__cost">65 000 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">Удаление сосудов на&nbsp;крыльях носа</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <div class="btn btn_black priceList__btn">Записаться</div>
                                            <div class="priceList__cost">7 599 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">Лечение винного пятна&nbsp;/ до&nbsp;7&nbsp;кв.&nbsp;см</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <div class="btn btn_black priceList__btn">Записаться</div>
                                            <div class="priceList__cost">4 250 &#8381;</div>
                                        </div>
                                    </a>
                                    <a href="#" class="priceList__item">
                                        <div class="priceList__wrapper">
                                            <div class="priceList__name">Лечение единичных сосудистых патологий  /  шт</div>
                                        </div>
                                        <div class="priceList__wrapper priceList__wrapper_right">
                                            <div class="btn btn_black priceList__btn">Записаться</div>
                                            <div class="priceList__cost">500 &#8381;</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="price__clickbait">
            <div class="priceAction__bottom">
                <a href="#" class="btn btn_black priceAction__btn">Записаться<span> со скидкой</span></a>
                <div class="priceAction__certificate">
                    <a href="#" class="priceAction__certificate_link">Подарить сертификат</a>
                </div>
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
<div class="smallHeader_js pagePrice_js hidden"></div>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>