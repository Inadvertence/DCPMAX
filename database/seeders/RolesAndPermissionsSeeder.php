<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Création des rôles
        Role::create(['name' => 'FestivalAdmin']);
        Role::create(['name' => 'FilmProvider']);
        Role::create(['name' => 'Technicien']);
        Role::create(['name' => 'Supervision']);

        // (Optionnel) Tu peux aussi créer ici des permissions spécifiques
        // Par exemple :
        // Permission::create(['name' => 'upload films']);
        // Permission::create(['name' => 'validate films']);
        // Permission::create(['name' => 'manage users']);
        // Ensuite les assigner aux rôles
        // $role = Role::findByName('FestivalAdmin');
        // $role->givePermissionTo(['manage users', 'upload films']);
    }
}
