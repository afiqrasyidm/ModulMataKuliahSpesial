@extends('layouts.layout_dosen_penguji')

@section('title','Feedback Sidang')

@section('mainContent')       


<div class="col-md-1">
</div>
<div class="col-md-10">
	<center><h2>Feedback Sidang Sidang</h2></center>
	<br/>
		<div class="box">
            <div class="box-header with-border">
                </div><!-- /.box-header -->
                <div class="box-body">
                  	<table id="feedback" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      	<th>Nama Mahasiswa</th>
                      	<th>Judul TA</th>
                        <th>Jadwal Sidang</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>Mahasiswa XYZ</td>
                      <td>Judul TA ABCD</td>
                      <td>12 Maret 2017</td>
                      <td><a href="{{ route('dosen/penguji/feedback-sidang/mahasiswa') }}"><button type="button" class=" btn btn-block btn-primary ">Beri Tanggapan</button></a>
                      </td>
                    </tr>
                    <tr>
                      <td>Mahasiswa ABC</td>
                      <td>Judul TA DBCA</td>
                      <td>12 Maret 2017</td>
                      <td><button class="btn btn-block btn-primary">Beri Tanggapan</button></td>
                    </tr>
                    </tbody>
                 	</table>
                </div><!-- /.box-body -->
            
        </div><!-- /.box -->



		  

	
</div>
<div class="col-md-1">
</div>


@endsection