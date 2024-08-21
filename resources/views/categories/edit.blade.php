@extends('layouts.app')
@section('title', 'Tambah Kategori')

@section('content')
    <form action="{{ route('categories.update', $edit->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Nama Kategori</label>
            </div>
            <div class="col-sm-5">
                <input value="{{ $edit->category_name }}" required type="text" class="form-control" name="category_name" placeholder="Nama kategori">
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-10">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-10">
                    <button align="left" class="btn btn-danger" type="submit">Cancel</button>
                </div>
            </div>
        </div>
        </div>
    </form>
@endsection
