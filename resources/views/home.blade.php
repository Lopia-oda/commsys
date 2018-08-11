@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">提案一覧</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <table class="table table-hover table-responsive container">
                    <!--roop-->
                        <tr>
                            <td>
                                <img src="no-image.jpg" class="img-rounded"><br>
                                <div class="text-nowrap text-center"><b>提案中</b></div>
                            </td>
                            <td>
                                <div class="row ">
                                    <div class="col-lg-12"><b>仕入先１</b></div>
                                    <div class="col-lg-12 text-primary"><b>明星『一平ちゃん夜店の焼きそば』</b></div>
                                    <div class="col-xs-12 col-sm-6 col-lg-3" style="background-color:lemonchiffon;">JAN：4902881419291</div>
                                    <div class="col-xs-12 col-sm-6 col-lg-3" style="background-color:lemonchiffon;">期限：2018/10/01 12:00</div>
                                    <div class="col-xs-12 col-sm-6 col-lg-3" style="background-color:lemonchiffon;">提案数量：1,000</div>
                                    <div class="col-xs-12 col-sm-6 col-lg-3" style="background-color:lemonchiffon;">残数量：<font color="red"><b>550</b></font></div>
                                    <div class="col-12">メモメモメモメモメモメ モメモメモメモメモメモメモメモメモメモメモメモメモ</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="no-image.jpg" class="img-rounded"><br>
                                <div class="text-nowrap text-center"><b>申請中</b></div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-lg-12"><b>仕入先１</b></div>
                                    <div class="col-lg-12 text-primary"><b>桃屋『ごはんですよ！』</b></div>
                                    <div class="col-xs-12 col-sm-6 col-lg-3" style="background-color:lemonchiffon;">JAN：</div>
                                    <div class="col-xs-12 col-sm-6 col-lg-3" style="background-color:lemonchiffon;">期限：2018/09/30 12:00</div>
                                    <div class="col-xs-12 col-sm-6 col-lg-3" style="background-color:lemonchiffon;">提案数量：500</div>
                                    <div class="col-xs-12 col-sm-6 col-lg-3" style="background-color:lemonchiffon;">残数量：<font color="red"><b>250</b></font></div>
                                    <div class="col-12">メモメモメモメモメモメモメモメモメモメモメモメモメモメモメモ</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="no-image.jpg" class="img-rounded"><br>
                                <div class="text-nowrap text-center"><b>商談終了</b></div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-lg-12"><b>仕入先１</b></div>
                                    <div class="col-lg-12 text-primary"><b>カルビー『ポテトチップスコンソメ味』</b></div>
                                    <div class="col-xs-12 col-sm-6 col-lg-3" style="background-color:lemonchiffon;">JAN：4901330502881</div>
                                    <div class="col-xs-12 col-sm-6 col-lg-3" style="background-color:lemonchiffon;">期限：2018/10/15 12:00</div>
                                    <div class="col-xs-12 col-sm-6 col-lg-3" style="background-color:lemonchiffon;">提案数量：250</div>
                                    <div class="col-xs-12 col-sm-6 col-lg-3" style="background-color:lemonchiffon;">残数量：<font color="red"><b>0</b></font></div>
                                    <div class="col-12">メモメモメモメモメモメモメモメモメモメモメモメモメモメモメモメモメモメモメモメモメモメモメモメモメモメモメモメモメモメモメモメモメモメモメモメモメモメモメモ</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="no-image.jpg" class="img-rounded"><br>
                                <div class="text-nowrap text-center"><b>申請却下</b></div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-lg-12"><b>仕入先１</b></div>
                                    <div class="col-lg-12 text-primary"><b>はごろもフーズ『スイートコーン缶詰』６缶ケース</b></div>
                                    <div class="col-xs-12 col-sm-6 col-lg-3" style="background-color:lemonchiffon;">JAN：4902560226066</div>
                                    <div class="col-xs-12 col-sm-6 col-lg-3" style="background-color:lemonchiffon;">期限：2018/07/07 12:00</div>
                                    <div class="col-xs-12 col-sm-6 col-lg-3" style="background-color:lemonchiffon;">提案数量：2,000</div>
                                    <div class="col-xs-12 col-sm-6 col-lg-3" style="background-color:lemonchiffon;">残数量：<font color="red"><b>2,000</b></font></div>
                                    <div class="col-12">メモメモメモメモメモメモメモメモメモメモメモ</div>
                                </div>
                            </td>
                        </tr>
                    <!--roop end-->
                </table>
            </div>
        </div>
    </div>
@endsection
