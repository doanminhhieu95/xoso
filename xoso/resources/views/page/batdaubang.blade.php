@extends('master') @section('content')
<div class="col-l">

    <div class="box-dream box">
        <h2 class="title-bor mag0">
            <strong>Giải mã giấc mơ - giải mộng chiêm bao</strong>
        </h2>
        <div class="search-dream bg_f9">
            <div class="box-search clearfix">
                <form id="w0" action="{{route('batdaubang',[$text])}}" method="post">
                    {{csrf_field()}}
                    <ul class="form-input-data list-unstyle search-mo center">
                        <div class="bor-1 fl">
                            <input name="tukhoa" type="search" value="<?php
                            if(isset($tukhoa)) echo $tukhoa;
                            ?>">
                        </div>
                        <button class="fl" type="submit">
                            <strong>Tìm kiếm</strong>
                        </button>

                    </ul>
                </form>
            </div>
            <div class="cl9 mag-l5">Tìm với từ bắt đầu:</div>
            <ul class="list-charter txt-center">
                <li class="in-block <?php if($text=="a"){echo "active";}?>">
                    <a title="Sổ mơ bắt đầu với từ a" href="/so-mo-so-de/bat-dau-bang-a">
                        <strong>A</strong>
                    </a>
                </li>
                <li class="in-block <?php if($text=="b"){echo "active";}?>">
                    <a title="Sổ mơ bắt đầu với từ b" href="/so-mo-so-de/bat-dau-bang-b">
                        <strong>B</strong>
                    </a>
                </li>
                <li class="in-block <?php if($text=="c"){echo "active";}?>">
                    <a title="Sổ mơ bắt đầu với từ c" href="/so-mo-so-de/bat-dau-bang-c">
                        <strong>C</strong>
                    </a>
                </li>
                <li class="in-block <?php if($text=="d"){echo "active";}?>">
                    <a title="Sổ mơ bắt đầu với từ d" href="/so-mo-so-de/bat-dau-bang-d">
                        <strong>D</strong>
                    </a>
                </li>
                <li class="in-block <?php if($text=="e"){echo "active";}?>">
                    <a title="Sổ mơ bắt đầu với từ e" href="/so-mo-so-de/bat-dau-bang-e">
                        <strong>E</strong>
                    </a>
                </li>
                <li class="in-block <?php if($text=="f"){echo "active";}?>">
                    <a title="Sổ mơ bắt đầu với từ f" href="/so-mo-so-de/bat-dau-bang-f">
                        <strong>F</strong>
                    </a>
                </li>
                <li class="in-block <?php if($text=="g"){echo "active";}?>">
                    <a title="Sổ mơ bắt đầu với từ g" href="/so-mo-so-de/bat-dau-bang-g">
                        <strong>G</strong>
                    </a>
                </li>
                <li class="in-block <?php if($text=="h"){echo "active";}?>">
                    <a title="Sổ mơ bắt đầu với từ h" href="/so-mo-so-de/bat-dau-bang-h">
                        <strong>H</strong>
                    </a>
                </li>
                <li class="in-block <?php if($text=="i"){echo "active";}?>">
                    <a title="Sổ mơ bắt đầu với từ i" href="/so-mo-so-de/bat-dau-bang-i">
                        <strong>I</strong>
                    </a>
                </li>
                <li class="in-block <?php if($text=="j"){echo "active";}?>">
                    <a title="Sổ mơ bắt đầu với từ j" href="/so-mo-so-de/bat-dau-bang-j">
                        <strong>J</strong>
                    </a>
                </li>
                <li class="in-block <?php if($text=="k"){echo "active";}?>">
                    <a title="Sổ mơ bắt đầu với từ k" href="/so-mo-so-de/bat-dau-bang-k">
                        <strong>K</strong>
                    </a>
                </li>
                <li class="in-block <?php if($text=="l"){echo "active";}?>">
                    <a title="Sổ mơ bắt đầu với từ l" href="/so-mo-so-de/bat-dau-bang-l">
                        <strong>L</strong>
                    </a>
                </li>
                <li class="in-block <?php if($text=="m"){echo "active";}?>">
                    <a title="Sổ mơ bắt đầu với từ m" href="/so-mo-so-de/bat-dau-bang-m">
                        <strong>M</strong>
                    </a>
                </li>
                <li class="in-block <?php if($text=="n"){echo "active";}?>">
                    <a title="Sổ mơ bắt đầu với từ n" href="/so-mo-so-de/bat-dau-bang-n">
                        <strong>N</strong>
                    </a>
                </li>
                <li class="in-block <?php if($text=="o"){echo "active";}?>">
                    <a title="Sổ mơ bắt đầu với từ o" href="/so-mo-so-de/bat-dau-bang-o">
                        <strong>O</strong>
                    </a>
                </li>
                <li class="in-block <?php if($text=="p"){echo "active";}?>">
                    <a title="Sổ mơ bắt đầu với từ p" href="/so-mo-so-de/bat-dau-bang-p">
                        <strong>P</strong>
                    </a>
                </li>
                <li class="in-block <?php if($text=="q"){echo "active";}?>">
                    <a title="Sổ mơ bắt đầu với từ q" href="/so-mo-so-de/bat-dau-bang-q">
                        <strong>Q</strong>
                    </a>
                </li>
                <li class="in-block <?php if($text=="r"){echo "active";}?>">
                    <a title="Sổ mơ bắt đầu với từ r" href="/so-mo-so-de/bat-dau-bang-r">
                        <strong>R</strong>
                    </a>
                </li>
                <li class="in-block <?php if($text=="s"){echo "active";}?>">
                    <a title="Sổ mơ bắt đầu với từ s" href="/so-mo-so-de/bat-dau-bang-s">
                        <strong>S</strong>
                    </a>
                </li>
                <li class="in-block <?php if($text=="t"){echo "active";}?>">
                    <a title="Sổ mơ bắt đầu với từ t" href="/so-mo-so-de/bat-dau-bang-t">
                        <strong>T</strong>
                    </a>
                </li>
                <li class="in-block <?php if($text=="u"){echo "active";}?>">
                    <a title="Sổ mơ bắt đầu với từ u" href="/so-mo-so-de/bat-dau-bang-u">
                        <strong>U</strong>
                    </a>
                </li>
                <li class="in-block <?php if($text=="v"){echo "active";}?>">
                    <a title="Sổ mơ bắt đầu với từ v" href="/so-mo-so-de/bat-dau-bang-v">
                        <strong>V</strong>
                    </a>
                </li>
                <li class="in-block <?php if($text=="w"){echo "active";}?>">
                    <a title="Sổ mơ bắt đầu với từ w" href="/so-mo-so-de/bat-dau-bang-w">
                        <strong>W</strong>
                    </a>
                </li>
                <li class="in-block <?php if($text=="x"){echo "active";}?>">
                    <a title="Sổ mơ bắt đầu với từ x" href="/so-mo-so-de/bat-dau-bang-x">
                        <strong>X</strong>
                    </a>
                </li>
                <li class="in-block <?php if($text=="y"){echo "active";}?>">
                    <a title="Sổ mơ bắt đầu với từ y" href="/so-mo-so-de/bat-dau-bang-y">
                        <strong>Y</strong>
                    </a>
                </li>
                <li class="in-block <?php if($text=="z"){echo "active";}?>">
                    <a title="Sổ mơ bắt đầu với từ z" href="/so-mo-so-de/bat-dau-bang-z">
                        <strong>Z</strong>
                    </a>
                </li>
            </ul>
            @if(count($somos)==0)
            <center>Không tồn tại con số như giấc mơ bạn tìm :)</center>
            @else
            <div class="table-dream">
                <ul class="gr-yellow txt-center">
                    <li class="first percent-20">
                        <strong>STT</strong>
                    </li>
                    <li>
                        <h2>
                            <strong>Chiêm bao thấy</strong>
                        </h2>
                    </li>
                    <li>
                        <h2>
                            <strong>Con số giải mã</strong>
                        </h2>
                    </li>
                </ul>
                <ul class="list-dream">
                    <?php $i=1?>
                    @foreach($somos as $somo)
                    <li>
                        <label class="percent-20 in-block">
                            <strong>{{$i}}</strong>
                        </label>
                        <div class="in-block text-dream">
                            <a href="/so-mo/{{$somo->name}}-{{$somo->id}}" title="{{$somo->name}}">
                                <strong class="clred">{{$somo->name}}</strong>
                            </a>
                        </div>
                        <div class="in-block num-dream">
                            <strong class="cl-green">{{$somo->number}}</strong>
                        </div>
                    </li>
                    <?php $i++?>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <div class="paging txt-right pad10-5">

            <a class="active" title="Trang 1" href="/so-mo-so-de-lo-de-mien-bac-so-mo-so-de-giai-mong/1">1</a>
            <a class="" title="Trang 2" href="/so-mo-so-de-lo-de-mien-bac-so-mo-so-de-giai-mong/2">2</a>


        </div>

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

</div>
@endsection