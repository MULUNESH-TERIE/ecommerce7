<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        chema::create('colleges', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('unit')->nullable();
            $table->string('price',8,2)->nullable();
            $table->integer('quantity');
            $table->timestamp();
            });
             //
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
};
