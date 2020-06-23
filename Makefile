.PHONY: default help run migrate migratenew migratedown exec dumpautoload

DOCKER_NAME		= laravel-modules

default: help

help:
	@echo 'Management commands for ${APP_NAME}:'
	@echo
	@echo 'Usage:'
	@echo '    make run                 	Run docker compose.'
	@echo '    make migrate                 Run database migration.'
	@echo '    make migratenew name=""      Create new database migration with name provided.'
	@echo '    make migratedown             Rollback database migration.'
	@echo '    make exec cmd=""             Execute command in container.'
	@echo '    make dumpautoload            Execute composer dump-autoload.'
	@echo

run:
	docker-compose up

migrate:
	docker exec -it ${DOCKER_NAME} php artisan migrate

migratenew:
	docker exec -it ${DOCKER_NAME} php artisan make:migration ${name}

migratedown:
	docker exec -it ${DOCKER_NAME} php artisan migrate:rollback

exec:
	docker exec -it ${DOCKER_NAME} ${cmd}

dumpautoload:
	docker exec -it ${DOCKER_NAME} composer dump-autoload
