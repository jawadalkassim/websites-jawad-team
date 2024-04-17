<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Window</title>

    <link href="/Windows-v3/dist/output.css" rel="stylesheet">
</head>

<body >
<form  class="font-bodyFont hero bg-hero bg-no-repeat bg-cover bg-center bg-opacity-90" id="regForm" action="/Windows-v3/dist/submit.php">
    <div style="background-color: rgb(18,25,28,0.6);
    font-family: 'Ubuntu';
    width: 100%;
    height: 100%;
    padding: 20px;
    display: grid;
    grid-gap: 50px;
    grid-auto-rows: min-content;
    justify-content: center;
}">
<section>
    <div class="pt-8 grid lg:grid-cols-3 md:grid-cols-1 flex justify-center">
        <div class="flex justify-center">

        </div>
        <div class="flex justify-center lg:mb-0 brand">
            <img src="img/logo.png" class="w-2/5 md:pb-5 sm:pb-3">
        </div>
        <div class="flex justify-center items-center w-full rounded-full">
        <button type="button" class="text-lg gap-2 font-bold text-white bg-primaryColor hover:bg-opacity-90  rounded-full px-14 py-2 me-2 mb-2  flex justify-between items-center">
            <svg width="22" height="40">
                <path id="Vector" d="M15.522 0.1442L1.86133 2.20154C0.718472 2.37365 -0.074574 3.39918 0.0899875 4.49187L4.11061 31.1888C4.27517 32.2815 5.33508 33.028
                    6.47794 32.8558L20.1385 30.7985C21.2815 30.6264 22.0744 29.6009 21.9099 28.5082L17.8893 1.81126C17.7247 0.71857 16.6648 -0.0279002 15.5219 0.144217L15.522
                    0.1442ZM7.38158 3.0655C7.35849 2.91215 7.47081 2.76691 7.63119 2.74276L10.1677 2.36075C10.3281 2.3366 10.4782 2.44231 10.5013 2.59566C10.5244 2.74901 10.4121
                    2.89424 10.2517 2.91839L7.71517 3.30041C7.55479 3.32456 7.40468 3.21885 7.38158 3.0655ZM13.1693 30.9037C12.363 31.0251 11.6152 30.4985 11.4991 29.7275C11.383
                    28.9566 11.9425 28.2331 12.7488 28.1117C13.5551 27.9902 14.3029 28.5168 14.419 29.2878C14.5351 30.0588 13.9756 30.7822 13.1693 30.9037ZM19.9688 26.0797L5.25054
                    28.2964L1.83192 5.59672L16.5501 3.38013L19.9687 26.0799L19.9688 26.0797Z" fill="white"></path>
            </svg>
            <a href="tel:+123 456 789">+123 456 789</a>
        </button>
        </div>
    </div>
    <div class="tab">
    <div class="text-white text-4xl font-semibold pt-16 text-center font-ubuntu p-5">
        <h1 class="pb-3"><span id="location"></span> Service Pairs You with </h1><span style="text-shadow: #000 0.2px 0 3px" class="text-green-500 text-4xl">
            Expert Window Contractors in Your Area for Free</span>
    </div>
    <div class="text-lg text-white font-medium text-center pt-4">
        Contribute to the Success of Your Window Replacement Project
    </div>
    <div class="pt-10 flex justify-center">
    <input id="zip" type="text" class="text-xl bg-white text-gray-950  rounded-full block lg:w-3/12 md:w-1/2 sm:w-1/2 p-3.5" placeholder="ZIP Code" required />
    </div>
        <div id="zip-error" style="text-align: center;padding-top: 5px"></div>
    <div class="flex justify-center pt-5 ">
    <button type="button" onclick="nextPrev(1)" class="font-bodyFont s text-xl gap-2 font-medium text-white bg-primaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-3/12 md:w-1/2 sm:w-1/2 py-3 me-2 mb-2  text-center items-center">
        GET QUOTES
    </button>
    </div>
    </div>
