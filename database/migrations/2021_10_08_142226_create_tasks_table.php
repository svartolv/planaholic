<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('todo')->comment('Наименование/содержание заявки');
            $table->string('application')->nullable()->comment('Номер рабочей заявки');
            $table->string('type_id')->comment('Тип задачи');
            $table->string('status_id')->comment('Статус задачи');
            $table->dateTime('limitation')->nullable()->comment('Срок выполнения');
            $table->longText('done')->nullable()->comment('Что было сделано по задаче');
            $table->text('comment')->nullable()->comment('Комментарий ко всей заявке');
            $table->boolean('fully')->default(false)->comment('Заявка выполнена в полном объёме');
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
        Schema::dropIfExists('tasks');
    }
}
