all:
	docker compose build
	docker compose up -d

down:
	docker compose down

rebuild: down all

clean: down
	docker system prune -f

.PHONY: all down build rebuid clean
