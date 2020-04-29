.PHONY: default help build

APP_NAME      	= laravel-modules
VERSION			= latest

default: help

help:
	@echo 'Management commands for ${APP_NAME}:'
	@echo
	@echo 'Usage:'
	@echo '    make build                 	Build docker image.'
	@echo '    make run                 	Run docker compose.'

	@echo

build:
	docker build -t ${APP_NAME}:${VERSION} . --no-cache

run:
	docker-compose up