@extends('layouts.app')
 
@section('content')

<!-- 事業計画登録用パネル… -->
<div class="panel-body">
    <!-- バリデーションエラーの表示 -->
    @include('common.errors')
 
    <!-- 新事業計画フォーム -->
    <form action="{{ url('project') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
 
        <!-- 事業計画名 -->
        <div class="form-group">
            <label for="project-name" class="col-sm-3 control-label">Project</label>
 
            <div class="col-sm-6">
                <input type="text" name="name" id="project-name" class="form-control">
            </div>
        </div>
 
        <!-- 事業計画追加ボタン -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Add Project
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
                        <form action="{{ url('project/'.$project->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
 
                            <button type="submit" id="delete-task-{{ $project->id }}" class="btn btn-danger">
                                <i class="fa fa-btn fa-trash"></i>削除
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@endsection