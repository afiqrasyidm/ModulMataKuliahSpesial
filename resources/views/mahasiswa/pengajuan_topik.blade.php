@extends('layouts.layout_mahasiswa')

@section('title','Pengajuan Topik TA')

@section('mainContent')
<div class="col-md-1">
</div>
<div class="col-md-10">
@if(isset($topik))
	
	<h1>Daftar Topik TA</h1>
	</br>
	<div align="right">
		<a href="{{ route('mahasiswa/pengajuan-topik-ta') }}">
			<button  class="btn btn-primary">Ajukan Topik Baru</button>
		</a>
	</div>
	
	<br>
	<br>
	
	<form>
		<table class="table table-striped">
		    <thead>
		      <tr>
		        <th>Topik</th>
		        <th>Pengaju</th>
		        <th>Pembimbing</th>
		        <th></th>
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
				</tr>
			  
			   @endforeach
			  
			  
		    </tbody>
			
			
			
			
  		</table>
		
		
  		<p><i>*centang salah satu</i></p>

		<br/>
		
	</form>
	

@else
	<br>
<br><br>
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Topik yang diambil : {{$topik_yang_diambil->topik_ta}}</h3>
              <div class="box-tools pull-right">
              </div>
            </div>
            <div class="box-body">
              {{$topik_yang_diambil->deskripsi}}
            </div><!-- /.box-body -->
            <div class="box-footer">
           
						@if (isset($industri))
							Topik ini diajukan oleh industri : {{$industri->nama_industri}}
							
						@elseif (isset($dosen))
							Topik ini diajukan oleh dosen :{{$dosen->nama_dosen}}
							
						@else
							Topik ini diajukan secara mandiri.
						
						@endif
					
		   
		   
		   </div><!-- /.box-footer-->
          </div><!-- /.box -->
		  	<div align="right">
				<a href="/mahasiswa/ubah-pengajuan-topik-ta/{{$topik_yang_diambil->id_topik}}/{{$tugas_akhir->id_tugas_akhir}}"   >
					<button  class="btn btn-primary">Ubah Topik</button>
				</a>
			</div>


        </section><!-- /.content -->
@endif	
</div>
<div class="col-md-1">
</div>
@endsection