<?php foreach ($slatkisi as $slatkis) : ?>
    <div>
        <div>
            <img src="/assets/img/<?php echo $slatkis->slatkis_id, '/', $slatkis->slika?>"
                alt="slatkis" />
        </div>
        <div>
            <?php echo $slatkis->naziv?>
        </div>
    </div>
<?php endforeach; ?>