if(isset($_GET['comment'])){
      $comment = $_GET['comment'];
      $comment_query= "INSERT INTO comments comment VALUE '$comment' ";
      $comment_query_run= $conn ->query($comment_query);


     }