<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('foods')->insert([
            ['name' => 'Jablko', 'histamine_level' => 1, 'category' => 'Ovoce', 'user_id' => null],
            ['name' => 'Banán', 'histamine_level' => 1, 'category' => 'Ovoce', 'user_id' => null],
            ['name' => 'Jahody', 'histamine_level' => 2, 'category' => 'Ovoce', 'user_id' => null],
            ['name' => 'Ananas', 'histamine_level' => 3, 'category' => 'Ovoce', 'user_id' => null],
            ['name' => 'Hrozny', 'histamine_level' => 2, 'category' => 'Ovoce', 'user_id' => null],
            ['name' => 'Okurka', 'histamine_level' => 1, 'category' => 'Zelenina', 'user_id' => null],
            ['name' => 'Rajče', 'histamine_level' => 3, 'category' => 'Zelenina', 'user_id' => null],
            ['name' => 'Mrkev', 'histamine_level' => 1, 'category' => 'Zelenina', 'user_id' => null],
            ['name' => 'Špenát', 'histamine_level' => 2, 'category' => 'Zelenina', 'user_id' => null],
            ['name' => 'Paprika', 'histamine_level' => 2, 'category' => 'Zelenina', 'user_id' => null],
            ['name' => 'Kuřecí maso', 'histamine_level' => 2, 'category' => 'Maso', 'user_id' => null],
            ['name' => 'Hovězí maso', 'histamine_level' => 3, 'category' => 'Maso', 'user_id' => null],
            ['name' => 'Vepřové maso', 'histamine_level' => 2, 'category' => 'Maso', 'user_id' => null],
            ['name' => 'Losos', 'histamine_level' => 3, 'category' => 'Ryby', 'user_id' => null],
            ['name' => 'Tuňák', 'histamine_level' => 3, 'category' => 'Ryby', 'user_id' => null],
            ['name' => 'Sýr (čedar)', 'histamine_level' => 3, 'category' => 'Mléčné výrobky', 'user_id' => null],
            ['name' => 'Mléko', 'histamine_level' => 1, 'category' => 'Mléčné výrobky', 'user_id' => null],
            ['name' => 'Jogurt', 'histamine_level' => 2, 'category' => 'Mléčné výrobky', 'user_id' => null],
            ['name' => 'Tvaroh', 'histamine_level' => 1, 'category' => 'Mléčné výrobky', 'user_id' => null],
            ['name' => 'Vejce', 'histamine_level' => 2, 'category' => 'Ostatní', 'user_id' => null],
            ['name' => 'Chleba', 'histamine_level' => 1, 'category' => 'Pečivo', 'user_id' => null],
            ['name' => 'Rýže', 'histamine_level' => 1, 'category' => 'Přílohy', 'user_id' => null],
            ['name' => 'Těstoviny', 'histamine_level' => 1, 'category' => 'Přílohy', 'user_id' => null],
            ['name' => 'Čokoláda', 'histamine_level' => 3, 'category' => 'Sladkosti', 'user_id' => null],
        ]);
    }
}