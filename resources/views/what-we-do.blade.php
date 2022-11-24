@extends('layouts.frontend-main')
@if($page->featured_image)
<style>
    .topbanner_image {
  width: 100% !important;
  height: 100vh !important;
  background-image: url("{{$page->featured_image->getUrl() }} ");
  background-position: center !important;
  background-repeat: no-repeat !important;
  background-size: cover !important;
}
</style>
@endif
@section('content')
<div class="topbanner_image">
    @include('layouts.header')
    <section class="media-banner-section">
        <div class="container">
            <div class="media-banner-wrapper">
                {{-- <div class="media-banner-content">
                    <div class="mediabanner-logo"><img src="{{ asset('dist/taylor-hawkes-logo-yellow.9d4d837d.svg') }}" /></div>
                    <h3>Media/Creative</h3>
                </div> --}}
            </div>
        </div>
    </section>
</div>
      <section class="main-page-section media-creative-section">
         <div class="media-creative-wrapper">
            <div class="media-creative-content-left white">
               <div class="text-wrape-white">
                  <h3>What we do</h3>
                  <p>{!! $page->page_text !!}</p>
                </div>
            </div>
            <div class="black media-creative-content-right">
               <div class="text-wrape-black">
                  <h3>We know Accounting<br> and we undestand your<br> sectors needs</h3>
                  <div class="cont_select_center">
                     <div class="select_mate" data-mate-select="active">
                        <select onclick="return false;">
                    
                           <option value="">Choose your sector </option>
                           <option value="1">TH Accountancy Practice (UK)</option>
                           <option value="2">TH CPA (USA) </option>
                           <option value="3">TH Media/Creative</option>
                           <option value="4">TH Technology</option>
                           <option value="5">TH Property & Construction</option>
                           <option value="6">TH Legal</option>
                           <option value="7">TH Global</option>
                           <option value="8">TH Accountancy practices, sales purchases and valuations</option>
                           <option value="9">TH Job seekers bootcamp</option>
                        </select>
                        <p class="selecionado_opcion" onclick="open_select(this)"></p>
                        <span onclick="open_select(this)" class="icon_select_mate">
                           <svg fill="#fff" height="24" width="24">
                              <path d="M7.41 7.84 12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
                              <path d="M0-.75h24v24H0z" fill="none"/>
                           </svg>
                        </span>
                        <div class="cont_list_select_mate">
                           <ul class="cont_select_int"> </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="bg-yellow">
                  <div class="text-wrape-yellow">
                     <h3>Our expertise</h3>
                     <h4>Accounting</h4>
                     <div class="slide-section">
                        <p>Accountancy recruitment is one of our main services and includes roles from basic book-keeping through to regulatory compliance, technical advisory and strategic modelling work. Our in-depth knowledge of the accountancy space and network of candidates means we can dig deeper to find the people who really match the role.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="blackboard-main">
         <div class="container wraper">
            <div class="blackboard">
               <p>Expand your companies skill set with a team built around your needs</p>
               <div class="button-text-wrapper"> <a href="mailto:info@taylorhawkes.com" class="btn-blue btn-h51 slide-white" data-aos="fade-up" data-aos-duration="1500"> <span>Email us today</span> </a> </div>
            </div>
         </div>
      </section>
@endsection
@section('scripts')

@parent

