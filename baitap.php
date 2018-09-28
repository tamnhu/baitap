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
?>		











<html>					
	<head>
	<meta charset="utf-8">				
	</head>				
					
	<body>	
        <form>    
        ID <input type="txt" name='asdfasdfas'/>
        <input type="submit" value="Tìm kiếm"/>
        </form> 			
		<table style="border: 3px solid pink;">			
			<tr>		
				<th style="border: 3px solid yellow;">----ID----</th>	
				<th style="border: 3px solid yellow;">----Name----</th>	
				<th style="border: 3px solid yellow;">----Gmail----</th>
                <th style="border: 3px solid yellow;">----Yahoo----</th>	
			</tr>

					
			<?php for($i = 0; $i < count($users); $i++):?>
                                <tr>     
                                        <td style="border: 3px solid red;"><?php echo $users[$i]['id']; ?></td>
                                        <td style="border: 3px solid red;"><?php echo $users[$i]['name']; ?></td>
                                        <td style="border: 3px solid red;"><?php echo $users[$i]['email']['gmail']; ?></td>
                                        <td style="border: 3px solid red;"><?php echo $users[$i]['email']['yahoo']; ?></td>
                                </tr>
                        <?php endfor; ?>

		</table>  
                <!-- baitap2 -->
                      <?php     
                      $flag = 0;
                      $users_tim = '';
                      for($i = 0; $i < count($users); $i++):?>
                               <?php
                                        if($users [$i]['id'] == 10)
                                        {
                                             $flag = 1;
                                             $users_tim =  $users [$i]['id']; 
                                        }

                               ?>
                        <?php endfor; ?>
                        <?php
                                if($flag == 1)
                                {
                                        echo "Tim thay user co ID = " ;
                                        echo  $users_tim;
                                }
                                else
                                        echo "Khong thay";
                                ?>
                <!-- baitap3 -->  
                <!-- baitap4 --> 
                <form>ID<input type="txt" name="id"/>
                        <input type="submit" value="Tim kiem"/>
                </form>
                <?php $MIU=($_GET['id']);  ?>
                <?php for($i= 0;$i<count($users);$i++): ?>
                    <?php if($users[$i]['id']==$MIU):  ?>
                        <table>
                            <tr>
                                <th style="border: 3px solid yellow;">----ID----</th>   
                                <th style="border: 3px solid yellow;">----Name----</th> 
                                <th style="border: 3px solid yellow;">----Gmail----</th>
                                <th style="border: 3px solid yellow;">----Yahoo----</th>
                            </tr>
                            <td><?php echo $i + 1;?></td>
                                        <td style="border: 3px solid red;"><?php echo $users[$i]['id']; ?></td>
                                        <td style="border: 3px solid red;"><?php echo $users[$i]['name']; ?></td>
                                        <td style="border: 3px solid red;"><?php echo $users[$i]['email']['gmail']; ?></td>
                                        <td style="border: 3px solid red;"><?php echo $users[$i]['email']['yahoo']; ?></td>
                        </table>
                    <?php endif;  ?>
                <?php endfor;  ?>
                <?php echo "khong tim thay ket qua!"; ?>
    </body>
</html>

