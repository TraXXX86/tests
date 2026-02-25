# AGENTS.md

## Cursor Cloud specific instructions

### Project overview

Single Symfony 6.4 + Vue.js 3 application (`symfony-vue-app/`). No database required. Vue.js is loaded via CDN.

### Running the app

```bash
cd symfony-vue-app
composer install --no-interaction
php -S 0.0.0.0:8000 -t public
```

Or via Docker Compose from the repo root:

```bash
docker compose up --build
```

### Gotchas

- The `symfony/runtime` Composer plugin must be allowed. If `composer install` fails with a plugin error, run: `composer config --no-plugins allow-plugins.symfony/runtime true` inside `symfony-vue-app/`.
- There is no `composer.lock` committed yet on the main branch; `composer install` will resolve dependencies from `composer.json` on first run.
- The `bin/console` Symfony CLI entrypoint was missing from the original repo and was added. Use `php bin/console` for Symfony commands (cache:clear, debug:router, etc.).
- The `config/packages/routing.yaml` was removed because it conflicted with MicroKernelTrait's auto-routing. Routes are loaded automatically from `config/routes.yaml` via attribute-based routing on controllers.
- The `session` block in `config/packages/framework.yaml` must be indented under `framework:` (not at root level).
