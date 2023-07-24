<?php
        session_start();
        extract($_SESSION['usuario']);

        ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;300;400;500;700;900&display=swap">
    <link href="css/output.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>
    <div class="min-h-screen flex flex-col items-center font-['Noto_Sans'] bg-gray-50 ">

        <div class="flex justify-between w-screen px-12 py-6 relative">
            <div class="w-40 ">
                <img class="ms-2" src="./images/devchallenges.svg" alt="logo" />
            </div>

            <div class="flex items-center gap-2">
                <div class="h-8 w-8 overflow-hidden rounded-lg ">
                    <img class="w-full h-full object-cover"
                        src="https://img.freepik.com/foto-gratis/cierrese-encima-retrato-cara-joven-hombre-barbudo_171337-2887.jpg?w=2000"
                        alt="">
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

        <div class="w-full max-w-3xl ">
            <a class="text-lg text-blue-500" href="profile.html"> Back</a>
        </div>

        <!-- cuadro -->
        <div class="w-full max-w-3xl sm:border px-10 py-8 my-5 border-[#BDBDBD] rounded-xl text-[#333]">

            <div class="pb-5 flex flex-row justify-between items-center">
                <div>
                    <h3 class="font-normal text-xl leading-snug text-black">Change Info</h3>
                    <p class="text-xs font-normal text-gray-500 ">Changegs will be reflected to every services</p>
                </div>
            </div>

            <form class=" flex flex-col gap-5 text-xs leading-6">

                <label class=" flex gap-5 items-center">
                    <div class="h-[4.5rem] w-[4.5rem]  overflow-hidden rounded-lg ">
                        <img class="w-full h-full object-cover"
                            src="https://img.freepik.com/foto-gratis/cierrese-encima-retrato-cara-joven-hombre-barbudo_171337-2887.jpg?w=2000"
                            alt="">
                    </div>
                    <h3 class="w-52text-gray-500">CHANGE PHOTO</h3>
                </label>

                <label class="items-center">
                    <span>Name</span></br>
                    <input placeholder="Enter you name..."
                        class="w-96 text-sm  border border-gray-400 rounded-xl bg-transparent p-3" value="<?php echo $name?>"></input>
                </label>

                <label class="items-center ">
                    <span>Bio</span></br>
                    <textarea placeholder="Enter you bio..." rows="3"
                        class="w-96 text-sm border border-gray-400 rounded-xl bg-transparent p-3 resize-none"><?php echo $bio?></textarea>
                </label>
                <label class="items-center">
                    <span>Phone</span></br>
                    <input placeholder="Enter you phone..."
                        class="w-96 text-sm  border border-gray-400 rounded-xl bg-transparent p-3" value="<?php echo $phone?>"></input>
                </label>
                <label class="items-center">
                    <span>Email</span></br>
                    <input placeholder="Enter you email..."
                        class="w-96 text-sm  border border-gray-400 rounded-xl bg-transparent p-3" value="<?php echo $email?>"></input>
                </label>
                <label class="items-center">
                    <span>Password</span></br>
                    <input placeholder="Enter you password..."
                        class="w-96 text-sm  border border-gray-400 rounded-xl bg-transparent p-3" value="*********"></input>
                </label>

                <button class="w-min px-5 py-2 bg-blue-500 rounded-lg text-sm leading-normal font-semibold text-white" type="submit"> Save </button>
            </form>
        </div>
    </div>
</body>

</html>