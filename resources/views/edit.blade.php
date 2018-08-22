@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="post">
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

                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-12 col-md-3">商品名・タイトル</label>
                            <input type="text" name="trade_name" class="form-control col-sm-12 col-md-9" placeholder="メーカー『商品名』等">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-12 col-md-3">JANコード</label>
                            <input type="text" name="jan_code" class="form-control col-sm-12 col-md-9" placeholder="JANコード">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-12 col-md-3">期限</label>
                            <input type="text" name="dicker_limit_at" class="form-control col-4" placeholder="2020/09/04 12:00">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-12 col-md-3">提案数量</label>
                            <input type="text" name="stock_quantity" class="form-control col-4" placeholder="10000">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-12 col-md-3">メモ</label>
                            <textarea name="memo" class="form-control col-sm-12 col-md-9" rows="5" placeholder="希望価格、入数、単位等"></textarea>
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
                </div>
                <div class="card-footer">
                    <div class="float-right">
                        <button type="button" class="btn btn-outline-secondary btn-sm">キャンセル</button>
                        <input type="submit" class="btn btn-danger btn-sm" value="申請">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!--
    $(document).on('change', ':file', function() {
        var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.parent().parent().next(':text').val(label);
    });
    -->
@endsection