@section('content')
    @extends('nav')


    <div class="panel panel-white">
        <div class="panel panel-heading">
            <h4>Pokémon             <a class="text-default pull-right" href="/bolsa"><i class=" icon-arrow-left15"></i>Voltar</a>
            </h4>
        </div>
        <div class="panel-body">
            <div class="row " id="pokemon" style="height: 30%">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4 id="poke_name" class="text-uppercase">{{$pokemon->name}}</h4>
                    </div>
                    <div class="col-md-12 text-center"><span class="text-bold"> Level: </span>
                        <span id="poke_level">{{$pokemon->level}}</span></div>
                </div>
                <div class="col-md-12 text-center">
                    <img src="{{$pokemon->img}}">
                </div>
                <div class="row">
                    <div class="col-md-12 text-center"><span class="text-bold">Vida: </span>
                        <span
                            id="poke_life">{{$pokemon->hp}}</span></div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center"><span class="text-bold">Ataque: </span>
                        <span id="poke_atk">{{$pokemon->atk}}</span></div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center"><span class="text-bold">Defesa: </span>
                        <span id="poke_def">{{$pokemon->def}}</span></div>
                </div>
                <div class="row text-center mt-10">
                    <div class="col-md-12">
                        <a class="btn btn-group bg-teal-300">Usar no time</a>
                        <a class="btn btn-group bg-teal-300" disabled="true">Evoluir</a>
                        <a class="btn btn-group bg-danger-300">Libertar</a>
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection
