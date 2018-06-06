<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kqxs;
use App\city;
use App\daycity;
use Auth;
use App\ketqua;

class AjaxController extends Controller
{
    //
    public function getdai($thu, $ngay){
        $city = array();
        $i = 0;
        $daycity = daycity::where('idday',$thu)->get();
        // dd($daycity);
        foreach($daycity as $d){
            $city[] = city::where('id',$d->idcity)->first();
        }
        // dd($city);
        foreach($city as $dai){
            echo '<tr>';
                echo '<td>';
                echo $dai->name;
                echo '</td>';
                echo '<td>';
                $kqxs = kqxs::where([
                    ['ngayxoso',$ngay],
                    ['iddaycity',$daycity[$i]->id]
                ])->get();
                // dd($daycity[$i]->id);
                if(count($kqxs)>0){
                    echo '<span style="color:green">';
                    echo 'Đã cập nhật';
                    echo '</span>';
                }
                else{
                    echo '<span style="color:red">';
                    echo 'Chưa cập nhật';
                    echo '</span>';
                }
                echo '</td>';
            echo '</tr>';
            $i++;
        }
    }
    public function getkqxs($idcity, $ngay){
        $thu = date('l', strtotime($ngay));
        if($thu=="Sunday") $thu = 1;
        if($thu=="Monday") $thu = 2;
        if($thu=="Tuesday") $thu = 3;
        if($thu=="Wednesday") $thu = 4;
        if($thu=="Thursday") $thu = 5;
        if($thu=="Friday") $thu = 6;
        if($thu=="Saturday") $thu = 7;
        $daycity = daycity::where([
            ['idcity',$idcity],
            ['idday',$thu]
        ])->first();
        $kqxs = kqxs::where([
            ['ngayxoso',$ngay],
            ['iddaycity',$daycity->id]
            ])->first();
            $a = count($kqxs);
        if(count($kqxs)==0){
            echo "Chưa có kết quả!";
        }
        else{
            $giaikqxs = giaikqxs::where('idkqxs',$kqxs->id)->get();
            $ketqua = array();
            foreach($giaikqxs as $kq){
                $ketqua[] = ketqua::where('idgiaikqxs',$kq->id)->get();
            }
            echo view('admin.page.kqxs.kqxs',[
                'ketqua'=>$ketqua
            ]);
        }
    }
    public function getcity($thu){
        $city = array();
        $daycity = daycity::where('idday',$thu)->get();
        foreach($daycity as $d){
            $city[] = city::where('id',$d->idcity)->first();
        }
        foreach($city as $dai){
            echo "<option  value='".$dai->id."'>".$dai->name."</option>";
        }
    }
    public function getketqua($idcity, $day){
        $city = city::find($idcity);
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        include('ketquaxoso/simple_html_dom.php');
        $r = array();
        // if( isset( $_GET['ngay'] ) ) {
        //     $html = file_get_html( 'http://ketqua.net/xo-so-truyen-thong.php?ngay=' . $_GET['ngay'] );
        // } else {
        //     $html = file_get_html( 'http://ketqua.net/' );
        // }
        $city = city::where('id',$idcity)->first();
        $name = $city->name;
        $ten = $city->name;;
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
        $name = str_replace(" ", "-", str_replace("&*#39;","",$name));
        $html = file_get_html("http://vesophuongtrang.com/ket-qua-xo-so/".$day.".html");
        $thu = date('l', strtotime($day));
        if($thu=="Sunday") $thu = "Chủ nhật";
        if($thu=="Monday") $thu = "Thứ hai";
        if($thu=="Tuesday") $thu = "Thứ ba";
        if($thu=="Wednesday") $thu = "Thứ tư";
        if($thu=="Thursday") $thu = "Thứ năm";
        if($thu=="Friday") $thu = "Thứ sáu";
        if($thu=="Saturday") $thu = "Thứ bảy";
        if($idcity==1){
            $input = array(
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
            $ketqua = $html->find("table.kqxsmienbac div.dayso");
            if(count($ketqua)==0){
                echo "Không có kết quả!";
            }
            else{
                if( date( 'H' ) > 19 || ( isset( $day ) && $day !== date( 'd-m-Y' ) ) ) {
                    $i=0;
                    foreach( $input as $key => $value ){
                        $r[$key] = $ketqua[$i]->innertext;
                        $i++;
                    }
                }
                else {
                    $r = $input;
                }
                // $thu = date('l', strtotime($day));
                // if($thu=="Sunday") $thu = "Chủ nhật";
                // if($thu=="Monday") $thu = "Thứ hai";
                // if($thu=="Tuesday") $thu = "Thứ ba";
                // if($thu=="Wednesday") $thu = "Thứ tư";
                // if($thu=="Thursday") $thu = "Thứ năm";
                // if($thu=="Friday") $thu = "Thứ sáu";
                // if($thu=="Saturday") $thu = "Thứ bảy";
    
                echo '<div class="title-ketqua" id="title">';
                echo 'Kết quả xổ số '.$city->name.' ';
                echo $thu.' ngày '.$day;
                echo '</div>';
                    
                echo '<table class="table table-bordered bootstrap-datatable datatable" style="width:100%;">';
                echo '<tbody>';
                    echo '<tr class="giai-dac-biet">';
                    echo '<td class="td|first">';
                    echo 'Giải ĐB';
                    echo '</td>';
                    echo '<td>';
                    echo '<b style="color:red" id="db">';
                    echo $r['rs_0_0'];
                    echo '</b>';
                    echo '</td>';
                    echo '</tr>';
        
                    echo '<tr class="alt">';
                    echo '<td class="td|first">';
                    echo 'Giải Nhất';
                    echo '</td>';
                    echo '<td id="giainhat">';
                    echo $r['rs_1_0'];
                    echo '</td>';
                    echo '</tr>';
        
                    echo '<tr class="">';
                    echo '<td class="td|first">';
                    echo 'Giải Nhì';
                    echo '</td>';
                    echo '<td id="giainhi">';
                    echo $r['rs_2_0'].' - '.$r['rs_2_1'];
                    echo '</td>';
                    echo '</tr>';
        
                    echo '<tr class="alt">';
                    echo '<td class="td|first">';
                    echo 'Giải Ba';
                    echo '</td>';
                    echo '<td id="giaiba">';
                    echo $r['rs_3_0'].' - '.$r['rs_3_1'].' - '.$r['rs_3_2'].' - '.$r['rs_3_3'].' - '.$r['rs_3_4'].' - '.$r['rs_3_5'];
                    echo '</td>';
                    echo '</tr>';
        
                    echo '<tr class="">';
                    echo '<td class="td|first">';
                    echo 'Giải Tư';
                    echo '</td>';
                    echo '<td id="giaitu">';
                    echo $r['rs_4_0'].' - '.$r['rs_4_1'].' - '.$r['rs_4_2'].' - '.$r['rs_4_3'];
                    echo '</td>';
                    echo '</tr>';
        
                    echo '<tr class="alt">';
                    echo '<td class="td|first">';
                    echo 'Giải Năm';
                    echo '</td>';
                    echo '<td id="giainam">';
                    echo $r['rs_5_0'].' - '.$r['rs_5_1'].' - '.$r['rs_5_2'].' - '.$r['rs_5_3'].' - '.$r['rs_5_4'].' - '.$r['rs_5_5'];
                    echo '</td>';
                    echo '</tr>';
        
                    echo '<tr class="">';
                    echo '<td class="td|first">';
                    echo 'Giải Sáu';
                    echo '</td>';
                    echo '<td id="giaisau">';
                    echo $r['rs_6_0'].' - '.$r['rs_6_1'].' - '.$r['rs_6_2'];
                    echo '</td>';
                    echo '</tr>';
                    
                    echo '<tr class="alt">';
                    echo '<td class="td|first">';
                    echo 'Giải Bảy';
                    echo '</td>';
                    echo '<td id="giaibay">';
                    echo $r['rs_7_0'].' - '.$r['rs_7_1'].' - '.$r['rs_7_2'].' - '.$r['rs_7_3'];
                    echo '</td>';
                    echo '</tr>';
                echo '</tbody>';
                echo '</table>';
            }
        }
        else{
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
            $tinh = $html->find("table.kqxsdaicol td.tentinh a");
            for($i=0;$i<count($tinh);$i++){
                if($ten=="Hồ Chí Minh") $ten = "TP. HCM";
                else if($ten=="Thừa Thiên Huế") $ten = "Thừa T. Huế";
                else if($ten=="Lâm Đồng") $ten = "Đà Lạt";
                else if($ten=="Đắc Lắc") $ten = "Đắk Lắk";
                else if($ten=="Đà Nẵng"){
                    if($thu == "Thứ tư")
                    $ten = "Đà Nẵng";
                    else if($thu == "Thứ bảy")
                    $ten = "Đ.Nẵng";
                }
                else if($ten=="Quảng Ngãi") $ten = "Q.Ngãi";
                else if($ten=="Đắc Nông") $ten = "Đ.Nông";
                else if($ten=="Long An") $ten = "L.An";
                else if($ten=="Hậu Giang") $ten = "H.Giang";
                else if($ten=="Bình Phước") $ten = "B.Phước";
                if($tinh[$i]->innertext==$ten){
                    $table = $html->find("table.kqxsdaicol",$i);
                    $ketqua = $table->find("div.dayso");
                    break;
                }
            }
            if(count($ketqua)==0){
                echo "Không có kết quả!";
            }
            else{
                if( date( 'H' ) > 15 || ( isset( $day ) && $day !== date( 'd-m-Y' ) ) ) {
                    $i=0;
                    foreach( $input as $key => $value ){
                        $r[$key] = $ketqua[$i]->innertext;
                        $i++;
                    }
                }
                else {
                    $r = $input;
                }
                    
    
                    echo '<div class="title-ketqua" id="title">';
                    echo 'Kết quả xổ số '.$city->name.' ';
                    echo $thu.' ngày '.$day;
                    echo '</div>';
    
                    echo '<table class="table table-bordered bootstrap-datatable datatable" style="width:100%;">';
                    echo '<tbody>';
                    echo '<tr class="giai-dac-biet">';
                    echo '<td class="td|first">';
                    echo 'Giải ĐB';
                    echo '</td>';
                    echo '<td>';
                    echo '<b style="color:red" id="db">';
                    echo $r['rs_0_0'];
                    echo '</b>';
                    echo '</td>';
                    echo '</tr>';
        
                    echo '<tr class="alt">';
                    echo '<td class="td|first">';
                    echo 'Giải Nhất';
                    echo '</td>';
                    echo '<td id="giainhat">';
                    echo $r['rs_1_0'];
                    echo '</td>';
                    echo '</tr>';
        
                    echo '<tr class="">';
                    echo '<td class="td|first">';
                    echo 'Giải Nhì';
                    echo '</td>';
                    echo '<td id="giainhi">';
                    echo $r['rs_2_0'];
                    echo '</td>';
                    echo '</tr>';
        
                    echo '<tr class="alt">';
                    echo '<td class="td|first">';
                    echo 'Giải Ba';
                    echo '</td>';
                    echo '<td id="giaiba">';
                    echo $r['rs_3_0'].' - '.$r['rs_3_1'];
                    echo '</td>';
                    echo '</tr>';
        
                    echo '<tr class="">';
                    echo '<td class="td|first">';
                    echo 'Giải Tư';
                    echo '</td>';
                    echo '<td id="giaitu">';
                    echo $r['rs_4_0'].' - '.$r['rs_4_1'].' - '.$r['rs_4_2'].' - '.$r['rs_4_3'].' - '.$r['rs_4_4'].' - '.$r['rs_4_5'].' - '.$r['rs_4_6'];
                    echo '</td>';
                    echo '</tr>';
        
                    echo '<tr class="alt">';
                    echo '<td class="td|first">';
                    echo 'Giải Năm';
                    echo '</td>';
                    echo '<td id="giainam">';
                    echo $r['rs_5_0'];
                    echo '</td>';
                    echo '</tr>';
        
                    echo '<tr class="">';
                    echo '<td class="td|first">';
                    echo 'Giải Sáu';
                    echo '</td>';
                    echo '<td id="giaisau">';
                    echo $r['rs_6_0'].' - '.$r['rs_6_1'].' - '.$r['rs_6_2'];
                    echo '</td>';
                    echo '</tr>';
                    
                    echo '<tr class="alt">';
                    echo '<td class="td|first">';
                    echo 'Giải Bảy';
                    echo '</td>';
                    echo '<td id="giaibay">';
                    echo $r['rs_7_0'];
                    echo '</td>';
                    echo '</tr>';
    
                    echo '<tr class="">';
                    echo '<td class="td|first">';
                    echo 'Giải Tám';
                    echo '</td>';
                    echo '<td id="giaitam">';
                    echo $r['rs_8_0'];
                    echo '</td>';
                    echo '</tr>';
                    echo '</tbody>';
                    echo '</table>';
            }
            
        }
    }
    public function geta(){
        $day = date("d-m-Y");
        $plus = 1;
        if(date( 'H' ) < 16){
            $daymn = date("d-m-Y",strtotime("$day -$plus day"));
            $thumn = date('l', strtotime($daymn));
            if($thumn=="Sunday") $thumn = "Chủ nhật";
            if($thumn=="Monday") $thumn = "Thứ hai";
            if($thumn=="Tuesday") $thumn = "Thứ ba";
            if($thumn=="Wednesday") $thumn = "Thứ tư";
            if($thumn=="Thursday") $thumn = "Thứ năm";
            if($thumn=="Friday") $thumn = "Thứ sáu";
            if($thumn=="Saturday") $thumn = "Thứ bảy";
        }
        else{
            $daymn = $day;
            $thumn = date('l', strtotime($day));
            if($thumn=="Sunday") $thumn = "Chủ nhật";
            if($thumn=="Monday") $thumn = "Thứ hai";
            if($thumn=="Tuesday") $thumn = "Thứ ba";
            if($thumn=="Wednesday") $thumn = "Thứ tư";
            if($thumn=="Thursday") $thumn = "Thứ năm";
            if($thumn=="Friday") $thumn = "Thứ sáu";
            if($thumn=="Saturday") $thumn = "Thứ bảy";
        }
        if(date( 'H' ) < 17){
            $daymt = date("d-m-Y",strtotime("$day -$plus day"));
            $thumt = date('l', strtotime($daymt));
            if($thumt=="Sunday") $thumt = "Chủ nhật";
            if($thumt=="Monday") $thumt = "Thứ hai";
            if($thumt=="Tuesday") $thumt = "Thứ ba";
            if($thumt=="Wednesday") $thumt = "Thứ tư";
            if($thumt=="Thursday") $thumt = "Thứ năm";
            if($thumt=="Friday") $thumt = "Thứ sáu";
            if($thumt=="Saturday") $thumt = "Thứ bảy";
        }
        else{
            $daymt = $day;
            $thumn = date('l', strtotime($day));
            if($thumt=="Sunday") $thumt = "Chủ nhật";
            if($thumt=="Monday") $thumt = "Thứ hai";
            if($thumt=="Tuesday") $thumt = "Thứ ba";
            if($thumt=="Wednesday") $thumt = "Thứ tư";
            if($thumt=="Thursday") $thumt = "Thứ năm";
            if($thumt=="Friday") $thumt = "Thứ sáu";
            if($thumt=="Saturday") $thumt = "Thứ bảy";
        }
        if(date( 'H' ) < 18){
            $daymb = date("d-m-Y",strtotime("$day -$plus day"));
            $thumb = date('l', strtotime($daymb));
            if($thumb=="Sunday") $thumb = "Chủ nhật";
            if($thumb=="Monday") $thumb = "Thứ hai";
            if($thumb=="Tuesday") $thumb = "Thứ ba";
            if($thumb=="Wednesday") $thumb = "Thứ tư";
            if($thumb=="Thursday") $thumb = "Thứ năm";
            if($thumb=="Friday") $thumb = "Thứ sáu";
            if($thumb=="Saturday") $thumb = "Thứ bảy";
        }
        else{
            $daymb = $day;
            $thumb = date('l', strtotime($day));
            if($daymb=="Sunday") $daymb = "Chủ nhật";
            if($daymb=="Monday") $daymb = "Thứ hai";
            if($daymb=="Tuesday") $daymb = "Thứ ba";
            if($daymb=="Wednesday") $daymb = "Thứ tư";
            if($daymb=="Thursday") $daymb = "Thứ năm";
            if($daymb=="Friday") $daymb = "Thứ sáu";
            if($daymb=="Saturday") $daymb = "Thứ bảy";
        }
        return view('page.tructiep',[
            'daymn'=>$daymn,
            'daymt'=>$daymt,
            'daymb'=>$daymb,
            'thumn'=>$thumn,
            'thumt'=>$thumt,
            'thumb'=>$thumb
        ]);
    }
    public function getructiepmn(){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        include('ketquaxoso/simple_html_dom.php');
        $html = file_get_html("http://xoso.me/xo-so-truc-tiep.html");
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
        $tinhmn = $html->find("div#load_kq_mn_0 tbody tr",0);
        $tinhdiv = $html->find("div#load_kq_mn_0",0);
        // dd($tinhdiv->innertext);
        $tinhtable = $tinhdiv->find("table",0);
        // dd($tinhtable->innertext);
        $tinhtr = $tinhtable->find("tr");
        // dd(count($tinhtr));
        $tinh = $tinhmn->find("th");
        $th = array();
        $kq = array();
        
        $date = date("d-m-Y");
        if(date( 'H' ) < 16){
            $plus = 1;
            $date = date("d-m-Y",strtotime("$date -$plus day"));
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
        $city3 = array();
        foreach($daycity as $dci){
            $cityy = city::where([['id',$dci->idcity],['idarea',3]])->first();
            if(count($cityy)>0){
                $city3[] = $cityy;
            }
        }
        foreach($city3 as $cty3){
            $ten = $cty3->name;
            if($ten == "Lâm Đồng"){
                $ten = "Đà Lạt";
            }
            else if($ten == "Hồ Chí Minh") $ten = "TP Hồ Chí Minh";
            for($g=1;$g<count($tinh);$g++){
                $th = $tinhmn->find("th",$g);
                $b = $th->find("b",0);
                if($b->innertext == $ten){
                    for($i=1;$i<count($tinhtr);$i++){
                        $tinhtd = $tinhtr[$i]->find("td",$g);
                        $tinhdiv = $tinhtd->find("div");
                        for($j=0;$j<count($tinhdiv);$j++){
                            $kq[$g][$i][] = $tinhdiv[$j]->innertext;
                        }
                    }
                    break;
                }
            }
        }
        $rmn = array();
        $arr = array();
        $i=0;
        foreach($kq as $k){
            foreach($k as $q){
                foreach($q as $t){
                    $arr[$i][] = $t;
                }
            }
            $i++;
        }
        for($i=0;$i<count($arr);$i++){
            $x=0;
            foreach( $input as $key => $value ){
                if($arr[$i][$x]!=""){
                    $rmn[$i][$key] = $arr[$i][$x];
                }
                else $rmn[$i][$key] = '<img class="a1" src="ketquaxoso/Clock.gif" width="20" />';
                $x++;
            }
        }
        return view('page.ajaxmiennam',[
            'rmn'=>$rmn,
            'city3'=>$city3,
        ]);
    }
    public function getructiepmt(){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        include('ketquaxoso/simple_html_dom.php');
        $html = file_get_html("http://xoso.me/xo-so-truc-tiep.html");
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
        $tinhmn = $html->find("div#load_kq_mt_0 tbody tr",0);
        $tinhdiv = $html->find("div#load_kq_mt_0",0);
        // dd($tinhdiv->innertext);
        $tinhtable = $tinhdiv->find("table",0);
        // dd($tinhtable->innertext);
        $tinhtr = $tinhtable->find("tr");
        // dd(count($tinhtr));
        $tinh = $tinhmn->find("th");
        $th = array();
        $kq = array();
        
        $date = date("d-m-Y");
        if(date( 'H' ) < 17){
            $plus = 1;
            $date = date("d-m-Y",strtotime("$date -$plus day"));
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
        foreach($daycity as $dci){
            $cityy = city::where([['id',$dci->idcity],['idarea',2]])->first();
            if(count($cityy)>0){
                $city2[] = $cityy;
            }
        }
        foreach($city2 as $cty2){
            $ten = $cty2->name;
            for($g=1;$g<count($tinh);$g++){
                $th = $tinhmn->find("th",$g);
                $b = $th->find("b",0);
                if($b->innertext == $ten){
                    for($i=1;$i<count($tinhtr);$i++){
                        $tinhtd = $tinhtr[$i]->find("td",$g);
                        $tinhdiv = $tinhtd->find("div");
                        for($j=0;$j<count($tinhdiv);$j++){
                            $kq[$g][$i][] = $tinhdiv[$j]->innertext;
                        }
                    }
                    break;
                }
            }
        }
        $rmt = array();
        $arr = array();
        $i=0;
        foreach($kq as $k){
            foreach($k as $q){
                foreach($q as $t){
                    $arr[$i][] = $t;
                }
            }
            $i++;
        }
        for($i=0;$i<count($arr);$i++){
            $x=0;
            foreach( $input as $key => $value ){
                if($arr[$i][$x]!=""){
                    $rmt[$i][$key] = $arr[$i][$x];
                }
                else $rmt[$i][$key] = '<img class="a1" src="ketquaxoso/Clock.gif" width="20" />';
                $x++;
            }
        }
        return view('page.ajaxmientrung',[
            'rmt'=>$rmt,
            'city2'=>$city2
        ]);
    }
    public function getructiepmb(){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        include('ketquaxoso/simple_html_dom.php');
        $html = file_get_html("http://xoso.me/xo-so-truc-tiep.html");
        $input = array(
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
        $ketqua = $html->find("div#load_kq_mb_0",0)->find("table",0)->find("td.number b");
        $i=0;
        foreach( $input as $key => $value ){
            if($ketqua[$i]->innertext!=""){
                $rmb[$key] = $ketqua[$i]->innertext;
            }
            else{
                $rmb[$key] = '<img class="a" src="ketquaxoso/Clock.gif" width="20" />';
            }
            $i++;
        }
        return view('page.ajaxmienbac',[
            'rmb'=>$rmb
        ]);
    }
}
