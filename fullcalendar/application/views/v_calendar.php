<!DOCTYPE html>
<html>
    <head>
    <title>jadwal jaga</title>
        <meta charset='utf-8' />
        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href='<?php echo base_url();?>assets/css/fullcalendar.css' rel='stylesheet' />
        <link href="<?php echo base_url();?>assets/css/bootstrapValidator.min.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>assets/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
        <!-- Custom css  -->
        <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />

        <script src='<?php echo base_url();?>assets/js/moment.min.js'></script>
        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrapValidator.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/fullcalendar.min.js"></script>
        <script src='<?php echo base_url();?>assets/js/bootstrap-colorpicker.min.js'></script>

        <!--   kalendar js -->
        <script src='<?php echo base_url();?>assets/js/main.js'></script>
    </head>
    <body>
		<div class="box box-primary">
        <div class="container">
                <!-- Notification -->
                <div class="alert"></div>
            <div class="row clearfix">
                <div class="col-md-12 column">
                        <div id='calendar' style="background-color=white"></div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal">
            <div class="modal-dialog" style="height:100px;width:300px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <div class="error"></div>
                        <form class="form-horizontal" id="crud-form">
                        <input type="hidden" id="start"/>
                        <input type="hidden" id="end"/>
                          <div class="row form-group">
                                <div class="col-md-12">
                                    <input id="title" name="title" type="text" class="form-control input-md" placeholder="insert primary dev"/>
                                    <input id="status" value="primary" type="hidden"/>
                                </div>
                          </div>
                          <div class="row form-group">
                                <div class="col-md-12">
                                    <input id="title2" name="title2" type="text" class="form-control input-md" placeholder="insert secondary dev"/>
                                    <input id="status2" value="secondary" type="hidden"/>
                                </div>
                          </div>
                                    <input id="color" name="color" value="#094cb7" type="hidden"/>
                                    <input id="color2" name="color2" value="#6298ef" type="hidden"/>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <div class="error"></div>
                        <form class="form-horizontal" id="crud-form">
                        <input type="hidden" id="start">
                        <input type="hidden" id="end">
                          <div class="row form-group">
                                <div class="col-md-4">
                                    <input id="title_update" name="title_update" type="text" class="form-control input-md" placeholder="nama" readonly="true"/>
                                    <!-- <input id="status" name="status" type="text" hidden="true"/> -->
                                </div>
                                <div class="text-center col-md-4"><img style="height:40px; width:160px" src="<?php echo base_url();?>assets/img/arrow.png" class="img-rounded" alt="Cinque Terre"></div>
                                <div class="col-md-4">
                                    <input id="dev_sebelumnya" name="dev_sebelumnya" type="text" class="form-control input-md" placeholder="nama"/>
                                </div>
                          </div>
                                  <textarea class="form-control" id="description" name="description" placeholder="keterangan"></textarea>
                                    <!-- <input id="color" name="color" type="text" value="#ff8000" hidden="true"/>
                                    <input id="color2" name="color2" type="text" value="#ff9900" hidden="true"/> -->
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
	</div>
    </body>
</html>
