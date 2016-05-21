<html>
<head>
  <title> {{ config('blog.title') }} </title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<h1>{{ config('blog.title') }}</h1>
		<h5>Page {{ $news->currentPage() }} of {{ $news->lastPage() }} </h5>
		<br>
		<ul>
		  @foreach($news as $new)
		     <li>
		        <a href="/news/show/{{ $new->slug }}" >{{ $new->title }}</a>	
		        <em>({{ $new->published_at }})</em>
		        <p>
		          {{ str_limit($new->content) }}
		        </p>	     
		  	 </li>
		  @endforeach
		  <hr>
		  {!! $news->render() !!}
		</ul>
		
		
	</div>
</body>
</html>