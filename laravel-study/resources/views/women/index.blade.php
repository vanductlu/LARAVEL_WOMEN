@extends('layouts.app')

@section('content')
    <h1>Women</h1>
    <div class="mt-4">
        <a href="{{ route('women.create') }}" class="btn btn-success">Create Woman</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Field of Work</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($women as $woman)
                <tr>
                    <td>{{ $woman->name }}</td>
                    <td>{{ $woman->field_of_work }}</td>
                    <td>
                        <a href="{{ route('women.show', $woman->id) }}" class="btn btn-primary">Show <i class="bi bi-eye"></i></a>
                        <a href="{{ route('women.edit', $woman->id) }}" class="btn btn-warning">Edit <i class="bi bi-pencil-fill"></i></a>
                        <form action="{{ route('women.destroy', $woman->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this woman?')">Delete <i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    

    @if (session('success'))
        <div class="alert alert-success mt-4">
            {{ session('success') }}
        </div>
    @endif
@endsection