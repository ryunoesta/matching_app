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

    /**
        * タスク登録
        *
        * @param Request $request
        * @return Response
        */
        public function store(Request $request)
        {
            $this->validate($request, [
                'name' => 'required|max:255',
            ]);
    
            // タスク作成
            Task::create([
                'user_id' => 0,
                'name' => $request->name
            ]);
    
            return redirect('/tasks');
        }
 
    /**
        * タスク削除
        *
        * @param Request $request
        * @param Task $task
        * @return Response
        */
    public function destroy(Request $request, Task $task)
    {
        $task->delete();
        return redirect('/tasks');
    }
}

}
