<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in to continue to Admin Panel</h1>
            <div class="account-wall">
                <img class="profile-img" src="<?=base_url('assets/img/access-key.png')?>"
                     alt="">
                <form class="form-signin" action="<?=base_url('admin/auth')?>" method="post">
                    <input type="text" class="form-control" placeholder="Email" name="email" required autofocus>
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                        Sign in</button>
                    <label class="checkbox pull-left">
                    </label>
                </form>
                <?=$this->session->flashdata('error')?>
            </div>
        </div>
    </div>
</div>