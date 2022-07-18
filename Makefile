# install build-essential if you cannot run make commands
# example use: 
# make up

env:
	cp .env.example .env
	
up:
	./vendor/bin/sail up -d

stop:
	./vendor/bin/sail stop
	
down:
	./vendor/bin/sail down
cdu:
	.cd /mnt/c/Users/SONATA\ STUDIO/shoeweb
