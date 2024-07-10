## Demo DynamicFilteringTrait
This project demonstrates a reusable trait (component) for dynamically filtering data displayed on a page. It allows users to search and filter data based on various criteria, including:

- Columns: Supports filtering by specific columns like "name" or "description".
- Operators: Provides multiple search operators like "equal to", "greater than", "like" (partial string match), etc.
- Data Types: Handles different data types like numbers, strings, and dates with appropriate operators.
- This trait offers a flexible and configurable approach to building dynamic search functionalities within your web application.

You can find the trait at [SearchFilterTrait.php](https://github.com/ninhhuynh1999/api-app-demo/blob/main/app/Traits/SearchFilterTrait.php)

## Prerequisites:

* PHP >= 8.2 (https://www.php.net/)
* Composer (https://getcomposer.org/)
  
  
## **Installation:**

**1. Clone the repository:**

```sh
git clone https://github.com/ninhhuynh1999/api-app-demo
```

**2. Install dependencies:**
```sh
cd api-app-demo
composer install
php artisan key:generate
```

**3. Create and configure database:**

Since this project uses SQLite, there's no need for additional database configuration steps.

**4. Database Migrations and Seeding:**

```sh
php artisan migrate
```
This command creates the database tables based on your migration files (located in database/migrations).

**5. Seed the database:**

If you have seed data to populate your tables, you can run the following command:

```sh
php artisan db:seed
```
This command executes your seed files (located in database/seeds) to insert test or sample data.

## API DOCUMENT
This project will contain postman collection file in ``postman/v1.postman_collection.json``

In this document, I will only write about API ``/api/v1/stores``.

### List Stores (GET api/v1/stores)
**Version:** v1

**URL:** GET ``api/v1/stores``

**Authentication:** Required (authenticated user)

**Parameters:** 
* ``filters`` (optional): To support multiple search operators for one column, the param must  format according to the following structure ``filters[``**column_name**``:``**operator_type**``]``.
  * **column_name**: can be ``name``, ``description``
  * **operator_type**: 
    * ``eq``: equal search (use for **number**, **string**, **date**)
    * ``like``: search like in SQL (use for **string**)
    * ``gt``: greater than (use for **number**, **date**)
    * ``ge``: greater than or equal to (use for **number**, **date**)
    * ``lt``: lower than (use for **number**, **date**)
    * ``le``: lower than or equal to (use for **number**, **date**)
  * Unsupported operator types for a specific data type will be skipped
* Example: 
  * filters[created_at:lt]: search created_at must **lower than** the value
  * filters[description:like]: search description must **LIKE** the value
