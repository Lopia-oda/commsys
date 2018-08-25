<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\Dicker;

class DickerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }


    /**
     * 一覧表示
     */
    public function index() {
        $dickers = Dicker::all();
        return view('dickers.index', ['dickers' => $dickers]);
    }


    /**
     * 詳細表示
     */
    public function show(Dicker $dicker) {
        return view('dickers.show', ['dicker' => $dicker]);
    }


    /**
     * 新規登録画面表示
     */
    public function create() {
        return view('dickers.create');
    }


    /**
     * 新規登録処理
     */
    public function store(Request $request) {
        Log::debug('store-start');
        $dicker = new Dicker;
        $dicker->user_id = 1;
        $dicker->partner_cd = 1;
        $dicker->trade_name = $request->trade_name;
        $dicker->jan_code = $request->jan_code;
        $dicker->dicker_limit_at = $request->dicker_limit_at;
        $dicker->stock_quantity = $request->stock_quantity;
        $dicker->remaining_quantity = $request->stock_quantity;
        $dicker->memo = $request->memo;
        $dicker->save();

        return redirect('dickers/'.$dicker->id);
    }


    /**
     * 更新画面
     */
    public function edit($id) {
        $dicker = Dicker::findOrFail($id);
        return view('dickers.edit', ['dicker' => $dicker]);
    }

    /**
     * 更新処理
     */
    public function update(Request $request, $id) {
        $dicker = Dicker::findOrFail($id);
        $dicker->trade_name = $request->trade_name;
        $dicker->jan_code = $request->jan_code;
        $dicker->dicker_limit_at = $request->dicker_limit_at;
        $dicker->stock_quantity = $request->stock_quantity;
        $dicker->memo = $request->memo;
        $dicker->save();

        return redirect('dickers/'.$id);
    }
}
