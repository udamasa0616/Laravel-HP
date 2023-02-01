<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->bigInteger('company_id');
			$table->string('product_name', 250);
			$table->integer('price');
			$table->integer('stock');
			$table->text('comment');
			$table->text('img_path')->nullable();
			$table->dateTime('crested_at')->nullable();
			$table->dateTime('updated_at')->nullable();
			$table->primary(['company_id','price']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
