# install build-essential if you cannot run make commands
# example use: 
# make up

env:
	cp .env.example .env
	cd laradock && cp .env.example .env 
	
up:
	cd laradock && docker compose up -d nginx mysql workspace 

stop:
	cd laradock && docker compose stop

migrate:
	./vendor/bin/sail php artisan migrate
	
down:
	cd laradock && docker compose down

permission:
	cd ../ && sudo chmod 777 -R $(shell pwd) && sudo chown -R $(shell id -u):$(shell id -g) $(shell pwd)/vendor/ 
init:
	cd laradock && docker compose exec -T workspace bash -c 'composer install'
	cd laradock && docker compose exec -T workspace bash -c 'php artisan key:generate'
	cd laradock && docker compose exec -T workspace bash -c 'php artisan migrate'
	cd laradock && docker compose exec -T workspace bash -c 'npm install'
	
deploy:
	make env
	cd laradock && docker compose up -d nginx mysql workspace
	cd laradock && docker compose exec -T workspace bash -c 'composer install'
	cd laradock && docker compose exec -T workspace bash -c 'php artisan key:generate'
	cd laradock && docker compose exec -T workspace bash -c 'php artisan migrate'
	cd laradock && docker compose exec -T workspace bash -c 'npm install && npm run build'

build:
	cd laradock && docker compose build nginx mysql workspace
	
rebuild:
	cd laradock && docker compose build --no-cache nginx mysql workspace 
bash:
	cd laradock && docker compose exec --user laradock workspace bash

move-up:
	cd '/mnt/c/Users/SONATA STUDIO/' && pwd
message:
	echo "hello world"
alias:
	alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'

