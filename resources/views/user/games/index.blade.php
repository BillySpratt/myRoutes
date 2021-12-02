@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Games</div>

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
                                            <a href="{{ route('user.games.show', $game->id) }}" class="btn btn-primary">View</a>
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
