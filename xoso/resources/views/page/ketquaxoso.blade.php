@extends('master') @section('content')
<?php 
    $thu = date('l', strtotime($date));
    if($thu=="Sunday") $thu = "Chủ nhật";
    if($thu=="Monday") $thu = "Thứ hai";
    if($thu=="Tuesday") $thu = "Thứ ba";
    if($thu=="Wednesday") $thu = "Thứ tư";
    if($thu=="Thursday") $thu = "Thứ năm";
    if($thu=="Friday") $thu = "Thứ sáu";
    if($thu=="Saturday") $thu = "Thứ bảy";
    $plus = 1;
?>
<div class="col-l">
    <div class="box">
        <div class="bg_gray">
            <div class="opt_date_full txt-center clearfix">
                <a href="/kqxs-ket-qua-xo-so-ngay-<?php
                echo date("d-m-Y",strtotime("$date -$plus day"));
                ?>" class="ic-pre fl" title="Kết quả xổ số ngày {{date("d-m-Y",strtotime("$date -$plus day"))}}"></a>
                <div class="in-block">
                    <strong>{{$thu}}</strong> -
                    <input type="text" class="nobor" value="{{$date}}" id="searchDate" /> </div>
                <a href="/kqxs-ket-qua-xo-so-ngay-<?php
                echo date("d-m-Y",strtotime("$date +$plus day"));
                ?>" class="ic-next" title="Kết quả xổ số ngày {{date("d-m-Y",strtotime("$date +$plus day"))}}"></a>
            </div>
        </div>
    </div>
    <div class="box-kq">
        <div class="link-du-doan">
            <a class="text-link-ads" href="http://cauvang6868.com" title="http://cauvang6868.com" rel="nofollow" target="_blank">
                <span>
                    <img src="xoso/css/images/hot2.gif" alt="http://cauvang6868.com" title="http://cauvang6868.com">
                </span>
                <b style="color:#3c8dbc">Lô cao cấp</b>
            </a>
            <a class="text-link-ads" href="http://xoso82.com" title="http://xoso82.com" rel="nofollow" target="_blank">
                <span>
                    <img src="xoso/css/images/hot2.gif" alt="http://xoso82.com" title="http://xoso82.com">
                </span>
                <b style="color:#3c8dbc">Soi cầu miền Bắc</b>
            </a>
            <a class="text-link-ads" href="http://soicau98.top" title="soicau98.top" rel="nofollow" target="_blank">
                <span>
                    <img src="xoso/css/images/hot2.gif" alt="http://soicau98.top" title="http://soicau98.top">
                </span>
                <b class="clnote">Độc thủ lô</b>
            </a>
            <a class="text-link-ads" href="http://lodepphatloc.com" title="lodepphatloc.com" rel="nofollow" target="_blank">
                <span>
                    <img src="xoso/css/images/hot2.gif" alt="http://lodepphatloc.com" title="http://lodepphatloc.com">
                </span>
                <b class="clnote">Lô siêu chuẩn</b>
            </a>
            <a class="text-link-ads" href="http://cauvip777.net" title="cauvip777.net" rel="nofollow" target="_blank">
                <span>
                    <img src="xoso/css/images/hot2.gif" alt="cauvip777.net" title="cauvip777.net">
                </span>
                <b class="clnote">Cầu đẹp 2018</b>
            </a>
            <a class="text-link-ads" href="http://cauvang666.net" title="cauvang666.net" rel="nofollow" target="_blank">
                <span>
                    <img src="xoso/css/images/hot2.gif" alt="cauvang666.net" title="cauvang666.net">
                </span>
                <b class="clnote">Cầu chuẩn XSMB</b>
            </a>
            <a class="text-link-ads" href="http://102xoso.com" title="102xoso.com" rel="nofollow" target="_blank">
                <span>
                    <img src="xoso/css/images/hot2.gif" alt="102xoso.com" title="102xoso.com">
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
                            <a href="/mien-nam/xsdn-ket-qua-xo-so-dong-nai-p11.html" title="XSDN">Đồng Nai</a>
                        </td>
                        <td>
                            <a href="/mien-trung/xsdng-ket-qua-xo-so-da-nang-p24.html" title="XSDNG">Đà Nẵng</a>
                        </td>
                        <td>
                            <a href="/kqxsmb-xstd-ket-qua-xo-so-mien-bac.html" title="XSMB">Miền Bắc</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="/mien-nam/xsct-ket-qua-xo-so-can-tho-p9.html" title="XSCT">Cần Thơ</a>
                        </td>
                        <td>
                            <a href="/mien-trung/xskh-ket-qua-xo-so-khanh-hoa-p28.html" title="XSKH">Khánh Hòa</a>
                        </td>
                        <td>
                            <a href="/ket-qua-xo-so-dien-toan.html" title="Điện toán">Điện toán</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="/mien-nam/xsst-ket-qua-xo-so-soc-trang-p17.html" title="XSST">Sóc Trăng</a>
                        </td>
                        <td></td>
                        <td>
                            <a href="/kqxs-mega-645-ket-qua-xo-so-mega-6-45-vietlott-ngay-hom-nay.html" title="Mega 6/45">Mega 6/45</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="box">
            <h2 class="title-bor">
                <strong>Kết quả xổ số miền Bắc ngày {{$date}}</strong>
            </h2>
            <div id="load_kq_mb_0">
                <div id="kq" class="one-city">
                    <table width="100%" cellspacing="0" cellpadding="0" border="0" data-title="KQXS Tường thuật kết quả xổ số kiến thiết trực tiếp 3 miền, xổ số Vietlott nhanh nhất"
                        class="kqmb extendable">
                        <tbody>
                            <tr class="db">
                                <td class="txt-giai">Đặc biệt</td>
                                <td colspan="12" class="number">
                                    <b>{!!$rmb['rs_0_0']!!}</b>
                                </td>
                            </tr>
                            <tr class="bg_f6">
                                <td class="txt-giai">Giải nhất</td>
                                <td colspan="12" class="number">
                                    <b>{!!$rmb['rs_1_0']!!}</b>
                                </td>
                            </tr>
                            <tr>
                                <td class="txt-giai">Giải nhì</td>
                                <td colspan="6" class="number">
                                    <b>{!!$rmb['rs_2_0']!!}</b>
                                </td>
                                <td colspan="6" class="number">
                                    <b class="">{!!$rmb['rs_2_1']!!}</b>
                                </td>
                            </tr>
                            <tr class="giai3 bg_ef">
                                <td class="txt-giai" rowspan="2">Giải ba</td>
                                <td class="number" colspan="4">
                                    <b>{!!$rmb['rs_3_0']!!}</b>
                                </td>
                                <td class="number" colspan="4">
                                    <b class="">{!!$rmb['rs_3_1']!!}</b>
                                </td>
                                <td class="number" colspan="4">
                                    <b class="">{!!$rmb['rs_3_2']!!}</b>
                                </td>
                            </tr>
                            <tr class="bg_ef">
                                <td class="number" colspan="4">
                                    <b>{!!$rmb['rs_3_3']!!}</b>
                                </td>
                                <td class="number" colspan="4">
                                    <b>{!!$rmb['rs_3_4']!!}</b>
                                </td>
                                <td class="number" colspan="4">
                                    <b>{!!$rmb['rs_3_5']!!}</b>
                                </td>
                            </tr>
                            <tr>
                                <td class="txt-giai">Giải tư</td>
                                <td colspan="3" class="number">
                                    <b>{!!$rmb['rs_4_0']!!}</b>
                                </td>
                                <td colspan="3" class="number">
                                    <b>{!!$rmb['rs_4_1']!!}</b>
                                </td>
                                <td colspan="3" class="number">
                                    <b>{!!$rmb['rs_4_2']!!}</b>
                                </td>
                                <td colspan="3" class="number">
                                    <b>{!!$rmb['rs_4_3']!!}</b>
                                </td>
                            </tr>
                            <tr class="giai5 bg_ef">
                                <td class="txt-giai" rowspan="2">Giải năm</td>
                                <td class="number" colspan="4">
                                    <b>{!!$rmb['rs_5_0']!!}</b>
                                </td>
                                <td class="number" colspan="4">
                                    <b>{!!$rmb['rs_5_1']!!}</b>
                                </td>
                                <td class="number" colspan="4">
                                    <b>{!!$rmb['rs_5_2']!!}</b>
                                </td>
                            </tr>
                            <tr class="bg_ef">
                                <td class="number" colspan="4">
                                    <b>{!!$rmb['rs_5_3']!!}</b>
                                </td>
                                <td class="number" colspan="4">
                                    <b>{!!$rmb['rs_5_4']!!}</b>
                                </td>
                                <td class="number" colspan="4">
                                    <b>{!!$rmb['rs_5_5']!!}</b>
                                </td>
                            </tr>
                            <tr>
                                <td class="txt-giai">Giải sáu</td>
                                <td colspan="4" class="number">
                                    <b>{!!$rmb['rs_6_0']!!}</b>
                                </td>
                                <td colspan="4" class="number">
                                    <b>{!!$rmb['rs_6_1']!!}</b>
                                </td>
                                <td colspan="4" class="number">
                                    <b>{!!$rmb['rs_6_2']!!}</b>
                                </td>
                            </tr>
                            <tr class="bg_ef">
                                <td class="txt-giai">Giải bảy</td>
                                <td colspan="3" class="number">
                                    <b>{!!$rmb['rs_7_0']!!}</b>
                                </td>
                                <td colspan="3" class="number">
                                    <b>{!!$rmb['rs_7_1']!!}</b>
                                </td>
                                <td colspan="3" class="number">
                                    <b>{!!$rmb['rs_7_2']!!}</b>
                                </td>
                                <td colspan="3" class="number">
                                    <b>{!!$rmb['rs_7_3']!!}</b>
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
                                for($i=0;$i<count($kqmb);$i++){
                                    if(substr($kqmb[$i],0,1)==(string)$k){
                                        if($j==0){
                                            echo substr($kqmb[$i],-1);
                                            $j=1;
                                        }else echo ', '.substr($kqmb[$i],-1);
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
                                <td><?php $j=0; for($i=0;$i<count($kqmb);$i++){ if(substr($kqmb[$i],-1)==(string)$k){if($j==0){echo substr($kqmb[$i],0,1);$j=1;}else echo ', '.substr($kqmb[$i],0,1);}}?></td>
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
        </div>
        <div class="txt-center">
            <!--    <ins class="adsbygoogle" style="display:block" data-ad-format="fluid" data-ad-client="ca-pub-3084353470359421" data-ad-slot="2809412592"></ins>-->
            <ins class="adsbygoogle dspblock hdc-csi_square " data-ad-client="ca-pub-3084353470359421" data-ad-slot="3051288199"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
        <div class="box">
            <h2 class="title-bor">
                <strong>Kết quả xổ số miền Nam ngày {{$date}}</strong>
            </h2>
            <div id="load_kq_mn_0">
                <div id="kq" class="three-city">
                    <table class="colthreecity colgiai extendable" data-title="KQXS Tường thuật kết quả xổ số kiến thiết trực tiếp 3 miền, xổ số Vietlott nhanh nhất"
                        width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr class="gr-yellow">
                                <th class="first"></th>
                                @foreach($city3 as $cty)
                                <th>
                                    <a href="/mien-nam/xsbt-ket-qua-xo-so-ben-tre-p4.html" title="XSBT">
                                        <b class="underline">{{$cty->name}}</b>
                                    </a>
                                    <br/>
                                    <span class="s12">Mã: BT</span>
                                </th>
                                @endforeach
                            </tr>
                            <tr class="g8">
                                <td>G8</td>
                                @for($i=0;$i
                                <count($city3);$i++) <td>
                                    <div>{!!$rmn[$i]['rs_8_0']!!}</div>
                                    </td>
                                    @endfor
                            </tr>
                            <tr>
                                <td>G7</td>
                                @for($i=0;$i
                                <count($city3);$i++) <td>
                                    <div>{!!$rmn[$i]['rs_7_0']!!}</div>
                                    </td>
                                    @endfor
                            </tr>
                            <tr>
                                <td>G6</td>
                                @for($i=0;$i
                                <count($city3);$i++) <td>
                                    <div>{!!$rmn[$i]['rs_6_0']!!}</div>
                                    <div>{!!$rmn[$i]['rs_6_1']!!}</div>
                                    <div>{!!$rmn[$i]['rs_6_2']!!}</div>
                                    </td>
                                    @endfor
                            </tr>
                            <tr>
                                <td>G5</td>
                                @for($i=0;$i
                                <count($city3);$i++) <td>
                                    <div>{!!$rmn[$i]['rs_5_0']!!}</div>
                                    </td>
                                    @endfor
                            </tr>
                            <tr>
                                <td>G4</td>
                                @for($i=0;$i
                                <count($city3);$i++) <td>
                                    <div>{!!$rmn[$i]['rs_4_0']!!}</div>
                                    <div>{!!$rmn[$i]['rs_4_1']!!}</div>
                                    <div>{!!$rmn[$i]['rs_4_2']!!}</div>
                                    <div>{!!$rmn[$i]['rs_4_3']!!}</div>
                                    <div>{!!$rmn[$i]['rs_4_4']!!}</div>
                                    <div>{!!$rmn[$i]['rs_4_5']!!}</div>
                                    <div>{!!$rmn[$i]['rs_4_6']!!}</div>
                                    </td>
                                    @endfor
                            </tr>
                            <tr>
                                <td>G3</td>
                                @for($i=0;$i
                                <count($city3);$i++) <td>
                                    <div>{!!$rmn[$i]['rs_3_0']!!}</div>
                                    <div>{!!$rmn[$i]['rs_3_1']!!}</div>
                                    </td>
                                    @endfor
                            </tr>
                            <tr>
                                <td>G2</td>
                                @for($i=0;$i
                                <count($city3);$i++) <td>
                                    <div>{!!$rmn[$i]['rs_2_0']!!}</div>
                                    </td>
                                    @endfor
                            </tr>
                            <tr>
                                <td>G1</td>
                                @for($i=0;$i
                                <count($city3);$i++) <td>
                                    <div>{!!$rmn[$i]['rs_1_0']!!}</div>
                                    </td>
                                    @endfor
                            </tr>
                            <tr class="gdb">
                                <td>ĐB</td>
                                @for($i=0;$i
                                <count($city3);$i++) <td>
                                    <div>{!!$rmn[$i]['rs_0_0']!!}</div>
                                    </td>
                                    @endfor
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="buttons-wrapper"></div>
                <div class="txt-center">
                    <div id='div-gpt-ad-1475727881084-0'>
                        <script>
                            googletag.cmd.push(function () {
                                googletag.display('div-gpt-ad-1475727881084-0');
                            });
                        </script>
                    </div>
                </div>
                <div class="cp-sms">
                    <p>
                        <span>Kết quả
                            <strong>xổ số Bến Tre</strong> sớm nhất:</span>
                        <strong class="clsms">XS BT</strong> gửi
                        <strong class="clsms">6022 (1000đ)</strong>
                    </p>
                    <!--<p><span>Lấy số đẹp <strong>xổ số Bến Tre</strong>, Soạn:</span> <strong class="clsms">OK BT</strong> gửi <strong class="clsms">8512 (5000đ)</strong></p>-->
                </div>
                <div id="dd" class="col-firstlast colthreecity colgiai">
                    <table class="firstlast-mn" border="0" width="100%" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr class="header">
                                <th width="10%" class="first">Đầu</th>
                                @foreach($city3 as $cty)
                                <th>{{$cty->name}}</th>
                                @endforeach
                            </tr>
                            @for($k=0;$k<10;$k++)
                            <tr>
                                <td>
                                    <b class="clnote">{{$k}}</b>
                                </td>
                                @for($i=0;$i<count($rmn);$i++)
                                <td><?php $j=0; for($m=0;$m<count($kqmn[$i]);$m++){ if(substr($kqmn[$i][$m],0,1)==(string)$k){if($j==0){echo substr($kqmn[$i][$m],-1);$j=1;}else echo ', '.substr($kqmn[$i][$m],-1);}}?></td>
                                @endfor()
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="txt-center">
            <div id='div-gpt-ad-1477995027610-0'>
                <script>
                    googletag.cmd.push(function () {
                        googletag.display('div-gpt-ad-1477995027610-0');
                    });
                </script>
            </div>
        </div>
        <div class="box">
            <h2 class="title-bor">
                <strong>Kết quả xổ số miền Trung ngày {{$date}}</strong>
            </h2>
            <div id="load_kq_mt_0">
                <div id="kq" class="two-city">
                    <table class="coltwocity colgiai extendable" data-title="KQXS Tường thuật kết quả xổ số kiến thiết trực tiếp 3 miền, xổ số Vietlott nhanh nhất"
                        width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr class="gr-yellow">
                                <th class="first"></th>
                                @foreach($city2 as $cty)
                                <th>
                                    <a href="/mien-trung/xsdlk-ket-qua-xo-so-dac-lac-p25.html" title="XSDLK">
                                        <b class="underline">{{$cty->name}}</b>
                                    </a>
                                    <br/>
                                    <span class="s12">Mã: DLK</span>
                                </th>
                                @endforeach
                            </tr>
                            <tr class="g8">
                                <td>G8</td>
                                @for($i=0;$i
                                <count($city2);$i++) <td>
                                    <div>{!!$rmt[$i]['rs_8_0']!!}</div>
                                    </td>
                                    @endfor
                            </tr>
                            <tr>
                                <td>G7</td>
                                @for($i=0;$i
                                <count($city2);$i++) <td>
                                    <div>{!!$rmt[$i]['rs_7_0']!!}</div>
                                    </td>
                                    @endfor
                            </tr>
                            <tr>
                                <td>G6</td>
                                @for($i=0;$i
                                <count($city2);$i++) <td>
                                    <div>{!!$rmt[$i]['rs_6_0']!!}</div>
                                    <div>{!!$rmt[$i]['rs_6_1']!!}</div>
                                    <div>{!!$rmt[$i]['rs_6_2']!!}</div>
                                    </td>
                                    @endfor
                            </tr>
                            <tr>
                                <td>G5</td>
                                @for($i=0;$i
                                <count($city2);$i++) <td>
                                    <div>{!!$rmt[$i]['rs_5_0']!!}</div>
                                    </td>
                                    @endfor
                            </tr>
                            <tr>
                                <td>G4</td>
                                @for($i=0;$i
                                <count($city2);$i++) <td>
                                    <div>{!!$rmt[$i]['rs_4_0']!!}</div>
                                    <div>{!!$rmt[$i]['rs_4_1']!!}</div>
                                    <div>{!!$rmt[$i]['rs_4_2']!!}</div>
                                    <div>{!!$rmt[$i]['rs_4_3']!!}</div>
                                    <div>{!!$rmt[$i]['rs_4_4']!!}</div>
                                    <div>{!!$rmt[$i]['rs_4_5']!!}</div>
                                    <div>{!!$rmt[$i]['rs_4_6']!!}</div>
                                    </td>
                                    @endfor
                            </tr>
                            <tr>
                                <td>G3</td>
                                @for($i=0;$i
                                <count($city2);$i++) <td>
                                    <div>{!!$rmt[$i]['rs_3_0']!!}</div>
                                    <div>{!!$rmt[$i]['rs_3_1']!!}</div>
                                    </td>
                                    @endfor
                            </tr>
                            <tr>
                                <td>G2</td>
                                @for($i=0;$i
                                <count($city2);$i++) <td>
                                    <div>{!!$rmt[$i]['rs_2_0']!!}</div>
                                    </td>
                                    @endfor
                            </tr>
                            <tr>
                                <td>G1</td>
                                @for($i=0;$i
                                <count($city2);$i++) <td>
                                    <div>{!!$rmt[$i]['rs_1_0']!!}</div>
                                    </td>
                                    @endfor
                            </tr>
                            <tr class="gdb">
                                <td>ĐB</td>
                                @for($i=0;$i
                                <count($city2);$i++) <td>
                                    <div>{!!$rmt[$i]['rs_0_0']!!}</div>
                                    </td>
                                    @endfor
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="buttons-wrapper"></div>
                <div class="cp-sms">
                    <p>
                        <span>Kết quả
                            <strong>xổ số Đắc Lắc</strong> sớm nhất:</span>
                        <strong class="clsms">XS DLK</strong> gửi
                        <strong class="clsms">6022 (1000đ)</strong>
                    </p>
                    <!--<p><span>Lấy số đẹp <strong>xổ số Đắc Lắc</strong>, Soạn:</span> <strong class="clsms">OK DLK</strong> gửi <strong class="clsms">8512 (5000đ)</strong></p>-->
                </div>
                <div id="dd" class="col-firstlast coltwocity colgiai">
                    <table class="firstlast-mn" border="0" width="100%" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr class="header">
                                <th width="10%" class="first">Đầu</th>
                                @foreach($city2 as $cty)
                                <th>{{$cty->name}}</th>
                                @endforeach
                            </tr>
                            @for($k=0;$k<10;$k++)
                            <tr>
                                <td>
                                    <b class="clnote">{{$k}}</b>
                                </td>
                                @for($i=0;$i<count($rmt);$i++)
                                <td><?php $j=0; for($m=0;$m<count($kqmt[$i]);$m++){ if(substr($kqmt[$i][$m],0,1)==(string)$k){if($j==0){echo substr($kqmt[$i][$m],-1);$j=1;}else echo ', '.substr($kqmt[$i][$m],-1);}}?></td>
                                @endfor()
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script></script>
</div>
<script>
    $(document).ready(function () {
        $("#searchDate").change(function () {
            var date = $('#searchDate').val();
            window.location.href = 'kqxs-ket-qua-xo-so-ngay-' + date;
        });
    });
</script>
@endsection