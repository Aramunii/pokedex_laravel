@section('content')
    @if (!Auth::guest())

        @extends('nav')
    @else


    @endif

    <div class="container mt-20">
        <div class="panel panel-white">
            <div class="panel panel-heading">
                <h4>Mapa</h4>
            </div>
            <div class="panel-body">
                <div class="row text-center">
                    <div class="container-fluid" style="
                            background-image: URL(https://d.furaffinity.net/art/blazingifrit/1475361156/1475361156.blazingifrit_zoruaeevee_background.jpg);
                            width: 900px;
                            height: 582px;
                        ">
                        <div class="row" style="height: 50%">
                        </div>
                        <div class="row" id="pokemon" style="height: 30%">
                        <!-- Aqui é a Row onde vai estar os pokemons que vão aparecer. -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>

        $(function () {


            for(i=0;i<4; i++)
            {
                var number = Math.floor(Math.random() * 700);
                var url = 'https://pokeapi.co/api/v2/pokemon/' + number;

                /* Utilizando a função $.ajax({OPTIONS}) a gente passa os parametros
                    url : a url que você quer fazer o request
                    method : GET ou POST
                    dataType: qual o tipo de resposta que vai ter, geralmente api é json;
                    success : é executado uma função quando for concluido ( podendo pegar as informações )

                 */

                $.ajax
                ({
                    url: url,
                    method: 'get',
                    dataType: 'json',
                    success: function (data) {

                        //Aqui você cria o 'container' de cada pokemon, montando um html básico.
                        var poke = `<div class='col-md-3'>
                                    <img popup='tooltip' title='${data.name}' src='${data.sprites.front_default}'>
                                    </div>`

                        //Utilizando a função append , você vai pendurar o html que criou anteriormente no elemento que você definiu, no caso a row de id Pokemon.
                        $('#pokemon').append(poke);

                    }
                });
            }





        })
    </script>

@endsection


