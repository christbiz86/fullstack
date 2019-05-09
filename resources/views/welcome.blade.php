@extends('layouts.app')

@section('title', 'Sample Test Page')

@section('content')
<div class="content" style="margin-top: 325px;position: absolute">
    <div class="title m-b-md">
        <strong>Contact<br>Us</strong>
    </div>
    <div style="background-color: white;padding: 0 100px;">
        <form method="post" action="#">
            <div style="font-size: 20px;display: inline-block;width: 75%;padding: 25px;">
                If you have any questions about our products or services, please get in touch!
            </div>
            <div class="form-group">
                <label for="pwd" style="float: left">YOUR NAME</label>
                <input style="background-color: lightgray;" type="text" class="form-control" id="name" placeholder="your name">
            </div>
            <div class="form-group">
                <label for="email" style="float: left">YOUR EMAIL</label>
                <input style="background-color: lightgray;" type="email" class="form-control" id="email" placeholder="your email">
            </div>
            <div class="form-group">
                <label for="message" style="float: left">YOUR MESSAGE</label>
                <textarea style="background-color: lightgray;" type="message" class="form-control" id="message" placeholder="your message"></textarea>
            </div>
            <div class="g-recaptcha" data-sitekey="6LcNjaIUAAAAAKWOD6qa7APiE_EvC696yiJgl1oG"></div>
            <div class="myButton"><input type="submit" name="submit" value=""></div>
        </form>
    </div>
</div>
@endsection