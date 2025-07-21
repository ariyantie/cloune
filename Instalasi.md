# 1. Buat project
composer create-project laravel/laravel soucode-clone

cd soucode-clone

# 2. Tambah Filament (admin) & Laravel Breeze (auth)
composer require filament/filament:"^3.0" laravel/breeze --dev
php artisan breeze:install blade
npm install && npm run dev   # Tailwind + Vite

# 3. Konfigurasi env
cp .env.example .env
php artisan key:generate
# set DB_*, MAIL_* dll sesuai VPS Anda

# 4. Jalankan migrasi dasar
php artisan migrate
