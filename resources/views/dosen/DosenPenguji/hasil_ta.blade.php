@extends('layouts.layout_dosen_penguji')

@section('title','Hasil TA Mahasiswa')

@section('mainContent')       


<div class="col-md-1">
</div>
<div class="col-md-10">
	<center><h2>Hasil TA Mahasiswa</h2></center>
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
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>Mahasiswa XYZ</td>
                      <td>Judul TA ABCD</td>
                      <td><a href="#"><button type="button" class=" btn btn-block btn-primary ">Download Hasil TA</button></a>
                      </td>
                    </tr>
                    <tr>
                      <td>Mahasiswa ABC</td>
                      <td>Judul TA DBCA</td>
                      <td><a href="#"><button class="btn btn-block btn-primary">Download Hasil TA</button></td>
                    </tr>
                    </tbody>
                 	</table>
                </div><!-- /.box-body -->
            
        </div><!-- /.box -->



		  

	
</div>
<div class="col-md-1">
</div>


@endsection