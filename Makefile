# install build-essential if you cannot run make commands
# example use: 
# make up
#
# SAIL ALIAS
# alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'

env:
	cp .env.example .env
	
up:
	./vendor/bin/sail up -d

stop:
	./vendor/bin/sail stop

migrate:
	./vendor/bin/sail php artisan migrate
	
down:
	./vendor/bin/sail down

move-up:
	cd '/mnt/c/Users/SONATA STUDIO/' && pwd
message:
	echo "hello world"

