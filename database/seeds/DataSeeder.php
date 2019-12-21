<?php

use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //dummy 1
        DB::table('data')->insert([
            'nama' => 'Abimanyu',
            'username' => 'abi786',
            'password' => '@aaaaa123',
            'tanggal_lahir' => '2000-4-19',
            'alamat' => 'Pendongkelan',
            'kecamatan'=>'Cengkareng',
            'telephone'=>'028419571',
            'email'=>'abi786@gmail.com',
            'usia'=>'17'
        ]);

        //dummy 2
        DB::table('data')->insert([
            'nama' => 'Putri Tanjung',
            'username' => 'putri23',
            'password' => 'putri@23',
            'tanggal_lahir' => '22-09-1996',
            'alamat' => 'Jakarta',
            'kecamatan'=>'jakarta',
            'telephone'=>'0853697458',
            'email'=>'putri23@gmail.com',
            'usia'=>'23'
        ]);

        //dummy 3
        DB::table('data')->insert([
            'nama' => 'Adamas Belva Syah Devara',
            'username' => 'adamas90',
            'password' => 'Adamas@90',
            'tanggal_lahir' => '30-05-1990',
            'alamat' => 'Jakarta',
            'kecamatan'=>'jakarta',
            'telephone'=>'0853697458',
            'email'=>'adamas90@gmail.com',
            'usia'=>'29'
        ]);

         //dummy 4
         DB::table('data')->insert([
            'nama' => 'Angkie Yudistia',
            'username' => 'ayudistia87',
            'password' => 'ayudistia@87',
            'tanggal_lahir' => '05-05-1987',
            'alamat' => 'Jakarta',
            'kecamatan'=>'jakarta',
            'telephone'=>'0853697458',
            'email'=>'ayudistia87@gmail.com',
            'usia'=>'32'
        ]);

        //dummy 5
        DB::table('data')->insert([
            'nama' => 'abdi ',
            'username' => 'abdi23',
            'password' => 'abdi@23',
            'tanggal_lahir' => '22-09-1996',
            'alamat' => 'Jakarta',
            'kecamatan'=>'jakarta',
            'telephone'=>'0853697458',
            'email'=>'abdi23@gmail.com',
            'usia'=>'23'
        ]);

        //dummy 6
        DB::table('data')->insert([
            'nama' => 'Belva Syah Devara',
            'username' => 'Belva90',
            'password' => 'Belva@90',
            'tanggal_lahir' => '30-05-1990',
            'alamat' => 'Jakarta',
            'kecamatan'=>'jakarta',
            'telephone'=>'0853697458',
            'email'=>'belva90@gmail.com',
            'usia'=>'29'
        ]);

         //dummy 7
         DB::table('data')->insert([
            'nama' => 'Angkie',
            'username' => 'angkie87',
            'password' => 'angkie@87',
            'tanggal_lahir' => '05-05-1987',
            'alamat' => 'Jakarta',
            'kecamatan'=>'jakarta',
            'telephone'=>'0853697458',
            'email'=>'angkie87@gmail.com',
            'usia'=>'32'
        ]);

        //dummy 8
        DB::table('data')->insert([
            'nama' => 'febi',
            'username' => 'febi786',
            'password' => '@febi123',
            'tanggal_lahir' => '2000-4-19',
            'alamat' => 'Pendongkelan',
            'kecamatan'=>'Cengkareng',
            'telephone'=>'08218419571',
            'email'=>'febi@gmail.com',
            'usia'=>'19'
        ]);

        //dummy 9
        DB::table('data')->insert([
            'nama' => 'agnes',
            'username' => 'agnes12',
            'password' => 'agnes@123',
            'tanggal_lahir' => '22-09-1988',
            'alamat' => 'Jakarta',
            'kecamatan'=>'jakarta',
            'telephone'=>'0852363974',
            'email'=>'agnes123@gmail.com',
            'usia'=>'31'
        ]);

        //dummy 10
        DB::table('data')->insert([
            'nama' => 'tere',
            'username' => 'tere54',
            'password' => 'tere@54',
            'tanggal_lahir' => '02-09-1992',
            'alamat' => 'Jakarta',
            'kecamatan'=>'jakarta',
            'telephone'=>'0852363974',
            'email'=>'tere54@gmail.com',
            'usia'=>'27'
        ]);
    }
}
