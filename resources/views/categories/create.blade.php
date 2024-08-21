@extends('layouts.app')
@section('title', 'Tambah User')

@section('content')
    <form action="{{ route('categories.store') }}" method="post">
        @csrf
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Nama Kategori</label>
            </div>
            <div class="col-sm-5">
                <input required type="text" class="form-control" name="category_name" placeholder="Nama Kategori">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
              <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </div>
        </div>
        </div>
    </form>
@endsection
