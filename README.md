# Laravel Livewire Project

This project is a Laravel application that uses Livewire for dynamic components. The application includes pagination, search functionality, sorting, database caching, and seeded test data.

## Features

- **Laravel and Livewire**: This project is built using Laravel and Livewire for real-time UI updates.
- **Pagination**: Easily navigate through pages of data.
- **Search**: Search records by name.
- **Ordering**: Sort data by ID or name.
- **Database Caching**: Cached database queries for improved performance.
- **Data Seeding**: Faker is used to seed the database with test data.
- **Optimized Queries**: Only the required columns are selected in queries, improving efficiency.

## Installation

To get started with this project, follow the steps below.

### Steps

1. Clone the repository:
   ```bash
   git clone `https://github.com/SaedHossam/embarques-task.git`
   ```
   
2. Change into the project directory:
   ```bash
   cd embarques-task
   ```

3. Install the required dependencies:
   ```bash
   composer install
   ```
4. Run database migrations and seed the database with test data:
   ```bash
   php artisan migrate:fresh --seed
   ```

5. Start the development server:
   ```bash
   php artisan serve
   ```

6. Open your browser and navigate to:
`http://localhost:8000/opportunities`


## Usage 
- Access the list of records with pagination.
- Use the search box to filter by name.
- Sort records by ID or name by clicking the respective headers.
- Data is cached to enhance performance.


## Technologies Used
- Laravel: PHP web framework.
- Livewire: Full-stack framework for Laravel.
- Faker: Library used to generate fake data for seeding.
