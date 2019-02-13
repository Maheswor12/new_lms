<?php require_once 'includes/dbconnection.php';
     
if (isset($_GET['edit'])){
    $id=$_GET['edit'];
    $query="select * from  content where content_id='$id'";
    $result=mysqli_query($conn, $query);
    $row=mysqli_fetch_assoc($result);
    //var_dump ($row);
}
     
    
    
 ?>
   <div class="row">
    <div class="col-md-4">
      <form action="process2.php" method="post" enctype="multipart/form-data">
      
      <?php 
          
          if (isset($_GET['edit'])){ ?>
             
             <input type="hidden" name="id" value="<?=$row['content_id'];?>">
              
              
              <?php
          }
          ?>
          
          <input type="hidden" name="table" value="content">
          
       <div class="form-group">
           <label for="exampleFormControlInput1">Page Title</label>
           <input type="text" class="form-control" name="title" placeholder="Page Title" required value="<?=(isset($_GET['edit']))?$row['title']:''; ?>">
       </div>
       <div class="form-group">
           <label for="content" >Content</label>
           <textarea class="form-control" name="content" rows="3" placeholder="Page Content" required><?=(isset($_GET['edit']))?$row['content']:''; ?></textarea>
       </div>
       
       
       <button name="form_name" value="pages" type="submit" class="btn btn-primary btn-block"><?=(isset($_GET['edit']))?'Update':'Create'; ?></button>
</form>
</div>
<div class="col-md-8">
<div class="table-responsive">
<table class="table table-bordered table-sm">
       <thead>
           <tr>
               <th scope="col">S.N</th>
               <th scope="col">Title</th>
               <th scope="col" colspan="2">Action</th>
               
           </tr>
       </thead>
       <tbody>
          <?php $query="select * from  content";
           $result=mysqli_query($conn, $query);
           $count=1;
          while($row=mysqli_fetch_assoc($result)){
              ?>
          
           <tr>
               <th scope="row"><?=$count;?></th>
               <td><?=$row['title'];?></td>
               <td><a href='index.php?page=pages&edit=<?=$row['content_id'];?>'class='btn btn-info btn-sm'>Edit</a></td>
                <td><a href='process2.php?table=content&delete=<?=$row['content_id'];?>'class='btn btn-danger btn-sm'>Delete</a></td>
           </tr>
           <?php $count++; } ?>
       </tbody>
   </table></div>
</div>
</div>