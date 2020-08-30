@extends('layouts.app')

@section('content')
<section class="post-create">
    <div class="container">
        <div class="row">
            <div class="col w-2/3">
                <img class="w-full" src="/storage/{{ $post->image }}" alt="{{ $post->caption }}">
            </div>
            <div class="col w-1/3">
                <div class="mb-15px flex items-center justify-between">
                    <a class="flex items-center" href="/profile/{{ $post->user->id }}">
                        <img src="{{ $post->user->profile->profileImage() }}" width="50" class="h-auto rounded-full mr-15px" alt="">
                        <strong>{{ $post->user->username }}</strong>
                    </a>
                    <a href="#">follow</a>
                </div>
                <hr class="mb-15px">
                <p><strong><a href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a></strong> {{ $post->caption }}</p>
            </div>
        </div>       
    </div>
</section>
@endsection
