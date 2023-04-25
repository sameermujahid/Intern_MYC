<?php
  if(isset($_GET['uname']) && isset($_GET['password'])){
    $username =  $_GET['uname'];
    $password = $_GET['password'];
    echo "uname ::".$username." password::".$password; 
  }

  ?>         
  <table class="table table-hover">
    <thead>
      <tr>
        <th>register_id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    <?php   
            echo "<tr style='background-color: skyblue;'>
            <td>1</td>
            <td>Rahul</td>
            <td>Nallala</td>
            <td>rahulnalalla@gmail.com</td>
            <td><a href='index.php?1' target='_blank'>get_details</a></td>
            </tr>";
            echo "<tr style='background-color: orange;'>
            <td>2</td>
            <td>varshini</td>
            <td>yalamanchili</td>
            <td>varshiniyalamanchili@gmail.com</td>
            <td><a href='index.php?2' target='_blank'>get_details</a></td>
            </tr>";
            echo "<tr style='background-color: skyblue;'> 
            <td>3</td>
            <td>Arhaan</td>
            <td>MD</td>
            <td>arhaanmd@gmail.com</td>
            <td><a href='index.php?3' target='_blank'>get_details</a></td>
            </tr>";
            echo "<tr style='background-color: orange;'>
            <td>4</td>
            <td>jahnavi</td>
            <td>gorrela</td>
            <td>jahnavigorrela@gmail.com</td>
            <td><a href='index.php?4' target='_blank'>get_details</a></td>
            </tr>";
            echo "<tr style='background-color: skyblue;'>
            <td>5</td>
            <td>sameer</td>
            <td>SK</td>
            <td>sameerskgmail.com</td>
            <td><a href='index.php?5' target='_blank'>get_details</a></td>
            </tr>";
            echo "<tr style='background-color: orange;'>
            <td>6</td>
            <td>tasneem</td>
            <td>SK</td>
            <td>tasneemsk@gmail.com</td>
            <td><a href='index.php?6' target='_blank'>get_details</a></td>
            </tr>";
            echo "<tr style='background-color: skyblue;'>
            <td>7</td>
            <td>lizy</td>
            <td>D</td>
            <td>lizyd@gmail.com</td>
            <td><a href='index.php?7' target='_blank'>get_details</a></td>
            </tr>";
            echo "<tr style='background-color: orange;'>
           <td>8</td>
            <td>vignesh</td>
            <td>sripadha</td>
            <td>vigneshsripadha@gmail.com</td>
            <td><a href='index.php?8' target='_blank'>get_details</a></td>
            </tr>";
            echo "<tr style='background-color: skyblue;'>
            <td>9</td>
            <td>rajababu</td>
            <td>desalaa</td>
            <td>rajababudesala@gmail.com</td>
            <td><a href='index.php?9' target='_blank'>get_details</a></td>
            </tr>";
    ?>
    </tbody>
  </table>
</div>



</body>
</html>


</body>
</html>

