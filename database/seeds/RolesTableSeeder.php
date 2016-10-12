<?php
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::create([
            'name' => 'admin',
            'description' => '超级管理员',
        ]);

        $userRole = Role::create([
            'name' => 'user',
            'description' => '普通用户',
        ]);

        /*管理员初始化所有权限*/
        $all_permissions = Permission::all();
        $adminRole->givePermissionTo($all_permissions);

        /**
         * 普通用户赋予一般权限
         */
        $loginBackendPer = Permission::where('name', 'admin.systems.login')->first();
        $userRole->givePermissionTo($loginBackendPer);
    }
}
