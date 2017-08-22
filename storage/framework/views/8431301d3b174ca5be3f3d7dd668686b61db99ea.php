<?php $__env->startSection('content'); ?>
	<?php echo $__env->make('common/message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<!-- 自定义内容区域 -->
	<div class="panel panel-default">
	    <div class="panel-heading">学生列表</div>
	    <table class="table table-striped table-hover table-responsive">
	        <thead>
	        <tr>
	            <th>ID</th>
	            <th>姓名</th>
	            <th>年龄</th>
	            <th>性别</th>
	            <th>添加时间</th>
	            <th width="120">操作</th>
	        </tr>
	        </thead>
	        <tbody>
	        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		        <tr>
		            <th scope="row"><?php echo e($student['id']); ?></th>
		            <td><?php echo e($student['name']); ?></td>
		            <td><?php echo e($student['age']); ?></td>
		            <td><?php echo e($student['sex']); ?></td>
		            <td><?php echo e(date('Y-m-d H:i:s', $student['created_at'])); ?></td>
		            <td>
		                <a href="<?php echo e(url('student_view', ['id'=>$student['id']])); ?>">详情</a>
		                <a href="<?php echo e(url('student_update', ['id'=>$student['id']])); ?>">修改</a>
		                <a class="del" data-id="<?php echo e($student['id']); ?>">删除</a>
		            </td>
		        </tr>
		    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	        </tbody>
	    </table>
	</div>

	<!-- 分页  -->
	<div>
		<div>
			<?php echo e($students->render()); ?>

		</div>
	</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
	<script src="<?php echo e(asset('./static/student/del.js')); ?>"></script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('common/layouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>