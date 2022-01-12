@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome to Laragame</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    View Games <a href="{{ route('user.games.index')}}"> Click here</a><br>
                    Read more <a href="{{ route('about')}}"> about us </a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
