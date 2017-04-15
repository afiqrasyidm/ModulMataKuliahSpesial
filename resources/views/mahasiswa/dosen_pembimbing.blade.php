@extends('layouts.layout_mahasiswa')

@section('title','Dosen Pembimbing TA')

@section('mainContent')
<div class="col-md-1">
</div>
<div class="col-md-10">

	<br>
<br><br>
        <section class="content">

						<h4><b>Dosen Pembimbing Ajuan</b></h4>

          <!-- Default box -->
					      <table class="table table-bordered">

	    <tbody>


	          <th width ="20%" bgcolor="#86b7e3">Nama Dosen</th>
	            <td bgcolor="#c0c5cc">
								
							{{$dosenpembimbing->nama_dosen}} </td>

	        </tr>
					<tr>
					 <th bgcolor="#86b7e3">Bidang Keahlian</th>
						 <td bgcolor="#c0c5cc"> {{$dosenpembimbing->interest}}
						 </td>

				 </tr>
				 <tr>
					<th bgcolor="#86b7e3">Pengalaman</th>
						<td bgcolor="#c0c5cc"> Lorem</td>

				</tr>



	    </tbody>
	</table>

		<center>
			<a href="/mahasiswa/pengajuan-dosbing/{{$dosenpembimbing->id_dosen}}">
			<button class="btn btn-primary">Pilih Sebagai Pembimbing</button>
		</a>
		</center>

        </section><!-- /.content -->

</div>
<div class="col-md-1">
</div>
@endsection
