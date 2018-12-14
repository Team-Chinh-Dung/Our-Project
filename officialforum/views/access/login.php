<?php 
    $page_title = 'Đăng nhập';
 ?>
 <div class='col-sm-6 col-md-4 col-md-offset-4'>
    <div class='account-wall'>
        <div id='my-tab-content' class='tab-content'>
                <div class='tab-pane active' id='login'>
                    <img class='profile-img' src='libs/login_icon.png'>
                    <form class='form-signin' action='' method='post'>
                        <input type='text' name='email' class='form-control' placeholder='Email' required autofocus />
                        <input type='password' name='password' class='form-control' placeholder='Mật khẩu' required />
                        <input type='submit' class='btn btn-lg btn-primary btn-block' value='Đăng nhập' />
                        <div class='margin-1em-zero text-align-center'>
                            <a href='{$home_url}manager/forgot_password.php'>Quên mật khẩu?</a>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>