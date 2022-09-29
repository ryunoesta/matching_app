<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
        * 事業プラン一覧
        *
        * @param Request $request
        * @return Response
        */
        public function index(Request $request)
        {
            $projects = Project::orderBy('created_at', 'asc')->get();
            return view('tasks.index', [
                'tasks' => $tasks,
            ]);
        }
}
