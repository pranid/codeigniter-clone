<?php $this->load->view('template/viw_header'); ?>
<?php
if ($menu != null) {
    $this->load->view($menu);
}
?>
<?php $this->load->view($content); ?>
<?php $this->load->view('template/viw_footer'); ?>