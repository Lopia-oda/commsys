@extends('layouts.app')
@include('layouts._script')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
<!--
                    <button type="button" class="btn btn-outline-secondary btn-sm">申請中</button>
                    <button type="button" class="btn btn-primary btn-sm">商談中</button>
                    <button type="button" class="btn btn-outline-secondary btn-sm">申請却下</button>
                    <button type="button" class="btn btn-outline-secondary btn-sm">商談終了</button>
-->
                </div>
                <div class="float-right">
                    <a href="/edit" type="button" class="btn btn-danger btn-sm">新規商談</a>
                </div>
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <table class="table table-clickable table-hover table-responsive container">
                    @foreach ($dickers as $dicker)
                        <tr>
                            <td>
                                <div class="text-nowrap text-center"><b>商談中</b></div>
                                <img src="no-image.jpg" class="img-rounded"><br>
                                <a href="/detail/{{$dicker->id}}" type="button" class="btn btn-default btn-sm">詳細</a>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-lg-12"><b>{{ $dicker->user_id }}</b></div>
                                    <div class="col-lg-12 text-primary"><b>{{ $dicker->trade_name }}</b></div>
                                    <div class="col-xs-12 col-sm-6 col-lg-3" style="background-color:lemonchiffon;">JAN：{{ $dicker->jan_code }}</div>
                                    <div class="col-xs-12 col-sm-6 col-lg-3" style="background-color:lemonchiffon;">期限：{{ $dicker->dicker_limit_at->format('Y/m/d H:i') }}</div>
                                    <div class="col-xs-12 col-sm-6 col-lg-3" style="background-color:lemonchiffon;">提案数量：{{ $dicker->stock_quantity }}</div>
                                    <div class="col-xs-12 col-sm-6 col-lg-3" style="background-color:lemonchiffon;">残数量：<span style="color:red;"><b>{{ $dicker->remaining_quantity }}</b></span></div>
                                    <div class="col-12">{{ $dicker->memo }}</div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
