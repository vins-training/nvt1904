<div class="container">
	<h1>You have {{count($news)}} new(s)</h1>
    <div class="col-md-8">
        <ul class="list-group">
        @foreach($news as $new)
        	<li class="list-group-item">
            <h1>{{$new->title}}</h1>
            <p>{{$new->content}}</p>
            </li>
         @endforeach
        </ul>
    </div>
</div>
