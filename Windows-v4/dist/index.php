<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <link href="/Windows-v4/dist/output.css" rel="stylesheet">
</head>

<body class="bg-hero bg-center bg-cover bg-no-repeat">
<div id="opacity" style="background-color: #0a0a0abd;
    width: 100%;
    height: 120%;
    padding: 20px;
    display: grid;
    grid-gap: 50px;
    grid-auto-rows: min-content;
    justify-content: center;">
    <div>
        <section class="flex justify-center">
            <div>
    <div class=" flex justify-center">
        <img src="/Windows-v4/dist/img/logo.png" class="lg:w-1/6 brand" id="brand">
    </div>
                <div class="pt-5">
                    <h1 class="text-center text-white font-bold text-4xl">Your #1 Window Company Serving Homeowners in <span id="location"></span>Since 2017!</h1>
                </div>
                <div class="pt-3">
                    <p class="text-center text-sm italic font-semibold text-secondaryColor">Fill out the survey below, it only takes 30 seconds.</p>
                </div>
                <form class="flex justify-center items-center pt-5" id="regForm" action="/Windows-v4/dist/submit-page.php">
                    <div class="bg-white bg-opacity-60 lg:w-1/2 sm:w-full rounded-xl text-center">
                        <div class="progress pt-5">
                            <div class="progress-content">
                                <div class="progress-bar">
                                    <div id="myProgress">
                                        <div id="myBar">15%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab pt-4 px-9 mb-5">
                            <div class="t1">
                                <p class="text-gray-700 text-xl text-center font-bold">What is your zip code?</p>
                            </div>
                            <div class="pt-4 flex justify-center">
                                <input type="text" id="zip" class="w-full py-3 rounded-lg text-primaryColor font-medium pl-2" placeholder="Enter Your ZIP Code. Ex: 98271" required />
                            </div>
                            <div id="zip-error" class="text-center" style="font-size: 14px;padding-top: 10px;font-weight: 500">

                            </div>
                            <div class="flex justify-center pt-5 items-center text-center">
                                <button type="button" onclick="nextPrev(1)" class="text-white text-xl bg-secondaryColor hover:bg-gray-400 font-semibold py-2 px-12 rounded-lg">
                                    GET YOUR PRICE
                                </button>
                            </div>
                        </div>
                        <div class="tab pt-4 px-9">
                        <div class="t1">
                            <p class="text-gray-700 text-xl text-center font-bold">What is the aim of your project?</p>
                        </div>
                        <div class="pt-4 select">
                            <select id="work-type" class="w-full py-2 rounded-lg text-primaryColor font-semibold pl-2">
                                <option>Window Repair</option>
                                <option>Window Repair Frame & Glass</option>
                                <option>Windows Install Multiple</option>
                                <option>Window Frame Repair</option>
                                <option>Window Glass Install Replace</option>
                                <option>Window Install Single</option>
                            </select>
                        </div>
                        <div class="pt-5 select">
                            <select id="windows-num" class="w-full py-2 rounded-lg text-primaryColor font-semibold pl-2">
                                <option>1</option>
                                <option>2</option>
                                <option>3-5</option>
                                <option>6-9</option>
                                <option>10</option>
                            </select>
                        </div>
                        <div class="pt-5 select">
                            <select id="duration" class="w-full py-2 rounded-lg text-primaryColor font-semibold pl-2" >
                                <option>Immediately</option>
                                <option>Within 1 Months</option>
                                <option>1-3 Months</option>
                                <option>3 Months</option>
                            </select>
                        </div>
                        <div class="grid grid-cols-2 pt-8 pb-4 w-full">
                            <div class="flex justify-center">
                            <button type="button" onclick="nextPrev(-1)" class=" prevBtn text-white text-xl bg-gray-700 hover:bg-gray-400 font-semibold py-2 px-12 rounded-lg">
                                Prev
                            </button>
                            </div>
                            <div class="flex justify-center">
                            <button type="button" onclick="nextPrev(1)" class="text-white text-xl bg-secondaryColor hover:bg-gray-400 font-semibold py-2 px-12 rounded-lg">
                                Next
                            </button>
                            </div>
                        </div>
                    </div>
                        <div class="tab pt-4 px-9">
                            <div class="t1">
                                <p class="text-gray-700 text-xl text-center font-bold">Where will this project take place?</p>
                            </div>
                            <div class="pt-4 flex justify-center">
                                <input id="address" type="text" class="w-full py-3 rounded-lg text-primaryColor font-medium pl-2" placeholder="Address. Ex:123 Main Street" required />
                            </div>
                            <div class="pt-4 flex justify-center">
                                <input id="city" type="text" class="w-full py-3 rounded-lg text-primaryColor font-medium pl-2" placeholder="City. Ex:Austin" required />
                            </div>
                            <div  class="pt-4 flex justify-center">
                                <input id="state" type="text" class="w-full py-3 rounded-lg text-primaryColor font-medium pl-2" placeholder="State. Ex:TX" required />
                            </div>

                            <div class="grid grid-cols-2 pt-8 pb-4 w-full">
                                <div class="flex justify-center">
                                    <button type="button" onclick="nextPrev(-1)" class=" prevBtn text-white text-xl bg-gray-700 hover:bg-gray-400 font-semibold py-2 px-12 rounded-lg">
                                        Prev
                                    </button>
                                </div>
                                <div class="flex justify-center">
                                    <button type="button" onclick="nextPrev(1)" class="text-white text-xl bg-secondaryColor hover:bg-gray-400 font-semibold py-2 px-12 rounded-lg">
                                        Next
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="tab pt-4 px-9">
                            <div class="t1">
                                <p class="text-gray-700 text-xl text-center font-bold">Mention your first and last name</p>
                            </div>
                            <div class="pt-4 flex justify-center">
                                <input id="first-name" type="text" class="w-full py-3 rounded-lg text-primaryColor font-medium pl-2" placeholder="First Name. Ex:John" required />
                            </div>
                            <div class="pt-4 flex justify-center">
                                <input id="last-name" type="text" class="w-full py-3 rounded-lg text-primaryColor font-medium pl-2" placeholder="Last Name. Ex:Smith" required />
                            </div>

                            <div class="grid grid-cols-2 pt-8 pb-4 w-full">
                                <div class="flex justify-center">
                                    <button type="button" onclick="nextPrev(-1)" class=" prevBtn text-white text-xl bg-gray-700 hover:bg-gray-400 font-semibold py-2 px-12 rounded-lg">
                                        Prev
                                    </button>
                                </div>
                                <div class="flex justify-center">
                                    <button type="button" onclick="nextPrev(1)" class="text-white text-xl bg-secondaryColor hover:bg-gray-400 font-semibold py-2 px-12 rounded-lg">
                                        Next
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="tab pt-4 px-9">
                            <div class="t1">
                                <p class="text-gray-700 text-xl text-center font-bold">Enter your email for better communication</p>
                            </div>
                            <div class="pt-4 flex justify-center">
                                <input id="email" type="text" class="w-full py-3 rounded-lg text-primaryColor font-medium pl-2" placeholder="Email. Ex:johnsmith@gmail.com" required />
                            </div>
                            <div id="email-error" style="color: red;font-weight: 500;padding-top: 10px"></div>
                            <div class="grid grid-cols-2 pt-8 pb-4 w-full">
                                <div class="flex justify-center">
                                    <button type="button" onclick="nextPrev(-1)" class=" prevBtn text-white text-xl bg-gray-700 hover:bg-gray-400 font-semibold py-2 px-12 rounded-lg">
                                        Prev
                                    </button>
                                </div>
                                <div class="flex justify-center">
                                    <button type="button" onclick="nextPrev(1)" class="text-white text-xl bg-secondaryColor hover:bg-gray-400 font-semibold py-2 px-12 rounded-lg">
                                        Next
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="tab pt-4 px-9">
                            <div class="t1">
                                <p class="text-gray-700 text-xl text-center font-bold">Enter your phone number to get verbal quotes from local contractors</p>
                            </div>
                            <div class="lg:max-w-lg md:max-w-sm sm:max-w-sm mx-auto">
                            <div class="flex items-center pt-4">
                                <button id="dropdown-phone-button" data-dropdown-toggle="dropdown-phone" class="flex-shrink-0 z-10 inline-flex items-center py-3.5 px-2 text-sm text-center text-primaryColor font-light bg-white rounded-l-lg" type="button">
                                    <svg fill="none" aria-hidden="true" class="h-4 w-4 me-2" viewBox="0 0 20 15"><rect width="19.6" height="14" y=".5" fill="#fff" rx="2"/><mask id="a" style="mask-type:luminance" width="20" height="15" x="0" y="0" maskUnits="userSpaceOnUse"><rect width="19.6" height="14" y=".5" fill="#fff" rx="2"/></mask><g mask="url(#a)"><path fill="#D02F44" fill-rule="evenodd" d="M19.6.5H0v.933h19.6V.5zm0 1.867H0V3.3h19.6v-.933zM0 4.233h19.6v.934H0v-.934zM19.6 6.1H0v.933h19.6V6.1zM0 7.967h19.6V8.9H0v-.933zm19.6 1.866H0v.934h19.6v-.934zM0 11.7h19.6v.933H0V11.7zm19.6 1.867H0v.933h19.6v-.933z" clip-rule="evenodd"/><path fill="#46467F" d="M0 .5h8.4v6.533H0z"/><g filter="url(#filter0_d_343_121520)"><path fill="url(#paint0_linear_343_121520)" fill-rule="evenodd" d="M1.867 1.9a.467.467 0 11-.934 0 .467.467 0 01.934 0zm1.866 0a.467.467 0 11-.933 0 .467.467 0 01.933 0zm1.4.467a.467.467 0 100-.934.467.467 0 000 .934zM7.467 1.9a.467.467 0 11-.934 0 .467.467 0 01.934 0zM2.333 3.3a.467.467 0 100-.933.467.467 0 000 .933zm2.334-.467a.467.467 0 11-.934 0 .467.467 0 01.934 0zm1.4.467a.467.467 0 100-.933.467.467 0 000 .933zm1.4.467a.467.467 0 11-.934 0 .467.467 0 01.934 0zm-2.334.466a.467.467 0 100-.933.467.467 0 000 .933zm-1.4-.466a.467.467 0 11-.933 0 .467.467 0 01.933 0zM1.4 4.233a.467.467 0 100-.933.467.467 0 000 .933zm1.4.467a.467.467 0 11-.933 0 .467.467 0 01.933 0zm1.4.467a.467.467 0 100-.934.467.467 0 000 .934zM6.533 4.7a.467.467 0 11-.933 0 .467.467 0 01.933 0zM7 6.1a.467.467 0 100-.933.467.467 0 000 .933zm-1.4-.467a.467.467 0 11-.933 0 .467.467 0 01.933 0zM3.267 6.1a.467.467 0 100-.933.467.467 0 000 .933zm-1.4-.467a.467.467 0 11-.934 0 .467.467 0 01.934 0z" clip-rule="evenodd"/></g></g><defs><linearGradient id="paint0_linear_343_121520" x1=".933" x2=".933" y1="1.433" y2="6.1" gradientUnits="userSpaceOnUse"><stop stop-color="#fff"/><stop offset="1" stop-color="#F0F0F0"/></linearGradient><filter id="filter0_d_343_121520" width="6.533" height="5.667" x=".933" y="1.433" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dy="1"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.06 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow_343_121520"/><feBlend in="SourceGraphic" in2="effect1_dropShadow_343_121520" result="shape"/></filter></defs></svg>
                                    +1 <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/></svg>
                                </button>
                                <div id="dropdown-phone" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-52 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-phone-button">
                                        <li>
                                            <button type="button" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                                                <div class="inline-flex items-center">
                                                    <svg fill="none" aria-hidden="true" class="h-4 w-4 me-2" viewBox="0 0 20 15"><rect width="19.6" height="14" y=".5" fill="#fff" rx="2"/><mask id="a" style="mask-type:luminance" width="20" height="15" x="0" y="0" maskUnits="userSpaceOnUse"><rect width="19.6" height="14" y=".5" fill="#fff" rx="2"/></mask><g mask="url(#a)"><path fill="#D02F44" fill-rule="evenodd" d="M19.6.5H0v.933h19.6V.5zm0 1.867H0V3.3h19.6v-.933zM0 4.233h19.6v.934H0v-.934zM19.6 6.1H0v.933h19.6V6.1zM0 7.967h19.6V8.9H0v-.933zm19.6 1.866H0v.934h19.6v-.934zM0 11.7h19.6v.933H0V11.7zm19.6 1.867H0v.933h19.6v-.933z" clip-rule="evenodd"/><path fill="#46467F" d="M0 .5h8.4v6.533H0z"/><g filter="url(#filter0_d_343_121520)"><path fill="url(#paint0_linear_343_121520)" fill-rule="evenodd" d="M1.867 1.9a.467.467 0 11-.934 0 .467.467 0 01.934 0zm1.866 0a.467.467 0 11-.933 0 .467.467 0 01.933 0zm1.4.467a.467.467 0 100-.934.467.467 0 000 .934zM7.467 1.9a.467.467 0 11-.934 0 .467.467 0 01.934 0zM2.333 3.3a.467.467 0 100-.933.467.467 0 000 .933zm2.334-.467a.467.467 0 11-.934 0 .467.467 0 01.934 0zm1.4.467a.467.467 0 100-.933.467.467 0 000 .933zm1.4.467a.467.467 0 11-.934 0 .467.467 0 01.934 0zm-2.334.466a.467.467 0 100-.933.467.467 0 000 .933zm-1.4-.466a.467.467 0 11-.933 0 .467.467 0 01.933 0zM1.4 4.233a.467.467 0 100-.933.467.467 0 000 .933zm1.4.467a.467.467 0 11-.933 0 .467.467 0 01.933 0zm1.4.467a.467.467 0 100-.934.467.467 0 000 .934zM6.533 4.7a.467.467 0 11-.933 0 .467.467 0 01.933 0zM7 6.1a.467.467 0 100-.933.467.467 0 000 .933zm-1.4-.467a.467.467 0 11-.933 0 .467.467 0 01.933 0zM3.267 6.1a.467.467 0 100-.933.467.467 0 000 .933zm-1.4-.467a.467.467 0 11-.934 0 .467.467 0 01.934 0z" clip-rule="evenodd"/></g></g><defs><linearGradient id="paint0_linear_343_121520" x1=".933" x2=".933" y1="1.433" y2="6.1" gradientUnits="userSpaceOnUse"><stop stop-color="#fff"/><stop offset="1" stop-color="#F0F0F0"/></linearGradient><filter id="filter0_d_343_121520" width="6.533" height="5.667" x=".933" y="1.433" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dy="1"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.06 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow_343_121520"/><feBlend in="SourceGraphic" in2="effect1_dropShadow_343_121520" result="shape"/></filter></defs></svg>
                                                    United States (+1)
                                                </div>
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                                                <div class="inline-flex items-center">
                                                    <svg class="h-4 w-4 me-2" fill="none" viewBox="0 0 20 15"><rect width="19.6" height="14" y=".5" fill="#fff" rx="2"/><mask id="a" style="mask-type:luminance" width="20" height="15" x="0" y="0" maskUnits="userSpaceOnUse"><rect width="19.6" height="14" y=".5" fill="#fff" rx="2"/></mask><g mask="url(#a)"><path fill="#0A17A7" d="M0 .5h19.6v14H0z"/><path fill="#fff" fill-rule="evenodd" d="M-.898-.842L7.467 4.8V-.433h4.667V4.8l8.364-5.642L21.542.706l-6.614 4.46H19.6v4.667h-4.672l6.614 4.46-1.044 1.549-8.365-5.642v5.233H7.467V10.2l-8.365 5.642-1.043-1.548 6.613-4.46H0V5.166h4.672L-1.941.706-.898-.842z" clip-rule="evenodd"/><path stroke="#DB1F35" stroke-linecap="round" stroke-width=".667" d="M13.067 4.933L21.933-.9M14.009 10.088l7.947 5.357M5.604 4.917L-2.686-.67M6.503 10.024l-9.189 6.093"/><path fill="#E6273E" fill-rule="evenodd" d="M0 8.9h8.4v5.6h2.8V8.9h8.4V6.1h-8.4V.5H8.4v5.6H0v2.8z" clip-rule="evenodd"/></g></svg>
                                                    United Kingdom (+44)
                                                </div>
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                                                <div class="inline-flex items-center">
                                                    <svg class="h-4 w-4 me-2" fill="none" viewBox="0 0 20 15" xmlns="http://www.w3.org/2000/svg"><rect width="19.6" height="14" y=".5" fill="#fff" rx="2"/><mask id="a" style="mask-type:luminance" width="20" height="15" x="0" y="0" maskUnits="userSpaceOnUse"><rect width="19.6" height="14" y=".5" fill="#fff" rx="2"/></mask><g mask="url(#a)"><path fill="#0A17A7" d="M0 .5h19.6v14H0z"/><path fill="#fff" stroke="#fff" stroke-width=".667" d="M0 .167h-.901l.684.586 3.15 2.7v.609L-.194 6.295l-.14.1v1.24l.51-.319L3.83 5.033h.73L7.7 7.276a.488.488 0 00.601-.767L5.467 4.08v-.608l2.987-2.134a.667.667 0 00.28-.543V-.1l-.51.318L4.57 2.5h-.73L.66.229.572.167H0z"/><path fill="url(#paint0_linear_374_135177)" fill-rule="evenodd" d="M0 2.833V4.7h3.267v2.133c0 .369.298.667.666.667h.534a.667.667 0 00.666-.667V4.7H8.2a.667.667 0 00.667-.667V3.5a.667.667 0 00-.667-.667H5.133V.5H3.267v2.333H0z" clip-rule="evenodd"/><path fill="url(#paint1_linear_374_135177)" fill-rule="evenodd" d="M0 3.3h3.733V.5h.934v2.8H8.4v.933H4.667v2.8h-.934v-2.8H0V3.3z" clip-rule="evenodd"/><path fill="#fff" fill-rule="evenodd" d="M4.2 11.933l-.823.433.157-.916-.666-.65.92-.133.412-.834.411.834.92.134-.665.649.157.916-.823-.433zm9.8.7l-.66.194.194-.66-.194-.66.66.193.66-.193-.193.66.193.66-.66-.194zm0-8.866l-.66.193.194-.66-.194-.66.66.193.66-.193-.193.66.193.66-.66-.193zm2.8 2.8l-.66.193.193-.66-.193-.66.66.193.66-.193-.193.66.193.66-.66-.193zm-5.6.933l-.66.193.193-.66-.193-.66.66.194.66-.194-.193.66.193.66-.66-.193zm4.2 1.167l-.33.096.096-.33-.096-.33.33.097.33-.097-.097.33.097.33-.33-.096z" clip-rule="evenodd"/></g><defs><linearGradient id="paint0_linear_374_135177" x1="0" x2="0" y1=".5" y2="7.5" gradientUnits="userSpaceOnUse"><stop stop-color="#fff"/><stop offset="1" stop-color="#F0F0F0"/></linearGradient><linearGradient id="paint1_linear_374_135177" x1="0" x2="0" y1=".5" y2="7.033" gradientUnits="userSpaceOnUse"><stop stop-color="#FF2E3B"/><stop offset="1" stop-color="#FC0D1B"/></linearGradient></defs></svg>
                                                    Australia (+61)
                                                </div>
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                                                <div class="inline-flex items-center">
                                                    <svg class="w-4 h-4 me-2" fill="none" viewBox="0 0 20 15"><rect width="19.6" height="14" y=".5" fill="#fff" rx="2"/><mask id="a" style="mask-type:luminance" width="20" height="15" x="0" y="0" maskUnits="userSpaceOnUse"><rect width="19.6" height="14" y=".5" fill="#fff" rx="2"/></mask><g mask="url(#a)"><path fill="#262626" fill-rule="evenodd" d="M0 5.167h19.6V.5H0v4.667z" clip-rule="evenodd"/><g filter="url(#filter0_d_374_135180)"><path fill="#F01515" fill-rule="evenodd" d="M0 9.833h19.6V5.167H0v4.666z" clip-rule="evenodd"/></g><g filter="url(#filter1_d_374_135180)"><path fill="#FFD521" fill-rule="evenodd" d="M0 14.5h19.6V9.833H0V14.5z" clip-rule="evenodd"/></g></g><defs><filter id="filter0_d_374_135180" width="19.6" height="4.667" x="0" y="5.167" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.06 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow_374_135180"/><feBlend in="SourceGraphic" in2="effect1_dropShadow_374_135180" result="shape"/></filter><filter id="filter1_d_374_135180" width="19.6" height="4.667" x="0" y="9.833" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.06 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow_374_135180"/><feBlend in="SourceGraphic" in2="effect1_dropShadow_374_135180" result="shape"/></filter></defs></svg>
                                                    Germany (+49)
                                                </div>
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                                                <div class="inline-flex items-center">
                                                    <svg class="w-4 h-4 me-2" fill="none" viewBox="0 0 20 15"><rect width="19.1" height="13.5" x=".25" y=".75" fill="#fff" stroke="#F5F5F5" stroke-width=".5" rx="1.75"/><mask id="a" style="mask-type:luminance" width="20" height="15" x="0" y="0" maskUnits="userSpaceOnUse"><rect width="19.1" height="13.5" x=".25" y=".75" fill="#fff" stroke="#fff" stroke-width=".5" rx="1.75"/></mask><g mask="url(#a)"><path fill="#F44653" d="M13.067.5H19.6v14h-6.533z"/><path fill="#1035BB" fill-rule="evenodd" d="M0 14.5h6.533V.5H0v14z" clip-rule="evenodd"/></g></svg>
                                                    France (+33)
                                                </div>
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                                                <div class="inline-flex items-center">
                                                    <svg class="w-4 h-4 me-2" fill="none" viewBox="0 0 20 15"><rect width="19.6" height="14" y=".5" fill="#fff" rx="2"/><mask id="a" style="mask-type:luminance" width="20" height="15" x="0" y="0" maskUnits="userSpaceOnUse"><rect width="19.6" height="14" y=".5" fill="#fff" rx="2"/></mask><g mask="url(#a)"><path fill="#262626" fill-rule="evenodd" d="M0 5.167h19.6V.5H0v4.667z" clip-rule="evenodd"/><g filter="url(#filter0_d_374_135180)"><path fill="#F01515" fill-rule="evenodd" d="M0 9.833h19.6V5.167H0v4.666z" clip-rule="evenodd"/></g><g filter="url(#filter1_d_374_135180)"><path fill="#FFD521" fill-rule="evenodd" d="M0 14.5h19.6V9.833H0V14.5z" clip-rule="evenodd"/></g></g><defs><filter id="filter0_d_374_135180" width="19.6" height="4.667" x="0" y="5.167" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.06 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow_374_135180"/><feBlend in="SourceGraphic" in2="effect1_dropShadow_374_135180" result="shape"/></filter><filter id="filter1_d_374_135180" width="19.6" height="4.667" x="0" y="9.833" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.06 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow_374_135180"/><feBlend in="SourceGraphic" in2="effect1_dropShadow_374_135180" result="shape"/></filter></defs></svg>
                                                    Germany (+49)
                                                </div>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <label for="phone-input" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Phone number:</label>
                                <div class="relative w-full">
                                    <input type="text" id="phone-input" class="block w-full py-3 rounded-r-lg text-primaryColor font-medium pl-2" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890" required />
                                </div>
                            </div>
                            <div class="grid grid-cols-2 pt-8 pb-4 w-full">
                                <div class="flex justify-center">
                                    <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="text-white text-xl bg-gray-700 hover:bg-gray-400 font-semibold py-2 px-12 rounded-lg">
                                        Prev
                                    </button>
                                </div>
                                <div class="flex justify-center">
                                    <button type="button" onclick="nextPrev(1)" class="text-white text-xl bg-secondaryColor hover:bg-gray-400 font-semibold py-2 px-12 rounded-lg">
                                        Next
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="tab pt-4 px-9">
                            <div class="t1" id="last">
                                <p class="text-gray-700 text-xl text-center font-bold">Preferred contact method and best time to reach you?</p>
                            </div>
                            <div class="pt-5 select">
                                <select id="contact-to" class="w-full py-2 rounded-lg text-primaryColor font-semibold pl-2">
                                    <option>Phone</option>
                                    <option>Email</option>
                                    <option>Phone or Email</option>
                                </select>
                            </div>
                            <div class="pt-5 select">
                                <select id="contact-time" class="w-full py-2 rounded-lg text-primaryColor font-semibold pl-2">
                                    <option>Any time</option>
                                    <option>Morning</option>
                                    <option>Afternoon</option>
                                    <option>Evening</option>
                                </select>
                            </div>
                            <div class="pt-6 flex justify-center comment">
                                <textarea id="message" rows="4" class=" block bg-white w-full text-sm font-semibold text-primaryColor rounded-lg pl-2 pt-3 " placeholder="Comments"></textarea>
                            </div>
                            <p class="text-gray-700 text-sm pt-4 font-semibold text-start px-4">We respect your data and privacy. By clicking Get Your Instant Quote, you agree to the Terms of Service and Privacy Policy and you authorize Window, and its partners to call the phone number provided, using automated phone technology and text messaging to contact you. By giving your authorization you are not obligated to purchase products or services, and you understand that you may revoke your consent at any time.</p>

                                <div class="flex justify-center pt-4">
                                    <button  type="button" onclick="nextPrev(1)" class="last-btn text-white text-xl bg-secondaryColor hover:bg-gray-400 font-semibold py-2 lg:px-12 rounded-lg">
                                        GET YOUR INSTANT QUOTE
                                    </button>
                                </div>
                            <div class="flex justify-center pt-3">
                                <button type="button" onclick="nextPrev(-1)" class=" prevBtn text-gray-700 text-xl hover:bg-gray-400 font-semibold py-2 px-12 rounded-lg">
                                    ← BACK
                                </button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>
                </form>
                </div>
        </section>
    </div>

</div>
<script src="/Windows-v4/dist/JS/script.js"></script>
</body>
</html>