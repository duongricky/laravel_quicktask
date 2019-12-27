@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>{{ trans('custome.new_task') }}</h4></div>
                    <div class="panel-body">
                        @include('common.errors')

                        @if (session('addSuccess'))
                            <div class="alert alert-success">
                                {{ session('addSuccess') }}
                            </div>
                        @endif
                        @if (session('delSuccess'))
                            <div class="alert alert-success">
                                {{ session('delSuccess') }}
                            </div>
                        @endif

                        <form action="{{ route('tasks.store') }}" method="POST" class="form-horizontal">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="task" class="col-sm-3 control-label">{{ trans('custome.task') }}</label>

                                <div class="col-sm-7">
                                    <input type="text" name="name" id="task-name" class="form-control" value="{{ old('name') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-plus"></i> {{ trans('custome.add_task') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>{{ trans('custome.current_task') }}</h4></div>
                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>{{ trans('custome.task') }}</th>
                                <th></th>
                            </thead>

                            <tbody>
                            @forelse ($tasks as $task)
                                <tr>
                                    <td>
                                        <div>{{ $task->name }}</div>
                                    </td>
                                    <td class="table-action">
                                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button class="btn btn-danger btnDelete" data-question="{{ trans('custome.confirm_del') }}">
                                                <i class="fa fa-trash"></i> {{ trans('custome.del_task') }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2">{{ trans('custome.no_task_records') }}</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