</section>
    <div class="tab text-white text-3xl font-bodyFont pt-8">
        <h1 class="text-center text-primaryColor font-bold font-bodyFont" style="text-shadow: #000 0.2px 0 3px">What window upgrades are you looking for?</h1>
        <p class="text-white font-bold text-center text-xl pt-5">Tell us more about your project requirements</p>
        <div class="grid lg:grid-cols-3 md:grid-cols-1 sm:grid-cols-1 flex mx-0 justify-evenly mt-5 lg:px-48 md:px-0 sm:px-0">
                            <label class="card-radio-btn flex justify-center">
                                <input onclick="radioClick(0)" type="radio" class="card-input-element hidden" >
                                <div class="card card-body mx-0">
                                    <div class="content_head flex justify-center"><img src="/Windows-v3/dist/img/replace2.png" width="25%"></div>
                                    <div id="replacement" class="content_sub font-bold text-2xl" style="color: #444 !important;">Window Replacement</div>
                                </div>
                            </label>
            <label class="card-radio-btn flex justify-center">
                <input onclick="radioClick(1)" type="radio" class="card-input-element hidden">
                <div class="card card-body mx-0">
                    <div class="content_head flex justify-center"><img src="/Windows-v3/dist/img/repair2.png" style="width: 25%"></div>
                    <div id="repair" class="content_sub font-bold text-2xl"  style="color: #444 !important;">Window Repair</div>
                </div>
            </label>
            <label class="card-radio-btn flex justify-center">
                <input onclick="radioClick(2)" type="radio" class="card-input-element hidden" >
                <div class="card card-body mx-0">
                    <div class="content_head flex justify-center"><img src="/Windows-v3/dist/img/installation2.png"></div>
                    <div id="installation" class="content_sub font-bold text-2xl" style="color: #444 !important;">Window Installation</div>
                </div>
            </label>
        </div>
        </div>
    <div class="tab text-white text-3xl font-bodyFont pt-8">
        <h1 class="text-center text-primaryColor font-bold font-bodyFont " style="text-shadow: #000 0.2px 0 3px">How many windows do you need to work on?</h1>
        <p class="text-white font-bold text-center text-xl pt-5">We use this information to determine the scope of the project</p>
        <label class="flex justify-center items-center pt-8">
            <input onclick="radioClick(3)" type="radio" class="card-input-element hidden">
            <button id="1-2" type="button" onclick="radioClick(3)" class="s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90  text-start rounded-full p-4 lg:w-3/12 md:w-1/2 sm:w-1/2 py-3 me-2 mb-2 items-center">
                1-2 windows
            </button>
        </label>
        <label class="flex justify-center items-center">
            <input onclick="radioClick(4)" type="radio" class="card-input-element hidden" >
            <button id="3-5" type="button" onclick="radioClick(4)" class="s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90  text-start rounded-full p-4 lg:w-3/12 md:w-1/2 sm:w-1/2 py-3 me-2 mb-2 items-center">
                3-5 windows
            </button>
        </label>
        <label class="flex justify-center items-center">
            <input onclick="radioClick(5)" type="radio" class="card-input-element hidden">
            <button id="6-9" type="button" onclick="radioClick(5)" class="s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90  text-start rounded-full p-4 lg:w-3/12 md:w-1/2 sm:w-1/2 py-3 me-2 mb-2 items-center">
                6-9 windows
            </button>
        </label>
        <label class="flex justify-center items-center">
            <input onclick="radioClick(6)" type="radio" class="card-input-element hidden">
            <button id="10+" type="button"  onclick="radioClick(6)" class="s text-white bg-secondaryColor text-xl gap-2 font-medium hover:bg-opacity-90  text-start rounded-full p-4 lg:w-3/12 md:w-1/2 sm:w-1/2 py-3 me-2 mb-2 items-center">
                10+ windows
            </button>
        </label>
    </div>
    <div class="tab text-white text-3xl font-bodyFont pt-8">
        <h1 class="text-center text-primaryColor font-bold font-bodyFont" style="text-shadow: #000 0.2px 0 3px">Specify your street address</h1>
        <p class="text-white font-bold text-center text-xl pt-2">We'll search among the gutter installers in your neighborhood</p>
        <div class="pt-10 flex justify-center">
            <input id="address" type="text" class="text-xl bg-white text-gray-950 rounded-full block lg:w-3/12 md:w-1/2 sm:w-1/2 p-3.5" placeholder="Type Here e.g. 123 West Main Road" required />
        </div>
        <div class="flex justify-center pt-5">
            <button onclick="nextPrev(1)" type="button" class="font-bodyFont s text-xl gap-2 font-medium text-white bg-primaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-3/12 md:w-1/2 sm:w-1/2 py-3 me-2 mb-2  text-center items-center">
                Next
            </button>
        </div>
    </div>
    <div class="tab text-white text-3xl font-bodyFont pt-8">
        <h1 class="text-center text-primaryColor font-bold font-bodyFont" style="text-shadow: #000 0.2px 0 3px">Enter your email for better communication</h1>
        <p class="text-white font-bold text-center text-xl pt-5">You'll get follow-up emails after every verbal consultation</p>
        <div class="pt-10 flex justify-center">
            <input id="email" type="email" class="text-xl bg-white text-gray-950  rounded-full block lg:w-3/12 md:w-1/2 sm:w-1/2 p-3.5" placeholder="Email address" required />
        </div>
        <div id="email-error" style="text-align: center;padding-top: 5px;font-size: 14px;font-weight: 450"></div>
        <div class="flex justify-center pt-5">
            <button onclick="nextPrev(1)" type="button" class="font-bodyFont s text-xl gap-2 font-medium text-white bg-primaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-3/12 md:w-1/2 sm:w-1/2 py-3 me-2 mb-2  text-center items-center">
                Next
            </button>
        </div>
    </div>
    <div class="tab tab text-white text-3xl font-bodyFont pt-8">
        <h1 class="text-center text-primaryColor font-bold font-bodyFont" style="text-shadow: #000 0.2px 0 3px">What should we call you?</h1>
        <p class="text-white font-bold text-center text-xl pt-5">Enter your full name to let our managers reach out to you</p>
        <div class="pt-10 flex justify-center">
            <input id="fName" type="text" class="text-xl bg-white text-gray-950  rounded-full block lg:w-3/12 md:w-1/2 sm:w-1/2 p-3.5" placeholder="Enter first Name" required />
        </div>
        <div class="pt-5 flex justify-center">
            <input id="lName" type="text" class="text-xl bg-white text-gray-950  rounded-full block lg:w-3/12 md:w-1/2 sm:w-1/2 p-3.5" placeholder="Enter last Name" required />
        </div>
        <div class="pt-10 flex justify-center">
            <button onclick="nextPrev(1)" type="button" class="font-bodyFont s text-xl gap-2 font-medium text-white bg-primaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-3/12 md:w-1/2 sm:w-1/2 py-3 me-2 mb-2  text-center items-center">
                Next
            </button>
        </div>
    </div>
    <div class="tab tab tab text-white text-3xl font-bodyFont pt-8">
        <h1 class="text-center text-primaryColor font-bold font-bodyFont" style="text-shadow: #000 0.2px 0 3px">Receive expert advice for your windows project!</h1>
        <p class="text-white font-bold text-center text-xl pt-5">Enter your phone number to get verbal quotes from local contractors</p>
        <div class="pt-10 flex justify-center">
            <input id="phone" type="tel" class="text-xl bg-white text-gray-950  rounded-full block lg:w-3/12 md:w-1/2 sm:w-1/2 p-3.5" placeholder="Enter phone number" required />
        </div>
        <div id="phone-error" style="text-align: center;padding-top: 5px;font-size: 14px;font-weight: 450"></div>
        <div class="flex justify-center pt-5">
            <button onclick="nextPrev(1)" type="button" class="font-bodyFont s text-xl gap-2 font-medium text-white bg-primaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-3/12 md:w-1/2 sm:w-1/2 py-3 me-2 mb-2  text-center items-center">
                Unlock Deals
            </button>
        </div>
    </div>
        <div class="lg:mb-20 sm:mb-12"></div>
    <div style="text-align:center;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
    </div>
    <div style="overflow:auto" class="flex justify-center" >
        <div style="float:right;">
            <button type="button" class="text-xl font-bold" id="prevBtn" onclick="nextPrev(-1)">← Back</button>
        </div>
    </div>
    </div>
