@extends('layouts.app')

@section('title', 'Sample Test Page')

@section('content')
<div class="content" style="width: 100%;margin-top: 134px;margin-left: 175px;text-align: left;">
    <div>
        <div style="float: left;width: 50%;">
            <div class="m-b-md" style="font-size: 32px;">
                <strong>Make your world nicer</strong>
            </div>
            <div style="width: 400px;">
                <p>My name is Megan Henderson, i'm a freelance ilustrator based in San Fransisco.</p>
            </div>
            <div>
                <a href="#"><img src="{{url('/images/big-button-copy.png')}}"></a>
            </div>
        </div>
        <div style="float: left;width: 50%;">
            <div>
                <img src="{{url('/images/Pear.png')}}">
            </div>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
@endsection