<?php require "include/header.php";?>

			<div role="main" class="main">

				<div class="slider-container rev_slider_wrapper" style="height: 800px;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 800, 'responsiveLevels': [4096,1200,992,500], 'navigation' : {'arrows': { 'enable': false }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
						<ul>
							<li data-transition="fade" class="slide-overlay slide-overlay-level-7">
								<img src="http://alimsatimcim.com/mobil/240912590.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								
							
								<h1 class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['-60','-60','-60','-85']"
									data-fontsize="['50','50','50','90']"
									data-lineheight="['55','55','55','95']">Sanayi Ürünleri Platformu</h1>

								<div class="tp-caption font-weight-light text-center"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['0','0','0','-25']"
									data-fontsize="['18','18','18','50']"
									data-lineheight="['29','29','29','40']"
									style="color: #b5b5b5;">Üreticilerin buluşma noktası </div>
				
							
								
							</li>
							<li data-transition="fade" class="slide-overlay slide-overlay-level-7">
							<img src="assets/img/makina.png" 
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">


								<div class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['-60','-60','-60','-85']"
									data-fontsize="['50','50','50','90']"
									data-lineheight="['55','55','55','95']">Zengin Ürün Çeşitliliği</div>

								<div class="tp-caption font-weight-light text-center"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['-10','-10','-10','-25']"
									data-fontsize="['18','18','18','50']"
									data-lineheight="['29','29','29','40']"
									style="color: #b5b5b5;">Seçkin firmalar ve zengin ürün kategorileri

</div>
				
								<a class="tp-caption btn btn-light-2 btn-outline btn-rounded font-weight-semibold"
									data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-hash
									data-hash-offset="85"
									href="<?php echo "uyelik";?>"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="['70','70','70','45']"
									data-whitespace="nowrap"	
									data-fontsize="['15','15','15','33']"	
									data-paddingtop="['15','15','15','40']"
									data-paddingright="['45','45','45','110']"
									data-paddingbottom="['15','15','15','40']"				 
									data-paddingleft="['45','45','45','110']">HEMEN KATIL</a>
								
							</li>
						</ul>
					</div>
				</div>

				<section class="page-header page-header-modern bg-color-dark-scale-1 page-header-md">
					<div class="container">
						<div class="row">

							<div class="col-md-12 align-self-center p-static order-2 text-center">

								<h1 class="text-light font-weight-bold text-8">Ürünler</h1>

							</div>

						</div>
					</div>
				</section>

				<div class="container py-4">

					<div class="row">
						<div class="col">
							<div class="blog-posts">

								<div class="row">
							   <?php  $urunler=$db->query("SELECT * FROM products")->fetchAll(PDO::FETCH_OBJ);
							   foreach($urunler as $urunrow){?>
							   <?php 
							   $urun_id=$urunrow->id;
								$urun_adi=$urunrow->productName; 
								$urun_resim=$urunrow->productImage;   
							   ?>
									<div class="col-md-4 col-lg-3">
										<article class="post post-medium border-0 pb-0 mb-5">
											<div class="post-image">
												<a href="<?php echo "urundetay-".$urun_id; ?>">
													<img src="<?php echo $urun_resim; ?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" style="height:150px;" alt="" />
											
											</div>

											<div class="post-content">

												<h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><?php echo $urun_adi; ?></h2>
											

											</div>	</a>
										</article>
									</div>
							   <?php }?>

								</div>
	
								

							</div>
						</div>

					</div>

				</div>

			</div>
			<?php require "include/footer.php";?>