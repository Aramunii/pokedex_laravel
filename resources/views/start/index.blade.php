@section('content')
    @if (!Auth::guest())
        @extends('nav')
    @endif


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
                                <div class="row mt-10"><a class="btn btn-group bg-teal-300 choose-poke" data-id="1" data-name="Bulbasaur">Escolher</a></div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/4.png">
                                </div>
                                <div class="row">
                                    <span>Charmander</span>
                                </div>
                                <div class="row mt-10"><a class="btn btn-group bg-teal-300  choose-poke" data-id="4" data-name="Charmander">Escolher</a></div>

                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/7.png">
                                </div>
                                <div class="row">
                                    <span>Squirtle</span>
                                </div>
                                <div class="row mt-10"><a class="btn btn-group bg-teal-300  choose-poke" data-id="7" data-name="Squirtle">Escolher</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <script>

        $(function () {

            $('.choose-poke').on('click',function () {
                var poke_id = $(this).data('id');
                var name = $(this).data('name');

                Swal.fire({
                    title: 'Deseja escolher este pokémon como inicial?',
                    showCancelButton: true,
                    confirmButtonText: `Escolher`,
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: 'inicio/escolher',
                            method: 'post',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            data: {
                                'poke_id' :  poke_id,
                                'name': name
                            },
                            success: function (data) {
                                Swal.fire({
                                    title: 'Seja bem vindo ao PokeGame!',
                                    showCancelButton: false,
                                    confirmButtonText: `Ir para o Mapa`,
                                }).then((result)=>{
                                    window.location = "/mapa" ;
                                });
                            }
                        });
                    }
                })
            })

        })


    </script>

@endsection

