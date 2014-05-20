<form accept-charset="UTF-8" id="user-login-form" method="post" action="/node?destination=node">
    <div >
        <div >
            <div style="width:163px;float:right;">
                <div style="float:left;">Логин</div>
                <div style="float:left;">
                    <input type="text" name="name" id="edit-name">
                    <div class="txt-field">
                        <a href="/user/register">Регистрация</a>
                    </div>
                </div>
            </div>
            <div style="width:163px;float:right;margin-left:30px;">
                <div style="float:left;">Пароль</div><br/>
                <div style="float:left;">
                    <input type="password" name="pass" id="edit-pass">
                    <input type="hidden" value="" name="form_build_id">
                    <input type="hidden" value="user_login_block" name="form_id">
                    <div class="txt-field">
                        <a href="/user/password">Забыли пароль?</a>
                        <input type="submit" class="form-submit" value="Войти" name="op" id="edit-submit">
                    </div>
                </div>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
</form>