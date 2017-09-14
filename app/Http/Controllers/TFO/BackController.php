<?php

namespace App\Http\Controllers\TFO;

use Illuminate\Http\Request;
use Response;


use Auth;
use Hash;
use Illuminate\Support\Facades\Storage;
use Mail;
use Exception;
use App\model\TFOPro;
use App\model\TFOOrder;
use App\model\TFOContact;
use App\model\TFOGift;


use App\Http\Controllers\Controller;
use Validator;
use Carbon\Carbon;
use DB;

class BackController extends Controller
{
    public $perpage = 20;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $user; //protected 是保護的變數,意思是這變數只能在這個 class使用
    public function __construct(Request $request)
    {
        //驚嘆號是否定判斷的意思
        if(!$request->session()->has('key')){
            return redirect('login')->send();
        } else {
            $this->user = $request->session()->get('key');
        }
        DB::enableQueryLog();
    }

    public function Welcome(Request $request){
        return view('TFO.back.welcome');
    }



    /**
     * 產品分類.
     */
    public function Rooms(Request $request){
        $pros = TFOPro::orderBy('updated_at','desc');
        if($request->has('day')) $pros = $pros->where('day',$request->day);
        
        $pros = $pros->paginate($this->perpage);
        return view('TFO.back.pros',compact('pros','request'));
    }
    public function RoomEdit(Request $request,$id){
        $pro = collect();
        if(is_numeric($id) && $id>0){
            if(TFOPro::where('id',$id)->count()>0){
                $pro = TFOPro::find($id);
            } else {
                abort(404);
            }
        }
        return view('TFO.back.pro',compact('pro'));
    }
    public function RoomUpdate(Request $request,$id){

        $data = [
            'dayparts'  => $request->dayparts,
            'sites'     => $request->sites,
            'money'     => $request->money,
            'wine'      => $request->wine,
            'open'      => $request->open,
        ];
        if(is_numeric($id) && $id>0){
            $data['day']       = $request->day;
            $data['rangstart'] = $request->rangstart;
            $data['rangend']   = $request->rangend;
            TFOPro::where('id',$id)->update($data);
        } else {
            // 日期範圍新增多筆
            $arr = [];
            for($i=0 ; $i<count($request->rangstart) ; $i++){
                $data['rangstart'] = $request->rangstart[$i];
                $data['rangend']   = $request->rangend[$i];
                if($request->daystart == ''){
                    $data['day'] = Carbon::today()->format('Y-m-d');
                    array_push($arr,$data);
                } else {
                    $daystart = Carbon::createFromFormat('Y-m-d', $request->daystart);
                    $dayend   = Carbon::createFromFormat('Y-m-d', $request->dayend);
                    do {
                        $data['day'] = $daystart->format('Y-m-d');
                        array_push($arr,$data);
                        $daystart = $daystart->addDay();
                    } while ($daystart->timestamp <= $dayend->timestamp);
                    
                }
            }
            TFOPro::insert($arr);
        }
        return redirect('/TableForOne/rooms')->with('message','編輯完成!');
    }
    public function RoomDelete(Request $request,$id){
        TFOOrder::where('tfopro_id',$id)->delete();
        TFOPro::where('id', $id)->delete();
        return Response::json(['message'=> '分類已刪除'], 200);

    }
    /*
    public function CategoryStore(Request $request,$id){
        $data = [
            'sort' => $request->Sort
        ];
        if(is_numeric($id) && $id>0){
            Cate::where('id',$id)->update($data);
        }
        return Response::json(['message'=> '排序已修改'], 200);
    }*/

    public function Orders(Request $request,$id){
        $order = TFOOrder::orderBy('updated_at','desc');
        $order = $order->get();
        return view('TFO.back.orders',compact('order'));
    }
    public function OrderEdit(Request $request,$id){
        $order = collect();
        if(is_numeric($id) && $id>0){
            if(TFOOrder::where('id',$id)->count()>0){
                $order = TFOOrder::find($id);
            } else {
                abort(404);
            }
        }
        return view('TFO.back.order',compact('order'));
    }
    public function OrderUpdate(Request $request,$id){

        $data = [
            //'paystatus' => $request->paystatus,
            'manage'    => $request->manage,
            //'paytype'   => $request->paytype,
        ];
        if(is_numeric($id) && $id>0){
            TFOOrder::where('id',$id)->update($data);
        } 
        return redirect('/TableForOne/orders/'.$id)->with('message','編輯完成!');
    }
    public function OrderDelete(Request $request,$id){
        TFOOrder::where('id',$id)->delete();
        return Response::json(['message'=> '訂單已刪除'], 200);
    }

    // 禮物卡
    public function Gifts(Request $request){
        $gifts = TFOOrder::orderBy('updated_at','desc');
        $gifts = $gifts->paginate($this->perpage);
        return view('TFO.back.gifts',compact('gifts'));
    }
    public function GiftEdit(Request $request,$id){
        $order = collect();
        if(is_numeric($id) && $id>0){
            if(TFOOrder::where('id',$id)->count()>0){
                $order = TFOOrder::find($id);
            } else {
                abort(404);
            }
        }
        return view('TFO.back.gift',compact('order'));
    }
    public function GiftUpdate(Request $request,$id){

        $data = [
            'dayparts'  => $request->dayparts,
            'sites'     => $request->sites,
            'money'     => $request->money,
            'wine'      => $request->wine,
            'rangstart' => $request->rangstart,
            'rangend'   => $request->rangend,
        ];
        if(is_numeric($id) && $id>0){
            TFOOrder::where('id',$id)->update($data);
        } else {
            if($this->user->giftadd == 0) return redirect('/welcome')->send()->with('message','權限不足!');
            
        }
        return redirect('/TableForOne/orders/'.$id)->with('message','編輯完成!');
    }
    public function GiftDelete(Request $request,$id){
        TFOOrder::where('tfopro_id',$id)->delete();
        return Response::json(['message'=> '訂單已刪除'], 200);

    }






    /**
     * 聯絡我們.
     */
    public function Contacts(Request $request){
        $contacts = TFOContact::orderBy('updated_at','desc');
        
        $contacts = $contacts->paginate($this->perpage);
        return view('TFO.back.contacts',compact('contacts','request'));
    }
    public function ContactEdit(Request $request,$id){
        $contact = collect();
        if(is_numeric($id) && $id>0){
            if(TFOContact::where('id',$id)->count()>0){
                $contact = TFOContact::find($id);
            } else {
                abort(404);
            }
        }
        return view('TFO.back.contact',compact('contact'));
    }
    public function ContactUpdate(Request $request,$id){

        $data = [
            'status' => $request->status,
            'manage' => $request->manage,
        ];
        if(is_numeric($id) && $id>0){
            TFOContact::where('id',$id)->update($data);
        }
        return redirect('/TableForOne/contacts')->with('message','編輯完成!');
    }
    public function ContactDelete(Request $request,$id){
        TFOContact::where('id', $id)->delete();
        return Response::json(['message'=> '留言已刪除'], 200);

    }





    public function Print(Request $request){
        $order = TFOOrder::orderBy('updated_at','desc');
        $order = $order->get();
        

        return view('TFO.back.print',compact('order','request'));
    }
}
