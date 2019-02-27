@extends ('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <a  href="/home" class = "btn btn-success mb-2"> Back</a>
            <div class="card">
                
                <div class="card-header"> {{$listings->name}}</div>
                
                <div class="card-body">
        
                    
                 
                </div>
            </div>
        </div>
    </div>


@endsection
