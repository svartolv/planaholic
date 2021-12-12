<?php

namespace App\Models\Logic\Plan;

use App\Models\Tables\Plan;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class PlanProcessor
{
    /**
     * @var string Дата запланированных задач
     */
    private $planDate;

    /**
     * Задаёт дату запланированных задач классу
     *
     * @param string $planDate
     * @return void
     */
    public function setPlanDate($planDate = "")
    {
        $objectPlanDate = Carbon::parse($planDate);
        $textPlanDate = $objectPlanDate->format('d.m.Y');

        $this->planDate = $textPlanDate;

        return;
    }

    /**
     * Возвращает понятное и приятное человеку наименование дня для заголовков страницы Плана на день.
     *
     * @return string Наименование дня.
     */
    public function determinePlanDateStringName(): string
    {
        $result = 'сегодня';

        $nowDate = Carbon::now();
        $objectPlanDate = Carbon::parse($this->planDate);
        $textPlanDate = $objectPlanDate->format('d.m.Y');

        //Внимание! addDay() изменяет значение $nowDate
        if ($textPlanDate == $nowDate->addDay()->format('d.m.Y')) {
            $result = 'завтра';
        }

        if ($textPlanDate == $nowDate->addDay()->format('d.m.Y')) {
            $result = 'послезавтра (' . $objectPlanDate->locale(config('app.locale'))->dayName . ')';
        }

        if ($textPlanDate > $nowDate->format('d.m.Y')) {
            $result = $textPlanDate . ' (' . $objectPlanDate->locale(config('app.locale'))->dayName . ')';
        }

        return $result;
    }

    /**
     * Получить список запланированных задач
     *
     * @return Plan[]|Collection
     */
    public function getPlanList()
    {
        /* ToDo
        Тут будет дополнительная обработка: подгрузка и конкатенация этапов, выполненного и разделение по пользователям,
        десериализация. возможно, формирование и передача ошибок.
        */
        $plan = Plan::all()->sortBy('order');

        return $plan;
    }
}
