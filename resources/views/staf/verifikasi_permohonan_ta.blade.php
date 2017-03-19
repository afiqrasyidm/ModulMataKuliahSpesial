@extends('layouts.layout_staf')

@section('title','Verifikasi Permohonan TA')

@section('mainContent')

<div class="col-md-1">
</div>
<div class="col-md-10">
	<center><h2>Verifikasi Pengajuan TA</h2></center>
	<br/>
		<div class="box">
            <div class="box-header with-border">
                </div>
                <div class="box-body">
                  	<table class="table table-bordered">
                    <tr>a
                      	<th>Nama Mahasisw</th>
                      	<th>NPM</th>
                        <th>ID Permohonan</th>
                        <th></th>
                    </tr>
                    <tr>
                      <td>Mahasiswa XYZ</td>
                      <td>1406543216</td>
                      <td>00911</td>
                      <td><button class="btn btn-block btn-primary">Verified</button></td>
                      
                    </tr>
                     <tr>
                      <td>Mahasiswa ABC</td>
                      <td>1406548923</td>
                      <td>00912</td>
                      <td><button class="btn btn-block btn-primary">Verified</button></td>
                      
                    </tr>
                 	</table>
                </div>


            
        </div>
	
</div>
<div class="col-md-1">
</div>
@endsection