@extends('layouts.app')
 
@section('content')

<!-- タスク登録用パネル… -->
<div class="panel-body">
    <!-- バリデーションエラーの表示 -->
    @include('common.errors')
 
    <!-- 新タスクフォーム -->
    <form action="{{ url('task') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
 
        <!-- 事業計画名 -->
        <div class="form-group">
            <label for="task-name" class="col-sm-3 control-label">Task</label>
 
            <div class="col-sm-6">
                <input type="text" name="name" id="task-name" class="form-control">
            </div>
        </div>
 
        <!-- 事業計画追加ボタン -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Add Task
                </button>
            </div>
        </div>
    </form>
</div>
 
<!-- 事業計画一覧表示 -->
@if (count($projects) > 0)
<div class="panel panel-default">
    <div class="panel-heading">
        Post Projects
    </div>
 
    <div class="panel-body">
        <table class="table table-striped project-table">
 
            <!-- テーブルヘッダ -->
            <thead>
                <th>Project</th>
                <th>&nbsp;</th>
            </thead>
 
            <!-- テーブル本体 -->
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <!-- 事業計画名 -->
                    <td class="table-text">
                        <div>{{ $project->name }}</div>
                    </td>
 
                    <td>
                        <!-- TODO: 削除ボタン -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@endsection