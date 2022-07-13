# install build-essential if you cannot run make commands
# example use: 
# make initialize
# make up

initialize:
	docker run --rm --interactive --tty -v $(pwd):/app composer install

up:
	./vendor/bin/sail up -d

stop:
	./vendor/bin/sail stop
	
down:
	./vendor/bin/sail down