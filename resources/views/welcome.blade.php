@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
                <div class="card-header">welcome</div>
                <a href="{{route('login')}}"> Login here</a>

              
            </div>
        </div>
    </div>
</div>
@endsection
