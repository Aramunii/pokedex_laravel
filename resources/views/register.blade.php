@extends("template.app")
@section('content')
    <div class="page-container page-full">
        <div class="page-content">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4" style="margin-top: 10%">
                        <form action="{{url()->current()}}" method="post">
                            <div class="panel panel-body login-form">
                                <div class="text-center">
                                    <div class="text-center mt-20"><img width="240px" height="90px"
                                                                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/International_Pok%C3%A9mon_logo.svg/640px-International_Pok%C3%A9mon_logo.svg.png"></div>
                                </div>
                                <div class="form-group has-feedback  has-feedback-left" style="margin-top: 30px;">
                                    <input class="form-control" name="email" placeholder="Email" type="text" value=""
                                           required="required">
                                    <div class="form-control-feedback"><i
                                            class="icon-envelop text-muted text-muted"></i></div>
                                    <span class="help-block">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                            </div>
                                        @endif</span>
                                </div>
                                <div class="form-group has-feedback  has-feedback-left">
                                    <input class="form-control" name="password" placeholder="Senha" type="password"
                                           required="required">
                                    <div class="form-control-feedback"><i class="icon-lock2 text-muted text-muted"></i>
                                    </div>
                                    <span class="help-block"></span>
                                </div>
                                <div class="form-group has-feedback  has-feedback-left" style="margin-top: 30px;">
                                    <input class="form-control" name="user" placeholder="Usuário"
                                           type="text" value=""
                                           required="required">
                                    <div class="form-control-feedback"><i
                                            class="icon-user text-muted text-muted"></i></div>
                                    <span class="help-block"></span>
                                </div>
                                <div class="form-group login-options">
                                    <div class="row">

                                        <div class="col-sm-12 text-right">
                                            <a href="/">Já possui uma conta?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pt-20">
                                    <button type="submit" class="btn bg-teal-300 btn-block">Cadastrar</button>
                                </div>
                            </div>
                            {{csrf_field()}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

