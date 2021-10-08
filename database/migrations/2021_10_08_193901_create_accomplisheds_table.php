<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccomplishedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accomplisheds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('task_id')->comment('Id задачи');
            $table->bigInteger('stage_id')->comment('Id этапа');
            $table->longText('done')->nullable()->comment('Что было сделано по задаче/этапу');
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
        Schema::dropIfExists('accomplisheds');
    }
}
