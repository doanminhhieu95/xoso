<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\User;
use App\daycity;
use App\ketqua;
use App\city;
use App\kqxs;
use App\giaikqxs;
use App\somo;

class PageController extends Controller
{
    //
    public function gettrangchu(){
        include('ketquaxoso/simple_html_dom.php');
        $rmb = array();
        $rmt = array();
        $rmn = array();
        $day = date("d-m-Y");
        $plus = 1;
        
        if( date( 'H' ) > 19 || ( isset( $day ) && $day !== date( 'd-m-Y' ) ) ) {
        }
        else {
            $day = date("d-m-Y",strtotime("$day -$plus day"));
        }
        $html = file_get_html("http://vesophuongtrang.com/ket-qua-xo-so/".$day.".html");
        $inputmb = array(
            'rs_0_0' => '<img class="a1" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_1_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_2_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_2_1' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_3_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_3_1' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_3_2' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_3_3' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_3_4' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_3_5' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_4_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_4_1' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_4_2' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_4_3' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_5_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_5_1' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_5_2' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_5_3' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_5_4' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_5_5' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_6_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_6_1' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_6_2' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_7_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_7_1' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_7_2' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_7_3' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />'
        );
        $input = array(
            'rs_8_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_7_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_6_2' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_6_1' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_6_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_5_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_4_6' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_4_5' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_4_4' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_4_3' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_4_2' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_4_1' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_4_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_3_1' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_3_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_2_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_1_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_0_0' => '<img class="a1" src="ketquaxoso/Clock.gif" width="20" />',
        );
        
        $ketquamb = $html->find("table.kqxsmienbac div.dayso");
        if( date( 'H' ) > 19 || ( isset( $day ) && $day !== date( 'd-m-Y' ) ) ) {
            $i=0;
            foreach( $inputmb as $key => $value ){
                $rmb[$key] = $ketquamb[$i]->innertext;
                $i++;
            }
        }
        else {
            $rmb = $inputmb;
        }
        $thu = date('l', strtotime($day));
        if($thu=="Sunday") $thu = 1;
        if($thu=="Monday") $thu = 2;
        if($thu=="Tuesday") $thu = 3;
        if($thu=="Wednesday") $thu = 4;
        if($thu=="Thursday") $thu = 5;
        if($thu=="Friday") $thu = 6;
        if($thu=="Saturday") $thu = 7;
        $daycity = daycity::where('idday',$thu)->get();
        $city2 = array();
        $city3 = array();
        foreach($daycity as $dci){
            $cityy = city::where([['id',$dci->idcity],['idarea',2]])->first();
            if(count($cityy)>0){
                $city2[] = $cityy;
            }
        }
        foreach($daycity as $dci){
            $cityy = city::where([['id',$dci->idcity],['idarea',3]])->first();
            if(count($cityy)>0){
                $city3[] = $cityy;
            }
        }
        $j=0;
        $k=0;
        foreach($city2 as $cty2){
            $ten = $cty2->name;
            $tinh = $html->find("table.kqxsdaicol td.tentinh a");
            for($i=0;$i<count($tinh);$i++){
                if($cty2->name=="Hồ Chí Minh") $ten = "TP. HCM";
                else if($cty2->name=="Thừa Thiên Huế") $ten = "Thừa T. Huế";
                else if($cty2->name=="Lâm Đồng") $ten = "Đà Lạt";
                else if($cty2->name=="Đắc Lắc") $ten = "Đắk Lắk";
                else if($cty2->name=="Đà Nẵng"){
                    if($thu == "Thứ tư")
                    $ten = "Đà Nẵng";
                    else if($thu == "Thứ bảy")
                    $ten = "Đ.Nẵng";
                }
                else if($cty2->name=="Quảng Ngãi") $ten = "Q.Ngãi";
                else if($cty2->name=="Đắc Nông") $ten = "Đ.Nông";
                else if($cty2->name=="Long An") $ten = "L.An";
                else if($cty2->name=="Hậu Giang") $ten = "H.Giang";
                else if($cty2->name=="Bình Phước") $ten = "B.Phước";
                if($tinh[$i]->innertext==$ten){
                    $table = $html->find("table.kqxsdaicol",$i);
                    $ketquamt = $table->find("div.dayso");
                    break;
                }
            }
            if( date( 'H' ) > 19 || ( isset( $day ) && $day !== date( 'd-m-Y' ) ) ) {
                $i=0;
                foreach( $input as $key => $value ){
                    $rmt[$j][$key] = $ketquamt[$i]->innertext;
                    $i++;
                }
            }
            else {
                $rmt[$j] = $input;
            }
            $j++;
        }
        
        foreach($city3 as $cty3){
            $ten = $cty3->name;
            $tinh = $html->find("table.kqxsdaicol td.tentinh a");
            for($i=0;$i<count($tinh);$i++){
                if($cty2->name=="Hồ Chí Minh") $ten = "TP. HCM";
                else if($cty3->name=="Thừa Thiên Huế") $ten = "Thừa T. Huế";
                else if($cty3->name=="Lâm Đồng") $ten = "Đà Lạt";
                else if($cty3->name=="Đắc Lắc") $ten = "Đắk Lắk";
                else if($cty3->name=="Đà Nẵng"){
                    if($thu == "Thứ tư")
                    $ten = "Đà Nẵng";
                    else if($thu == "Thứ bảy")
                    $ten = "Đ.Nẵng";
                }
                else if($cty3->name=="Quảng Ngãi") $ten = "Q.Ngãi";
                else if($cty3->name=="Đắc Nông") $ten = "Đ.Nông";
                else if($cty3->name=="Long An") $ten = "L.An";
                else if($cty3->name=="Hậu Giang") $ten = "H.Giang";
                else if($cty3->name=="Bình Phước") $ten = "B.Phước";
                if($tinh[$i]->innertext==$ten){
                    $table = $html->find("table.kqxsdaicol",$i);
                    $ketquamn = $table->find("div.dayso");
                    break;
                }
            }
            if( date( 'H' ) > 19 || ( isset( $day ) && $day !== date( 'd-m-Y' ) ) ) {
                $i=0;
                foreach( $input as $key => $value ){
                    $rmn[$k][$key] = $ketquamn[$i]->innertext;
                    $i++;
                }
            }
            else {
                $rmn[$k] = $input;
            }
            $k++;
        }
        $kqmb = array();
        $kqmn = array();
        $kqmt = array();
        foreach($rmb as $kq){
            $kqmb[] = substr($kq,-2);
        }
        for($i=0;$i<count($rmn);$i++){
            foreach($rmn[$i] as $kq){
                $kqmn[$i][] = substr($kq,-2);
            }
        }
        for($i=0;$i<count($rmt);$i++){
            foreach($rmt[$i] as $kq){
                $kqmt[$i][] = substr($kq,-2);
            }
        }
        return view('page.index',[
            'rmb'=>$rmb,
            'rmt'=>$rmt,
            'rmn'=>$rmn,
            'city2'=>$city2,
            'city3'=>$city3,
            'kqmb'=>$kqmb,
            'kqmn'=>$kqmn,
            'kqmt'=>$kqmt,
            'day'=>$day
        ]);
    }
    public function getmienbac(){
        return view('page.mienbac');
    }
    public function getdangky(){
        return view('page.dangky');
    }
    public function postdangky(Request $req){
        $this->validate($req,
            [
                'email'=>'email|unique:users,email',
                'name'=>'unique:users,name',
                'password'=>'min:6|max:20',
                'repassword'=>'same:password',
                'phone'=>'unique:users,phone|min:10|max:12'
            ],
            [
                'email.email' => 'Không đúng định dạng email',
                'email.unique' => 'Email đã có người sử dụng',
                'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
                'password.max' => 'Mật khẩu tối đa 20 ký tự',
                'repassword.same' => 'Mật khẩu không giống nhau',
                'phone.min' => 'Nhập chưa đúng số điện thoại.',
                'phone.max' => 'Nhập chưa đúng số điện thoại.',
                'name.unique' => 'Nickname đã có người sử dụng',
                'phone.unique' => 'Số điện thoại đã có người sử dụng',
            ]);
            
            $user = new User();
            $user->name = $req->name;
            $user->email = $req->email;
            $user->password = Hash::make($req->password);
            $user->phone = $req->phone;
            $user->diem = 0;
            $user->level = 0;
            $user->vip = 0;
            $user->image = "";
            $user->save();
            return redirect()->route('dangky')->with('dangky','Tạo tài khoản thành công!');
    }
    public function getdangnhap(){
        return view('page.dangnhap');
    }
    public function postdangnhap(Request $req){
        session_start();
        $credentials = array('phone'=>$req->phone,'password'=>$req->password);
        if(Auth::attempt($credentials)){
            //return redirect()->back()->with(['flag'=>'success','message'=>'Đăng nhập thành công!']);
            $_SESSION["member_id"] = Auth::user()->id;
            if(!empty($req->remember)) {
                setcookie("member_login",$req->phone,time()+ (10 * 365 * 24 * 60 * 60));
                setcookie("member_password",$req->password,time()+ (10 * 365 * 24 * 60 * 60));
            } else {
                if(isset($_COOKIE["member_login"])) {
                    setcookie("member_login","");
                }
                if(isset($_COOKIE["member_password"])) {
                    setcookie("member_password","");
                }
            }
            return view('page.index');
        }
        else return redirect()->back()->with('dangnhap','Số điện thoại hoặc mật khẩu không chính xác!'); 
    }
    public function getDangXuat(){
        Auth::logout();
        return view('page.index');
    }
    public function getkqxs(){
        return view('admin.page.kqxs.ketqua');
    }
    public function getketqua(){
        return view('admin.page.kqxs.index');
        
    }
    public function postketqua(Request $req){
        if(strlen($req->giai_1)!=5 && strlen($req->giai_1)!=6){
            return redirect()->back()->with([
                'flag'=>'danger',
                'update'=>'Chưa có kết quả để cập nhật'
            ]);
        }
        $d = substr($req->date,0,2);
        $m = substr($req->date,3,2);
        $y = substr($req->date,6,4);
        $date = $y."-".$m."-".$d;
        $thu = date('l', strtotime($date));
        if($thu=="Sunday") $thu = 1;
        if($thu=="Monday") $thu = 2;
        if($thu=="Tuesday") $thu = 3;
        if($thu=="Wednesday") $thu = 4;
        if($thu=="Thursday") $thu = 5;
        if($thu=="Friday") $thu = 6;
        if($thu=="Saturday") $thu = 7;
        $daycity = daycity::where([
            ['idcity',$req->city],
            ['idday',$thu]
        ])->first();
        $kqxs = kqxs::where([
            ['ngayxoso',$date],
            ['iddaycity',$daycity->id]
        ])->get();
        if(count($kqxs)!=0){
            return redirect()->back()->with([
                'flag'=>'danger',
                'update'=>'Đài này đã cập nhật rồi!'
            ]);
        }
        $kqxs = new kqxs();
        $kqxs->ngayxoso = $date;
        $kqxs->iddaycity = $daycity->id;
        $kqxs->save();
        if($req->city == 1){
            $n = 9;
        }else $n = 10;
        for($i=1; $i<$n; $i++){
            $giaikqxs = new giaikqxs();
            $giaikqxs->idkqxs = $kqxs->id;
            $giaikqxs->idgiai = $i;
            $giaikqxs->save();
            
            $kq = "giai_".$i;
            $giai = $req->$kq;
            $array = explode(" - ",$giai);
            if(count($array)==1){
                $array[0] = $req->$kq;
            }
            foreach($array as $key=>$value){
                $ketqua = new ketqua();
                $ketqua->ketqua = $value;
                $ketqua->idgiaikqxs = $giaikqxs->id;
                $ketqua->save();
            }
        }
        return redirect()->back()->with([
            'flag'=>'success',
            'update'=>'Cập nhật thành công!'
        ]);
    }
    public function getketquaxoso($date){
        include('ketquaxoso/simple_html_dom.php');
        $rmb = array();
        $rmt = array();
        $rmn = array();
        $day = date("d-m-Y");
        $plus = 1;
        $day = date("d-m-Y",strtotime("$day -$plus day"));
        $html = file_get_html("http://vesophuongtrang.com/ket-qua-xo-so/".$date.".html");
        $inputmb = array(
            'rs_0_0' => '<img class="a1" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_1_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_2_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_2_1' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_3_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_3_1' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_3_2' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_3_3' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_3_4' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_3_5' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_4_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_4_1' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_4_2' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_4_3' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_5_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_5_1' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_5_2' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_5_3' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_5_4' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_5_5' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_6_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_6_1' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_6_2' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_7_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_7_1' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_7_2' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_7_3' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />'
        );
        $input = array(
            'rs_8_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_7_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_6_2' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_6_1' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_6_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_5_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_4_6' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_4_5' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_4_4' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_4_3' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_4_2' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_4_1' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_4_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_3_1' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_3_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_2_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_1_0' => '<img class="a" src="ketquaxoso/Clock.gif" width="20" />',
            'rs_0_0' => '<img class="a1" src="ketquaxoso/Clock.gif" width="20" />',
        );
        
        $ketquamb = $html->find("table.kqxsmienbac div.dayso");
        if(count($ketquamb)==0){
            $rmb = $inputmb;
        }
        else{
            if( date( 'H' ) > 19 || ( isset( $day ) && $day !== date( 'd-m-Y' ) ) ) {
                $i=0;
                foreach( $inputmb as $key => $value ){
                    $rmb[$key] = $ketquamb[$i]->innertext;
                    $i++;
                }
            }
            else {
                $rmb = $inputmb;
            }
        }
        $thu = date('l', strtotime($date));
        if($thu=="Sunday") $thu = 1;
        if($thu=="Monday") $thu = 2;
        if($thu=="Tuesday") $thu = 3;
        if($thu=="Wednesday") $thu = 4;
        if($thu=="Thursday") $thu = 5;
        if($thu=="Friday") $thu = 6;
        if($thu=="Saturday") $thu = 7;
        $daycity = daycity::where('idday',$thu)->get();
        $city2 = array();
        $city3 = array();
        foreach($daycity as $dci){
            $cityy = city::where([['id',$dci->idcity],['idarea',2]])->first();
            if(count($cityy)>0){
                $city2[] = $cityy;
            }
        }
        foreach($daycity as $dci){
            $cityy = city::where([['id',$dci->idcity],['idarea',3]])->first();
            if(count($cityy)>0){
                $city3[] = $cityy;
            }
        }
        $j=0;
        $k=0;
        foreach($city2 as $cty2){
            $ten = $cty2->name;
            $tinh = $html->find("table.kqxsdaicol td.tentinh a");
            for($i=0;$i<count($tinh);$i++){
                if($cty2->name=="Hồ Chí Minh") $ten = "TP. HCM";
                else if($cty2->name=="Thừa Thiên Huế") $ten = "Thừa T. Huế";
                else if($cty2->name=="Lâm Đồng") $ten = "Đà Lạt";
                else if($cty2->name=="Đắc Lắc") $ten = "Đắk Lắk";
                else if($cty2->name=="Đà Nẵng"){
                    if($thu == "Thứ tư")
                    $ten = "Đà Nẵng";
                    else if($thu == "Thứ bảy")
                    $ten = "Đ.Nẵng";
                }
                else if($cty2->name=="Quảng Ngãi") $ten = "Q.Ngãi";
                else if($cty2->name=="Đắc Nông") $ten = "Đ.Nông";
                else if($cty2->name=="Long An") $ten = "L.An";
                else if($cty2->name=="Hậu Giang") $ten = "H.Giang";
                else if($cty2->name=="Bình Phước") $ten = "B.Phước";
                $test = false;
                if($tinh[$i]->innertext==$ten){
                    $test = true;
                    $table = $html->find("table.kqxsdaicol",$i);
                    $ketquamt = $table->find("div.dayso");
                    if(count($ketquamt)==0){
                        $rmt[$j] = $input;
                    }
                    else{
                        if( date( 'H' ) > 18 || ( isset( $day ) && $day !== date( 'd-m-Y' ) ) ) {
                            $i=0;
                            foreach( $input as $key => $value ){
                                $rmt[$j][$key] = $ketquamt[$i]->innertext;
                                $i++;
                            }
                        }
                        else {
                            $rmt[$j] = $input;
                        }
                    }
                    break;
                }
                if($test == false){
                    $rmt[$j] = $input;
                }
            }
            $j++;
        }
        foreach($city3 as $cty3){
            $ten = $cty3->name;
            $tinh = $html->find("table.kqxsdaicol td.tentinh a");
            for($i=0;$i<count($tinh);$i++){
                if($cty3->name=="Hồ Chí Minh") $ten = "TP. HCM";
                else if($cty3->name=="Thừa Thiên Huế") $ten = "Thừa T. Huế";
                else if($cty3->name=="Lâm Đồng") $ten = "Đà Lạt";
                else if($cty3->name=="Đắc Lắc") $ten = "Đắk Lắk";
                else if($cty3->name=="Đà Nẵng"){
                    if($thu == "Thứ tư")
                    $ten = "Đà Nẵng";
                    else if($thu == "Thứ bảy")
                    $ten = "Đ.Nẵng";
                }
                else if($cty3->name=="Quảng Ngãi") $ten = "Q.Ngãi";
                else if($cty3->name=="Đắc Nông") $ten = "Đ.Nông";
                else if($cty3->name=="Long An") $ten = "L.An";
                else if($cty3->name=="Hậu Giang") $ten = "H.Giang";
                else if($cty3->name=="Bình Phước") $ten = "B.Phước";
                $test = false;
                if($tinh[$i]->innertext==$ten){
                    $test = true;
                    $table = $html->find("table.kqxsdaicol",$i);
                    $ketquamn = $table->find("div.dayso");
                    if(count($ketquamn)==0){
                        $rmn[$k] = $input;
                    }
                    else{
                        if( date( 'H' ) > 17 || ( isset( $day ) && $day !== date( 'd-m-Y' ) ) ) {
                            $i=0;
                            foreach( $input as $key => $value ){
                                $rmn[$k][$key] = $ketquamn[$i]->innertext;
                                $i++;
                            }
                        }
                        else {
                            $rmn[$k] = $input;
                        }
                    }
                    break;
                }
                if($test == false){
                    $rmn[$k] = $input;
                }
            }
            if(strtotime($date)>strtotime($day)){
                foreach( $input as $key => $value ){
                    $rmn[$k] = $input;
                    $rmn[$k] = $input;
                }
            }
            $k++;
        }
        if(strtotime($date)>strtotime($day)){
            foreach( $input as $key => $value ){
                $rmb = $inputmb;
            }
        }
        $kqmb = array();
        $kqmn = array();
        $kqmt = array();
        foreach($rmb as $kq){
            $kqmb[] = substr($kq,-2);
        }
        for($i=0;$i<count($rmn);$i++){
            foreach($rmn[$i] as $kq){
                $kqmn[$i][] = substr($kq,-2);
            }
        }
        for($i=0;$i<count($rmt);$i++){
            foreach($rmt[$i] as $kq){
                $kqmt[$i][] = substr($kq,-2);
            }
        }
        return view('page.ketquaxoso',[
            'rmb'=>$rmb,
            'rmt'=>$rmt,
            'rmn'=>$rmn,
            'city2'=>$city2,
            'city3'=>$city3,
            'date'=>$date,
            'kqmb'=>$kqmb,
            'kqmn'=>$kqmn,
            'kqmt'=>$kqmt
        ]);
    }
    public function getgopy(){
        return view('page.gopy');
    }
    public function getsomo(){
        $somos = somo::all();
        return view('page.somo',[
            'somos'=>$somos
        ]);
    }
    public function postsomo(Request $req){
        $somos = somo::all();
        $tukhoa = $req->tukhoa;
        $arr = array();
        foreach($somos as $somo){
            if(strpos($somo->name, $req->tukhoa)!==false){
                $arr[] = $somo;
            }
        }
        return view('page.somo',[
            'somos'=>$arr,
            'tukhoa'=>$tukhoa
        ]);
    }
    public function getbaivietsomo($name, $id){
        $somos = somo::all();
        $somo = somo::find($id);
        return view('page.baivietsomo',[
           'somo'=>$somo,
           'somos'=>$somos
        ]);
    }
    public function postbaivietsomo(Request $req, $name, $id){
        $somos = somo::all();
        $tukhoa = $req->tukhoa;
        $arr = array();
        foreach($somos as $somo){
            if(strpos($somo->name, $req->tukhoa)!==false){
                $arr[] = $somo;
            }
        }
        return view('page.somo',[
           'somos'=>$arr,
            'tukhoa'=>$tukhoa
        ]);
    }
    public function getbatdaubang($text){
        $arr = array();
        $somos = somo::all();
        foreach($somos as $somo){
            $name = $somo->name;
            $name = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $name);
            $name = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $name);
            $name = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $name);
            $name = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $name);
            $name = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $name);
            $name = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $name);
            $name = preg_replace("/(đ)/", 'd', $name);
            $name = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $name);
            $name = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $name);
            $name = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $name);
            $name = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $name);
            $name = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $name);
            $name = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $name);
            $name = preg_replace("/(Đ)/", 'D', $name);
            $name = strtolower($name);
            if(substr($name,0,1)==$text){
                $arr[] = $somo;
            }
        }
        return view('page.batdaubang',[
            'somos'=>$arr,
            'text'=>$text
        ]);
    }
    public function postbatdaubang(Request $req, $text){
        $arr = array();
        $tukhoa = $req->tukhoa;
        $somos = somo::all();
        foreach($somos as $somo){
            $name = $somo->name;
            $name = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $name);
            $name = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $name);
            $name = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $name);
            $name = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $name);
            $name = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $name);
            $name = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $name);
            $name = preg_replace("/(đ)/", 'd', $name);
            $name = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $name);
            $name = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $name);
            $name = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $name);
            $name = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $name);
            $name = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $name);
            $name = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $name);
            $name = preg_replace("/(Đ)/", 'D', $name);
            $name = strtolower($name);
            if(substr($name,0,1)==$text){
                $arr[] = $somo;
            }
        }
        foreach($arr as $somo){
            $arr = array();
            if(strpos($somo->name, $req->tukhoa)!==false){
                $arr[] = $somo;
            }
        }
        return view('page.batdaubang',[
            'somos'=>$arr,
            'text'=>$text,
            'tukhoa'=>$tukhoa
        ]);
    }
    public function gettructiep(){
        $day = date("d-m-Y");
        return view('page.tructiep',[
            'day'=>$day
        ]);
    }
}
