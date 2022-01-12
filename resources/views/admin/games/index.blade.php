@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Games
                    <a href="{{ route('admin.games.create') }}" class="btn btn-primary float-right">Add Game</a></div>

                <div class="card-body">
                    @if (count($games)===0)
                        <p>There is no spoon!</p>
                    @else
                        <table id="table-games" class="table table-hover">
                            <thead>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Company</th>
                                <th>Price</th>
                                <th>Release Date</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($games as $game)
                                    <tr data-id="{{ $game->id }}">
                                        <td>{{  $game->title}}</td>
                                        <td>{{  $game->description}}</td>
                                        <td>{{  $game->company}}</td>
                                        <td>{{  $game->price}}</td>
                                        <td>{{  $game->release_date}}</td>

                                        <td>
                                            <a href="{{ route('admin.games.show', $game->id) }}" 
                                                class="btn btn-primary">View</a>
                                            <a href="{{ route('admin.games.edit', $game->id) }}" 
                                                class="btn btn-warning">Edit</a>
                                            <form style="display:inline-block" method="POST" action="{{ route('admin.games.destroy', $game->id) }}">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                                <button type="submit" class="form-control btn btn-danger">Delete</a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
