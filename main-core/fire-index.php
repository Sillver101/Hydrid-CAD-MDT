<?php ${"G\x4cO\x42\x41\x4c\x53"}["\x64\x62\x6c\x76\x77\x66\x77\x70bl\x6b"]="\x75\x72\x6c\x5f\x69\x6e\x64\x65\x78";include"\x63\x6c\x61\x73\x73es/c\x6f\x6ef\x69\x67\x2e\x70\x68p";session_start();if(!isset($_SESSION["\x75se\x72_id"])||!isset($_SESSION["\x6cog\x67\x65d\x5f\x69n"])){$zqzclwo="ur\x6c_l\x6f\x67\x69\x6e";header("\x4co\x63ati\x6fn: ".${$zqzclwo}."");exit();}include"\x63la\x73\x73\x65s/\x69\x73L\x6f\x67\x67\x65dI\x6e.\x70\x68\x70";${"\x47\x4c\x4fB\x41LS"}["\x66yt\x62glsd\x74"]="\x6ce\x6f\x5f\x67\x73\x65tt\x69\x6egs";${"GL\x4f\x42\x41L\x53"}["b\x7a\x79\x63\x68\x7a\x70\x6d\x70\x6a"]="\x73t\x6d\x74\x73";if($_SESSION["\x69s\x5f\x66\x69re"]==="\x4eo"){header("\x4coc\x61tio\x6e:\x20".${${"\x47\x4cO\x42\x41LS"}["d\x62\x6c\x76\x77\x66\x77\x70b\x6c\x6b"]}."?\x6e\x70\x3df\x69\x72\x65");exit();}${${"\x47LO\x42\x41\x4c\x53"}["\x62\x7ay\x63\x68z\x70\x6d\x70j"]}=$pdo->prepare("S\x45L\x45CT\x20* \x46RO\x4d s\x65tt\x69ng\x73");$stmts->execute();${${"\x47\x4cO\x42\x41L\x53"}["fy\x74b\x67\x6c\x73\x64t"]}=$stmts->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<?php
$page_name = "Fire Home";
include('includes/header.php')
?>
<body>
   <div class="container-leo">
      <div class="main-leo">
        <div class="leo-header"><div class="float-right" id="getTime"></div>
          <div class="float-left">
          </div>
         <div class="center"><a href="functions/leo/api.php?a=endShift"><img src="https://hydrid.us/main-core/assets/imgs/fire.png" class="main-logo" draggable="false"/></a></div>
         <div class="main-header-leo">
            <div class="float-left">Supervisor: <?php if($_SESSION["\x66\x69re\x5f\x73\x75p\x65rvi\x73\x6f\x72"]==="\x59\x65s"){echo"Yes";}else{echo"No";}
?></div>
            <div class="float-right"><div id="checkAOP"></div></div>
            <div class="center">Welcome, <?php echo $_SESSION['identifier'] ?></div>
         </div>
       </div>
         <div id="checkStatus"></div>
         <h6 style="color:white;">DEPARTMENT/STATION</h6>
         <?php if ($_SESSION['on_duty'] === "No"): ?>
           <select style='width:250px;' name='setFireStation' class='select' onChange='setFireStation(this)'>
           <option selected='true' disabled='disabled'><?php if ($_SESSION['on_duty'] === "No") {
             echo '--- SELECT DEPARTMENT ---';
           } else {
             echo $_SESSION['current_station'];
           } ?></option>
           <option value='R.H.F.D'>Rockford Hills Fire Department</option>
           <option value='D.F.D'>Davis Fire Department</option>
           <option value='E.L.H.F.D'>El Burro Heights Fire Department</option>
           <option value='P.B.F.D'>Paleto Bay Fire Department</option>
           <option value='L.S.I.A.F.D'>L.S.I.A Fire Department</option>
           <option value='S.S.F.D'>Sandy Shores Fire Department</option>
           <option value='F.Z.F.D'>Fort Zancudo Fire Department</option>
         </select>
         <?php else: ?>
           <select style='width:200px;' name='updateFireStation' class='select' onChange='updateFireStation(this)'>
           <option selected='true' disabled='disabled'><?php
             echo $_SESSION['current_station'];
            ?></option>
           <option value='R.H.F.D'>Rockford Hills Fire Department</option>
           <option value='D.F.D'>Davis Fire Department</option>
           <option value='E.L.H.F.D'>El Burro Heights Fire Department</option>
           <option value='P.B.F.D'>Paleto Bay Fire Department</option>
           <option value='L.S.I.A.F.D'>L.S.I.A Fire Department</option>
           <option value='S.S.F.D'>Sandy Shores Fire Department</option>
           <option value='F.Z.F.D'>Fort Zancudo Fire Department</option>
         </select>
         <?php endif; ?>
           <div class="row">
             <div class="col-sm-2">
               <a data-toggle="modal" href="#notepad" class="btn btn-secondary btn-block">Notepad</a><br-leo>
               <?php if (mapModule_isInstalled): ?>
                 <a data-toggle="modal" href="#liveMap" class="btn btn-info btn-block">Map</a><br-leo>
               <?php endif; ?>
             </div>
             <div class="col-sm-8">
               <form method="post" action="leo-index.php">

               </form>
               <?php print($message); ?>
               <div class="col-sm-12">
                <div id="get911callsFire"></div>
               </div>
             </div>
             <?php if ($_SESSION['fire_supervisor'] === "Yes"): ?>
               <div class="col-sm-2">
                 <a href="fire-all-identities.php" class="btn btn-success btn-block">All Identities</a><br-leo>
               </div>
             <?php endif; ?>
           </div>
         <?php include('includes/hydrid.php') ?>
      </div>
   </div>

   <!-- modals -->
   <!-- notepad modal -->
   <div class="modal fade" id="notepad" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-md modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Notepad (Resets After Shift)</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
              <form method="post" action="leo-index.php">
                <div class="form-group">
                  <?php if ($settings_theme_db === "lumen"): ?>
                    <textarea name="textarea" oninput="updateNotepad(this.value)" rows="12" cols="89"><?php echo $_SESSION['notepad']; ?></textarea>
                  <?php elseif ($settings_theme_db === "pulse" OR $settings_theme_db === "pulsev2"): ?>
                    <textarea name="textarea" oninput="updateNotepad(this.value)" rows="12" cols="89"><?php echo $_SESSION['notepad']; ?></textarea>
                  <?php elseif ($settings_theme_db === "simplex"): ?>
                    <textarea name="textarea" oninput="updateNotepad(this.value)" rows="12" cols="89"><?php echo $_SESSION['notepad']; ?></textarea>
                  <?php else: ?>
                    <textarea name="textarea" oninput="updateNotepad(this.value)" rows="12" cols="74"><?php echo $_SESSION['notepad']; ?></textarea>
                  <?php endif; ?>
                </div>
           </div>
           </form>
         </div>
      </div>
   </div>
   <!-- // -->
   <!-- live map modal -->
   <div class="modal fade" id="liveMap" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Live Map</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
              <iframe frameborder="0" width="100%" height="720" src="<?php echo $mapModule_link; ?>"></iframe>
            </div>
      </div>
   </div>
  </div>
   <!-- // -->
   <!-- end modals -->
   <!-- js -->
   <script src="https://hydrid.us/main-core/assets/js/pages/fire.js"></script>
   <!-- end js -->
</body>
</html>
