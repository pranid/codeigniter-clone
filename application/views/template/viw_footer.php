<div class="<?php if ($menu == null) {
    echo 'container';
} ?> hidden-md hidden-lg">
    <footer class="footer m-footer">
        <?php if ($menu != null): ?>
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0
                <small>(BETA)</small>
            </div>
        <?php endif; ?>
        <div class="col-xs-12 text-center hidden-md hidden-lg">
            <strong>Copyright &copy; 2015-2016 <a href="http://amis.lk">AMIS Web Solutions</a>.</strong> All rights
            reserved.
            <?php if ($menu == null): ?>
                <div class="hidden-xs">
                    <b>Version</b> 1.0
                    <small>(BETA)</small>
                </div>
            <?php endif; ?>
        </div>
    </footer>
</div>
<?php if ($menu != null): ?>
    <div class="hidden-xs">
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0
                <small>(BETA)</small>
            </div>
            <strong>Copyright &copy; 2015-2016 <a href="http://amis.lk">AMIS Web Solutions</a>.</strong> All rights
            reserved.
        </footer>
    </div>
<?php endif; ?>
<!-- jQuery 2.1.4 -->
<script src="<?= base_url(); ?>/assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src="<?= base_url(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<!-- <script src="<?= base_url(); ?>/assets/plugins/morris/morris.min.js"></script> -->
<!-- Sparkline -->
<script src="<?= base_url(); ?>/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?= base_url(); ?>/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url(); ?>/assets/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?= base_url(); ?>/assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?= base_url(); ?>/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?= base_url(); ?>/assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url(); ?>/assets/plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>/assets/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url(); ?>/assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url(); ?>/assets/dist/js/demo.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/iCheck/icheck.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url(); ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/datatables/dataTables.bootstrap.min.js"></script>

<!-- Select2 -->
<script src="<?= base_url(); ?>/assets/plugins/select2/select2.full.min.js"></script>
<!-- Base URL -->
<script type="text/javascript">
    var base_url = "<?= base_url(); ?>";
</script>
<!-- AMIS Custom Script -->
<script type="text/javascript" src="<?= base_url(); ?>/assets/dist/js/amis.js"></script>
</body>
</html>
