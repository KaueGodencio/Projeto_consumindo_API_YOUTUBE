@extends('master')

@section('content')

<div class="container mt-4">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-8">
            <div class="card mb-4 w-100">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.youtube.com/embed/{{ $singleVideo->items[0]->id }}" width="560" height="600" frameborder="0"></iframe>
                </div>
                <div class="card-body">
                    <h5>
                        {{ $singleVideo->items[0]->snippet->title }}
                    </h5>
                    <p class="text-secondary"> Data de Publicação: {{ date('d/m/Y', strtotime($singleVideo->items[0]->snippet->publishedAt)) }}</p>
                    <p>{{ $singleVideo->items[0]->snippet->description }}</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4 ">
            <div class="container">
        
                <div class="row">
                    @foreach($videoLists->items as $key => $item)
                    <div class="col-12 col-md-4 col-lg-12 border_person mb-3">
                        <img src="{{ isset($item->snippet->thumbnails->medium->url) ? $item->snippet->thumbnails->medium->url : '' }}" class="img-fluid" alt="">
                        <div class="card-body col-12">
                            <h5>{{ \Illuminate\Support\Str::limit($item->snippet->title, 150, '...') }} </h5>
                        </div>
                       
                    </div>


                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection