all:
	rm -rf server
	mkdir server || true
	curl -o selenium-server-standalone-2.45.0.jar http://selenium-release.storage.googleapis.com/2.45/selenium-server-standalone-2.45.0.jar
	curl -o phpunit.phar https://phar.phpunit.de/phpunit.phar
	mv selenium-server-standalone-2.45.0.jar server/
	chmod +x phpunit.phar
	sudo mv phpunit.phar /usr/local/bin/phpunit
	phpunit --version

run:
	java -jar server/selenium-server-standalone-2.45.0.jar


