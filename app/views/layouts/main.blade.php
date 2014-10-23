<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
 
	<title></title>
 
	{{ HTML::style('css/foundation.min.css') }}
    {{ HTML::style('css/app.css') }}

    {{ HTML::script('js/modernizr.js') }}
</head>
<body>
    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="/">Velorem</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
        <ul class="right">
            <li>{{ HTML::link('people/', 'People') }}</li>
        </ul>
      </section>
    </nav>   
 
    <div class="container">
        @if(Session::has('alert'))
            <div class="alert-box alert" data-alert>
                {{ Session::get('alert') }}
                <a href="#" class="close">&times;</a>
            </div>
        @elseif(Session::has('success'))
            <div class="alert-box success" data-alert>
                {{ Session::get('success') }}
                <a href="#" class="close">&times;</a>
            </div>
        @endif

        {{ $content }}
    </div>

	{{ HTML::script('js/jquery.js') }}
	{{ HTML::script('js/foundation.min.js') }}
    {{ HTML::script('js/foundation.alert.js') }}
	<script>
		$(document).foundation();
	</script>

</body>
</html>
