@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Tasks</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('task.create') }}" role="button" class="btn btn-success mb-3"><i class="fa fa-plus"></i> Create</a>

                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Due date</th>
                                    <th>Control</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if ( ! $tasks->count() )
                                <tr>
                                    <td colspan="10">
                                        No tasks registered.
                                    </td>
                                </tr>
                            @endempty

                            @foreach($tasks as $task)
                                <tr>
                                    <td>{{ $task->id }}</td>
                                    <td>{{ $task->name }}</td>
                                    <td>{{ $task->due_date->format('d/m/Y H:i') }}</td>
                                    <td>
                                        <a href="{{route('task.edit', $task->id)}}" role="button" class="btn btn-secondary"><i class="fa fa-pencil"></i> Edit</a>
                                        <button type="button" onclick="deleteFormModal({{$task->id}})" class="btn btn-danger"><i class="fa fa-times"></i> Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $tasks->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
