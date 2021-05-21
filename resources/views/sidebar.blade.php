@php

    $user = auth()->user()

@endphp

@section('column')
    <div class="sidebar sidebar-main sidebar-default">
        <div class="sidebar-content">
            <div class="sidebar-category sidebar-category-visible">
                <div class="category-content no-padding">
                    <ul class="navigation navigation-main navigation-accordion">


                        <li class="navigation-header text-center"><span>{{$user->user}}</span> <i class="icon-menu"
                                                                                                  title="Menu principal"></i>
                        </li>
                        <li><a class="legitRipple"><i class="icon-user"></i><span
                                    class="text-bold">Level:</span><span> {{$user->level}}</span></a></li>
                        <li><a class="legitRipple"><i class="icon-stats-growth2"></i><span class="text-bold">Experiência:</span><span> {{$user->xp}} / {{$user->xp_max}}</span></a>
                        </li>
                        <li class="navigation-divider"></li>
                        <li class="navigation-header text-center"><span>Time</span> <i class="icon-menu"
                                                                                       title="Menu principal"></i></li>
                        <div class='row has-padding'>
                            {!! $user->Team_Info !!}

                        </div>
                    <input type="hidden" id="user_level" value="{{$user->level}}">
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
