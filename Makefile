all:
	rm -rf server
	rm -rf tmp
	mkdir server || true
	mkdir tmp || true
	mkdir screenshots || true
	curl -o tmp/selenium-server-standalone-2.45.0.jar http://selenium-release.storage.googleapis.com/2.45/selenium-server-standalone-2.45.0.jar
	curl -o tmp/chromedriver_mac32.zip http://chromedriver.storage.googleapis.com/2.15/chromedriver_mac32.zip
	curl -o tmp/phpunit.phar https://phar.phpunit.de/phpunit.phar
	unzip tmp/chromedriver_mac32.zip
	mv tmp/selenium-server-standalone-2.45.0.jar server/
	sudo mv chromedriver /usr/local/bin/
	chmod +x tmp/phpunit.phar
	sudo mv tmp/phpunit.phar /usr/local/bin/phpunit
	rm -rf tmp/*
	phpunit --version

run:
	java -jar server/selenium-server-standalone-2.45.0.jar -Xmx2048m

test:
	phpunit test_case/
