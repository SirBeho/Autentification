<script src="./js/menu.js" defer></script>

<div class="flex justify-between w-screen px-4 sm:px-12 py-4 relative ">
            <div class="w-40 ">
                <img class="ms-2" src="./svg/devchallenges.svg" alt="logo" />
            </div>

            <div id="control-menu" class="flex items-center gap-2 cursor-pointer">
                <div class="h-8 w-8 overflow-hidden rounded-lg ">
                <img id="imagePreviewmenu" class="w-full h-full object-cover" src="./pictures/<?php echo $img ? $img : "usuario.jpg"; ?>" alt="">
                </div>
                <span  class="hidden sm:block font-semibold text-xs leading-snug"><?php echo $name ?></span>
                <div class="hidden sm:block w-4 rotate-180"><img src="./svg/arrow.svg" alt="logo" /></div>
            </div>

            <div id="menu" class="border border-[#BDBDBD] rounded-xl p-2 w-36 bg-white  text-xs absolute top-16 right-[5%] overflow-hidden h-0 opacity-0 transform duration-500 ease-in-out">
                <div class="border-b ">
                    <a href="./profile.php" class="flex items-center gap-2 p-2 hover:bg-gray-100 rounded-xl cursor-pointer">
                        <div class="w-5">
                            <img src="./svg/profile.svg" alt="">
                        </div>
                        <span >My Profile</span>
                    </a>

                    <a href="" class="flex items-center gap-2 p-2 mb-2 hover:bg-gray-100 rounded-xl cursor-pointer">
                        <div class="w-5">
                            <img src="./svg/groupchat.svg" alt="">
                        </div>
                        <span >Group chat</span>
                    </a>
                </div>
                <a  href="./php/logout.php" class="flex items-center gap-2 mt-2 p-2 hover:bg-gray-100 rounded-xl text-red-500 cursor-pointer">
                    <div class="w-5">
                        <img src="./svg/logout.svg" alt="">
                    </div>
                    <span >Logout</span>
                </a>

            </div>

        </div>