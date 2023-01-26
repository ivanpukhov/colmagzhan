<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('specialities', function (Blueprint $table) {
			$table->id();
			$table->text('title');
			$table->text('category1cvalifikation');
			$table->text('category1lang');
			$table->text('category1base');
			$table->text('category1srok');
			$table->text('category2cvalifikation')->nullable();
			$table->text('category2lang')->nullable();
			$table->text('category2base')->nullable();
			$table->text('category2srok')->nullable();
			$table->text('category3cvalifikation')->nullable();
			$table->text('category3lang')->nullable();
			$table->text('category3base')->nullable();
			$table->text('category3srok')->nullable();
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
		Schema::dropIfExists('specialities');
	}
};
