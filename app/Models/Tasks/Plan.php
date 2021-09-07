<?php

namespace App\Models\Tasks;

use Carbon\Carbon;

class Plan
{
    /**
     * Возвращает приятное человеку наименование дня для заголовков страницы Плана на день.
     *
     * @param string $planDate Дата интересующего дня
     *
     * @return string Наименование дня.
     */
    public function determinePlanDateStringName($planDate = '')
    {
        $result = 'сегодня';

        $nowDate = Carbon::now();
        $objectPlanDate = Carbon::parse($planDate);
        $textPlanDate = $objectPlanDate->format('d.m.Y');

        //Внимание! addDay() изменяет значение $nowDate
        if ($textPlanDate == $nowDate->addDay()->format('d.m.Y')) {
            $result = 'завтра';
        }

        if ($textPlanDate == $nowDate->addDay()->format('d.m.Y')) {
            $result = 'послезавтра, ' . $objectPlanDate->locale(config('app.locale'))->dayName;
        }

        if ($textPlanDate > $nowDate->format('d.m.Y')) {
            $result = $textPlanDate . ', ' . $objectPlanDate->locale(config('app.locale'))->dayName;
        }

        return $result;
    }
}
