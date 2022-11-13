@extends('layouts.frontend-main')

@section('content')
@include('layouts.header')
<section class="knowldge-single">
    <div class="container">
       <div class="items-wrapper">
          <div class="items">
             <p>{{ $knowledge->category->name }}<span>{{  date('M-y', strtotime($knowledge->publish_date)) }}</span></p>
             <h3>{{  $knowledge->name}} </h3>
          </div>
       </div>
       <div class="black-area">
          <p>{{  $knowledge->description}}</p>
       </div>
    </div>
 </section>
 <section class="knowldge-single-text">
    <div class="container">
       <div class="outer">
            <div class="text-wrapper">
                {!!  $knowledge->content !!}
            </div>
       </div>
    </div>
 </section>
 <section class="knowledge-section" id="knowledgeSection">
    <div class="container">
       <div class="items-wrapper">
        @foreach ($knowledge_related as $related)
        <div class="items">
            <p>{{ $related->category->name }}<span>{{  date('M-y', strtotime($related->publish_date)) }}</span></p>
            <h3>{{ $related->name }} <a href="{{ route('knowledge.show',$related->slug) }}"><img src="{{ asset('dist/icon-arrow-right-white.53b92526.svg') }}"></a> </h3>
         </div>
        @endforeach


       </div>
    </div>
 </section>
 <section class="knowledge-mail-section">
    <div class="container">
       <div class="content-wrapper">
          <div class="image-wrapper">
             <div class="image">
                <p>Knowledge is king</p>
             </div>
             <div class="mail-wrapper">
                <h4>Get the latest knowledge and insights direct into your mailbox</h4>
                <div class="input-wrapper">
                   <input type="text" class="cust-input" placeholder="Email">
                   <div class="checkbox-wrapper">
                      <input type="checkbox">
                      <p>I agree to Taylor Hawkes <a href="JavaScript:Void(0)">privacy policy</a></p>
                   </div>
                </div>
                <div class="button-wrapper"> <button type="button" class="btn-blue btn-h57">Submit</button> </div>
             </div>
          </div>
       </div>
    </div>
 </section>

@endsection
@section('scripts')

@parent

@endsection
