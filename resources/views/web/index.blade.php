@extends('web.template.main')

@section('title', 'Agromakers')

@section('style')
    <link rel="stylesheet" href="{{ asset('web/plugins/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ asset('web/plugins/revolution-slider/revolution/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('web/plugins/revolution-slider/revolution/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('web/plugins/revolution-slider/revolution/css/navigation.css') }}">
@endsection

@section('content')
    <!-- revolution slider -->
    <div id="revSliderWrapper" class="rev_slider_wrapper fullscreen-container" style="background-color: transparent; padding: 0; margin: 0 auto;"
         data-alias="classic4export"
         data-source="gallery">
        <div id="revSlider" class="rev_slider fullwidthabanner" style="display: none;" data-version="5.4.1">
            <ul>
                <li data-index="rs-3053"
                    data-transition="zoomout"
                    data-slotamount="default"
                    data-hideafterloop="0"
                    data-hideslideonmobile="off"
                    data-easein="Power4.easeInOut"
                    data-easeout="Power4.easeInOut"
                    data-masterspeed="2000"
                    data-thumb="{{ asset('web/img/index/cooperativadigital-60.jpg') }}"
                    data-rotate="0"
                    data-fstransition="fade"
                    data-fsmasterspeed="1500"
                    data-fsslotamount="7"
                    data-saveperformance="off"
                    data-title={{ __('index.cooperativa') }}>
                    <img class="rev-slidebg" src="{{ asset('web/img/index/cooperativadigital.jpg') }}" alt="Image description"
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         data-bgparallax="10">

                    <!-- LAYER NR. 1 -->
                    <div id="slide-3053-layer-1" class="tp-caption NotGeneric-Title tp-resizeme" style="z-index: 5; white-space: nowrap; text-transform: uppercase; background: rgba(11,1,29,0.64); padding: 3px"
                         data-x="['center','center','center','center']"
                         data-y="['middle','middle','middle','middle']"
                         data-hoffset="['0','0','0','0']"
                         data-voffset="['0','0','0','0']"
                         data-fontsize="['50','50','50','35']"
                         data-lineheight="['50','50','50','28']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},
                     {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[10,10,10,10]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[10,10,10,10]"
                         data-paddingleft="[0,0,0,0]">
                        {{ __('index.cooperativa') }}
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div id="slide-3053-layer-4" class="tp-caption NotGeneric-SubTitle tp-resizeme" style="z-index: 6; white-space: nowrap; text-transform: uppercase; background: rgba(11,1,29,0.64); padding: 10px"
                         data-x="['center','center','center','center']"
                         data-y="['middle','middle','middle','middle']"
                         data-hoffset="['0','0','0','0']"
                         data-voffset="['52','52','52','51']"
                         data-fontsize="['20','20','20','19']"
                         data-lineheight="['20','20','70','26']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},
                     {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">
                        {{ __('index.cooperativa.fairprice') }}
                    </div>
                    <a class="tp-caption rev-btn  tp-resizeme btn-primary g-brd-black g-brd-2 g-brd-style-solid"
                       href={{ route('digital-cooperative') }} target="_blank" id="slide-67-layer-7"
                       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                       data-y="['middle','middle','middle','middle']" data-voffset="['200','200','160','120']"
                       data-width="250"
                       data-height="none"
                       data-whitespace="nowrap"

                       data-type="button"
                       data-actions=""
                       data-responsive_offset="on"

                       data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                       data-textAlign="['center','center','center','center']"
                       data-paddingtop="[0,0,0,0]"
                       data-paddingright="[50,50,50,50]"
                       data-paddingbottom="[0,0,0,0]"
                       data-paddingleft="[50,50,50,50]"

                       style="z-index: 21; min-width: 250px; max-width: 250px; white-space: nowrap; font-size: 18px; line-height: 60px; font-weight: 700; color: rgba(255,255,255,1);border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">{{ __('index.see-more') }}
                    </a>
                </li>
                <li data-index="rs-3048"
                    data-transition="zoomout"
                    data-slotamount="default"
                    data-hideafterloop="0"
                    data-hideslideonmobile="off"
                    data-easein="Power4.easeInOut"
                    data-easeout="Power4.easeInOut"
                    data-masterspeed="2000"
                    data-thumb="{{ asset('web/img/index/PrecioJusto-60.jpg') }}"
                    data-rotate="0"
                    data-fstransition="fade"
                    data-fsmasterspeed="1500"
                    data-fsslotamount="7"
                    data-saveperformance="off"
                    data-title={{ __('index.farmer.thumb') }}>
                    <img class="rev-slidebg" src="{{ asset('web/img/index/PrecioJusto.jpg') }}" alt="Image description"
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         data-bgparallax="10">

                    <!-- LAYER NR. 1 -->
                    <div id="slide-3048-layer-1" class="tp-caption NotGeneric-Title tp-resizeme" style="z-index: 5; white-space: nowrap; text-transform: uppercase; background: rgba(11,1,29,0.64); padding: 3px"
                         data-x="['center','center','center','center']"
                         data-y="['middle','middle','middle','middle']"
                         data-hoffset="['0','0','0','0']"
                         data-voffset="['0','0','0','0']"
                         data-fontsize="['70','70','70','45']"
                         data-lineheight="['70','70','70','50']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},
                     {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[10,10,10,10]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[10,10,10,10]"
                         data-paddingleft="[0,0,0,0]">
                        {{ __('index.farmer') }}
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div id="slide-3048-layer-4" class="tp-caption NotGeneric-SubTitle tp-resizeme" style="z-index: 6; white-space: nowrap; text-transform: uppercase; background: rgba(11,1,29,0.64); padding: 10px"
                         data-x="['center','center','center','center']"
                         data-y="['middle','middle','middle','middle']"
                         data-hoffset="['0','0','0','0']"
                         data-voffset="['52','52','52','51']"
                         data-fontsize="['20','20','20','19']"
                         data-lineheight="['20','20','70','26']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},
                     {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">
                        {{ __('index.farmer.fairprice') }}
                    </div>
                    <a class="tp-caption rev-btn  tp-resizeme btn-primary g-brd-black g-brd-2 g-brd-style-solid"
                       href={{ route('productors') }} target="_blank" id="slide-67-layer-7"
                       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                       data-y="['middle','middle','middle','middle']" data-voffset="['200','200','160','120']"
                       data-width="250"
                       data-height="none"
                       data-whitespace="nowrap"

                       data-type="button"
                       data-actions=""
                       data-responsive_offset="on"

                       data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                       data-textAlign="['center','center','center','center']"
                       data-paddingtop="[0,0,0,0]"
                       data-paddingright="[50,50,50,50]"
                       data-paddingbottom="[0,0,0,0]"
                       data-paddingleft="[50,50,50,50]"

                       style="z-index: 21; min-width: 250px; max-width: 250px; white-space: nowrap; font-size: 18px; line-height: 60px; font-weight: 700; color: rgba(255,255,255,1);border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">{{ __('index.see-more') }}
                    </a>
                </li>
                <li data-index="rs-3052"
                    data-transition="zoomout"
                    data-slotamount="default"
                    data-hideafterloop="0"
                    data-hideslideonmobile="off"
                    data-easein="Power4.easeInOut"
                    data-easeout="Power4.easeInOut"
                    data-masterspeed="2000"
                    data-thumb="{{ asset('web/img/index/Consumidor-60.jpg') }}"
                    data-rotate="0"
                    data-fstransition="fade"
                    data-fsmasterspeed="1500"
                    data-fsslotamount="7"
                    data-saveperformance="off"
                    data-title={{ __('index.consumer.thumb') }}>
                    <img class="rev-slidebg" src="{{ asset('web/img/index/Consumidor.jpg') }}" alt="Image description"
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         data-bgparallax="10">

                    <!-- LAYER NR. 1 -->
                    <div id="slide-3052-layer-1" class="tp-caption NotGeneric-Title tp-resizeme" style="z-index: 5; white-space: nowrap; text-transform: uppercase; background: rgba(11,1,29,0.64); padding: 3px"
                         data-x="['center','center','center','center']"
                         data-y="['middle','middle','middle','middle']"
                         data-hoffset="['0','0','0','0']"
                         data-voffset="['0','0','0','0']"
                         data-fontsize="['70','70','70','45']"
                         data-lineheight="['70','70','70','50']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},
                     {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[10,10,10,10]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[10,10,10,10]"
                         data-paddingleft="[0,0,0,0]">
                        {{ __('index.consumer') }}
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div id="slide-3052-layer-4" class="tp-caption NotGeneric-SubTitle tp-resizeme" style="z-index: 6; white-space: nowrap; text-transform: uppercase; background: rgba(11,1,29,0.64); padding: 10px"
                         data-x="['center','center','center','center']"
                         data-y="['middle','middle','middle','middle']"
                         data-hoffset="['0','0','0','0']"
                         data-voffset="['52','52','52','51']"
                         data-fontsize="['20','20','20','19']"
                         data-lineheight="['20','20','70','26']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},
                     {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">
                        {{ __('index.consumer.fairprice') }}
                    </div>
                    <a class="tp-caption rev-btn  tp-resizeme btn-primary g-brd-black g-brd-2 g-brd-style-solid"
                       href={{ route('consumer') }} target="_blank" id="slide-67-layer-7"
                       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                       data-y="['middle','middle','middle','middle']" data-voffset="['200','200','160','120']"
                       data-width="250"
                       data-height="none"
                       data-whitespace="nowrap"

                       data-type="button"
                       data-actions=""
                       data-responsive_offset="on"

                       data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                       data-textAlign="['center','center','center','center']"
                       data-paddingtop="[0,0,0,0]"
                       data-paddingright="[50,50,50,50]"
                       data-paddingbottom="[0,0,0,0]"
                       data-paddingleft="[50,50,50,50]"

                       style="z-index: 21; min-width: 250px; max-width: 250px; white-space: nowrap; font-size: 18px; line-height: 60px; font-weight: 700; color: rgba(255,255,255,1);border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">{{ __('index.see-more') }}
                    </a>
                </li>
                <li data-index="rs-3046"
                    data-transition="zoomout"
                    data-slotamount="default"
                    data-hideafterloop="0"
                    data-hideslideonmobile="off"
                    data-easein="Power4.easeInOut"
                    data-easeout="Power4.easeInOut"
                    data-masterspeed="2000"
                    data-thumb="{{ asset('web/img/index/2654356-60.jpg') }}"
                    data-rotate="0"
                    data-fstransition="fade"
                    data-fsmasterspeed="1500"
                    data-fsslotamount="7"
                    data-saveperformance="off"
                    data-title={{ __('index.academy') }}>
                    <img class="rev-slidebg" src="{{ asset('web/img/index/2654356.jpg') }}" alt="Image description"
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         data-bgparallax="10">

                    <!-- LAYER NR. 1 -->
                    <div id="slide-3046-layer-1" class="tp-caption NotGeneric-Title tp-resizeme" style="z-index: 5; white-space: nowrap; text-transform: uppercase; background: rgba(11,1,29,0.64); padding: 3px"
                         data-x="['center','center','center','center']"
                         data-y="['middle','middle','middle','middle']"
                         data-hoffset="['0','0','0','0']"
                         data-voffset="['0','0','0','0']"
                         data-fontsize="['70','70','70','45']"
                         data-lineheight="['70','70','70','50']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},
                     {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[10,10,10,10]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[10,10,10,10]"
                         data-paddingleft="[0,0,0,0]">
                        {{ __('index.farmers.science') }}
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div id="slide-3046-layer-4" class="tp-caption NotGeneric-SubTitle tp-resizeme" style="z-index: 6; white-space: nowrap; text-transform: uppercase; background: rgba(11,1,29,0.64); padding: 10px"
                         data-x="['center','center','center','center']"
                         data-y="['middle','middle','middle','middle']"
                         data-hoffset="['0','0','0','0']"
                         data-voffset="['52','52','52','51']"
                         data-fontsize="['20','20','20','19']"
                         data-lineheight="['20','20','70','26']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},
                     {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">
                        {{ __('index.from.to') }}
                    </div>
                    <a class="tp-caption rev-btn  tp-resizeme btn-primary g-brd-black g-brd-2 g-brd-style-solid"
                       href="#" target="_blank" id="slide-67-layer-7"
                       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                       data-y="['middle','middle','middle','middle']" data-voffset="['200','200','160','120']"
                       data-width="250"
                       data-height="none"
                       data-whitespace="nowrap"

                       data-type="button"
                       data-actions=""
                       data-responsive_offset="on"

                       data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                       data-textAlign="['center','center','center','center']"
                       data-paddingtop="[0,0,0,0]"
                       data-paddingright="[50,50,50,50]"
                       data-paddingbottom="[0,0,0,0]"
                       data-paddingleft="[50,50,50,50]"

                       style="z-index: 21; min-width: 250px; max-width: 250px; white-space: nowrap; font-size: 18px; line-height: 60px; font-weight: 700; color: rgba(255,255,255,1);border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">{{ __('index.see-more') }}
                    </a>
                </li>
                <li data-index="rs-3045"
                    data-transition="zoomout"
                    data-slotamount="default"
                    data-hideafterloop="0"
                    data-hideslideonmobile="off"
                    data-easein="Power4.easeInOut"
                    data-easeout="Power4.easeInOut"
                    data-masterspeed="2000"
                    data-rotate="0"
                    data-fstransition="fade"
                    data-fsmasterspeed="1500"
                    data-fsslotamount="7"
                    data-saveperformance="off"
                    data-title={{ __('index.open.small') }}>
                    <img class="rev-slidebg" src="{{ asset('web/img/index/Technology.jpg') }}" alt="Image description"
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         data-bgparallax="10">

                    <!-- LAYER NR. 1 -->
                    <div id="slide-3045-layer-1" class="tp-caption NotGeneric-Title tp-resizeme" style="z-index: 5; white-space: nowrap; text-transform: uppercase; background: rgba(11,1,29,0.64); padding: 3px"
                         data-x="['center','center','center','center']"
                         data-y="['middle','middle','middle','middle']"
                         data-hoffset="['0','0','0','0']"
                         data-voffset="['0','0','0','0']"
                         data-fontsize="['70','70','70','45']"
                         data-lineheight="['70','70','70','50']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},
                     {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[10,10,10,10]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[10,10,10,10]"
                         data-paddingleft="[0,0,0,0]">
                        {{ __('index.open.tec') }}
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div id="slide-3045-layer-4" class="tp-caption NotGeneric-SubTitle tp-resizeme" style="z-index: 6; white-space: nowrap; text-transform: uppercase; background: rgba(11,1,29,0.64); padding: 10px"
                         data-x="['center','center','center','center']"
                         data-y="['middle','middle','middle','middle']"
                         data-hoffset="['0','0','0','0']"
                         data-voffset="['52','52','52','51']"
                         data-fontsize="['20','20','20','19']"
                         data-lineheight="['20','20','70','26']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},
                     {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">
                        {{ __('index.open.tec.agr.small.eco') }}
                    </div>
                    <a class="tp-caption rev-btn  tp-resizeme btn-primary g-brd-black g-brd-2 g-brd-style-solid"
                       href={{ route('open-source') }} target="_blank" id="slide-67-layer-7"
                       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                       data-y="['middle','middle','middle','middle']" data-voffset="['200','200','160','120']"
                       data-width="250"
                       data-height="none"
                       data-whitespace="nowrap"

                       data-type="button"
                       data-actions=""
                       data-responsive_offset="on"

                       data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                       data-textAlign="['center','center','center','center']"
                       data-paddingtop="[0,0,0,0]"
                       data-paddingright="[50,50,50,50]"
                       data-paddingbottom="[0,0,0,0]"
                       data-paddingleft="[50,50,50,50]"

                       style="z-index: 21; min-width: 250px; max-width: 250px; white-space: nowrap; font-size: 18px; line-height: 60px; font-weight: 700; color: rgba(255,255,255,1);border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">{{ __('index.see-more') }}
                    </a>
                </li>
                <li data-index="rs-3047"
                    data-transition="zoomout"
                    data-slotamount="default"
                    data-hideafterloop="0"
                    data-hideslideonmobile="off"
                    data-easein="Power4.easeInOut"
                    data-easeout="Power4.easeInOut"
                    data-masterspeed="2000"
                    data-thumb="{{ asset('web/img/index/2674659-60.jpg') }}"
                    data-rotate="0"
                    data-fstransition="fade"
                    data-fsmasterspeed="1500"
                    data-fsslotamount="7"
                    data-saveperformance="off"
                    data-title={{ __('index.valu') }}>
                    <img class="rev-slidebg" src="{{ asset('web/img/index/2674659.jpg') }}" alt="Image description"
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         data-bgparallax="10">

                    <!-- LAYER NR. 1 -->
                    <div id="slide-3047-layer-1" class="tp-caption NotGeneric-Title tp-resizeme" style="z-index: 5; white-space: nowrap; text-transform: uppercase; background: rgba(11,1,29,0.64); padding: 3px"
                         data-x="['center','center','center','center']"
                         data-y="['middle','middle','middle','middle']"
                         data-hoffset="['0','0','0','0']"
                         data-voffset="['0','0','0','0']"
                         data-fontsize="['70','70','70','45']"
                         data-lineheight="['70','70','70','50']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},
                     {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[10,10,10,10]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[10,10,10,10]"
                         data-paddingleft="[0,0,0,0]">
                        {{ __('index.value') }}
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div id="slide-3047-layer-4" class="tp-caption NotGeneric-SubTitle tp-resizeme" style="z-index: 6; white-space: nowrap; text-transform: uppercase; background: rgba(11,1,29,0.64); padding: 10px"
                         data-x="['center','center','center','center']"
                         data-y="['middle','middle','middle','middle']"
                         data-hoffset="['0','0','0','0']"
                         data-voffset="['52','52','52','51']"
                         data-fontsize="['20','20','20','19']"
                         data-lineheight="['20','20','70','26']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},
                     {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">
                        {{ __('index.value.ecointensify') }}
                    </div>
                    <a class="tp-caption rev-btn  tp-resizeme btn-primary g-brd-black g-brd-2 g-brd-style-solid"
                       href="#" target="_blank" id="slide-67-layer-7"
                       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                       data-y="['middle','middle','middle','middle']" data-voffset="['200','200','160','120']"
                       data-width="250"
                       data-height="none"
                       data-whitespace="nowrap"

                       data-type="button"
                       data-actions=""
                       data-responsive_offset="on"

                       data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                       data-textAlign="['center','center','center','center']"
                       data-paddingtop="[0,0,0,0]"
                       data-paddingright="[50,50,50,50]"
                       data-paddingbottom="[0,0,0,0]"
                       data-paddingleft="[50,50,50,50]"

                       style="z-index: 21; min-width: 250px; max-width: 250px; white-space: nowrap; font-size: 18px; line-height: 60px; font-weight: 700; color: rgba(255,255,255,1);border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">{{ __('index.see-more') }}
                    </a>
                </li>
                <li data-index="rs-3049"
                    data-transition="zoomout"
                    data-slotamount="default"
                    data-hideafterloop="0"
                    data-hideslideonmobile="off"
                    data-easein="Power4.easeInOut"
                    data-easeout="Power4.easeInOut"
                    data-masterspeed="2000"
                    data-thumb="{{ asset('web/img/index/466658-60.jpg') }}"
                    data-rotate="0"
                    data-fstransition="fade"
                    data-fsmasterspeed="1500"
                    data-fsslotamount="7"
                    data-saveperformance="off"
                    data-title={{ __('index.soil') }}>
                    <img class="rev-slidebg" src="{{ asset('web/img/index/466658.jpg') }}" alt="Image description"
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         data-bgparallax="10">

                    <!-- LAYER NR. 1 -->
                    <div id="slide-3049-layer-1" class="tp-caption NotGeneric-Title tp-resizeme" style="z-index: 5; white-space: nowrap; text-transform: uppercase; background: rgba(11,1,29,0.64); padding: 3px"
                         data-x="['center','center','center','center']"
                         data-y="['middle','middle','middle','middle']"
                         data-hoffset="['0','0','0','0']"
                         data-voffset="['0','0','0','0']"
                         data-fontsize="['70','70','70','45']"
                         data-lineheight="['70','70','70','50']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},
                     {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[10,10,10,10]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[10,10,10,10]"
                         data-paddingleft="[0,0,0,0]">
                        {{ __('index.feedTheSoil') }}
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div id="slide-3049-layer-4" class="tp-caption NotGeneric-SubTitle tp-resizeme" style="z-index: 6; white-space: nowrap; text-transform: uppercase; background: rgba(11,1,29,0.64); padding: 10px"
                         data-x="['center','center','center','center']"
                         data-y="['middle','middle','middle','middle']"
                         data-hoffset="['0','0','0','0']"
                         data-voffset="['52','52','52','51']"
                         data-fontsize="['20','20','20','19']"
                         data-lineheight="['20','20','70','26']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},
                     {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">
                        {{ __('index.feedTheSoil.solutionForMenAndPlanet') }}
                    </div>
                    <a class="tp-caption rev-btn  tp-resizeme btn-primary g-brd-black g-brd-2 g-brd-style-solid"
                       href="#" target="_blank" id="slide-67-layer-7"
                       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                       data-y="['middle','middle','middle','middle']" data-voffset="['200','200','160','120']"
                       data-width="250"
                       data-height="none"
                       data-whitespace="nowrap"

                       data-type="button"
                       data-actions=""
                       data-responsive_offset="on"

                       data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                       data-textAlign="['center','center','center','center']"
                       data-paddingtop="[0,0,0,0]"
                       data-paddingright="[50,50,50,50]"
                       data-paddingbottom="[0,0,0,0]"
                       data-paddingleft="[50,50,50,50]"

                       style="z-index: 21; min-width: 250px; max-width: 250px; white-space: nowrap; font-size: 18px; line-height: 60px; font-weight: 700; color: rgba(255,255,255,1);border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">{{ __('index.see-more') }}
                    </a>
                </li>
                <li data-index="rs-3050"
                    data-transition="zoomout"
                    data-slotamount="default"
                    data-hideafterloop="0"
                    data-hideslideonmobile="off"
                    data-easein="Power4.easeInOut"
                    data-easeout="Power4.easeInOut"
                    data-masterspeed="2000"
                    data-thumb="{{ asset('web/img/index/Confianza-60.jpg') }}"
                    data-rotate="0"
                    data-fstransition="fade"
                    data-fsmasterspeed="1500"
                    data-fsslotamount="7"
                    data-saveperformance="off"
                    data-title={{ __('index.cooperate') }}>
                    <img class="rev-slidebg" src="{{ asset('web/img/index/Confianza.jpg') }}" alt="Image description"
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         data-bgparallax="10">

                    <!-- LAYER NR. 1 -->
                    <div id="slide-3050-layer-1" class="tp-caption NotGeneric-Title tp-resizeme" style="z-index: 5; white-space: nowrap; text-transform: uppercase; background: rgba(11,1,29,0.64); padding: 3px"
                         data-x="['center','center','center','center']"
                         data-y="['middle','middle','middle','middle']"
                         data-hoffset="['0','0','0','0']"
                         data-voffset="['0','0','0','0']"
                         data-fontsize="['70','70','70','45']"
                         data-lineheight="['70','70','70','50']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},
                     {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[10,10,10,10]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[10,10,10,10]"
                         data-paddingleft="[0,0,0,0]">
                        {{ __('index.cooperate') }}
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div id="slide-3050-layer-4" class="tp-caption NotGeneric-SubTitle tp-resizeme" style="z-index: 6; white-space: nowrap; text-transform: uppercase; background: rgba(11,1,29,0.64); padding: 10px"
                         data-x="['center','center','center','center']"
                         data-y="['middle','middle','middle','middle']"
                         data-hoffset="['0','0','0','0']"
                         data-voffset="['52','52','52','51']"
                         data-fontsize="['20','20','20','19']"
                         data-lineheight="['20','20','70','26']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},
                     {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">
                        {{ __('index.cooperate.efficiency') }}
                    </div>
                    <a class="tp-caption rev-btn  tp-resizeme btn-primary g-brd-black g-brd-2 g-brd-style-solid"
                       href="#" target="_blank" id="slide-67-layer-7"
                       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                       data-y="['middle','middle','middle','middle']" data-voffset="['200','200','160','120']"
                       data-width="250"
                       data-height="none"
                       data-whitespace="nowrap"

                       data-type="button"
                       data-actions=""
                       data-responsive_offset="on"

                       data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                       data-textAlign="['center','center','center','center']"
                       data-paddingtop="[0,0,0,0]"
                       data-paddingright="[50,50,50,50]"
                       data-paddingbottom="[0,0,0,0]"
                       data-paddingleft="[50,50,50,50]"

                       style="z-index: 21; min-width: 250px; max-width: 250px; white-space: nowrap; font-size: 18px; line-height: 60px; font-weight: 700; color: rgba(255,255,255,1);border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">{{ __('index.see-more') }}
                    </a>
                </li>
                <li data-index="rs-3051"
                    data-transition="zoomout"
                    data-slotamount="default"
                    data-hideafterloop="0"
                    data-hideslideonmobile="off"
                    data-easein="Power4.easeInOut"
                    data-easeout="Power4.easeInOut"
                    data-masterspeed="2000"
                    data-thumb="{{ asset('web/img/index/covid-60.jpg') }}"
                    data-rotate="0"
                    data-fstransition="fade"
                    data-fsmasterspeed="1500"
                    data-fsslotamount="7"
                    data-saveperformance="off"
                    data-title={{ __('index.covid') }}>
                    <img class="rev-slidebg" src="{{ asset('web/img/index/covid.jpg') }}" alt="Image description"
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         data-bgparallax="10">

                    <!-- LAYER NR. 1 -->
                    <div id="slide-3050-layer-1" class="tp-caption NotGeneric-Title tp-resizeme" style="z-index: 5; white-space: nowrap; text-transform: uppercase; background: rgba(11,1,29,0.64); padding: 3px"
                         data-x="['center','center','center','center']"
                         data-y="['middle','middle','middle','middle']"
                         data-hoffset="['0','0','0','0']"
                         data-voffset="['0','0','0','0']"
                         data-fontsize="['70','70','70','45']"
                         data-lineheight="['70','70','70','50']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},
                     {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[10,10,10,10]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[10,10,10,10]"
                         data-paddingleft="[0,0,0,0]">
                        {{ __('index.covid') }}
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div id="slide-3050-layer-4" class="tp-caption NotGeneric-SubTitle tp-resizeme" style="z-index: 6; white-space: nowrap; text-transform: uppercase; background: rgba(11,1,29,0.64); padding: 10px"
                         data-x="['center','center','center','center']"
                         data-y="['middle','middle','middle','middle']"
                         data-hoffset="['0','0','0','0']"
                         data-voffset="['52','52','52','51']"
                         data-fontsize="['20','20','20','19']"
                         data-lineheight="['20','20','70','26']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},
                     {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">
                        {{ __('index.covid.share') }}
                    </div>
                    <a class="tp-caption rev-btn  tp-resizeme btn-primary g-brd-black g-brd-2 g-brd-style-solid"
                       href={{ route('covid') }} target="_blank" id="slide-67-layer-7"
                       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                       data-y="['middle','middle','middle','middle']" data-voffset="['200','200','160','120']"
                       data-width="250"
                       data-height="none"
                       data-whitespace="nowrap"

                       data-type="button"
                       data-actions=""
                       data-responsive_offset="on"

                       data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                       data-textAlign="['center','center','center','center']"
                       data-paddingtop="[0,0,0,0]"
                       data-paddingright="[50,50,50,50]"
                       data-paddingbottom="[0,0,0,0]"
                       data-paddingleft="[50,50,50,50]"

                       style="z-index: 21; min-width: 250px; max-width: 250px; white-space: nowrap; font-size: 18px; line-height: 60px; font-weight: 700; color: rgba(255,255,255,1);border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">{{ __('index.see-more') }}
                    </a>
                </li>
            </ul>

            <div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, .25);"></div>
        </div>
    </div>
    <!-- End revolution slider -->
@endsection

@section('script')
    <!-- JS Revolution Slider -->
    <script src="{{ asset('web/plugins/revolution-slider/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('web/plugins/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <script src="{{ asset('web/plugins/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('web/plugins/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('web/plugins/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('web/plugins/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('web/plugins/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('web/plugins/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('web/plugins/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('web/plugins/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('web/plugins/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

    <script src="{{ asset('web/js/index.js') }}"></script>
@endsection
