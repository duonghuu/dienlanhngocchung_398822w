<div class="title-main"><span><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></span></div>
<div class="dichvusuachua">
    <?php if (!empty($news)) {
        foreach ($news as $k => $v) { ?>
            <div class="dvsc1">

                <a class="news-image col-sm-5" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                    <span class="scale-img">
                        <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '250x200x2', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                    </span>
                </a>     
                    <h3 class="news-name">
                        <a class="text-decoration-none text-split transition" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                    </h3>
                    <p class="news-time"><?= ngaydang ?>: <?= date("d/m/Y h:i A", $v['date_created']) ?></p>
                    <div class="news-desc text-split"><?= $v['desc' . $lang] ?></div>
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