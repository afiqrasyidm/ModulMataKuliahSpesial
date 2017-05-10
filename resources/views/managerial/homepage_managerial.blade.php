


@extends('layouts.layout_managerial')
@section('title','Home Page')
@section('mainContent')
<section class="content">
   <div class="center-form">
      <div class=".col-md-11">
         <div class="box box-primary">
            <div class="box-header with-border">
               <center>
                  <b>
                     <h2 class="title-index">Dashboard Tugas Akhir</h2>
                  </b>
               </center>
            </div>
			<br>
			<br>
			
			<br>
		 <div class="box-body">
			<div class ="row">
				<div class="col-lg-4 col-xs-6">
					<div class="small-box bg-green">
						<div class="inner">
						  <h3>500 Juta<sup style="font-size: 20px"></sup></h3>
						  <p>Jumlah dana yang disediakan untuk</p>
							  <p>Tugas Akhir</p>
						</div>
						<div class="icon">
						  <i class="ion ion-cash"></i>
						</div>
					  </div>
				 </div>
				 <div class="col-lg-4 col-xs-6">
					<div class="small-box bg-aqua">
						<div class="inner">
						  <h3>{{$jumlah_dosen}} orang <sup style="font-size: 20px"></sup></h3>
						  <p> Dosen pembimbing yang </p>
							  <p>berkompeten </p>
						</div>
						<div class="icon">
						 <i class="ion ion-person-add"></i>
						</div>
					  </div>
				 </div>
					<div class="col-lg-4 col-xs-6">
						<div class="small-box bg-yellow">
							<div class="inner">
							  <h3>{{$jumlah_industri}} Perusahaan<sup style="font-size: 20px"></sup></h3>
							  <p> Industri yang berpartisipasi</p>
								  <p> untuk Tugas Akhir</p>
							</div>
							<div class="icon">
							  <i class="ion ion-briefcase"></i>
							</div>
						  </div>
					 </div>

				 
			</div> 
            <!-- /.box-header -->
           
               <center>
               </center>
               <!-- Content Wrapper. Contains page content -->
               <!-- Main content -->
               <section class="content">
                  <br>
				  <br>
				  
				  <div class ="row">
						<div class="box box-info">
							   <div class="box-header with-border">
								  <h3 class="box-title">Line Chart Jumlah Tugas Akhir dan TA Terpublikasi</h3>
								  <div class="box-tools pull-right">
								  </div>
							   </div>
							   <div class="box-body chart-responsive">
								  <div class="chart" id="line-chart-publikasi" style="height: 300px;"></div>
							   </div>
							   <!-- /.box-body -->
							</div>
					
					</div>
				  
					
					
					<div class="row">
					<br>
							<br>
							<br>
							<div>
								<!-- /.box -->
								<!-- BAR CHART -->
								<div class="box box-success">
								   <div class="box-header with-border">
									  <h3 class="box-title">Bar Chart Jumlah Tugas Akhir Per Fakultas Tahun {{$tahun}} </h3>
									  <div class="box-tools pull-right">
									  </div>
								   </div>
								   <div class="box-body chart-responsive">
									  <div class="chart" id="bar-chart" style="height: 300px;"></div>
								   </div>
								   <!-- /.box-body -->
								</div>
							</div>
					
					</div>
					<br>
					
					
					
					<div class = "row">
					
						<div class="box box-danger">
							<div class="box-header with-border">
							  <h3 class="box-title"> Chart Perbandingan Mahasiswa VS Jumlah TA tahun {{$tahun}}</h3>
							  <div class="box-tools pull-right">
								<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
								<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
							  </div>
							</div>
							<div class="box-body chart-responsive">
							  <div class="chart" id="sales-chart" style="height: 300px; position: relative;"></div>
							</div><!-- /.box-body -->
						  </div><!-- /.box -->
						
					<div>
					
					<br>
							<br>
							<br>
					
                  <!-- /.row -->
               </section>
               <!-- /.content -->
               <!-- Add the sidebar's background. This div must be placed
                  immediately after the control sidebar -->
            </div>
            <!-- ./wrapper -->
         </div>
      </div>
      <!-- /.box-body -->
   </div>
   <!-- /.box -->
</section>

<input type="text" id="ta_pertahun" value="{{$ta_pertahun}}" hidden  />

<input type="text" id="ta_perfakulas" value="{{$ta_perfakulas}}" hidden  />
<input type="text" id="tahun" value="{{$tahun}}" hidden  />

<input type="text" id="jumlah_mahasiswa" value="{{$jumlah_mahasiswa}}" hidden  />

<script>
// Asumning you are using JQuery



</script>



