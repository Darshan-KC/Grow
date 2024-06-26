<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('page-title')</title>

    {{-- <!-- Favicon --> --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('uploads/logo/icon.ico') }}">
    {{-- <!-- Google Font: Source Sans Pro --> --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    {{-- <!-- Font Awesome Icons --> --}}
    {{-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
    {{-- <!-- overlayScrollbars --> --}}
    {{-- <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    {{-- <!-- Theme style --> --}}
    {{-- <link rel="stylesheet" href="dist/css/adminlte.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
</head>
