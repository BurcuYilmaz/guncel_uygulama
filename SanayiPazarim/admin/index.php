<?php require "include/header.php";?>
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
              <h3 class="mb-0">Ürünler Listesi</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Ürün</th>
                    <th scope="col" class="sort" data-sort="budget">Kategori</th>
                    <th scope="col" class="sort" data-sort="status">Başlangıç Tarihi</th>
                    <th scope="col">Bitiş Tarihi</th>
                    <th scope="col" class="sort" data-sort="completion">İşlemler</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                <?php  $urunler=$db->query("SELECT * FROM products")->fetchAll(PDO::FETCH_OBJ);
							   foreach($urunler as $urunrow){?>
							   <?php 
							   $urun_id=$urunrow->id;
								$urun_adi=$urunrow->productName; 
                                $urun_resim=$urunrow->productImage; 
                                $kategori_id=$urunrow->categoryId; 
                                $baslangic_tarihi=$urunrow->offerCreateTime; 
                                $bitis_tarihi=$urunrow->offerFinishedTime; 
                                $kategoriler=$db->query("SELECT * FROM productcategories WHERE id=$kategori_id")->fetchAll(PDO::FETCH_OBJ);
                                foreach($kategoriler as $kategorirow){?> 
                                <?php $kategori_ad=$kategorirow->category; ?>
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a  class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="<?php echo $urun_resim;?>" style="height: 3rem;">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm"><?php echo $urun_adi; ?></span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                    <?php echo $kategori_ad; ?>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        
                        <span class="status"><?php echo iconv('latin5','utf-8',strftime(' %d %B %Y  ',strtotime( $baslangic_tarihi)));?></span>
                      </span>
                    </td>
                    <td><?php echo iconv('latin5','utf-8',strftime(' %d %B %Y  ',strtotime( $bitis_tarihi)));?>                   </td>
                    <td>
                    <div class="col-lg-6 col-5 text-right">
                    <a href="urunler-detay.php?detay=<?= $urun_id ?>" class="btn btn-sm btn-neutral">Detay</a>
                    <a href="teklifler.php?detay=<?= $urun_id ?>" class="btn btn-sm btn-neutral">Teklifler</a>
            </div>
                    </td>
                  
                  </tr>
                  <?php }?><?php }?>
                </tbody>
              </table>
            </div>
         
          </div>
        </div>
      </div>
      
    <?php require "include/footer.php";?>