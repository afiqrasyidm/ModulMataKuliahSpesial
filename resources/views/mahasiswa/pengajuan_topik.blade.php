@extends('layouts.layout_mahasiswa')

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
		      <tr>
		        <td>Sentiment Analysis</td>
		        <td>Prof. Zaenal</td>
		        <td>Prof. Zaenal</td>
		        <td><input type="radio" name="pilih-topik"></td>
		      </tr>
		      <tr>
		        <td>Machine Learning</td>
		        <td>Microsoft Indonesia</td>
		        <td></td>
		        <td><input type="radio" name="pilih-topik"></td>
		      </tr>
		      <tr>
		        <td>E-Goverment</td>
		        <td>Harry Budi</td>
		        <td>Harry Budi</td>
		        <td><input type="radio" name="pilih-topik"></td>
		      </tr>
		      <tr>
		        <td>Sentiment Analysis</td>
		        <td>Prof. Zaenal</td>
		        <td>Prof. Zaenal</td>
		        <td><input type="radio" name="pilih-topik"></td>
		      </tr>
		      <tr>
		        <td>Machine Learning</td>
		        <td>Microsoft Indonesia</td>
		        <td></td>
		        <td><input type="radio" name="pilih-topik"></td>
		      </tr>
		      <tr>
		        <td>E-Goverment</td>
		        <td>Harry Budi</td>
		        <td>Harry Budi</td>
		        <td><input type="radio" name="pilih-topik"></td>
		      </tr>
		      <tr>
		        <td>Sentiment Analysis</td>
		        <td>Prof. Zaenal</td>
		        <td>Prof. Zaenal</td>
		        <td><input type="radio" name="pilih-topik"></td>
		      </tr>
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