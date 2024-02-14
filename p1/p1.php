<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genrated</title>
    <style>
        *{
            text-align: center;
            font-family: system-ui;
            font-size: 20px;
        }
        h1{
            color: rgb(75, 216, 110);
        }
        hr{
            background-color: red;
        }
        p {
            color: grey;
        }
        #output{
            color: rgb(75, 216, 110);
            border: 2px solid pink;
            padding: 10px;
            border-radius: 10px;
            margin: 10px;
        }
        #output::selection{
            color: white;
            background-color: green;
        }
        #sucess{
            color: green;
            font-weight: 900;
        }
        #fail{
            color: red;
            font-weight: 900;
        }
    </style>
</head>
<body>
<h1>Genrated Text</h1>
<br>
<hr>
<p>Copy and use it just like this</p>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $user_query=$_POST['user_query'];
    $user_replace=$_POST['user_query_replace'];
};
if($user_query==NULL){
    $intro_data = "I am Your Name a BCA student pursuing my Bachelor of Computer Applications degree from JIMS College. I have always been fascinated by computers and their applications in various domains. I chose BCA as my career path because it gives me the opportunity to learn about programming languages, database management, web designing, networking, and other aspects of computer science. I aspire to become a software developer or a system analyst after completing my BCA course. I am also interested in exploring new technologies and innovations in the IT industry. I believe that BCA is a valuable and rewarding degree that will help me achieve my goals and dreams.
    ";
    $query = "/Your Name/i";
    $res_replace = preg_replace($query,$user_replace,$intro_data);
    echo "<p id='output'>".$res_replace."</p>";
}elseif($user_replace==NULL){
    $data_global = "AI, or artificial intelligence, is the field of computer science that studies and creates machines or software that can perform tasks that normally require human intelligence. AI has many applications in various domains, such as industry, government, science, education, entertainment, and more. Some examples of AI systems are web search engines, recommendation systems, speech recognition, self-driving cars, and game-playing agents. AI is also a subject of interest for philosophy, psychology, neuroscience, and ethics, as it raises questions about the nature and limits of intelligence, consciousness, morality, and responsibility. AI is one of the most exciting and challenging fields of the 21st century.";
    $pattern = "/".$user_query."/i";
    $res = preg_match($pattern, $data_global);
    $res_count = preg_match_all($pattern, $data_global);
    if($res==1){
        echo "<p id='output'>"."<span id='sucess'>".$user_query."</span>"." word present in the paragraph"."</p>";
        echo "<p id='output'>"."<span id='sucess'>".$user_query."</span>"." word come in para "."<span id='sucess'>".$res_count."</span>"." Times"."</p>";
        echo "<p id='output'>".$data_global."</span>"."</p>";
    }else{
        echo "<p id='output'>"."<span id='fail'>".$user_query."</span>"." is not present in the paragraph"."</p>";
        echo "<p id='output'>".$data_global."</span>"."</p>";
    }
}
?>

</body>
</html>