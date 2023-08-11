@extends('layouts.main')
@section('container')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Tools</h5>
                <div class="container-md row-cols-md-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="/assets/images/products/link.svg" width="200px" class="card-img mb-4"/>
                            <h5 class="card-title fw-semibold mb-4">Link Tools</h5>
                            <p class="mb-4">Copy and paste your link multi devices</p>
                            <a href="/tools/link" class=" btn btn-primary">Go Tech</a>
                        </div>
                    </div>
                </div>
            <h5 class="card-title fw-semibold mb-4">Task</h5>
            <div class="container-md row-cols-md-4">
                <div class="card">
                    <div class="card-body">
                        <img src="/assets/images/products/task.svg" width="200px" class="card-img mb-4"/>
                        <h5 class="card-title fw-semibold mb-4">Installing Laravel</h5>
                        <p class="mb-4">Make 4 routes</p>
                        <a href="/tools/link" class=" btn btn-primary">Go Task</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
