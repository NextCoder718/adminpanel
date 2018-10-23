@extends('layouts.admin')

@section('content')
    <h1 class="mt-4">Producers</h1>
    <div class="row mb-1">
        <div class="col-auto mr-auto"><p class="text-align-bottom mt-2 h5">{{ $producers->total() }} Producers</p></div>
        <div class="col-auto">
            <a href="{{ route('admin.producers.create') }}" class="btn btn-success">Add Producer</a>
        </div>
    </div>


    <table class="table table-hover table-striped table-responsive">
        <thead class="thead-light">
        <tr>
            <th scope="col"><a href="">Name</a></th>
            <th scope="col"><a href="">Email</a></th>
            <th scope="col"><a href="">Status</a></th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($producers as $producer)
            <tr>
                <td>{{ $producer->name }}</td>
                <td><a href="#">{{ $producer->email }}</a></td>
                <td><span class="text-{{ $producer->status ? 'success' : 'danger' }}">{{ status($producer->status)}}</span></td>
                <td class="nowrap">
                    <a href="{{ route('admin.producers.edit',$producer->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <a href="{{ route('admin.producers.destroy',$producer->id) }}" class="btn btn-sm btn-danger" data-token="{{ csrf_token() }}" data-method="delete" data-confirm="Are you sure?">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $producers->links() }}

@endsection
