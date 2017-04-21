

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
                  <center><h1 class="header-title">Daftar Dokumen TA</h1><br></center>
                </div><!-- /.box-header -->
                <div class="box-body">

				
		<table class="table table-striped">
		    <thead>
		      <tr>
		        <th>Mahasiswa</th>
		        <th>Judul </th>
				<th>Topik</th>
				<th>Download</th>
				
				
				</tr>
		    </thead>
			
			
		    <tbody>
										  @foreach ($tugas_akhir as $tugas_akhir)

									<tr>
										  <td>
											
											  {{$tugas_akhir->nama_mahasiswa}}
											
										  </td>
										   

										  <td>
											            @if(is_null($tugas_akhir->judul_ta))
															<span style="color:red;">Judul Belum Dibuat</span>

														@else
															{{$tugas_akhir->judul_ta}}
														@endif
										  



											</td>
											<td>
											{{$tugas_akhir->topik_ta}}


											</td>
										
											<td>
												@if( !is_null($tugas_akhir->id_hasil_ta))
													 <a href="/files/{{$tugas_akhir->dokumen}}" >	Download </a>
												@else

												@endif											
												
												</td>
										
										<td>
										</td>
									</tr>
											
										 @endforeach

			
				</tbody>




			 </table>
<!--   end -->
         </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
            </div><!--/.col (right) -->

</section>

@endsection

