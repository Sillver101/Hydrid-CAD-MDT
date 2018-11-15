<?php ${"GLO\x42\x41\x4cS"}["\x70\x73\x73\x6f\x64pu\x66\x73"]="\x75r\x6c_l\x6f\x67\x69\x6e";include"\x63\x6cass\x65\x73/\x63\x6f\x6e\x66\x69g.\x70\x68p";session_start();if(!isset($_SESSION["u\x73er\x5fid"])||!isset($_SESSION["l\x6f\x67g\x65\x64\x5f\x69n"])){header("L\x6f\x63\x61t\x69\x6f\x6e:\x20".${${"\x47\x4c\x4fB\x41\x4c\x53"}["\x70s\x73\x6f\x64\x70\x75\x66\x73"]}."");exit();}include"c\x6casse\x73/\x69s\x4co\x67ged\x49n\x2eph\x70";include"\x66\x75\x6ect\x69ons/re\x66r\x65sh\x43ivV\x61\x72\x69a\x62le\x73\x2e\x70\x68\x70";if(isset($_GET["\x6c\x69c\x65\x6e\x73e"])&&strip_tags($_GET["l\x69\x63e\x6es\x65"])==="\x69n\x76\x61l\x69\x64"){${"\x47\x4c\x4f\x42\x41\x4c\x53"}["f\x6b\x63h\x67\x76d"]="\x6de\x73\x73\x61\x67\x65";${${"\x47\x4cO\x42A\x4c\x53"}["\x66\x6b\x63\x68\x67\x76\x64"]}="<\x64\x69v\x20cl\x61\x73\x73=\"\x61\x6c\x65r\x74\x20a\x6c\x65\x72t-\x64\x61n\x67\x65\x72\" \x72\x6f\x6c\x65\x3d\"\x61\x6ce\x72t\">It\x20\x53\x65\x65m\x73 \x59\x6fur\x20D\x72i\x76\x65r\x73\x20\x4c\x69cense\x20\x49s\x20\x4eot\x20Va\x6ci\x64\x2e\x3c/di\x76\x3e";}
?>
<!DOCTYPE html>
<html>
<?php
$page_name = "My Warrants";
include('includes/header.php')
?>
   <body>
     <style>
     table {
         width: 100%;
         border-collapse: collapse;
     }

     table, td, th {

         padding: 5px;
     }

     th {text-align: left;}
     </style>
      <div class="container">
         <div class="main">
            <a href="<?php print $url_civ_view ?>?id=<?php echo $_SESSION['character_id'] ?>"><img src="https://hydrid.us/main-core/assets/imgs/doj.png" class="main-logo" draggable="false"/></a>
            <div class="main-header">
               Hello, <?php echo $_SESSION['character_first_name'] ?>
            </div>
            <?php print($message); ?>
            <?php
            echo "<table>
            <tr>
            <th><center>Issued On</center></th>
            <th><center>Signed By</center></th>
            <th><center>Reason</center></th>
            </tr>";
            $char_id = $_SESSION['character_id'];
            $my_name = $_SESSION['character_first_name'] . ' ' . $_SESSION['character_last_name'];
            $getVeh = "SELECT * FROM warrants WHERE wanted_person='$my_name'";
            $result = $pdo->prepare($getVeh);
            $result->execute();
            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
              echo "<tr>";
              echo "<td><center>" . $row['issued_on'] . "</center></td>";
              echo "<td><center>" . $row['signed_by'] . "</center></td>";
              echo "<td><center>" . $row['reason'] . "</center></td>";
              echo "</tr>";
            }
            echo "</table>";
             ?>
            <?php include('includes/hydrid.php') ?>
         </div>
      </div>
   </body>
</html>
