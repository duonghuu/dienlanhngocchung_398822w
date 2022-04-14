<div class="header">
	<div class="header-top">
		<div class="wrap-content d-flex align-items-center justify-content-between">
			<div class="header-left d-flex align-items-center">
			<ul class="social social-header list-unstyled p-0 m-0">
				<?php foreach ($social as $k => $v) { ?>
					<li class="d-inline-block align-top mr-1">
						<a href="<?= $v['link'] ?>" target="_blank">
							<?= $func->getImage(['sizes' => '', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
						</a>
					</li>
				<?php } ?>
			</ul>
			<div class="search1 w-clear">
                    <input type="text" id="keyword" placeholder="<?=nhaptukhoatimkiem?>" onkeypress="doEnter(event,'keyword');"/>
                    <p onclick="onSearch('keyword');"><i class="fas fa-search"></i></p>
            </div>
			</div>
			<p class="info-header"><img src="images/logo_phone.png" alt="">Hotline: <?= $optsetting['hotline'];?> - <?= $optsetting['phone'];?></p>
		</div>		
	</div>
	</div>
	
</div>