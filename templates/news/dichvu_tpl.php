<div class="title-main"><span><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></span></div>
<div class="dichvusuachua">
    <?php if (!empty($news)) {
        foreach ($news as $k => $v) { ?>
            <div class="dvsc1">
                <a href="<?= $v['slugvi'] ?>">
                    <?= $func->getImage(['sizes' => '98x85x2', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $setting['name' . $lang]]) ?>
                </a>
                <a href="<?= $v['slugvi'] ?>">
                    <h3 class="tendv"><?= $v['namevi'] ?></h3>
                </a>
                <p class="motadv"><?= $v['descvi'] ?></p>
            </div>
        <?php }
    } else { ?>
        <div class="col-12">
            <div class="alert alert-warning w-100" role="alert">
                <strong><?= khongtimthayketqua ?></strong>
            </div>
        </div>
    <?php } ?>
    <div class="clear"></div>
    <div class="col-12">
        <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
    </div>
</div>