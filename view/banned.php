<?php
    global $auth, $router;
    if($auth->getAdmin() != true) {
        header("Location: index.php?sid" . session_id());
    }
?>

<h1>Adauga jucator banat</h1>
<form method="post" class="form row" action="index.php?action=addPlayer" style="width: 800px">
    <div class="form-group col-md-4">
        <label for="jucator">Jucator</label>
        <input type="text" name="player" class="form-control" id="jucator" placeholder="Nume Jucator">
    </div>

    <div class="form-group col-md-4">
        <label for="steamid">SteamID</label>
        <input type="text" name="steamid" class="form-control" id="steamid" placeholder="Steam ID">
    </div>

    <div class="form-group col-md-4">
        <label for="admin">Admin</label>
        <input type="text" name="admin" class="form-control" id="admin" placeholder="Nume Admin">
    </div>

    <div class="form-group col-md-6">
        <label for="reason">Motiv</label>
        <input type="text" name="reason" class="form-control" id="reason" placeholder="Motiv">
    </div>

    <div class="form-group col-md-6">
        <label for="time">Durata</label>
        <input type="text" name="time" class="form-control" id="time" placeholder="Durata">
    </div>

    <div class="form-group col-md-12">
        <input type="submit" name="addPlayer" class="btn btn-block btn-success" />
    </div>
</form>