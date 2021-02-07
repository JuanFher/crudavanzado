<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title', 'Smartpc | Dashboard')</title>
  <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/font-awesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.addons.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/toastr.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/sweetalert.css') }}">
  @livewireStyles
  @yield('styles')
  <link rel="stylesheet" href="{{ asset('assets/images/favicon.png')}}">
</head>
<body>
  <div class="container-scroller">
    @include('layouts.partials.nav')
    <div class="container-fluid page-body-wrapper">
      @include('layouts.partials.sidebar')
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')
        </div>
        @include('layouts.partials.footer')
      </div>
    </div>
  </div>
  @include('layouts.partials.foot')
</body>
</html>
