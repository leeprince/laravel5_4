@if(count($errors) > 0)
	{{-- 仅提示所有错误信息中的第一条 --}}
	<div class="alert alert-danger">

	    <ul>
	        <li>{{ $errors->first() }}</li>
	    </ul>
	</div>

	{{-- 所有错误信息 --}}
	<div class="alert alert-danger">
	    <ul>
	    @foreach($errors->all() as $error)
	        <li>{{ $error }}</li>
	    @endforeach
	    </ul>
	</div>
@endif
