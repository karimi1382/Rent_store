<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('project_id')->constrained()->cascadeOnDelete();
            $table->foreignId('packege_id')->constrained()->cascadeOnDelete();
            $table->foreignId('fild_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('color_1');
            $table->string('color_2');
            $table->string('color_3');
            $table->string('url')->nullable();
            $table->boolean('admin')->default('0');
            $table->boolean('takephoto')->default('0');
            $table->string('Logo')->nullable();
            $table->string('status')->default('در انتظار بررسی');
            $table->string('End_time')->nullable();





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
        Schema::dropIfExists('orders');
    }
};
