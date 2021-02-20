<?php 

class view {
public function searchView($result){?>
<div id="posts">


<h2 class="fPost">Friend's Post</h2>
<?php
if(mysqli_num_rows($result)>0){

while($row=mysqli_fetch_assoc($result)){?>
<div id="posts">

   <h4><?php echo $row['author'] ?> </h4>
   <h4><?php echo $row['time'] ?> </h4>

   <p> <?php echo $row['message_content'] ?> </p>

   </div>
   
<?php } 

 }
  



  
   } 

   public function RenderViewGuest($result,$comments){

      $i=0;
      if(mysqli_num_rows($result)>0){
      
      while($row=mysqli_fetch_assoc($result)){?>
      <div id="posts">
         <h4><?php echo $row['author'] ?> </h4>
         <p> <?php echo $row['message_content'] ?> </p>
      
         <?php 
         
         $comment =$comments[$i];
          ?>          
          
          <h4>Comments:</h4>
          
          <?php
      if(mysqli_num_rows($comment)>0){
      
      
         while($rowComment= mysqli_fetch_assoc($comment)){
      
            if($rowComment['message_id']== $row['id']){?>
            
               <h4><?php echo $rowComment['author']?> : <?php echo $rowComment['comment'] ?></h4>
            
            <?php } 
         }
         
         
      } 
      
         
         
         
         ?>
      
      
         <h4>-------------------------------------------------------------------------------------------------</h4>
         <form action="classes\controller.php?path=comment&&messageid= <?php echo $row["id"] ?> " method="POST">
          </form>
         </div>
      
      <?php 
      $i++;
      }
      
      
      }
      

   }




public function RenderView($result,$comments){
   $i=0;
if(mysqli_num_rows($result)>0){

while($row=mysqli_fetch_assoc($result)){?>
<div id="posts">
   <h4><?php echo $row['author'] ?> </h4>
   <p> <?php echo $row['message_content'] ?> </p>

   <?php 
   
   $comment =$comments[$i];
    ?>          
    
    <h4>Comments:</h4>
    
    <?php
if(mysqli_num_rows($comment)>0){


   while($rowComment= mysqli_fetch_assoc($comment)){

      if($rowComment['message_id']== $row['id']){?>
      
         <h4><?php echo $rowComment['author']?> : <?php echo $rowComment['comment'] ?></h4>
      
      <?php } 
   }
   
   
} 

   
   
   
   ?>


   <h4>Post a comment</h4>
   <form action="classes\MVC\controller.php?path=comment&&messageid= <?php echo $row["id"] ?> " method="POST">
   <input type="text" name="comment" id="comment">
   <input type="submit" id="button" value="Comment">
    </form>
   </div>

<?php 
$i++;
}


}


   

   
   



     } 
      
         } ?>