</form>
<section class="bg-table bg-no-repeat bg-cover bg-center">
    <div class="text-secondaryColor p-10 text-5xl font-semibold pt-16 lg:pl-80 md:pl-0 sm:pl-0 ">
        <h1 style="text-align: start !important;" class="pb-3">What is the average cost </h1><span class="text-start text-primaryColor text-3xl">
            of the window replacement project?</span>
    </div>
    <div class="cost lg:mx-80 md:mx-0 sm:mx-0 lg:flex md:block" style="background: linear-gradient(270deg, rgba(255, 255, 255, .9) 0, rgba(255, 255, 255, 0) 106.48%);backdrop-filter: blur(20px);backdrop-filter: blur(20px);
    border-radius: 20px;
    padding: 40px 60px;">
        <div class="t-size lg:w-1/2 md:w-full sm:w-full text-secondaryColor lg:text-4xl md:text-lg sm:text-lg font-semibold">The national
            average window replacement cost is <span class="text-primaryColor">$670</span><span class="text-black font-medium" style="font-size: 50% !important;"> (including labor)</span></div>
        <div class="lg:w-1/2 md:w-full sm:w-full">
            <div class="flex justify-around font-bold text-lg">
                <div>Window frame type</div>
                <div>Replacement cost</div>
            </div>
            <div class="flex justify-around pt-5 text-lg">
                <div>Vinyl window</div>
                <div>$230 to $650</div>
            </div>
            <div class="flex justify-around pt-5 text-lg">
                <div>Aluminum window</div>
                <div>$175 to $420</div>
            </div>
            <div class="flex justify-around pt-5 text-lg">
                <div>Fiberglass window</div>
                <div>$800 to $1.250</div>
            </div>
            <div class="flex justify-around pt-5 text-lg ">
                <div>Wooden window</div>
                <div>$325 to $750</div>
            </div>
            <div class="flex justify-around pt-5 text-gray-400">
                <div class="text-gray-600 text-sm">How We Collect Cost Data</div>
            </div>
        </div>
    </div>
    <div class="pb-16"></div>
