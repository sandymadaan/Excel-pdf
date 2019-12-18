#Excel Pdf Converter

An application that imports the excel sheet and read the rows of the sheets to build and then download the pdf's from the static html template and the data fed by excel sheet

## Installation

Clone the repo locally:

```sh
git clone git@github.com:sandymadaan/Excel-pdf.git
cd Excel-pdf
```

Install PHP dependencies:

```sh
composer install
```

Setup configuration:

```sh
cp .env.example .env
```

Generate application key:

```sh
php artisan key:generate
```

Create an SQLite database. You can also use another database (MySQL, Postgres), simply update your configuration accordingly.

```sh
touch database/database.sqlite
```

Run database migrations:

```sh
php artisan migrate
```
You're ready to go!
