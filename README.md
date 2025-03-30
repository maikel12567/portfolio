# Laravel Code Conventies

Dit document beschrijft de codeconventies voor een Laravel-project met Blade, met focus op Controllers, Modellen, Database en de mappenstructuur.

## Inhoud
1. [Controllers](#controllers)
2. [Modellen](#modellen)
3. [Database](#database)
4. [Mappenstructuur](#mappenstructuur)

## 1. Controllers

- **Naamgeving:** Controllers eindigen altijd op `Controller` (bijv. `UserController`).
- **Methoden:** Gebruik duidelijke en beschrijvende methoden. 
- **Resource Controllers:** Gebruik `php artisan make:controller <ControllerName> --resource` voor CRUD-methoden.
- **Route Bindings:** Gebruik route model binding om de leesbaarheid van routes te verbeteren.

### Voorbeeld:
```php
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
}  

### 2. gebruikt tailwind


How to start using this project
Fork this project from github

Put it in your desired folder

Open your ternimal

Do a composer install

Do a copy .env.example .env

Edit the .env to fit your information

Open your ternimal again, and fill out these commands

php artisan key:generate
php artisan migrate
php artisan migrate:fresh --seed
npm install
npm run dev
php artisan serve



