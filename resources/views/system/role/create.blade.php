@extends('layouts.content')
@section('title','角色管理')

@section('content')
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">角色管理</h3>
            </div>
            <div class="panel-body">
                <div class="example">
                    <div class="btn-group hidden-xs" id="exampleTableEventsToolbar" role="group">
                        <button type="button" class="btn btn-outline btn-default">
                            增加
                        </button>
                    </div>
                    <table id="role_table" data-height="500" data-mobile-responsive="true">
                        <thead>
                        <tr>
                            <th data-field="id">ID</th>
                            <th data-field="name">名称</th>
                            <th data-field="price">价格</th>
                        </tr>
                        </thead>
                    </table>
                </div>

            </div>

        </div>
    </div>

@stop


@section('script')
    <script>


        TableRun(
            $("#role_table"),
            "js/demo/bootstrap_table_test.json",
            [{
                field: 'id',
                title: 'id',
                halign: 'center',
                align: 'center'

            }, {
                field: 'name',
                title: '名字'
            }, {
                field: 'column1',
                title: '性别'
            }, {
                field: 'id',
                title: '操作',
                width: '300px',
                formatter: function (value, row, index) {
                    return [
                        '<button class="btn btn-outline btn-default">编辑</button>',
                        '<button class="btn btn-outline btn-default">删除</button>',
                    ].join('');
                }
            }]);
    </script>
@stop
