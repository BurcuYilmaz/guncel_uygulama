<?php require "include/header.php";?>
<?php if(@$_GET["detay"]){?>
    <?php 
        $urundetay=$db->query("SELECT * FROM products WHERE id=".$_GET["detay"]);
        $detayrow=$urundetay->fetch(PDO::FETCH_OBJ);
        $urun_id=$detayrow->id;
        $urun_resim=$detayrow->productImage;
        $urun_kategori_id=$detayrow->categoryId;
		$urun_adi=$detayrow->productName; 
        ?>
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
         
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0"><?php echo $urun_adi;?></h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Teklif Değeri</th>
                    <th scope="col" class="sort" data-sort="budget">Teklif Açıklaması</th>
                    <th scope="col" class="sort" data-sort="status">Teklif Tarihi</th>
                    
                    <th scope="col" class="sort" data-sort="completion">İşlemler</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                <?php


$teklifler=$db->query("SELECT * FROM offers WHERE productId=$urun_id ORDER BY  CAST(offerValue as INT) DESC")->fetchAll(PDO::FETCH_OBJ);
             foreach($teklifler as $teklifrow){?>
             <?php 
             $teklif_id=$teklifrow->id;
                            $aciklama=$teklifrow->offerHead; 
                            $deger=$teklifrow->offerValue;
                            $tarih=$teklifrow->offerCreateTime;?>
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="<?php echo $urun_resim;?>" style="height: 3rem;">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm"><?php echo $deger; ?></span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                    <?php echo substr($aciklama,0,18); ?>...
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        
                        <span class="status"><?php echo iconv('latin5','utf-8',strftime(' %d %B %Y  ',strtotime( $tarih)));?></span>
                      </span>
                    </td>
                
                    <td>
                    <div class="col-lg-6 col-5 text-right">
                    <a href="teklif-detay.php?detay=<?= $teklif_id ?>" class="btn btn-sm btn-neutral">Detaylar</a>
      
            </div>
                    </td>
                   
                  </tr>
                  <?php }?>
                </tbody>
              </table>
            </div>
           
          </div>
        </div>
      </div>
      <?php }?>
    <?php require "include/footer.php";?>