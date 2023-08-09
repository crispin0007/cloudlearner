<?php
                  $sql = "SELECT * FROM comments  WHERE course_id='$course_id' ";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                    while ($comments = $result->fetch_assoc()) {
                      ?>
                <div class="card-body">
                  
                  <p><?php echo $comments['comment']; ?></p>
                  <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                    
                      <p class="small mb-0 ms-2"><?php echo $comments['stu_name']; ?></p>
               
                    </div>
                  </div>
                </div>
                <?php
                    }
                  } else {
                    echo "No Comments found for the Course. Add Comment";
                  } ?>


<div class="card-body">

                  <p>Type your note, and hit enter to add it</p>
                  <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                      <blockquote class="blockquote pb-2">
                        <p class="small mb-0 ms-2">Johny</p>
                      </blockquote>
                    </div>
                  </div>
                </div>