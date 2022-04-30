<?php
    include("radioButton.php");
?>
<html>
<body>

               <form name ="form1" method ="post" action ="radioButton.php">
                    <h2>Please select a destination:</h2>
                    <input type="radio" id="male" name="gender" value="male">
                      <label for="paris">male</label><br>
                      <?php print $male_status; ?>
                    <input type="radio" id="female" name="gender" value="female">
                      <label for="santiago">female</label><br>
                      <?php print $female_status; ?>
                    <input class="button" type="submit" name="Submit1" value="Book Flight"/>
                </form>
            

</body>
</html>

