sudo apt install mysql-client-core-5.7
sudo apt install mysql-server
sudo mysql_secure_installation utility

sudo mysql -u root < setupa.sql
sudo mysql -u jpeg -p jpeg jpeg < setupb.sql

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

php atisan migrate
