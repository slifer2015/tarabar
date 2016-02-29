<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('company',100);
            $table->string('email',70);
            $table->string('phone',20);
            $table->string('fax',20);
            $table->text('description');
            $table->boolean('is_client');
            $table->string('hear_about');
            $table->string('respond',20);
            $table->string('services');
            $table->string('ip',20);
            $table->string('country',60);
            $table->string('city',60);
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
        Schema::drop('orders');
    }
}
