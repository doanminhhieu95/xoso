@extends('master') @section('content')
<div class="col-l">
    <div class="box-dream box">
        <h2 class="title-bor mag0">
            <strong>Mơ thấy {{$somo->name}} – Chiêm bao thấy {{$somo->name}} đánh con gì?</strong>
        </h2>
        <div class="search-dream bg_f9">
            <div class="box-search clearfix">
                <form id="w0" action="{{route('baivietsomo',[$somo->name,$somo->id])}}" method="post">
                    {{csrf_field()}}
                    <ul class="form-input-data list-unstyle search-mo center">
                        <div class="bor-1 fl">
                            <input name="tukhoa" type="search" value="">
                        </div>
                        <button class="fl" type="submit">
                            <strong>Tìm kiếm</strong>
                        </button>
                    </ul>
                </form>
            </div>
            <div class="cl9 mag-l5">Tìm với từ bắt đầu:</div>
            <ul class="list-charter txt-center">
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ a" href="/so-mo-so-de/bat-dau-bang-a">
                        <strong>A</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ b" href="/so-mo-so-de/bat-dau-bang-b">
                        <strong>B</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ c" href="/so-mo-so-de/bat-dau-bang-c">
                        <strong>C</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ d" href="/so-mo-so-de/bat-dau-bang-d">
                        <strong>D</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ e" href="/so-mo-so-de/bat-dau-bang-e">
                        <strong>E</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ f" href="/so-mo-so-de/bat-dau-bang-f">
                        <strong>F</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ g" href="/so-mo-so-de/bat-dau-bang-g">
                        <strong>G</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ h" href="/so-mo-so-de/bat-dau-bang-h">
                        <strong>H</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ i" href="/so-mo-so-de/bat-dau-bang-i">
                        <strong>I</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ j" href="/so-mo-so-de/bat-dau-bang-j">
                        <strong>J</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ k" href="/so-mo-so-de/bat-dau-bang-k">
                        <strong>K</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ l" href="/so-mo-so-de/bat-dau-bang-l">
                        <strong>L</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ m" href="/so-mo-so-de/bat-dau-bang-m">
                        <strong>M</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ n" href="/so-mo-so-de/bat-dau-bang-n">
                        <strong>N</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ o" href="/so-mo-so-de/bat-dau-bang-o">
                        <strong>O</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ p" href="/so-mo-so-de/bat-dau-bang-p">
                        <strong>P</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ q" href="/so-mo-so-de/bat-dau-bang-q">
                        <strong>Q</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ r" href="/so-mo-so-de/bat-dau-bang-r">
                        <strong>R</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ s" href="/so-mo-so-de/bat-dau-bang-s">
                        <strong>S</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ t" href="/so-mo-so-de/bat-dau-bang-t">
                        <strong>T</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ u" href="/so-mo-so-de/bat-dau-bang-u">
                        <strong>U</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ v" href="/so-mo-so-de/bat-dau-bang-v">
                        <strong>V</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ w" href="/so-mo-so-de/bat-dau-bang-w">
                        <strong>W</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ x" href="/so-mo-so-de/bat-dau-bang-x">
                        <strong>X</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ y" href="/so-mo-so-de/bat-dau-bang-y">
                        <strong>Y</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ z" href="/so-mo-so-de/bat-dau-bang-z">
                        <strong>Z</strong>
                    </a>
                </li>
            </ul>

            <div class="table-dream">
                <ul class="gr-yellow txt-center">

                    <li class="percent-50">
                        <strong>Bạn mơ thấy gì</strong>
                    </li>
                    <li class="percent-50">
                        <strong>Cặp số tương ứng</strong>
                    </li>
                </ul>
                <ul class="list-dream">
                    <li class="txt-center nobor">
                        <div class="in-block text-dream percent-50">
                            <strong class="clred s18">{{$somo->name}}</strong>
                        </div>
                        <div class="in-block num-dream percent-50">
                            <strong class="cl-green s18">{{$somo->number}}</strong>
                        </div>
                    </li>
                </ul>

                <div class="txt-center">
                    <!-- /117390890/xsme-dreambook -->
                    <div id='div-gpt-ad-1508821038536-0'>
                        <script>
                            googletag.cmd.push(function () {
                                googletag.display('div-gpt-ad-1508821038536-0');
                            });
                        </script>
                    </div>
                </div>
                <div class="cont-dream pad10-5">
                    <!--<p><strong></strong></p>-->

                    <div class="box-social clearfix">
                        <div class="share-social ">
                            <div class="btn">
                                <div class="fb-like" size="small" data-share="true" data-layout="button_count" data-count="true" data-href="/mo-thay-an-trom-d27"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <p style="text-align:justify">
                        <span style="font-size:18px">
                            <span style="font-family:times new roman,times,serif">
                                <span style="color:rgb(255, 0, 0)">
                                    <strong>Xem kết quả XSMB h&ocirc;m qua v&agrave; trực tiếp kết quả XSMB h&ocirc;m nay nhanh v&agrave;
                                        ch&iacute;nh x&aacute;c nhất tại:&nbsp;</strong>
                                </span>
                            </span>
                        </span>
                    </p>

                    <table align="center" cellpadding="0" cellspacing="0" class="th_picture" style="line-height:20.8px">
                        <tbody>
                            <tr>
                                <td>
                                    <p>
                                        <span style="font-size:18px">
                                            <span style="font-family:times new roman,times,serif">
                                                <strong>
                                                    <span style="color:rgb(255, 0, 0)">
                                                        <a href="/kqxsmb-xstd-ket-qua-xo-so-mien-bac" title="XSMB">
                                                            <img alt="Dự đoán KQ XSMB 18-3-2016 - Dự đoán xổ số miền Bắc ngày 18-3-2016" src="http://images.xoso.me/news_xosome/2016/08/15/Kf/xem-ngay.gif"
                                                                style="width:150px" title="XSMB" />
                                                        </a>
                                                    </span>
                                                </strong>
                                            </span>
                                        </span>
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- content dream -->
                    {!!$somo->post!!}
                    <!-- /content dream -->

                    <p style="text-align:center">
                        <span style="font-size:18px">
                            <span style="font-family:times new roman,times,serif">
                                <span style="color:rgb(255, 0, 0)">
                                    <strong>Xem &nbsp;dự đo&aacute;n kết quả XSMB h&ocirc;m nay si&ecirc;u ch&iacute;nh&nbsp;x&aacute;c
                                        tại đ&acirc;y nh&aacute;:</strong>
                                </span>
                            </span>
                        </span>
                    </p>

                    <table align="center" cellpadding="0" cellspacing="0" class="th_picture" style="line-height:20.8px; margin-left:auto; margin-right:auto">
                        <tbody>
                            <tr>
                                <td>
                                    <a href="/du-doan-ket-qua-xo-so-mien-bac-xsmb-c228" title="Dự đoán XSMB">
                                        <img alt="Dự đoán XSMB" src="http://images.xoso.me/news_xosome/2016/08/15/Kf/click.gif" style="width:150px" title="Dự đoán XSMB"
                                        />
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="box box-comment">
                <div id="comment" class="fb-comments " data-href="/mo-thay-an-trom-d27" data-numposts="5" data-colorscheme="light" data-width="100%"
                    data-order-by="reverse_time"></div>
                <script>
                </script>
            </div>
        </div>
    </div>
    <div class="box sugges-dream">
        <h2 class="title-bor">
            <strong>Gợi ý mơ thấy</strong>
        </h2>

        <ul>
            @for($i=0; $i<5;$i++)
            <?php $rand = rand(0,count($somos)-1)?>
            <li>
                <label class="percent-50 in-block">
                    <a href="/mo-thay-tinh-nhan-on-ao-d1074" title="tình nhân ồn ào">
                        <strong class="clred">{{$somos[$rand]->name}}</strong>
                    </a>
                </label>
                <div class="in-block">
                    <strong class="cl-green">{{$somos[$rand]->number}}</strong>
                </div>
            </li>
            @endfor
        </ul>
    </div>
    <div class="box box-news">
        <h3 class="title-bor">
            <strong>Tiện ích</strong>
        </h3>
        <ul>
            <li>
                <span class="ic"></span>
                <a href="/kqxsmb-ket-qua-xo-so-mien-bac-hom-qua" title="Kết quả xổ số miền Bắc hôm qua">Kết quả xổ số miền Bắc hôm qua</a>
            </li>
            <li>
                <span class="ic"></span>
                <a href="/kqxsmb-xstd-ket-qua-xo-so-mien-bac" title="XSMB hôm nay">XSMB hôm nay</a>
            </li>

            <li>
                <span class="ic"></span>
                <a href="/thong-ke-lo-gan" title="Thống kê lô gan">Thống kê lô gan</a>
            </li>
            <li>
                <span class="ic"></span>
                <a href="/du-doan-ket-qua-xo-so-mien-bac-xsmb-c228" title="Dự đoán XSMB">Dự đoán XSMB</a>
            </li>


        </ul>
    </div>
    <div class="txt-center">
        <ins class="adsbygoogle" style="display:block" data-ad-format="autorelaxed" data-ad-client="ca-pub-3084353470359421" data-ad-slot="2222928193"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
</div>
@endsection