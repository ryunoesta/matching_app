@extends('layouts.app')
 
@section('content')
 
<!-- 事業計画一覧表示 -->
@if (count($projects) > 0)
<div class="panel panel-default">
    <div class="panel-heading">
        Current Projects
    </div>
 
    <div class="panel-body">
        <table class="table table-striped task-table">
 
            <!-- テーブルヘッダ -->
            <thead>
                <th>Projec</th>
                <th>&nbsp;</th>
            </thead>
 
            <!-- テーブル本体 -->
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <!-- タスク名 -->
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