@include('admin.layout.header')

<div class="ibox float-e-margins">
    <div class="ibox-title">
        <h5>管理员列表</h5>
        <div class="ibox-tools">
            <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
            </a>
            <a class="dropdown-toggle" data-toggle="dropdown" href="table_data_tables.html#">
                <i class="fa fa-wrench"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="table_data_tables.html#">选项1</a>
                </li>
                <li><a href="table_data_tables.html#">选项2</a>
                </li>
            </ul>
            <a class="close-link">
                <i class="fa fa-times"></i>
            </a>
        </div>
    </div>
    <div class="ibox-content">
        <div class="">
            <a onclick="fnClickAddRow();" href="/admin/users/create" class="btn btn-primary ">添加用户</a>
        </div>
        <div id="editable_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="editable_length"></div></div><div class="col-sm-6"><div id="editable_filter" class="dataTables_filter"></div></div></div><table class="table table-striped table-bordered table-hover  dataTable" id="editable" aria-describedby="editable_info">
                <thead>
                <tr role="row">
                    <th class="sorting_asc_disabled text-center" tabindex="0" aria-controls="editable" rowspan="1" colspan="1" aria-sort="ascending"    >用户名称</th>
                    <th class="sorting_asc_disabled text-center" tabindex="0" aria-controls="editable" rowspan="1" colspan="1"    >操作</th>
                </tr>
                </thead>
                <tbody class="text-center">
                    @foreach($user as $key=>$value)
                    <tr class="gradeA even">
                    <td class="sorting_1">{{$value->name}}</td>
                    <td class=" ">未完成</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
            <div class="text-right">
                {{$user->links()}}
            </div>
    </div>
</div>

@include('admin.layout.footer')