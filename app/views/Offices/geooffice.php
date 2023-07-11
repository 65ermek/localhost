<div class="location" style="cursor: pointer"> Выберите страну
    <?php foreach ($country as $item):?>
        <div class="location__country" style="display:block;"><?=$item['country_name']?></div>
    <?php endforeach;?>
</div>
