@extends('layouts.app')
@section('title', 'Data Kategori')

@section('content')
    <div class="table-responsive">
        <div align="right" class="mb-3"></div>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Add</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td></td>
                        <td>{{ $category->category_name }}</td>
                        <td>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-success btn-xs">Edit</a>
                            {{-- <a href="{{route('user.destroy', $user->id)}}" class="btn btn-danger btn-xs">Delete</a> --}}
                            <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-xs btn-danger" type="submit">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
