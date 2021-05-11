
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
                    <h4 id="name-poke">KKKKK</h4>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a id="hunt-poke" class="btn btn-block-group bg-teal-400"> Caçar pokémon </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>

    $(function (){

        $('#hunt-poke').on('click',function (){
            var number = Math.floor(Math.random() * 1000);
            var url = 'https://pokeapi.co/api/v2/pokemon/' + number;
                     fetch(url, {
                "body": null,
                "method": "GET",
                "mode": "cors",
                "credentials": "include"
            }).then(function(response) {
               console.log(response.json());
            });
        })

    })
</script>

@endsection


