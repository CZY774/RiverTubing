@extends('layout')

@section('title', 'Create New Post')

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
            <h1 class="fw-light">Buat Postingan Baru</h1>
            <p class="lead text-muted">Silakan isi form di bawah ini untuk membuat postingan baru.</p>
        </div>
    </div>
</section>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <h4>Judul:</h4>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="mb-3">
                            <h4>Konten:</h4>
                            <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                        </div>
                        <div class="mb-3">
                            <h4>Gambar:</h4>
                            <input class="form-control" type="file" id="image" name="image" accept=".jpg, .png, .jpeg, .PNG">
                        </div>
                        <br>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection