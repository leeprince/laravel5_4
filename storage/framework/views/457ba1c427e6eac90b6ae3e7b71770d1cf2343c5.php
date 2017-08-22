<?php $__env->startSection('content'); ?>

	<!-- 右侧内容区域 -->
	<div class="col-md-9">
		
	    <!-- 自定义内容区域 -->
	    <div class="panel panel-default">
	        <div class="panel-heading"><a href="<?php echo e(url('student_index')); ?>">学生列表</a> >> 学生详情 - <?php echo e($students['id']); ?></div>
	        	<?php echo $__env->make('student/_form_detail', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	    </div>

	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('common/layouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>