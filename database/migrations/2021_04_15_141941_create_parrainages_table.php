<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParrainagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parrainages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_user_parrain');
            $table->unsignedBigInteger('id_user_filleul');
            $table->timestamps();
            
            $table->foreign('id_user_parrain')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('id_user_filleul')
               ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parrainages');
    }
}
