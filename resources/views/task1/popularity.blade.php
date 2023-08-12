@extends('layouts.navT1')
@section('content')
    <div class="card mx-5">
        <div class="card-body">
            <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                <div class="mb-3 mb-sm-0">
                    <h5 class="card-title fw-semibold">Popularity Overview</h5>
                </div>
                <div>
                    <select class="form-select">
                        <option value="1">March 2023</option>
                        <option value="2">April 2023</option>
                        <option value="3">May 2023</option>
                        <option value="4">June 2023</option>
                    </select>
                </div>
            </div>
            <div id="chart"></div>
        </div>
    </div>
@endsection
