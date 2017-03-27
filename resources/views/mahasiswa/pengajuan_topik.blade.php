@extends('layouts.layout_mahasiswa')

@section('title','Pengajuan Topik TA')

@section('mainContent')
<div class="col-md-1">
</div>
<div class="col-md-10">
@if(isset($topik))

	<h1>Daftar Topik TA</h1>
	</br>
	<div align="right">
		<a href="{{ route('mahasiswa/pengajuan-topik-ta') }}">
			<button  class="btn btn-primary">Ajukan Topik Baru</button>
		</a>
	</div>

	<br>
	<br>

	<form>
		<table class="table table-striped">
		    <thead>
		      <tr>
		        <th>Topik</th>
		        <th>Pengaju</th>
		        <th>Pembimbing</th>
		        <th></th>
		      </tr>
		    </thead>
		    <tbody>


		      @foreach ($topik as $topik)

			     <tr>
					<td>
						<a href="/mahasiswa/pengajuan-topik/detail/{{$topik->id_topik}}">
							{{$topik->topik_ta}}
						</a>
					</td>
					<td>
						@if(is_null($topik->nama_dosen))
							{{$topik->nama_industri}}

						@else
							{{$topik->nama_dosen}}

						@endif
					</td>

					<td>
						@if(is_null($topik->nama_dosen))

						@else
							{{$topik->nama_dosen}}

						@endif

						</td>
				</tr>

			   @endforeach


		    </tbody>




  		</table>


  		<p><i>*pilih salah satu</i></p>

		<br/>

	</form>


@else
	<br>
<br>

					<section class="content">

							<h3><center>Bukti Pengajuan Topik</h4>

								<br>
							<h4><b>{{$topik_yang_diambil->topik_ta}}</b></h4>

							<table class="table table-bordered">

							<tbody>
								<tr>
								<th width ="20%" bgcolor="#86b7e3">Pengaju</th>
								<td bgcolor="#c0c5cc">@if (isset($industri))
								{{$industri->nama_industri}}

								@else
								{{$dosen->nama_dosen}}


								@endif</td>

								</tr>

								<tr>
								<th bgcolor="#86b7e3">Urutan ke</th>
								<td bgcolor="#c0c5cc"> 9 orang</td>

								</tr>

								<tr>
								<th bgcolor="#86b7e3">Deskripsi</th>
								<td bgcolor="#c0c5cc"> {{$topik_yang_diambil->deskripsi}}</td>

								</tr>

							</tbody>
							</table>
		<center>
				<a href="/mahasiswa/ubah-pengajuan-topik-ta/{{$topik_yang_diambil->id_topik}}/{{$tugas_akhir->id_tugas_akhir}}"   >
					<button  class="btn btn-primary">Ubah Topik</button>
				</a>
			</div>


        </section><!-- /.content -->
@endif
</div>
<div class="col-md-1">
</div>
@endsection
