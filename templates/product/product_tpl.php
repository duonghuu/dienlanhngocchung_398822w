<div class="title-main"><span><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></span></div>
<div class="content-main w-clear">
    <?php if (!empty($product)) {
        foreach ($product as $k => $v) { ?>
            <div class="product_maylanh">
                <a class="box-product text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                    <p class="pic-product scale-img">
                        <?= $func->getImage(['sizes' => '185x150x2', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                    </p>
                    <h3 class="tenmaylanh"><?= $v['name' . $lang] ?></h3>
                    <p class="gia">
                        <?php if ($v['discount']) { ?>
                            <span class="gia">Giá: <?= $func->formatMoney($v['sale_price']) ?></span>

                        <?php } else { ?>
                            <span class="price-new"><span class="giatext">Giá: </span><?= ($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe ?></span>
                        <?php } ?>
                    </p>
                </a>
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