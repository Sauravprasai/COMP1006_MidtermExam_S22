<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMP1006 - Midterm - Question 1</title>
    <!--Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <?php
        if(isset($_POST['submit'])){
            $name = filter_input( INPUT_POST, 'name' ); 
            $location = filter_input( INPUT_POST, 'location' );
            $skills = filter_input( INPUT_POST, 'skills' ); 
            $website = filter_input( INPUT_POST, 'website', FILTER_VALIDATE_URL );
        
            if(!empty($location) || !empty($name) || !empty($skills) || !empty($website)){
                if($website !== false){
                    echo "<p>Was Successfull to enter</p>";
                }
                
                else{
                    echo "<p>Enter valid Url</p>";
                }
            }
            
            else{
                echo "<p>Enter your Name, Location, skills and Website</p>";
            }
        }

    ?>
    <div class="container">
        <h1> COMP1006 - Midterm Exam </h1>
                <p> Please submit the following information. All form fields with an * are required. </p>
                <!-- don't forget to add client-side validation -->
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <div class="form-group">
                        <label> Your Full Name *</label>
                        <input type="text" name="name" class="form-control" placeholder="Bob Ross">
                    </div>
                    <div class="form-group">
                        <label> Your Location *</label>
                        <input type="text" name="location" class="form-control" placeholder="Daytona Beach, Florida">
                    </div>
                    <div class="form-group">
                        <label> Your Skills *</label>
                        <input type="text" name="skills" class="form-control" placeholder="painting,art,being chill">
                    </div>
                    <div class="form-group">
                        <label> Your Website *</label>
                        <input type="text" name="website" class="form-control" placeholder="https://www.bobross.com/">
                    </div>
                    <input type="submit" value="Submit" name="submit" class="btn btn-primary">
                </form>
    </div>
</body>

</html>