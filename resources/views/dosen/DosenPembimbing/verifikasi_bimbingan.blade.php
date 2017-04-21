

@extends('layouts.layout_dosen_pembimbing')

@section('title','Lihat Hasil TA')


@section('mainContent')


<section class="content">
<div class="center-form">
<div class=".col-md-11">

<br><br>
              <!-- general form elements disabled -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <center><h1 class="header-title">Daftar Pengajuan Bimbingan</h1><br></center>
                </div><!-- /.box-header -->
                <div class="box-body">



				
		<table class="table table-striped">
		    <thead>
		      <tr>
		        <th>Mahasiswa</th>
		        <th>Judul </th>
				<th>Topik</th>
				<th>Status</th>
				<th>Verifikasi Status</th>
				
				
				</tr>
		    </thead>
		    <tbody>
										  @foreach ($bimbingan as $data)
									<tr>
										  <td>
											
											  {{$data->nama_mahasiswa}}
											
										  </td>
										   

										  <td>
											{{$data->judul_ta}}
											</td>
											<td>
											{{$data->topik_ta}}

											</td>
											<td>
												@if($data->status_dosen_pembimbing == 1)
													Belum diverifikasi
												@elseif($data->status_dosen_pembimbing == 2)
													Sudah diterima
												@else
													Sudah ditolak
												@endif
											</td>
										
										<td>
										 <a href="{{ url('dosen/pembimbing/verifikasi-bimbingan/set/3/'.$data->id) }}" type="button" class="btn btn-danger">Tolak</a>
										 <a href="{{ url('dosen/pembimbing/verifikasi-bimbingan/set/2/'.$data->id) }}"type="button" class="btn btn-primary">Terima</a>
										</td>
									</tr>
											
										 @endforeach

										  @foreach ($dari_dosen as $data)
									<tr>
										  <td>
											
											  {{$data->nama_mahasiswa}}
											
										  </td>
										   

										  <td>
											{{$data->judul_ta}}
											</td>
											<td>
											{{$data->topik_ta}}

											</td>
											<td>
												Sudah diterima
											</td>
										
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

