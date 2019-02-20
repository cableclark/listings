@extends ('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a listing</div>

                <div class="card-body">
                
                        {!! Form::open(['action' => 'ListingsController@store', 'method'=> 'post']) !!}
   
                        {{ Form::bsText('name') }}
                        {{ Form::bsText('email') }}
                        {{ Form::bsText('phone') }}
                        {{ Form::bsText('address') }}
                        {{ Form::bsTextarea('bio') }}
                        {{ Form::bsSubmit('submit', ['class'=> 'btn btn-primary']) }}
                    {!! Form::close() !!}
                    
                 
                </div>
            </div>
        </div>
    </div>


@endsection
