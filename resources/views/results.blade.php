@extends('master')

@section('content')



<div class="container">
    <div class="row d-flex justify-content-around">

        <div class="col-12 col-md-12 col-lg-3 p-0 ">
            <div class=" border_person h-auto rounded p-2">
                <div class="d-flex justify-content-between my-2 mb-4">


                    <h5 class=""> Meus Favoritos </h5>                 

                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-star-fill opacidade-customizada " viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>

                </div>
                <a href="{{ route('index') }} ">
                    <button type="button" class="btn btn-primary w-100 d-flex justify-content-between align-items-center my-2 ">
                        Videos
                    </button>
                </a>
                <a href="{{ route('favoritos') }} ">
                    <button type="button" class="btn btn-primary w-100 d-flex justify-content-between align-items-center my-2 ">
                        Favoritos <span class="badge badge-light rounded-pill p-2">12</span>
                    </button>
                </a>
            </div>



        </div>
        <div class="col-12 col-md-12 col-lg-8">
            @if (!empty($items))
            @foreach($items as $item)
            <div class="row p-0">


                <div class="border_person d-flex p-3 mb-3 ">

                    <a href="#" style="display: contents;">
                        <div class="col-4 ">
                            <img src="{{ $item->snippet->thumbnails->medium->url }}" class="w-100" alt="">
                        </div>
                        <div class="col-8">
                            <h5>{{ \Illuminate\Support\Str::limit($item->snippet->title, 150, '...') }}</h5>
                            <p class="text-muted">Data Publicação {{ isset($item->snippet->publishTime) ? date('d/m/Y', strtotime($item->snippet->publishTime)) : '' }}</p>
                            <p>{{ \Illuminate\Support\Str::limit($item->snippet->description ?? '', 300, '...') }}</p>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
            @else
           
                <p>Nenhum vídeo encontrado.</p>

           
            @endif
        </div>
    </div>
</div>
@endsection