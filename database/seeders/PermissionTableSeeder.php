<?php

namespace Database\Seeders;


use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [

            'role-list',
 
            'role-create',
 
            'role-edit',
 
            'role-delete',
 
            'product-list',
 
            'product-create',
 
            'product-edit',
 
            'product-delete'
 
         ];
 
      
 
         foreach ($permissions as $permission) {
 
              Permission::create(['name' => $permission]);
 
         }
    }
}
