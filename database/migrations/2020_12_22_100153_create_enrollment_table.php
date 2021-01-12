<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('enrollment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_users')->constrained();//FK
            $table->foreignId('id_course')->constrained();//FK
            $table->integer('sataus')->length(11);
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
        Schema::dropIfExists('enrollment');
        Schema::enableForeignKeyConstraints();
    }
}

