
<?php

$GetActivePlayers = db_query("SELECT * FROM `active_characters` Where PlayedBy = ''");
             while ($activePlayerRow = $GetActivePlayers->fetch_assoc()) {
                $CharID = $activePlayerRow['Character_ID'];
                
                $GetCharName = db_query("SELECT `Persona` FROM `characters_list` WHERE Row_ID='{$CharID}'");
                $valueOfName = $GetCharName->fetch_assoc();
                $name = $valueOfName['Persona'];
                
                

echo '<div id="claimCharacter'.$CharID.'" class="modal fade claimModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 id="clamCharTitle" class="modal-title">Claim '.$name.'?</h4>
      </div>
      <form role="form" action="ajax/claim_name_then_view.php" method="post">
        <div class="modal-body">
          <label>Enter Your Name:</label>
          <input name="playerName" class="form-control" type=text />
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Do Not Claim Character</button>
          <button type="submit" class="btn btn-primary">Claim Character</button>
          <input type="hidden" name="charID" value="'.$CharID.'" />
        </div>
      </form>
    </div>
  </div>
</div>';


}