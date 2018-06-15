<?php

namespace App\Http\Controllers\Dark2;

use Illuminate\Http\Request;
use Response;


use Auth;
use Hash;
use Illuminate\Support\Facades\Storage;
use Mail;
use Exception;
use App\model\DarkContact;
use App\model\d2coupon;
use App\model\d2order;
use App\model\d2pro;
use App\model\d2xls;


use App\Http\Controllers\Controller;
use Validator;
use Carbon\Carbon;
use DB;
use Excel;

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


    /**
     * 聯絡我們.
     */
    public function Contacts(Request $request){
        $contacts = DarkContact::orderBy('updated_at','desc');
        
        $contacts = $contacts->paginate($this->perpage);
        return view('Dark2.backend.contacts',compact('contacts','request'));
    }
    public function ContactEdit(Request $request,$id){
        $contact = collect();
        if(is_numeric($id) && $id>0){
            if(DarkContact::where('id',$id)->count()>0){
                $contact = DarkContact::find($id);
            } else {
                abort(404);
            }
        }
        return view('Dark2.backend.contact',compact('contact'));
    }
    public function ContactUpdate(Request $request,$id){

        $data = [
            'status' => $request->status,
            'manage' => $request->manage,
        ];
        if(is_numeric($id) && $id>0){
            DarkContact::where('id',$id)->update($data);
        }
        return redirect('/dark2/contacts')->with('message','編輯完成!');
    }
    public function ContactDelete(Request $request,$id){
        DarkContact::where('id', $id)->delete();
        return Response::json(['message'=> '留言已刪除'], 200);

    }
    /**
     * XLS data.
     */
    public function BackMes(Request $request){
        /*
        if($request->isMethod('post') && $request->has('id')){
            foreach($request->id as $row){
                d2xls::where('id',$row)->update(['is_sent'=>1]);
            }
        }*/
        $mes = d2xls::where('id','>',0);
        if($request->has('search')){
            $search = $request->search;
            $mes = $mes->whereRaw("(
                name LIKE '%{$search}%' OR 
                tel LIKE '%{$search}%' OR 
                email LIKE '%{$search}%' OR 
                (SELECT COUNT(id) FROM(d2coupon) WHERE code LIKE '%{$search}%' AND d2coupon.xls_id=d2xls.id)
            )");
        }
        
        $mes = $mes->paginate($this->perpage);
        //dd(DB::getQueryLog());
        return view('Dark2.backend.BackMes',compact('mes','request'));
    }
    public function sendUpdate(Request $request,$id){
        d2xls::where('id',$id)->update([
            'is_sent' => $request->send
        ]);
        return Response::json(['message'=> '發送狀態已更新'], 200);
    }
    public function sendManageUpdate(Request $request,$id){
        d2xls::where('id',$id)->update([
            'manage' => $request->manage
        ]);
        return Response::json(['message'=> '已更新'], 200);
    }
    public function CanelCoupon(Request $request){
        $id   = $request->xls_id;
        $code = $request->code;
        d2coupon::where('xls_id',$id)->where('code',$code)->update([
            'order_id' => 0
        ]);
        return Response::json(['message'=> '已更新'], 200);
    }
    public function SentCouponCode(Request $request,$id){
        if($request->isMethod('post')){
            $id = $id;
            $xls     = d2xls::find($id);
            $coupons = d2coupon::where('xls_id',$id)->get();
            $data = [
                'xls'     => $xls,
                'coupons' => $coupons,
            ];
            Mail::send('Dark2.email.coupon',$data,function($m) use ($data){
                $m->from('dininginthedark@surpriselab.com.tw', '無光晚餐第二季');
                $m->sender('dininginthedark@surpriselab.com.tw', '無光晚餐第二季');
                $m->replyTo('dininginthedark@surpriselab.com.tw', '無光晚餐第二季');

                $m->to($data['xls']->email, $data['xls']->name);
                $m->subject('無光晚餐第二季-劃位序號信件!');
            });
            d2xls::where('id',$id)->update(['is_sent'=>1]);
            return Response::json(['message'=> 'success'], 200);
        }
        return Response::json(['message'=> 'error'], 200);
    }


    /**
     * 產品分類.
     */
    public function Pros(Request $request){
        if($request->isMethod('post') && $request->has('id')){
            foreach($request->id as $row){
                d2pro::where('id',$row)->update(['open'=>1]);
            }
        }
        $pros = d2pro::where('id','>',0);
        if($request->has('day')) $pros = $pros->where('day',$request->day);
        if($request->has('dayparts')) $pros = $pros->where('dayparts',$request->dayparts);
        if($request->has('order')){
            $order = explode('|',$request->order);
            if(count($order)>0){
                $pros = $pros->OrderBy($order[0],$order[1]);
            }
        } else { $pros = $pros->orderBy('updated_at','desc'); }
        
        $pros = $pros->paginate($this->perpage);
        return view('Dark2.backend.pros',compact('pros','request'));
    }
    public function ProEdit(Request $request,$id){
        $pro = collect();
        if(is_numeric($id) && $id>0){
            if(d2pro::where('id',$id)->count()>0){
                $pro = d2pro::find($id);
            } else {
                abort(404);
            }
        }
        return view('Dark2.backend.pro',compact('pro'));
    }
    public function ProUpdate(Request $request,$id){

        $data = [
            'dayparts'   => $request->dayparts,
            'sites'      => $request->sites,
            'money'      => $request->money,
            'open'       => $request->open,
            'cash'       => $request->cash,
        ];
        if(is_numeric($id) && $id>0){
            $data['day']       = $request->day;
            $data['rangstart'] = $request->rangstart;
            $data['rangend']   = $request->rangend;
            d2pro::where('id',$id)->update($data);
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
            d2pro::insert($arr);
        }
        return redirect('/dark2/pros')->with('message','編輯完成!');
    }
    public function ProDelete(Request $request,$id){
        d2order::where('pro_id',$id)->delete();
        d2pro::where('id', $id)->delete();
        return Response::json(['message'=> '營業日已刪除'], 200);

    }


    /**
     * coupon
     */
    public function Coupons(Request $request){

        $coupons = d2coupon::orderBy('updated_at','desc');
        //if($request->has('day')) $coupons = $coupons->where('created_at','like',$request->day.'%');
        if($request->has('search')){
            $search = $request->search;
            $coupons = $coupons->whereRaw("(
                code LIKE '%{$search}%'
            )");
        }

        $coupons = $coupons->paginate($this->perpage);
        return view('Dark2.backend.coupons',compact('coupons','request'));
    }
    public function CouponDelete(Request $request,$id){
        d2coupon::where('id', $id)->delete();
        return Response::json(['message'=> '已刪除'], 200);

    }







    /**
     * orders.
     */
    public function Orders(Request $request,$id){
        $order = d2order::orderBy('updated_at','desc')->where('pro_id',$id);
        $order = $order->get();
        return view('Dark2.backend.orders',compact('order'));
    }
    public function OrderEdit(Request $request,$id){
        $order = collect();
        if(is_numeric($id) && $id>0){
            if(d2order::where('id',$id)->count()>0){
                $order = d2order::leftJoin('d2pro', 'd2pro.id', '=', 'd2order.pro_id')->select('d2order.id','day','dayparts','rangend','rangstart','name','tel','email','sn','meat','notes','pay_type','pay_status','manage','result','pople')->find($id);
            } else {
                abort(404);
            }
        }
        return view('Dark2.backend.order',compact('order'));
    }
    public function OrderUpdate(Request $request,$id){

        $data = [
            'pay_status' => $request->pay_status,
            'manage'    => $request->manage,
            'pay_type'   => $request->pay_type,
        ];
        if(is_numeric($id) && $id>0){
            d2order::where('id',$id)->update($data);
            $order = d2order::find($id);
        } 
        if($request->has('qxx') && $request->qxx != ''){
            return redirect('/dark2/print?'.$request->qxx)->with('message','編輯完成!');
        } else {
            return redirect('/dark2/orders/'.$order->tfopro_id)->with('message','編輯完成!');
        }
    }
    public function OrderDelete(Request $request,$id){
        d2order::where('id',$id)->delete();
        return Response::json(['message'=> '訂單已刪除'], 200);
    }

    
    public function Appointment(Request $request,$pro_id){
        $pro = d2pro::find($pro_id);
        return view('Dark2.backend.orderAppointment',compact('pro_id','pro'));
    }
    public function AppointmentUpdate(Request $request,$pro_id){
        $data = [
            'pay_status'  => $request->pay_status,
            'pay_type'    => $request->pay_type,
            'name'       => $request->name,
            'tel'        => $request->tel,
            'email'      => $request->email,
            'sn'         => $this->GenerateSN(),
            'tfopro_id'  => $pro_id,
            'tfogife_id' => 0,
            'meat'       => $request->meat,
            'money'      => $request->money,
            'notes'      => $request->notes,
            'story'      => $request->story,
            'manage'     => $request->manage,
            'result'     => '',
            'item'       => $request->item,
        ];
        $order = d2order::create($data);

        if($request->pay_status == '已付款'){

            $newdata = d2order::leftJoin('d2pro', 'd2pro.id', '=', 'd2order.pro_id')->select('day','rangstart','rangend','name','email')->find($order->id);
            $arr = [
                'day'       => $newdata->day,
                'rangstart' => $newdata->rangstart,
                'rangend'   => $newdata->rangend,
                'name'      => $newdata->name,
                'email'     => $newdata->email,
            ];
            Mail::send('Dark2.email.order',$arr,function($m) use ($arr){
                $m->from('dininginthedark@surpriselab.com.tw', 'Table For One');
                $m->sender('dininginthedark@surpriselab.com.tw', 'Table For One');
                $m->replyTo('dininginthedark@surpriselab.com.tw', 'Table For One');

                $m->to($arr['email'], $arr['name']);
                $m->subject('Table For One 訂位成功 !');
            });
        }

        return redirect('/dark2/pros?')->with('message','新增完成!');
    }


    public function Print(Request $request){
        $order = d2order::leftJoin('d2pro', 'd2pro.id', '=', 'd2order.pro_id');
        $order = $order->select('rangstart','rangend','name','tel','meat','notes','d2order.manage','d2pro.money AS PM','d2order.money AS OM','d2order.created_at AS created_at','d2order.pay_status','email','d2order.sn','d2order.id','dayparts','day','email','pay_type','pople');
        if($request->has('day') && $request->day!='') $order->where('day',$request->day);
        if($request->has('dayparts') && $request->dayparts!='') $order->where('dayparts',$request->dayparts);
        if($request->has('pay_status') && $request->pay_status=='已預約'){
            $order->whereRaw("(d2order.pay_status='已付款' OR (d2order.pay_type='現場付款' AND d2order.pay_status<>'取消訂位'))");
        } elseif($request->pay_status!=''){
            $order->where('d2order.pay_status',$request->pay_status);  
        } 
        if($request->has('pay_type') && $request->pay_type!='') $order->where('pay_type',$request->pay_type);
        if($request->has('search') && $request->search!=''){
            $search = $request->search;
            $order = $order->whereRaw("name LIKE '%{$search}%' OR tel LIKE '%{$search}%' OR email LIKE '%{$search}%' OR sn LIKE '%{$search}%'");
        }

        if($request->has('order') && $request->order!=''){
            $ord = explode('|',$request->order);
            if(count($ord)>0){
                $order = $order->OrderBy($ord[0],$ord[1]);
            }
        } else { $order = $order->orderBy('d2order.updated_at','desc'); }
        $order = $order->paginate($this->perpage);

        return view('Dark2.backend.print',compact('order','request'));
    }

    public function Table(Request $request){
        $order = d2order::leftJoin('d2pro', 'd2pro.id', '=', 'd2order.pro_id');
        $order = $order->select('rangstart','rangend','name','tel','meat','notes','d2order.manage','d2pro.money AS PM','d2order.money AS OM','d2order.created_at AS created_at','d2order.pay_status','email','d2order.sn','d2order.id','dayparts','day','email','pay_type','pople');
        if($request->has('day') && $request->day!='') $order->where('day',$request->day);
        if($request->has('dayparts') && $request->dayparts!='') $order->where('dayparts',$request->dayparts);
        if($request->has('pay_status') && $request->pay_status=='已預約'){
            $order->whereRaw("(d2order.pay_status='已付款' OR (d2order.pay_type='現場付款' AND d2order.pay_status<>'取消訂位'))");
        } elseif($request->pay_status!=''){
            $order->where('d2order.pay_status',$request->pay_status);  
        } 
        if($request->has('pay_type') && $request->pay_type!='') $order->where('pay_type',$request->pay_type);
        if($request->has('search') && $request->search!=''){
            $search = $request->search;
            $order = $order->whereRaw("name LIKE '%{$search}%' OR tel LIKE '%{$search}%' OR email LIKE '%{$search}%'");
        }

        if($request->has('order') && $request->order!=''){
            $ord = explode('|',$request->order);
            if(count($ord)>0){
                $order = $order->OrderBy($ord[0],$ord[1]);
            }
        } else { $order = $order->orderBy('d2order.updated_at','desc'); }
        $order = $order->get();
        

        return view('Dark2.backend.table',compact('order','request'));
    }







    public function Xls2Db(Request $request){
        $filePath = 'storage/app/dark2_report.xlsx';
        Excel::load($filePath, function($reader) {
            $data = [];
            $xlsx = $reader->toArray();
            foreach($xlsx as $row){
                $r = [
                    'sn'         => $row['sn'],
                    'detail'     => $row['detail'],
                    'num'        => $row['num'],
                    'money'      => $row['money'],
                    'name'       => $row['name'],
                    'email'      => $row['email'],
                    'tel'        => $row['tel'],
                    'sponsor_id' => $row['sponsor_id'],
                    'ot1'        => $row['ot1'],
                    'ot1text'    => json_encode([$row['ot1'],$row['ot1_1'],$row['ot1_2'],$row['ot1_3']]),
                    'ot2'        => $row['ot2'],
                    'ot2text'    => json_encode([$row['ot2'],$row['ot2_1'],$row['ot2_2'],$row['ot2_3']]),
                    'ot3'        => $row['ot3'],
                    'ot3text'    => json_encode([$row['ot3'],$row['ot3_1'],$row['ot3_2'],$row['ot3_3']]),
                    'ot4'        => $row['ot4'],
                    'ot4text'    => json_encode([$row['ot4'],$row['ot4_1'],$row['ot4_2'],$row['ot4_3']]),
                    'ot5'        => $row['ot5'],
                    'ot5text'    => json_encode([$row['ot5'],$row['ot5_1'],$row['ot5_2'],$row['ot5_3']]),
                    'result'     => json_encode($row),
                ];
                array_push($data, $r);
            }
            //dd($data);
            d2xls::insert($data);
        });
    }

    public function Db2Coupon(Request $request){
        $xls = d2xls::select('ot1','ot2','ot3','id','ot4','ot5','id')->where('gen_coup',0)->get();
        foreach($xls as $row){
            $data = [
                'xls_id' => $row->id
            ];
            if($row->ot1 == 1){
                $data['wine'] = 0;
                $data['code'] = $this->GenerateGiftCodeSN();
                d2coupon::insert($data);
            } elseif($row->ot2 == 1){
                $data['wine'] = 0;
                $data['code'] = $this->GenerateGiftCodeSN();
                d2coupon::insert($data);
                $data['wine'] = 0;
                $data['code'] = $this->GenerateGiftCodeSN();
                d2coupon::insert($data);
            } elseif($row->ot3 == 1){
                $data['wine'] = 1;
                $data['code'] = $this->GenerateGiftCodeSN();
                d2coupon::insert($data);
            } elseif($row->ot4 == 1){
                $data['wine'] = 1;
                $data['code'] = $this->GenerateGiftCodeSN();
                d2coupon::insert($data);
                $data['wine'] = 1;
                $data['code'] = $this->GenerateGiftCodeSN();
                d2coupon::insert($data);
            } elseif($row->ot5 == 1){
                $data['wine'] = 1;
                $data['code'] = $this->GenerateGiftCodeSN();
                d2coupon::insert($data);
                $data['wine'] = 1;
                $data['code'] = $this->GenerateGiftCodeSN();
                d2coupon::insert($data);
                $data['wine'] = 1;
                $data['code'] = $this->GenerateGiftCodeSN();
                d2coupon::insert($data);
            }
            d2xls::where('id',$row->id)->update(['gen_coup'=>1]);
        }

    }
    
    private function GenerateGiftCodeSN(){
        $random = 8;$SN = '';
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        for($i=1;$i<=$random;$i++){
            $b = $characters[rand(0, strlen($characters)-1)];
            $SN .= $b;
        }
        if(d2coupon::where('code',$SN)->count()>0){
            $this->GenerateGiftCodeSN();
        } else {
            return $SN;
        }
    }
}


