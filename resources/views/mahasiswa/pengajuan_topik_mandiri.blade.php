@extends('layouts.layout_mahasiswa')

@section('title','Pengajuan Topik TA')

@section('mainContent')

<script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
    </script>

<div class="col-md-12">
	<h1>Pengajuan Topik TA</h1>
	<br>

	<h2>     Usulan Topik dan Judul</h2>
                  <div class="box-body">
                    <form class="form-horizontal" method="post" action="">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
						
						  <label for="inputPassword3" class="col-sm-2 control-label">Topik TA</label>
						
								<div class="col-sm-8">
								
									<input type="topik" class="form-control" id="inputPassword3" placeholder="Topik TA" name="topik_ta">
								
								</div>
								 <div class='col-sm-3'>
							
									<?php echo $errors->first('topik_ta') ?>
								</div>
								
						</div>
						 <section class="content">
						 
										<div class="box">
											<div class="box-header">
											  <h3 class="box-title">Latar Belakang Pengajuan Topik TA</h3>
											  <!-- tools box -->
											  <div class="pull-right box-tools">
												<button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>

											  </div><!-- /. tools -->
											</div><!-- /.box-header -->
											<div class="box-body pad">
												 
												<textarea class="textarea"  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="latar_belakang_ta" ></textarea>

															 

											</div>
											
											<div class='col-sm-3'>
							
												<?php echo $errors->first('latar_belakang_ta') ?>
											</div>

													<div class="pull-right">
														<br>
										
													 <button class="btn btn-block btn-primary" type="submit" >Ajukan Topik</button>
													
										</div>
									  
						</section>
                </form>

</div>
</div>


@endsection

