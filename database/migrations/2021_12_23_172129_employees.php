<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('names');
            $table->BigInteger('EGN');
            $table->enum('rank',['редник I клас', 'редник II клас','редник III клас', 'ефрейтор I клас', 'ефрейтор II клас', 'мл.сержант', 'сержант', 'ст.сержант', 'старшина', 'оф.канд', 'лейтенант', 'ст.лейтенант', 'капитан', 'майор', 'подполковник', 'полковник', 'бригаден-генерал', 'генерал-майор', 'генерал-лейтенант', 'генерал']);
            $table->integer('vacation');
            $table->integer('compensation');
            $table->date('hired');
            $table->date('retired')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
