<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->decimal('price', 8, 2);
            $table->decimal('discount_price', 8, 2);
            $table->string('image_url',255)->nullable();
            $table->text('description_1')->nullable();
            $table->text('description_2')->nullable();
            $table->text('description_3')->nullable();
            $table->string('cpu',255)->nullable();
            $table->string('ram',255)->nullable();
            $table->string('hard_drive',255)->nullable();
            $table->string('graphics_card',255)->nullable();
            $table->string('screen',255)->nullable();
            $table->string('keyboard',255)->nullable();
            $table->string('lan',255)->nullable();
            $table->string('webcam',255)->nullable();
            $table->string('pin',255)->nullable();
            $table->string('color',255)->nullable();
            $table->string('weight',40)->nullable();
            $table->string('communication_port',525)->nullable();
            $table->bigInteger('product_category_id')->unsigned();
            $table->foreign('product_category_id')->references('id')->on('product_category');
            $table->bigInteger('brands_id')->unsigned();
            $table->foreign('brands_id')->references('id')->on('brands');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
