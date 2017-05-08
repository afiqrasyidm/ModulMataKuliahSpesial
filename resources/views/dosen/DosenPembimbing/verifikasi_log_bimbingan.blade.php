

@extends('layouts.layout_dosen_pembimbing')

@section('title','Lihat Hasil TA')


@section('mainContent')


<section class="content">
<div class="center-form">
<div class=".col-md-11">

<br><br>
              <!-- general form elements disabled -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <center><h1 class="header-title">Daftar Mahasiswa Bimbingan</h1><br></center>
                </div><!-- /.box-header -->
                <div class="box-body">



				
		<table class="table table-striped">
		    <thead>
		      <tr>
		        <th>Mahasiswa</th>
		        <th>Judul </th>
				<th>Topik</th>
				
				
				</tr>
		    </thead>
		    <tbody>
										  @foreach ($bimbingan as $data)
									<tr>
										  <td>
											<a  href="#">
											  {{$data->nama_mahasiswa}}
											</a>
										  </td>
										   

										  <td>
											{{$data->judul_ta}}
											</td>
											<td>
											{{$data->topik_ta}}

											</td>
									
										
									</tr>
											
										 @endforeach

			
				</tbody>




			 </table>
         </div>
              </div>
              </div>
            </div>

</section>

@endsection

