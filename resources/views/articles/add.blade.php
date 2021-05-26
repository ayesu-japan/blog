@extends('layouts.app')

@section('content')
	<div class="container">
		@if($errors->any())
			<div class="alert alert-warning">
				<ol>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
				</ol>
			</div>
		@endif
		<form method="post">
			@csrf
			<div class="form-group">
				<label>タイトル</label>
				<input type="text" name="title" class="form-control">
			</div>
			<div class="form-group">
				<label>内容</label>
				<textarea name="body" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<label>種類</label>
				<select class="form-control" name="category_id">
					@foreach($categories as $category)
						<option value="{{ $category['id'] }}">
							{{ $category['name'] }}
						</option>
					@endforeach
				</select>
			</div>
			<input type="submit" value="記事追加"
			class="btn btn-primary">
		</form>
	</div>
@endsection