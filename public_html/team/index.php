<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/team.css">
<main class="main page page_team">
    <section class="sample firstSection_js">
        <div class="sample__container">
            <section class="breadCrumbs">
                <ul class="breadCrumbs__list">
                    <li class="breadCrumbs__item">
                        <a href="/" class="breadCrumbs__link">Главная</a>
                    </li>
                    <li class="breadCrumbs__item">
                        <span class="breadCrumbs__span">Специалисты</span>
                    </li>
                </ul>
            </section>
            <div class="sample__content">
                <div class="sampleHeader">
                    <div class="sampleHeader__title">
                        <span class="sampleHeaderTitle_js">Команда Dolce Vita</span>
                    </div>
                </div>
                <div class="sampleSelected">
                    <div class="sampleSelected__content">
                        <div class="sampleSelected__opted sampleSelectedOpted_js">
                            <span>Все</span>
                            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/arrowShowHide.svg';?>
                        </div>
                        <div class="sampleSelected__list">
                            <div class="sampleSelected__item sampleTeam_js active" data-choice="all">Все</div>
                            <div class="sampleSelected__item sampleTeam_js" data-choice="beauticians">Косметологи</div>
                            <div class="sampleSelected__item sampleTeam_js" data-choice="dermatologists">Дерматологи</div>
                            <div class="sampleSelected__item sampleTeam_js" data-choice="masseurs">Массажисты</div>
                            <div class="sampleSelected__item sampleTeam_js" data-choice="stylists">Стилисты</div>
                            <div class="sampleSelected__item sampleTeam_js" data-choice="nail">Ногтевой сервис</div>
                            <div class="sampleSelected__item sampleTeam_js" data-choice="administrators">Администраторы</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="specialist specialist_team">
        <div class="specialist__content teamContent_js" data-content="all">
            <div class="specialist__list">
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
                            <span>Дерматолог-эстетист</span>
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
                            <span>Массажист-эстетист</span>
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
                            <span>Стилист-эстетист</span>
                            <span>опыт работы: 12 лет</span>
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
                            <span>Стилист-эстетист</span>
                            <span>опыт работы: 7 лет</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="showMore">
                <div class="showMore__btn btn btn_black">Показать еще</div>
            </div>
        </div>
        <div class="specialist__content teamContent_js hide" data-content="beauticians">
            <div class="specialist__list">
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
            </div>
            <div class="showMore">
                <div class="showMore__btn btn btn_black">Показать еще</div>
            </div>
        </div>
        <div class="specialist__content teamContent_js hide" data-content="dermatologists">
            <div class="specialist__list">
                <div class="specialist__item">
                    <a href="#" class="specialist__img specialistHover_js">
                        <div class="specialist__people" style="background-image:url(/dist/img/trash/specialistPeople2.png)"></div>
                    </a>
                    <div class="specialist__box">
                        <a href="#" class="specialist__title specialistHover_js">Людмила Буркина</a>
                        <div class="specialist__text">
                            <span>Дерматолог-эстетист</span>
                            <span>опыт работы: 5 года</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="showMore">
                <div class="showMore__btn btn btn_black">Показать еще</div>
            </div>
        </div>
        <div class="specialist__content teamContent_js hide" data-content="masseurs">
            <div class="specialist__list">
                <div class="specialist__item">
                    <a href="#" class="specialist__img specialistHover_js">
                        <div class="specialist__people" style="background-image:url(/dist/img/trash/specialistPeople3.png)"></div>
                    </a>
                    <div class="specialist__box">
                        <a href="#" class="specialist__title specialistHover_js">Федурина Надежда</a>
                        <div class="specialist__text">
                            <span>Массажист-эстетист</span>
                            <span>опыт работы: 7 лет</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="showMore">
                <div class="showMore__btn btn btn_black">Показать еще</div>
            </div>
        </div>
        <div class="specialist__content teamContent_js hide" data-content="stylists">
            <div class="specialist__list">
                <div class="specialist__item">
                    <a href="#" class="specialist__img specialistHover_js">
                        <div class="specialist__people" style="background-image:url(/dist/img/trash/specialistPeople2.png)"></div>
                    </a>
                    <div class="specialist__box">
                        <a href="#" class="specialist__title specialistHover_js">Федурина Надежда</a>
                        <div class="specialist__text">
                            <span>Стилист-эстетист</span>
                            <span>опыт работы: 12 лет</span>
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
                            <span>Стилист-эстетист</span>
                            <span>опыт работы: 7 лет</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="showMore">
                <div class="showMore__btn btn btn_black">Показать еще</div>
            </div>
        </div>
    </section>
</main>
<div class="smallHeader_js hidden"></div>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>