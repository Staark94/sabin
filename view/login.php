<?php

if(isset($_SESSION['user'])) {
    header("Location: index.php?sid" . session_id());
}
?>
<form method="post" action="login.php">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="user_email" id="exampleInputEmail1" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="user_pwd" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" name="login" value="1" class="btn btn-primary">Submit</button>
</form>