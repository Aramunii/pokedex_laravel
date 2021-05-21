@section('content')
    @if (!Auth::guest())
        @extends('nav')
    @endif
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="{{asset('js/scripts/map.js')}}" rel="script" type="text/javascript"></script>
        <div class="panel panel-white">
            <div class="panel panel-heading">
                <h4>Mapa</h4>
            </div>
            <div class="panel-body">
                <div class="row text-center">

                    <div class="container-fluid" style="background-image: URL(https://d.furaffinity.net/art/blazingifrit/1475361156/1475361156.blazingifrit_zoruaeevee_background.jpg);
                            width: 900px;
                            height: 582px;
                        ">
                        <div class="row" style="height: 50%"></div>
                        <div class="row" id="pokemon" style="height: 30%">
                            <!-- Aqui é a Row onde vai estar os pokemons que vão aparecer. -->

                        </div>
                    </div>
                </div>

            </div>
        </div>

    @include('map.modalPoke')



@endsection

