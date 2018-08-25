@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                新規商談登録
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="/dickers" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-12 col-md-3">商品名・タイトル</label>
                            <input type="text" id="trade_name" name="trade_name" class="form-control col-sm-12 col-md-9" placeholder="メーカー『商品名』等">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-12 col-md-3">JANコード</label>
                            <input type="text" id="jan_code" name="jan_code" class="form-control col-sm-12 col-md-9" placeholder="JANコード">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-12 col-md-3">期限</label>
                            <input type="text" id="dicker_limit_at" name="dicker_limit_at" class="form-control col-4" placeholder="2020/09/04 12:00">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-12 col-md-3">提案数量</label>
                            <input type="text" id="stock_quantity" name="stock_quantity" class="form-control col-4" placeholder="10000">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-12 col-md-3">メモ</label>
                            <textarea id="memo" name="memo" class="form-control col-sm-12 col-md-9" rows="5" placeholder="希望価格、入数、単位等"></textarea>
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
                    <div class="float-right">
                        <a href="/home" class="btn btn-outline-secondary btn-sm">キャンセル</a>
                        <button type="submit" class="btn btn-danger btn-sm">申請</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection