<html>
   <head>
   	<title>Validation:PHP</title>
      <style>
        .form{
        	margin: 100px;
        	padding: 50px;
        	border: solid black 5px;
        }
         .error {
         	color: red;
         }
      </style>
   </head>
   <body>
      <?php
			if(isset($_POST['submit'])){
				$to = "xyz@gmail.com";
				$subject = "Contact information from website";
				$msg=" ";
				$header = "From:".$_POST["email"];
				mail($to,$subject,$msg,$header);
			}
      ?>
      <form class='form' method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <table style="border: solid black 2px; margin-left: 300px; padding: 5px;">
         	<caption>	
         		<h2>Contact Form</h2>
     		</caption>
            <tr>
               <td>Name:</td>
               <td><input type = "text" name = "name">
               </td>
            </tr>   
            <tr>
               <td>E-mail: </td>
               <td><input type = "text" name = "email">
               </td>
            </tr>
            <tr>
               <td>Message:</td>
               <td> <textarea name = "message">
				</textarea>
               </td>
            </tr>
            <td>
               <input type = "submit" name = "submit" value = "Submit"> 
            </td>
         </table>
      </form>
      <?php
   </body>
</html>