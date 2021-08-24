 <footer class="mt-5">
      <div class="container">
	<nav class="navbar" id="footer">
		<div class="container">
			<p><center>Copyright &copy; All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Devopsraj</a></center></p>
		</div>
	</nav>
</div>
</footer>
 <!-- Bootstrap scripts! -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  <script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
 <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <!-- Scripts -->
    <script src="<?php echo ASSETS_PATH;?>js/admin.js"></script>
    <script>
      $(document).ready(function() {
      $('#userTable').DataTable( {
        responsive: true
      });
      $('#orderTable').DataTable( {
        responsive: true
      });
     
    });
   
</script>
<script type="text/javascript">$(document).ready(function() {
    $('#datatable').dataTable();
    
     $("[data-toggle=tooltip]").tooltip();
    
} );
</script>
</body></html>