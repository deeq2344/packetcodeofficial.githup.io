 
 <div class="modal fade" id="doctor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">doctor_register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="doctor_alert"></div>
              <div class="modal-body">
                <form id="frm_doctor" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="doctor_proc"  value="doctor_proc">
              <input type="hidden" name="doc_no" id="doc_no">
                </div>
                <div class="col-md-6">
                  <label>FullName</label>
                  <input type="text" name="fullname22" id="rname" class="form-control" placeholder="Enter FullName" required="" >
                </div>
                 <div class="col-md-6">
                  <label>Number</label>
                  <input type="text" name="rtnamre" id="rtnamre" class="form-control" placeholder="Enter phone" required="" >
                </div>
                 <div class="col-md-6">
                  <label>Specilation</label>
                  <input type="text" name="rttname" id="rttname" class="form-control" placeholder="Enter Specilation" required="" >
                </div>
                 <div class="col-md-6">
                  <label>address</label>
                   <?php echo $coder->fillcombo("SELECT * from address  where Deleted=0","cmb_add","select address") ?>
                </div>
                
                <div class="col-md-12">
                   <input type="hidden" name="usid"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_doctor">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_doctor">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
<!-- =============prescription======================== -->
  <div class="modal fade" id="prescr" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">prescription</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="prescr_alert"></div>
              <div class="modal-body">
                <form id="frm_prescr" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="prescription_proc"  value="prescription_proc">
              <input type="hidden" name="pr_no" id="pr_no">
                </div>
                <div class="col-md-6">
                  <label>prescription_name</label>
                  <input type="text" name="prextxt2" id="prextxt2" class="form-control" placeholder="Enter prescription_name" required="" >
                </div>
                 <div class="col-md-6">
                  <label>Madein</label>
                  <input type="text" name="txtmad" id="txtmad" class="form-control" placeholder="Enter Made in" required="" >
                </div>
                 <div class="col-md-6">
                  <label>description</label>
                  <input type="text" name="txtdd" id="txtdd" class="form-control" placeholder="Enter description" required="" >
                </div>
                
                <div class="col-md-12">
                   <input type="hidden" name="usid"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_prescr">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_prescr">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

<!-- ==============address========================= -->
        <div class="modal fade" id="addres" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Addrres_register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="addres_alert"></div>
              <div class="modal-body">
                <form id="frm_addres" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="address_proc"  value="address_proc">
              <input type="hidden" name="add_no" id="add_no">
                </div>
                <div class="col-md-6">
                  <label>District</label>
                  <input type="text" name="ict77" id="ict77" class="form-control" placeholder="Enter district" required="" >
                </div>
                 <div class="col-md-6">
                  <label>Village</label>
                  <input type="text" name="llage6" id="llage6" class="form-control" placeholder="Enter village" required="" >
                </div>
                 <div class="col-md-6">
                  <label>Area</label>
                  <input type="text" name="ea3" id="ea3" class="form-control" placeholder="Enter area" required="" >
                </div>
                <div class="col-md-12">
                   <input type="hidden" name="usid"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_addres">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_addres">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
<!-- ==================diseases===================== -->

<div class="modal fade" id="disease" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">diseases_register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="disease_alert"></div>
              <div class="modal-body">
                <form id="frm_disease" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="diseases_proc"  value="diseases_proc">
              <input type="hidden" name="d_no" id="d_no">
                </div>
                <div class="col-md-6">
                  <label>Disease_Name</label>
                  <input type="text" name="dis2" id="dis2" class="form-control" placeholder="Enter disease_name" required="" >
                </div>
                 <div class="col-md-6">
                  <label>Checkement_Categories</label>
                   <?php echo $coder->fillcombo("SELECT * FROM checkement_categories  where Deleted=0 ","cmb_pats_c_c","select checkement_categories") ?>
                </div>
                 <div class="col-md-6">
                  <label>Price</label>
                  <input type="text" name="rice90" id="rice90" class="form-control" placeholder="Enter price" required="" >
                </div>
                
                <div class="col-md-12">
                   <input type="hidden" name="uid"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_disease">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_disease">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
