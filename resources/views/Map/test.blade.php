<?php
?>


<div class="row" style="text-align: center">
    <div>
        <h1>Яндекс API</h1>
        <div id="map" style="width:100%; height: 100%"></div>
    </div>

</div>


<script src="js/main.js"></script>
<script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>


<script>
    var placemarks = [
            {
                latitude: 53.90,
                longitude: 27.56,
                hintContent: '<div class="map__hint">ул. Литераторов, д. 19</div>',
                balloonContent: [
                    '<div class="map__balloon">',
                    '<img class="map__burger-img" src="img/burger.png" alt="Бургер"/>',
                    'Самые вкусные бургеры у нас! Заходите по адресу: ул. Литераторов, д. 19',
                    '</div>'
                ]
            },
            {

                latitude:  53.89,
                longitude: 27.56,
                hintContent: '<div class="map__hint">Малый проспект В О, д 64</div>',
                balloonContent: [
                    '<div class="map__balloon">',
                    '<img class="map__burger-img" src="img/burger.png" alt="Бургер"/>',
                    'Самые вкусные бургеры у нас! Заходите по адресу: Малый проспект В О, д 64',
                    '</div>'
                ]
            },
            {
                latitude: 59.93,
                longitude: 30.34,
                hintContent: '<div class="map__hint">наб. реки Фонтанки, д. 56</div>',
                balloonContent: [
                    '<div class="map__balloon">',
                    '<img class="map__burger-img" src="img/burger.png" alt="Бургер"/>',
                    'Самые вкусные бургеры у нас! Заходите по адресу: наб. реки Фонтанки, д. 56',
                    '</div>'
                ]
            }
        ],
        geoObjects= [];


    ymaps.ready(init);
    function init(){
        // Создание карты.
        var map = new ymaps.Map("map", {
            center: [53.902735, 27.555691],
            zoom: 12,
            behaviors: ['drag']
        });

        for (var i = 0; i < placemarks.length; i++) {
            geoObjects[i] = new ymaps.Placemark([placemarks[i].latitude, placemarks[i].longitude],
                {
                    hintContent: placemarks[i].hintContent,
                    balloonContent: placemarks[i].balloonContent.join('')
                },
                {
                    // iconLayout: 'default#image',
                    // iconImageHref: 'img/sprite.png',
                    // iconImageSize: [46, 57],
                    // iconImageOffset: [-23, -57],
                    // iconImageClipRect: [[415, 0], [461, 57]]
                });
        }

        var clusterer = new ymaps.Clusterer({
            clusterIcons: [
                {
                    href: 'https://cdn-icons-png.flaticon.com/512/4703/4703644.png',
                    size: [100, 100],
                    offset: [-50, -50]
                }
            ],
            clusterIconContentLayout: null
        });

        map.geoObjects.add(clusterer);
        clusterer.add(geoObjects);
    }

</script>
