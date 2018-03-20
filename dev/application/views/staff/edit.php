<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $staff['Lastname'] .' '. $staff['Firstname'];?>
            <small>aanpassen</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>dashboard/view"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Personeel</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="col-md-12">
            <!-- general form elements -->
            
            <!-- form validation -->
            <?php echo validation_errors(); ?><br />
            
            <div class="box box-primary">
                <!-- form start -->
                <?php echo form_open('staff/update'); ?>
                    <input type="hidden" name="StaffID" value="<?php echo $staff['StaffID']; ?>">
                    <div style="padding: 10px;">
                        <table cellpadding="3" cellspacing="10" width="100%" border="0">
                            <tr>
                                <td>
                                    <br /><label>Achternaam (*)</label>
                                    <input type="text" class="form-control" name="Lastname" value="<?php echo $staff['Lastname']; ?>">
                                </td>
                                <td>
                                    &nbsp; <br /><label>Voornaam (*)</label>
                                    &nbsp; <input type="text" class="form-control" name="Firstname" value="<?php echo $staff['Firstname']; ?>">
                                </td>
                                <td>
                                    &nbsp; <br /><label>Functie (*)</label>
                                    <?php
                                        switch($staff['JobTitle']) {
                                        case 1:
                                            echo '<select class="form-control" name="JobTitle">';
                                                echo '<option value="1" selected>Zaakvoerder</option>';
                                                echo '<option value="2">Algemeen verantwoordelijke</option>';
                                                echo '<option value="3">Pedagogische verantwoordelijke</option>';
                                                echo '<option value="4">Kindverzorgster</option>';
                                                echo '<option value="5">Jobstudent</option>';
                                                echo '<option value="6">Stagair</option>';
                                            echo '</select>';
                                        break;

                                        case 2:
                                            echo '<select class="form-control" name="JobTitle">';
                                                echo '<option value="1">Zaakvoerder</option>';
                                                echo '<option value="2" selected>Algemeen verantwoordelijke</option>';
                                                echo '<option value="3">Pedagogische verantwoordelijke</option>';
                                                echo '<option value="4">Kindverzorgster</option>';
                                                echo '<option value="5">Jobstudent</option>';
                                                echo '<option value="6">Stagair</option>';
                                            echo '</select>';
                                        break;

                                        case 3:
                                            echo '<select class="form-control" name="JobTitle">';
                                                echo '<option value="1">Zaakvoerder</option>';
                                                echo '<option value="2">Algemeen verantwoordelijke</option>';
                                                echo '<option value="3" selected>Pedagogische verantwoordelijke</option>';
                                                echo '<option value="4">Kindverzorgster</option>';
                                                echo '<option value="5">Jobstudent</option>';
                                                echo '<option value="6">Stagair</option>';
                                            echo '</select>';
                                        break;

                                        case 4:
                                            echo '<select class="form-control" name="JobTitle">';
                                                echo '<option value="1">Zaakvoerder</option>';
                                                echo '<option value="2">Algemeen verantwoordelijke</option>';
                                                echo '<option value="3">Pedagogische verantwoordelijke</option>';
                                                echo '<option value="4" selected>Kindverzorgster</option>';
                                                echo '<option value="5">Jobstudent</option>';
                                                echo '<option value="6">Stagair</option>';
                                            echo '</select>';
                                        break;

                                        case 5:
                                            echo '<select class="form-control" name="JobTitle">';
                                                echo '<option value="1">Zaakvoerder</option>';
                                                echo '<option value="2">Algemeen verantwoordelijke</option>';
                                                echo '<option value="3">Pedagogische verantwoordelijke</option>';
                                                echo '<option value="4">Kindverzorgster</option>';
                                                echo '<option value="5" selected>Jobstudent</option>';
                                                echo '<option value="6">Stagair</option>';
                                            echo '</select>';
                                        break;

                                        case 6:
                                            echo '<select class="form-control" name="JobTitle">';
                                                echo '<option value="1">Zaakvoerder</option>';
                                                echo '<option value="2">Algemeen verantwoordelijke</option>';
                                                echo '<option value="3">Pedagogische verantwoordelijke</option>';
                                                echo '<option value="4">Kindverzorgster</option>';
                                                echo '<option value="5">Jobstudent</option>';
                                                echo '<option value="6" selected>Stagair</option>';
                                            echo '</select>';
                                        break;
                                        }
                                    ?>
                                </td>
                                <td>
                                    &nbsp; <br /><label>Status (*)</label>
                                    <?php
                                        switch($staff['Status']) {
                                        case 0:
                                            echo '<select class="form-control" name="Status">';
                                                echo '<option value="0" selected>Uit dienst</option>';
                                                echo '<option value="1">In dienst</option>';
                                                echo '<option value="2">Ziekte</option>';
                                                echo '<option value="3">Zwangerschap</option>';
                                            echo '</select>';
                                        break;

                                        case 1:
                                            echo '<select class="form-control" name="Status">';
                                                echo '<option value="0">Uit dienst</option>';
                                                echo '<option value="1" selected>In dienst</option>';
                                                echo '<option value="2">Ziekte</option>';
                                                echo '<option value="3">Zwangerschap</option>';
                                            echo '</select>';
                                        break;

                                        case 2:
                                            echo '<select class="form-control" name="Status">';
                                                echo '<option value="0">Uit dienst</option>';
                                                echo '<option value="1">In dienst</option>';
                                                echo '<option value="2" selected>Ziekte</option>';
                                                echo '<option value="3">Zwangerschap</option>';
                                            echo '</select>';
                                        break;

                                        case 3:
                                            echo '<select class="form-control" name="Status">';
                                                echo '<option value="0">Uit dienst</option>';
                                                echo '<option value="1">In dienst</option>';
                                                echo '<option value="2">Ziekte</option>';
                                                echo '<option value="3" selected>Zwangerschap</option>';
                                            echo '</select>';
                                        break;
                                        }
                                    ?>
            
                                </td>
                            </tr>
                            <tr>
                                <td>         
                                    <br /><label>Adres (*)</label>
                                    <input type="text" class="form-control" name="Address" value="<?php echo $staff['Address']; ?>">
                                </td>
                                <td>         
                                    <br /><label>Postcode (*)</label>
                                    <input type="text" class="form-control" name="Zipcode" value="<?php echo $staff['Zipcode']; ?>">
                                </td>
                                <td>          
                                    <br /><label>Stad / Gemeente (*)</label>
                                    <input type="text" class="form-control" name="City" value="<?php echo $staff['City']; ?>">
                                </td>
                                <td>          
                                    <br /><label>Land (*)</label>

                                    <?php 
                                        switch($staff['Country']) {
                                        case 'BE':
                                            echo '<select class="form-control" name="Country">';
                                                echo '<option value="BE" selected>België</option>';
                                                echo '<option value="NL">Nederland</option>';
                                                echo '<option value="LUX">Luxemburg</option>';
                                                echo '<option value="DE">Duitsland</option>';
                                                echo '<option value="FR">Frankrijk</option>';
                                            echo '</select>';
                                        break;

                                        case 'NL':
                                            echo '<select class="form-control" name="Country">';
                                                echo '<option value="BE">België</option>';
                                                echo '<option value="NL" selected>Nederland</option>';
                                                echo '<option value="LUX">Luxemburg</option>';
                                                echo '<option value="DE">Duitsland</option>';
                                                echo '<option value="FR">Frankrijk</option>';
                                            echo '</select>';
                                        break;

                                        case 'LUX':
                                            echo '<select class="form-control" name="Country">';
                                                echo '<option value="BE">België</option>';
                                                echo '<option value="NL">Nederland</option>';
                                                echo '<option value="LUX" selected>Luxemburg</option>';
                                                echo '<option value="DE">Duitsland</option>';
                                                echo '<option value="FR">Frankrijk</option>';
                                            echo '</select>';
                                        break;

                                        case 'DE':
                                            echo '<select class="form-control" name="Country">';
                                                echo '<option value="BE">België</option>';
                                                echo '<option value="NL">Nederland</option>';
                                                echo '<option value="LUX">Luxemburg</option>';
                                                echo '<option value="DE" selected>Duitsland</option>';
                                                echo '<option value="FR">Frankrijk</option>';
                                            echo '</select>';
                                        break;

                                        case 'FR':
                                            echo '<select class="form-control" name="Country">';
                                                echo '<option value="BE">België</option>';
                                                echo '<option value="NL">Nederland</option>';
                                                echo '<option value="LUX">Luxemburg</option>';
                                                echo '<option value="DE">Duitsland</option>';
                                                echo '<option value="FR" selected>Frankrijk</option>';
                                            echo '</select>';
                                        break;
                                        }
                                    ?>  
                                </td>
                            </tr>
                            <tr>
                                <td>         
                                    <br /><label>GSM (*)</label>
                                    <input type="text" class="form-control" name="PhoneMobile" value="<?php echo $staff['PhoneMobile']; ?>">
                                </td>
                                <td>         
                                    <br /><label>Telefoon privé</label>
                                    <input type="text" class="form-control" name="PhoneFixed" value="<?php echo $staff['PhoneFixed']; ?>">
                                </td>
                                <td>          
                                    <br /><label>Email werk (*)</label>
                                    <input type="text" class="form-control" name="EmailWork" value="<?php echo $staff['EmailWork']; ?>">
                                </td>
                                <td>          
                                    <br /><label>Email privé</label>
                                    <input type="text" class="form-control" name="EmailHome" value="<?php echo $staff['EmailHome']; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>         
                                    <br /><label>Rijksregisternummer</label>
                                    <input type="text" class="form-control" name="SocialSecurityID" value="<?php echo $staff['SocialSecurityID']; ?>">
                                </td>
                                <td>          
                                    <br /><label>Geboortedatum</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datepicker_birthday" name="Birthday" value="<?php echo $staff['Birthday']; ?>">
                                    </div>
                                </td>
                                <td>          
                                    <br /><label>In dienst sinds</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datepicker_dateinservice" name="DateInService" value="<?php echo $staff['DateInService']; ?>">
                                    </div>
                                </td>
                                <td>          
                                    <br /><label>Uit dienst sinds</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datepicker_dateoutservice" name="DateOutervice" value="<?php echo $staff['DateOutService']; ?>">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">         
                                    <br /><label>Opmerking</label>
                                    <textarea class="form-control" name="Remarks" rows="5" value="<?php echo $staff['Remarks']; ?>"></textarea>
                                </td>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" class="box-footer" align="right">
                                    <a href="<?php echo base_url(); ?>staff" class="btn btn-primary">Annuleren</a>&nbsp;

                                    <button type="submit" class="btn btn-primary">Aanpassen</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.box-body -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->