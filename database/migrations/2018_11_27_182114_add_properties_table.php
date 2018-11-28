<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('properties', function ($table) {
            $table->unsignedBigInteger('id', true);
            $table->unsignedBigInteger('node_id');
            $table->string('type', 128)->default("text");
            $table->string('name', 128);
            $table->text('options');
            $table->boolean('required');

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
        //
    }
}
