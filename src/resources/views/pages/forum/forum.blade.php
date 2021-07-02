@extends('layouts.navigation')
@section('title', 'Forum')

@section('content')
    <main>
        <section class="forum">
            <div class="forum-container">
                <a href="#" class="thread-btn">Create thread</a>
                <hr>
                <div class="forum-categories">
                    @if(count($categories) == 0)
                        <h2>No categories found!</h2>
                    @else
                        @foreach($categories as $category)
                            <div class="category">
                                <div class="category-content">
                                    <a href="{{route('category', [$category->id])}}">{{$category->title}}</a>
                                    <p>{{$category->description}}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
    </main>
@endsection
