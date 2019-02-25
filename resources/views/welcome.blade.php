@extends('layouts.app')

@section('content')
      
        @foreach($post as $post )

        {!! $post->bio !!}

        @endforeach
        

@endsection    
   

