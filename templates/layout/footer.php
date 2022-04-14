<div class="footer">
    <div class="footer-article">
        <div class="wrap-content">
            <div class="row">
                <div class="footer-news01">
                    <a href="#">
                        <?= $func->getImage(['sizes' => '156x140x1', 'upload' => UPLOAD_NEWS_L, 'image' =>$footer['photo'], 'alt' => $setting['name' . $lang]]) ?>
                    </a>
                    <p>Điện lạnh ngọc trung</p>
                </div>
                <div class="footer-news02 col-sm-2">
                    <h2 class="footer-title">Điện lạnh ngọc trung</h2>
                    <ul class="footer-ul">
                        <div class="footer-info"><?= htmlspecialchars_decode($footer['content' . $lang]) ?></div>
                    </ul>
                </div>
                <div class="footer-news03 col-sm-3">
                    <h2 class="footer-title03">Chính sách hỗ trợ</h2>
                    <ul class="footer-ul03">
                        <?php foreach($policy as $v) { ?>
                            <li><a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="footer-news04 col-sm-3">
                    <h2 class="footer-title04">Fanpage facebook</h2>
                    <?=$addons->set('fanpage-facebook', 'fanpage-facebook', 2);?>
                </div>
            </div>
            <div class="wrap-content01">
                <div class="footer-copyright01 col-md-6">Copyright © 2022 Điện Lạnh Ngọc Chung - Chuyên Nghiệp. Design by Nina Co., Ltd</div>
            </div>
        </div>
    </div>
    <?= $addons->set('footer-map', 'footer-map', 6); ?>
    <?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>
</div>
<a class="btn-zalo btn-frame text-decoration-none" target="_blank" href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'zl.png', 'alt' => 'Zalo']) ?></i>
</a>
<a class="btn-phone btn-frame text-decoration-none" href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'hl.png', 'alt' => 'Hotline']) ?></i>
</a>