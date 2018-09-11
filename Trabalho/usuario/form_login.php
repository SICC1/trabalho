<?php
include '../cabecalho.php';
?>
<div class='container'>
    <div class='header clearfix'>
        <nav>
            <ul class='nav nav-pills float-right'>
                <li class='nav-item'>
                    <a class='nav-link' href=''><span class='sr-only'>(current)</span></a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href=''></a>
                </li>
            </ul>
        </nav>
        <h3 class='text-muted'></h3>
    </div>
</div>
<div class="col-md-8 container-fluid" id="div-cor1">
    <form method="post" action="logar.php">
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label>Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                    </div>
                    <input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="col-md-12" align="center">
                <button class="btn btn-primary" type="submit">Logar</button>
                <button class="btn btn-primary" type="reset">Limpar</button>
            </div>
        </div>
    </form>

</div>
<?php
include '../rodape.php';
