<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Client::factory(30)->create();

        $client = [
            [
                'last_name' => 'Lenteria',
                'first_name' => 'Benjie',
                'middle_name' => 'Basio',
                'address' => 'Pob. Centro, Clarin, Bohol',
                'birth_date' => '1979-10-02',
                'phone_number' => '09090892350',
                'email' => 'benjielenteria@yahoo.com',
                'initial_deposit' => 1000,
            ],
            [
                'last_name' => 'Lentrix',
                'first_name' => 'Hawkman',
                'middle_name' => 'Machiacode',
                'address' => 'Pob. Centro, Clarin, Bohol',
                'birth_date' => '1979-10-02',
                'phone_number' => '09090892350',
                'email' => 'hawkmanlentrix@gmail.com',
                'initial_deposit' => 1000,
            ],
    
            [
                'last_name' => 'Gudia',
                'first_name' => 'Virnie',
                'middle_name' => 'Aparre',
                'address' => 'Luyo Inabanga Bohol',
                'birth_date' => '1999-05-09',
                'phone_number' => '09567330139',
                'email' => 'gvirnie@gmail.com',
                'initial_deposit' => 50000
            ],

            [
                'last_name' => 'Gonzaga',
                'first_name' => 'Celedonio',
                'middle_name' => 'Buaya',
                'phone_number' => '0937562823',
                'address' => 'Salvador, Cortes, Bohol.',
                'birth_date' => '1991-05-11',
                'email' => 'celedoniogonzaga@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Patak',
                'first_name' => 'Liza',
                'middle_name' => 'Baknaom',
                'phone_number' => '0987562828',
                'address' => 'Nabuad, Inabangga, Bohol.',
                'birth_date' => '1990-12-16',
                'email' => 'patak123@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Gudia',
                'first_name' => 'Arlyn',
                'middle_name' => 'Ehoo',
                'phone_number' => '0987562828',
                'address' => 'Salvador, Cortes, Bohol.',
                'birth_date' => '1997-11-10',
                'email' => 'arlyngudia@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Cabahug',
                'first_name' => 'Riza',
                'middle_name' => 'Bahoon',
                'phone_number' => '0947762828',
                'address' => 'Balilihan, Bohol.',
                'birth_date' => '1995-11-23',
                'email' => 'cabahug123.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Paknaon',
                'first_name' => 'Jonatahn',
                'middle_name' => 'Paku',
                'phone_number' => '0966562828',
                'address' => 'Taloto, Tagbilaran, Bohol.',
                'birth_date' => '2000-05-11',
                'email' => 'jonathan@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Natahub',
                'first_name' => 'Lira',
                'middle_name' => 'Tahop',
                'phone_number' => '0967562828',
                'address' => 'Sagbayan, Catigbian, Bohol.',
                'birth_date' => '2003-10-23',
                'email' => 'natahuplira@gmail.com',
                'initial_deposit' => 20000,
            ],
        ];

        foreach ($client as $c) {
            Client::create($c);
        }
    }
}
