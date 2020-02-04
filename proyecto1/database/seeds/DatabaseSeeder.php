<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run() {
        self::seedUsers();
        $this->command->info('Tabla usuarios inicializada con datos!');
    }
}
