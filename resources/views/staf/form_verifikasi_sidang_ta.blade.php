
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
                    <input class="form-control" value="Mischelle" disabled>
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
            </div>
			
            <input name="id_pengajuan" type="text" id="datepicker" value="{{$ta->id_pengajuan}}" hidden>

        <div class="box-footer">
        
            <center><button  class="btn btn-primary" type="submit">Verified</button></center>
            <br>
        </div>
            
 </form>



</section>


@endsection

