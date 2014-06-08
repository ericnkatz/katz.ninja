<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title>@yield('title') - Eric Nikolay Katz</title>
  
      <meta name="viewport" content="width=device-width">
      <link href="{{ asset(theme_path('css/normalize.css')) }}" rel="stylesheet" media="screen">
      <link href="{{ asset(theme_path('css/style.css')) }}" rel="stylesheet" media="screen">
      <script src="/js/vendor/modernizr-2.6.2.min.js"></script>
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  </head>
    <body class="loading">
        <article class="content">
          <h1>Eric Nikolay Katz</h1>
          <div class="main">
            @yield('content')
            
          </div>
        </article>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
        <script src="/js/plugins.js"></script>
        <script src="/js/main.js"></script>

  <script type="text/javascript">
    $(window).load( function () {
      $('body').removeClass('loading');
    });
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-8504613-1']);
    _gaq.push(['_trackPageview']);
  
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  
  </script>    
  </body>
</html>
