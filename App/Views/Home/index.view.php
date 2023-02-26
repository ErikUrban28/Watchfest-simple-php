
<div class="row">
    <div class="col d-flex justify-content-md-center o-mne-nadpis">
        <h1 class="display-1 ">Vitajte na stranke WatchFest</h1>
    </div>
</div>

<div class="row text">
    <div class="col-md-9 col-xl-7 col-xxl-6">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Accusantium alias cumque ea nihil nisi perferendis quia?
            Ducimus, eos, magnam molestiae natus nemo neque perspiciatis quasi rerum saepe sed ut veniam?
            Culpa cupiditate eligendi quam.
            Dolorem eveniet iure magni neque numquam optio quae quia reprehenderit tempora tenetur.
            Accusamus minima minus officia placeat repellendus repudiandae soluta, ullam!
            Blanditiis consectetur magnam quaerat tenetur.

            Accusamus, at atque beatae consectetur cumque delectus deserunt dicta eius eos eveniet
            excepturi ipsa iste, iusto laudantium modi, molestiae mollitia nam nobis perspiciatis possimus p
            raesentium ratione recusandae similique temporibus vero!

            Aperiam at consectetur debit
            is deserunt dolor ducimus, eligendi error facilis, illum ipsam ipsum itaque iure maxime neque nisi,
            nobis nostrum perferendis quas quia quis reiciendis rerum suscipit tempora totam veritatis.
        </p>
    </div>
</div>

<div class="row carousel ">
    <div class="col-sm-8 col-lg-6 col-xxl-4 ">
        <div class="row m-2">

            <div id="landing" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#landing" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#landing" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/public/images/cinema.jpg" alt="cinema" class="d-block w-100">
                        <div class="carousel-caption ">
                            <h3>Filmy</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/public/images/tv_shows_streaming.jpg" alt="tv-shows" class="d-block" style="width:100%">
                        <div class="carousel-caption d">
                            <h3>Serialy</h3>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#landing" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#landing" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    </div>
</div>
<div class="row ">
    <div class="col buttons ">
        <a href="?c=auth&a=register" class="btn btn-primary registerbtn">Registracia</a>

        <?php /** @var \App\Core\IAuthenticator $auth */
        if($auth->isLogged()) {?>
        <a href="?c=auth&a=logout"  class="btn btn-secondary loginbtn">Odlhasenie</a>
        <?php }else { ?>
            <a href="<?= \App\Config\Configuration::LOGIN_URL ?>" class="btn btn-secondary loginbtn">Prihlasenie</a>
        <?php } ?>
    </div>
</div>