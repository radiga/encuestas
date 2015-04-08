<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsSuperuserToUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_users', function(Blueprint $table)
		{
            $table->boolean('is_superuser')->default(false)->after('remember_token');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_users', function(Blueprint $table)
		{
            $table->dropColumn('is_superuser');
		});
	}

}
