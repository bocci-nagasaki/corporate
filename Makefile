docker/ssh:
	docker-compose run --rm app bash

docker/setup:
	chmod -R 755 scripts
	docker-compose down
	docker-compose -f "docker-compose.yml" up -d --build
	docker-compose run cli sh -c "chmod 755 -R /tmp/scripts && /tmp/scripts/wp-install.sh"

docker/up:
	docker-compose up

docker/down:
	docker-compose down

docker/clean:
	docker-compose down -v
	docker-compose rm -v

plugin/export:
	docker-compose run cli sh -c "cd /tmp/scripts/ && ./plugin-list.sh"

plugin/install:
	docker-compose run cli sh -c " cd /tmp/scripts/ && ./wp-plugin-install.sh"
