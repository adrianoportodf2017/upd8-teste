<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Cliente;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'nome' => 'João Silva',
            'cpf' => '1235543534',
            'data_nascimento' => '1990-01-01',
            'endereco' => 'Rua da Ponte',
            'estado' => 'SP',
            'cidade' => 'São Paulo',
            'sexo' => 'M',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('clientes')->insert([
            'nome' => 'Adriano Alves',
            'cpf' => '23421235345',
            'data_nascimento' => '1990-01-01',
            'endereco' => 'Rua da Ponte',

            'estado' => 'SP',
            'cidade' => 'São Paulo',
            'sexo' => 'M',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('clientes')->insert([
            'nome' => 'Maria Jose',
            'cpf' => '12341566435',
            'data_nascimento' => '1990-01-01',
            'endereco' => 'Rua da Ponte',
            'estado' => 'SP',
            'cidade' => 'São Paulo',
            'sexo' => 'F',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('clientes')->insert([
            'nome' => 'Eduardo Costa',
            'cpf' => '23434561313',
            'data_nascimento' => '1990-01-01',
            'endereco' => 'Rua da Ponte',
            'estado' => 'SP',
            'cidade' => 'São Paulo',
            'sexo' => 'M',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
