# posts
Laravel + Tailwind CRUD for User Posts

1. Download posts
2. Copy folder to Laravel projects folder
3. Copy posts\.env.example to posts\.env
4. Update .env MAIL_X values to preferred SMTP settings
5. CLI: cd posts
6. composer install
7. php artisan key:generate
8. mysql -u root -p -e "CREATE DATABASE posts"
9. php artisan migrate:fresh --seed
10. npm install
11. php artisan serve

http://localhost:8000