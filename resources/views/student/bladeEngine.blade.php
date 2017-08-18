@extends('layouts/bladeLayout')


@section('title');
	Larevel 5.4 - title
@endsection

@section('sidebar')
	Larevel 5.4 - sidebar
@endsection

@section('header')
	Larevel 5.4 - header
@endsection


@section('content')
	{{--@parent
	<p>Larevel 5.4 - content</p>

	<!-- 1. 模板中输出变量 -->
	<p>{{ $name }}</p>
	<!-- <p>{{ print_r($arr) }}</p>
	<p>{{ var_dump($arr) }}</p>
	<p>{{ $arr['idetify'] }}</p> -->

	<!-- 2. 模板中调用 php 代码 -->
	<!-- <p>{{ time() }}</p>
	<p>{{ date('Y-m-d H:i:s') }}</p> -->
	<p>{{ in_array($name, $arr) ? 'true': 'false' }}</p>
	<!-- <p>{{ isset($name)? $name : 'defualtName'}}</p>
	<p>{{ $name or 'orName'}}</p> -->

	<!-- 3. 原样输出 -->
	<p>{{ $name.'-name' }}</p>
	<p>@{{ $name.'-name' }}</p>

	<!-- 4. 模板注释 -->
	--}}{{-- 这是注释内容 --}}{{--

	<!-- 5. 包含子视图 -->
	<!-- @include('student/children') -->
	@include('student/children', ['msg' => 'errorCode'])--}}


	
	<!-- 流程控制 -->
	<!-- @if ($name == 'leeprince')
		I`m leeprince
	@elseif ($name == 'leeprince_1')
		I`m leeprince_1
	@else
		Who I am
	@endif -->
	
	<br>
	{{-- @unless 是 @if的取反 --}}
	<!-- @unless($name != 'leeprince_1')
		I`m leeprince
	@endunless -->

	<!-- for -->
	<!-- @for ($i = 0 ; $i <= 3 ; $i++)
		<p>{{$i}}</p>
	@endfor	 -->

	<!-- foreach -->
	<!-- @foreach ($arr as $res)
		<p>{{$res['idetify']}}</p>
		<p>{{$res['exp']}}</p>
	@endforeach -->

	<!-- forelse -->
	{{-- 
	@forelse ($students as $student)
		<p>{{ $student['name']}}</p>
		<p>{{ $student['age']}}</p>
	@empty
		<p>null</p>
	@endforelse
	--}}
	
	<a href="{{ url('/student/modelUrl') }}">url()</a><br>
	<a href="{{ action('StudentController@modelUrl')}}">action()</a><br>
	<a href="{{ route('model_url') }}">route()</a><br>
	

	
	
@endsection



@section('footer')
	Larevel 5.4 - footer
@endsection



