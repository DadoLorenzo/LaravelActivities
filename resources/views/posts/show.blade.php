@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">       
                    <div class="card-body">

                        <a  href="/posts/{{$post->id}}/edit" class="btn btn-warning"> Edit </a> 
                            <br>
                            Title: {{ $post->title }} <br>
                            Description: {{ $post->description }} <br>
                            Created At: {{ $post->created_at }}                    
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection