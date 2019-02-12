<!doctype html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>MIB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="pusher-key" content="{{ config('broadcasting.connections.pusher.key') }}">
    <meta name="pusher-cluster" content="{{ config('broadcasting.connections.pusher.options.cluster') }}">

    <link rel="shortcut icon" href="{{ URL::asset('assets/img/f-icon.png') }}">
    <title>{{ config('app.name') }} | MIB</title>
    <!-- CSS
    ================================================== -->
    {{--<link rel="stylesheet" href="{{ URL::asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/glyphicons.css') }}">--}}
    <link rel="stylesheet" href="{{ URL::asset('css/main-web/mib-styles.css') }}">
    {{--<link rel="stylesheet" href="{{ URL::asset('second/css/colors/red.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">--}}




    <script src="//js.pusher.com/3.1/pusher.min.js"></script>
    {{--// Data Tables--}}

    <script>
        window.App = {!! json_encode([
            'signedIn' => Auth::check(),
            'user' => Auth::user(),
        ]) !!};
    </script>


    <style>

    table{
        width:100%;
    }
    #example_filter{
        float:right;
    }
    #example_paginate{
        float:right;
    }
    label {
        display: inline-flex;
        margin-bottom: .5rem;
        margin-top: .5rem;

    }

  .btnRight{
        float: right;
        border-bottom-left-radius: 10px;
        padding: 40px 5px;
        border-bottom-left-radius: 10px;

    }
        .btnRadius{
            background-color: #606c84;
            padding: 10px 98px;
            line-height: 20px;
            color: #fff;
            position: relative;
            font-size: 13px;
            font-weight: 500;
            display: inline-block;
            transition: all 0.2s ease-in-out;
            cursor: pointer;
            overflow: hidden;
            border: none;


        }
    .btnRadius:hover{
        background: #f00000;
        color: #f0fafb;
    }
        .help-block{
            color: #f00000;
        }

</style>

    <script type="text/javascript">

        function rating(rate){
            document.getElementById("stars").innerHTML = getStars(parseFloat(rate));
        }



        function getStars(rating) {
            // Round to nearest half
            rating = Math.round(rating * 2) / 2;
            let output = [];

            // Append all the filled whole stars
            for (var i = rating; i >= 1; i--)
                output.push('<i class="fa fa-star" aria-hidden="true" style="color: gold;"></i>&nbsp;');

            // If there is a half a star, append it
            if (i == .5) output.push('<i class="fa fa-star-half-o" aria-hidden="true" style="color: gold;"></i>&nbsp;');

            // Fill the empty stars
            for (let i = (5 - rating); i >= 1; i--)
                output.push('<i class="fa fa-star-o" aria-hidden="true" style="color: gold;"></i>&nbsp;');
            return output.join('');

        }
    </script>

</head>
<body>
<div class="mm-page mm-slideout">


