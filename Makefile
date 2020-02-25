## SETUP
CONSOLE=php bin/console
PHPUNIT=php bin/phpunit
SYMP=symfony

cc: ## Clear your cache
	$(CONSOLE) cache:clear --no-warmup || rm -rf var/cache/*

encore: ## Lance le server Encore Webpack
	npm run dev-server

server: ## Lance le server symfony
	$(SYMP) serve

liipcc: ## Supprime le cache de Liip
	$(CONSOLE) liip:imagine:cache:remove
