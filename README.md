Ikimea Browser service
======================
[![Version](http://img.shields.io/packagist/v/contao-community-alliance/ikimea-browser-service.svg?style=flat-square)](https://packagist.org/packages/contao-community-alliance/ikimea-browser-service)
[![Stable Build Status](http://img.shields.io/travis/contao-community-alliance/ikimea-browser-service/master.svg?style=flat-square&label=stable build)](https://travis-ci.org/contao-community-alliance/ikimea-browser-service)
[![Upstream Build Status](http://img.shields.io/travis/contao-community-alliance/ikimea-browser-service/develop.svg?style=flat-square&label=dev build)](https://travis-ci.org/contao-community-alliance/ikimea-browser-service)
[![License](http://img.shields.io/packagist/l/contao-community-alliance/ikimea-browser-service.svg?style=flat-square)](http://spdx.org/licenses/LGPL-3.0+)
[![Downloads](http://img.shields.io/packagist/dt/contao-community-alliance/ikimea-browser-service.svg?style=flat-square)](https://packagist.org/packages/contao-community-alliance/ikimea-browser-service)

Provides [Ikimea Browser detection](https://github.com/Ikimea/Browser) as a service in the contao dependency container.

```php
/** @var \Ikimea\Browser\Browser $browser */
$browser = $container['ikimea-browser'];
```
