<div class="dichvu wrap-content">
    <div class="tieudechung">
        <p class="tieude">Dịch vụ máy lạnh <span>Ngọc chung</span></p>
        <p class="mota">Đội ngũ kỹ thuật giỏi, giàu kinh nghiệm khác phục mọi sự cố triệt để. Phục vụ 24/7 tất cả các ngày lễ tết, nhân viên nhiện tình tận tâm.</p>
    </div>
    <div class="dichvusuachua">
        <?php foreach ($servicenb as $vlist) { ?>
            <div class="dvsc1">
                <a href="<?= $vlist['slugvi'] ?>">
                    <?= $func->getImage(['sizes' => '98x85x2', 'upload' => UPLOAD_NEWS_L, 'image' => $vlist['photo'], 'alt' => $setting['name' . $lang]]) ?>
                </a>
                <a href="<?= $vlist['slugvi'] ?>">
                    <h3 class="tendv"><?= $vlist['namevi'] ?></h3>
                </a>
                <p class="motadv"><?= $vlist['descvi'] ?></p>
            </div>
        <?php } ?>
    </div>
</div>


<?php if (count($splistnb)) {
    foreach ($splistnb as $vlist) { ?>
        <div class="sanphammaylanh wrap-content">
            <div class="tieudechung">
                <p class="tieude"><?= $vlist['name' . $lang] ?></p>
                <p class="mota"><?= $vlist['desc' . $lang] ?></p>
            </div>
            <div class="paging-product-category paging-product-category paging-product-category-<?= $vlist['id'] ?>" data-list="<?= $vlist['id'] ?>"></div>
        </div>
        </div>
<?php }
} ?>

<div class="vscct">
    <div class="vscct_first wrap-content">
        <div class="vscct_second">
            <div class="main_title text-center">
                <span class="left"></span>
                <span class="main_title__link">Vì sao chọn chúng tôi</span>
                <span class="right"></span>
            </div>

            <div class="chucnangtienich">
                <?php foreach ($servicenc as $vlist1) { ?>
                    <div class="tienich">
                        <div class="chucnang">
                            <button type="button"><a href="<?= $vlist1['slugvi'] ?>">
                                    <?= $func->getImage(['sizes' => '39x39x1', 'upload' => UPLOAD_NEWS_L, 'image' => $vlist1['photo'], 'alt' => $setting['name' . $lang]]) ?>
                                </a></button>
                            <div class="motachucnang">
                                <p class="motachucnang_p1"><?= $vlist1['namevi'] ?></p>
                                <p class="motachucnang_p2"><?= $vlist1['descvi'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
        <div class="baogia">
            <p class="baogia_p1">Liên hệ báo giá</p>
            <p class="baogia_p2">Liên hệ với chúng tôi để nhận báo giá sớm nhất nhé!</p>
            <form class="validation-newsletter" novalidate method="post" action="" enctype="multipart/form-data">
                <div class="newsletter-input">
                    <input type="text" class="form-control text-sm" id="email-newsletter" name="dataNewsletter[fullname]" placeholder="<?= hovaten ?>" required />
                    <div class="invalid-feedback"><?= vuilongnhaphoten ?></div>
                </div>
                <div class="newsletter-input">
                    <input type="text" class="form-control text-sm" id="email-newsletter" name="dataNewsletter[phone]" placeholder="<?= sodienthoai ?>" required />
                    <div class="invalid-feedback"><?= vuilongnhapsodienthoai ?></div>
                </div>
                <div class="newsletter-input">
                    <input type="email" class="form-control text-sm" id="email-newsletter" name="dataNewsletter[email]" placeholder="<?= email ?>" required />
                    <div class="invalid-feedback"><?= vuilongnhapdiachiemail ?></div>
                </div>
                <div class="newsletter-input">
                    <input type="text" class="form-control text-sm" id="email-newsletter" name="dataNewsletter[address]" placeholder="<?= diachi ?>" required />
                    <div class="invalid-feedback"><?= vuilongnhapdiachi ?></div>
                </div>
                <div class="newsletter-input noidung">
                    <input type="text-area" class="form-control text-sm" id="email-newsletter" name="dataNewsletter[content]" placeholder="<?= noidung ?>" required />
                    <div class="invalid-feedback"><?= vuilongnhapnoidung ?></div>
                </div>
                <div class="newsletter-button">
                    <input type="submit" class="btn btn-sm btn-danger w-100" name="submit-newsletter" value="<?= guilienhe ?>" disabled>
                    <input type="hidden" class="btn btn-sm btn-danger w-100" name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
                </div>
            </form>
            <p class="phonelienlac"><img src="images/logo_phonefooter.png" alt=""><?= $optsetting['hotline'];?> - <?= $optsetting['phone'];?></p>
        </div>
    </div>
</div>
<div class="khachhang">
    <div class="tieudechung">
        <p class="tieude">khách hàng của chúng tôi</p>
        <p class="mota">Đội ngũ kỹ thuật giỏi, giàu kinh nghiệm khác phục mọi sự cố triệt để. Phục vụ 24/7 tất cả các ngày lễ tết, nhân viên nhiện tình tận tâm.</p>
    </div>
    <div class="khachhang_img">
        <?php foreach ($partner as $vlist2) { ?>
            <div class="khachhang_nd text-center">
                <a href="<?= $vlist2['slugvi'] ?>">
                    <?= $func->getImage(['sizes' => '250x340x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $vlist2['photo'], 'alt' => $setting['name' . $lang]]) ?>
                </a>
                <a class="khachhang_text" href="#"><?= $vlist2['namevi'] ?> </a>
            </div>
        <?php } ?>
    </div>
</div>
<div class="tintuc wrap-content">
    <div class="tintuc_sukien">
        <div class="tieudetintuc">
            <p class="tieude_tt">Tin tức sự kiện</p>
            <p class="mota_tt">Điện Lạnh Ngọc Chung Dịch vụ sửa chữa, Vệ sinh máy lạnh chuyên nghiệp</p>
        </div>
        <div class="sukientt">
            <div class="sukien">
                <?php if (count($newsnb)) {
                    $v = $newsnb[0];  ?>
                    <a href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                        <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '350x250x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                    </a>
                    <h3 class="news-shadow-name">
                        <a class="text-decoration-none transition text-split" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                    </h3>
                    <div class="news-shadow-desc text-split"><?= $v['desc' . $lang] ?></div>
                    <button type="button">Xem chi tiết</button>
                <?php } ?>
            </div>
            <div class="sk2">
                <?php foreach ($newsnb as $v) { ?>
                    <div class="sk2_1">
                        <a href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                            <?= $func->getImage(['class' => '', 'sizes' => '150x111x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        </a>
                        <div class="sk_text">
                            <h3>
                                <a class="text-decoration-none transition text-split" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                            </h3>
                            <div class="mota_sk"><?= $v['desc' . $lang] ?></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="video_clip">
        <div class="tieudetintuc">
            <p class="tieude_tt">Video clip</p>
            <p class="mota_tt">Điện Lạnh Ngọc Chung Dịch vụ sửa chữa, Vệ sinh máy lạnh</p>
        </div>
        <div>
            <div>
                <div class="video-intro">
                    <?= $addons->set('video-fotorama', 'video-fotorama', 3); ?>
                    <?php /* $addons->set('video-select', 'video-select', 4); */ ?>
                </div>
            </div>
        </div>
    </div>
</div>