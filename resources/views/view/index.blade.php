@extends('view.layouts.app')

@section('content_kaimook')
<div class="home-bg full">

    <section class="main-block ">
        <div class="container color-bg">
            <div class="row">
                <div class="col-md-12">
                    <h4>ทดสอบ</h4>
                </div>
            </div>
        </div>
    </section>
    
    <section class="main-block ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <img src="{{ url('photo/BESIDEKAIMOOK_Donation-01.png') }}" height="100%" width="100%">
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-md-12">
                   <img src="{{ url('photo/BESIDEKAIMOOK_Donation-02.png') }}" height="100%" width="100%">
                </div>
            </div>
        </div>
    </section>

  

    <br />
    <br />
    <br />
    <footer class="main-block ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright &copy; 2018 Listing. All rights reserved , Design with FanPage KAIMOOKBNK48 Thailand</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
@endsection