<script>
         window.onload = function(){
         crear_select();
         }
         
         function isMobileDevice() {
           return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
         };
         
         
         var li = new Array();
         function crear_select(){
         var div_cont_select = document.querySelectorAll("[data-mate-select='active']");
         var select_ = '';
         for (var e = 0; e < div_cont_select.length; e++) {
         div_cont_select[e].setAttribute('data-indx-select',e);
         div_cont_select[e].setAttribute('data-selec-open','false');
         var ul_cont = document.querySelectorAll("[data-indx-select='"+e+"'] > .cont_list_select_mate > ul");
         select_ = document.querySelectorAll("[data-indx-select='"+e+"'] >select")[0];
         if (isMobileDevice()) { 
         select_.addEventListener('change', function () {
         _select_option(select_.selectedIndex,e);
         });
         }
         var select_optiones = select_.options;
         document.querySelectorAll("[data-indx-select='"+e+"']  > .selecionado_opcion ")[0].setAttribute('data-n-select',e);
         document.querySelectorAll("[data-indx-select='"+e+"']  > .icon_select_mate ")[0].setAttribute('data-n-select',e);
         for (var i = 0; i < select_optiones.length; i++) {
         li[i] = document.createElement('li');
         if (select_optiones[i].selected == true || select_.value == select_optiones[i].innerHTML ) {
         li[i].className = 'active';
         document.querySelector("[data-indx-select='"+e+"']  > .selecionado_opcion ").innerHTML = select_optiones[i].innerHTML;
         };
         li[i].setAttribute('data-index',i);
         li[i].setAttribute('data-selec-index',e);
         // funcion click al selecionar 
         li[i].addEventListener( 'click', function(){  _select_option(this.getAttribute('data-index'),this.getAttribute('data-selec-index')); });
         
         li[i].innerHTML = select_optiones[i].innerHTML;
         ul_cont[0].appendChild(li[i]);
         
           }; // Fin For select_optiones
         }; // fin for divs_cont_select
         } // Fin Function 
         
         
         
         var cont_slc = 0;
         function open_select(idx){
         var idx1 =  idx.getAttribute('data-n-select');
         var ul_cont_li = document.querySelectorAll("[data-indx-select='"+idx1+"'] .cont_select_int > li");
         var hg = 0;
         var slect_open = document.querySelectorAll("[data-indx-select='"+idx1+"']")[0].getAttribute('data-selec-open');
         var slect_element_open = document.querySelectorAll("[data-indx-select='"+idx1+"'] select")[0];
         if (isMobileDevice()) { 
         if (window.document.createEvent) { // All
         var evt = window.document.createEvent("MouseEvents");
         evt.initMouseEvent("mousedown", false, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
         slect_element_open.dispatchEvent(evt);
         } else if (slect_element_open.fireEvent) { // IE
         slect_element_open.fireEvent("onmousedown");
         }else {
         slect_element_open.click();
         }
         }else {
         
         
         for (var i = 0; i < ul_cont_li.length; i++) {
         hg += ul_cont_li[i].offsetHeight;
         }; 
         if (slect_open == 'false') {  
         document.querySelectorAll("[data-indx-select='"+idx1+"']")[0].setAttribute('data-selec-open','true');
         document.querySelectorAll("[data-indx-select='"+idx1+"'] > .cont_list_select_mate > ul")[0].style.height = hg+"px";
         document.querySelectorAll("[data-indx-select='"+idx1+"'] > .icon_select_mate")[0].style.transform = 'rotate(180deg)';
         }else{
         document.querySelectorAll("[data-indx-select='"+idx1+"']")[0].setAttribute('data-selec-open','false');
         document.querySelectorAll("[data-indx-select='"+idx1+"'] > .icon_select_mate")[0].style.transform = 'rotate(0deg)';
         document.querySelectorAll("[data-indx-select='"+idx1+"'] > .cont_list_select_mate > ul")[0].style.height = "0px";
         }
         }
         
         } // fin function open_select
         
         function salir_select(indx){
         var select_ = document.querySelectorAll("[data-indx-select='"+indx+"'] > select")[0];
         document.querySelectorAll("[data-indx-select='"+indx+"'] > .cont_list_select_mate > ul")[0].style.height = "0px";
         document.querySelector("[data-indx-select='"+indx+"'] > .icon_select_mate").style.transform = 'rotate(0deg)';
         document.querySelectorAll("[data-indx-select='"+indx+"']")[0].setAttribute('data-selec-open','false');
         }
         
         
         function _select_option(indx,selc){
         if (isMobileDevice()) { 
         selc = selc -1;
         }
           var select_ = document.querySelectorAll("[data-indx-select='"+selc+"'] > select")[0];
         
         var li_s = document.querySelectorAll("[data-indx-select='"+selc+"'] .cont_select_int > li");
         var p_act = document.querySelectorAll("[data-indx-select='"+selc+"'] > .selecionado_opcion")[0].innerHTML = li_s[indx].innerHTML;
         var select_optiones = document.querySelectorAll("[data-indx-select='"+selc+"'] > select > option");
         for (var i = 0; i < li_s.length; i++) {
         if (li_s[i].className == 'active') {
         li_s[i].className = '';
         };
         li_s[indx].className = 'active';
         
         };
         select_optiones[indx].selected = true;
         select_.selectedIndex = indx;
         select_.onchange();
         salir_select(selc); 
         }
      </script>
      <script>$(document).ready(function(){
         $('.owl-carousel').owlCarousel({
             loop:true,
             margin:0,
             responsiveClass:true,
             responsive:{
                 0:{
                     items:1,
                     nav:true,
                     autoHeight:true
                 },
                 400:{
                     items:1,
                     nav:true,
                   autoHeight:true
                 },
                 600:{
                     items:1,
                     nav:true,
                   autoHeight:true
                 },
                 1000:{
                     items:1,
                     nav:false,
                     loop:true,
                     autoplay:true,
                     autoplayTimeout:2000,
                     autoplayHoverPause:false,
                   autoHeight:true
                 }
             }
         })
         });
      </script>
@endsection
