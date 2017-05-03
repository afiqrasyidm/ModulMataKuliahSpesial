
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

    </div>
    <div class="box-body">
     <br>
@if($ta->status==1)

        <form class="form-horizontal" method="post" action="">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">

         <center><h1 class="header-title">Verifikasi Pengajuan Sidang</h1></center>
            <div class="form-group">
                <label class="control-label col-sm-3">Nama Mahasiswa :</label>
                <div class="col-sm-6">
                     <input class="form-control" value="{{$ta->nama_mahasiswa}}" disabled>
                </div>
            </div>
               

             <div class="form-group">
                <label class="control-label col-sm-3">NPM :</label>
                <div class="col-sm-6">
                    <input class="form-control" value="{{$ta->NPM}}" disabled>
                </div>
            </div>

             <div class="form-group">
                <label class="control-label col-sm-3">Judul TA :</label>
                <div class="col-sm-6">
                    <input class="form-control" value="{{$ta->judul_ta}}" disabled></div>
             </div>

             <div class="form-group">
                <label class="control-label col-sm-3">Topik :</label>
                <div class="col-sm-6">
                    <input class="form-control" value="{{$ta->topik_ta}}" disabled>
                </div>
             </div>


            <div class="form-group">
                <label class="control-label col-sm-3">Dosen Pembimbing :</label>
                <div class="col-sm-6">
                    <input class="form-control" value="{{$ta->nama_dosen}}" disabled>
                </div>
            </div>

             <div class="form-group">
                <label class="control-label col-sm-3">Dosen Penguji 1:</label>
                <div class="col-sm-6">
					<select name="dosen_penguji_1" class="form-control select2" style="width: 100%;" required>
						<option value="">Pilih Nama Dosen</option>
							@foreach ($dosen as $dosen)
						
						<option value="{{$dosen->id_dosen}}">{{$dosen->nama_dosen}}</option>
							
							 @endforeach
					</select>
					   
                </div>
				<div class='col-sm-3'>
                          <?php echo $errors->first('wrong_dosen_penguji_1_2') ?>
						  <?php echo $errors->first('wrong_dosen_penguji_1_3') ?>
                 </div>
            </div>

			 <div class="form-group">
                <label class="control-label col-sm-3">Dosen Penguji 2 :</label>
                <div class="col-sm-6">		
                    <select name="dosen_penguji_2" class="form-control select2" style="width: 100%;" required>
							<option value="">Pilih Nama Dosen</option>
							  @foreach ($dosen2 as $dosen)
						
									<option value="{{$dosen->id_dosen}}">{{$dosen->nama_dosen}}</option>
							
							 @endforeach
						</select>
				</div>
				<div class='col-sm-3'>
                          <?php echo $errors->first('wrong_dosen_penguji_1_2') ?>
						  <?php echo $errors->first('wrong_dosen_penguji_2_3') ?>
                 </div>
            </div>
				
			 <div class="form-group">
                <label class="control-label col-sm-3">Dosen Penguji 3 :</label>
                <div class="col-sm-6">
						<select name="dosen_penguji_3" class="form-control select2" style="width: 100%;" required >
							<option value="">Pilih Nama Dosen</option>
							  @foreach ($dosen3 as $dosen)
						
									<option value="{{$dosen->id_dosen}}">{{$dosen->nama_dosen}}</option>
							
							 @endforeach
						</select>
				
				</div>
				<div class='col-sm-3'>
                          <?php echo $errors->first('wrong_dosen_penguji_1_3') ?>
						  <?php echo $errors->first('wrong_dosen_penguji_2_3') ?>
                 </div>
            </div>
				
            <div class="form-group">
                <label class="control-label col-sm-3">Waktu Sidang :</label>
                <div class="col-sm-6">
                   <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                       
                      <input class="form-control select2" style="width: 100%;" name="waktu_sidang" type="datetime-local" id="datepicker" >
                    </div>
                </div>

                <div class='col-sm-3'>
                          <?php echo $errors->first('wrong_waktu_sidang') ?>
                 </div>
            </div>
			
             <input name="id_pengajuan" type="text" id="datepicker" value="{{$ta->id_pengajuan}}" hidden>
        <div class="box-footer">
            <center><button  class="btn btn-primary" type="submit">Verified</button></center>
            <br>
        </div>
</form>  
        
@else
    <center><h1 class="header-title">Detail Verifikasi Pengajuan Sidang</h1></center>
     <br>
              <table class="table table-bordered">

              <tbody>
                <tr>
                <th width ="20%" bgcolor="#86b7e3">Nama Mahasiswa</th>
                <td bgcolor="#c0c5cc">{{$ta->nama_mahasiswa}}</td>
                </tr>

                <tr>
                <th width ="20%" bgcolor="#86b7e3">NPM</th>
                <td bgcolor="#c0c5cc">{{$ta->NPM}}</td>
                </tr>

                <tr>
                <th width ="20%" bgcolor="#86b7e3">Judul TA</th>
                <td bgcolor="#c0c5cc">{{$ta->judul_ta}}</td>
                </tr>

                <tr>
                <th width ="20%" bgcolor="#86b7e3">Topik TA</th>
                <td bgcolor="#c0c5cc">{{$ta->topik_ta}}</td>
                </tr>

                <tr>
                <th width ="20%" bgcolor="#86b7e3">Dosen Pembimbing</th>
                <td bgcolor="#c0c5cc">{{$ta->nama_dosen}}</td>
                </tr>

                @foreach($penguji as $penguji)
                  <tr>
                  <th width ="20%" bgcolor="#86b7e3">Dosen Penguji {{ $i++ }} </th>
                  <td bgcolor="#c0c5cc">{{$penguji->nama_dosen}}</td>
                </tr>
                @endforeach
          
                <tr>
                <th width ="20%" bgcolor="#86b7e3">Waktu Sidang</th>
                <td bgcolor="#c0c5cc">{{$ta->waktu_sidang}}</td>
                </tr>
        </tbody>
      </table>
      <br>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Ubah Verifikasi Sidang</button>

        </a>
@endif
      <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Anda Yakin Ingin Mengubah Verifikasi Sidang?</h4>
        </div>

        <div>
        <a href="/staf/ubah-pengajuan-sidang/{{$ta->id_tugas_akhir}}">
              <button  class="btn btn-primary" >Iya</button>
            </a>
          
            <br>
            <br>
        </div>
        </div>
      
    </div>
    </div>
</div>
</section>


@endsection

