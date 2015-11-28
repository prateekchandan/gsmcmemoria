<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Db extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->string('id')->primary();
			$table->string('amount');
			$table->string('name');
			$table->string('mobile');
			$table->string('email');
			$table->string('landline');
			$table->string('r_address');
			$table->string('r_state');
			$table->string('r_country');
			$table->string('r_zip');
			$table->string('h_address');
			$table->string('h_state');
			$table->string('h_country');
			$table->string('h_zip');
			$table->string('ug_college');
			$table->string('ug_year');
			$table->string('pg_college');
			$table->string('pg_year');
			$table->string('pg_dept');
			$table->string('spouse_coming');
			$table->string('spouse_alumni');
			$table->string('spouse_name');
			$table->string('spouse_h_address');
			$table->string('spouse_h_state');
			$table->string('spouse_h_country');
			$table->string('spouse_h_zip');
			$table->string('spouse_ug_college');
			$table->string('spouse_ug_year');
			$table->string('spouse_pg_college');
			$table->string('spouse_pg_year');
			$table->string('spouse_pg_dept');
			$table->string('donation');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
