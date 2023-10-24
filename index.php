<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Developer Portfolio</title>
    <link rel="stylesheet" href="stylem.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <header>
        <h1>Mehmet Aydin</h1>
        <h2>Web Developer</h2>
    </header>

    <div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4" id="nav" >
  <ul>
            <li><a href="#about">About Me</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
      </span>
    </button>
  </div>
</nav>


<div class="container">
        <h2>About Me</h2> <br>

        <div id="about">
        <div class="container">
            <h3>Personal Information</h3>
            <table>
                <tr>
                    <th>Name</th>
                    <td>Mehmet Aydin</td>
                </tr>
                <tr>
                    <th>Date of Birth</th>
                    <td>11. December 1989</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><a href="mailto:aydinmehmet.9002@gmail.com">aydinmehmet.9002@gmail.com</a></td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>076 457 ** **</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>3063, Ittigen</td>
                </tr>
            </table>
        </div> <br>
        <img src="m.aydin.jpg" alt="Mehmet Aydin" />
</div>
<div id="info">
        <p ><strong>Hello! I'm looking for a job as an <em>IT Developer</em>.</strong></p>
        <p id="me">"I am a passionate student in the field of <em>Web Development</em>, and I am determined to enhance my skills in this area before embarking on my <em>Informatik Studium</em> at Berner Fachhochschule (<strong>BFH</strong>) . I am fluent in basic languages such as <strong>HTML</strong> and <strong>CSS</strong>, as well as  <strong>JAVA</strong>, <strong>JavaScript</strong>, <strong>PHP</strong>, and <strong>Bootstrap</strong> I know Bootstrap programming languages at a basic level.</p>

        <p id="me1">I am committed to further cultivating my interest and aptitude in <em>Web Development</em>, and I am continually engaged in the process of learning and working on projects. My goal is to be well-prepared for my education at <strong>BFH</strong> and to excel in the field of <em>Web Development</em>.</p>
        <p id="me2">I will do Praktikum in the field of IT between November 2023 and July 2024. I am open to a job offer with a 60% salary in the IT field, starting from October 2024."</p>
   
    </div>
</div>

<div id="projects" >
    <h2>Projects</h2> <br>
    <div id="prj">
<ol>
    <li>
            Web Development  
        <ul>
            <li><a href="https://github.com/Mehaydin/Passerelle-23.git"> Assigment-01 </a></li>
            <li><a href="https://github.com/Mehaydin/Passerelle-23.git"> Assigment-02 </a></li>
            <li><a href="https://github.com/Mehaydin/Passerelle-23.git"> Assigment-03 </a></li>
            <li><a href="https://github.com/Mehaydin/Passerelle-23.git"> Assigment-04 </a></li>
        </ul> 
    </li>
    <li>JavaScript </li>
        <ul>
            <li><a href="https://github.com/Mehaydin/Passerelle-23.git"> To Do List </a></li>
        </ul>      
       
     <li>Blockly</li>
         <ul>
            <li><a href="https://blockly-demo.appspot.com/static/demos/code/index.html#gq7pwz"> Blockly Demo : Code </a></li>
         </ul>
         <ul>
            <li><a href="file:///C:/Users/My_Hp/Desktop/java/Koenig%20(1-2-3%20Topics)/FromBlocklyToJava%20.pdf"> From Blockly To Java </a></li>
         </ul>
     <li>Microsoft Office</li>
        <ul>
            <li><a href="C:\Users\My_Hp\Desktop\M.Office\Microsoft Office"> Word, Excel und Vortrag </a></li>
        </ul>

     <li>BFH</li>
       <ul>
         <li><a href="https://moodle.bfh.ch/my/">Moodle</a></li>
       </ul>
          
        
    </ol>  
    <img src="2953321.jpg" alt="">
</div>
           
    </div> 
     



    <div id="contact">
        <h2>Contact</h2>
        <p>Feel free to reach out to me at <a href="mailto:aydinmehmet.9002@gmail.com">aydinmehmet.9002@gmail.com</a>.</p>
    </div>

   
    <div id="comments">
        <h2>Comments</h2>
        <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $comment = $_POST["comment"];
            $timestamp = date("Y-m-d H:i:s");

         
            $commentData = "Name: $name\nComment: $comment\nTimestamp: $timestamp\n\n";
            file_put_contents("comments.txt", $commentData, FILE_APPEND);
        }
        ?>

       
        <form method="post" action="#comments">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="comment">Comment:</label>
            <textarea id="comment" name="comment" required></textarea><br>

            <input type="submit" value="Submit">
        </form>

      
        <div class="comment-list">
            <?php
           
            if (file_exists("comments.txt")) {
                $comments = file_get_contents("comments.txt");
                echo nl2br($comments);
            }
            ?>
        </div>
    </div>

    <footer>
        <p class="footer" >&copy; <?php echo date("Y"); ?> Mehmet Aydin. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
