<tbody>
    <tr class="gr-yellow">
        <th class="first"></th>
        @foreach($city2 as $cty)
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
            <div>{!!$rmt[$i]['rs_6_2']!!}</div>
            <div>{!!$rmt[$i]['rs_6_1']!!}</div>
            <div>{!!$rmt[$i]['rs_6_0']!!}</div>
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
            <div>{!!$rmt[$i]['rs_4_6']!!}</div>
            <div>{!!$rmt[$i]['rs_4_5']!!}</div>
            <div>{!!$rmt[$i]['rs_4_4']!!}</div>
            <div>{!!$rmt[$i]['rs_4_3']!!}</div>
            <div>{!!$rmt[$i]['rs_4_2']!!}</div>
            <div>{!!$rmt[$i]['rs_4_1']!!}</div>
            <div>{!!$rmt[$i]['rs_4_0']!!}</div>
            </td>
            @endfor
    </tr>
    <tr>
        <td>G3</td>
        @for($i=0;$i
        <count($city2);$i++) <td>
            <div>{!!$rmt[$i]['rs_3_1']!!}</div>
            <div>{!!$rmt[$i]['rs_3_0']!!}</div>
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