
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Poke-Game </title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset ('css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset ('css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset ('css/core.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset ('css/components.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset ('css/colors.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset ('font-awesome/css/font-awesome.min.css')}}">


    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{asset ('js/plugins/loaders/pace.min.js')}}"></script>
    <script type="text/javascript" src="{{asset ('js/core/libraries/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset ('js/plugins/loaders/blockui.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="{{asset ('js/plugins/visualization/d3/d3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset ('js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
    <script type="text/javascript" src="{{asset ('js/plugins/forms/styling/switchery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset ('js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script type="text/javascript" src="{{asset ('js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
    <script type="text/javascript" src="{{asset ('js/plugins/ui/moment/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset ('js/plugins/pickers/daterangepicker.js')}}"></script>
    <script type="text/javascript" src="{{asset ('js/plugins/forms/styling/uniform.min.js')}}"></script>


    <script type="text/javascript" src="{{asset ('js/core/app.js')}}"></script>

    <script type="text/javascript" src="{{asset ('js/plugins/ui/ripple.min.js')}}"></script>

    <!-- /theme JS files -->
</head>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<body class="layout-boxed"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pnotify/3.2.1/pnotify.js" integrity="sha512-dDguQu7KUV0H745sT2li8mTXz2K8mh3mkySZHb1Ukgee3cNqWdCFMFsDjYo9vRdFRzwBmny9RrylAkAmZf0ZtQ==" crossorigin="anonymous"></script>
@stack('script')
@if(Session::has('message'))
    <style>
        .swal-wide{
            width:250px !important;

        }
    </style>
    <script>

        Swal.fire({
            position: 'top-end',
            icon: '{{Session::get('type')}}',
            title: '{{Session::get('message')}}',
            showConfirmButton: false,
            customClass: 'swal-wide',
            timer: 1500,
            backdrop: false
        })
    </script>

@endif

@yield('content')

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
