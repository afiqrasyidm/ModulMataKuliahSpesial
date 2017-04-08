@extends('layouts.layout_dosen')

@section('title','Verifikasi Pengajuan Topik TA')

@section('mainContent')
<div class="col-md-1">
</div>
<div class="col-md-10">

	<br>
<br><br>


 <!-- general form elements disabled -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <center><h1 class="header-title">Daftar Pendaftar Topik {{$topik->first()->topik_ta}}</h1><br></center>
				<br>
				@if($topik->first()->sudah_diambil == 0)
				<a href="/dosen/hentikan-topik/{{$topik->first()->id_topik}}">
						<button  class="btn btn-primary">Stop Penawaran Topik ini</button>
				</a>
				@else
					<b>
					Penawaran topik ini telah 
					
					<span style="color:red;">diberhentikan</span>
					</b>
				@endif
				<br>
				<br>
				
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
										@if($topiks->status_tugas_akhir == -2)
										<a href="/dosen/setuju-topik/{{$topiks->id_tugas_akhir}}/1/{{$topiks->id_topik}}">
											<button  class="btn btn-primary">Setuju</button>
										</a>
										<a href="/dosen/setuju-topik/{{$topiks->id_tugas_akhir}}/2/{{$topiks->id_topik}}">
											<button  class="btn btn-danger">Tidak Setuju</button>
										</a>
										@elseif($topiks->status_tugas_akhir == -1)
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


								
											
					

					
				</div><!-- /.box-body -->
              </div><!-- /.box -->
            

		

			















    

        </section><!-- /.content -->

</div>
<div class="col-md-1">
</div>
@endsection
