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
		        <th>Topik</th>
		        <th>Pengaju</th>
		        <th>Pembimbing</th>
		        <th></th>
		      </tr>
		    </thead>
		    <tbody>
			
			
		      @foreach ($topik as $topik)
			  
			     <tr>
					<td>{{$topik->topik_ta}}</td>
					
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
					<td><input type="radio" name="pilih-topik"></td>
				</tr>
			  
			   @endforeach
			  
			  
		    </tbody>
			
			
			
			
  		</table>
		
		
  		<p><i>*centang salah satu</i></p>
		<center><button class="btn btn-primary">Ajukan Topik</button></center>
		<br/>
		<center><button class="btn btn-primary">Ajukan Topik Baru</button></center>
		
	</form>
</div>
<div class="col-md-1">
</div>
@endsection