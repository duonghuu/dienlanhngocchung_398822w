<?php 
	include "config.php";

	/* Paginations */
	include LIBRARIES."class/class.PaginationsAjax.php";
	$pagingAjax = new PaginationsAjax();
	$pagingAjax->perpage = (!empty($_GET['perpage'])) ? htmlspecialchars($_GET['perpage']) : 1;
	$eShow = htmlspecialchars($_GET['eShow']);
	$idList = (!empty($_GET['idList'])) ? htmlspecialchars($_GET['idList']) : 0;
	$p = (!empty($_GET['p'])) ? htmlspecialchars($_GET['p']) : 1;
	$start = ($p-1) * $pagingAjax->perpage;
	$pageLink = "api/product.php?perpage=".$pagingAjax->perpage;
	$tempLink = "";
	$where = "";
	$params = array();

	/* Math url */
	if($idList)
	{
		$tempLink .= "&idList=".$idList;
		$where .= " and id_list = ?";
		array_push($params, $idList);
	}
	$tempLink .= "&p=";
	$pageLink .= $tempLink;

	/* Get data */
	$sql = "select name$lang, slugvi, slugen, id, photo, regular_price, sale_price, discount, type from #_product where type='san-pham' $where and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc";
	$sqlCache = $sql." limit $start, $pagingAjax->perpage";
    $items = $cache->get($sqlCache, $params, 'result', 7200);

	/* Count all data */
	$countItems = count($cache->get($sql, $params, 'result', 7200));

	/* Get page result */
	$pagingItems = $pagingAjax->getAllPageLinks($countItems, $pageLink, $eShow);
?>
<?php if($countItems) { ?>
	<!-- <div class="product_sp">
        <div class="product_maylanh">
            <div><a href="#"><img src="images/sanpham.png" alt=""></a></div>
            <div class="tenmaylanh"><a href="#" class="tensp">
                    MÁY LẠNH CŨ SHAP INVERTER 2HP
                </a></div>
            <p class="gia">Giá: <span>6.500.000 VNĐ</span></p>
        </div> -->



	<div class="product_sp">
		<?php foreach($items as $k => $v) { ?>
			<div class="product_maylanh">
				<a class="box-product text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
					<p class="pic-product scale-img">
						<?=$func->getImage(['sizes' => '185x150x2', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
					</p>
					<h3 class="tenmaylanh"><?=$v['name'.$lang]?></h3>
					<p class="gia">
						<?php if($v['discount']) { ?>
							<span class="gia">Giá: <?=$func->formatMoney($v['sale_price'])?></span>
							
						<?php } else { ?>
							<span class="price-new"><span class="giatext">Giá: </span><?=($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe?></span>
						<?php } ?>
					</p>
				</a>				
			</div>
		<?php } ?>
	</div>
	<div class="pagination-ajax"><?=$pagingItems?></div>
<?php } ?>