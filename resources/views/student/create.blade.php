@extends('common/layouts')



@section('content')
	<!-- 模板中注释采用:{{-- 这是注释内容 --}} -->
	<!-- 表单提交错误提示 -->
	@include('student/error')

	<!-- 右侧内容区域 -->
	<div class="col-md-9">
		
	    <!-- 自定义内容区域 -->
	    <div class="panel panel-default">
	        <div class="panel-heading">新增学生</div>
	        	@include('student/_form');
	    </div>

	</div>
@endsection
