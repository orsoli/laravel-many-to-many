@extends('layouts.app')

@section('content')
<main>
    <div class="container">
        <div class="card my-5 shadow">
            <div class="card-body">
                <h5 class="card-title py-3">{{$project->name}}</h5>
                <p class="card-text">{{$project->description}}</p>
            </div>
        </div>
    </div>
</main>
@endsection