<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Установка Laravel на Open Server 

-  Установить Open Server https://ospanel.io/

- Установить Composer  https://getcomposer.org/doc/00-intro.md

- Установить проект в директорию  C:\openserver\domains

-  Настроить доменное имя в Open Server

# Инструкция по установки Laravel

- **[Watching instruction install Laravel](https://www.youtube.com/watch?v=INpWtOjtoI0)**

## Яндекс API Map
https://yandex.ru/dev/maps/jsapi/doc/2.1/quick-start/index.html

<p><code>
<code class="doc-c-codeblock__code doc-c-code-wrap doc-c-code-copy xml hljs" data-code-language="xml"><span class="doc-c-hljs-tag">&lt;<span class="doc-c-hljs-name">script</span> <span class="doc-c-hljs-attr">type</span>=<span class="doc-c-hljs-string">"text/javascript"</span>&gt;</span><span class="actionscript">
    <span class="doc-c-hljs-comment">// Функция ymaps.ready() будет вызвана, когда</span>
    <span class="doc-c-hljs-comment">// загрузятся все компоненты API, а также когда будет готово DOM-дерево.</span>
    ymaps.ready(init);
    <span class="doc-c-hljs-function"><span class="doc-c-hljs-keyword">function</span> <span class="doc-c-hljs-title">init</span><span class="doc-c-hljs-params">()</span></span>{
        <span class="doc-c-hljs-comment">// Создание карты.</span>
        <span class="doc-c-hljs-keyword">var</span> myMap = <span class="doc-c-hljs-keyword">new</span> ymaps.Map(<span class="doc-c-hljs-string">"map"</span>, {
            <span class="doc-c-hljs-comment">// Координаты центра карты.</span>
            <span class="doc-c-hljs-comment">// Порядок по умолчанию: </span></span><span class="doc-c-q"><span class="actionscript"><span class="doc-c-hljs-comment">«широта, долгота»</span></span></span><span class="actionscript"><span class="doc-c-hljs-comment">.</span>
            <span class="doc-c-hljs-comment">// Чтобы не определять координаты центра карты вручную,</span>
            <span class="doc-c-hljs-comment">// воспользуйтесь инструментом </span></span><a class="doc-c-xref doc-c-link doc-c-link_type_external" href="http://dimik.github.io/ymaps/examples/location-tool/" target="_blank"><span class="actionscript"><span class="doc-c-hljs-comment">Определение координат</span></span></a><span class="actionscript"><span class="doc-c-hljs-comment">.</span>
            <span class="doc-c-hljs-attr">center</span>: [<span class="doc-c-hljs-number">55.76</span>, <span class="doc-c-hljs-number">37.64</span>],
            <span class="doc-c-hljs-comment">// Уровень масштабирования. Допустимые значения:</span>
            <span class="doc-c-hljs-comment">// от 0 (весь мир) до 19.</span>
            <span class="doc-c-hljs-attr">zoom</span>: <span class="doc-c-hljs-number">7</span>
        });
    }
</span><span class="doc-c-hljs-tag">&lt;/<span class="doc-c-hljs-name">script</span>&gt;</span></code>
</code></p>

## Определяем кардинаты в Яндекск карте
https://yandex.ru/map-constructor/location-tool/?from=club

## Создание модели с миграций 
https://laravel.su/docs/8.x/eloquent

php artisan make:model Flight

## Проблемы с подключением к БД
https://stackoverflow.com/questions/43169240/php-artisan-migrate-sqlstatehy000-1045-access-denied-for-user-laravell

