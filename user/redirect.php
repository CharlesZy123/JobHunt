<?php
session_start();
if (isset($_GET['id'])) {
   $id = $_GET['id'];
   $_SESSION['jobhub'] = true;

   switch ($id) {
      case 1:
         $_SESSION['dept'] = $id;
         header('');
         break;
      case 2:
         $_SESSION['dept'] = $id;
         header('');
         break;
      case 3:
         $_SESSION['dept'] = $id;
         header('');
         break;
      case 4:
         $_SESSION['dept'] = $id;
         header('Location: ../piso/');
         exit();
         break;
      case 5:
         $_SESSION['dept'] = $id;
         header('');
         break;
      default:
         header('Location: dashboard');
         break;
   }
} else {
   $message = base64_encode('danger~Something went wrong!');
   header('Location: dashboard?m=' . $message);
}
