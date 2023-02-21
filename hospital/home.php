<div class="tab-pane active" id="dash">

					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Dashboard</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Dashboard</li>
							</ol>
						</div>
					</div>

			<!-- start widget -->
					<div class="state-overview">
						<div class="row">
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-blue">
									<span class="info-box-icon push-bottom"><i class="material-icons">people</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Users</span>
										<span class="info-box-number" Style="font-size:14px;font-weight: bold;">
											<?php 
										
									$db=new mysqli("localhost","root","","hospital");
									$query = "select * from users ORDER BY u_id";
										$query_run = mysqli_query($db,$query);
										$row = mysqli_num_rows($query_run);
										echo '<h4>'.$row.'</h4>';

											 ?>
										</span>
										<div class="progress">
											<div class="progress-bar width-60"></div>
										</div>
										<span class="progress-description">
											60% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-orange">
									<span class="info-box-icon push-bottom"><i
											class="material-icons">person</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Doctors</span>
										<span class="info-box-number">
											<?php 
										
									$db=new mysqli("localhost","root","","hospital");
									$query = "select * from doctor where deleted=0 ORDER BY doc_no";
										$query_run = mysqli_query($db,$query);
										$row = mysqli_num_rows($query_run);
										echo '<h4>'.$row.'</h4>';

											 ?>
										</span>
										<div class="progress">
											<div class="progress-bar width-40"></div>
										</div>
										<span class="progress-description">
											40% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-purple">
									<span class="info-box-icon push-bottom"><i
											class="material-icons">people</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Patients</span>
										<span class="info-box-number">
											<?php 
										
									$db=new mysqli("localhost","root","","hospital");
									$query = "SELECT * FROM patient WHERE deleted=0 ORDER BY p_no";
										$query_run = mysqli_query($db,$query);
										$row = mysqli_num_rows($query_run);
										echo '<h4>'.$row.'</h4>';

											 ?>
										</span>
										<div class="progress">
											<div class="progress-bar width-80"></div>
										</div>
										<span class="progress-description">
											80% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-success">
									<span class="info-box-icon push-bottom"><i
											class="material-icons">accessibility</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Checkments</span>
										<span class="info-box-number">
											<?php 
										
									$db=new mysqli("localhost","root","","hospital");
									$query = "SELECT * FROM checkments WHERE deleted=0 ORDER BY ck_no";
										$query_run = mysqli_query($db,$query);
										$row = mysqli_num_rows($query_run);
										echo '<h4>'.$row.'</h4>';

											 ?>
										</span>
										<div class="progress">
											<div class="progress-bar width-60"></div>
										</div>
										<span class="progress-description">
											60% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
						</div>
					</div>
					<div class="state-overview">
						<div class="row">
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-purple">
									<span class="info-box-icon push-bottom"><i
											class="material-icons"> local_hospital</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Visits</span>
										<span class="info-box-number">
											<?php 
										
									$db=new mysqli("localhost","root","","hospital");
									$query = "SELECT * FROM visits WHERE deleted=0 ORDER BY v_no";
										$query_run = mysqli_query($db,$query);
										$row = mysqli_num_rows($query_run);
										echo '<h4>'.$row.'</h4>';

											 ?>
										</span>
										<div class="progress">
											<div class="progress-bar width-60"></div>
										</div>
										<span class="progress-description">
											60% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>

								<!-- /accounts -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-blue">
									<span class="info-box-icon push-bottom"><i
											class="material-icons"> account_balance</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Accounts</span>
										<span class="info-box-number">
											<?php 
										
									$db=new mysqli("localhost","root","","hospital");
									$query = "SELECT * FROM accounts WHERE deleted=0 ORDER BY acc_no";
										$query_run = mysqli_query($db,$query);
										$row = mysqli_num_rows($query_run);
										echo '<h4>'.$row.'</h4>';

											 ?>
										</span>
										<div class="progress">
											<div class="progress-bar width-60"></div>
										</div>
										<span class="progress-description">
											60% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								
							</div>
							<!-- dhamaad-->

								<!-- /charges -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-success">
									<span class="info-box-icon push-bottom"><i
											class="material-icons"> local_atm</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Charges</span>
										<span class="info-box-number">
											<?php 
										
									$db=new mysqli("localhost","root","","hospital");
									$query = "SELECT * FROM charges WHERE deleted=0 ORDER BY ch_no";
										$query_run = mysqli_query($db,$query);
										$row = mysqli_num_rows($query_run);
										echo '<h4>'.$row.'</h4>';

											 ?>
										</span>
										<div class="progress">
											<div class="progress-bar width-60"></div>
										</div>
										<span class="progress-description">
											60% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								
							</div>
							<!-- dhamaad-->
							<!-- /charges -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-orange">
									<span class="info-box-icon push-bottom"><i
											class="material-icons">poll</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Receipts</span>
										<span class="info-box-number">
											<?php 
										
									$db=new mysqli("localhost","root","","hospital");
									$query = "SELECT * FROM receipts WHERE deleted=0 ORDER BY r_no";
										$query_run = mysqli_query($db,$query);
										$row = mysqli_num_rows($query_run);
										echo '<h4>'.$row.'</h4>';

											 ?>
										</span>
										<div class="progress">
											<div class="progress-bar width-60"></div>
										</div>
										<span class="progress-description">
											60% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								
							</div>
							<!-- dhamaad-->
							
							
							
						</div>
					</div>
				
				</div>
				<!-- =======================employee============================= -->

				<!-- <div class="tab-pane" id="emp">
				<div class="row">
						<div class="col-12">
							
							<header class="panel-heading panel-heading-gray custom-tab" style="margin-bottom: 3%">
						<ul class="nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link" id="doctors" data-toggle="tab" href="#tb_doctors" role="tab"
							aria-controls="profile" aria-selected="false">Doctor</a>
						</li>
							<li class="nav-item">
							<a class="nav-link" id="address" data-toggle="tab" href="#tb_address" role="tab"
							aria-controls="profile" aria-selected="false">Address</a>
						</li>
								</ul>	
								</header>
								<div class="panel-body">
									<div class="tab-content">
										<div class="tab-pane  active" id="tb_doctors" role="tabpanel" aria-labelledby="doctors">
										<div class="row">
											<div class="col-md-12">
											 <button type="button" class="btn btn-primary btn_new_doctor" data-toggle="modal" data-target="#doctor">
                                               Add Doctor</button>
										</div>
										<div class="col-md-12">
										<div id="tbl_id_doctor" class="tbl_cls_doctor">
										<?php $coder->Table("CALL view_doctor()","dt_doctor","n") ?>	
										</div>	
										</div>
										</div>
										</div>
										<div class="tab-pane fade" id="tb_address" role="tabpanel" aria-labelledby="address">
											<div class="row">
											<div class="col-12">
											 <button type="button" class="btn btn-primary btn_new_addres" data-toggle="modal" data-target="#addres">
                                               Add Address </button>
                                               </div>
                                              <div class="col-md-12">
										<div id="tbl_id_addres" class="tbl_cls_addres">
										<?php $coder->Table("CALL view_address()","dt_addres","n") ?>	
										</div>
										</div>
										</div>
										
									</div>
								</div>
							
						</div>
						
					</div>
					</div>
				</div> -->
				<!-- ================patient============================== -->
				<div class="tab-pane" id="pat">
				<div class="row">
						<div class="col-12">
							
							<header class="panel-heading panel-heading-gray custom-tab" style="margin-bottom: 3%">
						<ul class="nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link" id="bukaanyaal" data-toggle="tab" href="#tb_bukaanyaal" role="tab"
							aria-controls="profile" aria-selected="false">Patients</a>
						</li>
							<li class="nav-item">
							<a class="nav-link" id="Checkments" data-toggle="tab" href="#tb_Checkments" role="tab"
							aria-controls="profile" aria-selected="false">Checkments</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="prescription" data-toggle="tab" href="#tb_prescription" role="tab"
							aria-controls="profile" aria-selected="false">Prescription</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="patient_prescription" data-toggle="tab" href="#tb_patient_prescription" role="tab"
							aria-controls="profile" aria-selected="false">Patient_prescription</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="visits" data-toggle="tab" href="#tb_visits" role="tab"
							aria-controls="profile" aria-selected="false">Visits</a>
						</li>
								</ul>	
								</header>
								<div class="panel-body">
									<div class="tab-content">
										<div class="tab-pane  active" id="tb_bukaanyaal" role="tabpanel" aria-labelledby="bukaanyaal">
										<div class="row">
											<div class="col-md-12">
											 <button type="button" class="btn btn-primary btn_new_bukaan" data-toggle="modal" data-target="#bukaan">
                                               Add Patient</button>
										</div>
										<div class="col-md-12">
										<div id="tbl_id_bukaan" class="tbl_cls_bukaan">
										<?php $coder->Table("CALL view_patient","dt_bukaan","n") ?>	
										</div>	
										</div>
										</div>
										</div>
										<div class="tab-pane fade" id="tb_Checkments" role="tabpanel" aria-labelledby="Checkments">
											<div class="row">
											<div class="col-12">
											 <button type="button" class="btn btn-primary btn_new_Check" data-toggle="modal" data-target="#Check">
                                               Add Checkments </button>
                                               </div>
                                              <div class="col-md-12">
										<div id="tbl_id_Check" class="tbl_cls_Check">
										<?php $coder->Table("CALL view_checkments","dt_Check","n") ?>	
										</div>
										</div>
										</div>
										
									</div>

										<div class="tab-pane fade" id="tb_prescription" role="tabpanel" aria-labelledby="prescription">
											<div class="row">
											<div class="col-12">
											 <button type="button" class="btn btn-primary btn_new_prescr" data-toggle="modal" data-target="#prescr">
                                               Add Prescription </button>
                                               </div>
                                              <div class="col-md-12">
										<div id="tbl_id_prescr" class="tbl_cls_prescr">
										<?php $coder->Table("CALL view_prescription","dt_prescr","n") ?>	
										</div>
										</div>
										</div>
									  </div>

										<div class="tab-pane fade" id="tb_patient_prescription" role="tabpanel" aria-labelledby="patient_prescription">
											<div class="row">
											<div class="col-12">
											 <button type="button" class="btn btn-primary btn_new_pat_pres" data-toggle="modal" data-target="#pat_pres">
                                               Add Patient_prescription </button>
                                               </div>
                                              <div class="col-md-12">
										<div id="tbl_id_pat_pres" class="tbl_cls_pat_pres">
										<?php $coder->Table("CALL view_patient_prescription","dt_pat_pres","n") ?>	
										</div>
										</div>
										</div>
									</div>

										<div class="tab-pane fade" id="tb_visits" role="tabpanel" aria-labelledby="visits">
											<div class="row">
											<div class="col-12">
											 <button type="button" class="btn btn-primary btn_new_vist" data-toggle="modal" data-target="#vist">
                                               Add Visits </button>
                                               </div>
                                              <div class="col-md-12">
										<div id="tbl_id_vist" class="tbl_cls_vist">
										<?php $coder->Table("CALL view_visits","dt_vist","n") ?>	
										</div>
										</div>
										</div>
									</div>
								</div>
							
						</div>
						
					</div>
					</div>
				</div>
               

                <!--======================Registration============================ -->
                <div class="tab-pane" id="reg">
				        <div class="row">
						  <div class="col-12">
							
							<header class="panel-heading panel-heading-gray custom-tab" style="margin-bottom: 3%">
						<ul class="nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link" id="doctors" data-toggle="tab" href="#tb_doctors" role="tab"
							aria-controls="profile" aria-selected="false">Doctor</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="address" data-toggle="tab" href="#tb_address" role="tab"
							aria-controls="profile" aria-selected="false">Address</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="diseases" data-toggle="tab" href="#tb_diseases" role="tab"
							aria-controls="profile" aria-selected="false">Diseases</a>
						</li>
							<li class="nav-item">
							<a class="nav-link" id="checkement_categories" data-toggle="tab" href="#tb_checkement_categories" role="tab"
							aria-controls="profile" aria-selected="false">Checkement_categories</a>
						</li>
								</ul>	
								</header>
								<div class="panel-body">
									<div class="tab-content">
										<div class="tab-pane  active" id="tb_doctors" role="tabpanel" aria-labelledby="doctors">
										<div class="row">
											<div class="col-md-12">
											 <button type="button" class="btn btn-primary btn_new_doctor" data-toggle="modal" data-target="#doctor">
                                               Add Doctor</button>
										</div>
										<div class="col-md-12">
										<div id="tbl_id_doctor" class="tbl_cls_doctor">
										<?php $coder->Table("CALL view_doctor()","dt_doctor","n") ?>	
										</div>	
										</div>
										</div>
										</div>
										<div class="tab-pane fade" id="tb_address" role="tabpanel" aria-labelledby="address">
											<div class="row">
											<div class="col-12">
											 <button type="button" class="btn btn-primary btn_new_addres" data-toggle="modal" data-target="#addres">
                                               Add Address </button>
                                               </div>
                                              <div class="col-md-12">
										<div id="tbl_id_addres" class="tbl_cls_addres">
										<?php $coder->Table("CALL view_address()","dt_addres","n") ?>	
										</div>
										</div>
										</div>
										
									</div>
										<div class="tab-pane  fade" id="tb_diseases" role="tabpanel" aria-labelledby="diseases">
										<div class="row">
											<div class="col-md-12">
											 <button type="button" class="btn btn-primary btn_new_disease" data-toggle="modal" data-target="#disease">Add Disease
                                               </button>
										</div>
										<div class="col-md-12">
										<div id="tbl_id_disease" class="tbl_cls_disease">
										<?php $coder->Table("CALL view_diseases()","dt_disease","n") ?>	
										</div>	
										</div>
										</div>
										</div>
										<div class="tab-pane fade" id="tb_checkement_categories" role="tabpanel" aria-labelledby="checkement_categories">
											<div class="row">
											<div class="col-12">
											 <button type="button" class="btn btn-primary btn_new_checkement_cat" data-toggle="modal" data-target="#checkement_cat">Add Checkement_categories
                       </button>
                      </div>
                    <div class="col-md-12">
										<div id="tbl_id_checkement_cat" class="tbl_cls_checkement_cat">
										<?php $coder->Table("CALL view_checkement_categories()","dt_checkement_cat","n") ?>	
										</div>
										</div>
										</div>
										
									</div>
								</div>
							
						</div>
						
					</div>
					</div>
				</div>
				<!-- =======================finance==================================== -->
				<div class="tab-pane" id="fin">
				<div class="row">
						<div class="col-12">
							
							<header class="panel-heading panel-heading-gray custom-tab" style="margin-bottom: 3%">
						<ul class="nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link" id="accounts" data-toggle="tab" href="#tb_accounts" role="tab"
							aria-controls="profile" aria-selected="false">Accounts</a>
						</li>
							<li class="nav-item">
							<a class="nav-link" id="amount_types" data-toggle="tab" href="#tb_amount_types" role="tab"
							aria-controls="profile" aria-selected="false">Amount_types</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="charges" data-toggle="tab" href="#tb_charges" role="tab"
							aria-controls="profile" aria-selected="false">Charges</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="receipts" data-toggle="tab" href="#tb_receipts" role="tab"
							aria-controls="profile" aria-selected="false">Receipts</a>
						</li>
						
								</ul>	
								</header>
								<div class="panel-body">
									<div class="tab-content">
										<div class="tab-pane  active" id="tb_accounts" role="tabpanel" aria-labelledby="accounts">
										<div class="row">
											<div class="col-md-12">
											 <button type="button" class="btn btn-primary btn_new_Akoon" data-toggle="modal" data-target="#Akoon">Add
                                               Accounts</button>
										</div>
										<div class="col-md-12">
										<div id="tbl_id_Akoon" class="tbl_cls_Akoon">
										<?php $coder->Table("CALL view_accounts()","dt_Akoon","n") ?>	
										</div>	
										</div>
										</div>
										</div>
										<div class="tab-pane fade" id="tb_amount_types" role="tabpanel" aria-labelledby="amount_types">
											<div class="row">
											<div class="col-12">
											 <button type="button" class="btn btn-primary btn_new_amount_type" data-toggle="modal" data-target="#amount_type">Add
                                               Amount Types</button>
                                               </div>
                                              <div class="col-md-12">
										<div id="tbl_id_amount_type" class="tbl_cls_amount_type">
										<?php $coder->Table("CALL view_amount_type()","dt_amount_type","n") ?>	
										</div>
										</div>
										</div>
										
									</div>
                                    
                   <div class="tab-pane fade" id="tb_charges" role="tabpanel" aria-labelledby="charges">
											<div class="row">
											<div class="col-12">
											 <button type="button" class="btn btn-primary btn_new_charge" data-toggle="modal" data-target="#charge">Add
                                               Charges</button>
                      </div>
                     <div class="col-md-12">
										<div id="tbl_id_charge" class="tbl_cls_charge">
										<?php $coder->Table("CALL view_charges()","dt_charge","n") ?>	
										</div>
										</div>
										</div>
										
									</div>

										<div class="tab-pane fade" id="tb_receipts" role="tabpanel" aria-labelledby="receipts">
											<div class="row">
											<div class="col-12">
											 <button type="button" class="btn btn-primary btn_new_receipt" data-toggle="modal" data-target="#receipt">Add
                                               Receipts</button>
                                               </div>
                                              <div class="col-md-12">
										<div id="tbl_id_receipt" class="tbl_cls_receipt">
										<?php $coder->Table("CALL view_receipts()","dt_receipt","n") ?>	
										</div>
										</div>
										</div>
										
									</div>

			
                                 
								</div>
							
						</div>
						
					</div>
					</div>
				</div>

          
                <!--======================Users============================ -->
                <div class="tab-pane" id="us">
				        <div class="row">
						  <div class="col-12">
							
							<header class="panel-heading panel-heading-gray custom-tab" style="margin-bottom: 3%">
						<ul class="nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link" id="users" data-toggle="tab" href="#tb_users" role="tab"
							aria-controls="profile" aria-selected="false">Users</a>
						</li>
						
								</ul>	
								</header>
								<div class="panel-body">
									<div class="tab-content">
										<div class="tab-pane  active" id="tb_users" role="tabpanel" aria-labelledby="users">
										<div class="row">
											<div class="col-md-12">
											 <button type="button" class="btn btn-primary btn_new_user" data-toggle="modal" data-target="#user">Add Users
                                               </button>
										</div>
										<div class="col-md-12">
										<div id="tbl_id_user" class="tbl_cls_user">
										<?php $coder->Table("CALL view_users","dt_user","n") ?>	
										</div>	
										</div>
										</div>
										</div>
										
							
						</div>
						
					</div>
					</div>
				</div>
			

	
			</div>

				 </============================REports==================================>

				 	<div class="tab-pane" id="report">
				<div class="row">
						<div class="col-12">
							
							<header class="panel-heading panel-heading-gray custom-tab" style="margin-bottom: 3%">
						<ul class="nav nav-tabs">
						
							<li class="nav-item">
							<a class="nav-link" id="Patient" data-toggle="tab" href="#tb_Patient" role="tab"
							aria-controls="profile" aria-selected="false">Patient</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="booqde" data-toggle="tab" href="#tb_booqde" role="tab"
							aria-controls="profile" aria-selected="false">Visit By General</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="vbtdates" data-toggle="tab" href="#tb_vbtdates" role="tab"
							aria-controls="profile" aria-selected="false">Visit B/w two Dates</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="baaritaan" data-toggle="tab" href="#tb_baaritaan" role="tab"
							aria-controls="profile" aria-selected="false">Checkments</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="baaridgooni" data-toggle="tab" href="#tb_baaridgooni" role="tab"
							aria-controls="profile" aria-selected="false">single Checkment for patient</a>
						</li>
					
						  

								</ul>	
								</header>
								<div class="panel-body">
									<div class="tab-content">
						<!-- =============Visits general======================== -->
						<div class="tab-pane  fade" id="tb_booqde" role="tabpanel" aria-labelledby="booqde">
						<div class="row">
							<div class="col-md-12">
							

					<button class="btn btn-sm btn-primary btn_booqde" >Print</button>

				
						</div>
						
						</div>
						</div>
						<!-- =============dhamaad======================== -->



				<!-- =============patient general / single======================== -->
										<div class="tab-pane active" id="tb_Patient" role="tabpanel" aria-labelledby="Patient">
											<div class="row">
											<div class="col-12">
											<?php $coder->fillCombo("SELECT * from patient where Deleted=0","cbm_Patients_print","Select Patient name"); ?>

									<button class="btn btn-sm btn-primary btn_Patients" >Single Patient</button>

									<button class="btn btn-sm btn-primary btn_patientg" >General Patient</button>
									
								
                                               </div>
                                             
										</div>
										
									</div>

						<!-- =============dhamaad patient======================== -->



						<!-- =============Visits b/w dates======================== -->
									<div class="tab-pane  fade" id="tb_vbtdates" role="tabpanel" aria-labelledby="vbtdates">
										<div class="row">
								<div class="col-6">
									<input type="date" name="dat1" id="dat1" class="form-control">
									<br>
									<button class="btn btn-sm btn-primary btn_bdates" >print</button>

					
								</div>
							<div class="col-6">
							<input type="date" name="dat2" id="dat2" class="form-control">
                             
						</div>
						
					</div>
										</div>

				<!-- =============Visits b/w dates dhamaad======================== -->



                 <!-- =============Checkment general======================== -->
						<div class="tab-pane  fade" id="tb_baaritaan" role="tabpanel" aria-labelledby="baaritaan">
						<div class="row">
							<div class="col-md-12">
						

                  <button class="btn btn-sm btn-primary btn_baaritaan" >General checkment</button>

				
						</div>
						
						</div>
						</div>
                <!-- =============Checkment general dhamaad======================== -->



					 <!-- =============Checkment single======================== -->		

							<div class="tab-pane fade" id="tb_baaridgooni" role="tabpanel" aria-labelledby="baaridgooni">
											<div class="row">
											<div class="col-12">
											
                  							<?php  $coder->fillcombo("SELECT patient.p_no ID,patient.name patient_name,patient.tell Tell,patient.sex Sex,timestampdiff(year,birth_date,curdate()) age ,diseases.dis_name disease_name,checkments.result,visits.v_date checkment_date  FROM patient,diseases,visits,checkments,users WHERE patient.p_no=visits.p_no AND visits.v_no=checkments.v_no and diseases.d_no=checkments.d_no AND users.u_id=patient.user AND patient.deleted=0 AND users.u_id=checkments.user AND checkments.deleted=0 ","cmb_sp","Select Patient") ?>
               				 		

								<button class="btn btn-sm btn-primary btn_sinlepatinet" >Single Patient</button>

									
									
								
                                               </div>
                                             
										</div>
										
									</div>

				<!-- =============Checkment single dhamaad======================== -->
	

								</div>
							
						</div>
						
					</div>
					</div>
				</div>
 </============================REport two==================================>
 		 	<div class="tab-pane" id="repo">
				<div class="row">
						<div class="col-12">
							
							<header class="panel-heading panel-heading-gray custom-tab" style="margin-bottom: 3%">
						<ul class="nav nav-tabs">
						
				
						<li class="nav-item">
							<a class="nav-link" id="baarbooqde" data-toggle="tab" href="#tb_baarbooqde" role="tab"
							aria-controls="profile" aria-selected="false">single visit for patient</a>
						</li>
							<li class="nav-item">
							<a class="nav-link" id="checkbwdate" data-toggle="tab" href="#tb_checkbwdate" role="tab"
							aria-controls="profile" aria-selected="false">Checkments B/w two Dates</a>
						</li>
					
						<li class="nav-item">
							<a class="nav-link" id="specificpa" data-toggle="tab" href="#tb_specificpa" role="tab"
							aria-controls="profile" aria-selected="false">Receipts</a>
						</li>
							<li class="nav-item">
							<a class="nav-link" id="rebtwdate" data-toggle="tab" href="#tb_rebtwdate" role="tab"
							aria-controls="profile" aria-selected="false">Receipts b/w two Dates</a>
						</li>
							<li class="nav-item">
							<a class="nav-link" id="trashare" data-toggle="tab" href="#tb_trashare" role="tab"
							aria-controls="profile" aria-selected="false">Charges</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="moneyT" data-toggle="tab" href="#tb_moneyT" role="tab"
							aria-controls="profile" aria-selected="false">Transaction</a>
						</li>
						  

								</ul>	
								</header>
								<div class="panel-body">
									<div class="tab-content">
				
                 <!-- =============single visit for patient======================== -->
                            <div class="tab-pane active" id="tb_baarbooqde" role="tabpanel" aria-labelledby="baarbooqde">
											<div class="row">
											<div class="col-12">
											
                  							<?php  $coder->fillcombo("SELECT patient.p_no ID,patient.name Patient_name,doctor.doc_name Dpctor_name,v_date Date FROM visits,doctor,patient,users WHERE visits.p_no=patient.p_no and visits.doc_no=doctor.doc_no  AND users.u_id=visits.user AND visits.deleted=0  AND users.u_id=patient.user AND patient.deleted=0","cmb_baar","Select Patient") ?>
               				 		

								<button class="btn btn-sm btn-primary btn_bari79" >single visit patient</button>

									
									
								
                                               </div>
                                             
										</div>
										
									</div>


		<!-- =============single visit for patient dhamaad======================== -->


		<!-- =============Checkments B/w two Dates======================== -->

							<div class="tab-pane  fade" id="tb_checkbwdate" role="tabpanel" aria-labelledby="checkbwdate">
										<div class="row">
								<div class="col-6">
									<input type="date" name="s1" id="s1" class="form-control">
									<br>
									<button class="btn btn-sm btn-primary btn_chdate" >print</button>

					
								</div>
							<div class="col-6">
							<input type="date" name="s2" id="s2" class="form-control">
                             
						</div>
						
					</div>
										</div>
		<!-- =============Checkments B/w two Dates dhamaad======================== -->




        <!-- =============Receipts======================== -->
				    <div class="tab-pane fade" id="tb_specificpa" role="tabpanel" aria-labelledby="specificpa">
					<div class="row">
					<div class="col-12">
											
                  	<?php  $coder->fillcombo("SELECT patient.p_no ID,patient.name patient,accounts.acc_name accoun,concat('$',' ',receipts.amount )paid,receipts.rec_date Date,receipts.description FROM patient,receipts,accounts,users where receipts.acc_no=accounts.acc_no and patient.p_no=receipts.p_no  AND users.u_id=patient.user AND patient.deleted=0 AND users.u_id=receipts.user AND receipts.deleted=0","cmb_spepa","Select Patient") ?>
               				 		
                    <button class="btn btn-sm btn-primary btn_spepatie_single" >Specific Patient</button>
					<button class="btn btn-sm btn-primary btn_spepatie_general" >General Receipts</button>

									
									
								
                     </div>
                                             
										</div>
										
									</div>
                <!-- =============Receipts dhamaad======================== -->




               <!-- =============Receipts b/w dates======================== -->
					<div class="tab-pane  fade" id="tb_rebtwdate" role="tabpanel" aria-labelledby="rebtwdate">
										<div class="row">
								<div class="col-6">
									<input type="date" name="r1" id="r1" class="form-control">
									<br>
									<button class="btn btn-sm btn-primary btn_finance" >print</button>

					
								</div>
							<div class="col-6">
							<input type="date" name="r2" id="r2" class="form-control">
                             
						</div>
						
					</div>
										</div>	

			<!-- =============Receipts b/w dates dhamaad======================== -->	

         <!-- =============Charges======================== -->

			<div class="tab-pane fade" id="tb_trashare" role="tabpanel" aria-labelledby="trashare">
			<div class="row">
				<div class="col-12">
				<?php  $coder->fillcombo("SELECT patient.p_no ID,patient.name Patient_name,doctor.doc_name Doctor_name,amount_types.am_name Amount_Type,Amount ,description FROM patient,visits,charges,amount_types,users,doctor WHERE visits.v_no=charges.v_no AND patient.p_no=visits.p_no  AND doctor.doc_no=visits.doc_no AND amount_types.am_no=charges.am_no
 AND users.u_id=visits.user AND visits.deleted=0  AND users.u_id=charges.user AND charges.deleted=0","cmb_chr","Select Patient") ?>

									<button class="btn btn-sm btn-primary btn_sceege" >Single charge</button>

									<button class="btn btn-sm btn-primary btn_gcharge" >General charges</button>
									
								
                                               </div>
                                             
										</div>
										
									</div>
						<!-- =============Charges dhamaad======================== -->
							



                      <!-- =============Transaction======================== -->
				    <div class="tab-pane fade" id="tb_moneyT" role="tabpanel" aria-labelledby="moneyT">
					<div class="row">
					<div class="col-12">
											
                  	<?php  $coder->fillcombo("SELECT patient.p_no ID,patient.name Patient,patient.tell Tell,accounts.acc_name Account_Number,(charges.amount)-(receipts.amount) lacagta_kuleenahay___Ama_Nagula_leeyahay,rec_date Receiption_Date FROM charges,receipts,patient,users,visits,accounts WHERE patient.p_no=visits.p_no AND visits.v_no=charges.v_no AND patient.p_no=receipts.p_no AND accounts.acc_no=receipts.acc_no
AND users.u_id=charges.user AND charges.deleted=0 AND users.u_id=receipts.user AND receipts.deleted=0 AND users.u_id=patient.user AND patient.deleted=0 ","cmb_mon","Select Patient") ?>
               				 		
                    <button class="btn btn-sm btn-primary btn_strans_single" >Single Transaction</button>
					<button class="btn btn-sm btn-primary btn_Gtrans_general" >General Transaction</button>

									
									
								
                     </div>
                                             
										</div>
										
									</div>
                <!-- =============Transaction dhamaad======================== -->
								</div>
							
						</div>
						
					</div>
					</div>
				</div>










