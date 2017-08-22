
<div class="panel-body">
    <form class="form-horizontal" method='POST' action="">
		
		<!-- 防止 CSRF 攻击 -->
		<?php echo e(csrf_field()); ?>


        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">姓名</label>

            <div class="col-sm-5">
                <input type="text" name='name'  class="form-control" id="name" value="<?php echo e(isset($infos['name'])? $infos['name'] : old('name')); ?>" placeholder="请输入学生姓名">
            </div>
            <div class="col-sm-5">
                <p class="form-control-static text-danger"><?php echo e($errors->first('name')); ?></p>
            </div>
        </div>
        <div class="form-group">
            <label for="age" class="col-sm-2 control-label">年龄</label>

            <div class="col-sm-5">
                <input type="text" name='age' class="form-control" id="age" value="<?php echo e(isset($infos['age'])? $infos['age'] : old('age')); ?>" placeholder="请输入学生年龄">
            </div>
            <div class="col-sm-5">
                <p class="form-control-static text-danger"><?php echo e($errors->first('age')); ?></p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">性别</label>

            <div class="col-sm-5">
        		<?php $__currentLoopData = $sex; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        	        <label class="radio-inline">
        	            <input type="radio" name="sex" value="<?php echo e($k); ?>" <?php echo e(( isset($infos) && (old('sex') == $infos['sex'] || ($infos['sex'] == $v)) )? 'checked' : ''); ?> > <?php echo e($v); ?>

        	        </label>
        	    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="col-sm-5">
                <p class="form-control-static text-danger"><?php echo e($errors->first('sex')); ?></p>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">提交</button>
            </div>
        </div>
    </form>
</div>