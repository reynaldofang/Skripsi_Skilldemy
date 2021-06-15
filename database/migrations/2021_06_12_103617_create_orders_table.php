<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('order_number')->unique();
            $table->unsignedBigInteger('peserta_id');
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->enum('status', ['pending', 'awaiting payment', 'processing payment', 'completed', 'decline'])->default('pending');
            $table->integer('grand_total');
            $table->unsignedInteger('class_count');
            $table->boolean('payment_status')->default(1);
            $table->string('payment_method')->nullable();
            $table->string('name');
            $table->string('phone_number');
            $table->string('fileimage');
            $table->timestamps();
            $table->foreign('employee_id')->references('id')->on('admins');
            $table->foreign('peserta_id')->references('id')->on('pesertas')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
