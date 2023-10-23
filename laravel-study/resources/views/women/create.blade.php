@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tạo tác giả</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('women.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Tên</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label for="field_of_work">Lĩnh vực công việc</label>
                <input type="text" class="form-control" id="field_of_work" name="field_of_work" value="{{ old('field_of_work') }}">
            </div>

            <div class="form-group">
                <label for="image_url">Hình ảnh</label>
                <input type="file" class="form-control-file" id="image_url" name="image_url">
            </div>

            <div class="form-group">
                <label for="birth_date">Ngày sinh</label>
                <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ old('birth_date') }}">
            </div>

            <button type="submit" class="btn btn-primary">Tạo</button>
        </form>
    </div>
@endsection