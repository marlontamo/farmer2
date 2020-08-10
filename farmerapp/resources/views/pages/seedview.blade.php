@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <div class="panel-heading text-center"> <b>{{$seedname->seedname}}</b></div>
            <button id="btn-add" class="btn btn-primary btn-sm" style="padding-top: 0;">add new instruction</button>
            <form action="{{ URL:: to('/instructions')}}" method="post">
                {{@csrf_field()}}
            <input type="hidden" name="seed_id" value="{{$seedname->id}}">
                <input type="text" name="instruction">
                <input type="submit" value="add new instruction">

            </form>
                <div class="panel-body">
                    <h6>Instructions:</h6>
                    <ol class="list-group">
                @foreach ($instructions as $key =>$instruction )
                <a class="list-group-item">{{$instruction->title}}</a>
                @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
