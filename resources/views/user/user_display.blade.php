

@extends('layouts.admin_template')

@section('admin_template_navigation')

    <!-- Navigation -->
    <div class="col-sm-12" style="margin-top: -70px; background-color:white"><h5>User Access / General</h5></div>

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <p class="navbar-brand">User : {{Auth::user()->name}}</p>

            
        </div>
        <!-- /.navbar-header -->


@endsection

@section('content')

    
    <h2>All Snippets Display:</h2>


    <div class="col-sm-6" style="float: right;">
        {!!Form::model($snippets,['method'=>'PATCH','action'=>['HomeController@update',$snippets->id]])!!}

            <div>
                {!!Form::label('body','Snippet Markup Display:')!!}
                <div class="snip_disp" style="position:absolute;">
                  {!!Form::textarea('body',null,['rows'=>23,'cols'=>70])!!}
                    <div class="form-group">
                     
                    </div>
                    
                </div>    
            </div>
        
        {!!Form::close()!!}
    </div>

    <div id="snippScroll">
        <style>#snippScroll{overflow-y:scroll;height:500px;background-color: #1325}</style>
        <div class="col-sm-5">
            <table class="table">
                    <thead>    
                      <tr>
                        <th>Nr.</th>
                        <th>Name</th>
                        <th>Snippet Body  ____Klick To Markup Display ---></th>

                      </tr>
                    </thead>

                    @if($all_snippets)

                    <tbody>
                         @foreach($all_snippets as $snippet)
                        <tr>

                            <td>{{$snippet->id}}</td>
                            <td><a href="/user_edit/{{$snippet->id}}">{{$snippet->name}}</a></td> 
                            <td><a href="/user_display/{{$snippet->id}}">{{$snippet->body}}</a></td>



                        </tr>

                         @endforeach
                    </tbody>

                    @endif



            </table>
        </div>
    </div>        



@endsection

