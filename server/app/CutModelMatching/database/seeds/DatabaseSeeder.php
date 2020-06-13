<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTypesTableSeeder::class);
        $this->call(ModelsTableSeeder::class);
        $this->call(SalonsTableSeeder::class);
        $this->call(HairdressersTableSeeder::class);
        $this->call(AccessTokensTableSeeder::class);
        $this->call(ChatRoomsTableSeeder::class);
        $this->call(ChatMessagesTableSeeder::class);
    }
}
