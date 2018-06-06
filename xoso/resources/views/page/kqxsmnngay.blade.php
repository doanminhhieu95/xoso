@extends('master') @section('content')
<div class="col-l">
    <div class="box">
        <div class="bg_gray">
            <div class="opt_date_full txt-center clearfix">
                <?php $plus=1;?>
                <a href="kqxsmn/ngay-<?php
                echo date("d-m-Y",strtotime("$ngay -$plus day"));
                ?>" class="ic-pre fl" title="KQXSMN ngày {{date("d-m-Y",strtotime("$ngay -$plus day"))}}"></a>
                <div class="in-block">
                    <strong>{{$thuchu}}</strong> -
                    <input type="text" class="nobor" value="{{$ngay}}" id="searchDate" />
                </div>

                <a href="kqxsmn/ngay-<?php
                echo date("d-m-Y",strtotime("$ngay +$plus day"));
                ?>" class="ic-next" title="KQXSMN ngày {{date("d-m-Y",strtotime("$ngay +$plus day"))}}"></a>
            </div>
        </div>
    </div>

    <div class="link-du-doan">
    </div>

    <script>
    </script>
    <!--/css/images/new.gif-->
    <div class="box mo-thuong-ngay">
        <h2 class="title-bor">
            <strong>Các tỉnh mở thưởng hôm nay</strong>
        </h2>
        <table class="colgiai" cellpadding="0" cellspacing="0" border="0" width="100%">
            <tbody>

                <tr>
                    <td>
                        <a href="/mien-nam/xshcm-ket-qua-xo-so-thanh-pho-ho-chi-minh-p14.html" title="XSHCM">TP Hồ Chí Minh</a>
                    </td>
                    <td>
                        <a href="/mien-trung/xstth-ket-qua-xo-so-thua-thien-hue-p36.html" title="XSTTH">Thừa Thiên Huế</a>
                    </td>
                    <td>
                        <a href="/kqxsmb-xstd-ket-qua-xo-so-mien-bac.html" title="XSMB">Miền Bắc</a>
                    </td>
                </tr>

                <tr>
                    <td>
                        <a href="/mien-nam/xsdt-ket-qua-xo-so-dong-thap-p12.html" title="XSDT">Đồng Tháp</a>
                    </td>
                    <td>
                        <a href="/mien-trung/xspy-ket-qua-xo-so-phu-yen-p31.html" title="XSPY">Phú Yên</a>
                    </td>
                    <td>
                        <a href="/ket-qua-xo-so-dien-toan.html" title="Điện toán">Điện toán</a>
                    </td>
                </tr>

                <tr>
                    <td>
                        <a href="/mien-nam/xscm-ket-qua-xo-so-ca-mau-p8.html" title="XSCM">Cà Mau</a>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <ul class="tab-panel">
        <li>
            <a href="/kqxsmn-ket-qua-xo-so-mien-nam.html">Miền nam</a>
        </li>
        <li>
            <a href="/kqxsmn-sxmn-ket-qua-xo-so-mien-nam-thu-2.html" title="Xsmn Thứ 2">Thứ 2</a>
        </li>
        <li>
            <a href="/kqxsmn-sxmn-ket-qua-xo-so-mien-nam-thu-3.html" title="Xsmn Thứ 3">Thứ 3</a>
        </li>
        <li>
            <a href="/kqxsmn-sxmn-ket-qua-xo-so-mien-nam-thu-4.html" title="Xsmn Thứ 4">Thứ 4</a>
        </li>
        <li>
            <a href="/kqxsmn-sxmn-ket-qua-xo-so-mien-nam-thu-5.html" title="Xsmn Thứ 5">Thứ 5</a>
        </li>
        <li>
            <a href="/kqxsmn-sxmn-ket-qua-xo-so-mien-nam-thu-6.html" title="Xsmn Thứ 6">Thứ 6</a>
        </li>
        <li>
            <a href="/kqxsmn-sxmn-ket-qua-xo-so-mien-nam-thu-7.html" title="Xsmn Thứ 7">Thứ 7</a>
        </li>
        <li>
            <a href="/kqxsmn-sxmn-ket-qua-xo-so-mien-nam-chu-nhat.html" title="Xsmn Chủ nhật">CN</a>
        </li>
    </ul>
    <div class="box">
        <h2 class="title-bor clearfix kq-title">
            <a class="title-a" href="/kqxsmn-ket-qua-xo-so-mien-nam.html" title="XSMN">XSMN</a> »
            <a class="title-a" href="/kqxsmn-sxmn-ket-qua-xo-so-mien-nam-thu-2.html" title="XSMN {{$thuchu}}">XSMN {{$thuchu}}</a> »
            <a class="title-a" href="/kqxsmn-ket-qua-xo-so-mien-nam-ngay-12-03-2018.html" title="XSMN {{$ngay}}">XSMN {{$ngay}}</a> - Xổ số miền Nam</h2>
        <div id="load_kq_mn_0">
            <div id="kq" class="three-city">
                <table class="colthreecity colgiai extendable" data-title="" width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr class="gr-yellow">
                            <th class="first"></th>
                            @foreach($city as $cty)
                            <th>
                                <a href="/mien-nam/xshcm-ket-qua-xo-so-thanh-pho-ho-chi-minh-p14.html" title="XSHCM">
                                    <b class="underline">{{$cty->name}}</b>
                                </a>
                                <br />
                                <span class="s12">Mã: HCM</span>
                            </th>
                            @endforeach
                        </tr>
                        <tr class="g8">
                                <td>G8</td>
                                @for($i=0;$i
                                <count($city);$i++) <td>
                                    <div>{!!$rmn[$i]['rs_8_0']!!}</div>
                                    </td>
                                    @endfor
                            </tr>
                            <tr>
                                <td>G7</td>
                                @for($i=0;$i
                                <count($city);$i++) <td>
                                    <div>{!!$rmn[$i]['rs_7_0']!!}</div>
                                    </td>
                                    @endfor
                            </tr>
                            <tr>
                                <td>G6</td>
                                @for($i=0;$i
                                <count($city);$i++) <td>
                                    <div>{!!$rmn[$i]['rs_6_0']!!}</div>
                                    <div>{!!$rmn[$i]['rs_6_1']!!}</div>
                                    <div>{!!$rmn[$i]['rs_6_2']!!}</div>
                                    </td>
                                    @endfor
                            </tr>
                            <tr>
                                <td>G5</td>
                                @for($i=0;$i
                                <count($city);$i++) <td>
                                    <div>{!!$rmn[$i]['rs_5_0']!!}</div>
                                    </td>
                                    @endfor
                            </tr>
                            <tr>
                                <td>G4</td>
                                @for($i=0;$i
                                <count($city);$i++) <td>
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
                                <count($city);$i++) <td>
                                    <div>{!!$rmn[$i]['rs_3_0']!!}</div>
                                    <div>{!!$rmn[$i]['rs_3_1']!!}</div>
                                    </td>
                                    @endfor
                            </tr>
                            <tr>
                                <td>G2</td>
                                @for($i=0;$i
                                <count($city);$i++) <td>
                                    <div>{!!$rmn[$i]['rs_2_0']!!}</div>
                                    </td>
                                    @endfor
                            </tr>
                            <tr>
                                <td>G1</td>
                                @for($i=0;$i
                                <count($city);$i++) <td>
                                    <div>{!!$rmn[$i]['rs_1_0']!!}</div>
                                    </td>
                                    @endfor
                            </tr>
                            <tr class="gdb">
                                <td>ĐB</td>
                                @for($i=0;$i
                                <count($city);$i++) <td>
                                    <div>{!!$rmn[$i]['rs_0_0']!!}</div>
                                    </td>
                                    @endfor
                            </tr>
                    </tbody>
                </table>
            </div>
            <div class="buttons-wrapper"></div>
            <div class="txt-center">
                <ins class="adsbygoogle dspblock hdc-csi_square" data-ad-client="ca-pub-6036579657774106" data-ad-slot="5498735679" data-ad-format="auto"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <div class="cp-sms">
                <p>
                    <span>Kết quả
                        <strong>xổ số TP Hồ Chí Minh</strong> sớm nhất:</span>
                    <strong class="clsms">XS HCM</strong> gửi
                    <strong class="clsms">6022 (1000đ)</strong>
                </p>

                <!--<p><span>Lấy số đẹp <strong>xổ số TP Hồ Chí Minh</strong>, Soạn:</span> <strong class="clsms">OK HCM</strong> gửi <strong class="clsms">8512 (5000đ)</strong></p>-->
            </div>
            <div id="dd" class="col-firstlast colthreecity colgiai">
                <table class="firstlast-mn" border="0" width="100%" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr class="header">
                            <th width="10%" class="first">Đầu</th>
                            @foreach($city as $cty)
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
        <div class="see-more">
            <ul class="list-unstyle list-html-link">
                <li>
                    <a href="/" title="Kết quả xổ số hôm nay">Kết quả xổ số hôm nay</a>
                </li>
                <li>
                    <a href="/kqxsmn-ket-qua-xo-so-mien-nam.html" title="Xổ số miền Nam hôm nay">Xổ số miền Nam hôm nay</a>
                </li>
                <li>
                    <a href="/kqxsmn-ket-qua-xo-so-mien-nam-ngay-11-03-2018.html" title="XSMN ngày 11/3/2018">XSMN ngày 11/3/2018</a>
                </li>
                <li>
                    <a href="/kqxsmn-ket-qua-xo-so-mien-nam-ngay-13-03-2018.html" title="XSMN ngày 13/3/2018">XSMN ngày 13/3/2018</a>
                </li>
            </ul>
        </div>
    </div>


    <div class="box">
        <h2 class="title-bor">
            <strong>Lịch quay xổ số mở thưởng ngày 12/03/2018</strong>
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
                    <h3>Thứ 2</h3>
                </li>

                <li class="fl">
                    <p>
                        <a title="XSMB thứ 2" href="/kqxsmb-xstd-xshn-sxmb-ket-qua-xo-so-mien-bac-thu-2.html">XSMB thứ 2</a>
                    </p>
                    <p>
                        <a title="XSMB hôm qua" href="/kqxsmb-ket-qua-xo-so-mien-bac-hom-qua.html">XSMB hôm qua</a>
                    </p>


                </li>
                <li class="fl">
                    <p>
                        <a title="Kết quả xổ số Thừa Thiên Huế" href="/mien-trung/xstth-ket-qua-xo-so-thua-thien-hue-p36.html">Thừa Thiên Huế</a>
                    </p>
                    <p>
                        <a title="Kết quả xổ số Phú Yên" href="/mien-trung/xspy-ket-qua-xo-so-phu-yen-p31.html">Phú Yên</a>
                    </p>
                    <p>
                        <a title="XSMT thứ 2" href="/kqxsmt-sxmt-ket-qua-xo-so-mien-trung-thu-2.html">XSMT thứ 2</a>
                    </p>
                    <p>
                        <a title="XSMT hôm qua" href="/kqxsmt-ket-qua-xo-so-mien-trung-hom-qua.html">XSMT hôm qua</a>
                    </p>

                </li>
                <li class="fl">
                    <p>
                        <a title="Kết quả xổ số TP Hồ Chí Minh" href="/mien-nam/xshcm-ket-qua-xo-so-thanh-pho-ho-chi-minh-p14.html">TP Hồ Chí Minh</a>
                    </p>
                    <p>
                        <a title="Kết quả xổ số Đồng Tháp" href="/mien-nam/xsdt-ket-qua-xo-so-dong-thap-p12.html">Đồng Tháp</a>
                    </p>
                    <p>
                        <a title="Kết quả xổ số Cà Mau" href="/mien-nam/xscm-ket-qua-xo-so-ca-mau-p8.html">Cà Mau</a>
                    </p>
                    <p>
                        <a title="XSMN thứ 2" href="/kqxsmn-sxmn-ket-qua-xo-so-mien-nam-thu-2.html">XSMN thứ 2</a>
                    </p>
                    <p>
                        <a title="XSMN hôm qua" href="/kqxsmn-ket-qua-xo-so-mien-nam-hom-qua.html">XSMN hôm qua</a>
                    </p>

                </li>
            </ul>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("#searchDate").change(function () {
            var date = $('#searchDate').val();
            window.location.href = 'kqxsmn/ngay-' + date;
        });
    });
</script>
@endsection