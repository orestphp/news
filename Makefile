up:
	docker-compose up -d

build:
	docker-compose up -d --build

down:
	docker-compose down

restart:
	docker-compose down
	docker-compose up -d --build

init:
	docker-compose up -d --build
	docker-compose down
dev:
	docker-compose up
