@extends('layouts.navigation')
@section('title', 'Home')

@section('content')
    <main>
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-4">Welcome {{auth()->user()->name ?? "Guest"}}</h1>
                <p class="lead">OpenForum is still under development. Stay tuned for more.</p>
            </div>
        </div>
    </main>
@endsection

