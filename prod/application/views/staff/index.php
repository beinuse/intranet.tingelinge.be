<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Personeel
            <small>Overzicht</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>dashboard/view"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Personeel</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Status</th>
                        <th>Naam</th>
                        <th>Job titel</th>
                        <th>GSM</th>
                        <th>Email</th>
                        <th>Geboortedatum</th>
                        <th>In dienst</th>
                    </tr>

                    <?php foreach($staff as $staff) : ?><br />
                    <tr>
                        <td><?php echo $staff['StaffID']; ?></td>

                        <?php 
                            switch($staff['Status']) {
                            case 0:
                                 echo '<td><span class="label label-danger">Uit dienst</span></td>';
                            break;

                            case 1:
                                 echo '<td><span class="label label-success">In dienst</span></td>';
                            break;

                            case 2:
                                 echo '<td><span class="label label-warning">Ziekte</span></td>';
                            break;

                            case 3:
                                 echo '<td><span class="label label-warning">Zwangerschap</span></td>';
                            break;

                            default:
                                echo '<td><span class="label label-warning">ERROR</span></td>';
                            }
                        ?>
                 
                        <td><a href="<?php echo site_url('/staff/view/' .$staff['StaffID']); ?>"><?php echo $staff['Firstname'] .'&nbsp;'. $staff['Lastname']; ?></a></td>

                        <?php
                            switch($staff['JobTitle']) {
                            case 1:
                                echo '<td>Zaakvoerder</td>';
                            break;

                            case 2:
                                echo '<td>Algemeen verantwoordelijke</td>';
                            break;

                            case 3:
                                echo '<td>Pedagogisch verantwoordelijke</td>';
                            break;

                            case 4:
                                echo '<td>Kindverzorgster</td>';
                            break;

                            case 5:
                                echo '<td>Jobstudent</td>';
                            break;

                            case 6:
                                echo '<td>Stagair</td>';
                            break;
                            }
                        ?>
                        
                        <td><?php echo $staff['PhoneMobile']; ?></td>
                        <td><?php echo $staff['EmailWork']; ?></td>
                        <td><?php echo $staff['Birthday']; ?></td>
                        <td><?php echo $staff['DateInService']; ?></td>
                    </tr>
                    <?php endforeach ?>

                    <tr>
                        <td colspan="8" align="right">
                            <a href="<?php echo site_url('/staff/create/'); ?>" class="btn btn-primary">Personeelslid aanmaken</a>
                        </td>
                    </tr>
                </table>
                     
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->