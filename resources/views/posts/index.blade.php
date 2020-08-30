@extends('layouts.app')

@section('content')
@foreach($posts as $post)
<section class="single-post">
    <div class="container">
        <div class="row">
            <div class="single-post__wrapper">
                <a href="/profile/{{ $post->user->id }}">
                    <img class="w-full" src="/storage/{{ $post->image }}" alt="{{ $post->caption }}">
                </a>
                <div class="single-post__caption">
                    <p><strong><a href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a></strong></p>
                    <p>{{ $post->caption }}</p>
                </div>
            </div>
        </div>       
    </div>
</section>
@endforeach
<section class="pagination__wrapper">
    <div class="container">
        <div class="row">
            <div class="col pagination-links">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</section>
@endsection
