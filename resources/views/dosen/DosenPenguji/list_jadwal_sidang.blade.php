@extends('layouts.layout_dosen_penguji')

@section('title','List Jadwal Persidangan')


@section('mainContent')

<section class="content">
<div class="center-form">
<div class=".col-md-11">


<br><br>
              <!-- general form elements disabled -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <center><h1 class="header-title">List Sidang Tugas Akhir</h1><br></center>
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
						<a href="{{ url('/') }}/files/{{$ta->dokumen}}" >	Download </a>
													
													
													
											
					@else
							Dokumen belum diunggah
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

