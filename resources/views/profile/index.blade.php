@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AAS3fjP.img?h=533&w=799&m=6&q=60&o=f&l=f&x=408&y=192" class="img-fluid rounded-circle" style="height:200px; width:200px;" alt="">

        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline"><h1>{{$user->username}}</h1>
            @can('update', $user->profile)
            <a href="/p/create">ADD NEW POST</a>
            @endcan
            </div>
            @can('update', $user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pe-3"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pe-3"><strong>23k</strong> followers</div>
                <div class="pe-3"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 fw-bold">{{ $user->profile->title }}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->null}}</a></div>

        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            {{-- <img src= "/storage/app/public/uploads/{{$post->image}}" class="w-100" alt=""> --}}
            <a href="/p/{{$post->id}}"><img src= "/storage/{{$post->image}}" class="w-100" alt=""></a>

        </div>
        @endforeach
    </div>
</div>
@endsection
