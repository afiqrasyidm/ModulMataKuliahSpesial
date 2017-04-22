

@extends('layouts.layout_staf')

@section('title','Verifikasi Permohonan Sidang')


@section('mainContent')

<section class="content">
<div class="center-form">
<div class=".col-md-11">


<br><br>
              <!-- general form elements disabled -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <center><h1 class="header-title">Verifikasi Permohonan Sidang</h1><br></center>
                </div><!-- /.box-header -->
                <div class="box-body">
                  
<!-- test -->
@if(isset($ta))

      <section class="content">
              <table class="table table-bordered">
                  <thead>
                      <tr>
                        <th>NPM</th>
                        <th>Nama Mahasiswa</th>
                        <th>TA yang Disidangkan</th>

                      </tr>
                    </thead>
              <tbody>
    
               @foreach ($ta as $ta)

        
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <tr>
                <td>
                     {{$ta->NPM}}
                        
                </td>
                <td>
                     {{$ta->nama_mahasiswa}}
                        
                </td>
             
                <td>
                   @if($ta->status == 1)
                    <a href="/staf/permohonan-sidang/{{$ta->id_pengajuan}}">
                      <button  class="btn btn-primary" type="submit">Detail TA</button>
                    </a>
                    @elseif($ta->status == 2) 
                      <p><b>Terverifikasi</b></p>
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

