docker-up:
		docker-compose up -d

docker-logs:
		docker-compose logs -f

docker-rm:
		docker-compose rm $(docker ps -a -q) -f

front-ssh:
		docker-compose exec front bash

engine-ssh:
		docker-compose exec engine bash

db:
		docker-compose exec db mysql -uroot -p"root"

symfony-clear-cache:
		docker-compose exec engine php bin/console cc

symfony-composer-install:
		docker-compose exec engine composer install
