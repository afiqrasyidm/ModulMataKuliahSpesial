

@extends('layouts.layout_staf')

@section('title','Verifikasi Permohonan Sidang TA')


@section('mainContent')

<section class="content">
<div class="center-form">
<div class=".col-md-11">


<br><br>
              <!-- general form elements disabled -->
    <div class="box box-primary">
      <div class="box-header with-border">
      <?php
if (isset($_SESSION["sba_verifikasi_pengajuan_sidang"])) {
  
      echo"
      <div class='alert alert-success'>
                    
                   <i class='icon fa fa-check'></i>Verifikasi Sidang Berhasil
                   
              </div>
      ";
      
      
      unset($_SESSION["sba_verifikasi_pengajuan_sidang"]);
}
?>

  <?php
if (isset($_SESSION["sba_perubahan_verifikasi_pengajuan_sidang"])) {
  
      echo"
      <div class='alert alert-success'>
                    
                   <i class='icon fa fa-check'></i>Perubahan Verifikasi Sidang Berhasil
                   
              </div>
      ";
      
      
      unset($_SESSION["sba_perubahan_verifikasi_pengajuan_sidang"]);
}
?>
          <center><h1 class="header-title">Verifikasi Permohonan Sidang TA</h1><br></center>
      </div><!-- /.box-header -->
    <div class="box-body">
  <table class="table table-striped">
    <thead>
        <tr>
        <th>NPM</th>
        <th>Nama Mahasiswa</th>
        <th>Status</th>
      </tr>
    </thead>
              <tbody>
                @if(isset($ta))  
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
                      <p><b>Belum Diverifikasi</b></p>
                    @elseif($ta->status >= 2) 
                      <p><b>Telah Diverifikasi</b></p>
                    @endif
                </td>

                <td>
                    <a href="{{ route('staf/permohonan-sidang/',$ta->id_pengajuan) }}">
                      <button  class="btn btn-primary" type="submit">Detail TA</button>
                    </a>
                </td>

              </tr>
  @endforeach
              
    @endif
              </tbody>
              </table>
    <center>
       
    

        </section><!-- /.content -->


     

                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
            </div><!--/.col (right) -->

</section>

@endsection

