<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'asd',
                'email' => 'asd@asd.asd',
                'password' => Hash::make('asd')
            ],
            [
                'name' => 'asde',
                'email' => 'asde@asde.asde',
                'password' => Hash::make('asde')
            ],
            [
                'name' => 'asdef',
                'email' => 'asdef@asdef.asdef',
                'password' => Hash::make('asdef')
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
