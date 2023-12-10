@extends('fe.index')
@section('main')

<div style="position: relative; display: flex;align-items: center;">
    <a href="{{route('home')}}" class="btn btn-warning" style="position: absolute;top: 10px;left: 10px;"> <i class='bx bx-arrow-back'></i> Quay lại trang chủ</a>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.747040669663!2d108.2497040733717!3d15.974581141968313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421088e365cc75%3A0x6648fdda14970b2c!2zNDcwIMSQxrDhu51uZyBUcuG6p24gxJDhuqFpIE5naMSpYSwgSG_DoCBI4bqjaSwgTmfFqSBIw6BuaCBTxqFuLCDEkMOgIE7hurVuZyA1NTAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1702192463592!5m2!1svi!2s" width="100%" height="600px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
@endsection


@section('js')
   
@endsection