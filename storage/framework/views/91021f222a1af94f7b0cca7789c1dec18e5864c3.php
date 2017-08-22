<table class="table table-bordered table-striped table-hover ">
    <tbody>
    <tr>
        <td width="50%">ID</td>
        <td><?php echo e($students['id']); ?></td>
    </tr>
    <tr>
        <td>姓名</td>
        <td><?php echo e($students['name']); ?></td>
    </tr>
    <tr>
        <td>年龄</td>
        <td><?php echo e($students['age']); ?></td>
    </tr>
    <tr>
        <td>性别</td>
        <td><?php echo e($students['sex']); ?></td>
    </tr>
    <tr>
        <td>添加日期</td>
        <td><?php echo e(date('Y-m-d H:i:s', $students['created_at'])); ?></td>
    </tr>
    <tr>
        <td>最后修改</td>
        <td><?php echo e(date('Y-m-d H:i:s', $students['updated_at'])); ?></td>
    </tr>
    </tbody>
</table>