install:
	composer install

lint:
	composer run-script phpcs -- --standard=PSR2 routes

test:
	phpunit

run:
	php -S localhost:8000 -t public

logs:
	tail -f storage/logs/lumen.log