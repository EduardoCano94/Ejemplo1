# Copilot Instructions for AI Agents

## Project Overview
- This is a Laravel-based PHP web application following standard Laravel conventions.
- Major directories:
  - `app/`: Application logic (Controllers, Models, Providers)
  - `routes/`: Route definitions (`web.php`, `console.php`)
  - `resources/views/`: Blade templates for UI
  - `database/`: Migrations, seeders, factories
  - `public/`: Entry point (`index.php`), public assets
  - `config/`: Application configuration

## Key Workflows
- **Development server:**
  - Start with `php artisan serve` (runs on http://localhost:8000 by default)
- **Database migrations:**
  - Run with `php artisan migrate`
- **Seeding database:**
  - Use `php artisan db:seed`
- **Testing:**
  - Run tests with `vendor\bin\phpunit` or `php artisan test`
- **Dependency management:**
  - Use Composer (`composer install`, `composer update`)

## Project-Specific Patterns
- **Controllers:** Located in `app/Http/Controllers/`. Follow Laravel's resource controller conventions.
- **Models:** Located in `app/Models/`. Eloquent ORM is used for database interaction.
- **Migrations:** In `database/migrations/`. Use timestamped filenames. Example: `2025_10_11_193756_create_proveedores_table.php`.
- **Views:** Blade templates in `resources/views/`. Use `.blade.php` extension.
- **Routes:**
  - Web routes: `routes/web.php`
  - Console/CLI routes: `routes/console.php`
- **Configuration:** All config in `config/` directory. Environment variables in `.env` (not committed).

## Integration & Conventions
- **No custom build scripts**: Standard Laravel/Vite workflow for assets (`npm run dev` for frontend assets if needed).
- **User authentication:**
  - If present, handled via Laravel's built-in Auth system (see `config/auth.php`).
- **Testing:**
  - Feature and unit tests in `tests/Feature/` and `tests/Unit/`.
- **Naming:**
  - Use English for code, Spanish for domain-specific names (e.g., `proveedores`).

## Examples
- To create a new migration: `php artisan make:migration create_example_table`
- To add a controller: `php artisan make:controller ExampleController`
- To run all tests: `php artisan test`

## References
- See `README.md` for general Laravel info.
- Laravel docs: https://laravel.com/docs

---
If any conventions or workflows are unclear, ask the user for clarification or examples from this codebase.
