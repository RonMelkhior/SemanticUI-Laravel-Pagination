# Semantic-UI Laravel Pagination Templates

Small snippets for the pagination templates to work with Semantic-UI's syntax.

## Demo

A demo (showcasing both full pagination & simple) can be viewed [here](https://pagination.melkhior.me).

## Usage

First of all, this only supports Laravel 5.3+ (older versions don't let you export the pagination templates).

To get the default templates, first run:

`php artisan vendor:publish --tag=laravel-pagination`

Afterwards, you can get rid of the Bootstrap 4 specific templates, and replace the default ones with the ones in the `src` directory.
