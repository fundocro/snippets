{{--HomeController@index--}}

@extends('layouts.admin_template')


@section('admin_template_navigation')
    <!-- Navigation -->
    <div class="col-sm-12" style="margin-top: -70px; background-color:white"><h5>User Access / Delete</h5></div>

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <p class="navbar-brand">Goggy's Snippets</p>

            
        </div>
        <!-- /.navbar-header -->
@endsection

@section('content')
  

@include("layouts.combined")

@endsection



