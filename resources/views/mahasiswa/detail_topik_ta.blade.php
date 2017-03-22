@extends('layouts.layout_mahasiswa')

@section('title','Pengajuan Topik TA')

@section('mainContent')
<div class="col-md-1">
</div>
<div class="col-md-10">

	<br>
<br><br>
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"> Detail Topik : {{$topik->topik_ta}}</h3>
              <div class="box-tools pull-right">
              </div>
            </div>
            <div class="box-body">
              {{$topik->deskripsi}}
            </div><!-- /.box-body -->
            <div class="box-footer">
           
						
						@if (isset($industri))
							Topik ini diajukan oleh industri : {{$industri->nama_industri}}
							
						@else
							Topik ini diajukan oleh dosen :{{$dosen->nama_dosen}}
							
						
						@endif
					
		   
		   
		   </div><!-- /.box-footer-->
          </div><!-- /.box -->
		  
		<center>
			<a href="/mahasiswa/pengajuan-topik-ta-dosen-industri/{{$topik->id_topik}}">
				<button class="btn btn-primary">Ambil Topik Ini</button>
			</a>
		</center>

        </section><!-- /.content -->

</div>
<div class="col-md-1">
</div>
@endsection