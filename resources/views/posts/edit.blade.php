@extends('layout')

@section('title', 'Edit Post')

@section('content')
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand">Halo, Admin Muncul River Tubing</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ route('posts.index') }}">Posts</a></li>
            <li><a href="/">Halaman Website</a></li>
        </ul>
    </div>
</nav>

<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Edit Postingan</h1>
            <p class="lead text-muted">Silakan edit informasi postingan di bawah ini.</p>
        </div>
    </div>
</section>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <h4>Judul:</h4>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
                        </div>
                        <div class="mb-3">
                            <h4>Konten:</h4>
                            <textarea class="form-control" id="content" name="content" rows="5" required>{{ $post->content }}</textarea>
                        </div>
                        <div class="mb-3">
                            <h4>Gambar:</h4>
                            <input class="form-control" type="file" id="image" name="image" accept=".jpg, .png, .jpeg, .PNG">
                            @if($post->image)
                                <br>
                                <div class="mt-2">
                                    <p>Gambar saat ini:</p>
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-thumbnail" style="max-width: 50vh;">
                                </div>
                            @endif
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection