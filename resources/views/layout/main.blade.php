<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>@yield("title")</title>

        @include('layout.linc')
    </head>
    <body>
        <!-- Navigation-->
        @include("layout.Navigation")
        
        @yield("content")

        @include('layout.footar')