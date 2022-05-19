# using package
# #################################
- "laravel-echo": "^1.11.2" : for frontend listen message
- "socket.io-client": "^2.4.0" : for frontend tranfer message
- using vue to listen in: resources/packages/js/vue/SocketIO

# config
# #################################
- /laravel8/config/app.php:174: add using BroadcastServiceProvider
- laravel8/config/database.php:126: comment prefix
- laravel8/packages/Phonglg/LaravelEchoServer/src/LaravelEchoServerServiceProvider.php: in boot() add:  Broadcast::routes(['middleware' => ['web', 'auth']]);

# error: connect ECONNREFUSED 127.0.0.1:80
# #################################
- reason: laravel-echo-server in docker can NOT call app laravel
- solve: 
+ st1: add static IP for app laravel: 
+ st2: config authHost in laravel-echo-server.json to IP above
----------------------------------
// laravel8/docker-compose.yml
networks:
    sail:
        driver: bridge
        ipam:
            driver: default
            config:
                - subnet: "192.168.0.1/16"
----------------------------------
// laravel8/laravel-echo-server/laravel-echo-server.json
	"authHost": "http://192.168.0.1"


# #################################

# LaravelEchoServer

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

Via Composer

``` bash
$ composer require phonglg/laravelechoserver
```

## Usage

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author@email.com instead of using the issue tracker.

## Credits

- [Author Name][link-author]
- [All Contributors][link-contributors]

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/phonglg/laravelechoserver.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/phonglg/laravelechoserver.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/phonglg/laravelechoserver/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/phonglg/laravelechoserver
[link-downloads]: https://packagist.org/packages/phonglg/laravelechoserver
[link-travis]: https://travis-ci.org/phonglg/laravelechoserver
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/phonglg
[link-contributors]: ../../contributors
