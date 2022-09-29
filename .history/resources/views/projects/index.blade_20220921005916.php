@extends('layouts.app')
 
@section('content')
 
<!-- 事業計画一覧表示 -->
@if (count($projects) > 0)
<div class="panel panel-default">
    <div class="panel-heading">
        Current Projects
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
                        <div>{{ $task->name }}</div>
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