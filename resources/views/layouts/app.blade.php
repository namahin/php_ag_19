<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$siteIdentity->title}} | {{$siteIdentity->tegLine}}</title>
    <meta name="description" content="Expart Blog is a platform for sharing insights and opinions on various topics related to business, technology, education, and more. Our goal is to provide valuable and engaging content for our readers, as well as to showcase the expertise and experience of our contributors. " />
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
    <link rel="canonical" href="https://ExpartBlog.com/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Expart Blog - Photo Editing and Clipping Path Service Provider" />
    <meta property="og:description" content="Expart Blog is a platform for sharing insights and opinions on various topics related to business, technology, education, and more. Our goal is to provide valuable and engaging content for our readers, as well as to showcase the expertise and experience of our contributors. " />
    <meta property="og:url" content="https://ExpartBlog.com/" />
    <meta property="og:image" content="{{ asset($siteIdentity->ogImage) }}">
    <meta property="og:site_name" content="{{$siteIdentity->title}}" />
    <meta property="og:updated_time" content="{{$siteIdentity->created_at}}" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Expart Blog - Photo Editing and Clipping Path Service Provider" />
    <meta name="twitter:description" content="Expart Blog is a platform for sharing insights and opinions on various topics related to business, technology, education, and more. Our goal is to provide valuable and engaging content for our readers, as well as to showcase the expertise and experience of our contributors. " />
    <meta name="twitter:label1" content="Written by" />
    <meta name="twitter:data1" content="ExpartBlogAdmin" />
    <meta name="twitter:label2" content="Time to read" />
    <meta name="twitter:data2" content="7 minutes" />
    <!--  -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>

@include('layouts.header')

@yield('content')

@include('layouts.footer')



<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>
