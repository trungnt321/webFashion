<!-- Settings Toggle Button -->
<button class="fixed ltr:md:right-[-29px] ltr:right-0 rtl:left-0 rtl:md:left-[-29px] top-1/2 z-[888] translate-y-1/2 bg-slate-800 text-slate-50 dark:bg-slate-700 dark:text-slate-300 cursor-pointer transform rotate-90 flex items-center text-sm font-medium px-2 py-2 shadow-deep ltr:rounded-b rtl:rounded-t" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas">
    <iconify-icon class="text-slate-50 text-lg animate-spin" icon="material-symbols:settings-outline-rounded"></iconify-icon>
    <span class="hidden md:inline-block ltr:ml-2 rtl:mr-2">Settings</span>
</button>
<!-- BEGIN: Settings Modal -->
<div class="offcanvas offcanvas-end fixed bottom-0 flex flex-col max-w-full bg-white dark:bg-slate-800 invisible bg-clip-padding shadow-sm outline-none transition duration-300 ease-in-out text-gray-700 top-0 ltr:right-0 rtl:left-0 border-none w-96" tabindex="-1" id="offcanvas" aria-labelledby="offcanvas">
    <div class="offcanvas-header flex items-center justify-between p-4 pt-3 border-b border-b-slate-300">
        <div>
            <h3 class="block text-xl font-Inter text-slate-900 font-medium dark:text-[#eee]">
                Theme customizer
            </h3>
            <p class="block text-sm font-Inter font-light text-[#68768A] dark:text-[#eee]">Customize & Preview in Real Time</p>
        </div>
        <button type="button" class="box-content text-2xl w-4 h-4 p-2 pt-0 -my-5 -mr-2 text-black dark:text-white border-none rounded-none opacity-100 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="offcanvas"><iconify-icon icon="line-md:close"></iconify-icon></button>
    </div>
    <div class="offcanvas-body flex-grow overflow-y-auto">
        <div class="settings-modal">
            <div class="p-6">

                <h3 class="mt-4">Theme</h3>
                <form class="input-area flex items-center space-x-8 rtl:space-x-reverse" id="themeChanger">
                    <div class="input-group flex items-center">
                        <input type="radio" id="light" name="theme" value="light" class="themeCustomization-checkInput">
                        <label for="light" class="themeCustomization-checkInput-label">Light</label>
                    </div>
                    <div class="input-group flex items-center">
                        <input type="radio" id="dark" name="theme" value="dark" class="themeCustomization-checkInput">
                        <label for="dark" class="themeCustomization-checkInput-label">Dark</label>
                    </div>
                    <div class="input-group flex items-center">
                        <input type="radio" id="semiDark" name="theme" value="semiDark" class="themeCustomization-checkInput">
                        <label for="semiDark" class="themeCustomization-checkInput-label">Semi Dark</label>
                    </div>
                </form>
            </div>
            <div class="divider"></div>
            <div class="p-6">

                <div class="flex items-center justify-between mt-5">
                    <h3 class="!mb-0">Rtl</h3>
                    <label id="rtl_ltr" class="relative inline-flex h-6 w-[46px] items-center rounded-full transition-all duration-150 cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer">
                        <span class="w-11 h-6 bg-gray-200 peer-focus:outline-none ring-0 rounded-full peer dark:bg-gray-900 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-black-600"></span>
                    </label>
                </div>
            </div>
            <div class="divider"></div>
            <div class="p-6">
                <h3>Content Width</h3>
                <div class="input-area flex items-center space-x-8 rtl:space-x-reverse">
                    <div class="input-group flex items-center">
                        <input type="radio" id="fullWidth" name="content-width" value="fullWidth" class="themeCustomization-checkInput">
                        <label for="fullWidth" class="themeCustomization-checkInput-label ">Full Width</label>
                    </div>
                    <div class="input-group flex items-center">
                        <input type="radio" id="boxed" name="content-width" value="boxed" class="themeCustomization-checkInput">
                        <label for="boxed" class="themeCustomization-checkInput-label ">Boxed</label>
                    </div>
                </div>
                <h3 class="mt-4">Menu Layout</h3>
                <div class="input-area flex items-center space-x-8 rtl:space-x-reverse">
                    <div class="input-group flex items-center">
                        <input type="radio" id="vertical_menu" name="menu_layout" value="vertical" class="themeCustomization-checkInput">
                        <label for="vertical_menu" class="themeCustomization-checkInput-label ">Vertical</label>
                    </div>
                    <div class="input-group flex items-center">
                        <input type="radio" id="horizontal_menu" name="menu_layout" value="horizontal" class="themeCustomization-checkInput">
                        <label for="horizontal_menu" class="themeCustomization-checkInput-label ">Horizontal</label>
                    </div>
                </div>
                <div id="menuCollapse" class="flex items-center justify-between mt-5">
                    <h3 class="!mb-0">Menu Collapsed</h3>
                    <label class="relative inline-flex h-6 w-[46px] items-center rounded-full transition-all duration-150 cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer">
                        <span class="w-11 h-6 bg-gray-200 peer-focus:outline-none ring-0 rounded-full peer dark:bg-gray-900 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-black-500"></span>
                    </label>
                </div>
                <div id="menuHidden" class="!flex items-center justify-between mt-5">
                    <h3 class="!mb-0">Menu Hidden</h3>
                    <label id="menuHide" class="relative inline-flex h-6 w-[46px] items-center rounded-full transition-all duration-150 cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer">
                        <span class="w-11 h-6 bg-gray-200 peer-focus:outline-none ring-0 rounded-full peer dark:bg-gray-900 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-black-500"></span>
                    </label>
                </div>
            </div>
            <div class="divider"></div>
            <div class="p-6">
                <h3>Navbar Type</h3>
                <div class="input-area flex flex-wrap items-center space-x-4 rtl:space-x-reverse">
                    <div class="input-group flex items-center">
                        <input type="radio" id="nav_floating" name="navbarType" value="floating" class="themeCustomization-checkInput">
                        <label for="nav_floating" class="themeCustomization-checkInput-label ">Floating</label>
                    </div>
                    <div class="input-group flex items-center">
                        <input type="radio" id="nav_sticky" name="navbarType" value="sticky" class="themeCustomization-checkInput">
                        <label for="nav_sticky" class="themeCustomization-checkInput-label ">Sticky</label>
                    </div>
                    <div class="input-group flex items-center">
                        <input type="radio" id="nav_static" name="navbarType" value="static" class="themeCustomization-checkInput">
                        <label for="nav_static" class="themeCustomization-checkInput-label ">Static</label>
                    </div>
                    <div class="input-group flex items-center">
                        <input type="radio" id="nav_hidden" name="navbarType" value="hidden" class="themeCustomization-checkInput">
                        <label for="nav_hidden" class="themeCustomization-checkInput-label ">Hidden</label>
                    </div>
                </div>
                <h3 class="mt-4">Footer Type</h3>
                <div class="input-area flex items-center space-x-4 rtl:space-x-reverse">
                    <div class="input-group flex items-center">
                        <input type="radio" id="footer_sticky" name="footerType" value="sticky" class="themeCustomization-checkInput">
                        <label for="footer_sticky" class="themeCustomization-checkInput-label ">Sticky</label>
                    </div>
                    <div class="input-group flex items-center">
                        <input type="radio" id="footer_static" name="footerType" value="static" class="themeCustomization-checkInput">
                        <label for="footer_static" class="themeCustomization-checkInput-label ">Static</label>
                    </div>
                    <div class="input-group flex items-center">
                        <input type="radio" id="footer_hidden" name="footerType" value="hidden" class="themeCustomization-checkInput">
                        <label for="footer_hidden" class="themeCustomization-checkInput-label ">Hidden</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Settings Modal -->
