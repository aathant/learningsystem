<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('phone');
            $table->text('avatar')->default('storage/default/mentor.jpg');
            $table->unsignedBigInteger('degree_id');
            $table->unsignedBigInteger('course_id');   
            $table->text('address');
            $table->text('portfolio');
            $table->timestamps();
            
            // $table->foreign('user_id')
            //       ->references('id')->on('users')
            //       ->onDelete('cascade');

            // $table->foreign('degree_id')
            //       ->references('id')->on('degrees')
            //       ->onDelete('cascade');

            // $table->foreign('course_id')
            //       ->references('id')->on('courses')
            //       ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mentors');
    }
}
