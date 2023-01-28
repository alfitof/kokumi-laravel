@extends('template')

@section('section')
    <div class="circle"></div>

        <div class="content">
            <div class="textBox">
                <h2>It's not just Bobba<br>It's <span> KOKUMI コクミ</span></h2>
                <a href="#">Order Now</a>
            </div>
            <div class="imgBox">
                <img src="images/rainbow miring.png" class='kokumi'>
            </div>
        </div>
        <ul class='thumb'>
            <li><img src="images/rainbow mini.png" onclick="imgSlider('images/rainbow miring.png');changeCircleColor('#9b9acb');changeTextboxColor('#9b9acb');changeKokumiColor('#9b9acb')"></li>
            <li><img src="images/cheese mini.png" onclick="imgSlider('images/cheese miring.png');changeCircleColor('#ff9821');changeTextboxColor('#ff9821');changeKokumiColor('#ff9821')"></li>
            <li><img src="images/88rising mini.png" onclick="imgSlider('images/88rising miring.png');changeCircleColor('#f5b96f');changeTextboxColor('#f5b96f');changeKokumiColor('#f5b96f')"></li>
            <li><img src="images/boba mini.png" onclick="imgSlider('images/boba miring.png');changeCircleColor('#e0d8c2');changeTextboxColor('#e0d8c2');changeKokumiColor('#e0d8c2')"></li>
        </ul>
        <ul class='sci'>
            <li><a href="#"><img src="images/facebook.png"></a></li>
            <li><a href="#"><img src="images/instagram.png"></a></li>
            <li><a href="#"><img src="images/twitter.png"></a></li>
        </ul>
@endsection
