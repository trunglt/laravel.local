<?php
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create ( 'blogs', function ($table)
		{
			$table->increments ( 'id' );
			$table->string ( 'email' )->unique ();
			$table->string ( 'name' );
			$table->timestamps ();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop ( 'blogs' );
	}
}