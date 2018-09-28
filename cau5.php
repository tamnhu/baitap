<?php

$users = array(
    0 => array(
            'id' => 10, 
            'name' => 'Messi',
            'email' => array(
                    'gmail' => '10@gmail.com',
                    'yahoo' => '10@yahoo.com',
            ),
    ),                
    1=> array(
            'id' => 7, 
            'name' => 'Ronaldo',
            'email' => array(
                    'gmail' => '7@gmail.com',
                    'yahoo' => '7@yahoo.com',
            ),
    ),
    2=> array(
            'id' => 4, 
            'name' => 'Ramos',
            'email' => array(
                    'gmail' => '4@gmail.com',
                    'yahoo' => '4@yahoo.com',
            ),
    ),
    3=> array(
            'id' => 13, 
            'name' => 'Muller',
            'email' => array(
                    'gmail' => '13@gmail.com',
                    'yahoo' => '13@yahoo.com',
            ),
    ),
    4=> array(
            'id' => 11, 
            'name' => 'Neymar',
            'email' => array(
                    'gmail' => '11@gmail.com',
                    'yahoo' => '11@yahoo.com',
            ),
    ),

);
$j = 0;
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<table  >
        <tr>
            <th>STT</th>
            <th>ID</th>
            <th>Name</th>
            <th>Gmail</th>
            <th>Yahoo</th>
        </tr>
        <tr>
            <?php
            for ($i=0; $i < 5; $i++) { 
                # code...
              
             ?>
              <tr >
                <td ><?php echo $j++ ?></td>
                <td ><?php echo $users[$i]['id'] ?></td>
                <td ><?php echo $users[$i]['name']?></td>
                <td ><?php echo $users[$i]['email']['gmail'] ?></td>
            <td ><?php echo $users[$i]['email']['yahoo'] ?></td>
             </tr>
               
             <?php
             } 
              ?>

        </tr>
    </table>
cau b;
<form>
    <input type="txt" name="id" placeholder="Noi Nguoi dung nhao vao">
    <input type="submit" name="Tim kiem">
</form>
<?php
if(empty($_GET['id']))
{
    echo "Nguoi dung chua nhap vao";
} 
else
{
    $you = 0;
    $a = 0;
    for ($i=0; $i <5 ; $i++) { 
        if($users[$i]['id']==$_GET['id'])
        {
            $you++;
            $a = $i;
        }
    }
         if($you==1)
         {
            echo "co ton tai user la:";
            echo $users[$a]['name'];
         }
         else
         {
            echo "khong ton tai users can tim";
         }

    
}
 ?>
 
<p>cau c:</p>
   <?php
   $c = 0;
   for ($i=0; $i < 5; $i++) { 
        for ($ii=$i+1; $ii < 5; $ii++) { 
            if($users[$i]['id']==$users[$ii]['id'])
            {
                $c = $users[$i];
                $users[$i] = $users[$ii];
                $users[$ii] = $c;
            }
        }
    } 
    ?>
  <table  >
        <tr>
            <th>STT</th>
            <th>ID</th>
            <th>Name</th>
            <th>Gmail</th>
            <th>Yahoo</th>
        </tr>
        <tr>
            <?php
            for ($i=0; $i < 5; $i++) { 
                # code...
              
             ?>
              <tr >
                <td ><?php echo $j++ ?></td>
                <td ><?php echo $users[$i]['id'] ?></td>
                <td ><?php echo $users[$i]['name']?></td>
                <td ><?php echo $users[$i]['email']['gmail'] ?></td>
            <td ><?php echo $users[$i]['email']['yahoo'] ?></td>
             </tr>
               
             <?php
             } 
              ?>

        </tr>
    </table>
</body>
<style type="text/css">
    .a{
        padding: 10px 10px;
    }
</style>
</html>