@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                商談状況詳細
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
                            <label name="trade_name" class="col-sm-12 col-md-9">{{ $dicker->trade_name }}</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-12 col-md-3">JANコード</label>
                            <label name="jan_code" class="col-sm-12 col-md-9">{{ $dicker->jan_code }}</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-12 col-md-3">期限</label>
                            <label name="dicker_limit_at" class="col-4">{{ $dicker->dicker_limit_at->format('Y/m/d H:i') }}</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-12 col-md-3">提案数量</label>
                            <label name="stock_quantity" class="col-4">{{ $dicker->stock_quantity }}</label>
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
                            <label name="memo" class="col-sm-12 col-md-9" rows="5">{{ $dicker->memo }}</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-12 col-md-3">画像</label>
                            <img src="no-image.jpg" class="img-rounded">
                        </div>
                    </div>

                    <div class="float-left">
                        <a href="/dickers" class="btn btn-primary btn-sm">一覧に戻る</a>
                    </div>
                    <div class="float-right">
                        <a href="{{$dicker->id}}/edit" class="btn btn-danger btn-sm">編集</a>
                    </div>
            </div>
        </div>
    </div>
@endsection