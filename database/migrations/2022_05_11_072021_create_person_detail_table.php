<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_detail', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->string('delivery_monk_id')->nullable();
            $table->string('language')->nullable();
            $table->string('vehicle')->nullable();
            $table->text('interest')->nullable();
            $table->string('city')->nullable();
            $table->text('address')->nullable();
            $table->string('zip')->nullable();
            $table->string('name')->nullable();
            $table->string('gender')->nullable();
            $table->date('age')->nullable();
            $table->string('otp',255)->nullable();
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
        Schema::dropIfExists('person_detail');
    }
}
