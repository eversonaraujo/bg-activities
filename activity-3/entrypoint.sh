#!/bin/bash
if [ ! -d vendor ]
    then
        apt-get update && apt install curl git -y
        php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
        php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
        php composer-setup.php
        php -r "unlink('composer-setup.php');"
        curl -sS https://get.symfony.com/cli/installer | bash
        symfony new app --full --version=6
        mv ./app/* ./
        rm -R app
        mv composer.phar /usr/local/bin/composer
        composer install --dev
fi

if [ ! -f .env ]
    then
        touch .env
fi

symfony serve
