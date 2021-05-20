@section('content')
    @if (!Auth::guest())

        @extends('nav')
    @else


    @endif

    <div class="container mt-20">
        <div class="panel panel-white">
            <div class="panel panel-heading">
                <h4>Bolsa </h4>
            </div>
            <div class="panel-body">
                <div class="row" id="pokemon" style="height: 30%">
                    <!-- Aqui é a Row onde vai estar os pokemons que vão aparecer. -->
                    @foreach($pokemon as $poke)
                        <div class='col-md-3'>
                            <a data-id='{{$poke->id}}' data-name='{{$poke->name}}' class='poke'>
                                <img popup='tooltip' title='{{$poke->name}}' src='{{$poke->sprites->front_default}}'>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


@endsection
