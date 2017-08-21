<?php $__env->startSection('content'); ?>
	<!-- 模板中注释采用: -->
	<!-- 表单提交错误提示 -->
	<?php echo $__env->make('student/error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<!-- 右侧内容区域 -->
	<div class="col-md-9">
		
	    <!-- 自定义内容区域 -->
	    <div class="panel panel-default">
	        <div class="panel-heading">修改学生 - <?php echo e($id); ?></div>
	        	<?php echo $__env->make('student/_update_form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	    </div>

	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('common/layouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>