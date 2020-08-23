@extends('layouts.app')

@section('content')
<section class="post-create">
    <div class="container container--small">
        <div class="row">
            <div class="col w-full">
                <h1>Edit Profile</h1>
            </div>
        </div>
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')

            <div class="form-row row">
                <div class="col md:w-1/5">
                    <label for="title" >{{ __('Title') }}</label>
                </div>
                <div class="col md:w-4/5">
                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}" autocomplete="title" autofocus>
                </div>
                @error('title')
                    <div class="col w-full">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                @enderror
            </div>
            <div class="form-row row">
                <div class="col md:w-1/5">
                    <label for="description" >{{ __('Description') }}</label>
                </div>
                <div class="col md:w-4/5">
                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}" autocomplete="description" autofocus>
                </div>
                @error('description')
                    <div class="col w-full">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                @enderror
            </div>
            <div class="form-row row">
                <div class="col md:w-1/5">
                    <label for="url" >{{ __('URL') }}</label>
                </div>
                <div class="col md:w-4/5">
                    <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}" autocomplete="url" autofocus>
                </div>
                @error('url')
                    <div class="col w-full">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                @enderror
            </div>
            <div class="form-row row">
                <div class="col md:w-1/5">
                    <label for="image" >{{ __('Upload Profile Image') }}</label>
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
                    <button type="submit">Save</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
