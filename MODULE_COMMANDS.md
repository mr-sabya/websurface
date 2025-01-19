
# Module-Based Setup Custom Commands in Laravel

This document contains custom Artisan commands used in our module-based setup for Laravel.

## 1. Make Controller in Module

Creates a controller inside the specified module.

### Command:
```bash
php artisan make:module-controller {module} {ControllerName}
```

### Example:
```bash
php artisan make:module-controller Frontend FrontendController
```

### Description:
This command will generate a controller inside the `app/Modules/{ModuleName}/Controllers/{ControllerName}.php` file.

---

## 2. Make Livewire Component in Module

Creates a Livewire component inside the specified module.

### Command:
```bash
php artisan make:module-livewire {module} {ComponentName}
```

### Example:
```bash
php artisan make:module-livewire Frontend HomeComponent
```

### Description:
This command will generate a Livewire component inside the `app/Modules/{ModuleName}/Http/Livewire/{ComponentName}.php` file and its corresponding Blade view inside the module’s views folder.

---

## 3. Make Service Provider for Module

Creates a service provider that can be used to register module-specific services, like view namespaces.

### Command:
```bash
php artisan make:provider FrontendServiceProvider
```

### Description:
This provider registers the view namespace for the module and helps Laravel recognize where to look for views under the `frontend` namespace.
