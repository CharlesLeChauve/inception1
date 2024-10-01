all: build up

build:
	docker-compose -f docker-compose.yml build

rebuild:
	docker-compose -f docker-compose.yml build --no-cache

up:
	docker-compose -f docker-compose.yml up -d

down:
	docker-compose -f docker-compose.yml down

re: down build up rebuild