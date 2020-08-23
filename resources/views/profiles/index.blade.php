@extends('layouts.app')

@section('content')
<section class="user">
    <div class="container">
        <div class="row items-center">
            <div class="col md:w-1/3">
            <img class="user__avatar rounded-full" src="/storage/{{ $user->profile->image }}" alt="">
            </div>
            <div class="col md:w-2/3">
                <div class="user__info">
                    <div class="flex justify-between items-end">
                        <h1>{{ $user->username }}</h1>
                        @can('update', $user->profile)
                            <a href="/post/create">New post</a>
                        @endcan
                    </div>
                    <div class="row user__stats">
                    <div class="col w-1/3"><strong>{{ $user->posts->count() }}</strong> posts</div>
                        <div class="col w-1/3"><strong>999</strong> followers</div>
                        <div class="col w-1/3"><strong>999</strong> following</div>
                    </div>
                    <div class="user__title">
                        {{ $user->profile->title }}
                    </div>
                    <div class="user__desc">
                        {{ $user->profile->description }}
                    </div>
                    <div class="user__url">
                        {{ $user->profile->url }}
                    </div>
                    @can('update', $user->profile)
                        <a href="/profile/{{ $user->id }}/edit">Edit profile</a>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</section>
<section class="photo-grid">
    <div class="container">
        <div class="row">
            @foreach($user->posts as $post)
                <div class="photo">
                <a href="/post/{{ $post->id }}"><img src="/storage/{{ $post->image }}" alt=""></a>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
