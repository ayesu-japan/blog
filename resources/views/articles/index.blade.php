@extends("layouts.app")

@section("content")
	<div class="container">

		@if(session('info'))
			<div class="alert alert-info">
				{{ session('info') }}
			</div>
		@endif

		{{$articles->links()}}

		@foreach($articles as $article)
			<div class="card mb-2">
				<div class="card-body">
					<h5 class="card-title">
						{{ $article->title }}
					</h5>
					<div class="card-subtitle mb-2 text-muted small">
						By <b>{{ $article->user->name }}</b>,
						{{ $article->created_at->diffForHumans() }}
					</div>
					<p class="card-text">
						{{ $article->body }}
					</p>
					
					<form action="{{ url('/comments/nice') }}" method="post">
						@csrf
						<img src="{{asset('img/nicebutton.png')}}" width="30px">
						<input type="hidden" name="article_id"
						value="{{ $article->id }}">
						<input type="submit" value="いいね"
						class="btn btn-outline-dark">
						<span class="badge">
							{{ $article->nices->count() }}
						</span>
					</form>

					<a class="card-link"
						href="{{ url("/articles/detail/$article->id") }}">
						詳しく &raquo;
					</a>
				</div>
			</div>
		@endforeach

	</div>
@endsection