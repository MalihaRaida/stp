<?php 
$layout = "";

if(Auth::user()->is_first_login == 1){
    $layout = 'layouts.first_login';
}else{
    if(Auth::user()->accesslevel == 100){
        $layout = 'layouts.superadmin';
    }elseif(Auth::user()->accesslevel == 1){
        $layout = 'layouts.instructor';
    }elseif(Auth::user()->accesslevel == 0){
        $layout = 'layouts.admin';
    }
}


?>
@extends($layout)

@section('htmlheader_title')
   
@endsection

@section('main-content')

    <div class="error-page">
        <h2 class="headline text-yellow"> 403</h2>
        <div class="error-content" style="margin-top:200px;">
            <h3><i class="fa fa-warning text-yellow"></i> Oops!.</h3>
            <p>
                You are not authorized to view this page. Meanwhile, you may 
                <a href='{{ url('/home') }}'>home</a>
            </p>
           
        </div><!-- /.error-content -->
    </div><!-- /.error-page -->
@endsection