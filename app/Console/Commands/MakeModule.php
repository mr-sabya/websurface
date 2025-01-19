<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class MakeModule extends Command
{
    protected $signature = 'make:module {name}';
    protected $description = 'Create a new module';

    protected $filesystem;

    public function __construct(Filesystem $filesystem)
    {
        parent::__construct();
        $this->filesystem = $filesystem;
    }

    public function handle()
    {
        $moduleName = $this->argument('name');
        $modulePath = app_path("Modules/{$moduleName}");

        if ($this->filesystem->exists($modulePath)) {
            $this->error("Module {$moduleName} already exists!");
            return;
        }

        // Create module folder structure
        $this->filesystem->makeDirectory("{$modulePath}/Http/Livewire", 0755, true);
        $this->filesystem->makeDirectory("{$modulePath}/Controllers", 0755, true);
        $this->filesystem->makeDirectory("{$modulePath}/Models", 0755, true);
        $this->filesystem->makeDirectory("{$modulePath}/Migrations", 0755, true);
        $this->filesystem->makeDirectory("{$modulePath}/Views/livewire", 0755, true);
        $this->filesystem->makeDirectory("{$modulePath}/Routes", 0755, true);
        $this->filesystem->makeDirectory("{$modulePath}/Config", 0755, true);

        // Create default files
        $this->filesystem->put("{$modulePath}/FrontendServiceProvider.php", $this->getServiceProviderContent($moduleName));
        $this->filesystem->put("{$modulePath}/Routes/web.php", $this->getRoutesContent());
        $this->filesystem->put("{$modulePath}/Config/{$moduleName}.php", $this->getConfigContent());
        $this->filesystem->put("{$modulePath}/Http/Livewire/ExampleComponent.php", $this->getLivewireComponentContent($moduleName));
        $this->filesystem->put("{$modulePath}/Views/livewire/example-component.blade.php", $this->getViewContent());

        $this->info("Module {$moduleName} created successfully!");
    }

    protected function getServiceProviderContent($moduleName)
    {
        return <<<EOD
<?php

namespace App\Modules\\{$moduleName};

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class {$moduleName}ServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Register routes
        \$this->loadRoutesFrom(__DIR__ . '/Routes/web.php');

        // Register views
        \$this->loadViewsFrom(__DIR__ . '/Views', '{$moduleName}');

        // Register migrations
        \$this->loadMigrationsFrom(__DIR__ . '/Migrations');

        // Register Livewire components
        Livewire::component('{$moduleName}.example-component', \\App\Modules\\{$moduleName}\\Http\\Livewire\\ExampleComponent::class);
    }

    public function register()
    {
        \$this->mergeConfigFrom(__DIR__ . '/Config/{$moduleName}.php', '{$moduleName}');
    }
}
EOD;
    }

    protected function getRoutesContent()
    {
        return <<<EOD
<?php

use Illuminate\Support\Facades\Route;
use App\Modules\\Example\Http\Livewire\ExampleComponent;

Route::get('/', ExampleComponent::class)->name('example.home');
EOD;
    }

    protected function getConfigContent()
    {
        return <<<EOD
<?php

return [
    // Configuration options for the module
];
EOD;
    }

    protected function getLivewireComponentContent($moduleName)
    {
        return <<<EOD
<?php

namespace App\Modules\\{$moduleName}\\Http\\Livewire;

use Livewire\Component;

class ExampleComponent extends Component
{
    public function render()
    {
        return view('{$moduleName}::livewire.example-component');
    }
}
EOD;
    }

    protected function getViewContent()
    {
        return <<<EOD
<div>
    <h1>Welcome to the Example Component!</h1>
</div>
EOD;
    }
}
