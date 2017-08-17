<?php $__env->startSection('title'); ?>;
	Larevel 5.4 - title
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
	Larevel 5.4 - sidebar
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
	Larevel 5.4 - header
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
	


	
	<!-- 流程控制 -->
	<!-- <?php if($name == 'leeprince'): ?>
		I`m leeprince
	<?php elseif($name == 'leeprince_1'): ?>
		I`m leeprince_1
	<?php else: ?>
		Who I am
	<?php endif; ?> -->
	
	<br>
	
	<!-- <?php if (! ($name != 'leeprince_1')): ?>
		I`m leeprince
	<?php endif; ?> -->

	<!-- for -->
	<!-- <?php for($i = 0 ; $i <= 3 ; $i++): ?>
		<p><?php echo e($i); ?></p>
	<?php endfor; ?>	 -->

	<!-- foreach -->
	<!-- <?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $res): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<p><?php echo e($res['idetify']); ?></p>
		<p><?php echo e($res['exp']); ?></p>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->

	<!-- forelse -->
	
	
	<!-- url('/student/modelUrl') 首字母不大写, 后面保持一致 -->
	<a href="<?php echo e(url('/student/modelUrl')); ?>">url()</a><br>
	<a href="<?php echo e(action('StudentController@modelUrl')); ?>">action()</a><br>
	<a href="<?php echo e(route('model_url')); ?>">route()</a><br>
	

	
	
<?php $__env->stopSection(); ?>



<?php $__env->startSection('footer'); ?>
	Larevel 5.4 - footer
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts/bladeLayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>