<!-- ====================checkement_categories==================== -->
      <div class="modal fade" id="checkement_cat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Checkement_Category_register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="checkement_cat_alert"></div>
              <div class="modal-body">
                <form id="frm_checkement_cat" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="checkement_categories_proc"  value="checkement_categories_proc">
              <input type="hidden" name="cc_no" id="cc_no">
                </div>
                <div class="col-md-6">
                  <label>Category_Name</label>
                  <input type="text" name="ctg_name89" id="ctg_name89" class="form-control" placeholder="Enter Category_Name" required="" >
                </div>
                 <div class="col-md-6">
                  <label>Description</label>
                  <input type="text" name="descty78" id="descty78" class="form-control" placeholder="Enter description" required="" >
                </div>
                <div class="col-md-12">
                   <input type="hidden" name="usid"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_checkement_cat">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_checkement_cat">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- ======================accounts=========== -->
          <div class="modal fade" id="Akoon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Accounts_register</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="Akoon_alert"></div>
              <div class="modal-body">
                <form id="frm_Akoon" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="accounts_proc"  value="accounts_proc">
              <input type="hidden" name="acc_no" id="acc_no">
                </div>
                <div class="col-md-6">
                  <label>Account_Number</label>
                  <input type="text" name="accn" id="accn" class="form-control" placeholder="Enter account_number" required="" >
                </div>
                 <div class="col-md-6">
                  <label>institution</label>
                  <input type="text" name="xbwsxq" id="xbwsxq" class="form-control" placeholder="Enter institution" required="" >
                </div>
                 <div class="col-md-6">
                  <label>Balance</label>
                  <input type="text" name="ubsxnb" id="ubsxnb" class="form-control" placeholder="Enter balance" required="" >
                </div>
                
                <div class="col-md-12">
                   <input type="hidden" name="usid"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
                <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_Akoon">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_Akoon">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
            
        <!-- ====================amount types===================== -->
        <div class="modal fade" id="amount_type" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Amount_types_register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="doctor_alert"></div>
              <div class="modal-body">
                <form id="frm_amount_type" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="amount_types_proc"  value="amount_types_proc">
              <input type="hidden" name="am_no" id="am_no">
                </div>
                <div class="col-md-6">
                  <label>Amount_Type</label>
                  <input type="text" name="type67" id="type67" class="form-control" placeholder="Enter Amount_Type" required="" >
                </div>
   
                <div class="col-md-12">
                   <input type="hidden" name="usid"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_amount_type">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_amount_type">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>


          <!-- ====================PatientS===================== -->
      <div class="modal fade" id="bukaan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Patients_register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="bukaan_alert"></div>
              <div class="modal-body">
                <form id="frm_bukaan" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="patient_proc"  value="patient_proc">
              <input type="hidden" name="p_no" id="p_no">
                </div>
                <div class="col-md-6">
                  <label>FullName</label>
                  <input type="text" name="pname78" id="pname78" class="form-control" placeholder="Enter FullName" required="" >
                </div>
                 <div class="col-md-6">
                  <label>Number</label>
                  <input type="text" name="pnum65" id="pnum65" class="form-control" placeholder="Enter phone Number" required="" >
                </div>
              
                 <div class="col-md-6">
                         <label>Gender</label>
                        <br>
                      <select name="p_gen" id="p_gen">
                        
                      <option selected="" value="p">Choose gender type</option>
                      <option value="Male">Male</option>
                      <option value="Female" >Female</option>
                    </select><br>
                  </div>
                   <div class="col-md-6">
                  <label>Birth-date</label>
                  <input type="date" name="pabird89" id="pabird89" class="form-control" placeholder="Enter Birth-date" required="" >
                </div>
                 <div class="col-md-6">
                  <label>address</label>
                   <?php echo $coder->fillcombo("SELECT * from address  where Deleted=0 ","pp_pa","Select address") ?>
                </div>
                
                <div class="col-md-12">
                   <input type="hidden" name="usid"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_bukaan">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_bukaan">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- =======================checkments==================== -->
         <div class="modal fade" id="Check" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">checkments_register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="Check_alert"></div>
              <div class="modal-body">
                <form id="frm_Check" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="checkments_proc"  value="checkments_proc">
              <input type="hidden" name="ck_no" id="ck_no">
                </div>
                <div class="col-md-6">
                  <label>Diseases</label>
                   <?php echo $coder->fillcombo("SELECT * FROM diseases  where Deleted=0","cmchdis_","select Disease") ?>
                </div>
                 <div class="col-md-6">
                  <label>Visits</label>
                   <?php echo $coder->fillcombo("SELECT v_no, concat(patient.name,',',patient.tell)patient FROM visits,patient WHERE patient.p_no=visits.p_no AND visits.deleted=0 ","cviicheck89","Select Visit") ?>
                </div>

                
                  <div class="col-md-6">
                  <label>Result</label>
                  <input type="text" name="cresult" id="cresult" class="form-control" placeholder="Enter result" required="" >
                </div>
                 <div class="col-md-6">
                  <label>Description</label>
                  <input type="text" name="cdescription" id="cdescription" class="form-control" placeholder="Enter description" required="" >
                </div>
                <div class="col-md-12">
                   <input type="hidden" name="usid"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_Check">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_Check">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
       <!-- ---------------------------Visits------------------------------------- -->
       <div class="modal fade" id="vist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">visits_register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="vist_alert"></div>
              <div class="modal-body">
                <form id="frm_vist" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="visits_proc"  value="visits_proc">
              <input type="hidden" name="v_no" id="v_no">
                </div>
               
                 <div class="col-md-6">
                  <label>Patient</label>
                   <?php echo $coder->fillcombo("SELECT * from patient where Deleted=0","cmb_vp","select Patient") ?>
                </div>
                <div class="col-md-6">
                  <label>Doctor</label>
                   <?php echo $coder->fillcombo("SELECT * FROM doctor where Deleted=0","cmb_vD","select doctor") ?>
                </div>

                  <div class="col-md-6">
                  <label>Birth-date</label>
                  <input type="date" name="vbirg" id="vbirg" class="form-control" placeholder="Enter Birth-date" required="" >
                </div>
                <div class="col-md-12">
                   <input type="hidden" name="usid"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_vist">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_vist">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
 <!=========================Reciepts============================>

  <div class="modal fade" id="receipt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Receipts_register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="receipt_alert"></div>
              <div class="modal-body">
                <form id="frm_receipt" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="receipts_proc"  value="receipts_proc">
              <input type="hidden" name="r_no" id="r_no">
                </div>
                 <div class="col-md-6">
                  <label>Accounts</label>
                   <?php echo $coder->fillcombo("SELECT * FROM accounts where Deleted=0","cmb_acc","Select Account") ?>
                </div>
                 <div class="col-md-6">
                  <label>Patient</label>
                   <?php echo $coder->fillcombo("SELECT * FROM patient  where Deleted=0","cmb_patient","Select patient") ?>
                </div>
                <div class="col-md-6">
                  <label>Amount</label>
                  <input type="text" name="recitpamnt" id="recitpamnt" class="form-control" placeholder="Enter Amount" required="" >
                </div>
                 <div class="col-md-6">
                  <label>Receiption-Date</label>
                  <input type="date" name="redate67" id="redate67" class="form-control" placeholder="Enter Receiption-Date" required="" >
                </div>
                 <div class="col-md-6">
                  <label>Description</label>
                  <input type="text" name="recdesc765" id="recdesc765" class="form-control" placeholder="Enter Description" required="" >
                </div>
                <div class="col-md-12">
                   <input type="hidden" name="usid"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_receipt">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_receipt">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
          <!=========================patient_prescription============================>

          <div class="modal fade" id="pat_pres" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Patient_Prescription_Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="pat_pres_alert"></div>
              <div class="modal-body">
                <form id="frm_pat_pres" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="patient_prescription_proc"  value="patient_prescription_proc">
              <input type="hidden" name="pp_no" id="pp_no">
                </div>
                
                 <div class="col-md-6">
                  <label>Visits</label>
                   <?php echo $coder->fillcombo("SELECT v_no, concat(patient.name,',',patient.tell)patient FROM visits,patient WHERE patient.p_no=visits.p_no AND visits.deleted=0","cmvist_cv","select Visit") ?>
                </div>
                 <div class="col-md-6">
                  <label>Prescription</label>
                   <?php echo $coder->fillcombo("SELECT * FROM prescription  where Deleted=0","cmppres_pre","Select Prescription") ?>
                </div>
                
                  <div class="col-md-6">
                  <label>Usage</label>
                  <input type="text" name="pusa89" id="pusa89" class="form-control" placeholder="Enter Usage" required="" >
                </div>
                 <div class="col-md-6">
                  <label> Patient_Prescription Date</label>
                  <input type="date" name="ppresda" id="ppresda" class="form-control" placeholder="Enter Patient_Prescription Date" required="" >
                </div>
                <div class="col-md-12">
                   <input type="hidden" name="usid"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_pat_pres">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_pat_pres">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
       </============================Charges=======================================>
          <div class="modal fade" id="charge" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Charges_register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="vist_alert"></div>
              <div class="modal-body">
                <form id="frm_charge" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="charges_proc"  value="charges_proc">
              <input type="hidden" name="ch_no" id="ch_no">
                </div>

                <div class="col-md-6">
                  <label>Visits</label>
                   <?php echo $coder->fillcombo("SELECT v_no, concat(patient.name,',',patient.tell)patient FROM visits,patient WHERE patient.p_no=visits.p_no AND visits.deleted=0","cm_vchpa78","Select visit") ?>
                </div>

                 <div class="col-md-6">
                  <label>Amount_types</label>
                   <?php echo $coder->fillcombo("SELECT * FROM amount_types  where Deleted=0 ","cmb_chamo","Select Amount_types") ?>
                </div>
               

                  <div class="col-md-6">
                  <label>Amount</label>
                  <input type="text" name="cham876" id="cham876" class="form-control" placeholder="Enter Amount" required="" >
                </div>
                 <div class="col-md-6">
                  <label>Description</label>
                  <input type="text" name="chdes7876" id="chdes7876" class="form-control" placeholder="Enter Description" required="" >
                </div>
                <div class="col-md-12">
                   <input type="hidden" name="usid"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_charge">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_charge">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

       <!-- ==============users========================= -->
        <div class="modal fade" id="user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Users_register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="user_alert"></div>
              <div class="modal-body">
                <form id="frm_user" class="">
               <div class="row">
                <div class="col-md-12">
              <input type="hidden" name="users_proc"  value="users_proc">
              <input type="hidden" name="u_id" id="u_id">
                </div>
                <div class="col-md-6">
                  <label>Fullname</label>
                  <input type="text" name="usfull" id="usfull" class="form-control" placeholder="Enter Fullname" required="" >
                </div>
                 <div class="col-md-6">
                  <label>Email</label>
                  <input type="Email" name="semai" id="semai" class="form-control" placeholder="Enter Email" required="" >
                </div>
                 <div class="col-md-6">
                  <label>Username</label>
                  <input type="text" name="ususer3" id="ususer3" class="form-control" placeholder="Enter Username" required="" >
                </div>
                <div class="col-md-6">
                  <label>Password</label>
                  <input type="password" name="passuse" id="passuse" class="form-control" placeholder="Enter Password" required="" >
                </div>
                <div class="col-md-6">
                  <label>user_type</label>
                  <input type="text" name="usertyusp" id="usertyusp" class="form-control" placeholder="Enter UserType" required="" >
                </div>
                <div class="col-md-12">
                   <input type="hidden" name="usid"  value="<?php echo $_SESSION['user'];?>">
                </div>
               </div>

               </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btn_save_user">Save</button>
                 <button type="button" class="btn btn-primary" id="btn_update_user">update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>



      </============================REports==================================>
