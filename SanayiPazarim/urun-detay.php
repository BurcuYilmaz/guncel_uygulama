<?php require "include/header.php";?>

<?php if(@$_GET["detay"]){?>
    <?php 
        $urundetay=$db->query("SELECT * FROM products WHERE id=".$_GET["detay"]);
        $detayrow=$urundetay->fetch(PDO::FETCH_OBJ);
        $urun_id=$detayrow->id;
        $urun_kategori_id=$detayrow->categoryId;
		$urun_adi=$detayrow->productName; 
        $urun_resim=$detayrow->productImage; 
        $urun_aciklama=$detayrow->productDescription; 
        $urun_alt_aciklama=$detayrow->productSubDescription;
        $baslangic_tarihi=$detayrow->offerCreateTime; 
        $bitis_tarihi=$detayrow->offerFinishedTime; 
        $kategori=$db->query("SELECT * FROM productcategories WHERE id= $urun_kategori_id");
        $kategorirow=$kategori->fetch(PDO::FETCH_OBJ);
        $kategori_adi=$kategorirow->category;?>

        
      
        
<section class="page-header page-header-classic page-header-lg">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="<?php echo "Anasayfa"; ?>">Anasayfa</a></li>
                                    <li><a href="<?php echo "urunler"; ?>">Ürünler</a></li>
                                    <li class="active"><?php echo $urun_adi; ?></li>
								</ul>
							</div>
						</div>
					
					</div>
				</section>

			<div role="main" class="main shop py-4">

				<div class="container">

					<div class="row">
						<div class="col-lg-6">
                        <div>
									<img alt="" class="img-fluid" src="<?php echo $urun_resim; ?>" style="height: 30rem;">
								</div>
							
						</div>

						<div class="col-lg-6">

							<div class="summary entry-summary">

								<h1 class="mb-0 font-weight-bold text-7"><?php echo $urun_adi; ?></h1>
                                <div class="product-meta">
									<span class="posted-in"><a rel="tag" href=""><?php echo $kategori_adi; ?></a>/ <?php echo $urun_adi; ?></span>
								</div>
								
								<p class="price">
									<span class="amount">Özellikler</span>
								</p>

								<p class="mb-4"><?php echo $urun_aciklama; ?></p>
                                <p class="text-dark">Başlangıç Tarihi:<?php echo iconv('latin5','utf-8',strftime(' %d %B %Y  ',strtotime( $baslangic_tarihi)));?></p>
                                <p class="text-dark">Bitiş Tarihi:<?php echo iconv('latin5','utf-8',strftime(' %d %B %Y  ',strtotime( $bitis_tarihi)));?></p>
								<form enctype="multipart/form-data" method="post" class="cart">
									
									<button type="button" id="<?php echo $musteri_id ?>" class="btn btn-primary btn-modern text-uppercase teklif_ver">Teklif Ver</button>
								</form>

								

							</div>


						</div>
					</div>

					<div class="row">
						<div class="col">
							<div class="tabs tabs-product mb-2">
								<ul class="nav nav-tabs">
									<li class="nav-item active"><a class="nav-link py-3 px-4" href="#productDescription" data-toggle="tab">İlan Detayı</a></li>
									
								</ul>
								<div class="tab-content p-0">
									<div class="tab-pane p-4 active" id="productDescription">
										<p><?php echo $urun_alt_aciklama; ?> </p>
										
									</div>
									
								</div>
							</div>
						</div>
					</div>

				</div>

            </div>
       
			
<div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header"> 
                <h4 class="modal-title">Teklif Ver</h4>  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                      
                </div>  
                <div class="modal-body">  
                <form role="form" class="needs-validation" id="teklif_form">
             
              <div class="form-group row">
                  <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Teklif Değeri₺</label>
                  <div class="col-lg-9">
                  <input type="text"   class="form-control" id="deger" required/>
                  </div>
              </div>
            
              <div class="form-group row">
                  <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Teklif Açıklaması</label>
                  <div class="col-lg-9">
                      <textarea class="form-control" type="text" value="" id="aciklama" required ></textarea>
                  </div>
              </div>
             
             
            
            
             
             
             
              <div class="form-group row">
                  <div class="form-group col-lg-9">
                      
                  </div>
                  <div class="form-group col-lg-3">
				 
				  <input type="button" name="onay" value="Teklifi Onayla" id="<?php echo $urun_id;?>" class="btn btn-primary btn-modern float-right teklif_onay"/>
                 
                  </div>
              </div>
          </form>  
                </div>  
                
           </div>  
      </div>  
 </div>  

<?php }?>

<script>
$(document).ready(function(){
	$(document).on('click', '.teklif_ver', function(){  
 
 
 $.ajax({  
   
   method:"POST",  
   
   
   success:function(data){ 
    
	$('#add_data_Modal').modal('show');


	  }  
	}); 

});


$(document).on('click', '.teklif_onay', function(){  
    var urun_id = $(this).attr("id");

var deger= $('#deger').val();
var aciklama= $('#aciklama').val();

if($('#deger').val() == "")  
           {  
            Swal.fire({
  
  icon: 'error',
  title: 'Teklif giriniz',
  showConfirmButton: false,
  timer: 1500
})
           }  
           else if($('#aciklama').val() == "")  
           {  
            Swal.fire({
  
  icon: 'error',
  title: 'Aciklama giriniz',
  showConfirmButton: false,
  timer: 1500
})
           }  
		              else  
           {  

$.ajax({  
url:"teklif-ver.php",
method:"POST",  
data:{urun_id:urun_id,deger:deger,aciklama:aciklama},

success:function(data){ 
	$('#teklif_form')[0].reset();
	$('#add_data_Modal').modal('hide');  
   
	Swal.fire({
  
  icon: 'success',
  title: 'Teklif verildi',
  showConfirmButton: false,
  timer: 1500
})



	  } 
}); }



});


});
</script>
<script>
    $(document).ready(function() {
    $("#deger").on("input", function() {
        // allow numbers, a comma or a dot
        var v= $(this).val(), vc = v.replace(/[^0-9]/, '');
        if (v !== vc)        
            $(this).val(vc);
    });
});
</script>
            <?php require "include/footer.php";?>