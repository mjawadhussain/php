<?php 
 $practice=[
             
             [  
             	"name"=>"jawad",
             	"comapny"=>"tech",
                "salary"=>"5000",

             ],
             [

             	"name"=>"hussain",
             	"comapny"=>"mecha",
                "salary"=>"3000",


               ],
               [	"name"=>"fahad",
             	"comapny"=>"data",
                "salary"=>"4000",
                ],
                [
                	"name"=>"asad",
             	"comapny"=>"banking",
                "salary"=>"2000",
],



 ];
     array_push($practice,[
            	"name"=>"mujtaba",
             	"comapny"=>"teache",
                "salary"=>"1000",
      ]);
    
      $practice["4"]["salary"] ="10000";
      

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>
 	<table  border="4px" cellspacing="6px" cellpadding="6px">
 		<thead>
 			<th>#</th>
           	<th>name</th>
            <th>company</th>
            <th>salary</th>
            </thead>
            	<?php foreach ($practice as $key => $value): ?>
            		<tr>
            		<td><?php echo ++$key?></td>
            		<td><?php echo $value["name"];?></td>
            		<td><?php echo $value["comapny"];?></td>
            		<td><?php echo $value["salary"];?></td>

                  
                    </tr>
            <?php endforeach; ?>
 </table> 	
 </body>
 </html>
