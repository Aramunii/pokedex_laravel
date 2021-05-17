@section('content')
    @if (!Auth::guest())
        @extends('nav')
    @endif

    <div class=" container mt-20">
        <div class="panel panel-white">
            <div class="panel panel-heading">
                <h4>Escolha seu pokémon</h4>
            </div>
            <div class="panel-body">
                <div class="row text-center">
                    <div class="container-fluid">
                        <div class="row" id="pokemon">
                            <div class="col-md-4">
                                <div class="row">
                                    <img  src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/1.png">
                                </div>
                                <div class="row">
                                    <span>Bulbasaur</span>
                                </div>
                                <div class="row mt-10"><a class="btn btn-group bg-teal-300">Escolher</a></div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/4.png">
                                </div>
                                <div class="row">
                                    <span>Charmander</span>
                                </div>
                                <div class="row mt-10"><a class="btn btn-group bg-teal-300">Escolher</a></div>

                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/7.png">
                                </div>
                                <div class="row">
                                    <span>Squirtle</span>
                                </div>
                                <div class="row mt-10"><a class="btn btn-group bg-teal-300">Escolher</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>


        
    </script>

@endsection