<div class="modal  fade" id="mdl_All_reports" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 3%">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel"> Report</h4>
        <button type="button" class="exit" style="background-color: white; cursor: pointer;" data-dismiss="modal" aria-label="exit">
          <span aria-hidden="true">&times;</span>
        </button>
        <button type="button" class="btn btn-success btn-sm" id="btn_prt_dt_rpt">PRINT</button> 
      </div>

      <div class="modal-body">
        <div class="row">
          
          <div class="col-md-12">
            <form id="rpt_show_PRINT">
              <div class="col-md-12">
                 <center>
                          <img src="assets/img/hospital.png" class="img img-fluid " style="width: 100%; height: 130px; margin-top: -2%;">
                        </center>
              </div>
              <div class="col-md-12">
                <div id="rpt_show"></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
        <!-- -----------MDL DELETE------------ -->
<div style="position: absolute">
  <div class="modal fade" id="mdl_delete_all"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content" style="top: 150px;">
        <div class="model-header bg-info">
          <h3 class="model-tilte text-center" style="font-family: impact; color: #fff;">Delete Record</h3>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 text-center">
              <h6 style="font-size: 12px; text-align: center;color: red;"><strong>Are you sure you want to delete this record?</strong></h6><br>
              <h1 style="font-family: impact; font-size: 20px; text-align: center; color: blue; "></h1>
            </div>
          </div>
          <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-danger btn-sm btn-circle" id="yes_d_btn"><span>YES</span></button>
            <button type="button" class="btn btn-github btn-sm" data-dismiss="modal"><span id="spm_deld_Faculty">NO</span></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END MDL DELETE -->


