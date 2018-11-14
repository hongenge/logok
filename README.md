###logok for Laravel
安装：
`composer require hongen/logok`

运行迁移创建info表：
`php artisan migrate`

用法:
```php
use Logok;

class User{
	public function test(){
		Logok::info('message');
	}
}

```

