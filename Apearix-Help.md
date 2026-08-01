# Setup
composer update
npm install

# Clear all Blade view and route caches
php artisan view:clear
php artisan route:clear
php artisan config:clear

# Build production assets using Vite
npm run build