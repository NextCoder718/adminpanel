@extends('layouts.admin')

@section('content')
    <h1 class="mt-4">Agents</h1>
    <div class="row mb-1">
        <div class="col-auto mr-auto"><p class="text-align-bottom mt-2 h5">{{ $agents->total() }} Agents</p></div>
        <div class="col-auto">
            <a href="{{ route('admin.agents.create') }}" class="btn btn-success">Add Agent</a>
        </div>
    </div>


    <table class="table table-hover table-striped table-responsive">
        <thead class="thead-light">
        <tr>
            <th scope="col"><a href="">Name</a></th>
            <th scope="col"><a href="">Email</a></th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($agents as $agent)
            <tr>
                <td>{{ $agent->name }}</td>
                <td><a href="#">{{ $agent->email }}</a></td>
                <td class="nowrap">
                    <a href="{{ route('admin.agents.edit',$agent->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <a href="{{ route('admin.agents.destroy',$agent->id) }}" class="btn btn-sm btn-danger" data-token="{{ csrf_token() }}" data-method="delete" data-confirm="Are you sure?">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $agents->links() }}

@endsection
