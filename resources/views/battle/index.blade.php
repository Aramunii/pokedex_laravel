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
            <h4>Batalha</h4>
        </div>
        <div class="panel-body">
            <div class="row " id="pokemon">
                <div class="col-md-4">
                    @if($battleData)

                            {!!  $battleData->User_poke !!}

                    @endif
                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                    @if($battleData)

                            {!!  $battleData->Enemy_poke !!}
                    @endif
                </div>
            </div>
        </div>
    </div>



@endsection
