<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('_id');
            $table->string('book_category_id')->index();
            $table->string('name');
            $table->string('slug');
            $table->string('shop_description');
            $table->json('shop_images');
            $table->string('shop_cover_image');
            $table->string('title');
            $table->string('shop_category_id');
            $table->string('shop_item_id');
            $table->integer('shop_stock_quantity');
            $table->bigInteger('shop_price');
            $table->bigInteger('shop_price_before_discount');
            $table->string('shop_discount');
            $table->dateTime('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->boolean("delete_flag")->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
