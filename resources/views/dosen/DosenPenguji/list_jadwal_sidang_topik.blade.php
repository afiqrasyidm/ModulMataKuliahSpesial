

@extends('layouts.layout_dosen_penguji')

@section('title','List Jadwal Persidangan Topik')


@section('mainContent')

<section class="content">
<div class="center-form">
<div class=".col-md-11">

 
<br><br>

              <!-- general form elements disabled -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <center><h1 class="header-title">List Sidang Topik</h1><br></center>
                </div><!-- /.box-header -->
                <div class="box-body">

<!-- test -->
@if(isset($sidang_topik))

    
              <table class="table table-bordered">
                  <thead>
                      <tr>
                        <th>Nama Mahasiswa</th>
                        <th>Jadwal Sidang</th>
                        <th>Judul TA </th>
                      
                       
                       
                      </tr>
                    </thead>
              <tbody>
    
               @foreach ($sidang_topik as $sidang_topik)

        
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <tr>
                <td>
                     {{$sidang_topik->nama_mahasiswa}}
                        
                </td>
        
         <td>
                
                    {{$sidang_topik->waktu_sidang}}
                       
                </td>
             
             
       
                <td>
         
                 {{$sidang_topik->judul_ta}}

                </td>

              </tr>
  @endforeach
              

              </tbody>
              </table>
    <center>
       
    

      
   
     
    @endif

                    </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
            </div><!--/.col (right) -->

</section>


@endsection

