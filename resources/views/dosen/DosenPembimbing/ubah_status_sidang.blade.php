@extends('layouts.layout_mahasiswa')

@section('title','Pengajuan Topik TA')

@section('mainContent')
<div class="col-md-1">
</div>
<div class="col-md-10">


	<h1>Daftar Topik TA</h1>
	</br>


	<form>
		<table class="table table-striped">
		    <thead>
		      <tr>
		        <th>Mahasiswa</th>
		  
		        <th>Judul TA</th>
		        <th></th>
		      </tr>
		    </thead>
		   <!--  <tbody>


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




  		</table> -->
		<br/>

	</form>


</div>
<div class="col-md-1">
</div>
@endsection
