<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 10; $i++) {
            DB::table('contacts')->insert([
                'name' => str_random(10),
                'phone' => rand(1000000000,9999999999),
                'email' => str_random(10).'@host.com',
            ]);
        }
        $this->command->info('Done');
    }
}
