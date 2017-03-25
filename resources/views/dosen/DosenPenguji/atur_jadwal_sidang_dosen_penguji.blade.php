@extends('layouts.layout_dosen_penguji')

@section('title','Atur Jadwal Sidang')

@section('mainContent')       

<div class="col-md-1">
</div>
<div class="col-md-10">
	<center><h2>Atur Jadwal Sidang</h2></center>
	<br/>
		<div class="box">
            <div class="box-header with-border">
                </div><!-- /.box-header -->
                <div class="box-body">
                  	<table class="table table-bordered">
                    <tr>
                      	<th>Hari</th>
                      	<th>Jam</th>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                            <select class="form-control">
                              <option>Hari</option>
                              <option>Senin</option>
                              <option>Selasa</option>
                              <option>Rabu</option>
                              <option>Kamis</option>
                              <option>Jumat</option>
                            </select>
                        </div>
                      </td>

                      <td>
                         <div class="form-group">
                            <select class="form-control">
                              <option>Jam</option>
                              <option>09.00-11.30</option>
                              <option>13.00-15.30</option>
                              <option>15.30-18.00</option>
                            </select>
                        </div>
                      </td>
                    </tr>
                 	</table>
                  
                </div><!-- /.box-body -->
            <center>
            	<button class="btn btn-primary">Atur Jadwal Sidang</button>
            </center><br>
        </div><!-- /.box -->
</div>
<div class="col-md-1">
</div>



@endsection