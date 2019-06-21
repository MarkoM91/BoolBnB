<?php

use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Message::class, 20)->make()->each(function($message) {
          $user = App\User::inRandomOrder()->first();
          $message->user()->associate($user);
          $message->save();
        });
    }
}
