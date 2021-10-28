<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'=>'administrator',
            'email'=>'admin@admin.admin',
            'password'=>Hash::make('admin1234'),
        ]);
        $user->roles()->attach([Role::IS_ADMIN,Role::IS_USER]);
        $user->save();
    }
}
