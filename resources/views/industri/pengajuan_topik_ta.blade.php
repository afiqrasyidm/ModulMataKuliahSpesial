@extends('layouts.layout_industri')

@section('title','Home Page')

@section('mainContent')
<div class="col-md-12">
	<h1>Pengajuan Topik TA</h1>
	<br>

	<h2>     Usulan Topik dan Judul</h2>
 <form class="form-horizontal">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Judul TA</label>
                      <div class="col-sm-8">
                        <input type="judul" class="form-control" id="inputEmail3" placeholder="Judul TA">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Topik TA</label>
                      <div class="col-sm-8">
                        <input type="topik" class="form-control" id="inputPassword3" placeholder="Topik TA">
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
						                  <form>
						                    <textarea class="textarea"  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

														  </form>

						                </div>
						              </div>
													<div class="col-sm-4">
												 <button class="btn btn-block btn-primary">Ajukan Topik</button>
												 </div>
						            </div><!-- /.col-->
						          </div><!-- ./row -->

                </form>

</div>


@endsection
