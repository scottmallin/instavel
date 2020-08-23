@extends('layouts.app')

@section('content')
<section class="post-create">
    <div class="container">
        <div class="row">
            <div class="col w-2/3">
                <img class="w-full" src="/storage/{{ $post->image }}" alt="{{ $post->caption }}">
            </div>
            <div class="col w-1/3">
                <strong>{{ $post->user->username }}</strong>
                <p>{{ $post->caption }}</p>
            </div>
        </div>       
    </div>
</section>
@endsection
