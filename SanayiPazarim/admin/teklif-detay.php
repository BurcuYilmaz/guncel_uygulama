
  <?php require "include/header.php";?>
  <?php if(@$_GET["detay"]){?>
    <?php 
        $teklifdetay=$db->query("SELECT * FROM offers WHERE id=".$_GET["detay"]);
        $detayrow=$teklifdetay->fetch(PDO::FETCH_OBJ);
        $urun_id=$detayrow->productId;
        $deger=$detayrow->offerValue;
        $aciklama=$detayrow->offerHead;
        $tarih=$detayrow->offerCreateTime;
        $urun=$db->query("SELECT * FROM products WHERE id= $urun_id");
        $urunrow=$urun->fetch(PDO::FETCH_OBJ);
        $urun_adi=$urunrow->productName;
        $urun_resim=$urunrow->productImage;
        $urun_kategori_id=$urunrow->categoryId;
        $kategori=$db->query("SELECT * FROM productcategories WHERE id=$urun_kategori_id");
        $kategorirow=$kategori->fetch(PDO::FETCH_OBJ);
        $kategori_adi=$kategorirow->category;
      
        ?>
        <div class="col-xl-12 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-12">
                  <h3 class="mb-0">Teklif Detay </h3>
                </div>
               
              </div>
            </div>
            <div class="card-body">
            <div class="col-lg-12">
                      
                      
                      <div class="row">
 <div class="col"><span><img src="<?php echo $urun_resim; ?>" class="rounded float-left" alt="..." style="height:30rem;"></span></div>
 <div class="col"><span> <h2>
                         <?php echo $urun_adi;?>
                      </h2>
                      <p>Kategori:<?php echo $kategori_adi;?></p>  
                      <h6>Teklif Değeri</h6>
                     <p><?= number_format($deger, 2, ',', '.');?>₺ </p>
                     <h4>Teklif Açıklaması</h4>
                     <p><?php echo $aciklama;?></p>   
                     <p class="text-dark">Teklif Tarihi:<?php echo iconv('latin5','utf-8',strftime(' %d %B %Y  ',strtotime( $tarih)));?></p>
                              
                   </span></div>

</div>
          
                  </div>
            </div>
          </div>
        </div>
  
  <?php }?>
        <?php require "include/footer.php";?>