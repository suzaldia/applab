<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('samples', function (Blueprint $table) {
            $table->id();
            $table->string('tag', 45);
            $table->string('description', 500);
            $table->date('collected_at');
            $table->enum('status', ['in progress', 'completed'])->default('in progress');
            $table->bigInteger('type_id')->unsigned()->nullable();
            $table->bigInteger('parametre_id')->unsigned()->nullable();
            $table->timestamps();

            //FOREIGN KEY CONSTRAINTS
            $table->foreign('type_id')->references('id')->on('types');
            $table->foreign('parametre_id')->references('id')->on('parametres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('samples');
    }
}
