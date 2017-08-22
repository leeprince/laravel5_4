@extends('common/layouts')



@section('content')

	<!-- 右侧内容区域 -->
	<div class="col-md-9">
		
	    <!-- 自定义内容区域 -->
	    <div class="panel panel-default">
	        <div class="panel-heading"><a href="{{ url('student_index') }}">学生列表</a> >> 学生详情 - {{ $students['id'] }}</div>
	        	@include('student/_form_detail')
	    </div>

	</div>
@endsection
