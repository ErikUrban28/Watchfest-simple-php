<div class="container-fluid">
    <?php
    /** @var User $data */
    ?>
    <div class="row m-2 d-flex justify-content-center">
        <div class="col-sm-8 col-md-5">

            <h1 class="display-1 text-center">Editacia</h1>

            <div class="text-center text-danger mb-3">
                <?= @$data['message'] ?>
            </div>
            <form method="post" action="?c=auth&a=register">
                <?php
                /** @var User $data */

                use App\Models\User;

                if ($data['id']) { ?>
                    <input type="hidden" name="id" value="<?= $data['id'] ?>"
                <?php } ?>


                <div class="form-outline m-4">
                    <label class="d-block mt-3">
                        <input type="text" name="login" placeholder="Novy Login" class="form-control"required autofocus minlength="3" maxlength="29">
                    </label>
                    <label class="d-block mt-3">
                        <input type="email" name="email" placeholder="Novy Email" class="form-control"required autofocus minlength="6" maxlength="29">
                    </label>
                    <label class="d-block mt-3">
                        <input type="password" name="password" placeholder="Nove Heslo" class="form-control"required autofocus minlength="6" maxlength="36">
                    </label>
                    <button type="submit" name="edit" class="btn btn-primary btn-block reg mt-3">Editovat</button>
                </div>


            </form>
        </div>
    </div>
</div>


