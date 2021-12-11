<?php

namespace App\Http\Controllers\Plan;

use App\Http\Controllers\Controller;
use App\Models\Plan\Plan;
use App\Models\Plan\PlanHelper;

class PlanController extends Controller
{
    /**
     * Отображение плана задач на текущий день
     */
    public function index()
    {
        $mainModel = new PlanHelper;
        $planDate = $mainModel->determinePlanDateStringName();

        $plan = Plan::all()->sortBy('order');

        return view('tasks.plan', [
            'planDate' => $planDate,
            'plan' => $plan
        ]);
    }
}
