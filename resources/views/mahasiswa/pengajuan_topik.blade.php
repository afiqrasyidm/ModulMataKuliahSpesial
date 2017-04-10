

@extends('layouts.layout_mahasiswa')

@section('title','Pengajuan Topik TA')


@section('mainContent')


<section class="content">
<div class="center-form">
<div class=".col-md-11">
@if(isset($topik))

<br><br>
              <!-- general form elements disabled -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <center><h1 class="header-title">Daftar Topik TA</h1><br></center>
                </div><!-- /.box-header -->
                <div class="box-body">
                 
              <div align="right">
                  <a href="{{ route('mahasiswa/pengajuan-topik-ta') }}">
                    <button  class="btn btn-primary">Ajukan Topik Baru</button>
                  </a><br><br>
              </div>

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


@else
  <br>
<br>

          <section class="content">

              <h3><center>Bukti Pengajuan Topik</h4>

                <br>
              <h4><b>{{$topik_yang_diambil->topik_ta}}</b></h4>

              <table class="table table-bordered">

              <tbody>
                <tr>
                <th width ="20%" bgcolor="#86b7e3">Pengaju</th>
                <td bgcolor="#c0c5cc">
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
                <td bgcolor="#c0c5cc">{{$topik_yang_diambil->maksimal_pendaftar}} orang</td>

                </tr>
                
		        <tr>
				
					<th bgcolor="#86b7e3">Jumlah pendaftar sampai saat ini</th>
					<td bgcolor="#c0c5cc">
						{{$jumlah_pengambil_topik}} orang
						
						</td>

                </tr>
				
                <tr>
                <th bgcolor="#86b7e3">Status</th>
                <td bgcolor="#c0c5cc"> 
					
					
						@if ($tugas_akhir->status_tugas_akhir ==-2 )
							Menunggu persetujuan
						@elseif ($tugas_akhir->status_tugas_akhir ==-1 )
							Anda tidak diterima mengambil topik ini, silahkan ambil topik lain
						@else 
							Pengambilan topik anda telah disetujui
						@endif
					</td>

                </tr>
				@endif
				
                <tr>
                <th bgcolor="#86b7e3">Deskripsi</th>
                <td bgcolor="#c0c5cc"> {{$topik_yang_diambil->deskripsi}}</td>

                </tr>

              </tbody>
              </table>
    <center>
        <a href="/mahasiswa/ubah-pengajuan-topik-ta/{{$topik_yang_diambil->id_topik}}/{{$tugas_akhir->id_tugas_akhir}}"   >
          <button  class="btn btn-primary">Ubah Topik</button>
        </a>
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

