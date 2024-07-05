@extends('master')

@section('content')
<div class="container-fluid mt-4 d-lfex">
    <div class="row  justify-content-around p-0 ">
        <div class="col-12 col-md-12 col-lg-3 p-0 ">
            <div class=" border_person h-auto rounded p-2">
                <div class="d-flex justify-content-between my-2 mb-4">


                    <h5 class=""> Meus Vídeos </h5>
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-camera-reels opacidade-customizada border" viewBox="0 0 16 16">
                        <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0M1 3a2 2 0 1 0 4 0 2 2 0 0 0-4 0" />
                        <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2zm6 8.73V7.27l-3.5 1.555v4.35zM1 8v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1" />
                        <path d="M9 6a3 3 0 1 0 0-6 3 3 0 0 0 0 6M7 3a2 2 0 1 1 4 0 2 2 0 0 1-4 0" />
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


        <div class=" row col-12 col-md-12 col-lg-8  border_person d-flex p-0 rounded box_main mb-5">

            <div class="col-12 my-3">




                <form class="form-inline my-2  mb-4 " method="GET" action="{{ route('results') }}">
                    <input class="form-control mr-sm-2 w-50" type="search" name="search_query" placeholder="Pesquisar" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search mb-1 mr-2" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg>Buscar</button>
                </form>


            </div>

            @if(isset($videoLists) && isset($videoLists->items))
            @foreach($videoLists->items as $key => $item)




            <div class="d-flex col-12 col-md-6 col-lg-3 border_person p-0 mb-2 ">
                <div class=" m-2">
                    @if(isset($item->id->videoId))
                    <a href="{{ route('watch', $item->id->videoId) }}">
                        <div class="card mb-4">
                            <img src="{{ isset($item->snippet->thumbnails->medium->url) ? $item->snippet->thumbnails->medium->url : '' }}" class="img-fluid" alt="">
                            <div class="card-body">
                                <h6 class="card-title">{{ \Illuminate\Support\Str::limit(isset($item->snippet->title) ? $item->snippet->title : '', 50, '...') }}</h6>
                            </div>
                            <div class="card-footer text-muted d-flex justify-content-end">
                                <!-- <p>Data de Publicação {{ isset($item->snippet->publishTime) ? date('d/m/Y', strtotime($item->snippet->publishTime)) : '' }}</p>-->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill " viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            </div>
                        </div>
                    </a>
                    @else
                    <div class="card mb-4">
                        <img src="{{ isset($item->snippet->thumbnails->medium->url) ? $item->snippet->thumbnails->medium->url : '' }}" class="img-fluid" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ \Illuminate\Support\Str::limit(isset($item->snippet->title) ? $item->snippet->title : '', 50, '...') }}</h5>
                        </div>
                        <div class="card-footer text-muted">
                            Data de Publicação {{ isset($item->snippet->publishTime) ? date('d/m/Y', strtotime($item->snippet->publishTime)) : '' }}

                        </div>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
            @else
            <div class="col-12 d-flex justify-content-center ">
                <div class="col-12 col-md-7 col-lg-7">
                    <p class=" text-center ">Nenhum vídeo encontrado, verifique se não ultrapassou a quantidade de requsições permitida pelo API.</p>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection