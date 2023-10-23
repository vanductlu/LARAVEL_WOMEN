@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Edit Woman
                    </div>
                    <div class="card-body">
                        <form action="{{ route('women.update', $woman->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $woman->name }}">
                            </div>

                            <div class="form-group">
                                <label for="field_of_work">Field of Work</label>
                                <input type="text" class="form-control" id="field_of_work" name="field_of_work" value="{{ $woman->field_of_work }}">
                            </div>

                            <div class="form-group">
                                <label for="image_url">Image</label>
                                <input type="file" class="form-control-file" id="image_url" name="image_url">
                            </div>

                            <div class="form-group">
                                <label for="birth_date">Birth Date</label>
                                <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ $woman->birth_date }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif