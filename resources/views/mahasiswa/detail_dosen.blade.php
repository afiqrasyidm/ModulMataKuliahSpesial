@extends('layouts.layout_mahasiswa')

@section('title','Pengajuan Pembimbing TA')

@section('mainContent')
<div class="col-md-1">
</div>
<div class="col-md-10">

	<br>
<br><br>
        <section class="content">

						<h4><b>{{$dosenpembimbing->nama_dosen}}</b></h4>

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
						<td bgcolor="#dddddd"> Publikasi: <br>
		                	Computer Networks, co-authored with David J. Wetherall (1st ed. 1981, 2nd ed. 1994, 3rd ed. 1996, 4th ed. 2002, 5th ed. 2010)
							<br>Operating Systems: Design and Implementation, co-authored with Albert Woodhull
							<br>Modern Operating Systems
							<br>Distributed Operating Systems
							<br>Structured Computer Organization
							<br>Distributed Systems: Principles and Paradigms, co-authored with Maarten van Steen
		                </td>

				</tr>



	    </tbody>
	</table>

		<center>
			
			
				<a href="{{ route('mahasiswa/pengajuan-dosbing/', $dosenpembimbing->id_dosen) }}">

						
			<button class="btn btn-primary">Pilih Sebagai Pembimbing</button>
		</a>
		</center>

        </section><!-- /.content -->

</div>
<div class="col-md-1">
</div>
@endsection
