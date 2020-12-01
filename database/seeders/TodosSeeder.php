<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useradmin=User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'tipo'=> '1',
            //'codigo' => 'adm1',
        ]);
        $teacher=User::create([
            'name' => 'teacher',
            'email' => 'teacher@gmail.com',
            'password' => Hash::make('teacher'),
            'tipo'=> '1',
            //'codigo' => 'teacher1',
        ]);
        $userDAM=User::create([
            'name' => 'usuarioDAM',
            'email' => 'usuarioDAM@gmail.com',
            'password' => Hash::make('1234'),
            'tipo'=> '3',
            // 'codigo' => 'dam1',
        ]);
        $userDAW=User::create([
            'name' => 'usuarioDAW',
            'email' => 'usuarioDAW@gmail.com',
            'password' => Hash::make('1234'),
            'tipo'=> '4',
            // 'codigo' => 'daw1',
        ]);

    }
}
