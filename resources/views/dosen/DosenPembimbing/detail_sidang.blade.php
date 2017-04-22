

@extends('layouts.layout_dosen_pembimbing')

@section('title','Detail Sidang')


@section('mainContent')


<section class="content">
<div class="center-form">
<div class=".col-md-11">

  <br>
<br>
		 <div class="box-body">
         <div class="box box-primary">
		  <form class="form-horizontal" method="post" action="">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
						
                <div class="box-header with-border">
                  <center><h1 class="header-title">Detail Sidang </h1></center>
                </div><!-- /.box-header -->
                <div class="box-body">
                 <br>
              <table class="table table-bordered">

              <tbody>
                 
				<tr>
                <th width ="20%" bgcolor="#86b7e3">Nama Mahasiswa</th>
				<td bgcolor="#dddddd">
					{{$ta->nama_mahasiswa}}
                
				</td>
				<tr>
                <th width ="20%" bgcolor="#86b7e3">Judul TA</th>
                <td bgcolor="#dddddd">
					    {{$ta->judul_ta}}
           
				</td>
				
				
				
				<tr>
                <th width ="20%" bgcolor="#86b7e3">Jadwal Sidang</th>
                <td bgcolor="#dddddd">
					    {{$ta->waktu_sidang}}
           
				</td>
				
	
				
				<tr>
                <th width ="20%" bgcolor="#86b7e3">Dokumen TA</th>
                <td bgcolor="#dddddd">
				
                    @if( !is_null($ta->dokumen))
						<a href="/files/{{$ta->dokumen}}" >	Download </a>
													
													
													
											
					@else
							Dokumen belom diunggah
					@endif  
				</td>

                </tr>
        
				<tr>
                <th bgcolor="#86b7e3">Input Nilai</th>
				
                <td bgcolor="#dddddd"> 
					<select name="nilai_ta">
							<option value="A">A</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B">B</option>
							<option value="B-">B-</option>
							<option value="C+">C+</option>
							<option value="C">C</option>
							<option value="D">D</option>
							
						</select>
					
					</td>

                </tr>
				
				
                
               
				
                

              </tbody>
              </table>
			  <br>
			  <div class= "col-md-10">	</div>
					<div class ="col-md-2">
					
						
									<button  class="btn btn-primary" type="submit"> Sidang  Selesai</button>
								
					</div>
    <center><br><br>
      </div>

				<input type="text" name="id_tugas_akhir" value ="{{$ta->id_tugas_akhir}}" hidden  >
	</form>
				
        </section><!-- /.content -->

   

<!--   end -->
         </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
            </div><!--/.col (right) -->

</section>


@endsection

