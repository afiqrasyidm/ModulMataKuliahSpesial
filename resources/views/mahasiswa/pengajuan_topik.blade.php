

@extends('layouts.layout_mahasiswa')

@section('title','Pengajuan Topik TA')


@section('mainContent')


<section class="content">
<div class="center-form">
<div class=".col-md-11">

         <div class="box box-primary">
			
			
                <div class="box-header with-border">	
	<?php
if (isset($_SESSION["mahasiswa_pengajuan_topik"])) {
	
			echo"
			<div class='alert alert-success'>
                    
                   <i class='icon fa fa-check'></i>Pengajuan Topik Berhasil
                   
              </div>
			";
			
			
			unset($_SESSION["mahasiswa_pengajuan_topik"]);
}
?>

	<?php
if (isset($_SESSION["mahasiswa_perubahan_topik"])) {
	
			echo"
			<div class='alert alert-success'>
                    
                   <i class='icon fa fa-check'></i>Perubahan Topik Berhasil
                   
              </div>
			";
			
			
			unset($_SESSION["mahasiswa_perubahan_topik"]);
}
?>


@if(isset($topik))




              <!-- general form elements disabled -->
              
                  <center><h1 class="header-title">Daftar Topik TA</h1><br></center>
                </div><!-- /.box-header -->
                <div class="box-body">
                 
          @if(isset($ubah))
			<br><br>
			<div class="alert alert-success">
                    
                   <i class="icon fa fa-check"></i> Pengubahan Topik Telah Berhasil
                   
              </div>
			@endif
	<form>
		<table class="table table-striped">
		    <thead>
		      <tr>
		        <th>Topik</th>
		        <th>Pengaju</th>
		        <th>Pembimbing</th>
				<th>Maksimal Pendaftar</th>
				</tr>
		    </thead>
		    <tbody>


          @foreach ($topik as $topik)

           <tr>
          <td>
            <a href="/mahasiswa/pengajuan-topik/detail/{{$topik->id_topik}}">
              {{$topik->topik_ta}}
            </a>
          </td>
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
					
			<td>
						
						{{$topik->maksimal_pendaftar}}


			</td>
			

	</tr>

         @endforeach


        </tbody>




      </table>


      <p><i>*pilih salah satu</i></p>

    <br/>

  </form>

<!-- ajukan topik mandiri -->
    <div align="right">
                  <a href="{{ route('mahasiswa/pengajuan-topik-ta') }}">
                    <button  class="btn btn-primary">Ajukan Topik Baru</button>
                  </a><br><br>
              </div>
<!-- end -->

@else
	
	

                  <center><h1 class="header-title">Detail Pengajuan Topik</h1></center>
                </div><!-- /.box-header -->
                <div class="box-body">
                 <br>
              <table class="table table-bordered">
			@if(isset($pertama))	
			
			<br><br>
			<div class="alert alert-success">
                    
                   <i class="icon fa fa-check"></i> Pengajuan Topik Telah Berhasil
                   
              </div>
			@endif
		 
              <tbody>
                
				<tr>
                <th width ="20%" bgcolor="#86b7e3">Topik yang diambil</th>
                <td bgcolor="#dddddd">
					{{$topik_yang_diambil->topik_ta}}
				</td>
				
				
				<tr>
                <th width ="20%" bgcolor="#86b7e3">Pengaju</th>
                <td bgcolor="#dddddd">
				@if (isset($industri))
					Industri: {{$industri->nama_industri}}

                @elseif (isset($dosen))
					Dosen: {{$dosen->nama_dosen}}
				@else
					Topik ini diajukan secara mandiri
				@endif

				
				</td>

                </tr>
				@if (isset($industri) OR isset($dosen) )
        
				<tr>
                <th bgcolor="#86b7e3">Maksimal Pendaftar</th>
                <td bgcolor="#dddddd">{{$topik_yang_diambil->maksimal_pendaftar}} orang</td>

                </tr>
                
		        <tr>
				
					<th bgcolor="#86b7e3">Jumlah pendaftar sampai saat ini</th>
					<td bgcolor="#dddddd">
						{{$jumlah_pengambil_topik}} orang
						
						</td>

                </tr>
				
                <tr>
                <th bgcolor="#86b7e3">Status</th>
                <td bgcolor="#dddddd"> 
					
					
						{{$tugas_akhir->status}}
					</td>

                </tr>
				@endif
				
                <tr>
                <th bgcolor="#86b7e3">Deskripsi</th>
                <td bgcolor="#dddddd"> {{$topik_yang_diambil->deskripsi}}</td>

                </tr>

              </tbody>
              </table>
    <center><br><br>
	@if ($tugas_akhir->status_tugas_akhir > 6  )
        <p>Anda tidak bisa mengubah topik lagi, dikarenakan permohonan TA Anda telah disetujui oleh PA.</p>
	@else

		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Ubah Topik</button>
	
	@endif
	
	 <!-- Modal -->
	  <div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
		
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Anda Yakin Ingin Mengubah Topik?</h4>
			</div>

			<div>
					<a href="/mahasiswa/ubah-pengajuan-topik-ta/{{$topik_yang_diambil->id_topik}}/{{$tugas_akhir->id_tugas_akhir}}"   >
					  <button  class="btn btn-primary" >Iya</button>
					</a>
				
					<br>
					<br>
			</div>
		  </div>
		  
		</div>
	  </div>
	  
	
      </div>


        </section><!-- /.content -->
		
	
@endif

   

<!--   end -->
         </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
            </div><!--/.col (right) -->

</section>

@endsection

