# Huawei Push SDK for Laravel


This package offers huawei push service tools.

Here are some push examples:

```php
$push = new HuaweiPush();

$title = 'APP Name';
$message = 'This is a Message, Click Me!';

$accessToken = $push->getAccessToken(); // 获取AccessToken 可以保存起来
$data = [
		'type' => 'scheme',
		'data' => "app://www.app.com/activity?id=123456789"
];

$push = $push->setTitle($title)
		->setMessage($message)
		->setAccessToken($accessToken)
		->setCustomize($data);

$push->addDeviceToken("aBX471FWGHmiYZbZyE7o8WWISWYYQuVTEkJIbChBomv6mH3RWiTVOCDtJ-Hc-_E5rMPXzzIVjexXQHbN1GKmLhJqKqxJ4E86MyoUvw");
$push->sendMessage(); // 执行推送消息。

dump($push->isSendSuccess()); // 是否推送成功
dump($push->isSendFail()); // 是否推送失败
dump($push->getAccessTokenExpiresTime()); // 获取 AccessToken 过期时间
dump($push->getSendSuccessRequestId()); // 获取推送成功后接口返回的请求 id
```

## Requirements

This package requires Laravel 5.5 or higher, PHP 7.0 or higher.

## Installation

You can install the package via composer:

``` bash
composer require n2boost/laravel-huawei-push:dev-master
```

The package will automatically register itself.

You can optionally publish the config file with:
```bash
php artisan vendor:publish --provider="N2boost\LaravelHuaweiPush\HuaweiPushServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
<?php

return [

    /*
     * 用户在华为开发者联盟申请的appId和appSecret（会员中心->应用管理，点击应用名称的链接）
     */
    "APP_ID" => '12345678',

    "APP_SECRET" => 'appSecret',

    /*
     * 获取认证 Token 的 URL
     */
    "APP_PKG_NAME" => 'com.company_name.pkg_name',

    /*
     * 获取认证 Token 的 URL
     */
    "TOKEN_URL" => 'https://login.vmall.com/oauth2/token',

    /*
     * 应用级消息下发 API
     */
    "API_URL" => 'https://api.push.hicloud.com/pushsend.do',

];

```

## TODOs

* Push Feedback 

## Reference

* [消息推送服务--Agent](https://developer.huawei.com/consumer/cn/service/hms/catalog/huaweipush_agent.html?page=hmssdk_huaweipush_devguide_server_agent)
* [huangyongda/huaweipush - Packagist](https://packagist.org/packages/huangyongda/huaweipush#v1.2.6)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
