<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script
            src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous"
    ></script>
    <title>Siding</title>
    <link href="/Siding/dist/output.css" rel="stylesheet" />
    <link rel="icon" type="image/svg" href="/Siding/dist/img/logo.svg">

    <style>
      .duration-btn {
        transition: 0.2s;
      }
    </style>
  </head>

  <body class="font-bodyFont">
    <nav class="text-center" style="background: white">
      <div
        class="grid lg:grid-cols-2 md:grid-cols-1 items-center 2xl:w-contanerxl 2xl:ml-auto 2xl:mr-auto"
      >
        <div class="flex justify-center items-center p-2">
          <img src="/Siding/dist/img/logo.svg" class="w-12 brand" />
        </div>
        <a
          href=""
          class="nav-link pt-3 text-[#275329] decoration-primaryColor font-bold text-xl block lg:text-end sm:text-center md:text-center lg:mx-40 md:mx-0 sm:mx-0 pb-3 lg:w-1/2 sm:w-full"
          >Get Free Quotes</a
        >
      </div>
    </nav>
    <div class="w-full shadow list-bar bg-secondaryColor">
      <div
        class="grid grid-cols-3 p-3 justify-center xl:w-contanerxl ml-auto mr-auto"
      >
        <div
          class="text-center text-white font-bold flex justify-center items-center"
        >
          <span class="pr-2 icon w-8 flex justify-center items-center"
            ><img src="/Siding/dist/img/chat.png" style="display: inline"
          /></span>
          <h1 class="flex justify-center items-center">
            Get the best quotes, fast!
          </h1>
        </div>
        <div
          class="text-center text-white font-bold flex justify-center items-center"
        >
          <span class="pr-2 icon w-8 flex justify-center items-center"
            ><img src="/Siding/dist/img/location.png" style="display: inline" />
          </span>
          <h1 class="flex justify-center items-center">
            Over 5,000 engineers across the UK
          </h1>
        </div>
        <div
          class="text-center text-white font-bold flex justify-center items-center"
        >
          <span class="pr-2 icon w-8 flex justify-center items-center"
            ><img src="/Siding/dist/img/check.png" style="display: inline"
          /></span>
          <h1 class="flex justify-center items-center">
            Gas Safe registered engineers
          </h1>
        </div>
      </div>
    </div>

    <div
      class="bg-white min-[1500px]:min-h-screen flex flex-col justify-center"
    >
      <div
        class="w-full grid grid-cols-3 p-3 justify-center shadow list-bar-mobile bg-secondaryColor"
      >
        <div
          class="text-center text-white font-bold flex justify-center items-center gap-2"
        >
          <span class="icon w-8 flex justify-center items-center"
            ><img src="/Siding/dist/img/chat.png" style="display: inline"
          /></span>
          <h1 class="flex justify-start items-center">
            Get the best quotes, fast!
          </h1>
        </div>
        <div
          class="text-center text-white font-bold flex justify-center items-center gap-2"
        >
          <span class="icon w-8 flex justify-center items-center"
            ><img src="/Siding/dist/img/location.png" style="display: inline" />
          </span>
          <h1 class="flex justify-start items-center">
            Over 5,000 engineers across the US
          </h1>
        </div>
        <div
          class="text-center text-white font-bold flex justify-center items-center gap-2"
          style="padding-bottom: 0px"
        >
          <span class="icon w-8 flex justify-center items-center"
            ><img src="/Siding/dist/img/check.png" style="display: inline"
          /></span>
          <h1 class="flex justify-start items-center">
            Gas Safe registered engineers
          </h1>
        </div>
      </div>

      <!-- delete style="background-color: #038b570f  min-[992px]:pt-[100px]" -->
      <h3
        class="pt-[50px] text-center text-[55px] max-[360px]:text-[25px] max-[480px]:text-[30px] font-bold text-secondaryColor px-3 max-[480px]:pt-[30px] w-full lg"
      >
        Get your siding deal
      </h3>
      <!-- delete style="background-color: #038b570f" -->
      <h3
        class="min-[992px]:pb-[10px] text-gray-600 text-center text-[22px] max-[240px]:text-[15px] max-[480px]:text-[15px] font-bold pt-2 px-3 max-[480px]:py-4 w-full"
      >
        by quickly comparing 3 FREE quotes
      </h3>

      <div>
        <div
          class="grid md:grid-cols-1 sm:grid-cols-1 justify-center items-center"
          id="grid"
        >
          <div
            class="lg:pb-10 flex justify-center lg:col-span-7 sm:col-span-1 border f-form"
            style="border: none"
          >
            <form
              class="container bg-white lg:p-6 md:p-0 sm:p-0 lg:w-8/12 rounded shadow-3xl pt-2"
              id="regForm"
              action="javascript:void(0);"
            >
              <div data-tab class="tab text-white text-3xl font-bodyFont">
                <input
                        data-store
                        type="text"
                        name="service-need"
                        class="hidden"
                />
                <div class="text- text-3xl font-semibold pt-5 text-center p-5">
                  <h1 class="pb-3 text-4xl text-gray-600">
                    What service do you need?
                  </h1>
                </div>
                <label class="flex justify-center items-center pt-8">
                  <button
                    type="button"
                    data-btn
                    onclick="radioClick(1)"
                    class="duration-btn bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-[7px] p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 mb-2 text-center items-center"
                  >
                    New Siding
                  </button>
                </label>
                <label class="flex justify-center items-center pt-2">
                  <button
                    type="button"
                    data-btn
                    onclick="radioClick(2)"
                    class="duration-btn bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-[7px] p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 mb-2 text-center items-center"
                  >
                    Siding Repair
                  </button>
                </label>
              </div>
              <div data-tab class="tab text-white text-3xl font-bodyFont">
                <input
                        data-store
                        type="text"
                        name="installed-need"
                        class="hidden"
                />
                <div class="text- text-3xl font-semibold pt-5 text-center p-5">
                  <h1 class="pb-3 text-4xl text-gray-600">
                    What needs to be installed?
                  </h1>
                </div>
                <label class="flex justify-center items-center pt-8">
                  <button
                    type="button"
                    data-btn
                    onclick="radioClick(2)"
                    class="duration-btn bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-[7px] p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 mb-2 text-center items-center"
                  >
                    Brick or stone
                  </button>
                </label>
                <label class="flex justify-center items-center pt-3">
                  <button
                    type="button"
                    data-btn
                    onclick="radioClick(2)"
                    class="duration-btn bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-[7px] p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 mb-2 text-center items-center"
                  >
                    Metal
                  </button>
                </label>
                <label class="flex justify-center items-center pt-3">
                  <button
                    type="button"
                    data-btn
                    onclick="radioClick(2)"
                    class="duration-btn bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-[7px] p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 mb-2 text-center items-center"
                  >
                    Stucco
                  </button>
                </label>
                <label class="flex justify-center items-center pt-3">
                  <button
                    type="button"
                    data-btn
                    onclick="radioClick(2)"
                    class="duration-btn bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-[7px] p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 mb-2 text-center items-center"
                  >
                    Vinyl
                  </button>
                </label>
                <label class="flex justify-center items-center pt-3">
                  <button
                    type="button"
                    data-btn
                    onclick="radioClick(2)"
                    class="duration-btn bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-[7px] p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 mb-2 text-center items-center"
                  >
                    Wood
                  </button>
                </label>
                <label class="flex justify-center items-center pt-3">
                  <button
                    type="button"
                    data-btn
                    onclick="radioClick(2)"
                    class="duration-btn bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-[7px] p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 mb-2 text-center items-center"
                  >
                    Other
                  </button>
                </label>
              </div>
              <div data-tab class="tab text-white text-3xl font-bodyFont">
                <input
                        data-store
                        type="text"
                        name="installed-need"
                        class="hidden"
                />
                <div class="text- text-3xl font-semibold pt-5 text-center p-5">
                  <h1 class="pb-3 text-4xl text-gray-600">
                    What needs to be installed?
                  </h1>
                </div>
                <label class="flex justify-center items-center pt-8">
                  <button
                    type="button"
                    data-btn
                    onclick="radioClick(1)"
                    class="duration-btn bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-[7px] p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 mb-2 text-center items-center"
                  >
                    Brick or stone
                  </button>
                </label>
                <label class="flex justify-center items-center pt-3">
                  <button
                    type="button"
                    data-btn
                    onclick="radioClick(1)"
                    class="duration-btn bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-[7px] p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 mb-2 text-center items-center"
                  >
                    Metal
                  </button>
                </label>
                <label class="flex justify-center items-center pt-3">
                  <button
                    type="button"
                    data-btn
                    onclick="radioClick(1)"
                    class="duration-btn bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-[7px] p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 mb-2 text-center items-center"
                  >
                    Stucco
                  </button>
                </label>
                <label class="flex justify-center items-center pt-3">
                  <button
                    type="button"
                    data-btn
                    onclick="radioClick(1)"
                    class="duration-btn bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-[7px] p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 mb-2 text-center items-center"
                  >
                    Vinyl
                  </button>
                </label>
                <label class="flex justify-center items-center pt-3">
                  <button
                    type="button"
                    data-btn
                    onclick="radioClick(1)"
                    class="duration-btn bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-[7px] p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 mb-2 text-center items-center"
                  >
                    Wood
                  </button>
                </label>
                <label class="flex justify-center items-center pt-3">
                  <button
                    type="button"
                    data-btn
                    onclick="radioClick(1)"
                    class="duration-btn bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-[7px] p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 mb-2 text-center items-center"
                  >
                    Other
                  </button>
                </label>
              </div>

              <div data-tab class="tab text-white text-3xl font-bodyFont">
                <input
                        data-store
                        type="text"
                        name="type-of-property"
                        class="hidden"
                />
                <div class="text- text-3xl font-semibold pt-5 text-center p-5">
                  <h1 class="pb-3 text-4xl text-gray-600">
                    What type of property do you want a quote for?
                  </h1>
                </div>
                <label class="flex justify-center items-center pt-8">
                  <button
                    type="button"
                    data-btn
                    onclick="radioClick(1)"
                    class="duration-btn bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-[7px] p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 mb-2 text-center items-center"
                  >
                    Home
                  </button>
                </label>
                <label class="flex justify-center items-center pt-2">
                  <button
                    type="button"
                    data-btn
                    onclick="radioClick(1)"
                    class="duration-btn bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-[7px] p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 mb-2 text-center items-center"
                  >
                    Business
                  </button>
                </label>
              </div>

              <div data-tab class="tab text-white text-3xl font-bodyFont">
                <input
                        data-store
                        type="text"
                        name="own-or-rent"
                        class="hidden"
                />
                <div class="text- text-3xl font-semibold pt-5 text-center p-5">
                  <h1 class="pb-3 text-4xl text-gray-600">
                    Do you own or rent this home?
                  </h1>
                </div>
                <label class="flex justify-center items-center pt-8">
                  <button
                    type="button"
                    data-btn
                    onclick="radioClick(1)"
                    class="duration-btn bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-[7px] p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 mb-2 text-center items-center"
                  >
                    I own
                  </button>
                </label>
                <label class="flex justify-center items-center pt-2">
                  <button
                    type="button"
                    data-btn
                    onclick="radioClick(1)"
                    class="duration-btn bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-[7px] p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 mb-2 text-center items-center"
                  >
                    I rent
                  </button>
                </label>
              </div>
              <div class="tab text-white text-3xl font-bodyFont">
                <div class="text- text-3xl font-semibold pt-5 text-center p-5">
                  <h1 class="pb-3 text-4xl text-gray-600">
                    Okay… Can you specify your address, please?
                  </h1>
                </div>
                <div class="pt-10 flex justify-center">
                  <input
                    type="text"
                    name="address"
                    id="address"
                    class="text-xl bg-blue-950 bg-opacity-60 placeholder-white text-white rounded-[7px] block lg:w-8/12 md:w-7/12 sm:w-full p-3.5"
                    placeholder="Address"
                    required
                  />
                </div>
                <div
                  id="address-error"
                  class="text-center"
                  style="font-size: 14px"
                ></div>
                <div class="flex justify-center pt-5 items-center text-center">
                  <button
                    type="button"
                    onclick="nextPrev(1)"
                    class="duration-btn bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-[7px] p-4 lg:w-1/3 md:w-7/12 sm:w-full py-3 mb-2 mt-3 text-center items-center"
                  >
                    Next
                  </button>
                </div>
              </div>
              <div class="tab text-white text-3xl font-bodyFont">
                <div class="text- text-3xl font-semibold pt-5 text-center p-5">
                  <h1 class="pb-3 text-4xl text-gray-600">
                    Can you add your zip code, please?
                  </h1>
                </div>
                <div class="pt-10 flex justify-center">
                  <input
                    type="number"
                    name="zip"
                    pattern="[0-9]*"
                    id="zip"
                    class="text-xl bg-blue-950 bg-opacity-60 placeholder-white text-white rounded-[7px] block lg:w-8/12 md:w-7/12 sm:w-full p-3.5"
                    placeholder="e.g. 12345"
                    required
                  />
                </div>
                <div
                  id="zip-error"
                  class="text-center"
                  style="font-size: 14px"
                ></div>
                <div class="flex justify-center pt-5 items-center text-center">
                  <button
                    type="button"
                    onclick="nextPrev(1)"
                    class="duration-btn bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-[7px] p-4 lg:w-1/3 md:w-7/12 sm:w-full py-3 mb-2 mt-3 text-center items-center"
                  >
                    Next
                  </button>
                </div>
              </div>

              <div class="tab text-white text-4xl font-bodyFont">
                <div class="text- text-3xl font-semibold pt-5 text-center p-5">
                  <h1 class="pb-3 text-4xl text-gray-600">
                    What is your name?
                  </h1>
                </div>
                <div class="pt-10 flex justify-center">
                  <input
                    type="text"
                    name="fullName"
                    id="name"
                    class="text-xl placeholder-white bg-blue-950 bg-opacity-60 text-white rounded-[7px] block lg:w-8/12 md:w-7/12 sm:w-full p-3.5"
                    placeholder="Enter first Name"
                    required
                  />
                </div>
                <div class="pt-5 flex justify-center">
                  <input
                    id="lname"
                    name="lastName"
                    type="text"
                    class="text-xl placeholder-white bg-blue-950 bg-opacity-60 text-white rounded-[7px] block lg:w-8/12 md:w-7/12 sm:w-full p-3.5"
                    placeholder="Enter last Name"
                    required
                  />
                </div>
                <div
                  id="name-error"
                  class="text-center"
                  style="font-size: 14px"
                ></div>
                <div class="pt-10 flex justify-center items-center">
                  <button
                    style="margin-top: 20px"
                    type="button"
                    onclick="nextPrev(1)"
                    class="duration-btn bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-[7px] p-4 lg:w-1/3 md:w-7/12 sm:w-full py-3 mb-2 mt-3 text-center items-center"
                  >
                    Next
                  </button>
                </div>
              </div>

              <div class="tab tab tab text-white text-3xl">
                <div class="text- text-4xl font-semibold pt-5 text-center p-5">
                  <h1 class="pb-3 text-4xl text-gray-600">
                    Great! What is your email?
                  </h1>
                </div>
                <div class="pt-10 flex justify-center lg:px-0 md:px-5 sm:px-5">
                  <input
                    type="tel"
                    name="email"
                    id="email"
                    class="text-xl placeholder-white bg-blue-950 bg-opacity-60 text-white rounded-[7px] block lg:w-8/12 md:w-7/12 sm:w-full p-3.5"
                    placeholder="Enter email address"
                    required
                  />
                </div>
                <div
                  id="email-error"
                  class="text-center"
                  style="font-size: 14px"
                ></div>
                <div class="flex justify-center pt-5 items-center">
                  <button
                    type="button"
                    onclick="nextPrev(1)"
                    class="duration-btn bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-[7px] p-4 lg:w-1/3 md:w-7/12 sm:w-full py-3 mb-2 mt-3 text-center items-center"
                  >
                    Next
                  </button>
                </div>
              </div>

              <div class="tab tab tab text-white text-3xl">
                <div class="text- text-3xl font-semibold pt-5 text-center p-5">
                  <h1 class="pb-3 text-4xl text-gray-600">
                    Wonderful! We are ready to connect you with a contractor
                    Please enter your phone number
                  </h1>
                </div>
                <div class="pt-10 flex justify-center lg:px-0 md:px-5 sm:px-5">
                  <input
                    type="tel"
                    name="phone"
                    id="phone"
                    class="text-xl placeholder-white bg-blue-950 bg-opacity-60 text-white rounded-[7px] block lg:w-8/12 md:w-7/12 sm:w-full p-3.5"
                    placeholder="Enter phone number"
                    required
                  />
                </div>
                <div
                  id="phone-error"
                  class="text-center"
                  style="font-size: 14px"
                ></div>
                <div class="flex justify-center pt-5 items-center">
                  <button
                    type="button"
                    onclick="nextPrev(1)"
                    class="mt-3 duration-btn bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-[7px] p-4 lg:w-1/3 md:w-7/12 sm:w-full py-3 mb-2 text-center items-center"
                  >
                    Submit
                  </button>
                </div>
              </div>
              <div style="text-align: center; margin-top: 40px">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
              </div>
              <div style="overflow: auto" class="flex justify-center">
                <div
                  class="w-[15%] max-[650px]:w-[40%] flex justify-center items-center pb-[20px]"
                  style="float: right"
                >
                  <button
                    class="text-xl font-bold rounded-[4px] text-white bg-backBtnBg w-full"
                    type="button"
                    id="prevBtn"
                    onclick="back()"
                  >
                    ← Back
                  </button>
                </div>
              </div>
            </form>
          </div>

          <!-- add style  container -->
          <section
            class="container xl:w-contanerxl pl-4 pr-4 py-[40px] mx-auto flex justify-center mb-[20px]"
          >
            <div
              class="ads grid grid-cols-2 max-[769px]:grid-cols-1 gap-x-[70px] gap-y-[20px] [&>*]:flex [&>*]:gap-1 [&>*]:items-center [&>*]:text-[24px] max-[1024px]:[&>*]:text-[22px] max-[769px]:[&>*]:text-[20px] max-[360px]:[&>*]:text-[19px]"
            >
              <div>
                <span
                  class="flex justify-center items-center pt-1 text-[#257628]"
                  ><ion-icon name="checkmark-circle"></ion-icon
                ></span>
                <p class="text-[#2d2e2d]">Next day installation</p>
              </div>
              <div>
                <span
                  class="flex justify-center items-center pt-1 text-[#257628]"
                  ><ion-icon name="checkmark-circle"></ion-icon
                ></span>
                <p class="text-[#2d2e2d]">Quotes from local engineers</p>
              </div>
              <div>
                <span
                  class="flex justify-center items-center pt-1 text-[#257628]"
                  ><ion-icon name="checkmark-circle"></ion-icon
                ></span>
                <p class="text-[#2d2e2d]">1.9 million quotes in 10 years</p>
              </div>
              <div>
                <span
                  class="flex justify-center items-center pt-1 text-[#257628]"
                  ><ion-icon name="checkmark-circle"></ion-icon
                ></span>
                <p class="text-[#2d2e2d]">Save up to £500 on installation</p>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>

    <footer class="py-[80px] px-[40px] bg-secondaryColor">
      <div
        class="container xl:w-contanerxl pl-4 pr-4 mx-auto flex justify-center"
      >
        <p
          class="text-[25px] max-[769px]:text-[22px] font-bold [word-spacing:3px] text-white text-center"
        >
          The smarter way to find approved heating engineers
        </p>
      </div>
    </footer>

    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>

    <script src="/Siding/dist/script.js"></script>
  </body>
</html>
