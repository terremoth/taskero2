@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Task</h2>
                </div>
                <div class="card-body">
                    {{ html()->form('PUT', route('task.update', $task->id))->open() }}
                        @php html()->model($task) @endphp
                        @include('tasks.fields')
                    {{ html()->form()->close() }}
                </div>
            </div>
        </div>
    </div>
</div>

@include('tasks.quill')

@endsection

