@extends('admin.master') @section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Số mơ Tables<small></small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li>
                <a href="#">Tables</a>
            </li>
            <li class="active">Quản lý Người dùng</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        @if(Session::has('thanhcong'))
        <div class="alert alert-success">
            {{session('thanhcong')}}
        </div>
        @endif @if(Session::has('edit'))
        <div class="alert alert-success">
            {{session('edit')}}
        </div>
        @endif @if(Session::has('thatbai'))
        <div class="alert alert-danger">
            {{session('thatbai')}}
        </div>
        @endif
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Số mơ</h3>
                        <button type="button" class="btn btn-info btn-xs">
                            <a href="/somo/create" style="color:inherit;">Thêm</a>
                        </button>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên bài viết</th>
                                    <th>Con số giải mã</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($somos as $somo)
                                <tr>
                                    <td>{{$somo->id}}</td>
                                    <td>{{$somo->name}}</td>
                                    <td>{{$somo->number}}</td>
                                    <td>
                                        <button class="delete-modal btn btn-danger btn-xs" data-id="{{$somo->id}}" data-name="{{$somo->name}}">
                                            <span class="glyphicon glyphicon-trash"></span> Delete
                                        </button>
                                    </td>
                                    <td>
                                        <a href="/somo/{{$somo->id}}/edit">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row" style="margin-left:3px;">
                            {{$somos->links()}}
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <div class="deleteContent">
                    Are you Sure you want to delete
                    <span class="dname"></span>
                    <span class="did"></span>?
                </div>
                <br/>
                <p style="font-size:11px;"><i>Lưu ý: </i>Xóa thành viên này đồng nghĩa với việc xóa tất cả dữ liệu liên quan đến thành viên này như: Đánh đề, giao dịch.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn actionBtn" data-dismiss="modal">
                    <span id="footer_action_button" class='glyphicon'> </span>
                </button>
                <button type="button" class="btn btn-warning" data-dismiss="modal">
                    <span class='glyphicon glyphicon-remove'></span> Close
                </button>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/app1.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
@endsection