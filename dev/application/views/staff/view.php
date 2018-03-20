<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $staff['Lastname'] .' '. $staff['Firstname'];?>
            <small><Detail</Det></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>dashboard/view"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Personeel</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
                        <td width="25%"><strong>Voornaam</strong></td>
                        <td><?php echo $staff['Firstname']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Achternaam</strong></td>
                        <td><?php echo $staff['Lastname']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Adres</strong></td>
                        <td><?php echo $staff['Address']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Postcode & Stad/gemeente</strong></td>
                        <td><?php echo $staff['Zipcode'] .' '. $staff['City']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Land</strong></td>
                        <td><?php echo $staff['Country']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>GSM</strong></td>
                        <td><?php echo $staff['PhoneMobile']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Telefoon thuis</strong></td>
                        <td><?php echo $staff['PhoneFixed']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Email Werk</strong></td>
                        <td><?php echo $staff['EmailWork']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Email Prive</strong></td>
                        <td><?php echo $staff['EmailHome']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Rijksregister Nr.</strong></td>
                        <td><?php echo $staff['SocialSecurityID']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Geboortedatum</strong></td>
                        <td><?php echo $staff['Birthday']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Functie</strong></td>
                        <td><?php echo $staff['JobTitle']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Status</strong></td>
                        <?php 
                            switch($staff['Status']) {
                            case 0:
                                 echo '<td><span class="label label-danger">Uit dienst</span></td>';
                            break;

                            case 1:
                                 echo '<td><span class="label label-success">In dienst</span></td>';
                            break;

                            case 2:
                                 echo '<td><span class="label label-warning">Zwangerschap</span></td>';
                            break;

                            case 3:
                                 echo '<td><span class="label label-warning">Ziekte</span></td>';
                            break;

                            default:
                                echo '<td><span class="label label-warning">ERROR</span></td>';
                            }
                        ?>
                    </tr>
                    <tr>
                        <td><strong>In dienst sinds</strong></td>
                        <td><?php echo $staff['DateInService']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Uit dienst sinds</strong></td>
                        <td><?php echo $staff['DateOutService']; ?></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right">
                            <a href="<?php echo site_url('/staff/edit/' .$staff['StaffID']); ?>" class="btn btn-primary">Aanpassen</a> &nbsp; 
                            <a href="<?php echo base_url(); ?>staff" class="btn btn-primary">Terug</a></td>
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