install-dev: 
	cd /var/www/html;
	composer.phar
	./composer.phar install
	ln --symbolic --no-dereference --force config-dev config

composer.phar:
	wget https://getcomposer.org/composer.phar
	chmod u+x composer.phar
