@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">文件上传
                    <span style='color:red'>
                        <b>
                            {{-- 重定向 - with()传值 --}}
                            {{ Session::has('msg')? ' - '.Session::get('msg') : '' }}
                            {{ isset($msg)? ' - '.$msg : '' }}
                        </b> 
                    </span>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="file" class="col-md-4 control-label">文件上传</label>

                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control" name="file" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    上传
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
