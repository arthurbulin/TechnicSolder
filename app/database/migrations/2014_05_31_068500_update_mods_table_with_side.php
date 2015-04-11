<?php

class UpdateModsTableWithSide {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mods', function($table) {
			$table->integer('side')->default(0);
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mods', function($table) {
			$table->drop_column('side');
		});
	}

}
