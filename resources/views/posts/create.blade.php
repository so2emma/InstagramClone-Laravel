@extends('layouts.app')

@section('content')
<div class="container">
   <form action="/p" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-8 offset-2">
            <div class="row">
                <h1>ADD NEW POST</h1>
            </div>
         <div class="row mb-3">
             <label for="caption" class="col-md-4 col-form-label ">Posts Caption</label>


                 <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}"  autocomplete="caption" autofocus>

                 @error('caption')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror

         </div>

         <div class="row mb-3">
            <label for="image" class="col-md-4 col-form-label ">Posts Image</label>

            <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}">

            @error('image')
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror
        </div>
            <button class="btn btn-primary" type="submit">Add New Post</button>
        </div>


    </div>
   </form>
</div>
@endsection
