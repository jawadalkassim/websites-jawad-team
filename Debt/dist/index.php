<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Debt</title>

    <link href="/Debt/dist/output.css" rel="stylesheet">
</head>

<body class="bg-gray-200 font-bodyFont m-5">


<h1 class="text-primary text-center text-5xl font-bold lg:pt-20">
    Free Debt Relief Savings Estimate!
</h1>
<p class="text-center text-gray-600 text-xl pt-8">See how much you can save</p>
<div class="flex justify-center">
<form class="bg-white lg:w-1/2 mt-8 shadow-lg rounded-lg" id="regForm" action="/Debt/dist/submit.html">
    <div class="tab">
        <div class="flex justify-center">
            <div class="pt-8">
                <h2 class="text-blue-600 text-3xl font-semibold text-center px-8 ">How much debt do you have?</h2>
            </div>
        </div>
        <div class="flex justify-center pt-8 ">
            <h5 class="text-gray-500 text-lg font-bold">Estimated Debt</h5>
        </div>
        <div class="flex justify-center">
        <div class="flex justify-center text-2xl" style="color:  #0045c2;">$</div>
        <div id="output" class=" text-primary text-center"></div>
        </div>
        <div class="flex justify-center">
        <div class="w-7/12 input-range">
                        <div class="range flex justify-center px-4">
                            <input type="range" value="20000" min="0" max="100000" id="slider" step="1000"/>
                        </div>
        </div>
        </div>
        <p class="text-gray-500 text-sm text-center">Drag the slider handler left or right.</p>
        <div class="flex justify-center py-10 items-center ">
            <button class="font-bodyFont bg-primary px-20 text-xl font-bold rounded-full" onclick="nextPrev(1)">Continue <span class="pt-4"> ➙ </span></button>
        </div>

    </div>
    <div class="tab">
        <div class="flex justify-center pt-2">
        <div>
        <div><h1 class="pt-10 text-blue-600 text-4xl font-semibold ">Where Are You Located?</h1></div>
        <div> <p class="text-gray-500 text-xl pt-10 text-center mb-4">Enter your Zip Code</p></div>
        </div>
        </div>
        <div>
            <div class="flex justify-center">
        <div class="lg:w-1/2 input-range">
                <input type="text" id="zip" class=" font-bodyFont bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 " placeholder="12345" required />
            </div>
        </div>
            <div id="zip-error" style="text-align: center;padding-top: 5px"></div>
            <div class="flex justify-center py-10 items-center ">
                <button class="font-bodyFont bg-primary px-20 text-xl font-bold rounded-full" onclick="nextPrev(1)">Continue <span class="pt-4"> ➙ </span></button>
            </div>
        </div>
    </div>
    <div class="tab">
        <div class="flex justify-center pt-2">
            <div>
                <div><h1 class="pt-10 mb-2 text-blue-600 text-4xl font-semibold ">Contact Information</h1></div>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="lg:w-1/2 input-range">
                <div class="w-full pt-3">
                    <input type="text" id="first" class=" font-bodyFont bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 " placeholder="Enter your full name" required />
                </div>
                <div class="w-full pt-3">
                    <input type="text" id="last" class=" font-bodyFont bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 " placeholder="Enter your last name" required />
                </div>
                <div class="w-full pt-3">
                    <input type="email" id="email" class=" font-bodyFont bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 " placeholder="Enter your email" required />
                </div>
            </div>
        </div>
        <div id="email-error" style="text-align: center;padding-top: 5px"></div>
        <div class="flex justify-center py-10 items-center ">
            <button class="font-bodyFont bg-primary px-20 text-xl font-bold rounded-full" onclick="nextPrev(1)">Continue <span class="pt-4"> ➙ </span></button>
        </div>
    </div>
    <div class="tab">
        <div class="flex justify-center pt-2">
            <div>
                <div><h1 class="pt-10 mb-2 text-blue-600 text-4xl font-semibold ">Customer Information</h1></div>
            </div>
        </div>
        <div class="flex justify-center pt-4">
            <div class="lg:w-1/2 input-range">
                <div class="w-full pt-3">
                    <input type="text" id="address" class=" font-bodyFont bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 " placeholder="Enter your address" required />
                </div>
                <div class="w-full pt-3">
                    <input type="tel" id="phone" class=" font-bodyFont bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 " placeholder="Enter your phone number" required />
                </div>
                <div class="flex justify-center py-10 items-center ">
                    <button class="font-bodyFont bg-primary px-20 text-xl font-bold rounded-full" onclick="nextPrev(1)">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <div style="text-align:center;">
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
</form>

</div>
<div class="text-center pt-3 text-gray-500 font-bold font-bodyFont">
    Pay Up To 30% Less Than You Owe
</div>
<div class="text-center text-gray-500 font-bold font-bodyFont">
    Debt Free In As Little As 24-48 Months
</div>
<div class="text-center text-gray-500 font-bold font-bodyFont">
    Free Consultation And Zero Up-Front-Fees
</div>
<script src="/Debt/dist/JS/script.js">

</script>
</body>

</html>