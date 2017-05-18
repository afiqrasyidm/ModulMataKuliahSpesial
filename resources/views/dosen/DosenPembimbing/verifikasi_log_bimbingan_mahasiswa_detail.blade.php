

@extends('layouts.layout_dosen_pembimbing')

@section('title','Log Bimbingan')


@section('mainContent')


<section class="content">
<div class="center-form">
<div class=".col-md-11">

<br><br>
              <!-- general form elements disabled -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <center><h1 class="header-title">Daftar Log Bimbingan Mahasiswa {{$bimbingan->nama_mahasiswa}}</h1><br></center>
                </div><!-- /.box-header -->
                <div class="box-body">



				
		<table class="table table-striped">
		    <thead>
		      <tr>

		        
				
				</tr>
		    </thead>
		    <tbody>						
										
										 

										 
									<tr> 
											<th>Waktu  Mulai Bimbingan </th>
										
										
										  <td>
										  
											{{$bimbingan->waktu_mulai}}   
												
												
												
										  </td>
									</tr>
									
										 
									<tr> 
											<th>Waktu  Selesai Bimbingan </th>
										
										
										  <td>
										  
											{{$bimbingan->waktu_selesai}} 
											
												
												
												
										  </td>
									</tr>
									
									
									
									<tr>
											<th> Isi Log Bimbingan </th>
											
											<td>
												{{$bimbingan->keterangan}}
											</td>
									</tr>
									
									<tr>
										
									<th>Verifikasi:</th>
				
				
										  <td>
								
								
													 <a href="{{ route('dosen/pembimbing/setujui-log/', $bimbingan->id_log_bimbingan ) }}">
      
												
								
												<button  class="btn btn-primary" >	
														Verifikasi
												</button>
												</a>
										  </td>
								

									
										
									</tr>
											
										

			
				</tbody>




			 </table>
         </div>
              </div>
              </div>
            </div>

</section>

@endsection

