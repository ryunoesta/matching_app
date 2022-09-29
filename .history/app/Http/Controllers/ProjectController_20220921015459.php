<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
        * タスクリポジトリ
        *
        * @var ProjectRepository
        */
        protected $projects;

    /**
        * コンストラクタ
        *
        * @return void
        */
        public function __construct()
        {
            $this->middleware('auth');

            $this->projects = $projects;
        }

    /**
        * 事業計画一覧
        *
        * @param Request $request
        * @return Response
        */
        public function index(Request $request)
        {
            // $projects = Project::orderBy('created_at', 'asc')->get();
            // $projects = $request->user()->projects()->get();
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
            // Project::create([
            //     'user_id' => 0,
            //     'name' => $request->name
            // ]);
            $request->user()->projects()->create([
                'name' => $request->name,
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
            $this->authorize('destroy', $project);
            $project->delete();
            return redirect('/projects');
        }
}


