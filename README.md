# Чтобы запустить проект нужно:

1. Создать локальную копию репозитория
```
git clone https://github.com/Barinulka/roso_test
```
2. В папке с проектом скопировать файл:
>.env.example.php

3. Переименовать .env.example.php в 
>.env.php

4. Заполнить данные для подключения к БД
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=имя локальной БД (mysql)
DB_USERNAME=имя пользователя (mysql)
DB_PASSWORD=пароль пользователя (mysql)
```
5. Дописать в файле .env.php
>QUEUE_CONNECTION=database

6. Установить зависимости 
```
composer install
```

7. Сгенерируйте ключ шифрования приложения
```
php artisan key:generate
```

8. Применить доступные миграции
```
php artisan migrate
```

9. Для OpenServer добавить в корневой каталог файл .htaccess c следующим содержимым:
```
RewriteEngine On
RewriteRule (.*) public/$1
``` 

10. Запустить сервер (если необходимо)
```
php artisan serve
```

11. Для запуска очередей
```
php artisan queue:work - для запуска очередей
```