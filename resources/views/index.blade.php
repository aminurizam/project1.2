@extends('navi_template.head')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                   @if(\Auth::user()->user_group == 'pelajar')
                    @yield('home')
                  @else
                    @yield('penasihat')
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