<!-- END: Settings -->

<div class="flex flex-col justify-between min-h-screen">
    <div>
        @include('admin.layout.header')
        @yield('content')
    </div>

    <!-- BEGIN: Footer For Desktop and tab -->
    <footer class="md:block hidden" id="footer">
        <div class="site-footer px-6 bg-white dark:bg-slate-800 text-slate-500 dark:text-slate-300 py-4 ltr:ml-[248px] rtl:mr-[248px]">
            <div class="grid md:grid-cols-2 grid-cols-1 md:gap-5">
                <div class="text-center ltr:md:text-start rtl:md:text-right text-sm">
                    COPYRIGHT ©
                    <span id="thisYear"></span>
                    DashCode, All rights Reserved
                </div>
                <div class="ltr:md:text-right rtl:md:text-end text-center text-sm">
                    Hand-crafted &amp; Made by
                    <a href="https://codeshaper.net" target="_blank" class="text-primary-500 font-semibold">
                        Codeshaper
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- END: Footer For Desktop and tab -->

    <div class="bg-white bg-no-repeat custom-dropshadow footer-bg dark:bg-slate-700 flex justify-around items-center
    backdrop-filter backdrop-blur-[40px] fixed left-0 bottom-0 w-full z-[9999] bothrefm-0 py-[12px] px-4 md:hidden">
        <a href="chat.html">
            <div>
            <span class="relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
          text-slate-900 ">
        <iconify-icon icon="heroicons-outline:mail"></iconify-icon>
        <span class="absolute right-[5px] lg:hrefp-0 -hrefp-2 h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
            justify-center rounded-full text-white z-[99]">
          10
        </span>
            </span>
                <span class="block text-[11px] text-slate-600 dark:text-slate-300">
        Messages
      </span>
            </div>
        </a>
        <a href="profile.html" class="relative bg-white bg-no-repeat backdrop-filter backdrop-blur-[40px] rounded-full footer-bg dark:bg-slate-700
      h-[65px] w-[65px] z-[-1] -mt-[40px] flex justify-center items-center">
            <div class="h-[50px] w-[50px] rounded-full relative left-[0px] hrefp-[0px] custom-dropshadow">
                <img src="assets/images/users/user-1.jpg" alt="" class="w-full h-full rounded-full border-2 border-slate-100">
            </div>
        </a>
        <a href="#">
            <div>
            <span class=" relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
          text-slate-900">
        <iconify-icon icon="heroicons-outline:bell"></iconify-icon>
        <span class="absolute right-[17px] lg:hrefp-0 -hrefp-2 h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
            justify-center rounded-full text-white z-[99]">
          2
        </span>
            </span>
                <span class=" block text-[11px] text-slate-600 dark:text-slate-300">
        Notifications
      </span>
            </div>
        </a>
    </div>
</div>
