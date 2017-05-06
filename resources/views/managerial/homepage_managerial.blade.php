

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
						  <h3>53<sup style="font-size: 20px">%</sup></h3>
						  <p>Jumlah dana untuk</p>
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
						  <h3>53<sup style="font-size: 20px">%</sup></h3>
						  <p>Jumlah dosen pembimbing untuk</p>
							  <p>Tugas Akhir</p>
						</div>
						<div class="icon">
						 <i class="ion ion-person-add"></i>
						</div>
					  </div>
				 </div>
					<div class="col-lg-4 col-xs-6">
						<div class="small-box bg-yellow">
							<div class="inner">
							  <h3>53<sup style="font-size: 20px">%</sup></h3>
							  <p>Jumlah dosen pembimbing untuk</p>
								  <p>Tugas Akhir</p>
							</div>
							<div class="icon">
							  <i class="ion ion-cash"></i>
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
					<div class ="row" >
						<div class = "col-md-6">
							
							
							 <div class="box box-info">
							   <div class="box-header with-border">
								  <h3 class="box-title">Line Chart Jumlah Tugas Akhir Per Tahun</h3>
								  <div class="box-tools pull-right">
								  </div>
							   </div>
							   <div class="box-body chart-responsive">
								  <div class="chart" id="line-chart" style="height: 300px;"></div>
							   </div>
							   <!-- /.box-body -->
							</div>
						</div>
						
						<div class = "col-md-6">
						
							
							
							<div class="box box-warning">
							   <div class="box-header with-border">
								  <h3 class="box-title">Line Chart Jumlah Rekomendasi Topik Per Tahun</h3>
								  <div class="box-tools pull-right">
								  </div>
							   </div>
							   <div class="box-body chart-responsive">
								  <div class="chart" id="line-chart-topik" style="height: 300px;"></div>
							   </div>
							   <!-- /.box-body -->
							</div>
							
						</div>
                        <!-- /.box -->
                    
					 
                     <!-- /.col (RIGHT) -->
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
									  <h3 class="box-title">Bar Chart Jumlah Tugas Akhir Per Fakultas Tahun </h3>
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
							<br>
							<br>
					<div class ="row">
						<div class="box box-info">
							   <div class="box-header with-border">
								  <h3 class="box-title">Line Chart Jumlah Tugas Akhir Terpublikasi</h3>
								  <div class="box-tools pull-right">
								  </div>
							   </div>
							   <div class="box-body chart-responsive">
								  <div class="chart" id="line-chart-publikasi" style="height: 300px;"></div>
							   </div>
							   <!-- /.box-body -->
							</div>
					
					</div>
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
<script>
   $(function () {
     "use strict";
	 // LINE CHART jumlah TA
     var line = new Morris.Line({
       element: 'line-chart',
		  
		  
		  data: [
			{ year: '2013', value: 20 },
			{ year: '2014', value: 10 },
			{ year: '2015', value: 5 },
			{ year: '2016', value: 5 },
			{ year: '2017', value: 20 }
		  ],
		  // The name of the data record attribute that contains x-values.
		  xkey: 'year',
		  // A list of names of data record attributes that contain y-values.
		  ykeys: ['value'],
		  // Labels for the ykeys -- will be displayed when you hover over the
		  // chart.
		  labels: ['Jumlah Tugas Akhir'],
		   hideHover: 'auto'
     });
	  //Line Chart Rekomendasi Topik
	  var line = new Morris.Line({
		element: 'line-chart-topik',
		  
		  
		  data: [
			{ year: '2013', value: 20 },
			{ year: '2014', value: 10 },
			{ year: '2015', value: 5 },
			{ year: '2016', value: 5 },
			{ year: '2017', value: 20 }
		  ],
		   lineColors: ['#ff9900'],
		  // The name of the data record attribute that contains x-values.
		  xkey: 'year',
		  // A list of names of data record attributes that contain y-values.
		  ykeys: ['value'],
		  // Labels for the ykeys -- will be displayed when you hover over the
		  // chart.
		  labels: ['Jumlah Rekomendasi Topik'],
		   hideHover: 'auto'
     });
   
	 //Line Chart Publikasi
	var line = new Morris.Line({
		element: 'line-chart-publikasi',
		  
		  
		  data: [
			{ year: '2013', value: 20 },
			{ year: '2014', value: 10 },
			{ year: '2015', value: 5 },
			{ year: '2016', value: 5 },
			{ year: '2017', value: 20 }
		  ],
		  // The name of the data record attribute that contains x-values.
		   lineColors: ['blue'],
		  xkey: 'year',
		  // A list of names of data record attributes that contain y-values.
		  ykeys: ['value'],
		  // Labels for the ykeys -- will be displayed when you hover over the
		  // chart.
		  labels: ['Jumlah Rekomendasi Topik'],
		   hideHover: 'auto'
     });
	 
	 
	 
     //BAR CHART
     var bar = new Morris.Bar({
       element: 'bar-chart',
       resize: true,
       data: [
			{y: 'FK', a: 100},
            {y: 'FKG', a: 75},
            {y: 'FF', a: 50},
            {y: 'FKM', a: 75},
            {y: 'FIK', a: 50},
            {y: 'FMIPA', a: 75},
			{y: 'FT', a: 75},
			{y: 'Fasil', a: 75},
			{y: 'FH', a: 75},
			{y: 'FEB', a: 75},
			{y: 'FIB', a: 75},
			{y: 'Fpsi', a: 75},
			{y: 'FISIP', a: 75},
			{y: 'FIA', a: 100}
       ],
       barColors: ['#00a65a', '#f56954'],
       xkey: 'y',
       ykeys: ['a'],
       labels: ['Jumlah Ta'],
       hideHover: 'auto'
     });
   });
</script>
@endsection