</section>
<section>
    <div class="lg:grid lg:grid-cols-2 md:grid-cols-1">
        <div class="text-secondaryColor text-4xl flex justify-center items-center bg-white">
            <div>
            <div class="flex justify-center font-medium">
            <h1 class="pb-3 w-1/2  pt-10">Window replacement
                costs in <span class="text-primaryColor">
            2024</span></h1>
            </div>
            <div class="text-lg flex justify-center">
                <div class="w-1/2">
                Years of exposure to the elements can't help but take their toll on the performance of home windows. Repairing and sealing become worthless at some point. That is why homeowners are left with the only option - to remove the existing windows. Replacing all windows in a standard-sized house is a considerable investment, but units that are no longer up to energy-efficiency standards will cost you more in the long run.

                The average cost of a regular double-hung replacement window ranges from $200 to $730. Depending on the state, you can also expect to add labor costs to a window installation, equal to $100 - $250.

                Here are other factors that contribute to the price of replacement windows:
                </div>
            </div>
                <div class="flex justify-center">
                <ul class="w-1/2 font-medium text-black" style="list-style: disc">
                    <li class="text-sm text-black pt-5">
                        Window type (sing-hung, double-hung, bay, arched, casement, etc.)
                    </li>
                    <li class="text-sm text-black pt-2">
                        Window frame material (vinyl, fiberglass, aluminum, wood, etc.)
                    </li>
                    <li class="text-sm text-black pt-2">
                        Window installation type (full-frame or retrofit)
                    </li>
                    <li class="text-sm text-black pt-2">
                        Window glass type (laminated, heat-treated, annealed)
                    </li>
                    <li class="text-sm text-black pt-2">
                        Window energy efficiency and insulation properties
                    </li>
                    <li class="text-sm text-black pt-2">
                        Window size and style
                    </li>
                </ul>
                </div>
                <div class="flex justify-center pt-8">
                    <button type="button" class="font-bodyFont text-xl gap-2 font-medium text-white bg-primaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-1/2 md:w-1/2 sm:w-1/2 py-3 me-2 mb-2  text-center items-center">
                        GET ACCURATE ESTIMATE
                    </button>
                </div>
                <div class="text-sm text-center pt-2">Including price quotations from local pros</div>
        </div>
        </div>
        <div class="pt-5 lg:w-full sm:mx-0 md:mx-0">
            <img src="/Windows-v3/dist/img/repair.jpg" class="object-contain" style="height: 100%">
        </div>
        </div>
</section>
<script src="/Windows-v3/dist/JS/script.js">

</script>
</body>

</html>