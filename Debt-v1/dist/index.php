<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Debt</title>

    <link href="/Debt-v1/dist/output.css" rel="stylesheet">
</head>

<body class=" font-bodyFont" style="background: linear-gradient(90deg, rgba(6,119,204,0.08698091052827384) 0%, rgba(6,119,204,0) 100%);">
<nav class="bg-white shadow-lg">
    <div class="block">
    <div class="flex justify-center">
    <div class="py-1 brand flex justify-center">
        <img src="/Debt-v1/dist/img/logo2.png">
    </div>
    </div>
    </div>
    <div class="block pb-2">
        <div class="flex justify-center">
            <div class="text-center block text-xl text-secondary font-semibold">
                Debt Relief Savings
            </div>
        </div>
    </div>
</nav>

<h1 class="text-primary text-center text-6xl font-bold lg:pt-8 m-5 title">
    Free Debt Relief Savings Estimate!
</h1>
<p class="text-center text-gray-600 text-xl pt-4">See how much you can save</p>
<div id="formResp">
    <form class="bg-white lg:w-8/12 mt-8 shadow-xl rounded-lg m-8" id="regForm" action="/Debt-v1/dist/submit.php">
        <div class="stepper-wrapper py-5 lg:px-40">
            <div class="stepper-item">
                <div class="step-counter"></div>
            </div>
            <div class="stepper-item">
                <div class="step-counter"></div>
            </div>
            <div class="stepper-item">
                <div class="step-counter"></div>
            </div>
            <div class="stepper-item">
                <div class="step-counter"></div>
            </div>
        </div>
    <div class="tab">
        <div class="flex justify-center">
            <div class="pt-5">
                <h2 class="text-secondary text-4xl font-semibold text-center px-8 ">How Much Debt Do You Have?</h2>
            </div>
        </div>
        <div class="flex justify-center pt-8 ">
            <h5 class="text-gray-500 text-lg font-bold">Estimated Debt</h5>
        </div>
        <div class="flex justify-center">
        <div class="flex justify-center text-2xl dol" style="color:  #0045c2;">$</div>
        <div id="output" class=" text-3xl text-primary text-center font-bodyFont"></div>
        </div>
        <div class="flex justify-center">
        <div class="w-8/12 input-range">
                        <div class="range flex justify-center px-4">
                            <input type="range" value="20000" min="0" max="100000" id="slider" step="1000"/>
                        </div>
        </div>
        </div>
        <p class="text-gray-500 text-sm text-center">Drag the slider handler left or right.</p>
        <div class="flex justify-center py-12 items-center ">
            <button class="font-bodyFont bg-primary lg:px-20 lg:py-5 text-2xl font-bold rounded-full" onclick="nextPrev(1)">Continue <span class="pt-4"> ➙ </span></button>
        </div>
        <div class="grid lg:grid-cols-2 pt-8">
            <div><div class="text-center text-gray-500 font-bold font-bodyFont">
                <span><i class="fa fa-check text-primary" aria-hidden="true"></i></span> Pay Up To 30% Less Than You Owe
            </div>
            </div>
        <div><div class="features text-center text-gray-500 font-bold font-bodyFont">
            <span><i class="fa fa-check text-primary" aria-hidden="true"></i></span> Debt Free In As Little As 24-48 Months
        </div>
        </div>
        </div>
        <div class="text-center pt-8 text-gray-500 font-bold font-bodyFont mb-10">
            <span><i class="fa fa-check text-primary" aria-hidden="true"></i></span> Free Consultation And Zero Up-Front-Fees
        </div>

    </div>
    <div class="tab">
        <div class="flex justify-center pt-2">
        <div>
        <div><h1 class="pt-5 text-secondary text-4xl font-semibold ">Where Are You Located?</h1></div>
        <div> <p class="text-gray-500 text-xl pt-10 text-center mb-4 q-title">Enter your Zip Code</p></div>
        </div>
        </div>
        <div>
            <div class="flex justify-center">
        <div class="lg:w-1/2 input-range">
                <input type="text" id="zip" class=" font-bodyFont bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-4 " placeholder="12345" required />
            </div>
        </div>
            <div id="zip-error" style="text-align: center;padding-top: 5px"></div>
            <div class="flex justify-center py-10 items-center ">
                <button class="font-bodyFont bg-primary lg:px-20 lg:py-5 text-2xl font-bold rounded-full" onclick="nextPrev(1)">Continue <span class="pt-4"> ➙ </span></button>
            </div>
        </div>
    </div>
    <div class="tab">
        <div class="flex justify-center pt-2">
            <div>
                <div><h1 class="pt-5 mb-2 text-secondary text-4xl font-semibold title q-title ">Contact Information</h1></div>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="lg:w-1/2 input-range">
                <div class="w-full pt-3">
                    <label for="first"></label><input type="text" id="first" class=" font-bodyFont bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-4 " placeholder="Enter your full name" required />
                </div>
                <div class="w-full pt-3">
                    <label for="last"></label><input type="text" id="last" class=" font-bodyFont bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-4 " placeholder="Enter your last name" required />
                </div>
                <div class="w-full pt-3">
                    <label for="email"></label><input type="email" id="email" class=" font-bodyFont bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-4 " placeholder="Enter your email" required />
                </div>
            </div>
        </div>
        <div id="email-error" style="text-align: center;padding-top: 5px"></div>
        <div class="flex justify-center py-10 items-center ">
            <button class="font-bodyFont bg-primary lg:px-20 lg:py-5 text-2xl font-bold rounded-full" onclick="nextPrev(1)">Continue <span class="pt-4"> ➙ </span></button>
        </div>
    </div>
    <div class="tab">
        <div class="flex justify-center pt-2">
            <div>
                <div><h1 class="pt-10 mb-2 text-secondary text-4xl font-semibold title q-title">Contact Information</h1></div>
            </div>
        </div>
        <div class="flex justify-center pt-5">
            <div class="lg:w-1/2 input-range">
                <div class="w-full pt-3">
                    <label for="address"></label><input type="text" id="address" class=" font-bodyFont bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-4 " placeholder="Enter your address" required />
                </div>
                <div class="w-full pt-3">
                    <label for="phone"></label><input type="tel" id="phone" class=" font-bodyFont bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-4 " placeholder="Enter your phone number" required />
                </div>
                <div class="flex justify-center py-10 items-center ">
                    <button class="font-bodyFont bg-primary lg:px-20 lg:py-5 text-2xl font-bold rounded-full q-title q-button" onclick="nextPrev(1)">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <div style="overflow:auto" class="flex justify-center" >
        <div style="float:right;">
            <button type="button" class="text-xl font-bold text-gray-500 font-bodyFont" id="prevBtn" onclick="nextPrev(-1)">← Back</button>
        </div>
    </div>
</form>
</div>
<footer class="bg-secondary pt-5 pb-20 mt-10">
            <div class="grid lg:grid-cols-3 text-white">
                <div class="flex justify-center">
                    <a href="">Licensing and Disclosures</a>
                </div>
                <div class="flex justify-center">
                    <a href="">Privacy Policy</a>
                </div>
                <div class="flex justify-center">
                    <a href="">Terms of Use</a>
                </div>
            </div>
</footer>
<script src="/Debt-v1/dist/JS/script.js">

</script>
</body>

</html>