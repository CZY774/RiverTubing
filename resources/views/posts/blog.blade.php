<head>
    <meta charset="utf-8">
    <title>Tentang - MRT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

@extends('layout')
<form method="POST" action="{{ route('handle-text-input') }}">
        @csrf
        <div class="container">
                <div class="content">
                        <div class ="mb-3">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" name="name" id="name" required maxlength="255" class="form-control" lengh>
                        </div>
                        <div class ="mb-3">
                                <label for="text" class="form-label">Saran dan Kritik:</label>
                                <input class="form-control" type="text" name="text" id="text" required>
                        </div>
                        <br>
                        <div class ="mb-3">
                                <label for="datetime">Date/Time:</label>
                                <input type="datetime-local" name="datetime" id="datetime" required>
                        </div>
                        <br>
                        <div class ="mb-3"> 
                                <button type="submit" class="btn btn-primary" >Submit</button>
                        </div>
                </div>
        </div>
</form>