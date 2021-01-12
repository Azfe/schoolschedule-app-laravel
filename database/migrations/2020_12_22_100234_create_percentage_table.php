<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePercentageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('percentage', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_course')->constrained();
            $table->foreignId('id_class')->constrained();
            $table->float('continuous_assessment')->nullable();//2 números y 1 decimal
            $table->float('exams',2,1)->nullable();//2 números y 1 decimal
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('percentage');
        Schema::enableForeignKeyConstraints();
    }
}

