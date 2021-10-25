<?php if (isset($_SESSION['user'])) header("Location: " . BASEPATH . "/cron") ?>
<div id="login-form" class="div-grid-login">
    <form class="centered-form" id="login" action="<?php echo BASEPATH . "/auth/login" ?>" method="post">
        <div class="box-form">
            <h1>Cron Master Login</h1>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-login">Submit</button>
        </div>
    </form>
</div>