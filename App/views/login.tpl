<section id="login">
    <div class="container">
        <div class="row">
            <div class="offset-3 col-6">
                <div class="message">{if !empty($message)}{$message}{/if}</div>
            </div>
            {if $isAdmin !== true}
                <div class="offset-3 col-6">
                    <form action="/login/auth/" method="post" class="formJs">
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="login">Login</label>
                                <input type="text" class="form-control form-control-sm validateInputJs" name="login"
                                       id="login" placeholder="Login">
                            </div>
                            <div class="form-group col-12">
                                <label for="pwd">Password</label>
                                <input type="password" class="form-control form-control-sm validateInputJs" name="pwd"
                                       id="pwd" placeholder="Password">
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary submitFormJs">Войти</button>
                    </form>
                </div>
            {/if}
        </div>
    </div>
</section>