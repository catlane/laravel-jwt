cd /www/wwwroot/overseas-shop &&
chmod -R 777 ./ &&
git reset --hard master &&
git pull origin master &&
composer install &&
composer dump-autoload

