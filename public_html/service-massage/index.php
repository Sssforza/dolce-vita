<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/service.css">
<main class="main page page_service">
    <section class="firstScreen firstSection_js">
        <div class="firstScreen__content">
            <div class="firstScreen__wrapper">
                <div class="firstScreen__box">
                    <section class="breadCrumbs">
                        <ul class="breadCrumbs__list">
                            <li class="breadCrumbs__item">
                                <a href="#" class="breadCrumbs__link">Услуги</a>
                            </li>
                            <li class="breadCrumbs__item">
                                <a href="#" class="breadCrumbs__link">Косметология</a>
                            </li>
                            <li class="breadCrumbs__item">
                                <span class="breadCrumbs__span">Ручной массаж</span>
                            </li>
                        </ul>
                    </section>
                    <div class="firstScreen__title">Ручной массаж</div>
                    <div class="firstScreen__text">
                        Благоприятное воздействие классического массажа на&nbsp;организм человека неоспоримо.
                        Его используют как для лечения заболеваний, так и&nbsp;для их&nbsp;профилактики. Методика позволяет
                        устранять отечность, болевые ощущения, зажимы, изменения осанки, нарушения подвижности
                    </div>
                    <div class="firstScreenDepiction">
                        <div class="firstScreenDepiction__item">
                            <span class="firstScreenDepiction__span">45 минут</span>
                        </div>
                        <div class="firstScreenDepiction__item firstScreenDepictionItem_js">
                            <span class="firstScreenDepiction__span firstScreenDepiction__span_clue firstScreenDepictionClue_js">
                                1 процедура
                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/question.svg';?>
                            </span>
                            <div class="firstScreenDepiction__clue">
                                <div class="firstScreenDepiction__content">
                                    <div class="firstScreenDepiction__close">
                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/cross.svg';?>
                                    </div>
                                    <ul class="firstScreenDepiction__ul">
                                        <li class="firstScreenDepiction__li firstScreenDepiction__li_name">Рекомендации</li>
                                        <li class="firstScreenDepiction__li">2 – 3 раза в неделю</li>
                                        <li class="firstScreenDepiction__li">10 – 12 процедур</li>
                                    </ul>
                                    <ul class="firstScreenDepiction__ul">
                                        <li class="firstScreenDepiction__li firstScreenDepiction__li_name">Эффект</li>
                                        <li class="firstScreenDepiction__li">до 9 месяцев</li>
                                    </ul>
                                    <ul class="firstScreenDepiction__ul">
                                        <li class="firstScreenDepiction__li firstScreenDepiction__li_name">Периодичность</li>
                                        <li class="firstScreenDepiction__li">1 – 2 раза в год</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="firstScreen__btns">
                    <a href="#" class="btn btn_black firstScreen__btn">Записаться на прием</a>
                    <a href="#" class="firstScreen__certificate">Подарить сертификат</a>
                </div>
            </div>
            <div class="firstScreen__img" style="background-image:url(/dist/img/trash/firstScreen3.jpg)"></div>
        </div>
    </section>
    <section class="service">
        <div class="service__content">
            <section class="serviceAbout clientRect_js" id="procedure">
                <div class="serviceAbout__text">
                    <div class="service__title serviceAbout__title">Классический массаж</div>
                    <div class="service__description serviceAbout__description">
                        <p>
                            Единственная процедура с&nbsp;технологией микро-сфокусированного ультразвука для лифтинга кожи,
                            одобренная FDA и&nbsp;разрешенная к&nbsp;применению в&nbsp;России, Западной Европе и&nbsp;США.
                        </p>
                        <p>
                            Действие процедуры направлено на&nbsp;низлежащий мышечно-апоневротический слой (SMAS), который
                            образует поддерживающий каркас лица и&nbsp;плотно фиксирует мягкие ткани. В&nbsp;его состав
                            (как и&nbsp;в&nbsp;состав дермы) входят волокна коллагена и&nbsp;эластина
                        </p>
                    </div>
                </div>
            </section>
            <section class="section serviceSlider">
                <div class="serviceSlider__content">
                    <div class="serviceSlider__list serviceSlider_js">
                        <div class="serviceSlider__item" style="background-image:url(/dist/img/trash/serviceSlider1.jpg)"></div>
                        <div class="serviceSlider__item" style="background-image:url(/dist/img/trash/serviceSlider1.jpg)"></div>
                        <div class="serviceSlider__item" style="background-image:url(/dist/img/trash/serviceSlider1.jpg)"></div>
                    </div>
                </div>
            </section>
            <section class="serviceResult clientRect_js" id="result">
                <div class="serviceResult__content">
                    <div class="service__title">Результаты</div>
                    <ul class="serviceResult__list">
                        <li class="serviceResult__item">
                            Коррекция <br>овала лица
                        </li>
                        <li class="serviceResult__item">
                            Разглаживание <br>морщин
                        </li>
                        <li class="serviceResult__item">
                            Улучшение <br>упругости кожи
                        </li>
                        <li class="serviceResult__item">
                            Интенсивный <br>лифтинг-эффект
                        </li>
                        <li class="serviceResult__item">
                            Устранение <br>жировых брылей
                        </li>
                        <li class="serviceResult__item">
                            Усиление синтеза <br>коллагена
                        </li>
                    </ul>
                </div>
            </section>
            <section class="specialist clientRect_js" id="specialist">
                <div class="specialist__content">
                    <div class="heading">
                        <div class="heading__wrapper">
                            <span>Процедуру выполняют</span>
                        </div>
                        <div class="slideArrows specialist__arrows"></div>
                    </div>
                    <div class="specialist__list specialistSlider_js">
                        <div class="specialist__item">
                            <a href="#" class="specialist__img specialistHover_js">
                                <div class="specialist__people" style="background-image:url(/dist/img/trash/specialistPeople1.png)"></div>
                            </a>
                            <div class="specialist__box">
                                <a href="#" class="specialist__title specialistHover_js">Людмила Буркина</a>
                                <div class="specialist__text">
                                    <span>Косметолог-эстетист</span>
                                    <span>опыт работы: 2 года</span>
                                </div>
                            </div>
                        </div>
                        <div class="specialist__item">
                            <a href="#" class="specialist__img specialistHover_js">
                                <div class="specialist__people" style="background-image:url(/dist/img/trash/specialistPeople2.png)"></div>
                            </a>
                            <div class="specialist__box">
                                <a href="#" class="specialist__title specialistHover_js">Людмила Буркина</a>
                                <div class="specialist__text">
                                    <span>Косметолог-эстетист</span>
                                    <span>опыт работы: 5 года</span>
                                </div>
                            </div>
                        </div>
                        <div class="specialist__item">
                            <a href="#" class="specialist__img specialistHover_js">
                                <div class="specialist__people" style="background-image:url(/dist/img/trash/specialistPeople3.png)"></div>
                            </a>
                            <div class="specialist__box">
                                <a href="#" class="specialist__title specialistHover_js">Федурина Надежда</a>
                                <div class="specialist__text">
                                    <span>Косметолог-эстетист</span>
                                    <span>опыт работы: 7 лет</span>
                                </div>
                            </div>
                        </div>
                        <div class="specialist__item">
                            <a href="#" class="specialist__img specialistHover_js">
                                <div class="specialist__people" style="background-image:url(/dist/img/trash/specialistPeople2.png)"></div>
                            </a>
                            <div class="specialist__box">
                                <a href="#" class="specialist__title specialistHover_js">Федурина Надежда</a>
                                <div class="specialist__text">
                                    <span>Косметолог-эстетист</span>
                                    <span>опыт работы: 12 лет</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="servicePrice clientRect_js" id="price">
                <div class="servicePrice__content">
                    <div class="servicePrice__box">
                        <div class="service__title servicePrice__title_total">
                            Стоимость <br>сеанса массажа
                            <div class="servicePrice__total">1 700 &#8381;</div>
                        </div>
                        <div class="servicePrice__img servicePrice__img_mobile" style="background-image:url(/dist/img/trash/mainDolceBig4.jpg)"></div>
                        <div class="signConsultation">
                            <form class="signConsultation__form signConsultation_js">
                                <div class="signConsultation__title">Запишитесь <br>на процедуру</div>
                                <div class="signConsultation__fileds">
                                    <div class="envelopeInput">
                                        <input type="text" placeholder="Ваше имя" class="name fileds_js">
                                    </div>
                                    <div class="envelopeInput">
                                        <input type="text" placeholder="Телефон" class="tel">
                                        <span class="envelopeInput__warning">Некорректный формат телефона</span>
                                    </div>
                                </div>
                                <div class="signConsultation__bottom">
                                    <div class="signConsultation__wrapper">
                                        <button class="btn btn_black signConsultation__btn">Записаться</button>
                                    </div>
                                    <div class="signConsultation__privacy">Нажимая на&nbsp;кнопку, я&nbsp;соглашаюсь на&nbsp;обработку
                                        <a href="#">персональных данных</a>
                                    </div>
                                </div>
                            </form>
                            <div class="signConsultation__message signMessage signMessage_error signMessageError_js">
                                <div class="signMessage__content">
                                    <div class="signMessage__title">Произошла <br>ошибка</div>
                                    <div class="signMessage__text">Пожалуйста попробуйте отправить форму еще раз</div>
                                    <div class="btn btn_black signMessage__btn signMessageBtn_js">Назад</div>
                                </div>
                            </div>
                            <div class="signConsultation__message signMessage">
                                <div class="signMessage__content">
                                    <div class="signMessage__title">Спасибо <br>за&nbsp;обращение</div>
                                    <div class="signMessage__text">Менеджер свяжется с&nbsp;вами в&nbsp;ближайшее время</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="servicePrice__img" style="background-image:url(/dist/img/trash/mainDolceBig4.jpg)"></div>
                </div>
            </section>
        </div>
        <aside class="serviceAside">
            <ul class="serviceAside__list">
                <li class="serviceAside__item active">
                    <a href="#procedure" class="serviceAside__anchor serviceAnchor_js active">Процедура</a>
                </li>
                <li class="serviceAside__item">
                    <a href="#result" class="serviceAside__anchor serviceAnchor_js">Результат</a>
                </li>
                <li class="serviceAside__item">
                    <a href="#specialist" class="serviceAside__anchor serviceAnchor_js">Специалист</a>
                </li>
                <li class="serviceAside__item">
                    <a href="#price" class="serviceAside__anchor serviceAnchor_js">Стоимость</a>
                </li>
            </ul>
        </aside>
    </section>
    <div class="seviceHidden hidden"></div>
</main>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>