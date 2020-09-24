## About Invoyce

Invoyce is an auto-generated invoice web application to help user's accounting efforts. Some features are:

- Simple and fast to create an invoice
- Create recurring invoices which gets sent automatically within a period
- Create teams
- Instant notifications

Invoyce is accessible, and provides the ease required to handle an invoice from creation to payment

## How to Run

1. git clone
2. Open the console and cd into your project root directory
. Rename .env.example file to .env inside your project root and update the database information. (windows wont let you do it, so you have to open your console cd your project root directory and Run mv .env.example .env )
3. Run composer install or php composer.phar install
4. Run php artisan key:generate
5. Run php artisan migrate
6. Run php artisan db:seed to run seeders(Optional)
7. Run php artisan serve

