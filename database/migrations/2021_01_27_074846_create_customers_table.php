<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->integer('orderNumber')->nullable(false);
            $table->string('product')->nullable(false);
            $table->string('firstname')->nullable(false);
            $table->string('lastname')->nullable(false);
            $table->string('email')->nullable(false);
            $table->string('shippinginformation')->nullable(false);
            $table->string('finalVaccinationDate')->nullable(false);
            $table->string('vaccine')->nullable(false);
            $table->string('password')->nullable(false);
            $table->string('image')->nullable(false);
            $table->bigInteger('lotno')->nullable(false);
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
        Schema::dropIfExists('customers');
    }
}
