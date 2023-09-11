Fun Facts - Laravel Test Project
"Fun Facts" is a test project built on Laravel. While it provides users with a collection of intriguing facts, its main objective is for learning and demonstration of CRUD operations, user authentication, and API development.

Requirements
PHP >= 8.0
Composer
Database (MySQL, PostgreSQL, SQLite, etc.)
Installation & Setup

# Clone the repository

git clone https://github.com/e-ramos18/laravel-funfact.git
cd fun-facts

# Install dependencies

composer install

# Copy the example env file

cp .env.example .env

# Generate application key

php artisan key:generate

# (Ensure your .env file has correct database information before migrating)

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=funfacts
DB_USERNAME=root
DB_PASSWORD=

# Run migrations and seeders

php artisan migrate --seed

# Start development server

php artisan serve

Visit http://localhost:8000 in your browser after starting the server.

Deployment
For deployment, refer to Laravel's official documentation or your hosting provider's guidelines.

Contributing
Fork the repository.
Create a branch.
Commit changes.
Submit a pull request.
License
Fun Facts uses the MIT license. See LICENSE file for more details.
