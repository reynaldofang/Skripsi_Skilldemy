<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_classes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('instructor_id')->index();
            $table->unsignedBigInteger('category_id')->index();
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->string('name');
            $table->date('date');
            $table->longText('about');
            $table->string('location');
            $table->integer('price');
            $table->integer('qty');
            $table->boolean('active')->default(0);
            $table->enum('status', ['pending', 'accepted', 'decline', 'canceled'])->default('pending');
            $table->string('slug');
            $table->string('fileimage')->nullable();
            $table->foreign('instructor_id')->references('id')->on('instructors')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('employee_id')->references('id')->on('admins');
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
        Schema::dropIfExists('list_classes');
    }
}
