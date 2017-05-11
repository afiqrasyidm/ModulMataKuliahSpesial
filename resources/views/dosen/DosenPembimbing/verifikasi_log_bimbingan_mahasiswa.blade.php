

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
                  <center><h1 class="header-title">Daftar Log Bimbingan Mahasiswa {{$bimbingan->first()->nama_mahasiswa}}</h1><br></center>
                </div><!-- /.box-header -->
                <div class="box-body">



				
		<table class="table table-striped">
		    <thead>
		      <tr>

		        <th>Waktu Awal Bimbingan </th>
				<th>Waktu Akhir Bimbingan </th>
				<th>Detail</th>
				
				
				</tr>
		    </thead>
		    <tbody>						
										
										  @foreach ($bimbingan as $data)
									<tr>
									
										@if($data->status_bimbingan == 0)
										  <td>
											
											  {{$data->waktu_mulai}} 
												
									
										  </td>
										  
										  <td>
												{{$data->waktu_akhir}}
										  </td>
										  
										  <td>
												<a  href="/dosen/pembimbing/verifikasi-log-bimbingan-mahasiswa-detail/{{$data->id_log_bimbingan}}">
												<button  class="btn btn-primary" >	
														Detail
												</button>
												</a>
										  </td>
										   

									
										@endif
									</tr>
											
										 @endforeach

			
				</tbody>




			 </table>
         </div>
              </div>
              </div>
            </div>

</section>

@endsection

