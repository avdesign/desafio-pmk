<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationDonorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation_donor', function (Blueprint $table) {
            $table->unsignedBigInteger('donation_id');
            $table->unsignedBigInteger('donor_id');

            $table->foreign('donation_id')
                ->references('id')
                ->on('donations');

            $table->foreign('donor_id')
                ->references('id')
                ->on('donors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donor_form_payment');
    }
}
