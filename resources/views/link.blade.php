@extends('layouts.main')
@section('container')

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
                                        <a  target="_blank" href="{{$l["url"]}}"
                                            class="btn btn-primary me-1">Go Link</a>
                                        <button onclick="copyToClipboard('{{$l["url"]}}')"
                                           class="btn btn-outline-primary">Copy Link</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
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
