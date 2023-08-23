<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\App\Models\User::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('12345'),
        ]);
        // \App\Models\Setting::create([
        //     'title' => 'This is site title'
        // ]);

        \Facades\Spatie\Permission\Models\Role::create([
            'name' => 'admin'
        ]);
        \Facades\Spatie\Permission\Models\Role::create([
            'name' => 'member'
        ]);

        $user=User::first();
        $user->assignRole('admin');

        $role=\Facades\Spatie\Permission\Models\Role::findByName('admin');

        // Get All Route name of 'admin' prefix make as Permission and attach to admin Role
        $routes = Route::getRoutes();
        $adminRoutes = [];
    
        foreach ($routes as $route) {
            if (strpos($route->getName(), "admin") !== false ) {
                $adminRoutes[] = $route;
            }
        }
    
        $adminRouteNames = [];
        foreach ($adminRoutes as $route) {
            $adminRouteNames['name'] = $route->getName();
            \Facades\Spatie\Permission\Models\Permission::create($adminRouteNames);
        }
        
        $role->givePermissionTo(\Facades\Spatie\Permission\Models\Permission::all());
    }
}
