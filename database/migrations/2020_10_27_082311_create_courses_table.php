<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');

            //create course
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('instructor_id');
            $table->string('title');
            $table->string('sub_title')->nullable();
            $table->string('slug');
            $table->longText('description');
            $table->string('playlist_url');
            $table->string('tags')->nullable();
            $table->string('photo')->nullable();
            $table->string('promo_video_url')->nullable();
            $table->tinyInteger('status')->default(0);
            //target your student
            $table->longText('what_will_learn')->nullable();
            $table->longText('target')->nullable();
            $table->longText('requirements')->nullable();

            //price dan coupon
            $table->bigInteger('discount_price');
            $table->bigInteger('actual_price');

            //
            $table->integer('view_count')->default(0);
            $table->integer('subscriber_count')->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
