
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <a class="navbar-brand" href="<?= base_url(); ?>" style="font-size:0.95em">
            <img src="<?= base_url('assets/x_promo/minigolf_chemnitz_logo.svg') ?>" width="34" height="34" class="d-inline-block align-bottom" alt="Adventure Minigolf Chemnitz">
            Adventure Minigolf Chemnitz
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('oeffnungszeiten'); ?>">Öffnungszeiten</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('preise'); ?>">Preise</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Angebote</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item disabled" href="<?= base_url('angebote'); ?>">Übersicht</a>
                        <a class="dropdown-item disabled" href="<?= base_url('kindergeburtstag'); ?>">Kindergeburtstag</a>
                        <a class="dropdown-item disabled" href="<?= base_url('angebote/junggesellenabschied'); ?>">Junggesellenabschied</a>
                        <a class="dropdown-item disabled" href="<?= base_url('angebote/partyraeume'); ?>">Partyräume</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('buchung'); ?>">Jetzt buchen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://shop.spielcenter-chemnitz.de/index.php?id_category=13&controller=category" target="_blank">Gutscheine</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('hygienekonzept'); ?>">Hygienekonzept</a>
                </li>
            </ul>
        </div>
    </nav>