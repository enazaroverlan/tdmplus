<?php
/**
 * Created by PhpStorm.
 * User: Эрлан
 * Date: 15.07.2016
 * Time: 20:23
 */
?>
<?php if(isset($_REQUEST['message'])): ?>
    <div class="col-lg-offset-3">
        <div class="alert alert-danger fade in">
            <?php echo($_REQUEST['message']); ?>
        </div>
    </div>
<?php endif; ?>
<div class="login_form col-lg-offset-3">
    <form class="form-horizontal" role="form" action="/tdm/login" method="post">
        <div class="form-group">
            <label for="Login" class="col-sm-2 control-label">Логин</label>
            <div class="col-sm-10">
                <input type="text" name="user_login" class="form-control" id="Login" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Пароль</label>
            <div class="col-sm-10">
                <input type="password" name="user_password" class="form-control" id="password" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Войти</button>
            </div>
        </div>
    </form>
</div>
