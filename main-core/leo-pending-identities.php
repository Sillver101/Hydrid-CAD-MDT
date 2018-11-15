<?php ${"\x47\x4c\x4fB\x41\x4c\x53"}["t\x66su\x79\x6d\x6d"]="\x75\x72\x6c_l\x65o\x5fi\x6edex";include"c\x6c\x61\x73\x73\x65s/con\x66i\x67\x2e\x70h\x70";session_start();if(!isset($_SESSION["u\x73er\x5fi\x64"])||!isset($_SESSION["\x6co\x67\x67\x65\x64_in"])){$isyhsk="\x75r\x6c\x5fl\x6f\x67\x69\x6e";header("\x4c\x6f\x63at\x69\x6f\x6e:\x20".${$isyhsk}."");exit();}include"cla\x73\x73e\x73/\x69s\x4cogg\x65dIn\x2e\x70\x68p";if($_SESSION["l\x65o\x5fsuperviso\x72"]==="\x4e\x6f"){header("\x4c\x6f\x63\x61\x74io\x6e: ".${${"\x47\x4cO\x42\x41L\x53"}["t\x66su\x79m\x6d"]}."");exit();}
?>
<!DOCTYPE html>
<html>
<?php
$page_name = "LEO Supervisor";
include('includes/header.php')
?>
<body>
   <div class="container-leo">
      <div class="main-leo">
        <div class="leo-header"><div class="float-right" id="getTime"></div>
        <div class="float-left">
          <?php if (subdivisionModule_isInstalled): ?>
            <div style="margin-top:50px;">
              <h6>Sub Division</h6>
              <?php
              echo "
              <select style='width:200px;' name='changeSubDivision' class='select' onChange='changeSubDivision(this)'>
              <option selected='true' disabled='disabled'>" . $_SESSION['sub_division'] . "</option>";
              $getSDS = "SELECT * FROM sub_divisions";
              $result = $pdo->prepare($getSDS);
              $result->execute();
              while ($row = $result->fetch(PDO::FETCH_ASSOC))
                {
                echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
                }
              echo "</select>";
               ?>
            </div>
          <?php endif; ?>
        </div>
         <div class="center"><a href="<?php echo $url_leo_index ?>"><img src="https://hydrid.us/main-core/assets/imgs/police.png" class="main-logo" draggable="false"/></a></div>
         <div class="main-header-leo">
            <div class="float-left">Supervisor: <?php if ($_SESSION['leo_supervisor'] === "Yes") {
              echo 'Yes';
            } else {
              echo 'No';
            } ?></div>
            <div class="center">Welcome, <?php echo $_SESSION['identifier'] ?></div>
         </div>
       </div>
         <?php print($message); ?>
           <div class="row">
             <div class="col-sm-2">
               <a data-toggle="modal" href="#searchNameDB" class="btn btn-success btn-block">Name Lookup</a><br-leo>
               <a data-toggle="modal" href="#searchDMV" class="btn btn-success btn-block">Vehicle Lookup</a><br-leo>
               <a data-toggle="modal" href="#searchWeaponDB" class="btn btn-success btn-block">Weapon Lookup</a><br-leo>
               <a data-toggle="modal" href="#newTicket" class="btn btn-warning btn-block">New Ticket</a><br-leo>
               <a data-toggle="modal" href="#arrestReportModal" class="btn btn-warning btn-block">New Arrest Report</a><br-leo>
               <a data-toggle="modal" href="#notepad" class="btn btn-secondary btn-block">Notepad</a><br-leo>
               <a data-toggle="modal" href="#addBoloModal" class="btn btn-danger btn-block">Add Bolo</a><br-leo>
               <a data-toggle="modal" href="#activeUnitsmodal" class="btn btn-primary btn-block">Active Units</a><br-leo>
               <?php if (mapModule_isInstalled): ?>
                 <a data-toggle="modal" href="#liveMap" class="btn btn-info btn-block">Map</a><br-leo>
               <?php endif; ?>
             </div>
             <div class="col-sm-8">
               <div class="col-sm-12">
                <div id="getPendingIds"></div>
               </div>
             </div>
             <?php if ($_SESSION['leo_supervisor'] === "Yes"): ?>
             <div class="col-sm-2">
               <a href="<?php echo $url_leo_supervisor_view_all_identities ?>" class="btn btn-success btn-block">All Identities</a><br-leo>
               <a href="<?php echo $url_leo_supervisor_view_pending_identities ?>" class="btn btn-success btn-block">Pending Identities</a><br-leo>
             </div>
             <?php endif; ?>
           </div>
         <?php include('includes/hydrid.php') ?>
      </div>
   </div>

   <!-- modals -->

   <!-- end modals -->

   <!-- sounds -->
   <!-- <audio id="panicButton" src="assets/sounds/panic-button.mp3" preload="auto"></audio> -->
   <!-- end sounds -->

   <!-- js -->
   <script src="https://hydrid.us/main-core/assets/js/pages/leo.js"></script>
   <!-- end js -->
</body>
</html>
