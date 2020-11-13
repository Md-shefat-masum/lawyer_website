<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreeConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('free_consultations', function (Blueprint $table) {
            $table->id();
            $table->string('name',100)->nullable();
            $table->string('email',100)->nullable();
            $table->string('subject',100)->nullable();
            $table->string('phone',100)->nullable();
            $table->string('law_name',100)->nullable();
            $table->text('message')->nullable();
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
        Schema::dropIfExists('free_consultations');
    }
}
