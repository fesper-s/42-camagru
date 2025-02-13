all:
	docker compose build --no-cache
	docker compose up -d

down:
	docker compose down

rebuild:
	docker compose down
	docker compose build --no-cache
	docker compose up -d

clean:
	docker compose down -v
	docker system prune -f

.PHONY: up down build rebuid clean
