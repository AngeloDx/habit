<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::truncate();
      DB::table('role_user')->truncate();
      $adminRole = Role ::where('nome', 'admin')->first();
      $proprietarioRole =Role ::where('nome', 'proprietario')->first();
      $userRole = Role ::where('nome', 'user ')->first();
      $admin = User::create([
            'name'=>' admin user',
            'email'=> 'admin@admin.com',
            'password'=> Hash::make('password')
    ]);
    $proprietario = User::create([
          'name'=>' proprietario proprietario',
          'email'=> 'proprietario@proprietario.com',
          'password'=> Hash::make('password')
  ]);
  $user = User::create([
        'name'=>' user user',
        'email'=> 'user@user.com',
        'password'=> Hash::make('password')
]);
$admin->roles()->attach($adminRole);
$proprietario->roles()->attach($proprietarioRole);
$user->roles()->attach($userRole);
    }
}
