@extends('template.app')
<?php
if (Auth::check()) {
    $nome = Auth::user()->user;
} else {

}
?>
<style>

    .navbar-brand > img {
        margin-top: -7px !important;
        height: 40px !important;
    }
</style>

<div class="navbar navbar-inverse bg-teal-300">
    <div class="navbar-boxed">
        <div class="navbar-header">
            <a class="navbar-brand" href="/home"><img width="90px" height="60px"
                                                      src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/International_Pok%C3%A9mon_logo.svg/640px-International_Pok%C3%A9mon_logo.svg.png"></a>
            <ul class="nav navbar-nav pull-right visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile" class="legitRipple"><i
                            class="icon-tree5"></i></a></li>
            </ul>
        </div>
        <div class="navbar-collapse collapse" id="navbar-mobile">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle legitRipple" data-toggle="dropdown"><img
                            src="https://cdn2.iconfinder.com/data/icons/user-43/128/22-512.png"><span>{{$nome}}</span>
                        <i class="caret"></i></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="/logout"><i class="icon-switch2"></i> Efetuar logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="navbar navbar-default" id="navbar-second">
    <div class="navbar-boxed">
        <ul class="nav navbar-nav no-border visible-xs-block">
            <li><a class="text-center collapsed legitRipple" data-toggle="collapse" data-target="#navbar-second-toggle"><i
                        class="icon-menu7"></i></a></li>
        </ul>
        <div class="navbar-collapse collapse" id="navbar-second-toggle">
            <ul class="nav navbar-nav">
                <li>
                    <a href="/mapa">
                        <i class="icon-map4 position-left"></i>Mapa</a>
                </li>

                <li>
                    <a href="/bolsa">
                        <i class="icon-bag position-left"></i>Bolsa</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@include('sidebar')
