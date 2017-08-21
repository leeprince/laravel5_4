@extends('common/layouts')



@section('content')
	<!-- 模板中注释采用:{{-- 这是注释内容 --}} -->
	<!-- 表单提交错误提示 -->
	@include('student/error')

	<!-- 右侧内容区域 -->
	<div class="col-md-9">
		
	    <!-- 自定义内容区域 -->
	    <div class="panel panel-default">
	        <div class="panel-heading">修改学生 - {{ $id }}</div>
	        	@include('student/_update_form')
	    </div>

	</div>
@endsection
