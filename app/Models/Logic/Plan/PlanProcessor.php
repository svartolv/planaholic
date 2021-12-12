<?php

namespace App\Models\Logic\Plan;

use Carbon\Carbon;
use function config;

class PlanProcessor
{
    /**
     * @var string Дата запланированных задач
     */
    private $planDate;

    /**
     * Задаёт дату запланированных задач классу
     *
     * @param $planDate
     * @return void
     */
    public function setPlanDate($planDate = "")
    {
        $this->planDate = $planDate;
    }

    /**
     * Возвращает понятное и приятное человеку наименование дня для заголовков страницы Плана на день.
     *
     * @param string $planDate Дата интересующего дня
     *
     * @return string Наименование дня.
     */
    public function determinePlanDateStringName(string $planDate = ''): string
    {
        $result = 'сегодня';

        $this->planDate = $planDate;

        $nowDate = Carbon::now();
        $objectPlanDate = Carbon::parse($planDate);
        $textPlanDate = $objectPlanDate->format('d.m.Y');

        if ($textPlanDate > $nowDate->format('d.m.Y')) {
            $result = $textPlanDate . ', ' . $objectPlanDate->locale(config('app.locale'))->dayName;
        }

        //Внимание! addDay() изменяет значение $nowDate
        if ($textPlanDate == $nowDate->addDay()->format('d.m.Y')) {
            $result = 'завтра';
        }

        if ($textPlanDate == $nowDate->addDay()->format('d.m.Y')) {
            $result = 'послезавтра, ' . $objectPlanDate->locale(config('app.locale'))->dayName;
        }

        return $result;
    }
}
