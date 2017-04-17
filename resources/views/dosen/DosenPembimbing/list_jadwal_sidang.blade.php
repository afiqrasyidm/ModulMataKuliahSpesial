

@extends('layouts.layout_dosen_pembimbing')

@section('title','List Jadwal Persidangan')


@section('mainContent')

<section class="content">
<div class="center-form">
<div class=".col-md-11">


<br><br>
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
                    	<th>Judul TA </th>
						<th>Dokumen TA</th>
						<th>Status Sidang</th>
                       
                       
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
                    {{$ta->judul_ta}}
                      
                </td>
             
			 
                <td>
                    
                    @if( !is_null($ta->dokumen))
						<a href="/files/{{$ta->dokumen}}" >	Download </a>
													
													
													
											
					@else
							Dokumen belom diunggah
					@endif  
                </td>
             
                <td>
		            @if( $ta->status_tugas_akhir == 12)
					
							Sidang telah dilakukan														
													
													
											
					@else
						<a href="/dosen/pembimbing/sidang-selesai/{{$ta->id_tugas_akhir}}">
						  <button  class="btn btn-primary" type="submit"> Sidang Selesai</button>
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

