
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
    </div>

    <script>

        $(async function () {


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

               await $.ajax
                ({
                    url: url,
                    method: 'get',
                    dataType: 'json',
                    success: function (pokemon) {

                        //Aqui você cria o 'container' de cada pokemon, montando um html básico.
                        var poke = `<div class='col-md-3'>
                                       <a data-id='${pokemon.id}' data-name='${pokemon.name}' class='poke'>
                                    <img popup='tooltip' title='${pokemon.name}' src='${pokemon.sprites.front_default}'>
                                      </a>
                                    </div>`

                        //Utilizando a função append , você vai pendurar o html que criou anteriormente no elemento que você definiu, no caso a row de id Pokemon.
                        $('#pokemon').append(poke);

                    }
                });
            }


            $('.poke').on('click', function (){

                pokemon_name = $(this).data('name');
                poke_id = $(this).data('id');


                $.ajax
                ({
                    url: 'bolsa/capturar/' + poke_id,
                    method: 'get',
                    dataType: 'json',
                    success: function (data) {
                        console.log(data);
                        swal.fire('Você capturou ',pokemon_name,'success')

                    }
                });

            })

        })
    </script>

@endsection

