<html>
   <body>
        <?php $ff=false;?>
      <form action = "" method = "POST" enctype = "multipart/form-data">
         <br><br>

         <input type = "file" name = "f" />
         <input type = "submit" />
          </form>
         //***********displaying the information about the file*****************
          <?php if (isset($POST['f'])){echo"true";$ff=$_POST['f'];}?>

         <ul>
            <li>Sent file: <?php echo $_FILES[$ff]['name'];  ?>
            <li>File size: <?php echo $_FILES[$ff]['size'];  ?>
            <li>File type: <?php echo $_FILES[$ff]['type'] ?>
         </ul>


      <?php
if(isset($_FILES['f'])){
      $errors= array();
  // ********uploading the file to newfolder   ********
      if(empty($errors)==true) {
       move_uploaded_file($file_tmp,"newfolder/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>


   </body>
</html>
