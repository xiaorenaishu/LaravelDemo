<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = \App\User::all();
        foreach ($users as $user){
            $user->profile()->firstOrCreate(['user_id' => $user->id], [
                'profile' => 'fdasfaa'
            ]);
        }
    }
}
