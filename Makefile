# Inicia os serviços Docker em modo detached
up:
	docker compose up -d

# Para os serviços Docker
stop:
	docker compose stop

# Para e remove os serviços Docker
down:
	docker compose down

# Instala dependências dentro do contêiner PHP
install_dependencies:
	docker compose exec -T php bash -c "composer install"

# Executa os testes sem gerar relatório
tests:
	docker compose exec -T php bash -c "php bin/phpunit --no-coverage"

# Gera relatório de testes
tests_coverage:
	docker compose exec -T php bash -c "php -d memory_limit=512M bin/phpunit tests/ --path-coverage src/ --coverage-html artifact/coverage-html"