

$(async function () {

    for(i=0;i<4; i++)
    {
        var number = Math.floor(Math.random() * 125);
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

                var user_level =  parseInt($('#user_level').val());
                var max = user_level + 2
                var level = Math.floor(Math.random() * (max - user_level) + user_level);
                console.log(max);
                console.log(level);
                //Aqui você cria o 'container' de cada pokemon, montando um html básico.
                var poke = `<div class='col-md-3'>
                                       <a data-id='${pokemon.id}' data-name='${pokemon.name}' data-level="${level}" class='poke'>
                                    <img popup='tooltip' title='${pokemon.name}' src='${pokemon.sprites.front_default}'>
                                      </a>
                                    </div>`

                //Utilizando a função append , você vai pendurar o html que criou anteriormente no elemento que você definiu, no caso a row de id Pokemon.
                $('#pokemon').append(poke);

            }
        });
    }


    $('.poke').on('click',async function (){

        level = $(this).data('level');
        pokemon_name = $(this).data('name');
        poke_id = $(this).data('id');

        $('#modal_poke').modal()

        var url = 'https://pokeapi.co/api/v2/pokemon/' + poke_id;

        var multiplier = level > 5 ? 5.6 : 1;

        await $.ajax
        ({
            url: url,
            method: 'get',
            dataType: 'json',
            success: function (pokemon) {
                $('#poke_name').text(pokemon_name);
                $('#poke_level').text(level);
                $('#poke_life').text(parseInt(pokemon.stats[0].base_stat * level / multiplier));
                $('#poke_atk').text(parseInt(pokemon.stats[1].base_stat * level / multiplier));
                $('#poke_def').text(parseInt(pokemon.stats[2].base_stat * level / multiplier));
                $('#poke_img').attr('src',pokemon.sprites.front_default);
                $('#poke_id').val(poke_id);
            }
        });

/*
        $.ajax
        ({
            url: 'bolsa/capturar',
            method: 'post',
            data: {'id':poke_id},
            success: function (data) {
                console.log(data);
                swal.fire('Você capturou ',pokemon_name,'success');
            },
            error: function (data)
            {
                swal.fire('Ocorreu um erro','','error');
            }

        });
*/
    })

})

