
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
              </div>
          </div>
      </div>
  </div>

<script>
    $(function (){

        var bag_js = {{$bag}}

        bag_js.forEach( async element =>{
            var url = 'https://pokeapi.co/api/v2/pokemon/' + element;

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

        })

    })
</script>

@endsection
