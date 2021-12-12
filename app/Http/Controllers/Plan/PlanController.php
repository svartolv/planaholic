<?php

namespace App\Http\Controllers\Plan;

use App\Http\Controllers\Controller;
use App\Models\Logic\Plan\PlanProcessor;
use App\Models\Logic\Settings\SettingsProcessor;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Отображение страницу запланированных задач
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        /* ToDo
        вдальнейшем, перенести эту функцию или продублировать в блок авторизации. так же можно хранить на фронте
         признак актуальности и по местному времени и перепланировку проводить отдельным запросом
        */
        $mainModel = new SettingsProcessor();
        $mainModel->checkRelevance();

        return view('plan.plan');
    }

    /**
     * Возвращает данные для отображения списка запланированных задач
     *
     * @param Request $request
     * @return array
     * @throws \Illuminate\Validation\ValidationException
     */
    public function getList(Request $request)
    {
        $this->validate($request, [
            'plan_date' => 'present'
        ]);

        $mainModel = new PlanProcessor;
        $dateTitle = $mainModel->determinePlanDateStringName();
        $plan = $mainModel->determinePlanDateStringName();


//        $plan = Plan::all()->sortBy('order');

        $data = [
            'dateTitle' => $dateTitle,
//            'planList' => $plan,
            'planList' => [
                0 => ['id' => 1, 'task_id' => 1, 'stage_id' => '', 'order' => 1],
                1 => ['id' => 2, 'task_id' => 2, 'stage_id' => 1, 'order' => 2]
            ]
        ];

        return $data;
    }
}
