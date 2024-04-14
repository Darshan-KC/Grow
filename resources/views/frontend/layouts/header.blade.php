<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    {{-- <title>Grow - Online Education Website Template</title> --}}
    <title>@yield('title')</title>
    {{-- @stack('title') --}}
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="E-Learning website" name="keywords">
    <meta content="Free online E-Learning website" name="description">

    {{-- <!-- Favicon --> --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('uploads/logo/icon.ico') }}">

    {{-- <!-- Google Web Fonts --> --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

    {{-- <!-- Font Awesome --> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    {{-- <!-- Libraries Stylesheet --> --}}
    {{-- <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> --}}
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    {{-- <!-- Customized Bootstrap Stylesheet --> --}}
    {{-- <link href="css/style.css" rel="stylesheet"> --}}
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    @stack('header-link')
</head>