<script>
   $(function () {
     "use strict";
	 // LINE CHART jumlah TA

	//ambil tahun
	var tahun = document.getElementById('tahun').value;
	var tahun = JSON.parse(tahun);
	
	//console.log(tahun);

	//Perhitungan Jumlah TA dan Publikasi
	var ta_perTahun = document.getElementById('ta_pertahun').value;
	var ta_perTahun = JSON.parse(ta_perTahun);
	
	var jumlahTAperTahun = [0,0,0,0,0];
	
	var jumlahTAperTahunTerpublikasi = [0,0,0,0,0];
	
	for(var i = 0 ; i < jumlahTAperTahun.length ; i++){
			for(var ii = 0 ; ii < ta_perTahun.length ; ii++ ){
					//dimulai dari tahun paling tua
					if((tahun-i).toString() ==  ta_perTahun[ii].created_at.substring( 0, 4)) {
						jumlahTAperTahun[i]++;
					}
				}
	}
	
	for(var i = 0 ; i < jumlahTAperTahunTerpublikasi.length ; i++){
			for(var ii = 0 ; ii < ta_perTahun.length ; ii++ ){
					//dimulai dari tahun paling tua
					if((tahun-i).toString() ==  ta_perTahun[ii].created_at.substring( 0, 4)
							&& ta_perTahun[ii].is_publish == 1
					
					) {
						jumlahTAperTahunTerpublikasi[i]++;
					}
				}
	}
	
	 //Line Chart Jumlah TA dan Publikasi
	var line = new Morris.Line({
		element: 'line-chart-publikasi',
		  
		  
		  data: [
			{ year:(tahun-4).toString() , value: jumlahTAperTahun[4], value1: jumlahTAperTahunTerpublikasi[4] },
			{ year: (tahun-3).toString(), value: jumlahTAperTahun[3], value1: jumlahTAperTahunTerpublikasi[3] },
			{ year: (tahun-2).toString(), value: jumlahTAperTahun[2],value1: jumlahTAperTahunTerpublikasi[2] },
			{ year:(tahun-1).toString() , value: jumlahTAperTahun[1], value1: jumlahTAperTahunTerpublikasi[1] },
			{ year: tahun.toString(), value: jumlahTAperTahun[0], value1: jumlahTAperTahunTerpublikasi[0] }
		  ],
		  // The name of the data record attribute that contains x-values.
		   lineColors: ['red'],
		  xkey: 'year',
		  // A list of names of data record attributes that contain y-values.
		  ykeys: ['value', 'value1'],
		  // Labels for the ykeys -- will be displayed when you hover over the
		  // chart.
		  labels: ['Jumlah TA', 'Jumlah TA terpublikasi'],
		   hideHover: 'auto'
     });
	 

	 // BAR CHART PERHITUNGAN
	var ta_perfakulas = document.getElementById('ta_perfakulas').value;
	var ta_perfakulas = JSON.parse(ta_perfakulas);
 
	var jumlahTAPerFakultas = [0,0,0,0,0,0,0,0,0,0,0,0,0,0];
	
	for(var i = 1 ; i <= jumlahTAPerFakultas.length ; i++  ){
		for (var ii = 0 ; ii < ta_perfakulas.length ; ii++ ){
				if(ta_perfakulas[ii].id_fakultas == i){
					jumlahTAPerFakultas[i-1]++;
				}
			}
		}
	
	
	 //BAR CHART VIEW
     var bar = new Morris.Bar({
       element: 'bar-chart',
       resize: true,
       data: [
			{y: 'Fasil', a: jumlahTAPerFakultas[0]},
			{y: 'FH', a: jumlahTAPerFakultas[1]},
			{y: 'FK', a: jumlahTAPerFakultas[2]},
            {y: 'FKG', a: jumlahTAPerFakultas[3]},
            {y: 'FF', a: jumlahTAPerFakultas[4]},
            {y: 'FKM', a: jumlahTAPerFakultas[5]},
            {y: 'FIK', a: jumlahTAPerFakultas[6]},
            {y: 'FMIPA', a: jumlahTAPerFakultas[7]},
			{y: 'FT', a: jumlahTAPerFakultas[8]},
			{y: 'FEB', a: jumlahTAPerFakultas[9]},
			{y: 'FIB', a: jumlahTAPerFakultas[10]},
			{y: 'Fpsi', a: jumlahTAPerFakultas[11]},
			{y: 'FISIP', a: jumlahTAPerFakultas[12]},
			{y: 'FIA', a: jumlahTAPerFakultas[13]}
       ],
       barColors: ['#00a65a', '#f56954'],
       xkey: 'y',
       ykeys: ['a'],
       labels: ['Jumlah Ta'],
       hideHover: 'auto'
     });
	 
	 //Perhitungan Perbandingan Ta Vs mahasiswa
			
		var jumlah_mahasiswa = document.getElementById('jumlah_mahasiswa').value;
		var jumlah_mahasiswa = JSON.parse(jumlah_mahasiswa);
		
		var ta_jumlah_mahasiswa =  ta_perfakulas.length;
		
		
		
		
	  //Perbandingan TA vs Mahasiswa CHART
        var donut = new Morris.Donut({
          element: 'sales-chart',
          resize: true,
          colors: ["#3c8dbc", "#f56954", "#00a65a"],
          data: [
            {label: "Perentase Mahasiswa mengambil TA", value: parseInt((ta_jumlah_mahasiswa/jumlah_mahasiswa*100))},
            {label: "Persentase Mahasiswa Non TA", value: ( parseInt((jumlah_mahasiswa-ta_jumlah_mahasiswa)/jumlah_mahasiswa*100))}
			],
          hideHover: 'auto'
        });
	 
	 
	 
	 
	 
	 
	 
	 
	 
   });
</script>
@endsection

