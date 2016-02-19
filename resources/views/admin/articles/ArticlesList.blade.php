@extends("admin.layouts.headers")

@section('content')

@extends("admin.layouts.usercard")

@extends("admin.layouts.sidebar")

@extends("admin.layouts.nav")

@extends("admin.layouts.title")

        <!-- Removing search and results count filter -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Removing search and results count filter</h3>

        <div class="panel-options">
            <a href="#" data-toggle="panel">
                <span class="collapse-icon">&ndash;</span>
                <span class="expand-icon">+</span>
            </a>
            <a href="#" data-toggle="remove">
                &times;
            </a>
        </div>
    </div>
    <div class="panel-body">
        <script type="text/javascript">
            $(function () {
                // Replace checkboxes when they appear
                var $state = $("#example-2 thead input[type='checkbox']");
                $("#example-2").on('draw.dt', function () {
                    cbr_replace();
                    $state.trigger('change');
                });

                // Script to select all checkboxes
                $state.on('change', function (ev) {
                    var $chcks = $("#example-2 tbody input[type='checkbox']");
                    if ($state.is(':checked')) {
                        $chcks.prop('checked', true).trigger('change');
                    }
                    else {
                        $chcks.prop('checked', false).trigger('change');
                    }
                });
            });
        </script>

        <table class="table table-bordered table-striped" id="example-2">
            <thead>
            <tr>
                <th class="no-sorting">
                    <input type="checkbox" class="cbr">
                </th>
                <th>编号</th>
                <th>标题</th>
                <th>缩略图</th>
                <th>用户</th>
                <th>状态</th>
                <th>创建时间</th>
                <th>更新时间</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody class="middle-align">
            @foreach($articlesLists as $articlesList)
                <tr>
                    <td>
                        <input type="checkbox" class="cbr">
                    </td>
                    <td>{{$articlesList->id}}{{--<span class="label label-success">New Applicant</span>--}}</td>
                    <td>{{$articlesList->title}}</td>
                    <td>{{$articlesList->thumb or '无'}}</td>
                    <td>{{$articlesList->name}}</td>
                    @if($articlesList->status==1)
                        <td style="color: forestgreen;">正常</td>
                    @elseif($articlesList->status==-1)
                        <td style="color: red;">禁用</td>
                    @elseif($articlesList->status==-2)
                        <td>回收站</td>
                    @endif
                    <td>{{$articlesList->create_at}}</td>
                    <td>{{$articlesList->update_at}}</td>
                    <td>
                        <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">编辑</a>
                        <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">删除</a>
                        <a href="#" class="btn btn-warning btn-sm btn-icon icon-left">禁用</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="row">
            <div clas="col-xs-6">
                <div class="dataTables_info">当前为第{{$articlesLists->currentPage()}}/{{$articlesLists->lastPage()}}页
                    共{{$articlesLists->total()}}条记录
                </div>
            </div>
            <div clas="col-xs-6">
                <div class="dataTables_paginate paging_simple_numbers">
                    <?php echo $articlesLists->render(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

@extends("admin.layouts.chat")

        <!-- Imported styles on this page -->
<link rel="stylesheet" href="{{asset('js/datatables/dataTables.bootstrap.css')}}">

<!-- Bottom Scripts -->
<script src="{{asset('js/datatables/js/jquery.dataTables.min.js')}}"></script>

<!-- Imported scripts on this page -->
<script src="{{asset('js/datatables/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('js/datatables/yadcf/jquery.dataTables.yadcf.js')}}"></script>
<script src="{{asset('js/datatables/tabletools/dataTables.tableTools.min.js')}}"></script>

@endsection