@extends('layouts.admin')

@section('content')
    <h1 class="mt-4"><span class="text-muted">Producers / </span>Add Producer</h1>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <form action="{{ route('admin.agents.store') }}" method="post">
                    @csrf
                    @include('admin.agents._form')
                    <button type="submit" class="btn btn-success">Save Producer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
