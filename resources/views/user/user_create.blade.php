
@extends('layouts.admin_template')

@section('admin_template_navigation')

    <!-- Navigation -->
    <div class="col-sm-12" style="margin-top: -70px; background-color:white"><h5>User Access / Create</h5></div>

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
<h2>Create Your Snippets Here:</h2>
<div class='row'>
        {!!Form::open(['method'=>'POST','action'=>'HomeController@store'])!!}
    
        <div class="form-group">
            {!!Form::label('name','Name:')!!}
            {!!Form::text('name',null,['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!!Form::label('body','Snippet:')!!}
            {!!Form::textarea('body',null,['class'=>'form-control','rows'=>3])!!}
        </div>

        <div class="form-group">
            {!!Form::submit('Create Snippet',['class'=>'btn btn-primary'])!!}
        </div>

        {!!Form::close()!!}
    
</div>  

<div class='row'>

    </div>

    <div class="col-sm-6">
        <table class="table">
                <thead>    
                  <tr>
                    <th>Nr.</th>
                    <th>Name</th>
                    <th>Snippet Body</th>
                  </tr>
                </thead>
            
                @if($snippets)
            
                <tbody>
                    @foreach($snippets as $snippet)
                    <tr>
                        
                        <td>{{$snippet->id}}</td>
                         <td><a href="/user_edit/{{$snippet->id}}">{{$snippet->name}}</a></td> 
                        <td>{{$snippet->body}}</td>
                     
                    </tr> 
                     @endforeach
                </tbody>
            
                @endif
        
        </table>
    </div>
        
     



    
@endsection

