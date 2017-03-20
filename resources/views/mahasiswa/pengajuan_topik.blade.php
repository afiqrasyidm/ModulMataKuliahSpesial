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
					<td>{{$topik->topik_ta}}</td>
					
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
					<td><input type="radio" name="pilih-topik"></td>
				</tr>
			  
			   @endforeach
			  
			  
		    </tbody>
			
			
			
			
  		</table>
		
		
  		<p><i>*centang salah satu</i></p>
		<center><button class="btn btn-primary">Ajukan Topik</button></center>
		<br/>
		
	</form>
	

@else
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Topik yang diambil : {{$topik_yang_diambil->topik_ta}}</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              {{$topik_yang_diambil->deskripsi}}
            </div><!-- /.box-body -->
            <div class="box-footer">
           
						@if(is_null($topik_yang_diambil->nama_dosen) && is_null($topik_yang_diambil->nama_industri))
							Topik ini diajukan secara mandiri.
						
						@elseif (is_null($topik_yang_diambil->nama_industri))
							{{$topik_yang_diambil->nama_dosen}}
							
						@else
							{{$topik_yang_diambil->nama_industri}}
							
						
						@endif
					
		   
		   
		   </div><!-- /.box-footer-->
          </div><!-- /.box -->

        </section><!-- /.content -->
@endif	
</div>
<div class="col-md-1">
</div>
@endsection