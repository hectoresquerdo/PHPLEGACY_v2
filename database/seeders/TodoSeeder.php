<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useradmin=User::create([
            'name'=> 'admin',
            'email'=> 'admin@admin.com',
            'password'=>Hash::make('1234'),
            'fullacces'=>'yes',

        ]);
        $teacherDAM=User::create([
            'name'=> 'teacherDAM',
            'email'=> 'teacherDAM@gmail.com',
            'password'=>Hash::make('1234'),
            'fullacces'=>'medium',

        ]);
        $teacherDAW=User::create([
            'name'=> 'teacherDAW',
            'email'=> 'teacherDAW@gmail.com',
            'password'=>Hash::make('1234'),
            'fullacces'=>'medium',

        ]);
        $userDAW=User::create([
            'name'=> 'userDAW',
            'email'=> 'userDAW@gmail.com',
            'password'=>Hash::make('1234'),
            'fullacces'=>'no',

        ]);
        $userDAM=User::create([
            'name'=> 'userDAM',
            'email'=> 'userDAM@gmail.com',
            'password'=>Hash::make('1234'),
            'fullacces'=>'no',

        ]);
    }
}
