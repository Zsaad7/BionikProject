<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('common/header'); ?>
<?php $this->load->view( $content); ?>


<?php if ($currentURL != 'listgarages') {?>
<?php $this->load->view('common/footer'); ?>
<?php } else{?>
<?php $this->load->view('common/simple_footer'); ?>


<?php } ?>