
@push('script')
    <script type="text/javascript" src="{{asset ('js/scripts/ctx.js')}}"></script>
@endpush
@section('content')
    @if (!Auth::guest())

        @extends('nav')
    @else


    @endif

        <div class="panel panel-white">
            <div class="panel panel-heading">
                <h4>Bolsa </h4>
            </div>
            <div class="panel-body">
                <div class="row " id="pokemon" style="height: 30%">
                    <!-- Aqui é a Row onde vai estar os pokemons que vão aparecer. -->
                    @foreach($pokemon as $poke)
                        <div class='col-md-3 text-center'>
                            <a href="bolsa/pokemon/{{$poke['id']}}" class='poke'>
                                <img src='{{$poke['img']}}'><br>
                            </a>
                            <span class="text-center">{{$poke['name']}}</span>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>



@endsection
