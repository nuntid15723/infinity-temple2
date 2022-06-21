<?php

namespace Database\Seeders;

use App\Models\User as ModelsUser;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class User extends Seeder
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
                'name'  =>  'admin',
                'lastName' => 'admin',
                'email' =>  'admin@admin.com',
                'numberPhone'=>'0123456789',
                'password'=>Hash::make('123456'),
                'created_at'    =>  Carbon::now(),
                'updated_at'    =>  Carbon::now()
            ]
        ];
        foreach ($users as $users) {
            ModelsUser::create($users);
        }
        // $this->call(FishsTableSeeder::class);
    }
}
