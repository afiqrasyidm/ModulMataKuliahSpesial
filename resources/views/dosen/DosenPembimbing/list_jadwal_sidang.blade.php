

@extends('layouts.layout_dosen_pembimbing')

@section('title','List Jadwal Persidangan')


@section('mainContent')

<section class="content">
<div class="center-form">
<div class=".col-md-11">


<br><br>
<?php
if (isset($_SESSION["detail_sidang_submit_first"])) {
	
			echo"
			<div class='alert alert-success'>
                    
                   <i class='icon fa fa-check'></i> TA telah selesai dan nilai telah disubmit
                   
              </div>
			";
			
			
			unset($_SESSION["detail_sidang_submit_first"]);
}
?>
              <!-- general form elements disabled -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <center><h1 class="header-title">List Jadwal Sidang</h1><br></center>
                </div><!-- /.box-header -->
                <div class="box-body">
                  
<!-- test -->
@if(isset($ta))

      <section class="content">
              <table class="table table-bordered">
                  <thead>
                      <tr>
                        <th>Nama Mahasiswa</th>
                        <th>Jadwal Sidang</th>
                		<th>Detail Sidang</th>
                       
                       
                      </tr>
                    </thead>
              <tbody>
    
               @foreach ($ta as $ta)

        
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <tr>
                <td>
                     {{$ta->nama_mahasiswa}}
                        
                </td>
				
				 <td>
                
                    {{$ta->waktu_sidang}}
                       
                </td>
             
             
			 
                <td>
		            @if( $ta->status_tugas_akhir == 12)
					
							Sidang telah dilakukan														
													
													
											
					@else
						
					 <a href="{{ route('dosen/pembimbing/detail-sidang/', $ta->id_tugas_akhir ) }}">
      
						  <button  class="btn btn-primary" type="submit"> Detail</button>
						</a>
					@endif  
        			
                

                </td>

              </tr>
  @endforeach
              

              </tbody>
              </table>
    <center>
       
    

        </section><!-- /.content -->
   
     
    @endif
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
            </div><!--/.col (right) -->

</section>

@endsection

