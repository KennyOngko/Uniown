<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="bootstrap-datepicker.min.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script> -->

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>


    <!-- <script src="bootstrap-datepicker.min.js"></script> -->
    <title>Hospital Detail</title>
    
</head>

<body style="background-color: white">
@extends('layouts.app')

@section ('content')
    <div class="row justify-content-center">
    <div class="card mb-3" style="max-width: 1800px;">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="{{asset($Hospital->image)}}" alt="..." style="width: 200px">
        <div>
        <img src="/asset/question.png" alt="..." style="width: 50px; position: absolute; top: 205px; left: -25px ">
        <p style="color: gray; font-family: Montserrat; width: 400px; text-align: justify "><b>Informasi Lainnya</b><br>
            <b>Hasil Tes:</b> 1 Hari (di aplikasi - cek di riwayat buat janji, melalui history)<br>

            <b>Metode Pembayaran:</b> Melalui pihak rumah sakit<br>

            <b>Metode Pengambilan Tes:</b> Tes diambil melalui saluran pernapasan dari dua lubang hidung.<br>

            <b>Tempat Pengambilan Tes:</b> Di rumah sakit<br>

            <b>Deskripsi:</b> Pemeriksaan rapid/ swab test ini menggunakan sampel yang berasal dari saluran pernapasan untuk mendeteksi keberadaan antigen COVID-19.<br>
        </p>
        </div>
        </div>
        <div class="col-md-8">
        <div class="card-body" style="width:900px; padding-left: 200px; font-family: Montserrat font-style: normal; font-weight: normal;">
            <h2 class="card-title" style="font-family: Sanchez; font-style: normal; font-weight: normal;"><b>{{$Hospital->name}}</b></h2>
            <p class="card-text" style="color: gray; font-size: 14pt">{{$Hospital->test_type}}</p>
            <p class="card-text" style="color: gray; font-size: 12pt; margin-top: -15px">{{$Hospital->city}}, {{$Hospital->location}}</p>
            <p class="card-text" style="color: #337093; font-size: 18pt; font-weight: bold">IDR {{$Hospital->price}}</p>
            <p class="card-text">
                <form method="post" action="/hospital/detail/{{$Hospital->id}}" enctype="multipart/form-data">
                    @csrf
                   <p style="color: gray; font-size: 14pt; font-weight: bold"> Select Date</p> 
                    <select class="form-control" id="date" name="date" style="width: 500px">
                    <option value="">Choose...</option>
                        <option value="Jumat, 8 Januari 2021 - Pukul 12:00">Jumat, 8 Januari 2021 - Pukul 12:00</option>
                        <option value="Jumat, 8 Januari 2021 - Pukul 15:00">Jumat, 8 Januari 2021 - Pukul 15:00</option>
                        <option value="Jumat, 8 Januari 2021 - Pukul 18:00">Jumat, 8 Januari 2021 - Pukul 18:00</option>
                        <option value="Sabtu, 9 Januari 2021 - Pukul 12:00">Sabtu, 9 Januari 2021 - Pukul 12:00</option>
                        <option value="Sabtu, 9 Januari 2021 - Pukul 15:00">Sabtu, 9 Januari 2021 - Pukul 15:00</option>
                        <option value="Sabtu, 9 Januari 2021 - Pukul 18:00">Sabtu, 9 Januari 2021 - Pukul 18:00</option>
                        <option value="Minggu, 10 Januari 2021 - Pukul 12:00">Minggu, 10 Januari 2021 - Pukul 12:00</option>
                        <option value="Minggu, 10 Januari 2021 - Pukul 15:00">Minggu, 10 Januari 2021 - Pukul 15:00</option>
                        <option value="Minggu, 10 Januari 2021 - Pukul 18:00">Minggu, 10 Januari 2021 - Pukul 18:00</option>
                    </select>
            </p>
            <p class="card-text" style="color: gray; font-size: 12pt; font-weight: bold">People
            <input type="number" name="people" required="required" style="width:20%" min="1" value="1"><br><br>
            </p>

            <button type="submit" class="btn" style="background-color: #337093; color: white; font-weight: bold">Proceed</button>
                </form>
    
        </div>
        </div>
    </div>
    </div>
    </div>


    <script type="text/javascript">
        // $('#datepicker').datetimepicker({
        //     timepicker: true,
        //     datepicker: true,
        //     format: 'dd-mm-yyyy',
        // })
        $(function(){
            $('.datetimepicker').datetimepicker();
        })
    </script>

@endsection

</body>
</html>