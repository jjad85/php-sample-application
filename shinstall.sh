#!/bin/sh

cd ../..
chmod 775 Makefile
./Makefile
./composer.phar install
cp -R html/000-default.conf /etc/apache2/sites-available/000-default.conf
a2ensite 000-default.conf
a2enmod rewrite
apache2ctl configtest
service apache2 restart