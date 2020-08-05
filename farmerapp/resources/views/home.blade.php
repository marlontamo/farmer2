@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Seeds</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                        
                    
                   <ul class="list-group">
                   @if(count($seeds)>0)    
                   @foreach ($seeds as $seed)
                    <li class="list-group-item">{{$seed->seedname}}</li>
                   @endforeach
                    @else
                    <h2>test</h2>
                    @endif
                </ul>
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
