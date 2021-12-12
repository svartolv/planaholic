<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id')->nulable()->comment('Id пользователя');
            $table->string('user_time_zone')->default('+3:00')->comment('Часовой пояс пользователя');
            $table->date('last_plan_date')->nulable()->comment('Дата последнего формирования плана задач');
            $table->year('prophylaxis')->nullable()->comment('Год последней профилактики');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
