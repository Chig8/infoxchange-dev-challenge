<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>InfoXchange Dev Challenge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/search.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
    <body class="py-4">
    {{--    need to create a grid which access the file --}}

        <div class="container">
            <h1>Search Movies By ID</h1>
            <div class="main">
                <form class="form-inline md-form mr-auto mb-4">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-warning btn-rounded btn-sm my-0" type="submit">Search</button>
                </form>
            </div>

            <div class="row mb-3">
                <div class="col-4 themed-grid-col">.col-4</div>
                <div class="col-4 themed-grid-col">.col-4</div>
                <div class="col-4 themed-grid-col">.col-4</div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-4 themed-grid-col">.col-sm-4</div>
                <div class="col-sm-4 themed-grid-col">.col-sm-4</div>
                <div class="col-sm-4 themed-grid-col">.col-sm-4</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 themed-grid-col">.col-md-4</div>
                <div class="col-md-4 themed-grid-col">.col-md-4</div>
                <div class="col-md-4 themed-grid-col">.col-md-4</div>
            </div>
        </div>
    </body>
</html>
