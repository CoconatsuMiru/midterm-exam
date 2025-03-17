<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class feature_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('features')->insert([
            ['feature_name' => 'Model', 'description' => 'PHP classes that represent database tables and provide an intuitive way to interact with the data using Eloquent ORM.'],
            ['feature_name' => 'View', 'description' => 'A template file that is used to display data to the user, typically containing HTML and Blade syntax for rendering dynamic content.'],
            ['feature_name' => 'Controller', 'description' => 'A class that handles incoming requests, processes the data, and returns a response, often by interacting with models and views.'],
            ['feature_name' => 'Routes', 'description' => 'URL patterns that map to specific controller actions or closures, determining how an incoming request is handled by the application.'],
            ['feature_name' => 'Middleware', 'description' => 'Layers of code that filter HTTP requests entering your application, often used for authentication, logging, and handling other cross-cutting concerns.'],
            ['feature_name' => 'Blade Templates', 'description' => 'A simple yet powerful templating engine that allows you to create dynamic HTML content with easy-to-read syntax in Laravel.'],
            ['feature_name' => 'Migrations', 'description' => 'PHP classes that provide a version control system for the database schema, allowing easy database changes and rollback operations.'],
            ['feature_name' => 'Seeders', 'description' => 'Classes used to populate the database with sample or default data, often used for testing or development purposes.'],
            ['feature_name' => 'Database', 'description' => 'The system responsible for managing and storing application data, typically used with Laravel’s Eloquent ORM for data interaction.'],
            ['feature_name' => 'Eloquent ORM', 'description' => 'A robust, ActiveRecord implementation for working with databases, providing an easy-to-use syntax for querying and interacting with your database models.']
        ]);
    }
}
