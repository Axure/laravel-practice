<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
//use Database\Seeds\UserTableSeeder;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		 $this->call('UserTableSeeder');
	}

}

use App\User;

class UserTableSeeder extends Seeder {

    public function run() {

        if (!Schema::hasTable('users')) {
            Schema::create('users', function($table)
            {
                $table->increments('id');
                $table->string('name', 128);
                $table->string('email');
                $table->string('password', 60);
                $table->timestamps();
            });
        }



        DB::table('users')->delete();

        User::create([
            'name' => 'fff',
            'email' => 'foo@bar.com',
            'password' => 'fsdfdsf',
            'type' => 'admin'
        ]);

        User::create([
            'name' => 'gggfff',
            'email' => 'fdfdsaaa@bar.com',
            'password' => 'fsdfdsf',
            'type' => 'user'
        ]);

        User::create([
            'name' => 'fff23',
            'email' => 'fodddddo@bar.com',
            'password' => 'fsdfdsf',
            'type' => 'guest'
        ]);
    }
}