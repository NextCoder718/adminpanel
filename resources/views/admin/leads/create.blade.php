<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bendeck Lead Submission Form</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/leadform.css') }}" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container">
    <div class="py-5">
        <h1>Bendeck Insurance Agency</h1>
        <p class="lead">Lead Submission Form</p>
    </div>
    @if(session()->has('error'))
        <div class="alert alert-warning alert-dismissible" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @elseif(session()->has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <form class="needs-validation" novalidate action="{{ route('leads.store') }}" method="post">
        @csrf
        @include('admin.leads._form')
    </form>
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2018 Bendeck Insurance</p>
    </footer>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>