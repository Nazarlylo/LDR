<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrencyCurrencyTranslationsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('currency_translations', function(Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('id');
			$table->string('name');
            $table->integer('currency_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['currency_id', 'locale']);
            $table->foreign('currency_id')->references('id')->on('currency__currencies')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('currency_translations');
	}
}
