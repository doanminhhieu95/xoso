<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\daycity;
use App\ketqua;
use App\city;
use App\kqxs;
use App\giaikqxs;

class kqxsmnController extends Controller
{
    //
    public function getkqxsmn(){
        include('ketquaxoso/simple_html_dom.php');
        date_default_timezone_set('Asia/Ho_Chi_Minh');
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
        $rmn = array();
        $day = date("d-m-Y");
        $ngay = array();
        $plus = 1;
        $homqua = date("d-m-Y",strtotime("$day -$plus day"));
        $ketquamn = array();
        $city3 = array();
        $v=0;
        for($u=0 ; $u<7; $u++){
            if( date( 'H' ) >= 17 ) {
                $ngay[] = date("d-m-Y",strtotime("$day -$u day"));
            }
            else {
                $ngay[] = date("d-m-Y",strtotime("$homqua -$u day"));
            }
            $html = file_get_html("http://vesophuongtrang.com/ket-qua-xo-so/".$ngay[$u].".html");
            $thu = date('l', strtotime($ngay[$u]));
            if($thu=="Sunday") $thu = 1;
            if($thu=="Monday") $thu = 2;
            if($thu=="Tuesday") $thu = 3;
            if($thu=="Wednesday") $thu = 4;
            if($thu=="Thursday") $thu = 5;
            if($thu=="Friday") $thu = 6;
            if($thu=="Saturday") $thu = 7;
            $daycity = daycity::where('idday',$thu)->get();
            
            foreach($daycity as $dci){
                $cityy = city::where([['id',$dci->idcity],['idarea',3]])->first();
                if(count($cityy)>0){
                    $city3[$u][] = $cityy;
                }
            }
            $k=0;
            foreach($city3[$u] as $cty3){
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
                        $ketquamn[] = $table->find("div.dayso");
                        if(count($ketquamn[$v])==0){
                            $rmn[$u][$k] = $input;
                        }
                        else{
                            if( date( 'H' ) > 17 || ( isset( $ngay[$u] ) && $ngay[$u] !== date( 'd-m-Y' ) ) ) {
                                $j=0;
                                foreach( $input as $key => $value ){
                                    $rmn[$u][$k][$key] = $ketquamn[$v][$j]->innertext;
                                    $j++;
                                }
                            }
                            else {
                                $rmn[$u][$k] = $input;
                            }
                        }
                        $v++;
                        break;
                    }
                    if($test == false){
                        $rmn[$u][$k] = $input;
                    }
                }
                $k++;
            }
        }
        $thu = array();
        $u=0;
        foreach($ngay as $ng){
            $thu[] = date('l', strtotime($ng));
            if($thu[$u]=="Sunday") $thu[$u] = "Chủ nhật";
            if($thu[$u]=="Monday") $thu[$u] = "Thứ hai";
            if($thu[$u]=="Tuesday") $thu[$u] = "Thứ ba";
            if($thu[$u]=="Wednesday") $thu[$u] = "Thứ tư";
            if($thu[$u]=="Thursday") $thu[$u] = "Thứ năm";
            if($thu[$u]=="Friday") $thu[$u] = "Thứ sáu";
            if($thu[$u]=="Saturday") $thu[$u] = "Thứ bảy";
            $u++;
        }
        $kqmn = array();
        $i=0;
        $k=0;
        foreach($rmn as $r){
            $j=0;
            foreach($r as $rs){
                foreach($rs as $kq){
                    $kqmn[$i][$j][] = substr($kq,-2);
                }
                $j++;
            }
            $i++;
        }
        return view('page.kqxsmn',[
            'rmn'=>$rmn,
            'thu'=>$thu,
            'ngay'=>$ngay,
            'kqmn'=>$kqmn,
            'city'=>$city3
        ]);
    }
    public function getkqxsmnthu($thu){
        include('ketquaxoso/simple_html_dom.php');
        date_default_timezone_set('Asia/Ho_Chi_Minh');
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
        $rmn = array();
        $day = date("d-m-Y");
        $ngay = array();
        $kqmn = array();
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
        $v=0;
        $daycity = daycity::where('idday',$thu)->get();
            
        foreach($daycity as $dci){
            $cityy = city::where([['id',$dci->idcity],['idarea',3]])->first();
            if(count($cityy)>0){
                $city3[] = $cityy;
            }
        }
        for($u=0 ; $u<7; $u++){
            if($thu == $homnay){
                if( date( 'H' ) >= 17 ){
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
            $k=0;
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
                        $ketquamn[] = $table->find("div.dayso");
                        if(count($ketquamn[$v])==0){
                            $rmn[$u][$k] = $input;
                        }
                        else{
                            if( date( 'H' ) > 17 || ( isset( $ngay[$u] ) && $ngay[$u] !== date( 'd-m-Y' ) ) ) {
                                $j=0;
                                foreach( $input as $key => $value ){
                                    $rmn[$u][$k][$key] = $ketquamn[$v][$j]->innertext;
                                    $j++;
                                }
                            }
                            else {
                                $rmn[$u][$k] = $input;
                            }
                        }
                        $v++;
                        break;
                    }
                    if($test == false){
                        $rmn[$u][$k] = $input;
                    }
                }
                $k++;
            }
        }
        $i=0;
        $k=0;
        foreach($rmn as $r){
            $j=0;
            foreach($r as $rs){
                foreach($rs as $kq){
                    $kqmn[$i][$j][] = substr($kq,-2);
                }
                $j++;
            }
            $i++;
        }
        if($thu==1) $thuchu = "Chủ nhật";
        if($thu==2) $thuchu = "Thứ hai";
        if($thu==3) $thuchu = "Thứ ba";
        if($thu==4) $thuchu = "Thứ tư";
        if($thu==5) $thuchu = "Thứ năm";
        if($thu==6) $thuchu = "Thứ sáu";
        if($thu==7) $thuchu = "Thứ bảy";
        return view('page.kqxsmnthu',[
            'rmn'=>$rmn,
            'thu'=>$thu,
            'ngay'=>$ngay,
            'kqmn'=>$kqmn,
            'thuchu'=>$thuchu,
            'city'=>$city3
        ]);
    }
    public function getkqxsmnngay($ngay){
        include('ketquaxoso/simple_html_dom.php');
        date_default_timezone_set('Asia/Ho_Chi_Minh');
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
        $html = file_get_html("http://vesophuongtrang.com/ket-qua-xo-so/".$ngay.".html");
        $thu = date('l', strtotime($ngay));
        if($thu=="Sunday") {$thu = 1; $thuchu="Chủ nhật";}
        if($thu=="Monday") {$thu = 2;$thuchu="Thứ hai";}
        if($thu=="Tuesday") {$thu = 3;$thuchu="Thứ ba";}
        if($thu=="Wednesday") {$thu = 4;$thuchu="Thứ tư";}
        if($thu=="Thursday") {$thu = 5;$thuchu="Thứ năm";}
        if($thu=="Friday") {$thu = 6;$thuchu="Thứ sáu";}
        if($thu=="Saturday") {$thu = 7;$thuchu="Thứ bảy";}
        $city3 = array();
        $rmn = array();
        $daycity = daycity::where('idday',$thu)->get();
        
        foreach($daycity as $dci){
            $cityy = city::where([['id',$dci->idcity],['idarea',3]])->first();
            if(count($cityy)>0){
                $city3[] = $cityy;
            }
        }
        $j=0;
        $k=0;
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
                        if( date( 'H' ) > 17 || ( isset( $ngay ) && $ngay !== date( 'd-m-Y' ) ) ) {
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
            $k++;
        }
        for($i=0;$i<count($rmn);$i++){
            foreach($rmn[$i] as $kq){
                $kqmn[$i][] = substr($kq,-2);
            }
        }
        return view('page.kqxsmnngay',[
            'rmn'=>$rmn,
            'city'=>$city3,
            'kqmn'=>$kqmn,
            'thuchu'=>$thuchu,
            'ngay'=>$ngay
        ]);
    }
}
