{{--PublicUserController@index--}}

@extends('layouts.app')

@section('content')

   <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Welcome,  feel free to stay as guest or login/register to gain snippet controlls</h4></div>
                
                <div class="panel-body">

                </div>
            </div>
        </div>
    </div>
</div>

  

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
                        <td>{{$snippet->name}}</td>            
                        <td>{{$snippet->body}}</td>
                       
                    </tr> 
                     @endforeach
                </tbody>
            
                @endif
        
        </table>


@endsection

<h5 style="margin-left: 15px;">Public Acess</h5>