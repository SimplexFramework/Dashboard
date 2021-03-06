<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                {{LANG['home']}} <small> {{LANG['overview']}}</small>
            </h1>

        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-download fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">@$return->downloadCount ?? 0:</div>
                            <div>{{LANG['downloadCount']}}</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left"></span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-file fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">@$return->fileCount ?? 0:</div>
                            <div>{{LANG['fileCount']}}</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left"></span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-code fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">@$return->lineCount ?? 0:</div>
                            <div>{{LANG['lineCount']}}</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left"></span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-book fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">@$return->libraryCount ?? 0:</div>
                            <div>{{LANG['libraryCount']}}</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left"></span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-book fa-fw"></i> {{LANG['projectList']}}</h3>
                </div>
                <div class="panel-body">
                    <div class="list-group">

                        @foreach( PROJECT_LIST as $project ):
                        <a href="/#" class="list-group-item">
                            <i class="fa fa-fw fa-folder"></i> @$project:
                        </a>
                        @endforeach:

                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
                @@Form::open():
                <div class="form-group">
                    <label>{{LANG['newProject']}}</label>
                    @@Form::required()->class('form-control')->placeholder('Projects/ProjectName')->text('project'):
                </div>

                @@Form::class('btn btn-info')->submit('create', LANG['createButton']):
                @@Form::close():
        </div>
    </div>

    @if( $success ?? NULL ):
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <i class="fa fa-info-circle"></i> @$success:
            </div>
        </div>
    </div>
    @endif:

    @if( $error ?? NULL ):
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <i class="fa fa-info-circle"></i> @$error:
            </div>
        </div>
    </div>
    @endif:

</div>
<!-- /.container-fluid -->
