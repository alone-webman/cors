# 中间件-跨域头

### 安装仓库

```text
composer require alone-webman/cors
```

### 中间件方法

* 可以任何`config/middleware.php`中使用

```php
return [
    '@' => [alone_mid_cors()]
];
```

### 跨域头方法

* 不使用中间件时可以使用此方法

```php
alone_cors($response, $request = null);
```