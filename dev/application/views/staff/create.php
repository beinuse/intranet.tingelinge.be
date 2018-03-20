<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Personeel
            <small>aanmaken</small>
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
                <?php echo form_open('staff/create'); ?>
                    <div style="padding: 10px;">
                        <table cellpadding="3" cellspacing="10" width="100%" border="0">
                            <tr>
                                <td>
                                    <br /><label>Achternaam (*)</label>
                                    <input type="text" class="form-control" name="Lastname" placeholder="Geef de achternaam in">
                                </td>
                                <td>
                                    &nbsp; <br /><label>Voornaam (*)</label>
                                    &nbsp; <input type="text" class="form-control" name="Firstname" placeholder="Geef de voornaam in">
                                </td>
                                <td>
                                    &nbsp; <br /><label>Functie (*)</label>
                                    <select class="form-control" name="JobTitle">
                                        <option value="999" selected="1">Selecteer een functie</option>
                                        <option value="Zaakvoerder">Zaakvoerder</option>
                                        <option value="Algemeen verantwoordelijke">Algemeen verantwoordelijke</option>
                                        <option value="Pedagogisch verantwoordelijke">Pedagogische verantwoordelijke</option>
                                        <option value="Kindverzorgster">Kindverzorgster</option>
                                        <option value="Jobstudent">Jobstudent</option>
                                        <option value="Stagair">Stagair</option>
                                    </select>
                                </td>
                                <td>
                                    &nbsp; <br /><label>Status (*)</label>
                                    <select class="form-control" name="Status">
                                        <option value="999" selected="1">Selecteer een status</option>
                                        <option value="0">Uit dienst</option>
                                        <option value="1">In dienst</option>
                                        <option value="2">Ziekte</option>
                                        <option value="3">Zwangerschap</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>         
                                    <br /><label>Adres (*)</label>
                                    <input type="text" class="form-control" name="Address" placeholder="Geef het adres in">
                                </td>
                                <td>         
                                    <br /><label>Postcode (*)</label>
                                    <input type="text" class="form-control" name="Zipcode" placeholder="Geef de postcode in">
                                </td>
                                <td>          
                                    <br /><label>Stad / Gemeente (*)</label>
                                    <input type="text" class="form-control" name="City" placeholder="Geef de stad of gemeente in">
                                </td>
                                <td>          
                                    <br /><label>Land (*)</label>
                                    <select class="form-control" name="Country">
                                        <option value="999" selected="1">Selecteer een land</option>
                                        <option value="BE">België</option>
                                        <option value="NL">Nederland</option>
                                        <option value="LUX">Luxemburg</option>
                                        <option value="DE">Duitsland</option>
                                        <option value="FR">Frankrijk</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>         
                                    <br /><label>GSM (*)</label>
                                    <input type="text" class="form-control" name="PhoneMobile" placeholder="Geef het GSM nummer in">
                                </td>
                                <td>         
                                    <br /><label>Telefoon privé</label>
                                    <input type="text" class="form-control" name="PhoneFixed" placeholder="Geef het prive telefoon nummer in">
                                </td>
                                <td>          
                                    <br /><label>Email werk (*)</label>
                                    <input type="text" class="form-control" name="EmailWork" placeholder="Geef het werk emailadres in">
                                </td>
                                <td>          
                                    <br /><label>Email privé</label>
                                    <input type="text" class="form-control" name="EmailHome" placeholder="Geef het privé emailadres in">
                                </td>
                            </tr>
                            <tr>
                                <td>         
                                    <br /><label>Rijksregisternummer</label>
                                    <input type="text" class="form-control" name="SocialSecurityID" placeholder="Geef het rijksregisternummer in">
                                </td>
                                <td>          
                                    <br /><label>Geboortedatum</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datepicker_birthday" name="Birthday" placeholder="Geef de geboortedatum in">
                                    </div>
                                </td>
                                <td>          
                                    <br /><label>In dienst sinds</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datepicker_dateinservice" name="DateInService" placeholder="Geef de datum in dienst in">
                                    </div>
                                </td>
                                <td>          
                                    <br /><label>Uit dienst sinds</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datepicker_dateoutservice" name="DateOutervice" placeholder="Geef de datum uit dienst in">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">         
                                    <br /><label>Opmerking</label>
                                    <textarea class="form-control" name="Remarks" rows="5" placeholder="Bijkomende opmerkingen"></textarea>
                                </td>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" class="box-footer" align="right">
                                    <a href="<?php echo base_url(); ?>staff" class="btn btn-primary">Annuleren</a>&nbsp;
                                    
                                    <button type="submit" class="btn btn-primary">Aanmaken</button>
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