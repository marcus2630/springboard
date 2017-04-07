<!-- Modal -->
<div class="modal fade" id="swap-lager" tabindex="-1" role="dialog" aria-labelledby="swap-lager">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Swap Lager</h4>
      </div>
      <div class="modal-body">
      <form>
<div class="row">
  <div class="col-lg-6">
    <div class="input-group bottom-margin">
      <input type="text" class="form-control search" placeholder="Find swapdel" >
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Søg</button>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->


<div class="row">

 <div class="col-xs-12" id="swap-lager">
  <table class="table table-bordered">
  
  <tr>
    <th class="sort unselectable" data-sort="part">Part no.</th>
    <th class="sort unselectable" data-sort="model">model</th>
    <th class="sort unselectable" data-sort="amount">Antal</th>
  </tr>
  <tbody class="list">

<?php

$sql = "SELECT * FROM stock_part";
$result = $conn->query($sql);


while($row = $result->fetch_assoc()) {

?>

  <tr>
    <td class="part"><?php echo($row['part_no'])?></td>
    <td class="model"><?php echo($row['part_name'])?></td>
    <td class="amount"><?php echo($row['part_amount'])?></td>
  </tr>
<?php } $conn->close(); ?>


  </tbody>
  </table>
 </div>
</div>


</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Luk</button>
      </div>
    </div>
  </div>
</div>

<script>
var options = {
    valueNames: [ 'part', 'model', 'pris' ]
};

var swapList = new List('swap-lager', options);
</script>