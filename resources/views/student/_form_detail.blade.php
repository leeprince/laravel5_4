<table class="table table-bordered table-striped table-hover ">
    <tbody>
    <tr>
        <td width="50%">ID</td>
        <td>{{ $students['id'] }}</td>
    </tr>
    <tr>
        <td>姓名</td>
        <td>{{ $students['name'] }}</td>
    </tr>
    <tr>
        <td>年龄</td>
        <td>{{ $students['age'] }}</td>
    </tr>
    <tr>
        <td>性别</td>
        <td>{{ $students['sex'] }}</td>
    </tr>
    <tr>
        <td>添加日期</td>
        <td>{{ date('Y-m-d H:i:s', $students['created_at']) }}</td>
    </tr>
    <tr>
        <td>最后修改</td>
        <td>{{ date('Y-m-d H:i:s', $students['updated_at']) }}</td>
    </tr>
    </tbody>
</table>