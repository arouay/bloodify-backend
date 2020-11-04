<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeekerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seeker', function (Blueprint $table) {
            $table->id();
            $table->string('cin');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('bloodgroup');
            $table->date('birthdate');
            $table->string('address');
            $table->string('phoneNo');
            $table->string('gender');
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
        Schema::dropIfExists('seeker');
    }
}
