

@extends('layouts.layout_industri')

@section('title','Verifikasi Pengajuan Topik TA')


@section('mainContent')


<section class="content">
<div class="center-form">
<div class=".col-md-11">
@if(isset($topik))

<br><br>
              <!-- general form elements disabled -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <center><h1 class="header-title">Daftar Ajuan Topik TA</h1><br></center>
                </div><!-- /.box-header -->
                <div class="box-body">

				
		<table class="table table-striped">
		    <thead>
		      <tr>
		        <th>Topik</th>
		        <th>Jumlah Pendaftar</th>
				<th>Maksimal Pendaftar</th>
				</tr>
		    </thead>
		    <tbody>

			<?php $i = 0; ?>
          @foreach ($topik as $topik)

           <tr>
          <td>
		  
            <a href="{{ route('industri/pengajuan-topik/detail/', $topik->id_topik ) }}">
              {{$topik->topik_ta}}
            </a>
          </td>
          

          <td>
		  {{$array[$i]}}


			</td>
					
			<td><div> 
						
						{{$topik->maksimal_pendaftar}}

				</div>
			</td>
			

	</tr>
			<?php $i++; ?>
         @endforeach



    <br/>

  



@endif

   

<!--   end -->
         </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
            </div><!--/.col (right) -->

</section>

@endsection

