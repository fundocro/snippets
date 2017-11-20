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
  
    <h2>Delete Snippets:</h2>
    <div class="col-sm-5">
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
{{--                        <td><a href="/user_edit/{{$snippet->id}}">{{$snippet->name}}</a></td>            --}}
                        <td><a href="/user_edit/{{$snippet->id}}">{{$snippet->name}}</a></td>  
                        <td>{{$snippet->body}}</td>
                        
                        @if($snippet->id !== 1)
                        <td>
                            {!!Form::open(['method'=>'DELETE','action'=>['HomeController@destroy',$snippet->id]])!!}
                                {!!Form::submit('Delete snippet',['class'=>'btn btn-danger'])!!}
                            {!!Form::close()!!}
                        </td>
                        @endif
                    </tr> 
                     @endforeach
                </tbody>
            
                @endif
        
        </table>
    </div>

@endsection



