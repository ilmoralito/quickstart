<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Store;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $this->command->info('Seeding starts.');

        $this->command->info('Removing data');
        DB::table('users')->delete();
        DB::table('stores')->delete();

        $this->command->info('Creating user');
        $user = User::create([
            'name' => env('DEFAULT_USER_NAME'),
            'email' => env('DEFAULT_USER_EMAIL'),
            'password' => bcrypt(env('DEFAULT_USER_PASSWORD'))
        ]);

        $this->command->info('Creating stores test data');
        $store1 = Store::create([
            'amount' => 500,
            'company' => 'Company1',
            'customer' => 'Customer1',
            'payment_method' => 'cash',
            'date_of_purchase' => Carbon::now()
        ]);

        $store2 = Store::create([
            'amount' => 500,
            'company' => 'Company1',
            'customer' => 'Customer2',
            'payment_method' => 'cash',
            'date_of_purchase' => Carbon::now()
        ]);

        $store3 = Store::create([
            'amount' => 300,
            'company' => 'Company2',
            'customer' => 'Customer1',
            'payment_method' => 'cash',
            'date_of_purchase' => Carbon::now()
        ]);

        $store4 = Store::create([
            'amount' => 100,
            'company' => 'Company1',
            'customer' => 'Customer1',
            'payment_method' => 'credit',
            'date_of_purchase' => Carbon::now()
        ]);

        $store5 = Store::create([
            'amount' => 50,
            'company' => 'Company1',
            'customer' => 'Customer1',
            'payment_method' => 'cash',
            'date_of_purchase' => Carbon::now()
        ]);

        $this->command->info('Seeding ended with no problems');
    }
}
