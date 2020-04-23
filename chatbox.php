<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css"/>
    <link rel="stylesheet" href="css/chatbox.css"/>
    <title>Home</title>
</head>
<body>
    <div class="header">
        <div>
            <div class="menu">Logout</div>
            <div class="menu">Friends</div>
            <div class="menu">Edit Profile</div> 
            <div class="menu">Profile</div>
        </div>     
    </div>
    <div class="chat">
        <div class="write">
            <div class="chats other">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni hic totam, vero quia ea voluptate rem quisquam. </div>
            <div class="chats me">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, sunt et nisi aut commodi similique od.</div>    
        
            <div class="form">
                <form method="POST" target="chat.php" >
                    <input type="text" name="message" placeholder="Write something" class="msg f"/>
                    <input type="submit" value =">" class="msg_button f"/>
                </form>
            </div> 
        </div>   

    </div>



</body>
</html>    