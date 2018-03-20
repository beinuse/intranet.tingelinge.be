<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>dashboard/view"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-9 connectedSortable">

                <!-- WERKROOSTER -->
                <div class="box">
                    <div class="box-header">
                        <table width="100%">
                            <tr>
                                <td><h3 class="box-title"><strong>Werkrooster</strong></h3></td>
                                <td align="right">
                                    <a href="#" class="btn btn-primary">Aanpassen</a>&nbsp;
                                    <a href="<?php echo base_url(); ?>staff/roster" class="btn btn-primary">Weekoverzicht</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <table class="table table-striped">
                            <tr>
                                <td align="center"><strong>Status</strong></td>
                                <td align="center"><strong>Naam</strong></td>
                                <td align="center"><strong>Uren</strong></td>
                                <td align="center"><strong>Middagpauze</strong></td>
                                <td align="center"><strong>Opmerking</strong></td>
                            </tr>
                            <tr valign="center">
                                <td class="text-truncate" valign="center" align="center"><li type="square" style="color: green; font-size: 1.5em;"></li></td>
                                <td class="text-truncate"><a href="#">Mieke</a></td>
                                <td class="text-truncate" align="center">10:00-18:45</td>
                                <td class="text-truncate" align="center">13:00-14:00</td>
                                <td class="text-truncate" align="center">-</td>
                            </tr>
                            <tr>
                                <td class="text-truncate" valign="center" align="center"><li type="square" style="color: green; font-size: 1.5em;"></li></td>
                                <td class="text-truncate"><a href="#">Brenda</a></td>
                                <td class="text-truncate" align="center">09:00-17:00</td>
                                <td class="text-truncate" align="center">13:00-14:00</td>
                                <td class="text-truncate" align="center">-</td>
                            </tr>
                            <tr>
                                <td class="text-truncate" valign="center" align="center"><li type="square" style="color: red; font-size: 1.5em;"></li></td>
                                <td class="text-truncate"><a href="#">Sarah</a></td>
                                <td class="text-truncate" align="center">-</td>
                                <td class="text-truncate" align="center">-</td>
                                <td class="text-truncate" align="center">Zwangerschap</td>
                            </tr>
                            <tr>
                                <td class="text-truncate" valign="center" align="center"><li type="square" style="color: red; font-size: 1.5em;"></li></td>
                                <td class="text-truncate"><a href="#">Talitha</a></td>
                                <td class="text-truncate" align="center">-</td>
                                <td class="text-truncate" align="center">-</td>
                                <td class="text-truncate" align="center">Zwangerschap</td>
                            </tr>
                            <tr>
                                <td class="text-truncate" valign="center" align="center"><li type="square" style="color: green; font-size: 1.5em;"></li></td>
                                <td class="text-truncate"><a href="#">Karen</a></td>
                                <td class="text-truncate" align="center">06:45-15:45</td>
                                <td class="text-truncate" align="center">12:00-13:00</td>
                                <td class="text-truncate" align="center">-</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- POETSSCHEMA -->
                <div class="box">
                    <div class="box-header">
                        <table width="100%">
                            <tr>
                                <td><h3 class="box-title"><strong>Poetsschema</strong></h3></td>
                                <td align="right">
                                    <a href="#" class="btn btn-primary">Aanpassen</a>&nbsp; &nbsp;
                                    <a href="#" class="btn btn-primary">Weekoverzicht</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- /.box-header -->

                    <div class="box-body no-padding">
                        <table class="table table-striped">
                            <tr >
                                <td align="center"><strong>Datum</strong></td>
                                <td align="center"><strong>Naam</strong></td>
                                <td align="center"><strong>Taken</strong></td>
                            </tr>
                            <tr>
                                <td class="text-truncate" align="center">08/01/18</td>
                                <td class="text-truncate"><a href="#">Mieke</a></td>
                                <td class="text-truncate">Slaapkamer, Keuken</td>
                            </tr>
                            <tr>
                                <td class="text-truncate" align="center">08/01/18</td>
                                <td class="text-truncate"><a href="#">Brenda</a></td>
                                <td class="text-truncate">Hal</td>
                            </tr>
                            <tr>
                                <td class="text-truncate" align="center">08/01/18</td>
                                <td class="text-truncate"><a href="#">Sarah</a></td>
                                <td class="text-truncate">Slaapkamer 1</td>
                            </tr>
                            <tr>
                                <td class="text-truncate" align="center">08/01/18</td>
                                <td class="text-truncate"><a href="#">Talitha</a></td>
                                <td class="text-truncate">-</td>
                            </tr>
                            <tr>
                                <td class="text-truncate" align="center">08/01/18</td>
                                <td class="text-truncate"><a href="#">Karen</a></td>
                                <td class="text-truncate">-</td>
                            </tr>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </section>
            <!-- /.Left col -->

            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-3 connectedSortable">

                <!-- CHAT BOX -->
                <div class="box box-success">
                    <div class="box-header">
                        <i class="fa fa-comments-o"></i>

                        <h3 class="box-title">Chat</h3>

                        <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                            <div class="btn-group" data-toggle="btn-toggle">
                                <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                                </button>
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="box-body chat" id="chat-box">
                        <!-- chat item -->
                        <div class="item">
                            <img src="<?php echo base_url(); ?>public/dist/img/user4-128x128.jpg" alt="user image" class="online">

                            <p class="message">
                                <a href="#" class="name">
                                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
                                    Mike Doe
                                </a>
                                I would like to meet you to discuss the latest news about
                                the arrival of the new theme. They say it is going to be one the
                                best themes on the market
                            </p>
                            <div class="attachment">
                                <h4>Attachments:</h4>

                                <p class="filename">
                                    Theme-thumbnail-image.jpg
                                </p>

                                <div class="pull-right">
                                    <button type="button" class="btn btn-primary btn-sm btn-flat">Open</button>
                                </div>
                            </div>
                            <!-- /.attachment -->
                        </div>
                        <!-- /.item -->
                        <!-- chat item -->
                        <div class="item">
                            <img src="<?php echo base_url(); ?>public/dist/img/user3-128x128.jpg" alt="user image" class="offline">

                            <p class="message">
                                <a href="#" class="name">
                                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                                    Alexander Pierce
                                </a>
                                I would like to meet you to discuss the latest news about
                                the arrival of the new theme. They say it is going to be one the
                                best themes on the market
                            </p>
                        </div>
                        <!-- /.item -->
                        <!-- chat item -->
                        <div class="item">
                            <img src="<?php echo base_url(); ?>public/dist/img/user2-160x160.jpg" alt="user image" class="offline">

                            <p class="message">
                                <a href="#" class="name">
                                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
                                    Susan Doe
                                </a>
                                I would like to meet you to discuss the latest news about
                                the arrival of the new theme. They say it is going to be one the
                                best themes on the market
                            </p>
                        </div>
                        <!-- /.item -->
                    </div>
                    <!-- /.chat -->
                    <div class="box-footer">
                        <div class="input-group">
                            <input class="form-control" placeholder="Type message...">

                            <div class="input-group-btn">
                                <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->