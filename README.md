test-hive
===

###### tags: `hive` `php` `laravel`

上方為中文說明  
Chinese description above  

下方英文說明為 Google 翻譯  
The English description below is Google Translate  

專案說明
---
測試 PHP Laravel 專案連接 Hadoop Hive server

#### 首先下載專案
```bash
git clone https://github.com/q0015300153/test-hive.git
```

#### 然後重建 Laravel 專案
```bash
cp test-hive
```
```bash
composer install
```
```bash
cp .env.example .env
```
```bash
php artisan key:generate
```

#### 測試連結的路由
```routes/web.php```
```php
Route::match(['get'], '/hive', [
	'uses' => 'Hive@test',
]);
```
#### 測試連結的控制器
```app/Http/Controllers/Hive.php```
```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hive extends Controller
{
    public function test(Request $request)
    {
        $hive = new \ThriftSQL\Hive('hive-server', 10000, 'root', 'root', 30);
        $hiveTables = $hive
            ->connect()
            ->getIterator('SHOW TABLES');

        $hive->disconnect();
        dd($hiveTables);
    }
}
```

#### 開啟網址查看是否連線成功
[http://localhost/hive/](http://localhost/hive/)

- - - 

Project description
---
Test PHP Laravel project connection Hadoop Hive server

#### First download the project
```bash
git clone https://github.com/q0015300153/test-hive.git
```

#### Then rebuild the Laravel project
```bash
cp test-hive
```
```bash
composer install
```
```bash
cp .env.example .env
```
```bash
php artisan key:generate
```

#### Test the route of the link
```routes/web.php```
```php
Route::match(['get'], '/hive', [
	'uses' => 'Hive@test',
]);
```
#### Test the linked controller
```app/Http/Controllers/Hive.php```
```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hive extends Controller
{
    public function test(Request $request)
    {
        $hive = new \ThriftSQL\Hive('hive-server', 10000, 'root', 'root', 30);
        $hiveTables = $hive
            ->connect()
            ->getIterator('SHOW TABLES');

        $hive->disconnect();
        dd($hiveTables);
    }
}
```

#### Open the URL to see if the connection is successful.
[http://localhost/hive/](http://localhost/hive/)