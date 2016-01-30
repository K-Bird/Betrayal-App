<?php

$GetActivePlayers = db_query("SELECT * FROM `active_characters`");
             while ($activePlayerRow = $GetActivePlayers->fetch_assoc()) {
                $CharID = $activePlayerRow['Character_ID'];
                
                $GetCharName = db_query("SELECT `Persona` FROM `characters_list` WHERE Row_ID='{$CharID}'");
                $valueOfName = $GetCharName->fetch_assoc();
                $name = $valueOfName['Persona'];
                
                

echo '<div id="deadCharacter'.$CharID.'" class="modal fade deadModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 id="clamCharTitle" class="modal-title">'.$name.' Has Died?</h4>
      </div>
      <form role="form" class="deadForm" data-charid="'.$CharID.'"">
        <div class="modal-body">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
          <button type="submit" class="btn btn-success">Yes</button>
          <input type="hidden" name="charID" value="'.$CharID.'" />
          <input type="hidden" name="attrNum" value="" />
          <input type="hidden" name="attr" value="" />
        </div>
      </form>
    </div>
  </div>
</div>';


}