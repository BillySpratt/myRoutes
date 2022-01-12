@extends('layouts.app')

@section ('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Add new Game
          </div>
          <div class="card-body">
          <!-- this block is ran if the validation code in the controller fails
          this code looks after displaying the correct error message to the user -->
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form method="POST" action="{{ route('admin.games.store')  }}" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{  csrf_token()  }}">
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" />
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" />
              </div>
              <div class="form-group">
                <label for="location">Company</label>
                <input type="text" class="form-control" id="company" name="company" value="{{ old('company') }}" />
              </div>
              <div class="form-group">
                <label for="location">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}" />
              </div>
              <div class="form-group">
                <label for="start_date">Release Date</label>
                <input type="date" class="form-control" id="release_date" name="release_date" value="{{ old('release_date') }}" />
              </div>

              <a href="{{ route('admin.games.index') }}" class="btn btn-outline">Cancel</a>
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection