@extends('layouts.navT1')
@section('content')
    <style>
        .text{
            font-size: 70px;
        }
    </style>
    <div class="row">
        <div class="col-md-6">
            <div class="fw-bolder center d-flex flex-column mt-lg-3 ms-lg-5 ">
                    <h1 class="mt-lg-5 text">Why JS</h1>
                    <h2 class="">Start learning javascript!</h2>
                    <p class="fw-medium">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, recusandae.</p>

            </div>
            <div class="buttons ms-lg-5 mt-lg-3">
                <a href="/task/task1/learn" class="btn btn-lg btn-primary me-3 rounded-5">Start Learning</a>
                <a href="/task/task1/reason" class="btn btn-lg btn-outline-primary rounded-5">Why JS</a>
            </div>
        </div>
        <div class="col-md-6 align-content-center justify-content-center align-items-center ">
            <img class="w-75 ms-lg-5" src="/assets/images/deco/landing.png" alt="landing image"/>
        </div>
    </div>
@endsection



