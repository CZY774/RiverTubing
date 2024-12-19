@extends('layout')

@section('title', $post->title)


<!-- Page content-->
@section('content')
<div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">{{ $post->title }}</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Posted on Mei 5, 2023 by Start River Tubing</div>
                        </header>
                        <!-- Preview image figure-->
                        @if($post->image)
                        <figure class="mb-4"><img class="img-fluid rounded" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" /></figure>
                        @endif
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">{{ $post->content }}</p>
                           
                        </section>
                    </article>
                    <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to Posts</a>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>






@endsection
