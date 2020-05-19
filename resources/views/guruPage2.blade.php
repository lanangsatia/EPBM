<!doctype html>
<html lang="en">

<head>
    <title>Dashboard | SCB - @yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="apple-touch-icon" sizes="76x76" href="klorofil/img/logoDoang.png">
    <link rel="icon" type="image/png" sizes="96x96" href="klorofil/img/logoDoang.png">

    @section('css')
        <!-- CSS -->
        {{ Html::style('klorofil/css/bootstrap.min.css')}}
        {{ Html::style('klorofil/css/vendor/icon-sets.css')}}
        {{ Html::style('klorofil/css/main.min.css')}}
        {{ Html::style('klorofil/css/demo.css')}}

        @yield('extra-style')

        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    @show
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- SIDEBAR -->
        @include("layouts/partials/sidebar")
        <!-- END SIDEBAR -->
        <!-- MAIN -->
        <div class="main">
            <!-- NAVBAR -->
            @include('layouts/partials/header')
            <!-- END NAVBAR -->
            <!-- MAIN CONTENT -->
            <div class="main-content">
                @yield('content')

            <div class="container-fluid">
                <!-- OVERVIEW -->
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">Selamat Datang,</h3>
                        <h3 class="panel-title"><b> {{Auth::user()->nama}} </b></h3>
                    </div>
                    <div class="panel-body">
                        <div class="col">
                            <div class="col-md-3">
                                <div class="metric">
                                    <p>
                                        <span class="number"> <font color="black"> ID Guru </font> </span>
                                        <span class="title"> <font color="black"> {{ Auth::user()->id }} </font> </span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="metric">
                                    <p>
                                        <span class="number"> <font color="black">Mata Pelajaran Yang Diampu</font> </span>
                                    <span class="title"><font color="black">{{ count($matpel) }}</font> </span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="metric">
                                    <p>
                                        <span class="number"> <font color="black"> Jumlah Pertanyaan </font> </span>
                                        <span class="title"> <font color="black"> {{ count($pertanyaan) }} </font> </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-headline">
                    @for ($i = 0; $i < 1; $i++)
                    <div class="panel-heading">
                        <h3 class="panel-title">Hasil Evaluasi Untuk Mata Pelajaran:</h3>
                        <h3 class="panel-title"><b>{{$matpel[$i]}}</b></h3>
                    </div>
                        @for($j = 0; $j < count($pertanyaan); $j++)
                            <div class="panel-body">
                                <div class="col">
                                    <div class="col-md-3">
                                        <div class="metric">
                                            <p>Pertanyaan: {{ $pertanyaan[$j] }}</p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    @endfor
                </div>
            </div>


            </div>
            <!-- END MAIN CONTENT -->
            <footer>
                @include('layouts/partials/footer')
            </footer>
        </div>
        <!-- END MAIN -->
    </div>
    <!-- END WRAPPER -->

    @section('script')
    <!-- Javascript -->
        {{ Html::script('klorofil/js/jquery/jquery-2.1.0.min.js') }}
        {{ Html::script('klorofil/js/bootstrap/bootstrap.min.js') }}
        {{ Html::script('klorofil/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}
        {{ Html::script('klorofil/js/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}
        {{ Html::script('klorofil/js/plugins/chartist/chartist.min.js') }}
        {{ Html::script('klorofil/js/klorofil.min.js') }}

        @yield('extra-script')
    @show


</body>

</html>