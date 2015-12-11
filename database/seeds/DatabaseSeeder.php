<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Photos;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
		 $this->call('PostSeeder');
	}

}

class PostSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Photos::create([
              'text'=>'test1',
        ]);
        Photos::create([
            'text'=>'test2',
        ]);
        Photos::create([
            'text'=>'test3s',
        ]);
    }

}
