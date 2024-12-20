@extends('layout')

@section('title', 'Posts')

@section('content')

@auth

<!-- NAVIGASI BAR DISINI -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0 sticky-top shadow-sm">
        <a href="/" class="navbar-brand p-0">
            <h1 class="m-0"><i></i></h1>
            <img src="img/Wonderful_Indonesia_logo.png" class="img-fluid" alt="Logo Siap">
            <img src="img/logo mrt 1.png" class="img-fluid" alt="Logo MRT">
            <img src="img/MRT SIAP OKE FIX CROP.png" class="img-fluid" alt="Logo Siap">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('posts.index') }}" class="nav-item nav-link active">Posts</a>
                <a href="ShowSaran" class="nav-item nav-link">Lihat Kritik & Saran</a>
                <a href="/" target="_blank" class="nav-item nav-link">Halaman Website</a>
                <a href="{{ route('logout') }}" class="nav-item nav-link">Logout</a>
            </div>
        </div>
    </nav>
</div>
<!-- NAVIGASI BAR ENDS DISINI -->
 

<section class="py-5 text-center container pt-9">
    <div class=" row py-lg-5">
        <h1 class="fw-light pb-4">Silakan Unggah Posts di sini</h1>
        <a href="{{ route('posts.create') }}" class="btn-primary">Buat Post Baru</a>
    </div>
</section>

    @if($posts->isEmpty()) 
        <p>Post tidak ditemukan</p>
    @else
    <div class="album py-6 bg-body-tertiary">
        <div class="container">         
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 justify-content-center">
            @foreach ($posts as $post)       
                <div class="col">
                    <div class=" card shadow-sm">
                    @if($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" width="200" height ="225"class="bd-placeholder-img card-img-top">
                            <rect width="100%" height="100%" fill="#55595c"></rect>
                        </img>
                    @endif       
                        <div class="card-body">                    
                            <a  class ="card-text" href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                            <p class="card-text">{{ $post->content }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    @endif
@else
    <script>
        window.location.href = '{{ route("login") }}';
    </script>
@endauth
@endsection