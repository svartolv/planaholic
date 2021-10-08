<?php

namespace App\Http\Controllers\Tasks;

use App\Http\Controllers\Controller;
use App\Models\Tasks\PlanHelper;
use App\Models\Tasks\Task;
use Carbon\Carbon;

class PlanController extends Controller
{
    /**
     * Отображение плана задач на текущий день
     */
    public function index()
    {
        $mainModel = new PlanHelper;
        $planDate = $mainModel->determinePlanDateStringName();

        return view('tasks.plan', [
            'planDate' => $planDate
        ]);
    }
}
