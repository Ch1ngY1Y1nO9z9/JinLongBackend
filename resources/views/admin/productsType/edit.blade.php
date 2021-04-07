@extends('layouts.app')

@section('css')

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">產品類型 - 編輯</div>
                    <div class="card-body">
                        <form method="POST" action="/admin/product_type/update/{{$item->id}}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="type_name_ch" class="col-2 col-form-label">標題(中)</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" id="type_name_ch" name="type_name_ch" value="{{$item->type_name_ch}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="type_name_en" class="col-2 col-form-label">標題(英)</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" id="type_name_en" name="type_name_en" value="{{$item->type_name_en}}" required>
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary d-block mx-auto">編輯</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
