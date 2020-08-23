@extends('layouts.app')

@section('content')
<section class="post-create">
    <div class="container container--small">
        <div class="row">
            <div class="col w-full">
                <h1>Create Post</h1>
            </div>
        </div>
        <form action="/post" enctype="multipart/form-data" method="post">
            @csrf

            <div class="form-row row">
                <div class="col md:w-1/5">
                    <label for="caption" >{{ __('Post Caption') }}</label>
                </div>
                <div class="col md:w-4/5">
                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>
                </div>
                @error('caption')
                    <div class="col w-full">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                @enderror
            </div>
            <div class="form-row row">
                <div class="col md:w-1/5">
                    <label for="image" >{{ __('Upload Image') }}</label>
                </div>
                <div class="col md:w-4/5">
                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" autocomplete="image" autofocus>
                </div>
                @error('image')
                    <div class="col w-full">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                @enderror
            </div>
            <div class="form-row row">
                <div class="col w-full">
                    <button type="submit">Create post</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
