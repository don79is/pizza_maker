<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPmUsersResourcesConnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pm_users_resources_conn', function(Blueprint $table)
		{
			$table->foreign('resource_id', 'fk_pm_users_resources_conn_pm_resources1')->references('id')->on('pm_resources')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_pm_users_resources_conn_users1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pm_users_resources_conn', function(Blueprint $table)
		{
			$table->dropForeign('fk_pm_users_resources_conn_pm_resources1');
			$table->dropForeign('fk_pm_users_resources_conn_users1');
		});
	}

}
