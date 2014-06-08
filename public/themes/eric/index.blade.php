@extends(theme_view('layout'))

@section('title')
  {{ site_title() }}
@stop

@section('content')
	<h2>I am a <i class="fa fa-code"></i> web developer living in Columbus, Ohio!</h2>
        <a href="http://30Lines.com/" class="thirtylines-link"><span class="thirty">30</span>Lines</a>
        <p class="position">Senior Web Developer at 30lines.</p>
	<a href="/writings">Writings</a>
@stop
