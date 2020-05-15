<?php require "include/header.php";?>

			<div role="main" class="main shop py-4">

				<div class="container">

					<div class="row">
						<div class="col">
							<div class="featured-boxes">
								<div class="row">
                                <div class="col-md-3"></div>
									<div class="col-md-6">
										<div class="featured-box featured-box-primary text-left mt-2">
											<div class="box-content">
												<h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">Üyelik</h4>
												<form action="" id="frmSignUp" method="post">
													<div class="form-row">
														<div class="form-group col">
															<label class="font-weight-bold text-dark text-2">E-posta</label>
															<input type="text" value="" class="form-control form-control-lg">
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col-lg-6">
															<label class="font-weight-bold text-dark text-2">Şifre</label>
															<input type="password" value="" class="form-control form-control-lg">
														</div>
														<div class="form-group col-lg-6">
															<label class="font-weight-bold text-dark text-2">Şİfre Tekrar</label>
															<input type="password" value="" class="form-control form-control-lg">
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col-lg-9">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="terms">
																<label class="custom-control-label text-2" for="terms">Üyelik sözleşmesi şartlarını okudum ve kabul ediyorum.</label>
															</div>
														</div>
														<div class="form-group col-lg-3">
															<input type="submit" value="Üye Ol" class="btn btn-primary float-right" data-loading-text="yükleniyor...">
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

				</div>

			</div>
            <?php require "include/footer.php";?>