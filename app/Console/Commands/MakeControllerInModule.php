<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;

class MakeControllerInModule extends Command
{
    protected $signature = 'make:module-controller {module} {name}';
    protected $description = 'Create a new controller within a module';

    protected $filesystem;

    public function __construct(Filesystem $filesystem)
    {
        parent::__construct();
        $this->filesystem = $filesystem;
    }

    public function handle()
    {
        $module = $this->argument('module');
        $name = $this->argument('name');
        $controllerPath = app_path("Modules/{$module}/Http/Controllers/{$name}.php");
        $directoryPath = app_path("Modules/{$module}/Http/Controllers");

        // Check if controller already exists
        if ($this->filesystem->exists($controllerPath)) {
            $this->error("Controller {$name} already exists in the {$module} module.");
            return;
        }

        // Create the directory if it doesn't exist
        if (!$this->filesystem->exists($directoryPath)) {
            $this->filesystem->makeDirectory($directoryPath, 0755, true);
        }

        // Create the controller file
        $this->filesystem->put($controllerPath, $this->buildControllerContent($module, $name));

        $this->info("Controller {$name} created successfully in the {$module} module.");
    }

    protected function buildControllerContent($module, $name)
    {
        $namespace = "App\\Modules\\{$module}\\Http\\Controllers";
        $className = Str::studly($name);

        return <<<EOD
<?php

namespace {$namespace};

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class {$className} extends Controller
{
    public function index()
    {
        return view('{$module}::index'); // Adjust view path according to your module structure
    }
}
EOD;
    }
}
