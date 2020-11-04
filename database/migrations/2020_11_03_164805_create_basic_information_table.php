<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic_information', function (Blueprint $table) {
            $table->id();
            $table->string('full_name',150)->nullable();
            $table->string('logo',100)->nullable();
            $table->string('profile_pic',100)->nullable();
            $table->string('email_1',100)->nullable();
            $table->string('email_2',100)->nullable();
            $table->string('mobile_no_1',100)->nullable();
            $table->string('mobile_no_2',100)->nullable();
            $table->string('facebook',100)->nullable();
            $table->string('twitter',100)->nullable();
            $table->string('linkedin',100)->nullable();
            $table->string('youtube',100)->nullable();
            $table->string('pinterest',100)->nullable();
            $table->string('skype',100)->nullable();
            $table->text('footer_short_about')->nullable();
            $table->text('address')->nullable();
            $table->text('work_time')->nullable();
            $table->text('map')->nullable();
            $table->text('copy_right')->nullable();
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
        Schema::dropIfExists('basic_information');
    }
}
