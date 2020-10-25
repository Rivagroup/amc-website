<div class="jumbotron bg-primary text-white">
    <h1 class="display-4">Preise</h1>
    <!--p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p-->
</div>
    <div class="card-group">
        <div class="card shadow-sm text-dark bg-minigolf mb-3" style="width: auto;">
            <h4 class="card-header text-uppercase"><i class="fas fa-user"></i> Einzelspieler</h4>
            <div class="card-body">
                <div class="card-text text-justify d-flex flex-column">
                    <table class="table table-sm">
                        <tbody>
                            </tbody><thead>
                                <tr><th><i class="fas fa-ticket-alt"></i> Einzelspiel</th>
                                <th><i class="fas fa-coins"></i> Preis</th>
                            </tr></thead>
                            <tbody><tr>
                                <td>STANDARD</td>
                                <td>13,00 €</td>
                            </tr>
                            <tr>
                                <td>ERMÄßIGT*</td>
                                <td>11,00 €</td>
                            </tr>
                            <tr>
                                <td>KIDSCARD**</td>
                                <td>9,00 €</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer d-flex flex-column">
                <a href="<?= base_url('buchung'); ?>" class="btn btn-light mt-auto"><i class="far fa-calendar-plus"></i> Jetzt Buchen!</a>
            </div>
        </div>
        <div class="card shadow-sm text-white bg-danger mb-3" style="width: auto;">
            <h4 class="card-header text-uppercase"><i class="fas fa-user-friends"></i> Gruppen</h4>
            <div class="card-body">
                <div class="card-text text-justify d-flex flex-column">
                    <table class="table table-sm  text-white">
                        <tbody>
                            </tbody><thead>
                                <tr><th><i class="fas fa-ticket-alt"></i> Einzelspiel</th>
                                <th><i class="fas fa-coins"></i> Preis</th>
                            </tr></thead>
                            <tbody><tr>
                                <td>STANDARD</td>
                                <td>11,00 €</td>
                            </tr>
                            <tr>
                                <td>ERMÄßIGT*</td>
                                <td>9,00 €</td>
                            </tr>
                            <tr>
                                <td>KIDSCARD**</td>
                                <td>7,00 €</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer d-flex flex-column">
                <a href="<?= base_url('buchung'); ?>" class="btn btn-danger mt-auto"><i class="far fa-calendar-plus"></i> Jetzt Buchen!</a>
            </div>
        </div>
    </div>
<div class="text-muted">
<small>* Ermäßigt sind Schüler, Studenten, AZUBIs, Schwerbehinderte und Rentner.</small><br>
<small>** Kidscard ist bis zum vollendeten 15. Lebensjahr gültig.</small>
</div>