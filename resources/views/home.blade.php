@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                
                    <div class="d-flex justify-content-between mb-5">  
                        <h3> Your listings</h3>
                        <a  href="/listings/create" class = "btn btn-success"> Create new</a>
                    </div> 
                    @if(count($listings) > 0)

                    <table class="table table-striped">
                        <tr>
                            <th>Company</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($listings as $listing)
                        <tr>        
                            <td>{{$listing->name}}</td> 
                        <td>
                            <a  href="/listings/{{$listing->id}}/edit" class = "float-right btn btn-success"> Edit</a</td>
                            <td>
                                    {!! Form::open(['action' => ['ListingsController@update', $listing->id], 'method'=> 'post']) !!}
                                
                                    {{Form::hidden("_method", "DELETE")}}
                                    
                                    <button type="submit" class="btn btn-danger"> Delete </button>
                                   
                                {!! Form::close() !!}
                            </td>
                
                        </tr>  
                        @endforeach
                    </table>
                   @endif
                </div>
            </div>
        </div>
    </div>

@endsection
