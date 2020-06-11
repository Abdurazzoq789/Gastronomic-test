<div class="img-wrap">
    <img class="lazy" data-original="<?=$model->poster->photo?>" src="<?=$model->poster->photo?>">    
    <a href='/restaurant/show/<?=$model->id?>' class="img-title">
        <p class="name"><?=$model->name?></p>
        <p class="adres"><?=$model->address?></p>
    </a>
</div>
