@extends('layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.7/css/select.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <h4 class="card-header">
                    聯絡我們-管理
                </h4>
                <div class="card-body">
                    <table id="table" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>姓名</th>
                            <th>電話</th>
                            <th>信箱</th>
                            <th>來信時間</th>
                            <th>功能</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($lists as $list)
                            <tr>
                                <td>{{$list->name}}</td>
                                <td>{{$list->phone}}</td>
                                <td>{{$list->email}}</td>
                                <td>{{$list->created_at}}</td>
                                <td>
                                    <a class="btn btn-sm btn-success" href="/admin/contact/{{$list->id}}">查看更多</a>
                                    <button class="btn btn-sm btn-danger" data-listid="{{$list->id}}">刪除</button>
                                    <form class="delete-form" action="/admin/contact/delete/{{$list->id}}" method="POST" style="display: none;" data-listid="{{$list->id}}">
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script>
    $(document).ready(function() {
        var table = $('#table').DataTable({
            "order": [[0,'desc']],
            buttons: [
                    {
                        extend:"excel",
                        text: '匯出為Excel',
                        exportOptions: {
                            columns: [ 0, 1, 2, 3, 4, 5],
                        },
                        filename: function(){
                            var d = new Date().toISOString().substring(0, 6);
                            return '御鼎興醬油-' + d;
                        },
                    }
                ]
        });
        table.buttons().container().appendTo( '#table_wrapper .col-md-6:eq(0)');
    } );

    $('.btn-danger').click(function(){
            var listid = $(this).data("listid");
            if (confirm('確定要刪除此信件？')){
                event.preventDefault();
                $('.delete-form[data-listid="' + listid + '"]').submit();
            }
        });
</script>
@endsection
