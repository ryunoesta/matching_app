<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
        * 事業計画一覧
        *
        * @param Request $request
        * @return Response
        */
        public function index(Request $request)
        {
            $projects = Project::orderBy('created_at', 'asc')->get();
            return view('projects.index', [
                'projects' => $projects,
            ]);
        }
}
