@extends('layouts.main')

@section('container')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Source+Seri8f+Pro:wght@600&display=swap');
</style>
<div class="container-fluid bg-danger">
    <div class="col-md-12">
        <img src="nav/Logo_Del.PNG" alt="">
    </div>
</div>
<div class="container">
    <br>
    <div class="col-md-5">
        <h1 class="text-info" style="font-family: 'Source Serif Pro', serif;">
            [Live Now]
        </h1>
        <h4 class="text-black" style="font-family: 'Caveat', cursive;">
            Open Virtual Tour Institut Teknologi Del
        </h4>
        <br>
        <button type="button" class="btn btn-info">GO</button>
    </div>
        <div class="col-md-7">
                <div class="col-md-12">                
                    <center>
                        <iframe src="https://www.youtube.com/embed/_XGtIM6Pifw?autoplay=1&amp;mute=1&amp;loop=1" id="main-video" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" frameborder="0" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen" width="500px" height="307" scrolling="no"></iframe>
                    </center>
                </div>
        </div>
</div>
<br> <br>
<div class="container">
    <br>
        <div class="col-md-7">
                <div class="col-md-12">                
                    <center>
                        <iframe src="https://www.youtube.com/embed/_XGtIM6Pifw?autoplay=1&amp;mute=1&amp;loop=1" id="main-video" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" frameborder="0" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen" width="500px" height="307" scrolling="no"></iframe>
                    </center>
                </div>
        </div>
        <div class="col-md-5">
                <h1 class="text-info" style="font-family: 'Source Serif Pro', serif;">
                    [Live Now]
                </h1>
                <h4 class="text-black" style="font-family: 'Caveat', cursive;">
                    Open Virtual Tour Institut Teknologi Del
                </h4>
                <br>
                <button type="button" class="btn btn-info">GO</button>
        </div>
</div>

@endsection