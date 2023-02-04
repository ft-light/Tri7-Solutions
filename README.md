## Initial Set up

### Backend

1. Go to sub-foldder `backend`
1. Copy `env.example` to `.env`
1. Modify `.env`, specifically `DB_*`
1.Install PHP dependencies: `composer install`
1. Generate Laravel Application Key: `php artisan key:generate`
1. Update database contents: 
    1. Import the sql file in the `db` folder or just run
        1. `php artisan migrate`
        1. `php artisan db:seed`

#### Sample Accounts
- Manager
  - username: `samuel`
  - password: `password`
- Web Developer
  - username: `william`
  - password: `password`
- Manager
  - username: `john`
  - password: `password`