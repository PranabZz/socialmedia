<?php

//Starting session
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "connection.php";
session_start();

if(!$_SESSION['loged']){
  echo "<script>
     location.href = 'login.php';
    </script>";
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />

    <script
      src="https://kit.fontawesome.com/e5e6ca6b44.js"
      crossorigin="anonymous"
    ></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rainchat-Privavy matters</title>
    <link rel="stylesheet" href="output.css" />
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body class=" m-auto">
    <nav class="">
      <div class="flex p-4 items-center">
        <div class="ham-burger inline-block basis-1/4 cursor-pointer md:hidden">
          <div class="line h-0.5 w-6 my-1 bg-gray-800"></div>
          <div class="line h-0.5 w-6 my-1 bg-gray-800"></div>
          <div class="line h-0.5 w-6 my-1 bg-gray-800"></div>
        </div>
        <div class="nav-logo w-8 flex items-center">
          <img src="download.jpeg" alt="" />
          <h2 class="text-2xl text-gray-700 font-[20px]">RainChat</h2>
        </div>
        <div class="nav-items absolute mt-32 bg-blue-600 -translate-x-[14rem]">

        </div>
      </div>
    </nav>

    <main class="">
      <div class="home-nav flex mx-4 p-4 md:mx-0 md:p-8 bg-[#0a182d] text-white md:justify-between md:text-sm  ">
        <div class="links basis-2/3 md:basis-0 m"><a href="#">Home</a></div>
        <div class="links space-x-2 flex items-center lg:space-x-5 ">
          <i class="fa-solid fa-magnifying-glass "></i>
          <a href=""><?php echo $_SESSION['user'];?></a>

          <div class="itemss hidden md:flex space-x-2  lg:space-x-5">

          <div class="item">About</div>
          <div class="item">Contacts</div>
          <div class="item"><form method="POST" action="<?php echo htmlspecialchars($_SERVER['SELF']);?>"><button name ="logout">Logout</form></button></div></div></div>


      </div>
      <br><br>
      <form method = "POST" action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data">
        <input type = "textarea" name = "post" placeholder="Say something"  rows="4" cols="500" required>
        <input type = "file" name = "files">
        <button type= "submit" name ="send">Send</button>
      </form>

      <php
        $sql1 = "SELECT * FROM `Post` ORDER BY id DESC ";

        $result1 = $connection->query($sql1);

        while($row = mysqli_fetch_row($result)){

        

      ?>
      <div class="blog-post md:w-[80%] md:m-auto mx-4 md:flex md:my-6 md:items-center md:p-6">
        <div class="blog-image   ">
          <img class="md:object-cover" src="570fd0e9b5094cdaa8ba958bd6dded88.jpg" alt="" />
        </div>
        <div class="content p-2 md:flex-[70%]">
          <div class="top flex justify-between items-center">
            <div class="user-img">
              <img
                class="rounded-[50%] w-8 h-8 object-cover"
                src="sss.jpg"
                alt=""
              />
            </div>
            <div class="user-info flex-1 p-3">
              <h1 class="text-xl">Suman</h1>
              <span class="text-sm font-semibold">4 days ago</span>
            </div>
            <div class="add-info">
              <div
                class="dot w-[4px] h-[4px] border rounded-lg bg-black my-1"
              ></div>
              <div
                class="dot w-[4px] h-[4px] border rounded-lg bg-black my-1"
              ></div>
              <div
                class="dot w-[4px] h-[4px] border rounded-lg bg-black my-1"
              ></div>
            </div>
          </div>

          <div class="blog h-24 overflow-hidden">
            <h1>15 bloggers share their advice for successful blogging</h1>
            <p class="">
              To create and manage your own content, open the Blog Manager by
              hovering over your blog feed and clicking Manage. Here you can
              create,...To create and manage your own content, open the Blog
              Manager by hovering over your blog feed and clicking Manage. Here
              you can create, edit and delete posts and manage categories. You
              can also update your post settings and SEO, duplicate or draft
              posts, turn off commenting, or delete a post altogether by
              clicking Edit on each blog post. To delete or edit an existing
              image or video in each post, click on the media to reveal a
              toolbar, which also allows you to customize the size and layout of
              your visuals. Add more elements to your post by clicking on each
              of the symbols at the bottom of your post. Insert an image or
              gallery, embed HTML, or add a GIF to spice up your content. Add a
              cover photo to your post before publishing by clicking Settings on
              the left sidebar. Your cover photo is visible to all users who
              browse the blog on your site. Edit how your posts show up on
              search results and make them more discoverable by editing the SEO
              for each post. Add categories to your posts so users can navigate
              your blog pages by topic. Once you’re satisfied with your post, go
              live by clicking Publish.
            </p>
          </div>
          <hr class="border-slate-600 opacity-60 my-4 p-1 w-[90%] m-auto" />
          <div class="add flex justify-between">
            <i class="fa fa-eye px-2" aria-hidden="true">
              <span class="p-2 text-sm">6</span></i
            >
            <i class="fa fa-comment-o flex-1 px-2" aria-hidden="true"
              ><span class="p-2 text-sm">0</span></i
            >
            <i
              class="fa fa-heart px-2 text-red-500 focus:bg-blue-500"
              aria-hidden="true"
              ><span class="p-2 text-sm text-black">2</span></i
            >
          </div>
        </div>
      </div>
      <div class="blog-post  md:w-[80%] md:m-auto mx-4 md:flex md:my-6 md:items-center md:p-6">
        <div class="blog-image   ">
          <img class="md:object-cover" src="570fd0e9b5094cdaa8ba958bd6dded88.jpg" alt="" />
        </div>
        <div class="content p-2 md:flex-[70%]">
          <div class="top flex justify-between items-center">
            <div class="user-img">
              <img
                class="rounded-[50%] w-8 h-8 object-cover"
                src="sss.jpg"
                alt=""
              />
            </div>
            <div class="user-info flex-1 p-3">
              <h1 class="text-xl">Suman</h1>
              <span class="text-sm font-semibold">4 days ago</span>
            </div>
            <div class="add-info">
              <div
                class="dot w-[4px] h-[4px] border rounded-lg bg-black my-1"
              ></div>
              <div
                class="dot w-[4px] h-[4px] border rounded-lg bg-black my-1"
              ></div>
              <div
                class="dot w-[4px] h-[4px] border rounded-lg bg-black my-1"
              ></div>
            </div>
          </div>

          <div class="blog h-24 overflow-hidden">
            <h1>15 bloggers share their advice for successful blogging</h1>
            <p class="">
              To create and manage your own content, open the Blog Manager by
              hovering over your blog feed and clicking Manage. Here you can
              create,...To create and manage your own content, open the Blog
              Manager by hovering over your blog feed and clicking Manage. Here
              you can create, edit and delete posts and manage categories. You
              can also update your post settings and SEO, duplicate or draft
              posts, turn off commenting, or delete a post altogether by
              clicking Edit on each blog post. To delete or edit an existing
              image or video in each post, click on the media to reveal a
              toolbar, which also allows you to customize the size and layout of
              your visuals. Add more elements to your post by clicking on each
              of the symbols at the bottom of your post. Insert an image or
              gallery, embed HTML, or add a GIF to spice up your content. Add a
              cover photo to your post before publishing by clicking Settings on
              the left sidebar. Your cover photo is visible to all users who
              browse the blog on your site. Edit how your posts show up on
              search results and make them more discoverable by editing the SEO
              for each post. Add categories to your posts so users can navigate
              your blog pages by topic. Once you’re satisfied with your post, go
              live by clicking Publish.
            </p>
          </div>
          <hr class="border-slate-600 opacity-60 my-4 p-1 w-[90%] m-auto" />
          <div class="add flex justify-between">
            <i class="fa fa-eye px-2" aria-hidden="true">
              <span class="p-2 text-sm">6</span></i
            >
            <i class="fa fa-comment-o flex-1 px-2" aria-hidden="true"
              ><span class="p-2 text-sm">0</span></i
            >
            <i
              class="fa fa-heart px-2 text-red-500 focus:bg-blue-500"
              aria-hidden="true"
              ><span class="p-2 text-sm text-black">2</span></i
            >
          </div>
        </div>
      </div>
      <div class="blog-post  md:w-[80%] md:m-auto mx-4 md:flex md:my-6 md:items-center md:p-6">
        <div class="blog-image   ">
          <img class="md:object-cover" src="570fd0e9b5094cdaa8ba958bd6dded88.jpg" alt="" />
        </div>
        <div class="content p-2 md:flex-[70%]">
          <div class="top flex justify-between items-center">
            <div class="user-img">
              <img
                class="rounded-[50%] w-8 h-8 object-cover"
                src="sss.jpg"
                alt=""
              />
            </div>
            <div class="user-info flex-1 p-3">
              <h1 class="text-xl">Suman</h1>
              <span class="text-sm font-semibold">4 days ago</span>
            </div>
            <div class="add-info">
              <div
                class="dot w-[4px] h-[4px] border rounded-lg bg-black my-1"
              ></div>
              <div
                class="dot w-[4px] h-[4px] border rounded-lg bg-black my-1"
              ></div>
              <div
                class="dot w-[4px] h-[4px] border rounded-lg bg-black my-1"
              ></div>
            </div>
          </div>

          <div class="blog h-24 overflow-hidden">
            <h1>15 bloggers share their advice for successful blogging</h1>
            <p class="">
              To create and manage your own content, open the Blog Manager by
              hovering over your blog feed and clicking Manage. Here you can
              create,...To create and manage your own content, open the Blog
              Manager by hovering over your blog feed and clicking Manage. Here
              you can create, edit and delete posts and manage categories. You
              can also update your post settings and SEO, duplicate or draft
              posts, turn off commenting, or delete a post altogether by
              clicking Edit on each blog post. To delete or edit an existing
              image or video in each post, click on the media to reveal a
              toolbar, which also allows you to customize the size and layout of
              your visuals. Add more elements to your post by clicking on each
              of the symbols at the bottom of your post. Insert an image or
              gallery, embed HTML, or add a GIF to spice up your content. Add a
              cover photo to your post before publishing by clicking Settings on
              the left sidebar. Your cover photo is visible to all users who
              browse the blog on your site. Edit how your posts show up on
              search results and make them more discoverable by editing the SEO
              for each post. Add categories to your posts so users can navigate
              your blog pages by topic. Once you’re satisfied with your post, go
              live by clicking Publish.
            </p>
          </div>
          <hr class="border-slate-600 opacity-60 my-4 p-1 w-[90%] m-auto" />
          <div class="add flex justify-between">
            <i class="fa fa-eye px-2" aria-hidden="true">
              <span class="p-2 text-sm">6</span></i
            >
            <i class="fa fa-comment-o flex-1 px-2" aria-hidden="true"
              ><span class="p-2 text-sm">0</span></i
            >
            <i
              class="fa fa-heart px-2 text-red-500 focus:bg-blue-500"
              aria-hidden="true"
              ><span class="p-2 text-sm text-black">2</span></i
            >
          </div>
        </div>
      </div>


    </main>

    <footer class="bg-[#0a182d] text-white text-center p-2">

        <div class="links flex justify-center space-x-3 p-5 ">
            <i class="fa fa-facebook text-white" aria-hidden="true"></i>
            <i class="fa fa-twitter text-white" aria-hidden="true"></i>
            <i class="fa fa-linkedin text-white" aria-hidden="true"></i>

        </div>
        <p class="md:p-6">©2022 by Rainchat. Proudly created by Suman and Pranab.</p>
    </footer>
  </body>
</html>

<!--Backend code-->

<?php


  if(isset($_POST["logout"])){
    session_destroy();
    echo "<script>
    location.href = 'login.php';
    </script>";
  }

  //post files send username time likes and comments is set to null at insert
  if(isset($_POST["send"])){
    $current_user = $_SESSION['user'];
    $date = date("h:m:s A");
    $post = $_POST['post'];
    $temp_name = $_FILES['files']['tmp_name'];
    $file_name = $_FILES['files']['name'];

    move_uploaded_file($temp_name,"post_photos/".$file_name);

      $sql = "INSERT INTO `Post`(`Username`, `Post`, `Time`, `Image`, `Likes`, `Comment`) VALUES ('$current_user','$post','$date','$file_name','0','0')";

      $result = $connection->query($sql);

      if(!$result){
        echo "Bad sql coding";
      }

  }



?>
