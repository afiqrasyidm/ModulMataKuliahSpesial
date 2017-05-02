

@extends('layouts.layout_dosen_pembimbing')

@section('title','Detail Sidang')


@section('mainContent')


<section class="content">
<div class="center-form">
<div class=".col-md-11">

  <br>
<br>
		 <div class="box-body ">
         <div class="box box-primary ">
		  <form class="form-horizontal" method="post" action="">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
						
                <div class="box-header with-border">
                  <center><h1 class="header-title">Detail Sidang </h1></center>
                </div><!-- /.box-header -->
                <div class="box-body">
                 <br>
			
			<div class = "col-sm-8">	 
              <table class="table table-bordered" >

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
			 
			 </div>
			  <br>
			  <div class = "col-sm-4">	 
				
					<table style="width:30%"  border="2">
					
					  <tr>
						<td>A</td>
						<td>>=85</td>
					
					  </tr>
					  <tr>
						<td>A-</td>
						<td>80-85</td>
						
					  </tr>
					  <tr>
						<td>B+</td>
						<td>75-80</td>
					
					  </tr>
					  
					   <tr>
						<td>B</td>
						<td>70-75</td>
					
					  </tr>
					  
					   <tr>
						<td>B-</td>
						<td>65-70</td>
					
					  </tr>
					  
					   <tr>
						<td>C+</td>
						<td>60-65</td>
					
					  </tr>
					  
					   <tr>
						<td>C</td>
						<td>55-60</td>

					
					  </tr>
					  
					   <tr>
						<td>D</td>
						<td>< 55</td>
					
					  </tr>
					</table>
			  </div>
				  
			  <div class= "col-md-10">	</div>
				<br>
				<br>
					<div class ="col-md-9">
						<center>
						
									<button  class="btn btn-primary" type="submit"> Sidang  Selesai</button>
						</center>		
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

