@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                商談情報更新
            </div>
            <div class="card-body">
                <form action="/dickers/{{$dicker->id}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-12 col-md-3">商品名・タイトル</label>
                            <input type="text" id="trade_name" name="trade_name" class="form-control col-sm-12 col-md-9" placeholder="メーカー『商品名』等" value="{{$dicker->trade_name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-12 col-md-3">JANコード</label>
                            <input type="text" id="jan_code" name="jan_code" class="form-control col-sm-12 col-md-9" placeholder="JANコード" value="{{$dicker->jan_code}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-12 col-md-3">期限</label>
                            <input type="text" id="dicker_limit_at" name="dicker_limit_at" class="form-control col-4" placeholder="2020/09/04 12:00" value="{{$dicker->dicker_limit_at}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-12 col-md-3">提案数量</label>
                            <input type="text" id="stock_quantity" name="stock_quantity" class="form-control col-4" placeholder="10000" value="{{$dicker->stock_quantity}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-12 col-md-3">残数量</label>
                            <label name="stock_quantity" class="col-4">{{ $dicker->remaining_quantity }}</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-12 col-md-3">メモ</label>
                            <textarea id="memo" name="memo" class="form-control col-sm-12 col-md-9" rows="5" placeholder="希望価格、入数、単位等">{{$dicker->memo}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="input-group">
                                <label class="col-sm-12 col-md-3">画像</label>
                                <label class="input-group-btn">
                                    <span class="btn btn-primary col-md-12">
                                        ファイル選択<input type="file" style="display:none">
                                    </span>
                                </label>
                                <input type="text" class="form-control col-12" readonly="">
                            </div>
                        </div>
                    </div>
                    <div class="float-left">
                        <a href="/dickers/{{$dicker->id}}" class="btn btn-outline-secondary btn-sm">キャンセル</a>
                    </div>
                    <div class="float-right">
                        <button type="submit" class="btn btn-danger btn-sm">申請</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection