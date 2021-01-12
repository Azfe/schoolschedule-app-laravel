<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('class', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_users')->constrained();//FK
            $table->foreignId('id_course')->constrained();//FK
            $table->foreignId('id_schedule')->constrained();//FK
            $table->string('name');
            $table->string('color',10);
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
        Schema::dropIfExists('class');
        Schema::enableForeignKeyConstraints();
    }
}
