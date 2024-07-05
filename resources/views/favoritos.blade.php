@extends('master')

@section('content')



<style>

.form-inline {
    display: none;
}


</style>

<div class="container">
    <div class="row">
        <div class="col">
            @if (!empty($items))
                @foreach($items as $item)
                <div class="row mb-3">
                    <a href="#" style="display: contents;">
                        <div class="col-4">
                            <img src="{{ $item->snippet->thumbnails->medium->url }}" class="w-100" alt="">
                        </div>
                        <div class="col-8">
                            <h5>{{ \Illuminate\Support\Str::limit($item->snippet->title, 150, '...') }}</h5>
                            <p class="text-muted text-warning">Data Publicação {{ isset($item->snippet->publishTime) ? date('d/m/Y', strtotime($item->snippet->publishTime)) : '' }}</p>
                            <p>{{ \Illuminate\Support\Str::limit($item->snippet->description ?? '', 300, '...') }}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            @else
                <p>Nenhum vídeo encontrado.</p>
            @endif
        </div>
    </div>
</div>
@endsection
