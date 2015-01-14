<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		{!! HTML::title() !!}
		<script src="{{ asset('packages/orchestra/foundation/components/jquery/jquery.min.js') }}"></script>
		<link media="all" type="text/css" rel="stylesheet" href="{{ Theme::asset('assets/css/style.css') }}">
	</head>
	<body class="story">
		<header id="sidebar">
			<ul id="user_nav">
				<figure class="logo medium">
					<a href="{{ handles('orchestra/story::/') }}">
						{{ memorize('site.name') }}
					</a>
				</figure>
				<div class="menu-main-menu-container">
					<ul id="menu-main-menu" class="menu" style="display: none;">
						<li><a href="{{ handles('orchestra/story::/') }}">Home</a></li>
						<li><a href="{{ handles('orchestra/story::about') }}">About</a></li>
					</ul>
				</div>
			</ul>
			<hgroup>
				@include('orchestra/story::sidebar')
			</hgroup>
		</header>
