
.PHONY:
up:
	docker-compose up -d

.PHONY:
down:
	docker-compose down

.PHONY:
ps:
	docker-compose ps

.PHONY:
build:
	docker-compose build

.PHONY:
logs:
	docker-compose logs -f

.PHONY:
reload:
	docker-compose stop && docker-compose start

.PHONY:
shell:
	docker exec -it irakli_php bash
