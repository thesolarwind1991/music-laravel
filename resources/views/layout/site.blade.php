<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>{{$title}}</title>
	<link href="{{ asset('css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content=""/>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Oswald:100,400,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<!--end slider -->
		<!--script-->
<script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
<script type="text/javascript" src="{{asset('js/easing.js') }}"></script>
<!--/script-->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
    });
</script>
<!---->

</head>
<body>
<!---header---->
<div class="header">
	 <div class="container">
		  <div class="logo">
			  <a href="{{ route('index') }}"><img src="{{ asset('images/logo.jpg') }}" title="" /></a>
		  </div>
			 <!---start-top-nav---->
			 <div class="top-menu">
				 <div class="search">
					 <form>
					 <input type="text" placeholder="" required="">
					 <input type="submit" value=""/>
					 </form>
				 </div>
				  <span class="menu"> </span>
				   <ul>
						<li class="active"><a href="{{ route('index') }}">Главная</a></li>
                        <li><a href="{{ route('artists') }}">Исполнители</a></li>
                        <li><a href="{{ route('alboms') }}">Альбомы</a></li>
                        <li><a href="{{ route('songs') }}">Песни</a></li>
						<li><a href="{{ route('about') }}">Контакты</a></li>
						<div class="clearfix"> </div>
				 </ul>
			 </div>
			 <div class="clearfix"></div>
					<script>
$("span.menu").click(function(){
    $(".top-menu ul").slideToggle("slow" , function(){
    });
});
					</script>
				<!---//End-top-nav---->
	 </div>
</div>
<!--/header-->
<div class="content">
	 <div class="container">
		 <div class="content-grids">
			 <div class="col-md-8 content-main">
				 <div class="content-grid">
                     @yield('content')
                     <!--<div class="content-grid-info">
						 <img src="images/post1.jpg" alt=""/>
						 <div class="post-info">
						 <h4><a href="single.html">Lorem ipsum dolor sit amet</a>  July 30, 2014 / 27 Comments</h4>
						 <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis.</p>
						 <a href="single.html"><span></span>READ MORE</a>
						 </div>
					 </div>
					 <div class="content-grid-info">
						 <img src="images/post2.jpg" alt=""/>
						 <div class="post-info">
						 <h4><a href="single.html">Lorem ipsum dolor sit amet</a>  July 30, 2014 / 27 Comments</h4>
						 <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis.</p>
						 <a href="single.html"><span></span>READ MORE</a>
						 </div>
					 </div>
					 <div class="content-grid-info">
						 <img src="images/post3.jpg" alt=""/>
						 <div class="post-info">
						 <h4><a href="single.html">Lorem ipsum dolor sit amet</a>  July 30, 2014 / 27 Comments</h4>
						 <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis.</p>
						 <a href="single.html"><span></span>READ MORE</a>
						 </div>
					 </div>-->

				 </div>
			  </div>
			  <div class="col-md-4 content-right">
				 <div class="recent">
					 <h3>Новые исполнители-артисты</h3>
					 <ul>
                         @foreach($artist_d as $art_d)
                           <li><a href="#">{{ $art_d->artist_name }}</a></li>
                         @endforeach
                     </ul>
				 </div>
				 <div class="comments">
					 <h3>Новые песни</h3>

                     <ul>
					    @foreach($artist_song_d as $art_sng)
                         <li><a href="#"><? foreach ($art_sng->artists as $art) {
                             echo $art->artist_name;
                         } ?></a> -
                             <a href="#">{{$art_sng->song_name}}
                         </a></li>
                         @endforeach
                     </ul>
				 </div>
				 <div class="clearfix"></div>
			  </div>
			  <div class="clearfix"></div>
		  </div>
	  </div>
</div>
<!---->
<div class="footer">
	 <div class="container">
	 <p>Copyrights © 2023 Laravel-music Все права защищены | </p>
	 </div>
</div>


