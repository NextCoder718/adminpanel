@extends('layouts.admin')

@section('content')
    <h1 class="my-4"><span class="text-muted">Leads / </span>Edit Lead</h1>

    <form class="needs-validation" novalidate action="{{ route('admin.leads.update',$lead->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="container">
            @include('admin.leads._form')
            <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1">&copy; 2018 Bendeck Insurance</p>
            </footer>
        </div>
    </form>

@endsection

