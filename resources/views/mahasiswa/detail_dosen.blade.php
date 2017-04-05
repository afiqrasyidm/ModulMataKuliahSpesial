@extends('layouts.layout_mahasiswa')

@section('title','Pengajuan Topik TA')

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
	            <td bgcolor="#c0c5cc">@if (isset($industri))
						{{$industri->nama_industri}}

							@else
							{{$dosen->nama_dosen}}


							@endif</td>

	        </tr>
					<tr>
					 <th bgcolor="#86b7e3">Diajukan Pada</th>
						 <td bgcolor="#c0c5cc"> {{$topik->created_at}}</td>

				 </tr>
				 <tr>
					<th bgcolor="#86b7e3">Lowongan</th>
						<td bgcolor="#c0c5cc"> 10 orang</td>

				</tr>
				 <tr>
					 <th bgcolor="#86b7e3">Pendaftar</th>
						 <td bgcolor="#c0c5cc"> 9 orang</td>

				 </tr>


	        <tr>
	          <th bgcolor="#86b7e3">Deskripsi</th>
	            <td bgcolor="#c0c5cc"> {{$topik->deskripsi}}</td>

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
