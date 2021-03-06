@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center"> <b>Your Seeds List</b>
                  <form action="{{URL::to('/search')}}" method="post">
                    {{@csrf_field()}}
                <input type="text" name="search">
                <input type="submit" value="SEARCH">  
                </form>
                </div>
          
                <div class="panel-body" style="padding-top: 0;">
                    <button id="btn-add" class="btn btn-primary btn-sm">add new seed</button>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                    <form action="{{ URL:: to('/seeds')}}" method="post">
                        {{@csrf_field()}}
                        <input type="text" name="seedname">
                        <input type="submit" value="add new seed">

                    </form>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                   <ul class="list-group">
                   @foreach ($seeds as $seed)
                   <li class="list-group-item"><a href="{{URL:: to('/seeds')}}/{{$seed->id}}">{{$seed->seedname}}</a></li>
                   @endforeach
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
