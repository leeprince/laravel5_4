<!DOCTYPE html>
<html>
<head>
	<meta charset ="utf-8">
	<title>leeprinceDemo - <?php echo $__env->yieldContent('title'); ?></title>
	<style type   ="text/css">
		.header{
		width: 1000px;
		height: 150px;
		margin: 0 auto;
		background: #f5f5f5;
		border: 1px solid #ddd;
		}
		.main{
		width: 1000px;
		height: 300px;
		margin: 0 auto;
		margin-top: 15px;
		clear: both;
		}
		.main .sidebar{
		float: left;
		width: 20%;
		height: inherit;
		background: #f5f5f5;
		border: 1px solid #ddd;
		}
		.main .content{
		float:right;
		width: 75%;
		height: inherit;
		background: #f5f5f5;
		border: 1px solid #ddd;
		}
		.footer{
		width: 1000px;
		height: 150px;
		margin: 0 auto;
		margin-top: 15px;
		background: #f5f5f5;
		border: 1px solid #ddd;
		}
	</style>
</head>
<body>
	<div class    ="header">
		<?php $__env->startSection('header'); ?>
		头部
		<?php echo $__env->yieldSection(); ?>
	</div>
	<div class    ="main">
		<div class="sidebar">
			<?php $__env->startSection('sidebar'); ?>
			侧边栏
			<?php echo $__env->yieldSection(); ?>
		</div>
		<div class="content">
			<?php echo $__env->yieldContent('content', '主要内容区域'); ?>
		</div>
	</div>
	<div class    ="footer">
		<?php $__env->startSection('footer'); ?>
		底部
		<?php echo $__env->yieldSection(); ?>
	</div>
</body>
</html>