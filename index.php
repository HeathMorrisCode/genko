<?
require_once('includes.php');

include('header.php');


$db = new Database;
$display = new Display($db->connect());
?>




<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
  <h1>Genko</h1>



  <h2>Clients</h2>
  <div class="table-responsive">
    <table class="table table-striped">
<!--       <thead>
        <tr>
          <th>Client</th>
          <th>Rate</th>
          <th>Punch</th>
          <th>Flat</th>
          <th>Edit</th>
        </tr>
      </thead> -->
      <tbody>
            <?php $display->displayAllClients(); ?>           
      </tbody>
    </table>
  </div>
</main>




















<? include('footer.php');


