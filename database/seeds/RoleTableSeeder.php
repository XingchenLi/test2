<?php
 use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Role;


class RoleTableSeeder extends Seeder{
    public function run(){
        DB::table('roles')->truncate();

        Role::create([
            'id'  => 1,
            'name' => 'Root',
            'description' => 'Use this account with extreme caution, When using this account it is possible
            to cause irreversible damage to the system'
        ]);
        Role::create([
            'id'  => 2,
            'name' => 'admin',
            'description' => 'This is the admin for TouguBao system'
        ]);
        Role::create([
            'id'  => 3,
            'name' => 'Investor',
            'description' => 'Investor is the account to invest money of client'
        ]);
        Role::create([
            'id'  => 4,
            'name' => 'clinet',
            'description' => 'Client is the user of the system'
        ]);
    }
}