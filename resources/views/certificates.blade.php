@extends('layouts.public')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">Sertifikat dan Perizinan</h1>
    <div class="row justify-content-center">
        @php
            $certificates = [
                // Add more certificates here
                'img/IMG-20240627-WA0011.jpg',
                'img/IMG-20240627-WA0013.jpg',
            ];
        @endphp

        @foreach($certificates as $index => $certificate)
            <div class="col-md-6 col-lg-4 mb-4 d-flex justify-content-center">
                <div class="certificate-container">
                    <img src="{{ asset($certificate) }}" class="img-fluid certificate-img" data-bs-toggle="modal" data-bs-target="#certificateModal{{ $index }}" alt="Certificate {{ $index + 1 }}">
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="certificateModal{{ $index }}" tabindex="-1" aria-labelledby="certificateModalLabel{{ $index }}" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-body">
                            <img src="{{ asset($certificate) }}" class="img-fluid" alt="Certificate {{ $index + 1 }}">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@push('styles')
<style>
    .certificate-container {
        max-width: 100%;
        display: inline-block;
    }
    .certificate-img {
        cursor: pointer;
        transition: transform 0.3s ease;
    }
    .certificate-img:hover {
        transform: scale(1.05);
    }
</style>
@endpush