<?php if( Session::has('success')): ?>
    <!-- 成功提示框 -->
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong><?php echo e(Session::get('success')); ?></strong>
    </div>
<?php endif; ?>

<?php if( Session::has('fail')): ?>
    <!-- 失败提示框 -->
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong><?php echo e(Session::get('fail')); ?></strong>
    </div>
<?php endif; ?>