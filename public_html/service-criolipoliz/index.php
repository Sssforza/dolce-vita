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
                                <span class="breadCrumbs__span">Криолиполиз</span>
                            </li>
                        </ul>
                    </section>
                    <div class="firstScreen__title">Криолиполиз</div>
                    <div class="firstScreen__text">
                        Удаление локальных жировых отложений безоперационным путём при помощи воздействия холода
                    </div>
                    <div class="firstScreenDepiction">
                        <div class="firstScreenDepiction__item">
                            <span class="firstScreenDepiction__span">90 минут</span>
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
            <div class="firstScreen__img" style="background-image:url(/dist/img/trash/firstScreen1.jpg)"></div>
        </div>
    </section>
    <section class="service">
        <div class="service__content">
            <section class="serviceAbout clientRect_js" id="procedure">
                <div class="serviceAbout__img serviceAbout__img_small" style="background-image:url(/dist/img/trash/serviceAbout__img_small1.jpg)"></div>
                <div class="serviceAbout__text">
                    <div class="service__title serviceAbout__title">Уменьшение объема жировых складок</div>
                    <div class="service__description serviceAbout__description">
                        Криолиполиз&nbsp;&mdash; методика коррекции локальных жировых отложений без травм и&nbsp;хирургического вмешательства.
                        Благодаря использованию низких температур происходит запуск естественных процессов сжигания подкожно-жировой клетчатки,
                        что дает возможность сделать фигуру более гармоничной. За&nbsp;один сеанс можно уменьшить складку на&nbsp;30%
                    </div>
                </div>
                <div class="serviceAbout__img serviceAbout__img_big" style="background-image:url(/dist/img/trash/serviceAbout__img_big1.jpg)"></div>
            </section>
            <section class="section serviceStage serviceStage_js">
                <div class="serviceStage__container">
                    <div class="service__title">Этапы <br>процедуры</div>
                    <div class="serviceStage__counter serviceStage__counter_mobile">
                        <div class="serviceStage__counter_left">1</div>
                        <span> / </span>
                        <div class="serviceStage__counter_right">5</div>
                    </div>
                    <div class="serviceStage__slider serviceStageSlider_js">
                        <div class="serviceStage__item">
                            <div class="serviceStage__content">
                                <div class="serviceStage__box">
                                    <a href="https://www.youtube.com/watch?v=mVkjPGNDmTQ" class="popupVideo serviceStage__video popupYoutube_js">
                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/play.svg';?>
                                    </a>
                                    <div class="serviceStage__description service__description">
                                        Устанавливаем вакуумную насадку <br>с&nbsp;охлаждающими панелями. Запускается процесс разрушения жировых клеток
                                    </div>
                                    <div class="serviceStage__arrows">
                                        <div class="serviceStage__arrow serviceStage__arrow_prev disabled">
                                            <svg width="81" height="30" viewBox="0 0 81 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.761719 14.9231H78.9993" stroke="#171719" stroke-width="2"/><path d="M65.0615 0.983398L79.0005 14.9224L65.0615 28.8613" stroke="#171719" stroke-width="2"/></svg>
                                        </div>
                                        <div class="serviceStage__arrow serviceStage__arrow_next">
                                            <svg width="81" height="30" viewBox="0 0 81 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.761719 14.9231H78.9993" stroke="#171719" stroke-width="2"/><path d="M65.0615 0.983398L79.0005 14.9224L65.0615 28.8613" stroke="#171719" stroke-width="2"/></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="serviceStage__img" style="background-image:url(/dist/img/trash/serviceStage3.jpg)"></div>
                        </div>
                        <div class="serviceStage__item hide">
                            <div class="serviceStage__content">
                                <div class="serviceStage__box">
                                    <a href="https://www.youtube.com/watch?v=mVkjPGNDmTQ" class="popupVideo serviceStage__video popupYoutube_js">
                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/play.svg';?>
                                    </a>
                                    <div class="serviceStage__description service__description">
                                        2Устанавливаем вакуумную насадку <br>с&nbsp;охлаждающими панелями. Запускается процесс разрушения жировых клеток 2
                                        Устанавливаем вакуумную насадку <br>с&nbsp;охлаждающими панелями. Запускается процесс разрушения жировых клеток 2
                                        Устанавливаем вакуумную насадку <br>с&nbsp;охлаждающими панелями. Запускается процесс разрушения жировых клеток 2
                                        Устанавливаем вакуумную насадку <br>с&nbsp;охлаждающими панелями. Запускается процесс разрушения жировых клеток 2
                                    </div>
                                    <div class="serviceStage__more serviceStageMore_js">
                                        <span>Читать далее</span>
                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/arrowShowHide.svg';?>
                                    </div>
                                    <div class="serviceStage__arrows">
                                        <div class="serviceStage__arrow serviceStage__arrow_prev disabled">
                                            <svg width="81" height="30" viewBox="0 0 81 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.761719 14.9231H78.9993" stroke="#171719" stroke-width="2"/><path d="M65.0615 0.983398L79.0005 14.9224L65.0615 28.8613" stroke="#171719" stroke-width="2"/></svg>
                                        </div>
                                        <div class="serviceStage__arrow serviceStage__arrow_next">
                                            <svg width="81" height="30" viewBox="0 0 81 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.761719 14.9231H78.9993" stroke="#171719" stroke-width="2"/><path d="M65.0615 0.983398L79.0005 14.9224L65.0615 28.8613" stroke="#171719" stroke-width="2"/></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="serviceStage__img" style="background-image:url(/dist/img/trash/serviceStage3.jpg)"></div>
                        </div>
                        <div class="serviceStage__item hide">
                            <div class="serviceStage__content">
                                <div class="serviceStage__box">
                                    <a href="https://www.youtube.com/watch?v=mVkjPGNDmTQ" class="popupVideo serviceStage__video popupYoutube_js">
                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/play.svg';?>
                                    </a>
                                    <div class="serviceStage__description service__description">
                                        3Устанавливаем вакуумную насадку <br>с&nbsp;охлаждающими панелями. Запускается процесс разрушения жировых клеток
                                    </div>
                                    <div class="serviceStage__arrows">
                                        <div class="serviceStage__arrow serviceStage__arrow_prev disabled">
                                            <svg width="81" height="30" viewBox="0 0 81 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.761719 14.9231H78.9993" stroke="#171719" stroke-width="2"/><path d="M65.0615 0.983398L79.0005 14.9224L65.0615 28.8613" stroke="#171719" stroke-width="2"/></svg>
                                        </div>
                                        <div class="serviceStage__arrow serviceStage__arrow_next">
                                            <svg width="81" height="30" viewBox="0 0 81 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.761719 14.9231H78.9993" stroke="#171719" stroke-width="2"/><path d="M65.0615 0.983398L79.0005 14.9224L65.0615 28.8613" stroke="#171719" stroke-width="2"/></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="serviceStage__img" style="background-image:url(/dist/img/trash/serviceStage3.jpg)"></div>
                        </div>
                        <div class="serviceStage__item hide">
                            <div class="serviceStage__content">
                                <div class="serviceStage__box">
                                    <a href="https://www.youtube.com/watch?v=mVkjPGNDmTQ" class="popupVideo serviceStage__video popupYoutube_js">
                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/play.svg';?>
                                    </a>
                                    <div class="serviceStage__description service__description">
                                        4Устанавливаем вакуумную насадку <br>с&nbsp;охлаждающими панелями. Запускается процесс разрушения жировых клеток 2
                                        Устанавливаем вакуумную насадку <br>с&nbsp;охлаждающими панелями. Запускается процесс разрушения жировых клеток 2
                                        Устанавливаем вакуумную насадку <br>с&nbsp;охлаждающими панелями. Запускается процесс разрушения жировых клеток 2
                                    </div>
                                    <div class="serviceStage__more serviceStageMore_js">
                                        <span>Читать далее</span>
                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/arrowShowHide.svg';?>
                                    </div>
                                    <div class="serviceStage__arrows">
                                        <div class="serviceStage__arrow serviceStage__arrow_prev disabled">
                                            <svg width="81" height="30" viewBox="0 0 81 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.761719 14.9231H78.9993" stroke="#171719" stroke-width="2"/><path d="M65.0615 0.983398L79.0005 14.9224L65.0615 28.8613" stroke="#171719" stroke-width="2"/></svg>
                                        </div>
                                        <div class="serviceStage__arrow serviceStage__arrow_next">
                                            <svg width="81" height="30" viewBox="0 0 81 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.761719 14.9231H78.9993" stroke="#171719" stroke-width="2"/><path d="M65.0615 0.983398L79.0005 14.9224L65.0615 28.8613" stroke="#171719" stroke-width="2"/></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="serviceStage__img" style="background-image:url(/dist/img/trash/serviceStage3.jpg)"></div>
                        </div>
                    </div>
                    <div class="slideArrows"></div>
                </div>
            </section>
            <section class="section serviceTestimony">
                <div class="serviceTestimony__content serviceTestimonyRoster_js">
                    <div class="serviceTestimony__item">
                        <div class="serviceTestimony__header serviceTestimonyHeader_js">
                            <span>Показания к процедуре</span>
                            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/arrowShowHide.svg';?>
                        </div>
                        <div class="serviceTestimony__list serviceTestimonyList_js">
                            <div class="serviceTestimony__li">
                                Наличие локальных жировых отложений, которые не&nbsp;поддаются традиционным способам похудения&nbsp;&mdash; спорту, диетам и&nbsp;массажу
                            </div>
                            <div class="serviceTestimony__li">
                                Уменьшение объемов тела
                            </div>
                        </div>
                    </div>
                    <div class="serviceTestimony__item">
                        <div class="serviceTestimony__header serviceTestimonyHeader_js">
                            <span>Противопоказания</span>
                            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/arrowShowHide.svg';?>
                        </div>
                        <div class="serviceTestimony__list serviceTestimonyList_js">
                            <div class="serviceTestimony__text">
                                Вторым этапом измеряем толщину жировой складки и&nbsp;выбирает аппаратную насадку нужного размера.
                                Измеряем жировой складки и&nbsp;выбирает аппаратную насадку нужного на&nbsp;процесс заживления раны размера:
                            </div>
                            <div class="serviceTestimony__li">
                                Аллергия на&nbsp;холод
                            </div>
                            <div class="serviceTestimony__li">
                                Тяжелая степень ожирения
                            </div>
                            <div class="serviceTestimony__li">
                                Острые воспалительные процессы
                            </div>
                            <div class="serviceTestimony__li">
                                Наличие кардиостимулятора
                            </div>
                            <div class="serviceTestimony__li">
                                Беременность
                            </div>
                            <div class="serviceTestimony__li">
                                Онкологические заболевания
                            </div>
                        </div>
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
            <section class="serviceDoctor clientRect_js" id="specialist">
                <div class="serviceDoctor__content">
                    <div class="serviceDoctor__box">
                        <div class="service__title">Процедуру <br>выполняет</div>
                        <div class="serviceDoctor__wrapper">
                            <div class="serviceDoctor__name">Федурина Надежда</div>
                            <div class="serviceDoctor__specialization">
                                <span>Специалист по массажу </span>
                                <span>опыт работы: 7 лет</span>
                            </div>
                        </div>
                    </div>
                    <div class="serviceDoctor__bg">
                        <div class="serviceDoctor__img" style="background-image:url(/dist/img/trash/serviceDoctor1.png)"></div>
                    </div>
                </div>
            </section>
            <section class="section serviceProfessionals">
                <div class="serviceProfessionals__content">
                    <div class="service__title">Работают профессионалы</div>
                    <div class="serviceProfessionals__list">
                        <div class="serviceProfessionals__item">
                            <div class="serviceProfessionals__title">
                                Опыт работы <br>более 7&nbsp;лет
                            </div>
                            <div class="serviceProfessionals__text">
                                Аппарат&nbsp;&mdash; революционная разработка компании Lumenis не&nbsp;имеет аналогов в&nbsp;мире: он&nbsp;соединяет
                                силу диодного лазера и&nbsp;технологию вакуумного усиления, гарантируя стабильный результат и&nbsp;максимум комфорта
                                пациента во&nbsp;время процедуры
                            </div>
                        </div>
                        <div class="serviceProfessionals__item">
                            <div class="serviceProfessionals__title">
                                Сотни довольных клиентов
                            </div>
                            <div class="serviceProfessionals__text">
                                Благодаря большому опыту работы с&nbsp;LightSheer DUET, специалисты Dolce Vita знают все нюансы проведения
                                лазерной эпиляции на&nbsp;этом аппарате&nbsp;&mdash; в&nbsp;разных зонах, на&nbsp;разных типах кожи и&nbsp;подбирают
                                индивидуальные параметры для каждого клиента
                            </div>
                        </div>
                        <div class="serviceProfessionals__item">
                            <div class="serviceProfessionals__title">
                                Опытные специалисты
                            </div>
                            <div class="serviceProfessionals__text">
                                Клуб красоты имеет лицензиюна&nbsp;осуществление медицинской деятельности, а&nbsp;процедуру лазерной эпиляции
                                выполняют косметологи с&nbsp;медицинским образованием и&nbsp;подтвержденным стажем работы
                            </div>
                        </div>
                    </div>
                    <div class="slideArrows"></div>
                </div>
            </section>
            <section class="servicePrice clientRect_js" id="price">
                <div class="servicePrice__content">
                    <div class="servicePrice__box">
                        <div class="service__title">Стоимость</div>
                        <div class="servicePrice__list">
                            <div class="servicePrice__item">
                                <div class="servicePrice__subitem">1 насадка</div>
                                <div class="servicePrice__subitem">
                                    <span>12 000 &#8381;</span>
                                </div>
                            </div>
                            <div class="servicePrice__item">
                                <div class="servicePrice__subitem">2 насадки</div>
                                <div class="servicePrice__subitem">
                                    <span>18 000 &#8381;</span>
                                </div>
                            </div>
                            <div class="servicePrice__item">
                                <div class="servicePrice__subitem">3 насадки</div>
                                <div class="servicePrice__subitem">
                                    <span>36 000 &#8381;</span>
                                </div>
                            </div>
                        </div>
                        <div class="servicePrice__img servicePrice__img_mobile" style="background-image:url(/dist/img/trash/mainDolceBig3.jpg)"></div>
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
                    <div class="servicePrice__img" style="background-image:url(/dist/img/trash/mainDolceBig3.jpg)"></div>
                </div>
            </section>
            <section class="section serviceProcedure">
                <div class="serviceProcedure__content">
                    <div class="serviceProcedure__header">
                        <div class="service__title">Процедуры <br>с похожим эффектом</div>
                        <div class="slideArrows"></div>
                    </div>
                    <div class="serviceProcedure__slider serviceProcedureSlider_js">
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
            </section>
            <section class="section serviceCosmetics">
                <div class="serviceCosmetics__content">
                    <div class="serviceCosmetics__header">
                        <div class="service__title">
                            Рекомендуем <br>косметику
                            <span>Для лучшего результата после процедуры</span>
                        </div>
                        <div class="slideArrows"></div>
                    </div>
                    <div class="serviceCosmetics__list serviceCosmeticsSlider_js">
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
            </section>
        </div>
        <aside class="serviceAside">
            <ul class="serviceAside__list">
                <li class="serviceAside__item">
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