<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{config('app.name')}}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{asset('public/assets/img/logo.png')}}" type="image/gif" sizes="16x16">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;amp;subset=latin-ext" rel="stylesheet">
        <!-- All css file -->
        @include('common.css')
        <!-- All css file -->
        @yield('style')
    </head>
    <body>
      <!-- navigation -->
      @include('common.navigation')
      <?php /*@include('common.enquiry-form')*/ ?>
      <!-- inner page banner -->
      @include('common.mainbanner')
      <!-- section-counter -->
      @include('common.ftco-section-2')
       <!-- section-first -->
      @include('common.ftco-services')
      <!-- section-counter -->
      @include('common.section-counter')
       <!-- pricing-plan -->
      @include('common.pricing-plan')
       <!-- ftco-quote -->
      @include('common.ftco-quote')
      <!-- section-parallax2 -->
      @include('common.section-parallax2')
      <!-- blog section -->
      @include('common.blog')      
      <!-- footer -->
      @include('common.footer')
      <!-- loader -->
      @include('common.loader')
       <!-- Modal -->
      @include('common.model')
       <!-- include All js -->
      @include('common.js')
      @yield('scripts')
    </body>
</html>