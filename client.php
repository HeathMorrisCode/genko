<?
require_once('includes.php');

include('header.php');


$db = new Database;
$pdo = $db->connect();

// $display = new Display;
$client_information = $db->collectClientInfo($pdo,$_GET["client_id"]);

?>




<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
  <h1>Genko</h1>



  <h2><?php echo $client_information["client_name"]; ?>   </h2>
  <div class="row top-buffer">
    <div class="col-md-4">
      <label for="clientName">Client Name</label>
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">@</span>
        <input id="clientName" type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" value="<?php echo $client_information["client_name"]; ?>">
      </div>
    </div>
    <div class="col-md-4">
      <label for="rateInput">Client Rate</label>
      <div class="input-group"> 
        <span class="input-group-addon">$</span>
        <input id="rateInput" type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="<?php echo $client_information["client_rate"]; ?>">
      </div>      
    </div>    
    <div class="col-md-4">   
    </div>
  </div>

  <div class="row top-buffer">
    <div class="col-md-8">
      <label for="exampleTextarea">Client Description</label>
      <div class="form-group">
        <textarea class="form-control" id="exampleTextarea" rows="5"><?php echo $client_information["client_description"]; ?></textarea>
      </div>   
    </div>
    <div class="col-md-4">    
    </div>   
  </div>





<button type="button" class="btn btn-success">Save</button>
<button type="button" class="btn btn-secondary">Cancel</button>
</main>




















<? include('footer.php');


