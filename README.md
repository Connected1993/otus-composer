# отладчик для массива данных

Краткое описание пакета

### Требования

- PHP 7.4

### Установка
```bash
$ composer require alexander-balabas/otus-composer
```

### Использование
для вывода данных необходимо передать GET параметр с значением ?admin=debug

```php
<?php
$debugger = new Debugger();
$debugger->debug(['name'=>'Alex']);
```
