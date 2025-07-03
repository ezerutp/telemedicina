<?php

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

echo "Testing database connection...\n";

try {
    // Test basic database connection
    $tables = \Illuminate\Support\Facades\DB::select('SELECT name FROM sqlite_master WHERE type="table"');
    echo "Tables in database:\n";
    foreach($tables as $table) {
        echo "- " . $table->name . "\n";
    }
    
    echo "\nTesting model operations...\n";
    
    // Test roles
    $rolesCount = App\Models\Role::count();
    echo "Roles count: $rolesCount\n";
    
    // Test tipo notificaciones
    $tipoNotifCount = App\Models\TipoNotificacion::count();
    echo "TipoNotificacion count: $tipoNotifCount\n";
    
    // Test especialidades
    $especialidadesCount = App\Models\Especialidad::count();
    echo "Especialidades count: $especialidadesCount\n";
    
    echo "\nAll tests passed successfully!\n";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
    echo "File: " . $e->getFile() . " Line: " . $e->getLine() . "\n";
}
