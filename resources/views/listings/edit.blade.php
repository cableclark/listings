@extends ('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <a  href="/home" class = "btn btn-success mb-2"> Back</a>
            <div class="card">
                
                <div class="card-header">Create a listing</div>
                
                <div class="card-body">
                
                    {!! Form::open(['action' => ['ListingsController@update', $listing->id], 'method'=> 'post']) !!}
                        {{ Form::bsText('name', $listing->name) }}
                        {{ Form::bsText('website', $listing->website) }}
                        {{ Form::bsText('phone', $listing->phone) }}
                        {{ Form::bsText('address', $listing->address) }}
                        {{ Form::bsTextarea('bio', $listing->bio) }}
                        {{Form::hidden("_method", "PUT")}}
                        {{ Form::bsSubmit('submit') }}
                       
                    {!! Form::close() !!}
                    
                 
                </div>
            </div>
        </div>
    </div>


@endsection
