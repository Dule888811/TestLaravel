<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('phone')->unique();
            $table->string('location');
            $table->boolean('is_admin')->default(0);
            $table->timestamps();
            $table->unsignedBigInteger('product_id');
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

        });
      /*  Schema::table('users', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();
            $table->unsignedInteger('product_id');

            $table->foreign('product_id')->references('id')->on('products');
        }); */

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
