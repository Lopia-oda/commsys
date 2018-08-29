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

        $path = "app/".$request->file('image')->store('public/images');

        $dicker = new Dicker;
        $dicker->user_id = 1;
        $dicker->partner_cd = 1;
        $dicker->trade_name = $request->trade_name;
        $dicker->jan_code = $request->jan_code;
        $dicker->dicker_limit_at = ($request->dicker_limit_at).":00";
        $dicker->stock_quantity = $request->stock_quantity;
        $dicker->remaining_quantity = $request->stock_quantity;
        $dicker->memo = $request->memo;

        $dicker->dicker_status = $request->dicker_status;
        $dicker->image_filepath = basename($path);
        $dicker->image_filename1 = basename($path);
//        $dicker->image_filename2 = basename($path);
//        $dicker->image_filename3 = basename($path);
//        $dicker->image_filename4 = basename($path);
//        $dicker->image_filename5 = basename($path);
//        $dicker->image_filename6 = basename($path);
//        $dicker->image_filename7 = basename($path);
//        $dicker->image_filename8 = basename($path);
//        $dicker->image_filename9 = basename($path);
//        $dicker->image_filename10 = basename($path);

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
        $dicker->dicker_limit_at = ($request->dicker_limit_at).':00';
        $dicker->stock_quantity = $request->stock_quantity;
        $dicker->memo = $request->memo;
        $dicker->save();

        return redirect('dickers/'.$id);
    }
}
