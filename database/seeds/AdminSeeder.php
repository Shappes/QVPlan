<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
		$statuses = [['name' => 'approved'], ['name' => 'declined'], ['name' => 'pending']];
		foreach($statuses as $status)
		{
			$status['created_at'] = \Carbon\Carbon::now()->toDateTimeString();
			$status['updated_at'] = \Carbon\Carbon::now()->toDateTimeString();
			$db = DB::table('statuses')->insert($status);
		}
    }
}
