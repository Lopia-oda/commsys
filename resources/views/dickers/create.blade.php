@extends('layouts.app')

@section('content')
    @section('icon')
        <img src="../img/system/lopita.jpg" class="img-rounded">
    @endsection
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

                <form action="/dickers" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3">送信先</label>
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#destSelectModal">送信先選択</button>
                            <div class="modal fade" id="destSelectModal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
                                <!-- 送信先ダイアログ ここから -->
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="destSelectModal">送信先指定</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            食品部<br>
                                            鮮魚部<br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">キャンセル</button>
                                            <button type="button" class="btn btn-primary btn-sm">決定</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- 送信先ダイアログ ここまで -->
                            </div>
                        </div>
                    </div>
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
                            <input type="text" id="dicker_limit_at" name="dicker_limit_at" class="form-control col-4" placeholder="2020-09-04 12:00">
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
                            <label class="col-sm-12 col-md-3">画像</label>
                            <input type="file" name="image" class="col-md-9 form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" placeholder="ファイル">
                            <!-- 画像ファイルアップロード -->
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