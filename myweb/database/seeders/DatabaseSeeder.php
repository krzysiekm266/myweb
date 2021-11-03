<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Role::create(['name'=>'admin'])->save();
        Role::create(['name'=>'user'])->save();

        $user = User::create([
            'name'=>'administrator',
            'email'=>'admin@admin.admin',
            'password'=>Hash::make('admin1234'),
        ]);
        $user->roles()->attach([Role::IS_ADMIN,Role::IS_USER]);
        $user->save();

        $project = Project::create([
            'name'=>'test project title',
            'description'=>'to jest opis projektu testowago',
            'link'=>'#',
            'user_id'=>1,



        ])->save();


    }
}
