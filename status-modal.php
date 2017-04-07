<!-- Modal -->
<div class="modal fade" id="status-modal" tabindex="-1" role="dialog" aria-labelledby="swap-lager">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Skift status meddelelse</h4>
      </div>
      <div class="modal-body">
        <form class="form-group" method="POST" id="status" action="post.php?post">
          <textarea class="form-control" name="msg" rows="3" style="margin-bottom:20px;"></textarea>
          <div class="form-inline">
            <div class="input-group">
              <input type="password" class="form-control" autocomplete="off" name="pin" aria-label="..." placeholder="Pinkode">
              <div class="input-group-addon">Gem som</div>
              <div class="input-group-btn">
                <button type="submit" name="submit" class="btn btn-primary" value="info">Normal</button>
                <button type="submit" name="submit" class="btn btn-success" value="success">Positivt</button>
                <button type="submit" name="submit" class="btn btn-warning" value="warning">Advarsel</button>
                <button type="submit" name="submit" class="btn btn-danger" value="danger">Super vigtigt!</button>
              </div>
            </div>
          </div>
        </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Luk</button>
        </div>
      </div>
    </div>
  </div>

