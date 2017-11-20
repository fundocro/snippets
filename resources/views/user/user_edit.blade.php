

@extends('layouts.admin_template')

@section('admin_template_navigation')

    <!-- Navigation -->
    <div class="col-sm-12" style="margin-top: -70px; background-color:white"><h5>User Access / Edit</h5></div>

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

<h2>Edit Snippet:</h2>
<div class='row'>

    {!!Form::model($snippets,['method'=>'PATCH','action'=>['HomeController@update',$snippets->id]])!!}

    
        <div class="form-group">
            {!!Form::label('name','Name:')!!}
            {!!Form::text('name',null,['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!!Form::label('body','Snippet:')!!}
            {!!Form::textarea('body',null,['class'=>'form-control','rows'=>15])!!}
        </div>

        <div class="form-group">
            {!!Form::submit('Update Snippet',['class'=>'btn btn-primary'])!!}
        </div>
    
               


    {!!Form::close()!!}
        @if($snippets->id !== 1)
        <div class="form-group">            
            {!!Form::open(['method'=>'DELETE','action'=>['HomeController@destroy',$snippets->id]])!!}
                {!!Form::submit('Delete snippet',['class'=>'btn btn-danger'])!!}
            {!!Form::close()!!}
         </div>
        @endif
</div> 
@endsection

