<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescriptiveAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descriptive_abouts', function (Blueprint $table) {
            $table->id();
            $table->text('image')->nullable();
            $table->text('banner')->nullable();
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
        Schema::dropIfExists('descriptive_abouts');
    }
}
