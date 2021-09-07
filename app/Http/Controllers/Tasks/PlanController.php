<?php

namespace App\Http\Controllers\Tasks;

use App\Http\Controllers\Controller;
use App\Models\Tasks\Plan;

class PlanController extends Controller
{
    /**
     * Отображение плана задач на текущий день
     */
    public function index()
    {
        $mainModel = new Plan;
        $planDate = $mainModel->determinePlanDateStringName();

        return view('tasks.plan', [
            'planDate' => $planDate
        ]);
    }
}
