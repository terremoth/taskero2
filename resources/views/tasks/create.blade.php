@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h2>Create Task</h2>
                </div>
                <div class="card-body">
                    {{ html()->form('POST', route('task.store'))->open() }}
                        @include('tasks.fields')
                    {{ html()->form()->close() }}
                </div>
            </div>
        </div>
    </div>
</div>

@include('tasks.quill')

@endsection

