<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
        * タスク一覧
        *
        * @param Request $request
        * @return Response
        */
        public function index(Request $request)
        {
            $tasks = Task::orderBy('created_at', 'asc')->get();
            return view('tasks.index', [
                'tasks' => $tasks,
            ]);
        }
}
