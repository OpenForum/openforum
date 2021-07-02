@extends('layouts.navigation')
@section('title', 'Home')

@section('content')
    <main>
        <section class="forum">
            <div class="forum-container">
                <a href="#" class="thread-btn">Create thread</a>
                <hr>
                <div class="forum-categories">
                    <div class="category">
                        <div class="category-content">
                            <a href="#">Brood</a>
                            <p>Alles over brood</p>
                        </div>
                    </div>
                    <div class="category">
                        <div class="category-content">
                            <a href="#">Drinken</a>
                            <p>het lekkerste drinken van Nederland.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
