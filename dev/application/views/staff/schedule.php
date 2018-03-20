<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Personeel
            <small>Uurrooster</small>
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
         		<?php 
					$prefs = array(
                	'start_day'    => 'monday',
                	'month_type'   => 'long',
                	'day_type'     => 'short'
                	);

            		$this->load->library('calendar', $prefs);
            		echo $this->calendar->generate(2018, 4, $prefs);
            	?>	
			</div>
		</div>
	</section>
</div>