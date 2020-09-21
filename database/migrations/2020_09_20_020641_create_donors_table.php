<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->unsignedBigInteger('donation_interval_id');
            $table->tinyInteger('payment_day');
            $table->string('name');
            $table->string('email');
            $table->string('document');
            $table->string('address');
            $table->string('number', 30);
            $table->string('complement', 50)->nullable;
            $table->string('district');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('postcode');
            $table->date('birth_date');
            $table->timestamps();

            $table->foreign('donation_interval_id')
                ->references('id')
                ->on('donation_intervals');                                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donors');
    }
}
