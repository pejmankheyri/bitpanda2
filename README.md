## For easy and faster setup please follow this instructions

Go to your develop sources like running:
cd /var/www/html/

Clone the project to specific directory (Enter your username and password for proceed):
git clone https://github.com/pejmankheyri/bitpanda2.git your-path

Move to your cloned path:
cd your-path

Install the laravel dependencies:
composer install

Copy the example envirenement file to project:
cp .env.example .env

Generate new key for laravel project:
php artisan key:generate

Create a new mysql database for project

Open .env file for setting database configuration:
nano .env

Run laravel database migration:
php artisan migrate

Seed the fake data to database:
php artisan migrate:refresh --seed

Change storage folder permissions:
sudo chmod -R 775 storage/

Link the storage folder to public:
php artisan storage:link

Serve the laravel project for see results:
php artisan serve

Access to required tests by links below:
- http://127.0.0.1:8000/api/transactions?source=csv
- http://127.0.0.1:8000/api/transactions?source=db
- http://127.0.0.1:8000/api/transactions?source=html

You can get [Postman Request](https://artiha.ir/uploads/bitpanda-postman) and import to your own.

