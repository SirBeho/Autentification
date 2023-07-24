<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: ./index.php");
    die();
}

extract($_SESSION['usuario']);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;300;400;500;700;900&display=swap">
  
    <link href="css/output.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>
    <div  class="min-h-screen flex flex-col items-center font-['Noto_Sans'] bg-gray-50 ">

        <?php include "./nav.php"  ?>     

        

        <div class="w-fit text-center m-5">
            <h1 class="text-3xl ">Personal info</h1>
            <h3 class="text-base font-light my-4">Basic info, like your name and photo</h3>
        </div>

        <!-- cuadro -->
        <div id="cuadro" class="w-full max-w-3xl sm:border border-[#BDBDBD] rounded-xl text-[#333]">

            <div class="px-5 sm:px-12 py-8 flex flex-row justify-between items-center">
                <div>
                    <h3 class="font-normal text-xl leading-snug text-black">Profile</h3>
                    <p class="text-sm font-normal text-gray-500 ">Some info may be wisible to others people</p>
                </div>

                <a href="profile_edit.php" type="submit" class="flex justify-center items-center w-24 h-8 border  border-gray-500 rounded-xl text-gray-500">
                    <span>Edit</span>
                </a>
            </div>

            <?php
                    session_start();
                    if (isset($_SESSION['success_message'])) {
                        echo '<p class="text-green-500 text-center text-xl ">' . $_SESSION['success_message'] . '</p>';
                        unset($_SESSION['success_message']);
                    }
                    ?>

            <form class=" flex flex-col text-[#BDBDBD] text-sm leading-6">

                <div class=" flex items-center justify-between sm:justify-start border-t border-[#BDBDBD] p-2 px-5 sm:px-12">
                    <h3 class="w-52">PHOTO</h3>
                    <div class="h-20 w-20  overflow-hidden rounded-lg ">
                        <img class="w-full h-full object-cover" src="./pictures/<?php echo $img ? $img : "usuario.jpg" ?>" alt="">
                    </div>
                </div>

                <div class=" flex items-center justify-between sm:justify-start border-t border-[#BDBDBD] p-6  px-5 sm:px-12">
                    <h3 class="w-52">NAME</h3>
                    <h3 class="text-lg text-[#333] whitespace-nowrap"><?php echo $name ?></h3>
                </div>

                <div class=" flex items-center justify-between sm:justify-start border-t border-[#BDBDBD] p-6  px-5 sm:px-12">
                    <h3 class="w-52">BIO</h3>
                    <h3 class="max-w-md text-lg text-[#333] overflow-hidden whitespace-nowrap text-ellipsis "><?php echo $bio ?></h3>
                </div>

                <div class=" flex items-center justify-between sm:justify-start border-t border-[#BDBDBD] p-6 px-5 sm:px-12">
                    <h3 class="w-52">PHONE</h3>
                    <h3 class="text-lg text-[#333] whitespace-nowrap"><?php echo $phone ?></h3>
                </div>

                <div class=" flex items-center justify-between sm:justify-start border-t border-[#BDBDBD] p-6 px-5 sm:px-12">
                    <h3 class="w-52">EMAIL</h3>
                    <h3 class="text-lg text-[#333] whitespace-nowrap"><?php echo $email ?></h3>
                </div>

                <div class=" flex items-center justify-between  sm:justify-start border-t border-[#BDBDBD] p-6 px-5 sm:px-12">
                    <h3 class="w-52">PASSWORD</h3>
                    <h3 class="text-lg text-[#333] whitespace-nowrap">*********</h3>
                </div>

            </form>



        </div>
    </div>
    
</body>

</html>