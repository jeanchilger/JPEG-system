RED='\033[0;31m'
WHITE='\033[1;37m'
NC='\033[0m'

#### install php
echo -e "${RED}INSTALLING PHP${NC}"
sudo apt install php7.2
sudo apt install php7.2-cli

sudo apt install php7.2-dev
sudo apt install php7.2-mbstring
sudo apt install php7.2-xml
sudo apt install php7.2-mysql

#### install composer
echo -e "${RED}INSTALLING COMPOSER${NC}"

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'a5c698ffe4b8e849a443b120cd5ba38043260d5c4023dbf93e1558871f1f07f58274fc6f4c93bcfd858c6bd0775cd8d1') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

mv composer.phar /usr/local/bin/composer

#### install mysql
echo -e "${RED}INSTALLING MYSQL${NC}"
sudo apt install mysql-client-core-5.7
sudo apt install mysql-server
sudo mysql_secure_installation utility

## bd setup for this project
echo -e "${WHITE}SETUP DATABASE${NC}"
sudo mysql -u root < setupa.sql
sudo mysql -u jpeg -p jpeg jpeg < setupb.sql

#### project artisan setup
echo -e "${RED}SETUP PROJECT ARTISAN CONFIG${NC}"
php artisan key:generate

echo '
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:CprebaGla3CQGMyE86/GvhniwiEROehE5zxnZKe7/tE=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=jpeg
DB_USERNAME=jpeg
DB_PASSWORD=jpeg

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
' > .env

php artisan migrate
