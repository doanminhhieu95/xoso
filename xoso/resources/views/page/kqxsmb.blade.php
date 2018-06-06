@extends('master') @section('content')
<?php 
    $date = date("d-m-Y");
    $plus = 1;
?>
<div class="col-l">
    <div class="box">
        <div class="bg_gray">
            <div class="opt_date_full txt-center clearfix">
                <a href="kqxsmb/ngay-<?php
                echo date("d-m-Y",strtotime("$date -$plus day"));
                ?>" class="ic-pre fl" title="KQXSMB ngày {{date("d-m-Y",strtotime("$date -$plus day"))}}"></a>
                <div class="in-block">
                    <strong>Thứ sáu</strong> -
                    <input type="text" class="nobor" value="{{$date}}" id="searchDate" /> </div>
                <a href="kqxsmb/ngay-<?php
                echo date("d-m-Y",strtotime("$date +$plus day"));
                ?>" class="ic-next" title="KQXSMB ngày {{date("d-m-Y",strtotime("$date +$plus day"))}}"></a>
            </div>
        </div>
    </div>
    <div class="link-du-doan">
        <a class="text-link-ads" href="http://cauvang6868.com" title="http://cauvang6868.com" rel="nofollow" target="_blank">
            <span>
                <img src="css/images/hot2.gif" alt="http://cauvang6868.com" title="http://cauvang6868.com">
            </span>
            <b style="color:#3c8dbc">Lô cao cấp</b>
        </a>
        <a class="text-link-ads" href="http://xoso82.com" title="http://xoso82.com" rel="nofollow" target="_blank">
            <span>
                <img src="css/images/hot2.gif" alt="http://xoso82.com" title="http://xoso82.com">
            </span>
            <b style="color:#3c8dbc">Soi cầu miền Bắc</b>
        </a>
        <!--<a class="text-link-ads" href="http://soicau98.top" title="soicau98.top" rel="nofollow" target="_blank"><span><img src="css/images/hot2.gif" alt="http://soicau98.top" title="http://soicau98.top"></span><b class="clnote">Độc thủ lô</b></a>-->
        <a class="text-link-ads" href="http://lodepphatloc.com" title="lodepphatloc.com" rel="nofollow" target="_blank">
            <span>
                <img src="css/images/hot2.gif" alt="http://lodepphatloc.com" title="http://lodepphatloc.com">
            </span>
            <b class="clnote">Lô siêu chuẩn</b>
        </a>
        <a class="text-link-ads" href="http://cauvip777.net" title="cauvip777.net" rel="nofollow" target="_blank">
            <span>
                <img src="css/images/hot2.gif" alt="cauvip777.net" title="cauvip777.net">
            </span>
            <b class="clnote">Cầu đẹp 2018</b>
        </a>
        <a class="text-link-ads" href="http://cauvang666.net" title="cauvang666.net" rel="nofollow" target="_blank">
            <span>
                <img src="css/images/hot2.gif" alt="cauvang666.net" title="cauvang666.net">
            </span>
            <b class="clnote">Cầu chuẩn XSMB</b>
        </a>
        <a class="text-link-ads" href="http://102xoso.com" title="102xoso.com" rel="nofollow" target="_blank">
            <span>
                <img src="css/images/hot2.gif" alt="102xoso.com" title="102xoso.com">
            </span>
            <b class="clnote">Lô siêu Vip</b>
        </a>
    </div>
    <script></script>
    <div class="box mo-thuong-ngay">
        <h2 class="title-bor">
            <strong>Các tỉnh mở thưởng hôm nay</strong>
        </h2>
        <table class="colgiai" cellpadding="0" cellspacing="0" border="0" width="100%">
            <tbody>
                <tr>
                    <td>
                        <a href="/mien-nam/xsvl-ket-qua-xo-so-vinh-long-p21.html" title="XSVL">Vĩnh Long</a>
                    </td>
                    <td>
                        <a href="/mien-trung/xsgl-ket-qua-xo-so-gia-lai-p27.html" title="XSGL">Gia Lai</a>
                    </td>
                    <td>
                        <a href="/kqxsmb-xstd-ket-qua-xo-so-mien-bac.html" title="XSMB">Miền Bắc</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/mien-nam/xsbd-ket-qua-xo-so-binh-duong-p5.html" title="XSBD">Bình Dương</a>
                    </td>
                    <td>
                        <a href="/mien-trung/xsnt-ket-qua-xo-so-ninh-thuan-p30.html" title="XSNT">Ninh Thuận</a>
                    </td>
                    <td>
                        <a href="/ket-qua-xo-so-dien-toan.html" title="Điện toán">Điện toán</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/mien-nam/xstv-ket-qua-xo-so-tra-vinh-p20.html" title="XSTV">Trà Vinh</a>
                    </td>
                    <td></td>
                    <td>
                        <a href="/kqxs-mega-645-ket-qua-xo-so-mega-6-45-vietlott-ngay-hom-nay.html" title="Mega 6/45">Mega 6/45</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <ul class="tab-panel">
        <li class="active">
            <a href="/kqxsmb-xstd-ket-qua-xo-so-mien-bac.html">Miền bắc</a>
        </li>
        <li>
            <a href="/kqxsmb-xstd-xshn-sxmb-ket-qua-xo-so-mien-bac-thu-2.html" title="Xsmb Thứ 2">Thứ 2</a>
        </li>
        <li>
            <a href="/kqxsmb-xstd-xshn-sxmb-ket-qua-xo-so-mien-bac-thu-3.html" title="Xsmb Thứ 3">Thứ 3</a>
        </li>
        <li>
            <a href="/kqxsmb-xstd-xshn-sxmb-ket-qua-xo-so-mien-bac-thu-4.html" title="Xsmb Thứ 4">Thứ 4</a>
        </li>
        <li>
            <a href="/kqxsmb-xstd-xshn-sxmb-ket-qua-xo-so-mien-bac-thu-5.html" title="Xsmb Thứ 5">Thứ 5</a>
        </li>
        <li>
            <a href="/kqxsmb-xstd-xshn-sxmb-ket-qua-xo-so-mien-bac-thu-6.html" title="Xsmb Thứ 6">Thứ 6</a>
        </li>
        <li>
            <a href="/kqxsmb-xstd-xshn-sxmb-ket-qua-xo-so-mien-bac-thu-7.html" title="Xsmb Thứ 7">Thứ 7</a>
        </li>
        <li>
            <a href="/kqxsmb-xstd-xshn-sxmb-ket-qua-xo-so-mien-bac-chu-nhat.html" title="Xsmb Chủ nhật">CN</a>
        </li>
    </ul>
    @for($i=0;$i<count($rmb);$i++)
    <div class="box">
        <h2 class="title-bor clearfix kq-title">
            <a class="title-a" href="/kqxsmb-xstd-ket-qua-xo-so-mien-bac.html" title="XS MB">XS MB</a> »
            <a class="title-a" href="/kqxsmb-xstd-xshn-sxmb-ket-qua-xo-so-mien-bac-thu-5.html" title="XSMB {{$thu[$i]}}">XSMB {{$thu[$i]}}</a> »
            <a class="title-a" href="/kqxsmb-xstd-ket-qua-xo-so-mien-bac-ngay-15-03-2018.html" title="Xổ số miền Bắc ngày {{$ngay[$i]}}">Xổ số miền Bắc ngày {{$ngay[$i]}}</a> {{$thu[$i]}}</h2>
        <div id="load_kq_mb_0">
            <div id="kq" class="one-city">
                <table width="100%" cellspacing="0" cellpadding="0" border="0" data-title="" class="kqmb extendable">
                    <tbody>
                        <tr class="db">
                            <td class="txt-giai">Đặc biệt</td>
                            <td colspan="12" class="number">
                                <b>{!!$rmb[$i]['rs_0_0']!!}</b>
                            </td>
                        </tr>
                        <tr class="bg_f6">
                            <td class="txt-giai">Giải nhất</td>
                            <td colspan="12" class="number">
                                <b>{!!$rmb[$i]['rs_1_0']!!}</b>
                            </td>
                        </tr>
                        <tr>
                            <td class="txt-giai">Giải nhì</td>
                            <td colspan="6" class="number">
                                <b>{!!$rmb[$i]['rs_2_0']!!}</b>
                            </td>
                            <td colspan="6" class="number">
                                <b class="">{!!$rmb[$i]['rs_2_1']!!}</b>
                            </td>
                        </tr>
                        <tr class="giai3 bg_ef">
                            <td class="txt-giai" rowspan="2">Giải ba</td>
                            <td class="number" colspan="4">
                                <b>{!!$rmb[$i]['rs_3_0']!!}</b>
                            </td>
                            <td class="number" colspan="4">
                                <b class="">{!!$rmb[$i]['rs_3_1']!!}</b>
                            </td>
                            <td class="number" colspan="4">
                                <b class="">{!!$rmb[$i]['rs_3_2']!!}</b>
                            </td>
                        </tr>
                        <tr class="bg_ef">
                            <td class="number" colspan="4">
                                <b>{!!$rmb[$i]['rs_3_3']!!}</b>
                            </td>
                            <td class="number" colspan="4">
                                <b>{!!$rmb[$i]['rs_3_4']!!}</b>
                            </td>
                            <td class="number" colspan="4">
                                <b>{!!$rmb[$i]['rs_3_5']!!}</b>
                            </td>
                        </tr>
                        <tr>
                            <td class="txt-giai">Giải tư</td>
                            <td colspan="3" class="number">
                                <b>{!!$rmb[$i]['rs_4_0']!!}</b>
                            </td>
                            <td colspan="3" class="number">
                                <b>{!!$rmb[$i]['rs_4_1']!!}</b>
                            </td>
                            <td colspan="3" class="number">
                                <b>{!!$rmb[$i]['rs_4_2']!!}</b>
                            </td>
                            <td colspan="3" class="number">
                                <b>{!!$rmb[$i]['rs_4_3']!!}</b>
                            </td>
                        </tr>
                        <tr class="giai5 bg_ef">
                            <td class="txt-giai" rowspan="2">Giải năm</td>
                            <td class="number" colspan="4">
                                <b>{!!$rmb[$i]['rs_5_0']!!}</b>
                            </td>
                            <td class="number" colspan="4">
                                <b>{!!$rmb[$i]['rs_5_1']!!}</b>
                            </td>
                            <td class="number" colspan="4">
                                <b>{!!$rmb[$i]['rs_5_2']!!}</b>
                            </td>
                        </tr>
                        <tr class="bg_ef">
                            <td class="number" colspan="4">
                                <b>{!!$rmb[$i]['rs_5_3']!!}</b>
                            </td>
                            <td class="number" colspan="4">
                                <b>{!!$rmb[$i]['rs_5_4']!!}</b>
                            </td>
                            <td class="number" colspan="4">
                                <b>{!!$rmb[$i]['rs_5_5']!!}</b>
                            </td>
                        </tr>
                        <tr>
                            <td class="txt-giai">Giải sáu</td>
                            <td colspan="4" class="number">
                                <b>{!!$rmb[$i]['rs_6_0']!!}</b>
                            </td>
                            <td colspan="4" class="number">
                                <b>{!!$rmb[$i]['rs_6_1']!!}</b>
                            </td>
                            <td colspan="4" class="number">
                                <b>{!!$rmb[$i]['rs_6_2']!!}</b>
                            </td>
                        </tr>
                        <tr class="bg_ef">
                            <td class="txt-giai">Giải bảy</td>
                            <td colspan="3" class="number">
                                <b>{!!$rmb[$i]['rs_7_0']!!}</b>
                            </td>
                            <td colspan="3" class="number">
                                <b>{!!$rmb[$i]['rs_7_1']!!}</b>
                            </td>
                            <td colspan="3" class="number">
                                <b>{!!$rmb[$i]['rs_7_2']!!}</b>
                            </td>
                            <td colspan="3" class="number">
                                <b>{!!$rmb[$i]['rs_7_3']!!}</b>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="buttons-wrapper"></div>
            <div class="txt-center">
                <!--<ins class="adsbygoogle dspblock hdc-csi_square" data-ad-client="ca-pub-3084353470359421" data-ad-slot="5842326193" data-ad-format="auto"></ins>-->
                <!--    <ins class="adsbygoogle dspblock hdc-csi_square" data-ad-client="ca-pub-8721835179689670" data-ad-slot="5705703893" data-ad-format="auto"></ins>-->
                <ins class="adsbygoogle dspblock hdc-csi_square" data-ad-client="ca-pub-6036579657774106" data-ad-slot="5498735679" data-ad-format="auto"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <div class="cp-sms">
                <p>
                    <span>Kết quả
                        <strong>xổ số Miền bắc</strong> sớm nhất:</span>
                    <strong class="clsms">XS MB</strong> gửi
                    <strong class="clsms">6022 (1000đ)</strong>
                </p>
                <!--<p><span>Lấy số đẹp <strong>xổ số Miền bắc</strong>, Soạn:</span> <strong class="clsms">OK MB</strong> gửi <strong class="clsms">8512 (5000đ)</strong></p>-->
            </div>
            <div id="dd" class="col-firstlast">
                <table class="firstlast-mb fl" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr class="header">
                            <th>Đầu</th>
                            <th>Đuôi</th>
                        </tr>
                        @for($k=0;$k<10;$k++)
                            <tr>
                                <td>
                                    <b class="clnote">{{$k}}</b>
                                </td>
                                <td><?php 
                                $j=0;
                                for($u=0;$u<count($kqmb[$i]);$u++){
                                    if(substr($kqmb[$i][$u],0,1)==(string)$k){
                                        if($j==0){
                                            echo substr($kqmb[$i][$u],-1);
                                            $j=1;
                                        }else echo ', '.substr($kqmb[$i][$u],-1);
                                    }
                                }
                                ?></td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
                <table cellspacing="0" cellpadding="0" border="0" class="firstlast-mb fr">
                    <tbody>
                        <tr class="header">
                            <th>Đầu</th>
                            <th>Đuôi</th>
                        </tr>
                        @for($k=0;$k<10;$k++)
                            <tr>
                                <td><?php $j=0; for($u=0;$u<count($kqmb[$i]);$u++){ if(substr($kqmb[$i][$u],-1)==(string)$k){if($j==0){echo substr($kqmb[$i][$u],0,1);$j=1;}else echo ', '.substr($kqmb[$i][$u],0,1);}}?></td>
                                <td>
                                    <b class="clnote">{{$k}}</b>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
            <div class="conect_out">
                <span class="bg_brown">
                    <a rel="nofollow" class="ic ic-print" title="In vé dò" href="/in-ve-do.html">In vé dò</a>
                </span>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="see-more">
            <ul class="list-unstyle list-html-link">
                <li>
                    <a href="/xo-so-truc-tiep/xsmb-mien-bac.html" title="XSMB trực tiếp">XSMB trực tiếp</a>
                </li>
                <li>
                    <a href="/kqxsmb-ket-qua-xo-so-mien-bac-hom-qua.html" title="XSMB hôm qua">XSMB hôm qua</a>
                </li>
                <li>
                    <a href="/thong-ke-lo-gan-xo-so-mien-bac-xsmb.html" title="Lô gan miền Bắc">Lô gan miền Bắc</a>
                </li>
                <li>
                    <a href="/du-doan-ket-qua-xo-so-mien-bac-xsmb-c228.html" title="Dự đoán XSMB">Dự đoán XSMB</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="txt-center">
        <!--    <ins class="adsbygoogle" style="display:block" data-ad-format="fluid" data-ad-client="ca-pub-3084353470359421" data-ad-slot="2809412592"></ins>-->
        <ins class="adsbygoogle dspblock hdc-csi_square " data-ad-client="ca-pub-3084353470359421" data-ad-slot="3051288199"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
    @endfor
    <div class="box">
        <h2 class="title-bor bold">Thống kê loto gan miền Bắc 10 lần mở thưởng gần đây nhất</h2>
        <div class="scoll">
            <table width="100%" cellspacing="0" cellpadding="0" border="0" class="mag0">
                <tr>
                    <th>Bộ số</th>
                    <th>Ngày ra gần đây</th>
                    <th>Số ngày gan</th>
                    <th>Gan cực đại</th>
                </tr>
                <tr>
                    <td>
                        <strong>03</strong>
                    </td>
                    <td>
                        <a style="text-decoration: underline;" class="bold" href="/kqxsmb-xstd-ket-qua-xo-so-mien-bac-ngay-27-02-2018.html" title="KQXS miền Bắc ngày 27-02-2018">27-02-2018</a>
                    </td>
                    <td class="s18 clred bold">16</td>
                    <td class="s18 clred bold">33</td>
                </tr>
                <tr>
                    <td>
                        <strong>33</strong>
                    </td>
                    <td>
                        <a style="text-decoration: underline;" class="bold" href="/kqxsmb-xstd-ket-qua-xo-so-mien-bac-ngay-28-02-2018.html" title="KQXS miền Bắc ngày 28-02-2018">28-02-2018</a>
                    </td>
                    <td class="s18 clred bold">15</td>
                    <td class="s18 clred bold">30</td>
                </tr>
                <tr>
                    <td>
                        <strong>78</strong>
                    </td>
                    <td>
                        <a style="text-decoration: underline;" class="bold" href="/kqxsmb-xstd-ket-qua-xo-so-mien-bac-ngay-28-02-2018.html" title="KQXS miền Bắc ngày 28-02-2018">28-02-2018</a>
                    </td>
                    <td class="s18 clred bold">15</td>
                    <td class="s18 clred bold">33</td>
                </tr>
                <tr>
                    <td>
                        <strong>84</strong>
                    </td>
                    <td>
                        <a style="text-decoration: underline;" class="bold" href="/kqxsmb-xstd-ket-qua-xo-so-mien-bac-ngay-04-03-2018.html" title="KQXS miền Bắc ngày 04-03-2018">04-03-2018</a>
                    </td>
                    <td class="s18 clred bold">11</td>
                    <td class="s18 clred bold">37</td>
                </tr>
                <tr>
                    <td>
                        <strong>01</strong>
                    </td>
                    <td>
                        <a style="text-decoration: underline;" class="bold" href="/kqxsmb-xstd-ket-qua-xo-so-mien-bac-ngay-05-03-2018.html" title="KQXS miền Bắc ngày 05-03-2018">05-03-2018</a>
                    </td>
                    <td class="s18 clred bold">10</td>
                    <td class="s18 clred bold">24</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="txt-right pad5">
            <a rel="nofollow" title="Thống kê loto gan" href="/thong-ke-lo-gan-xo-so-mien-bac-xsmb.html">Xem thêm..</a>
        </div>
    </div>
    <div class="box tk_loto_cl" id="tk_loto1">
        <h2 class="title-bor bold"> Thống kê loto - xổ số Miền Bắc đến ngày 16-03-2018</h2>
        <ul class="list-loto-mb">
            <li>
                <h3 class="bg_ef">
                    <strong>Các cặp số xuất hiện nhiều nhất trong vòng 10 lần quay gần đây</strong>
                </h3>
                <ul>
                    <li class="clearfix bg_f9">
                        <label class="fl">
                            <strong class="clred">06</strong>
                        </label>
                        <div class="fl">
                            <span class="in-block">8 lần</span>
                            <em> Tăng 5 lần so với 10 lần trước</em>
                        </div>
                    </li>
                    <li class="clearfix bg_f9">
                        <label class="fl">
                            <strong class="clred">07</strong>
                        </label>
                        <div class="fl">
                            <span class="in-block">7 lần</span>
                            <em> Tăng 6 lần so với 10 lần trước</em>
                        </div>
                    </li>
                    <li class="clearfix bg_f9">
                        <label class="fl">
                            <strong class="clred">14</strong>
                        </label>
                        <div class="fl">
                            <span class="in-block">7 lần</span>
                            <em> Tăng 6 lần so với 10 lần trước</em>
                        </div>
                    </li>
                    <li class="clearfix bg_f9">
                        <label class="fl">
                            <strong class="clred">75</strong>
                        </label>
                        <div class="fl">
                            <span class="in-block">7 lần</span>
                            <em> Tăng 6 lần so với 10 lần trước</em>
                        </div>
                    </li>
                    <li class="clearfix bg_f9">
                        <label class="fl">
                            <strong class="clred">95</strong>
                        </label>
                        <div class="fl">
                            <span class="in-block">6 lần</span>
                            <em> Tăng 5 lần so với 10 lần trước</em>
                        </div>
                    </li>
                    <li class="clearfix bg_f9">
                        <label class="fl">
                            <strong class="clred">58</strong>
                        </label>
                        <div class="fl">
                            <span class="in-block">5 lần</span>
                            <em> Bằng so với lần trước</em>
                        </div>
                    </li>
                    <li class="clearfix bg_f9">
                        <label class="fl">
                            <strong class="clred">98</strong>
                        </label>
                        <div class="fl">
                            <span class="in-block">5 lần</span>
                            <em> Tăng 2 lần so với 10 lần trước</em>
                        </div>
                    </li>
                    <li class="clearfix bg_f9">
                        <label class="fl">
                            <strong class="clred">09</strong>
                        </label>
                        <div class="fl">
                            <span class="in-block">4 lần</span>
                            <em> Bằng so với lần trước</em>
                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <h3 class="bg_ef">
                    <strong>Các cặp số xuất hiện nhiều nhất trong vòng 20 lần quay gần đây</strong>
                </h3>
                <ul>
                    <li class="clearfix bg_f9">
                        <label class="fl">
                            <strong class="clred">06</strong>
                        </label>
                        <div class="fl">
                            <span class="in-block">11 lần</span>
                            <em> Tăng 7 lần so với 20 lần trước</em>
                        </div>
                    </li>
                    <li class="clearfix bg_f9">
                        <label class="fl">
                            <strong class="clred">29</strong>
                        </label>
                        <div class="fl">
                            <span class="in-block">11 lần</span>
                            <em> Tăng 7 lần so với 20 lần trước</em>
                        </div>
                    </li>
                    <li class="clearfix bg_f9">
                        <label class="fl">
                            <strong class="clred">19</strong>
                        </label>
                        <div class="fl">
                            <span class="in-block">10 lần</span>
                            <em> Tăng 7 lần so với 20 lần trước</em>
                        </div>
                    </li>
                    <li class="clearfix bg_f9">
                        <label class="fl">
                            <strong class="clred">39</strong>
                        </label>
                        <div class="fl">
                            <span class="in-block">10 lần</span>
                            <em> Tăng 9 lần so với 20 lần trước</em>
                        </div>
                    </li>
                    <li class="clearfix bg_f9">
                        <label class="fl">
                            <strong class="clred">52</strong>
                        </label>
                        <div class="fl">
                            <span class="in-block">10 lần</span>
                            <em> Tăng 4 lần so với 20 lần trước</em>
                        </div>
                    </li>
                    <li class="clearfix bg_f9">
                        <label class="fl">
                            <strong class="clred">58</strong>
                        </label>
                        <div class="fl">
                            <span class="in-block">10 lần</span>
                            <em> Tăng 7 lần so với 20 lần trước</em>
                        </div>
                    </li>
                    <li class="clearfix bg_f9">
                        <label class="fl">
                            <strong class="clred">85</strong>
                        </label>
                        <div class="fl">
                            <span class="in-block">10 lần</span>
                            <em> Tăng 5 lần so với 20 lần trước</em>
                        </div>
                    </li>
                    <li class="clearfix bg_f9">
                        <label class="fl">
                            <strong class="clred">27</strong>
                        </label>
                        <div class="fl">
                            <span class="in-block">9 lần</span>
                            <em> Tăng 6 lần so với 20 lần trước</em>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="box">
        <h2 class="title-bor">
            <strong>Kết quả xổ số hôm qua ngày 15/03/2018</strong>
        </h2>
        <div class="calendar">
            <ul class="bg_f9 clearfix">
                <li class="first fl">
                    <strong>Thứ</strong>
                </li>
                <li class="fl">
                    <strong>Miền bắc</strong>
                    <br/>
                    <span class="cl9">Quay lúc:
                        <em class="clred">18h15'</em>
                    </span>
                </li>
                <li class="fl">
                    <strong>Miền trung</strong>
                    <br/>
                    <span class="cl9">Quay lúc:
                        <em class="clred">17h15'</em>
                    </span>
                </li>
                <li class="fl">
                    <strong>Miền nam</strong>
                    <br/>
                    <span class="cl9">Quay lúc:
                        <em class="clred">16h15'</em>
                    </span>
                </li>
            </ul>
            <ul class="clearfix">
                <li class="first fl">
                    <h3>Thứ 5</h3>
                </li>
                <li class="fl">
                    <p>
                        <a title="XSMB thứ 5" href="/kqxsmb-xstd-xshn-sxmb-ket-qua-xo-so-mien-bac-thu-5.html">XSMB thứ 5</a>
                    </p>
                    <p>
                        <a title="XSMB hôm qua" href="/kqxsmb-ket-qua-xo-so-mien-bac-hom-qua.html">XSMB hôm qua</a>
                    </p>
                </li>
                <li class="fl">
                    <p>
                        <a title="Kết quả xổ số Bình Định" href="/mien-trung/xsbdi-ket-qua-xo-so-binh-dinh-p23.html">Bình Định</a>
                    </p>
                    <p>
                        <a title="Kết quả xổ số Quảng Trị" href="/mien-trung/xsqt-ket-qua-xo-so-quang-tri-p35.html">Quảng Trị</a>
                    </p>
                    <p>
                        <a title="Kết quả xổ số Quảng Bình" href="/mien-trung/xsqb-ket-qua-xo-so-quang-binh-p32.html">Quảng Bình</a>
                    </p>
                    <p>
                        <a title="XSMT thứ 5" href="/kqxsmt-sxmt-ket-qua-xo-so-mien-trung-thu-5.html">XSMT thứ 5</a>
                    </p>
                    <p>
                        <a title="XSMT hôm qua" href="/kqxsmt-ket-qua-xo-so-mien-trung-hom-qua.html">XSMT hôm qua</a>
                    </p>
                </li>
                <li class="fl">
                    <p>
                        <a title="Kết quả xổ số Tây Ninh" href="/mien-nam/xstn-ket-qua-xo-so-tay-ninh-p18.html?ref=bottomYesterday">Tây Ninh</a>
                    </p>
                    <p>
                        <a title="Kết quả xổ số An Giang" href="/mien-nam/xsag-ket-qua-xo-so-an-giang-p2.html?ref=bottomYesterday">An Giang</a>
                    </p>
                    <p>
                        <a title="Kết quả xổ số Bình Thuận" href="/mien-nam/xsbth-ket-qua-xo-so-binh-thuan-p7.html?ref=bottomYesterday">Bình Thuận</a>
                    </p>
                    <p>
                        <a title="XSMN thứ 5" href="/kqxsmn-sxmn-ket-qua-xo-so-mien-nam-thu-5.html?ref=bottomYesterday">XSMN thứ 5</a>
                    </p>
                    <p>
                        <a title="XSMN hôm qua" href="/kqxsmn-ket-qua-xo-so-mien-nam-hom-qua.html?ref=bottomYesterday">XSMN hôm qua</a>
                    </p>
                </li>
            </ul>
        </div>
    </div>
    <div class="box box-html">
        <div class="box-nd">
            <blockquote>
                <h2 style="text-align:center">
                    <span style="font-family:times new roman,times,serif">
                        <strong>Cơ cấu giải thưởng mới xổ số miền Bắc &nbsp;XSMB - &nbsp;XSTD mới nhất năm 2018</strong>
                    </span>
                </h2>
            </blockquote>
            <div class="pad10">
                <div class="title-c2">
                    <span style="font-family:times new roman,times,serif">
                        <em>Xổ số miền bắc</em> (c&ograve;n gọi l&agrave; xổ số truyền thống
                        <span style="color:#000000">
                            <span style="background-color:rgb(255, 255, 255)">
                                <span style="background-color:rgb(255, 255, 255)">
                                    <strong>XSMB</strong>
                                </span>
                            </span>
                        </span>, xổ số đ&agrave;i Bắc, xổ số thủ đ&ocirc;
                        <a href="/kqxsmb-xstd-ket-qua-xo-so-mien-bac.html" title="XSTD">
                            <span style="color:#0000FF">
                                <strong>XSTD</strong>
                            </span>
                        </a> hay xổ số H&agrave; Nội
                        <strong>XSHN</strong>) mở thưởng v&agrave;o khoảng 18h15
                        <strong>&#39;</strong> h&agrave;ng ng&agrave;y từ
                        <em>thứ 2, thứ 3, thứ 4, thứ 5, thứ, thứ 7 v&agrave; chủ nhật</em> tại số Trường quay S4- Đ&agrave;i
                        TH KTS VTC, 65 LạcTrung, Hai B&agrave; Trưng, H&agrave; Nội..</span>
                </div>
                <div class="title-c2">
                    <br/>
                    <span style="font-family:times new roman,times,serif">
                        <em>Cơ cấu giải thưởng xổ số miền bắc</em>loại v&eacute; 10.000đ. C&oacute; 81.150 giải thưởng (27 lần
                        quay) như sau:</span>
                </div>
                <p>
                    <span style="font-family:times new roman,times,serif">
                        <em>
                            <strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Giải Đặc biệt:</strong>
                        </em> Gi&aacute; trị giải thưởng (VNĐ): 1.000.000.000 - Số lượng giải: 3 - Tổng gi&aacute; trị giải thưởng
                        (VNĐ): 3.000.000.000 - Trị gi&aacute; mỗi giải so với gi&aacute; v&eacute; mua: 1.000.000 lần</span>
                </p>
                <p>
                    <span style="font-family:times new roman,times,serif">
                        <em>
                            <strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Giải nhất:</strong>
                        </em> Gi&aacute; trị giải thưởng (VNĐ): 10.000.000 - Số lượng giải: 15 - Tổng gi&aacute; trị giải thưởng
                        (VNĐ): 150.000.000 - Trị gi&aacute; mỗi giải so với gi&aacute; v&eacute; mua: 1.000 lần</span>
                </p>
                <p>
                    <span style="font-family:times new roman,times,serif">
                        <em>
                            <strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Giải nh&igrave;:</strong>
                        </em> Gi&aacute; trị giải thưởng (VNĐ): 5.000.000 - Số lượng giải: 30 - Tổng gi&aacute; trị giải thưởng
                        (VNĐ): 150.000.000 - Trị gi&aacute; mỗi giải so với gi&aacute; v&eacute; mua: 500 lần</span>
                </p>
                <p>
                    <span style="font-family:times new roman,times,serif">
                        <em>
                            <strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Giải ba:</strong>
                        </em> Gi&aacute; trị giải thưởng (VNĐ): 1.000.000 - Số lượng giải: 90 - Tổng gi&aacute; trị giải thưởng
                        (VNĐ): 90.000.000 - Trị gi&aacute; mỗi giải so với gi&aacute; v&eacute; mua: 100 lần</span>
                </p>
                <p>
                    <span style="font-family:times new roman,times,serif">
                        <em>
                            <strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Giải tư:</strong>
                        </em> Gi&aacute; trị giải thưởng (VNĐ): 400.000 - Số lượng giải: 600 - Tổng gi&aacute; trị giải thưởng
                        (VNĐ): 240.000.000 - Trị gi&aacute; mỗi giải so với gi&aacute; v&eacute; mua: 40 lần</span>
                </p>
                <p>
                    <span style="font-family:times new roman,times,serif">
                        <em>
                            <strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Giải năm:</strong>
                        </em> Gi&aacute; trị giải thưởng (VNĐ): 200.000 - Số lượng giải: 900 - Tổng gi&aacute; trị giải thưởng
                        (VNĐ): 180.000.000 - Trị gi&aacute; mỗi giải so với gi&aacute; v&eacute; mua: 20 lần</span>
                </p>
                <p>
                    <span style="font-family:times new roman,times,serif">
                        <em>
                            <strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Giải s&aacute;u:</strong>
                        </em>Gi&aacute; trị giải thưởng (VNĐ): 100.000 - Số lượng giải: 4.500 - Tổng gi&aacute; trị giải thưởng
                        (VNĐ): 450.000.000 - Trị gi&aacute; mỗi giải so với gi&aacute; v&eacute; mua: 10 lần</span>
                </p>
                <p>
                    <span style="font-family:times new roman,times,serif">
                        <em>
                            <strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Giải bảy:</strong>
                        </em> Gi&aacute; trị giải thưởng (VNĐ): 40.000 - Số lượng giải: 60.000 - Tổng gi&aacute; trị giải thưởng
                        (VNĐ): 2.400.000.000 - Trị gi&aacute; mỗi giải so với gi&aacute; v&eacute; mua: 4 lần</span>
                </p>
                <p>
                    <span style="font-family:times new roman,times,serif">
                        <em>
                            <strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Giải phụ của giải đặc biệt:</strong>
                        </em>&nbsp;Gi&aacute; trị giải thưởng (VNĐ): 20.000.000 - Số lượng giải: 12 - Tổng gi&aacute; trị giải
                        thưởng (VNĐ):&nbsp;240.000.000 - Trị gi&aacute; mỗi giải so với gi&aacute; v&eacute; mua: 20.000
                        lần</span>
                </p>
                <p>
                    <span style="font-family:times new roman,times,serif">
                        <span style="color:#000000">
                            <strong>Xem kết quả xổ số miền bắc trực tuyến (online) những ng&agrave;y gần đ&acirc;y nhất&nbsp;</strong>
                        </span>cũng như
                        <span style="color:#0000ff">
                            <a href="http://xoso.me" title="KQXS" type="KQXS">
                                <span style="color:#0000ff">
                                    <strong>KQXS</strong>
                                </span>
                            </a>
                        </span> c&aacute;c miền như miền trung, miền nam&nbsp;được
                        <strong>xoso.me</strong> tường thuật trực tiếp&nbsp;
                        <em>nhanh nhất, ch&iacute;nh x&aacute;c nhất tr&ecirc;n xoso.me. Bạn n&ecirc;n tham khảo th&ecirc;m kết
                            quả xổ số tại website của c&aacute;c c&ocirc;ng ty xổ số.</em>
                    </span>
                </p>
                <p>
                    <span style="color:rgb(0, 0, 0); font-family:arial,tahoma,helvetica,sans-serif">Mỗi trang kết quả gồm c&oacute; bảng kết quả xổ số miền Bắc theo tuần (7 ng&agrave;y tr&ecirc;n một trang),
                        theo th&aacute;ng, theo năm v&agrave; l&ocirc; t&ocirc; miền Bắc liệt k&ecirc; đầu đu&ocirc;i từ
                        0,1,2,3,4,5,6,7,9&nbsp;bạn c&oacute; thể theo d&otilde;i v&agrave; nắm quy luật kq XSMB&nbsp;gần
                        đ&acirc;y nhất dễ d&agrave;ng , tham khảo để dự đo&aacute;n kq XSMB từng tuần</span>
                </p>
                <p>
                    <span style="font-family:times new roman,times,serif">Bạn muốn xem lại kết quả&nbsp;xổ số miền bắc ng&agrave;y&nbsp;h&ocirc;m qua minh ngọc ch&iacute;nh x&aacute;c
                        nhất? H&atilde;y truy cập link xem&nbsp;
                        <strong>
                            <a href="/kqxsmb-ket-qua-xo-so-mien-bac-hom-qua.html" title="XSMB hôm qua">
                                <span style="color:#FF0000">XSMB h&ocirc;m qua</span>
                            </a>
                        </strong>
                    </span>
                </p>
                <p>
                    <span style="font-family:times new roman,times,serif">
                        <strong>V&eacute; tr&ugrave;ng nhiều giải được lĩnh đủ gi&aacute; trị c&aacute;c giải:</strong>
                    </span>
                </p>
                <p>
                    <span style="font-family:times new roman,times,serif">C&uacute; ph&aacute;p lấy kết quả xổ số miền Bắc VIP mới nhất ng&agrave;y h&ocirc;m nay qua tin nhắn:&nbsp;</span>
                </p>
                <p>
                    <span style="font-family:times new roman,times,serif">
                        <span style="color:#ff0000">
                            <strong>XSTD, XSHN, KQXSTD, KQXSHN, SXHN, SXTD, XSKTMB, SXMB, KQSXMB, KETQUAXOSOMIENBAC</strong>
                        </span>
                    </span>
                </p>
                <p>
                    <span style="font-family:times new roman,times,serif">
                        <span style="color:#000000">Ch&uacute;c bạn may mắn khi chơi kết quả xổ số miền bắc v&agrave; tr&uacute;ng số lớn nhất!</span>
                    </span>
                </p>
            </div>
        </div>
    </div>
    <script></script>
</div>
@endsection