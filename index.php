<?php 
include 'header.php'; 
?>

<div class="container">

	<div class="clearfix"></div>
	<div class="lines"></div>

	<!-- Slider Gelecek -->
	<?php include 'slider.php'; ?>



</div>
<div class="f-widget featpro">
	<div class="container">
		<div class="title-widget-bg">
			<div class="title-widget">Öne Çıkan Kitaplar</div>
			<div class="carousel-nav">
				<a class="prev"></a>
				<a class="next"></a>
			</div>
		</div>
		<div id="product-carousel" class="owl-carousel owl-theme">

			<?php 
			$urunsor=$db->prepare("SELECT * FROM urun where urun_durum=:urun_durum and urun_onecikar=:urun_onecikar");
			$urunsor->execute(array(
				'urun_durum' => 1,
				'urun_onecikar' => 1
				));

			
			while($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) {


					$urun_id=$uruncek['urun_id'];
					$urunfotosor=$db->prepare("SELECT * FROM urunfoto where urun_id=:urun_id order by urunfoto_sira ASC limit 1 ");
					$urunfotosor->execute(array(
						'urun_id' => $urun_id
						));

					$urunfotocek=$urunfotosor->fetch(PDO::FETCH_ASSOC);

					
				?>



				<div class="item">
					<div class="productwrap">
						<div class="pr-img">
							<div class=""></div>
							<a href="urun-<?=seo($uruncek["urun_ad"]).'-'.$uruncek["urun_id"]?>"><img width="200" height="300" src="<?php echo $urunfotocek['urunfoto_resimyol'] ?>" alt="" ></a>
							<div class="pricetag blue"><div class="inner"><span><?php echo $uruncek['urun_fiyat'] ?> TL</span></div></div>
						</div>
						<span class="smalltitle"><a href="urun-<?=seo($uruncek["urun_ad"]).'-'.$uruncek["urun_id"]?>"><?php echo $uruncek['urun_ad'] ?></a></span>
						<span class="smalldesc">Ürün Kodu.: <?php echo $uruncek['urun_id'] ?></span>
					</div>
				</div>

				<?php } ?>

			</div>
		</div>
	</div>



	<div class="container">
		<div class="row">
			<div class="col-md-9"><!--Main content-->
				<div class="title-bg">
					<div class="title">Hakkımızda Bilgi</div>
				</div>
				<p class="ct">
					<?php 
					$hakkimizdasor=$db->prepare("SELECT * FROM hakkimizda where hakkimizda_id=:id");
					$hakkimizdasor->execute(array(
						'id' => 0
						));
					$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);

					echo substr($hakkimizdacek['hakkimizda_icerik'],0,1000) ?>
				</p>

				<a href="hakkimizda" class="btn btn-default btn-red btn-sm">Devamını Oku</a>

				<div class="title-bg">
					<div class="title">Lastest Products</div>
				</div>
				<div class="row prdct"><!--Products-->
					<div class="col-md-4">
						<div class="productwrap">
							<div class="pr-img">
								<a href="kategoriler"><img width="200" height="300" src="https://content.babil.com/urun/5aeea7656f3e4f1aa581c14e6ee75f59/Front/Big" alt="" ></a>
								<div class="pricetag on-sale"><div class="inner on-sale"><span class="onsale"><span class="oldprice">22.5TL</span>18TL</span></div></div>
							</div>
							<span class="smalltitle"><a href="product.htm">Sarmal</a></span>
							<span class="smalldesc">Ürün kodu: 10</span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="productwrap">
							<div class="pr-img">
								<a href="kategoriler"><img width="200" height="300" src="https://i.dr.com.tr/cache/500x400-0/originals/0000000107800-1.jpg" alt="" ></a>
								<div class="pricetag on-sale"><div class="inner on-sale"><span class="onsale"><span class="oldprice">13.5TL</span>9TL</span></div></div>
							</div>
							<span class="smalltitle"><a href="product.htm">Sineklerin Tanrısı</a></span>
							<span class="smalldesc">Ürün Kodu: 8</span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="productwrap">
							<div class="pr-img">
								<a href="kategoriler"><img width="200" height="300" src="https://i.dr.com.tr/cache/500x400-0/originals/0000000143077-1.jpg" alt="" ></a>
								<div class="pricetag on-sale"><div class="inner on-sale"><span class="onsale"><span class="oldprice">57TL</span>38TL</span></div></div>
							</div>
							<span class="smalltitle"><a href="product.htm">Kurtlara Koşan Kadınlar</a></span>
							<span class="smalldesc">Ürün kodu: 5</span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="productwrap">
							<div class="pr-img">
								<a href="kategoriler"><img width="200" height="300" src="https://i.dr.com.tr/cache/500x400-0/originals/0000000562120-1.jpg" alt="" ></a>
								<div class="pricetag on-sale"><div class="inner on-sale"><span class="onsale"><span class="oldprice">28.5TL</span>19TL</span></div></div>
							</div>
							<span class="smalltitle"><a href="product.htm">Zamanın Kısa Tarihi</a></span>
							<span class="smalldesc">Ürün kodu: 3</span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="productwrap">
							<div class="pr-img">
								<a href="kategoriler"><img width="200" height="300" src="https://i.idefix.com/cache/500x400-0/originals/0001874376001-1.jpg" alt="" ></a>
								<div class="pricetag on-sale"><div class="inner on-sale"><span class="onsale"><span class="oldprice">22.5TL</span>15TL</span></div></div>
							</div>
							<span class="smalltitle"><a href="product.htm">Bir Nefes Gibi</a></span>
							<span class="smalldesc">Ürün kodu: 2</span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="productwrap">
							<div class="pr-img">
								<a href="kategoriler"><img width="200" height="300" src="https://i.dr.com.tr/cache/500x400-0/originals/0000000204001-1.jpg" alt="" ></a>
								<div class="pricetag on-sale"><div class="inner on-sale"><span class="onsale"><span class="oldprice">13.5TL</span>9TL</span></div></div>
							</div>
							<span class="smalltitle"><a href="product.htm">Devlet-Hasan Ali Yücel Klasikleri</a></span>
							<span class="smalldesc">Ürün kodu: 6</span>
						</div>
					</div>
				</div><!--Products-->
				<div class="spacer"></div>
			</div><!--Main content-->

			<!-- Siderbar buraya gelecek -->
			<?php include 'sidebar.php' ?>
		</div>
	</div>

	<?php include 'footer.php'; ?>