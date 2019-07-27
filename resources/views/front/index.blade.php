@extends('front.template.main')

@section('title', 'Inicio')

@section('contend')
<div class="row-fluid container-folio">
    <div class="col-md-12">
        <div class="row">
            @if($articles->isEmpty())
            <div class="container">
                <div class="jumbotron">
                    <h1 class="text-center">
                        No hay artículos disponible para mostar
                    </h1>
                    <h3 class="text-center">
                        Registrate en el sistema y publica tu producto gratis.
                    </h3>
                </div>
            </div>
            @else
            <h1 class="text-center">
                Artículos Destacados
            </h1>
            @foreach ($articles as $article)
            <div class="col-md-4">
                <div class="span4">
                    <div class="thumbnail">
                        <img alt="..." height="400px" src="{{asset($article->foto_url)}}" width="200px">
                            <div class="caption">
                                <h3 class="">
                                    {{$article->nombre}}
                                </h3>
                                <p class="">
                                    {{$article->descripcion}}
                                </p>
                                <div class="row-fluid">
                                    <div class="span6">
                                        <p class="lead">
                                            {{$article->precio}} $
                                        </p>
                                    </div>
                                    <div class="span6">
                                        <button class="btn btn-success btn-block">
                                            <i aria-hidden="true" class="fa fa-cart-plus">
                                            </i>
                                            Comprar
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!--END CAPTION -->
                        </img>
                    </div>
                    <!-- END: THUMBNAIL -->
                </div>
            </div>
            <!-- Final de row x4 -->
            @endforeach
            @endif
        </div>
    </div>
</div>
<div class="text-center">
    {!! $articles->render() !!}
</div>
<!-- Final de row -->
@endsection
