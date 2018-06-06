<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\daycity;
use App\ketqua;
use App\city;
use App\kqxs;
use App\giaikqxs;

class kqxsmbController extends Controller
{
    //
    public function getkqxsmb(){
        include('ketquaxoso/simple_html_dom.php');
        date_default_timezone_set('Asia/Ho_Chi_Minh');
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
        $rmb = array();
        $day = date("d-m-Y");
        $ngay = array();
        $thu = array();
        $kqmb = array();
        $plus = 1;
        $homqua = date("d-m-Y",strtotime("$day -$plus day"));
        $ketquamb = array();
        for($u=0 ; $u<7; $u++){
            if( date( 'H' ) >= 19 ) {
                $ngay[] = date("d-m-Y",strtotime("$day -$u day"));
            }
            else {
                $ngay[] = date("d-m-Y",strtotime("$homqua -$u day"));
            }
            $html = file_get_html("http://vesophuongtrang.com/ket-qua-xo-so/".$ngay[$u].".html");
            $ketquamb[] = $html->find("table.kqxsmienbac div.dayso");
            if( count($ketquamb[$u]) != 0 ) {
                $i=0;
                foreach( $inputmb as $key => $value ){
                    $rmb[$u][$key] = $ketquamb[$u][$i]->innertext;
                    $i++;
                }
            }
            else {
                $rmb[$u] = $inputmb;
            }
            $thu[] = date('l', strtotime($ngay[$u]));
            if($thu[$u]=="Sunday") $thu[$u] = "Chủ nhật";
            if($thu[$u]=="Monday") $thu[$u] = "Thứ hai";
            if($thu[$u]=="Tuesday") $thu[$u] = "Thứ ba";
            if($thu[$u]=="Wednesday") $thu[$u] = "Thứ tư";
            if($thu[$u]=="Thursday") $thu[$u] = "Thứ năm";
            if($thu[$u]=="Friday") $thu[$u] = "Thứ sáu";
            if($thu[$u]=="Saturday") $thu[$u] = "Thứ bảy";
            foreach($rmb[$u] as $kq){
                $kqmb[$u][] = substr($kq,-2);
            }
        }
        return view('page.kqxsmb',[
            'rmb'=>$rmb,
            'thu'=>$thu,
            'ngay'=>$ngay,
            'kqmb'=>$kqmb
        ]);
    }
    public function getkqxsmbthu($thu){
        include('ketquaxoso/simple_html_dom.php');
        date_default_timezone_set('Asia/Ho_Chi_Minh');
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
        $rmb = array();
        $day = date("d-m-Y");
        $ngay = array();
        $kqmb = array();
        $homnay = date('l', strtotime($day));
        if($homnay=="Sunday") $homnay = 1;
        if($homnay=="Monday") $homnay = 2;
        if($homnay=="Tuesday") $homnay = 3;
        if($homnay=="Wednesday") $homnay = 4;
        if($homnay=="Thursday") $homnay = 5;
        if($homnay=="Friday") $homnay = 6;
        if($homnay=="Saturday") $homnay = 7;
        $tuan1 = 0;
        $tuan2 = 7;
        $tuan3 = 0;
        for($u=0 ; $u<7; $u++){
            if($thu == $homnay){
                if( date( 'H' ) >= 19 ){
                    $ngay[] = date("d-m-Y",strtotime("$day -$tuan1 day"));
                    $tuan1 +=7;
                }
                else{
                    $ngay[] = date("d-m-Y",strtotime("$day -$tuan2 day"));
                    $tuan2 +=7;
                }
            }
            else{
                if($u==0){
                    for($v=1;$v<=7;$v++){
                        $trungay = date("d-m-Y",strtotime("$day -$v day"));
                        $tam = date('l', strtotime($trungay));
                        if($tam=="Sunday") $tam = 1;
                        if($tam=="Monday") $tam = 2;
                        if($tam=="Tuesday") $tam = 3;
                        if($tam=="Wednesday") $tam = 4;
                        if($tam=="Thursday") $tam = 5;
                        if($tam=="Friday") $tam = 6;
                        if($tam=="Saturday") $tam = 7;
                        if($tam == $thu){
                            break;
                        }
                    }
                }
                $ngay[] = date("d-m-Y",strtotime("$trungay -$tuan3 day"));
                $tuan3 += 7;
            }
            $html = file_get_html("http://vesophuongtrang.com/ket-qua-xo-so/".$ngay[$u].".html");
            $ketquamb[] = $html->find("table.kqxsmienbac div.dayso");
            if( count($ketquamb[$u]) != 0 ) {
                $i=0;
                foreach( $inputmb as $key => $value ){
                    $rmb[$u][$key] = $ketquamb[$u][$i]->innertext;
                    $i++;
                }
            }
            else {
                $rmb[$u] = $inputmb;
            }
            foreach($rmb[$u] as $kq){
                $kqmb[$u][] = substr($kq,-2);
            }
            if($thu==1) $thuchu = "Chủ nhật";
            if($thu==2) $thuchu = "Thứ hai";
            if($thu==3) $thuchu = "Thứ ba";
            if($thu==4) $thuchu = "Thứ tư";
            if($thu==5) $thuchu = "Thứ năm";
            if($thu==6) $thuchu = "Thứ sáu";
            if($thu==7) $thuchu = "Thứ bảy";
        }
        return view('page.kqxsmbthu',[
            'rmb'=>$rmb,
            'thu'=>$thu,
            'ngay'=>$ngay,
            'kqmb'=>$kqmb,
            'thuchu'=>$thuchu
        ]);
    }
    public function getkqxsmbngay($ngay){
        include('ketquaxoso/simple_html_dom.php');
        date_default_timezone_set('Asia/Ho_Chi_Minh');
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
        $day = date("d-m-Y");
        $html = file_get_html("http://vesophuongtrang.com/ket-qua-xo-so/".$ngay.".html");
        $ketquamb = $html->find("table.kqxsmienbac div.dayso");
        if( count($ketquamb) == 0 ) {
            $rmb = $inputmb;
        }
        else {
            if( date( 'H' ) > 19 || ( isset( $ngay ) && strtotime($ngay) < strtotime(date( 'd-m-Y' ) )) ){
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
        foreach($rmb as $kq){
            $kqmb[] = substr($kq,-2);
        }
        $thu = date('l', strtotime($ngay));
        if($thu=="Sunday") {$tam = 1;$thu = "Chủ nhật";}
        if($thu=="Monday") {$tam = 2;$thu = "Thứ hai";}
        if($thu=="Tuesday") {$tam = 3;$thu = "Thứ ba";}
        if($thu=="Wednesday") {$tam = 4;$thu = "Thứ tư";}
        if($thu=="Thursday") {$tam = 5;$thu = "Thứ năm";}
        if($thu=="Friday") {$tam = 6;$thu = "Thứ sáu";}
        if($thu=="Saturday") {$tam = 7;$thu = "Thứ bảy";}
        if( date( 'H' ) >= 19 ){
            $day = date("d-m-Y",strtotime("$day +$plus day"));
        }
        $day = date('l', strtotime($day));
        if($day=="Sunday") {$thuu = "Chủ nhật";$tamm=1;}
        if($day=="Monday") {$thuu = "Thứ hai";$tamm=2;}
        if($day=="Tuesday") {$thuu = "Thứ ba";$tamm=3;}
        if($day=="Wednesday") {$thuu = "Thứ tư";$tamm=4;}
        if($day=="Thursday") {$thuu = "Thứ năm";$tamm=5;}
        if($day=="Friday") {$thuu = "Thứ sáu";$tamm=6;}
        if($day=="Saturday") {$thuu = "Thứ bảy";$tamm=7;}
        $daycity = daycity::where('idday',$tam)->get();
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
        return view('page.kqxsmbngay',[
            'rmb'=>$rmb,
            'thu'=>$tam,
            'ngay'=>$ngay,
            'kqmb'=>$kqmb,
            'thuchu'=>$thu,
            'city2'=>$city2,
            'city3'=>$city3,
            'thuu'=>$thuu,
            'tamm'=>$tamm
        ]);
    }
}
