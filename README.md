# Generate laravel repositories

[![Latest Version on Packagist](https://img.shields.io/packagist/v/thantzin-soe/laravel-repository-generator.svg?style=flat-square)](https://packagist.org/packages/thantzin-soe/laravel-repository-generator)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/thantzin-soe/laravel-repository-generator/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/thantzin-soe/laravel-repository-generator/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/thantzin-soe/laravel-repository-generator.svg?style=flat-square)](https://packagist.org/packages/thantzin-soe/laravel-repository-generator)

You can generate laravel repository class and interface using **php artisan make:repository Category/CategoryRepository --model=Category**.It will generate CategoryRepository class and CategoryRepositoryInterface inside the *app/Repositories/Category* folder.This package is developed based on the [Spatie Laravel Package Skeleton](https://github.com/spatie/package-skeleton-laravel).


## Installation

You can install the package via composer:

```bash
composer require thantzin-soe/laravel-repository-generator
```

## Usage

After installing via composer,you can generate scaffolding by running
```bash
php artisan make:repository Category/CategoryRepository --model=Category
```

You can add your bindings to your AppServiceProvider or you can a create a new service provider with `php artisan make:provider RepositoryServiceProvider`(don't forget to add it in the providers array inside of `config\app.php`) and add the bindings in the `register()` method, here is the example.

```php
namespace App\Providers; 

use Illuminate\Support\ServiceProvider;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Category\CategoryRepository;

/** 
* Class RepositoryServiceProvider 
* @package App\Providers 
*/ 
class RepositoryServiceProvider extends ServiceProvider 
{ 
   /** 
 * Register services. 
 * 
 * @return void 
 */ 
   public function register() 
   { 
       $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
   }
}
```

## Testing

```bash
composer test
```

## Contributing

Any contributions are welcome.


