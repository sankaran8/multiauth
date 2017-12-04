## Setup
1. First set database details in env
   Then run migrations and seeder
~~~
php artisan migrate
php artisan db:seed --class=UsersTableSeeder
~~~
  
   If you can use sqlite. No need to run migartion or seeding. 
   Db can be found in database/database.sqlite

2. Run the app using php artisan serve
3. User login
	user@gmail.com/123456
   Admin login
     admin@gmail.com/123456
     Tick Admin checkbox


4. run php artisan serve and login at http://127.0.0.1:8000/login


## Files to check

1. app/Libraries/md5Hasher.php
2. config/app.php (check providers array for hashing)
3. config/auth.php (multi auth providers)
4. app/Http/Controllers/Auth/LoginController;
5. app/User.php
6. app/Admin.php
7. migration and seeding