@push('style')
    <style>
        .modal-body {
            max-height: 450px;
            overflow-y: auto;
        }
    </style>
@endpush

<div id="modal_poke" class="modal fade mt-20">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-center">Capturar pokémon</h5>
            </div>
            <div class="modal-body" id="modal_treatment_body">
               <div class="row">
                   <div class="col-md-12 text-center"><h4 id="poke_name" class="text-uppercase">PIKACHU</h4></div>
                   <div class="col-md-12 text-center"><span class="text-bold"> Level: </span><span id="poke_level">5</span></div>
               </div>
                <div class="row">
                    <div class="col-md-12 text-center"><img src="" id="poke_img"></div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center"><span class="text-bold">Vida: </span> <span id="poke_life">100</span></div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center"><span class="text-bold">Ataque: </span> <span id="poke_atk">100</span></div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center"><span class="text-bold">Defesa: </span> <span id="poke_def">100</span></div>
                </div>
                <div class="row mt-20">
                    <div class="col-md-12 text-center">
                        <input type="hidden" value="" id="poke_id">
                        <a class="btn btn-group bg-danger-300" id="start_battle"> Batalhar</a>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button class="btn bg-teal-400 legitRipple" data-dismiss="modal">
                    <i class="icon-cross"></i> Fechar<span class="legitRipple-ripple" style="left: 56.1996%; top: 78.9474%; transform: translate3d(-50%, -50%, 0px); width: 216.051%; opacity: 0;"></span>
                </button>
            </div>
        </div>
    </div>

    <script>
        $(function () {

            $('#start_battle').on('click',function () {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url : 'batalha/iniciar',
                    method : 'POST',
                    dataType: 'json',
                    data: { poke_id : $('#poke_id').val(), poke_level : $('#poke_level').text()  },
                    success: function (data) {
                        swal.fire('Sucesso','Batalha iniciada com sucesso','sucess')
                    },
                    error: function (data) {
                        swal.fire('Erro','Já existe uma batalha em andamento','error')
                    }
                })
            })

        })


    </script>


</div>
