<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('name','admin')->first();
        $user = Role::where('name','user')->first();
        factory('App\Models\Admin')->create([
            'email' => 'ibanya@126.com',
            'name' => '晚黎',
            'password' => bcrypt('123456')
            ])->each(function ($u) use ($admin){
                $u->assignRole($admin);
            });

        factory('App\Models\Admin',3)->create([
        	'password' => bcrypt('123456')
        	])->each(function ($u) use ($user){
                $u->assignRole($user);
            });
    }
}
