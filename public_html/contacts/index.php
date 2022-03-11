<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=8ff686a7-c893-462e-9d60-01bd90ade3ee"></script>
<link rel='stylesheet' href="/dist/css/blocks/contacts.css">
<main class="main page page_contacts">
    <section class="map map_js firstSection_js">
        <div class="map__card">
            <div class="map__title">Клуб Dolce Vita</div>
            <div class="map__box">
                <div class="map__address">Омск, ул. Волочаевская, 15/1</div>
                <a href="https://yandex.ru/maps/66/omsk/?from=api-maps&ll=73.365339%2C54.996742&mode=routes&origin=jsapi_2_1_79&rtext=~54.995715%2C73.353974&rtt=mt&ruri=~ymapsbm1%3A%2F%2Fgeo%3Fll%3D73.354%252C54.996%26spn%3D0.001%252C0.001%26text%3D%25D0%25A0%25D0%25BE%25D1%2581%25D1%2581%25D0%25B8%25D1%258F%252C%2520%25D0%259E%25D0%25BC%25D1%2581%25D0%25BA%252C%2520%25D0%2592%25D0%25BE%25D0%25BB%25D0%25BE%25D1%2587%25D0%25B0%25D0%25B5%25D0%25B2%25D1%2581%25D0%25BA%25D0%25B0%25D1%258F%2520%25D1%2583%25D0%25BB%25D0%25B8%25D1%2586%25D0%25B0%252C%252015%25D0%25BA1&z=16" class="map__yandex" target="_blank">Яндекс.Карты</a>
                <ul class="map__time">
                    <li class="map__li">
                        <span class="map__span">пн — сб</span>
                        <span class="map__span">9:00 — 21:00</span>
                    </li>
                    <li class="map__li">
                        <span class="map__span">вс</span>
                        <span class="map__span">10:00 — 20:00</span>
                    </li>
                </ul>
            </div>
            <div class="map__box map__box_flex">
                <div class="map__video">
                    <a href="https://www.youtube.com/watch?v=mVkjPGNDmTQ" class="popupVideo map__popup popupYoutube_js">
                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/play.svg';?>
                    </a>
                    <span class="map__how">Как к нам <br>проехать</span>
                </div>
                <div class="map__contact">
                    <a href="mailto:info@dolcevita55.ru" class="map__mail">info@dolcevita55.ru</a>
                </div>
            </div>
        </div>
        <div class="map__get" id="map_ToGet"></div>
    </section>
</main>
<div class="smallHeader_js pagePrice_js hidden"></div>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>