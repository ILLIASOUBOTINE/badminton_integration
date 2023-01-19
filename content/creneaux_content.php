<?php
   include('./data/planning.php');
   $dayT = getdate()["wday"];
   $index = 1;
?>
<div class="container">
    <section class="page-section cta">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner bg-faded text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">Planning</span>
                        <span class="section-heading-lower">Jeu Libre</span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <?php foreach($array as $key=>$value):?>
                        <?php if ($index == $dayT ) {
                            echo'<li class="list-unstyled-item list-hours-item d-flex today">'.
                            $key.
                            '<span class="ms-auto">'.$value .'</span>';
                        // var_dump($index);

                        }else {
                            echo'<li class="list-unstyled-item list-hours-item d-flex">'.
                            $key.
                            '<span class="ms-auto">'.$value .'</span>';
                        }
                        $index++;
                        ?>

                        <?php endforeach?> -->
                    </ul>
                    <p class="address mb-2">
                        <em>
                            <strong>1116 Orchard Street</strong>
                            <br />
                            Golden Valley, Minnesota
                        </em>
                    </p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11555.572499282072!2d3.8658873532177784!3d43.60876684410554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6afa7ec346689%3A0x2becf125d7e27f7c!2sPAUL!5e0!3m2!1sru!2sfr!4v1672841603739!5m2!1sru!2sfr"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    <p class="mb-0">
                        <small><em>Call Anytime</em></small>
                        <br />
                        (317) 585-8468
                    </p>
                </div>
            </div>
        </div>
</div>
</section>