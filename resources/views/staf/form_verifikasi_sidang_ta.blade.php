
@extends('layouts.layout_staf')

@section('title','Verifikasi Pengajuan Sidang TA')


@section('mainContent')

<script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
</script>

<section class="content">
<div class="center-form">
<div class=".col-md-11">

<br>
 <div class="box box-primary">
    <div class="box-header with-border">
         <center><h1 class="header-title">Verifikasi Pengajuan Sidang</h1></center>
    </div><!-- /.box-header -->
    <div class="box-body">
     <br>
        <form class="form-horizontal" method="post" action="">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">


              <table class="table table-bordered">

              <tbody>
                <tr>
                <th width ="20%" bgcolor="#86b7e3">Nama Mahasiswa</th>
                <td>{{$ta->nama_mahasiswa}}</td>
                </tr>

                <tr>
                <th width ="20%" bgcolor="#86b7e3">NPM</th>
                <td>{{$ta->NPM}}</td>
                </tr>

                <tr>
                <th width ="20%" bgcolor="#86b7e3">Judul TA</th>
                <td>{{$ta->judul_ta}}</td>
                </tr>

                <tr>
                <th width ="20%" bgcolor="#86b7e3">Topik</th>
                <td>{{$ta->topik_ta}}</td>
                </tr>


                <tr>
                <th width ="20%" bgcolor="#86b7e3">Dosen Pembimbing</th>
                <td>
				Mischelle
				</td>
                </tr>

                <tr>
                <th width ="20%" bgcolor="#86b7e3">Dosen Penguji 1</th>
                <td>
						<select name="dosen_penguji_1">
							<option value="0">Pilih Nama Dosen</option>
							  @foreach ($dosen as $dosen)
						
									<option value="{{$dosen->id_dosen}}">{{$dosen->nama_dosen}}</option>
							
							 @endforeach
						</select>
				</td>
                </tr>

				 <tr>
                <th width ="20%" bgcolor="#86b7e3">Dosen Penguji 2</th>
                <td>
						<select name="dosen_penguji_2">
							<option value="0">Pilih Nama Dosen</option>
							  @foreach ($dosen2 as $dosen)
						
									<option value="{{$dosen->id_dosen}}">{{$dosen->nama_dosen}}</option>
							
							 @endforeach
						</select>
				</td>
                </tr>
				
				 <tr>
                <th width ="20%" bgcolor="#86b7e3">Dosen Penguji 3</th>
                <td>
						<select name="dosen_penguji_3">
							<option value="0">Pilih Nama Dosen</option>
							  @foreach ($dosen3 as $dosen)
						
									<option value="{{$dosen->id_dosen}}">{{$dosen->nama_dosen}}</option>
							
							 @endforeach
						</select>
				
				</td>
                </tr>
				
                <tr>
                <th width ="20%" bgcolor="#86b7e3">Waktu Sidang</th>
                <td><input name="waktu_sidang" type="date" id="datepicker" value="<?php echo date ("Y-m-d");?> ">
                </td>
				</td>
                </tr>
        
				</tbody>
			</table>
            <input name="id_pengajuan" type="text" id="datepicker" value="{{$ta->id_pengajuan}}" hidden>
<br>
            <center><button  class="btn btn-primary" type="submit">Verified</button></center>
            
 </form>

<br><br>


</section>


@endsection

