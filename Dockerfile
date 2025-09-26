# Gunakan gambar dasar PHP resmi dengan Nginx yang dioptimalkan untuk Laravel
FROM ghcr.io/shinsenter/php:8.2-nginx-laravel

# Salin semua file proyek ke dalam kontainer
COPY . /var/www/html

# Atur izin folder agar server bisa menulis file log dan cache
RUN chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache

# Perintah ini akan dijalankan saat deploy untuk setup proyek
# Termasuk npm install dan npm run build
RUN composer install --no-dev --optimize-autoloader \
    && npm install \
    && npm run build \
    && php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

# Perintah akhir yang akan dijalankan di dalam kontainer.
# Tidak perlu 'php artisan serve', karena Nginx sudah menanganinya.
CMD ["/usr/bin/start-server.sh"]
