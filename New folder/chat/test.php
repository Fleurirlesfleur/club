<?php 
                //if(isset($_POST['send'])){
                    //$out_id = $_POST['out_id'];
                   // $in_id = $_POST['in_id'];
                    $output="";
                $query="SELECT * From messages where out_id=$id and in_id=$a_id ORDER BY msg_id asc";
                        $result1=mysqli_query($con,$query);
                        //$output="";
                        //$count=mysqli_num_rows($result1);
                        if(mysqli_num_rows($result1)>0){
                        while($message=mysqli_fetch_assoc($result1)){
                            //if($message['out_id'] === $id){
                            //echo $message['msg'];
                            //echo '<br>';
                            $output.= '<div class="chat outgoing">
                                        <div class="details">
                                        <p>'.$message['msg'].'</p>
                                        </div>
                                        </div>';
                            }
                        }
                        echo $output;
                    //}
                //}
                
                    //if (isset($_POST['msg'])){
                   // $out_id = $_POST['out_id'];
                   // $in_id = $_POST['in_id'];
                    $output="";
                $query1="SELECT * From messages where out_id=$a_id  and in_id=$id ORDER BY msg_id asc";
                        $result2=mysqli_query($con,$query1);

                        if(mysqli_num_rows($result2)>0){
                        while($message=mysqli_fetch_assoc($result2)){
                           // if($message['out_id'] === $in_id){
                            //echo $message['msg'];
                            //echo '<br>';
                            $output.= ' <div class="chat incoming">
                                        <img src="profileIcon.jpg" alt="Profile Photo" class="profile-photo">
                                        <div class="details">
                                             <p>'. $message['msg'] .'</p>
                                        </div>
                                        </div> ';
                            }
                        }
                        echo $output;
                   // }
                //}?>   
                <?php $query="SELECT * From messages where out_id=$id and in_id=$a_id ORDER BY msg_id asc";
                        $result1=mysqli_query($con,$query);

                        $count=mysqli_num_rows($result1);
                        while($message=mysqli_fetch_assoc($result1)){
                            echo $message['msg'];
                            echo '<br>';
                        }?>
                <?php $query1="SELECT * From messages where out_id=$a_id and in_id=$id ORDER BY msg_id asc";
                        $result2=mysqli_query($con,$query1);

                        $count=mysqli_num_rows($result2);
                        while($message=mysqli_fetch_assoc($result2)){
                            echo $message['msg'];
                            echo '<br>';
                        }
                ?>