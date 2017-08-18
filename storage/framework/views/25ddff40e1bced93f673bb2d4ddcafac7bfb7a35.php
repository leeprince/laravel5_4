<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Learn Laravel - <?php echo $__env->yieldContent('title'); ?></title>
    <!-- Bootstrap CSS 文件 -->
    <link rel="stylesheet" href="<?php echo e(asset('./static/bootstrap/css/bootstrap.min.css')); ?>">

    <?php echo $__env->yieldContent('style'); ?>
</head>
<body>

<?php $__env->startSection('header'); ?>
    <!-- 头部 -->
    <div class="jumbotron">
        <div class="container">
            <h2>轻松学会Laravel</h2>

            <p> - 玩转Laravel表单</p>
        </div>
    </div>
<?php echo $__env->yieldSection(); ?>

<!-- 中间内容区局 -->
<div class="container">
    <div class="row">

        <?php $__env->startSection('sidebar'); ?>
            <!-- 左侧菜单区域   -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item active">学生列表</a>
                    <a href="#" class="list-group-item">新增学生</a>
                </div>
            </div>
        <?php echo $__env->yieldSection(); ?>

        <!-- 右侧内容区域 -->
        <div class="col-md-9">

            <?php echo $__env->yieldContent('content'); ?>

        </div>
    </div>
</div>

<?php $__env->startSection('footer'); ?>
    <!-- 尾部 -->
    <div class="jumbotron" style="margin:0;">
        <div class="container">
            <span>  @2016  imooc</span>
        </div>
    </div>
<?php echo $__env->yieldSection(); ?>

<!-- jQuery 文件 -->
<script src="<?php echo e(asset('./static/jquery/jquery.min.js')); ?>"></script>
<!-- Bootstrap JavaScript 文件 -->
<script src="<?php echo e(asset('./static/bootstrap/js/bootstrap.min.js')); ?>"></script>

<?php echo $__env->yieldContent('js'); ?>
</body>
</html>