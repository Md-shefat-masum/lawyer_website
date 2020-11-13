<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',100)->nullable();
            $table->string('middle_name',100)->nullable();
            $table->string('last_name',100)->nullable();

            $table->string('spouse_first_name',100)->nullable();
            $table->string('spouse_middle_name',100)->nullable();
            $table->string('spouse_last_name',100)->nullable();

            $table->string('gender',100)->nullable();
            $table->string('date_of_birth',100)->nullable();
            $table->string('marital_status',100)->nullable();
            $table->string('number_of_children',100)->nullable();

            $table->string('email',100)->nullable();
            $table->string('phone',100)->nullable();
            $table->string('citizenship',100)->nullable();
            $table->text('residential_address')->nullable();
            $table->text('legal_status')->nullable();

            $table->text('cirtificate')->nullable();
            $table->text('experience')->nullable();

            $table->string('website',100)->nullable();
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
        Schema::dropIfExists('contact_us');
    }
}
