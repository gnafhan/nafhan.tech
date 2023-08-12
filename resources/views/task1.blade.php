@extends('layouts.main')
@section('container')
    <style>
        body{
            background-image: url("/assets/images/backgrounds/gradient.svg");
            background-size: auto;
            /*overflow: hidden;*/
        }

        .card{
                backdrop-filter: blur(1rem);
                min-height: 80vh;

        }

        .cb-1{
            background-color:rgba(255,255,255, 0.2);
        }.cb-2{
             background-color:rgba(255,255,255, 0);
         }
    </style>

{{--    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded-4 mb-5 card">--}}
{{--        <div class="container-fluid">--}}
{{--                <a class="navbar-brand fw-semibold cursor-pointer" href="#">Why JS</a>--}}
{{--            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}
{{--            <div class="collapse navbar-collapse" id="navbarNav">--}}
{{--                <ul class="navbar-nav">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link active" aria-current="page" href="#">Home</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#">Features</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#">Pricing</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}

    <div class="card cb-1 mt-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent mb-3 mx-3 mt-3 ">
            <div class="container-fluid">
                <a class="navbar-brand fw-semibold cursor-pointer" href="#">Why JS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavs" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNavs">
                    <ul class="navbar-nav justify-content-center">
                        <li class="nav-item ">
                            <a class="nav-link active border-bottom-1 border-1 border-dark" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Reason</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Benefit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Learn</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="card-body ">
            <div class="row">
                <div class="col-md-6">
                    <div class="text fw-bolder fs-5 center">
                            <h1 class="align-center">Why JS</h1>
                    </div>
                </div>
                <div class="col-md-6 align-content-center justify-content-center align-items-center ">
                    <img class="w-75 ms-lg-5" src="/assets/images/deco/landing.png" alt="landing image"/>
                </div>
            </div>
        </div>
    </div>
@endsection
