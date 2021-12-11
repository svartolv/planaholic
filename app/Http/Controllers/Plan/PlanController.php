<?php

namespace App\Http\Controllers\Plan;

use App\Http\Controllers\Controller;
use App\Models\Plan\Plan;
use App\Models\Plan\PlanHelper;

class PlanController extends Controller
{
    /**
     * Отображение плана задач на текущий день
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $mainModel = new PlanHelper;
        $planDate = $mainModel->determinePlanDateStringName();

        $plan = Plan::all()->sortBy('order');

        return view('plan.plan', [
            'planDate' => $planDate,
            'plan' => $plan
        ]);
    }
}
