<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('course_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('user_account_id')->nullable();
            $table->string('available_on_course_page')->default('no');
            $table->string('type')->default('free'); //free, discount
            $table->bigInteger('price');
            $table->string('status')->default('on'); //on, off
            $table->dateTime('deadline'); //default infinite
            $table->float('countdown_timer', 3, 2)->nullable(); //hour
            $table->integer('total_available');
            $table->integer('total_remaining')->nullable();
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
        Schema::dropIfExists('coupons');
    }
}
