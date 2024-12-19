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
                <a href="{{ route('posts.index') }}" class="nav-item nav-link">Posts</a>
                <a href="ShowSaran" class="nav-item nav-link active">Lihat Kritik & Saran</a>
                <a href="/" target="_blank" class="nav-item nav-link">Halaman Website</a>
                <a href="{{ route('logout') }}" class="nav-item nav-link">Logout</a>
            </div>
        </div>
    </nav>
</div>
<!-- NAVIGASI BAR ENDS DISINI -->

<section class="py-5 text-center container pt-9">
    <div class="row py-lg-5">
        <h1 class="fw-light pb-4">Daftar Kritik & Saran</h1>
    </div>
</section>

<div class="container">
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Saran</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sarans as $saran)
                <tr>
                    <td>{{ $saran->id }}</td>
                    <td>{{ $saran->title }}</td>
                    <td>{{ $saran->description }}</td>
                    <td>{{ $saran->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
    <script>
        window.location.href = '{{ route("login") }}';
    </script>
@endauth
@endsection