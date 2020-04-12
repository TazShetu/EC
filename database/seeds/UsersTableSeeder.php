<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        $users = [
            0 => ['Dummy', 'd@g.com', '123456'],
            1 => ['S', 's@gmail.com', '123456'],
            2 => ['xxx', 'a1@g.com', '123456'],
            3 => ['xxx', 'a2@g.com', '123456'],
            4 => ['xxx', 'a3@g.com', '123456'],
            5 => ['xxx', 'a4@g.com', '123456'],
            6 => ['John Doe', 'john@gmail.com', '123456'],
        ];
        foreach ($users as $u){
            $a = new User;
            $a->name = $u[0];
            $a->email = $u[1];
            $a->password = bcrypt($u[2]);
            $a->save();
        }

        $roles = ['super-admin', 'admin'];
        foreach ($roles as $r){
            $role = Role::create(['name' => $r, 'display_name' => $r]);
        }

        $ps = ['p1', 'p2'];
        foreach ($ps as $p){
            $permission = Permission::create(['name' => $p, 'display_name' => $p]);
            $r = Role::find(1);
            $permission->assignRole($r);
        }

        $user = User::find(2);
        $user->assignRole('super-admin');

    }
}
