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
            // $projects = Project::orderBy('created_at', 'asc')->get();
            $tasks = $request->user()->tasks()->get();
            return view('projects.index', [
                'projects' => $projects,
            ]);
        }

    /**
        * 事業計画登録
        *
        * @param Request $request
        * @return Response
        */
        public function store(Request $request)
        {
            $this->validate($request, [
                'name' => 'required|max:255',
            ]);
    
            // 事業計画作成
            Project::create([
                'user_id' => 0,
                'name' => $request->name
            ]);
    
            return redirect('/projects');
        }
 
    /**
        * 事業計画削除
        *
        * @param Request $request
        * @param Project $project
        * @return Response
        */
        public function destroy(Request $request, Project $project)
        {
            $project->delete();
            return redirect('/projects');
        }
}


