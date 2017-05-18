@extends('layouts.layout_dosen')

@section('title','Verifikasi Pengajuan Topik TA')

@section('mainContent')
<section class="content">
<div class="center-form">
<div class=".col-md-11">

<br><br>

<?php
if (isset($_SESSION["setuju_topik"])) {
	if($_SESSION["setuju_topik"]){
		
			echo"
			<div class='alert alert-success'>
                    
                   <i class='icon fa fa-check'></i>Pengambilan Topik Disetujui
                   
              </div>
			";
			
			
	}
	else{
		
			echo"
			<div class='alert alert-success'>
                    
                   <i class='icon fa fa-check'></i>Pengambilan Topik Tidak Disetujui
                   
              </div>
			";
			
			
		
	}
			unset($_SESSION["setuju_topik"]);
}
?>
@if(!isset($topik_belum_diambil))
 <!-- general form elements disabled -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <center><h1 class="header-title">Daftar Pendaftar Topik {{$topik->first()->topik_ta}}</h1><br></center>
                  </div><!-- /.box-header -->
				
                <div class="box-body">
                 
              

					
									<table class="table table-striped">
										<thead>
										  <tr>
											<th>Nama Mahasiswa</th>
											
											<th>IPK </th>
											<th> </th>
											<th  >Status </th>
											</tr>
										</thead>
										<tbody>

								
									  @foreach ($topik as $topiks)

									   <tr>
									  <td>
										
										  {{$topiks->nama_mahasiswa}}
										
									  </td>
									   

									  <td>
									  {{$topiks->IPK}}


										</td>
										<td>
										
										 
									  </td>
									
									<td> 
										@if($topiks->status_tugas_akhir == 3)
										<a href="{{ route('dosen/setuju-topik/', 
											
											array( 'id_tugas_akhir'=> $topiks->id_tugas_akhir,
											'is_disetujui' => 1, 'id_topik' =>$topiks->id_topik
											
											)) 
											
											}}"
									
									
									
											<button  class="btn btn-primary">Setuju</button>
										</a>
										<a href="{{ route('dosen/setuju-topik/', 
											
											array( 'id_tugas_akhir'=> $topiks->id_tugas_akhir,
											'is_disetujui' => 2, 'id_topik' =>$topiks->id_topik
											
											)) 
											
											}}">
											<button  class="btn btn-danger">Tidak Setuju</button>
										</a>
										@elseif($topiks->status_tugas_akhir == 4)
											<p style="color:red;"><b>Tidak Setujui</b></p>
										@else
											<p><b>Disetujui</b></p>
										@endif
									</td>
								</tr>
										
									 @endforeach


									</tbody>




								  </table>


								<br/>
								<p>Maksimal Pendaftar : {{$topik->first()->maksimal_pendaftar}} orang</p>
								<p>Jumlah Pendaftar Sampai Saat Ini : {{$topik->count()}} orang</p>
									
																
							
								<p>Latar Belakang Topik :</p>
								
								<p>{{$topik->first()->deskripsi}}</p>

				<center>
				@if($topik->first()->sudah_diambil == 0)
				<a href="{{ route('dosen/hentikan-topik/', $topik->first()->id_topik ) }}">
						<button class="btn btn-danger">Stop Penawaran Topik ini</button>
				</a>
				@else
					<div class="alert alert-danger">
					<i class="fa fa-warning"></i><b> Penawaran topik ini telah diberhentikan</b>
					</div>
				@endif
				</center>
											
					

					
				</div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
</div><!--/.col (right) -->


</section>

@else		

			

			
              <div class="box box-primary">
                <div class="box-header with-border">
                  <center><h1 class="header-title">Daftar Pendaftar Topik {{$topik_belum_diambil->first()->topik_ta}}</h1><br></center>
				
				   </div><!-- /.box-header -->
				
			
			
                <div class="box-body">
                 
              
								<p>Maksimal Pendaftar : {{$topik_belum_diambil->first()->maksimal_pendaftar}} orang</p>
								<p>Jumlah Pendaftar Sampai Saat Ini : 0 orang</p>
									
																
							
								<p>Latar Belakang Topik :</p>
								
								<p>{{$topik_belum_diambil->first()->deskripsi}}</p>

											
					<center>
					@if($topik_belum_diambil->first()->sudah_diambil == 0)
					<a href="dosen/hentikan-topik/{{$topik_belum_diambil->first()->id_topik}}">
							<button  class="btn btn-danger">Stop Penawaran Topik ini</button>
					</a>
					@else
						<div class="alert alert-danger">
						<i class="fa fa-warning"></i>
						<b> Penawaran Topik ini telah diberhentikan</b>
						</div>
					@endif
								
					</center>
				</div><!-- /.box-body -->
              </div><!-- /.box -->
            

			
</div>
</div><!--/.col (right) -->


</section>



			
			
			
			
			
			
			
			
			
			
			
@endif			







    

@endsection
