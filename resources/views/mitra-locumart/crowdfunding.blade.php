@extends('mitra-locumart.template')

@section('title')
Crowdfunding
@endsection

@section('content')

<section id="crowdfunding" style = "background:url('/bg-locumart/mitra-kelima.png'); background-size:cover; height:100vh; margin-top:-2.5%; ">

<div class="container">
    <div class="row">
        <div class="col-4" style = "padding-top:150px;text-align:right;">
            <center>
                <h1 style = "color:green;">Crowdfunding</h1>
            </center>
        </div>

        <div class="col-8"  style = "padding-top:150px;text-align:center;">

                <img src="{{asset('/mitra-locumart/crowdfun.png')}}" alt="" style = "width:350px;">

        </div>
    </div>
</div>

</section>


    
@endsection

