@extends('layouts.layout_mahasiswa')

@section('title','Pengajuan Pembimbing TA')

@section('mainContent')
<div class="col-md-1">
</div>
<div class="col-md-10">

	<br>
<br><br>
        <section class="content">

						<h4><b>{{$topik->topik_ta}}</b></h4>

          <!-- Default box -->
					      <table class="table table-bordered">

	    <tbody>


	          <th width ="20%" bgcolor="#86b7e3">Pengaju</th>
	            <td bgcolor="#dddddd">@if (isset($industri))
						Industri :{{$industri->nama_industri}}

							@else
							Dosen :{{$dosen->nama_dosen}}


							@endif</td>

	        </tr>
					<tr>
					 <th bgcolor="#86b7e3">Diajukan Pada</th>
						 <td bgcolor="#dddddd"> {{$topik->created_at}}</td>

				 </tr>
				<tr>
					<th bgcolor="#86b7e3">Maksimal Pendaftar</th>
					<td bgcolor="#dddddd">{{$topik->maksimal_pendaftar}} orang</td>

                </tr>
				 <tr>
					 <th bgcolor="#86b7e3">Jumlah Pendaftar Sampai Saat Ini</th>
						 <td bgcolor="#dddddd"> 
													{{$jumlah_pengambil_topik}} orang
											
							 </td>

				 </tr>


	        <tr>
	          <th bgcolor="#86b7e3">Deskripsi</th>
	            <td bgcolor="#dddddd"> {{$topik->deskripsi}}</td>

	        </tr>




	    </tbody>
	</table>

		<center>
			<a href="/mahasiswa/pengajuan-topik-ta-dosen-industri/{{$topik->id_topik}}">
				<button class="btn btn-primary">Ambil Topik Ini</button>
			</a>
		</center>

        </section><!-- /.content -->

</div>
<div class="col-md-1">
</div>
@endsection
