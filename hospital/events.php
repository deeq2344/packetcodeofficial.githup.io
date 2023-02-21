<script type="text/javascript">
	SYD_ALL("doctor","SELECT *  FROM doctor WHERE 	doc_no=","");
	SYD_ALL("addres","SELECT *  FROM address WHERE add_no=","");
	SYD_ALL("bukaan","SELECT *  FROM patient WHERE p_no=","");
	SYD_ALL("Check","SELECT *  FROM checkments WHERE ck_no=","");
    SYD_ALL("prescr","SELECT *  FROM prescription WHERE pr_no=","");
    SYD_ALL("disease","SELECT *  FROM diseases WHERE d_no=","");
    SYD_ALL("checkement_cat","SELECT *  FROM checkement_categories WHERE cc_no=","");
    SYD_ALL("Akoon","SELECT *  FROM accounts WHERE acc_no=","");
    SYD_ALL("amount_type","SELECT * FROM amount_types WHERE am_no=","");
    SYD_ALL("vist","SELECT * FROM visits WHERE v_no=","");
    SYD_ALL("receipt","SELECT *  FROM receipts WHERE r_no=","");
    SYD_ALL("pat_pres","SELECT *  FROM patient_prescription WHERE pp_no=","");
    SYD_ALL("charge","SELECT *  FROM charges WHERE ch_no=","");
    SYD_ALL("user","SELECT *  FROM users WHERE u_id=","");
	

    $(".btn_patientg").click(function(){
 	$("#mdl_All_reports").modal("show");
 	var qry="call  patient_proc_report";
 	$.post("config/SYD_Table.php","qry="+qry,function(data){
 		$("#rpt_show").html(data);
 	});
 })



 $(".btn_Patients").click(function(){
 	$("#mdl_All_reports").modal("show");
 	var qry="SELECT p_no ID,name Full_name,tell Phone,sex Gender,timestampdiff(year,birth_date,curdate()) age,concat(address.district,',',address.village)address FROM address,patient,users WHERE patient.add_no=address.add_no AND users.u_id=patient.user AND patient.deleted=0 and p_no="+$("#cbm_Patients_print").val();
 	$.post("config/SYD_Table.php","qry="+qry,function(data){
 		$("#rpt_show").html(data);
 	});
 })


 $(".btn_booqde").click(function(){
    $("#mdl_All_reports").modal("show");
    var qry="call  visits_general()";
    $.post("config/SYD_Table.php","qry="+qry,function(data){
        $("#rpt_show").html(data);
    });
 })

 $(".btn_bdates").click(function(){
    $("#mdl_All_reports").modal("show");
    var qry=" CALL visits_bt_two('"+$("#dat1").val()+"','"+$("#dat2").val()+"');";
    $.post("config/SYD_Table.php","qry="+qry,function(data){
        $("#rpt_show").html(data);
    });
 })
  $(".btn_baaritaan").click(function(){
    $("#mdl_All_reports").modal("show");
    var qry="call  checkments_general";
    $.post("config/SYD_Table.php","qry="+qry,function(data){
        $("#rpt_show").html(data);
    });
 })
   $(".btn_sinlepatinet").click(function(){
    $("#mdl_All_reports").modal("show");
    var qry="call singel_patient('"+$("#cmb_sp").val()+"');";
    $.post("config/SYD_Table.php","qry="+qry,function(data){
        $("#rpt_show").html(data);
    });
  })

    $(".btn_bari79").click(function(){
    $("#mdl_All_reports").modal("show");
    var qry="call single_visit_patient('"+$("#cmb_baar").val()+"');";
    $.post("config/SYD_Table.php","qry="+qry,function(data){
        $("#rpt_show").html(data);
    });
  })


  $(".btn_chdate").click(function(){
    $("#mdl_All_reports").modal("show");
    var qry=" CALL checkments_bw_two('"+$("#s1").val()+"','"+$("#s2").val()+"');";
    $.post("config/SYD_Table.php","qry="+qry,function(data){
        $("#rpt_show").html(data);
    });
 })
   $(".btn_spepatie_single").click(function(){
    $("#mdl_All_reports").modal("show");
    var qry="call boono_proc('"+$("#cmb_spepa").val()+"');";
    $.post("config/SYD_Table.php","qry="+qry,function(data){
        $("#rpt_show").html(data);
    });
  })


     $(".btn_spepatie_general").click(function(){
    $("#mdl_All_reports").modal("show");
    var qry="call  VIEW_statement_of_receipts";
    $.post("config/SYD_Table.php","qry="+qry,function(data){
        $("#rpt_show").html(data);
    });
 })
     $(".btn_finance").click(function(){
    $("#mdl_All_reports").modal("show");
    var qry=" CALL receipts_bt_dates('"+$("#r1").val()+"','"+$("#r2").val()+"');";
    $.post("config/SYD_Table.php","qry="+qry,function(data){
        $("#rpt_show").html(data);
    });
 })

     
   $(".btn_sceege").click(function(){
    $("#mdl_All_reports").modal("show");
    var qry="call single_charge('"+$("#cmb_chr").val()+"');";
    $.post("config/SYD_Table.php","qry="+qry,function(data){
        $("#rpt_show").html(data);
    });
  })
      $(".btn_gcharge").click(function(){
    $("#mdl_All_reports").modal("show");
    var qry="call  VIEW_Statement_of_charges";
    $.post("config/SYD_Table.php","qry="+qry,function(data){
        $("#rpt_show").html(data);
    });
 })

 $(".btn_strans_single").click(function(){
    $("#mdl_All_reports").modal("show");
    var qry="call money('"+$("#cmb_mon").val()+"');";
    $.post("config/SYD_Table.php","qry="+qry,function(data){
        $("#rpt_show").html(data);
    });
  })


     $(".btn_Gtrans_general").click(function(){
    $("#mdl_All_reports").modal("show");
    var qry="call  money_general";
    $.post("config/SYD_Table.php","qry="+qry,function(data){
        $("#rpt_show").html(data);
    });
 })





</script>