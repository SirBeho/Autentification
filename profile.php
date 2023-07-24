<?php
        session_start();
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
    <div class="min-h-screen flex flex-col items-center font-['Noto_Sans'] bg-gray-50 ">

        <div class="flex justify-between w-screen sm:px-12 py-4 relative">
            <div class="w-40 ">
                <img class="ms-2" src="./images/devchallenges.svg" alt="logo" />
            </div>
            
            <div class="flex items-center gap-2">
                <div class="h-8 w-8 overflow-hidden rounded-lg ">
                    <img class="w-full h-full object-cover" src="https://img.freepik.com/foto-gratis/cierrese-encima-retrato-cara-joven-hombre-barbudo_171337-2887.jpg?w=2000" alt="">
                </div>
                <span class="font-semibold text-xs leading-snug">Xanthe Neal</span>
                <div class="w-4 rotate-180"><img src="./images/arrow.svg" alt="logo" /></div>
            </div>
               <div class="border border-[#BDBDBD] rounded-xl p-2 w-36 text-xs bg-white absolute top-16 right-10 overflow-hidden hover:h-36 h-1 transform duration-500 ease-in-out">
                <div class="border-b ">
                   <div class="flex items-center gap-2 p-2 hover:bg-gray-100 rounded-xl">
                        <div class="w-5">
                            <img src="./images/profile.svg" alt="">
                        </div>
                        <a href="">My Profile</a>
                    </div>
                    <div class="flex items-center gap-2 p-2 mb-2 hover:bg-gray-100 rounded-xl">
                        <div class="w-5">
                            <img src="./images/groupchat.svg" alt="">
                        </div>
                        <a href="">Group chat</a>
                    </div>
                </div>   
                <div class="flex items-center gap-2 mt-2 p-2 hover:bg-gray-100 rounded-xl text-red-500">
                    <div class="w-5">
                        <img src="./images/logout.svg" alt="">
                    </div>
                    <a href="">Logout</a>
                </div>
            
            </div>

        </div>
        



        <div class="w-fit text-center m-5">
            <h1 class="text-3xl ">Personal info</h1>
            <h3 class="text-base font-light my-4">Basic info, like your name and photo</h3>
        </div>

        <!-- cuadro -->
        <div class="w-full max-w-3xl sm:border border-[#BDBDBD] rounded-xl text-[#333]">

            <div class="px-5 sm:px-12 py-8 flex flex-row justify-between items-center">
                <div>
                    <h3 class="font-normal text-xl leading-snug text-black">Profile</h3>
                    <p class="text-sm font-normal text-gray-500 ">Some info may be wisible to others people</p>
                </div>

                <a href="profile_edit.php"  type="submit" class="w-24 h-8 border border-gray-500 rounded-xl text-[#BDBDBD]">
                    Edit
                </a>
            </div>

            <form class=" flex flex-col text-[#BDBDBD] text-sm leading-6">

                <div  class=" flex items-center justify-between sm:justify-start border-t border-[#BDBDBD] p-2 px-5 sm:px-12">
                    <h3 class="w-52">PHOTO</h3>
                    <div class="h-20 w-20  overflow-hidden rounded-lg ">
                        <img class="w-full h-full object-cover" src="https://img.freepik.com/foto-gratis/cierrese-encima-retrato-cara-joven-hombre-barbudo_171337-2887.jpg?w=2000" alt="">
                    </div>
                </div>

                <div  class=" flex items-center justify-between sm:justify-start border-t border-[#BDBDBD] p-6  px-5 sm:px-12">
                    <h3 class="w-52">NAME</h3>
                    <h3 class="text-lg text-[#333] whitespace-nowrap"><?php echo $name?></h3>
                </div>

                <div  class=" flex items-center justify-between sm:justify-start border-t border-[#BDBDBD] p-6  px-5 sm:px-12">
                    <h3 class="w-52">BIO</h3>
                    <h3 class="max-w-md text-lg text-[#333] overflow-hidden whitespace-nowrap text-ellipsis "><?php echo $bio?></h3>
                </div>

                <div  class=" flex items-center justify-between sm:justify-start border-t border-[#BDBDBD] p-6 px-5 sm:px-12">
                    <h3 class="w-52">PHONE</h3>
                    <h3 class="text-lg text-[#333] whitespace-nowrap"><?php echo $phone?></h3>
                </div>

                <div  class=" flex items-center justify-between sm:justify-start border-t border-[#BDBDBD] p-6 px-5 sm:px-12">
                    <h3 class="w-52">EMAIL</h3>
                    <h3 class="text-lg text-[#333] whitespace-nowrap"><?php echo $email?></h3>
                </div>

                <div  class=" flex items-center justify-between  sm:justify-start border-t border-[#BDBDBD] p-6 px-5 sm:px-12">
                    <h3 class="w-52">PASSWORD</h3>
                    <h3 class="text-lg text-[#333] whitespace-nowrap">*********</h3>
                </div>

            </form>

          
         
        </div>
        </div>
</body>

</html>