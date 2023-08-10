@extends('layouts.main')
@section('container')
    <style>
        .floating-button {
            position: fixed;
            bottom: 50px;
            right: 30px;
            z-index: 1000;
        }
        .floating-buttond {
            position: fixed;
            bottom: 110px;
            right: 30px;
            z-index: 1000;
        }

        .btn-floating {
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
        }
    </style>
{{--    @dd($title)--}}
    <div class="container-md">
        <div class="card">
            <div class="card-body">
                <div class="row row-cols-md-4">
                    @foreach($links as $l)
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-semibold mb-4">{{$l["title"]}}</h5>
                                    <p class="mb-4">{{$l["url"]}}</p>
                                    <div style="bottom: 18px; position: absolute">
                                        <a target="_blank" href="{{$l["url"]}}"
                                           class="btn btn-primary me-1">Go Link</a>
                                        <button onclick="copyToClipboard('{{$l["url"]}}')"
                                                class="btn btn-outline-primary">Copy Link
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
{{--    @dd($title)--}}
    <div class="floating-button rounded">
        <button class="btn btn-primary btn-floating" id="add-button" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
            <i class="ti ti-plus fs-6"></i>
        </button>
    </div>
    <div class="floating-buttond rounded">
        <button class="btn btn-danger btn-floating" id="add-button" data-bs-toggle="modal"
                data-bs-target="#deleteModal">
            <i class="ti ti-trash fs-6"></i>
        </button>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="/tools/link" method="post">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Link</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" aria-describedby="titleInput">
                                    <div id="titleHelp" class="form-text">Enter a title or leave it blank to make it
                                        random
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="inputUrl" class="form-label">Url</label>
                                    <input type="text" class="form-control" required name="url" id="url">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="/tools/link" method="post">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Masukkan pin</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Pin</label>
                                    <input type="text" class="form-control" id="pin" name="pin" aria-describedby="titleInput">
                                    <div id="titleHelp" class="form-text">
                                        Enter pin to delete
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function copyToClipboard(text) {
            const textarea = document.createElement('textarea');
            textarea.value = text;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand('copy');
            document.body.removeChild(textarea);
            alert('Tautan telah disalin ke clipboard.');
        }
    </script>

@endsection
