<p align="center">
    <a href="https://expedia.com" target="_blank">
        <img src="https://www.expedia.com/_dms/header/logo.svg?locale=en_US&siteid=1&test=Storefront_2017_B2P_variant_1" height="100px">
    </a>
    <h1 align="center">Expedia Hotel Deals</h1>
    <br>
</p>

REQUIREMENTS
------------

- Web server supports PHP 5.6 or higher (apache2)
- Composer 
- Git
- htacess enabled on apache


INSTALLATION
------------
 - `Git clone (https://github.com/asalem/funny.git)`
 - `cd funny` 
 - Run `composer install`
 - Configure your web server to have the doc root point to funny/web or use the built-in PHP web server

### Using Built-in PHP web server
running the following console command while in the project `web` directory:
~~~
EXPEDIA_ENV=dev php yii serve
~~~
You can use your browser to access the installed Yii application with the following URL:
~~~
http://localhost:8080/
~~~

### Configure your web server
By setting funny/web as the document root in Apache/Nginx Configuration


#### Any assumptions you've made about the API or the runtime environment ?
- Security is handled from the Api side (api doesn't trust application input).
- Random images regarding hotels.

#### known issues with your example ?
- simple validation, need to have more.
- Destination should be a searchable dropdown menu from an api provided by Expedia


####
Travis : https://travis-ci.org/asalem/funny
heroku app : https://asalem.herokuapp.com/