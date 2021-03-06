@extends('admin.master') @section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Text Editors
            <small>Advanced form element</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li>
                <a href="#">Forms</a>
            </li>
            <li class="active">Editors</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">CK Editor
                            <small>Advanced and full of features</small>
                        </h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pad">
                        <form action="{{route('somo.store')}}" method="post">
                        {{csrf_field()}}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên bài viết</label>
                                    <input type="name" class="form-control" id="exampleInputEmail1" placeholder="Nhập vào tên bài viết" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Con số giải mã</label>
                                    <input type="name" class="form-control" id="exampleInputEmail1" placeholder="xx, yy" name="number" required>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Bài viết</label>
                                    <textarea id="editor1" name="editor1" rows="10" cols="80" required>
                                        This is my textarea to be replaced with CKEditor.
                                    </textarea>
                                    <script type="text/javascript">
                                        var editor = CKEDITOR.replace('editor1',{
                                        language:'vi',
                                        filebrowserBrowseUrl :'../../AdminLTE/dist/js/plugin/ckfinder/ckfinder.html',
                                        filebrowserImageBrowseUrl : '../../AdminLTE/dist/js/plugin/ckfinder/ckfinder.html?type=Images',
                                        filebrowserFlashBrowseUrl : '../../AdminLTE/dist/js/plugin/ckfinder/ckfinder.html?type=Flash',
                                        filebrowserUploadUrl : '../../AdminLTE/dist/js/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                        filebrowserImageUploadUrl : '../../AdminLTE/dist/js/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                        filebrowserFlashUploadUrl : '../../AdminLTE/dist/js/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Đăng bài</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>

@endsection