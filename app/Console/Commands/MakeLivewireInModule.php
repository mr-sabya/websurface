<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MakeLivewireInModule extends Command
{
    protected $signature = 'make:livewire-module {module} {name}';
    protected $description = 'Create a new Livewire component in a specific module';

    public function handle()
    {
        $module = $this->argument('module');
        $name = $this->argument('name');

        // Split name by slashes (for subdirectories like Theme/Footer1)
        $nameParts = explode('/', $name);
        $componentName = array_pop($nameParts); // Last part is the component name (e.g., 'Footer1')
        $namespaceParts = $nameParts; // Remaining parts are the namespace (e.g., ['Theme'])

        // Generate kebab-case version of the component name
        $kebabName = Str::kebab($componentName); // Example: 'Footer1' -> 'footer1'

        // Ensure there is no leading or trailing hyphen
        $kebabName = ltrim($kebabName, '-');

        $modulePath = app_path("Modules/{$module}");
        $componentPath = "{$modulePath}/Http/Livewire/" . implode('/', $namespaceParts) . "/{$componentName}.php";

        // Define view path including the 'theme' subfolder
        $viewPath = "{$modulePath}/Views/livewire/" . implode('/', $namespaceParts) . "/{$kebabName}.blade.php";

        if (!File::exists($modulePath)) {
            $this->error("Module {$module} does not exist!");
            return;
        }

        // Create Livewire component class in the theme folder
        if (!File::exists($componentPath)) {
            File::ensureDirectoryExists(dirname($componentPath));
            File::put($componentPath, $this->getComponentStub($module, $namespaceParts, $componentName, $kebabName));
            $this->info("Created Livewire component: {$componentPath}");
        } else {
            $this->error("Component {$componentName} already exists in module {$module}.");
        }

        // Create Livewire view in the 'theme' subfolder inside the 'livewire' folder
        if (!File::exists($viewPath)) {
            File::ensureDirectoryExists(dirname($viewPath));
            File::put($viewPath, $this->getViewStub());
            $this->info("Created Livewire view: {$viewPath}");
        } else {
            $this->error("View for component {$componentName} already exists in module {$module}.");
        }
    }

    protected function getComponentStub($module, $namespaceParts, $name, $kebabName)
{
    // Ensure the namespaceParts are passed correctly as an array to implode
    $namespace = "App\\Modules\\{$module}\\Http\\Livewire\\" . implode('\\', $namespaceParts);

    return <<<EOD
<?php

namespace {$namespace};

use Livewire\Component;

class {$name} extends Component
{
    public function render()
    {
        // Use the kebab-cased component name for the view path
        return view('{$module}::livewire.' . implode('.', \$namespaceParts) . ".{$kebabName}");
    }
}
EOD;
}

    protected function getViewStub()
    {
        return <<<EOD
<div>
    <h1>Hello from Livewire Component!</h1>
    <!-- Add your livewire component HTML and logic here -->
</div>
EOD;
    }
}
