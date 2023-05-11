<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SM COACHING CLASSES :: REGISTRATION</title>
    <link rel='shortcut icon' href="SMlogo.png">


    <link rel='stylesheet' type="text/css" href="Nav_bar.css">
    <link rel='stylesheet' type="text/css" href="Form.css">




</head>

<body class="body_img">


    <!--Navigation bar-->

    <div id="sticky">
        <ul style="padding: 0.1px;">
            <li><a href="http://127.0.0.1:5500/Home_page/page.html">HOME</a></li>
            <li><a href="http://127.0.0.1:5500/Cource_page/cource.html">Courses</a></li>
            <li><a href="http://127.0.0.1:5500/Gallery_page/gallery.html">Gallery</a></li>
            <li><a href="http://127.0.0.1:5500/Registration_page/Regis.html">Registration</a></li>
            <li><a href="http://127.0.0.1:5500/Contactus_page/Contactus.html">Contact Us</a></li>

        </ul>
    </div>
    <hr><br>

    <!-- feedback form section -->



    <form class="form" action="action_page.php" target="_blank" autocomplete="on" method="post">
        <div class="bg_form">
            <h1 class="heading">Registration</h1>
        </div><br><br>
        
        <label for="fname">Full Name:</label>
        <input class="box_name" type="tel" id="fname" name="fname"
            placeholder=" FIRST NAME     MIDDEL NAME     LAST NAME"><br><br>

        <label for="gender">Gender</label>

        <label for="gender">Male</label>
        <input class="box_gender" type="radio" id="gender" name="gender" value="Male">

        <label for="gender">Female</label>
        <input class="box_gender" type="radio" id="gender" name="gender" value="Female">

        <label for="gender">Other</label>
        <input class="box_gender" type="radio" id="gender" name="gender" value="Other"><br><br>

        <label for="Class">Class:</label>
        <select class="box_class" id="Class" name="Class">
            <option value="5th">5th</option>
            <option value="6th">6th</option>
            <option value="7th">7th</option>
            <option value="8th">8th</option>
            <option value="9th">9th</option>
            <option value="10th">10th</option>
        </select><br><br>

        <label for="subject">Subject :</label><br>
        <input class="box_subject" type="checkbox" id="subject1" name="subject1" value="English">
        <label for="subject1"> <i>English</i></label><br>
        <input class="box_subject" type="checkbox" id="subject2" name="subject2" value="Maths">
        <label for="subject2">Maths </label><br>
        <input class="box_subject" type="checkbox" id="subject3" name="subject3" value="Science">
        <label for="subject3">Science</label><br><br>

        <label for="Date of birthday"><i>Date of birthday:</label>
        <input class="box_dob" type="date"  name="Date"><br><br>

        <label for="phone">Mobile no :</label>
        <input class="box_contact" type="tel" id="phone" name="phone" placeholder="123-45-678"
             required><br><br>

        <label for="email">Email :</label>
        <input class="box_email" type="email" id="email" name="email" placeholder="abcd@gmail.com"><br><br>

        <label for="country">Country :</label>
        <input class="box_country" type="text" id="country" name="country" placeholder="India"><br><br>

        <input class="submit" type="reset" value="Reset">
        <input class="submit" type="submit" value="Submit"><br><br>

        <h1 class="follow_heading"></h1><br>

        <a href="https://www.facebook.com/sujit.mathankar"> <img class="flogo" src="facebook_logo.png"
                alt="image erroe"></a>

        <a href="sujitmathankar123@gmail.com"> <img class="glogo" src="Gmail.png" alt="image erroe"></a>

        <a href="https://twitter.com/SujitM03269113?t=6lXBznjPXx9Q3x7e0TFq9g&s=08"> <img class="tlogo"
                src="Twitter_logo.png" alt="image erroe"></a>

        <a href="https://web.whatsapp.com/"> <img class="wlogo" src="What_sApp_logo.png" alt="image erroe"></a><br>



    </form>











</body>

</html>