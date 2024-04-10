<?php
   $img ='';
   $pdf = '';
   
   //IMAGEM
   if(isset($_FILES['imagem']['name'])){
    $img = $_FILES['imagem']['type'];
    if($img == "image/png" || $img == "image/jpeg" || $img == "image/bmp" ){
        $img = "imagem/" . $_FILES['imagem']['name'];  
        move_uploaded_file($_FILES['imagem']['tmp_name'], $img); 
    }else{
        echo"<br>";
        echo"Envie um arquivo com extensão jpeg/png ou bmp";
    }
   } 
 
     //PDF
   if(isset($_FILES['pdf']['name'])){
    $pdf = $_FILES['pdf']['type'];
    if($pdf == "application/pdf"){
        $pdf = "pdf/" . $_FILES['pdf']['name'];
        move_uploaded_file($_FILES['pdf']['tmp_name'], $pdf);
    }else{
        echo"<br>";
        echo"Envie um arquivo com extensão pdf";
    }
   }
   //Exibir Imagem e Link para o PDF
?> 
<?php if(!empty($img)): ?>
    <img src="<?php echo $img; ?>" alt="Imagem Enviada" width="20%">
<?php endif ?>
<br>
<?php if(!empty($pdf)): ?>
    <a href ="<?php echo $pdf ?>">Link do PDF</a>
<?php endif ?> 