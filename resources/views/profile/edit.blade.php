@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{$user->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                 <h1>Edit profile</h1>
                </div>
{{-- TITLE --}}
             <div class="row mb-3">
                 <label for="title" class="col-md-4 col-form-label ">Title</label>


                     <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}"  autocomplete="title" autofocus>

                     @error('title')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror

             </div>
{{-- DESCRIPTION --}}
             <div class="row mb-3">
                <label for="decription" class="col-md-4 col-form-label ">Description</label>


                    <input id="decription" type="text" class="form-control @error('decription') is-invalid @enderror" name="decription" value="{{ old('decription')  ?? $user->profile->description}}"  autocomplete="decription" autofocus>

                    @error('decription')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

            </div>

{{-- URL --}}
            <div class="row mb-3">
                <label for="url" class="col-md-4 col-form-label ">Url</label>


                    <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}"  autocomplete="url" autofocus>

                    @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

            </div>

             <div class="row mb-3">
                <label for="image" class="col-md-4 col-form-label ">Profile Image</label>

                <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}">

                @error('image')
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror
            </div>
                <button class="btn btn-primary" type="submit">Save Profile</button>
            </div>


        </div>
       </form>
</div>
@endsection
