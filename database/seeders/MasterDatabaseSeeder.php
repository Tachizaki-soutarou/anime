<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Carbon\Carbon;

class MasterDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $president = User::create([
            'last_name' => '立崎',
            'first_name' => '壮太郎',
            'nick_name' => 'S太',
            'birth_date' => Carbon::create('2000', '11', '17'), // YYYY, MM, DD
            'sex' => 1,
            'email' => 'php.portfolio1117@gmail.com',
            'password' => bcrypt('soutarou1117')
        ]);
        
        //  ロール作成
        $adminRole = Role::create(['name' => 'admin']);
        // 権限作成
        $registerPermission = Permission::create(['name' => 'register']);
        // admin役割にregister権限を付与
        $adminRole->givePermissionTo($registerPermission);
        // 社長にadminを割り当て
        $president->assignRole($adminRole);
    }
}
