## For easy and faster setup please follow this instructions

- Go to your develop source folder (for example):
```bash
cd /var/www/html/
```

- Clone the project to specific directory (Enter your username and password for proceed):
```bash
git clone https://github.com/pejmankheyri/bitpanda2.git your-path
```
- Move to your cloned path:
```bash
cd your-path
```

- Install the laravel dependencies:
```bash
composer install
```

- Copy the example envirenement file to project:
```bash
cp .env.example .env
```

- Generate new key for laravel project:
```bash
php artisan key:generate
```

- Create a new mysql database for project

- Open .env file for setting database configuration:
```bash
sudo nano .env
```

- Run laravel database migration:
```bash
php artisan migrate
```

- Seed the fake data to database:
```bash
php artisan migrate:refresh --seed
```

- Change storage folder permissions:
```bash
sudo chmod -R 775 storage/
```

- Link the storage folder to public:
```bash
php artisan storage:link
```

- Serve the laravel project for see results:
```bash
php artisan serve
```

## Access to required tests by links below:
- http://127.0.0.1:8000/api/transactions?source=csv
- http://127.0.0.1:8000/api/transactions?source=db
- http://127.0.0.1:8000/api/transactions?source=html

You can get [Postman Request Json Format](https://drive.google.com/file/d/1jlwCmpQiI90CHAtoQgUKfmoTbc4EDcb9/view?usp=sharing) and import to your own.

