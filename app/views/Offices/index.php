<h1>Offices</h1>
<div class="location">
    <?php foreach ($country as $item):?>
    <div class="location__country"><?=$item['country_name']?></div>
    <?php endforeach;?>
</div>
<?php debug($country);?>
<?php debug($post_office);?>
<script src="/js/geo.js"></script>
<script>
    $('#send').click(function (){
        $.ajax ({
            url: '/offices/geooffice',
            type: 'post',
            data: {'id': 2},
            success: function (res) {
                console.log(res);
            },
            error: function () {
                alert("Error");
            }

        });
    });
</script>
