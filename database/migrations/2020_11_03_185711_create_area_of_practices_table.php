<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaOfPracticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_of_practices', function (Blueprint $table) {
            $table->id();
            $table->string('icon',100)->nullable();
            $table->string('title',100)->nullable();
            $table->text('description')->nullable();
            $table->integer('creator')->nullable();
            $table->string('slug',35)->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('area_of_practices');
    }
}
