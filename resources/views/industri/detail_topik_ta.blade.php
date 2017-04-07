@extends('layouts.layout_industri')

@section('title','Verifikasi Pengajuan Topik TA')

@section('mainContent')
<div class="col-md-1">
</div>
<div class="col-md-10">

	<br>
<br><br>


 <!-- general form elements disabled -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <center><h1 class="header-title">Daftar Pendaftar Topik {{$topik->first()->topik_ta}}</h1><br></center>
                </div><!-- /.box-header -->
                <div class="box-body">
                 
              

						<form>
									<table class="table table-striped">
										<thead>
										  <tr>
											<th>Nama Mahasiswa</th>
											<th>IPK </th>
											</tr>
										</thead>
										<tbody>

									
									  @foreach ($topik as $topiks)

									   <tr>
									  <td>
										
										  {{$topiks->nama_mahasiswa}}
										</a>
									  </td>
									  

									  <td>
									  {{$topiks->IPK}}


										</td>
												
									

								</tr>
										
									 @endforeach


									</tbody>




								  </table>


								<br/>
								<p>Maksimal Pendaftar : {{$topik->first()->maksimal_pendaftar}} orang</p>
								<p>Jumlah Pendaftar Sampai Saat Ini : {{$topik->count()}} orang</p>
									
																
							
								<p>Latar Belakang Topik :{{$topik->first()->deskripsi}}</p>


								
											
					

						  </form>
				</div><!-- /.box-body -->
              </div><!-- /.box -->
            

		

			




















	    </tbody>
	</table>
	
	
    

        </section><!-- /.content -->

</div>
<div class="col-md-1">
</div>
@endsection
