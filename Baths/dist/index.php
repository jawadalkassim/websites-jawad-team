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
    <title>Baths</title>
    <link rel="icon" type="image/x-icon" href="/Baths/dist/img/favicon.ico" />

    <link href="/Baths/dist/output.css" rel="stylesheet" />
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
          <img src="/Baths/dist/img/logo.svg" class="w-12 brand" />
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
            ><img src="/Baths/dist/img/chat.png" style="display: inline"
          /></span>
          <h1 class="flex justify-center items-center">
            Get the best quotes, fast!
          </h1>
        </div>
        <div
          class="text-center text-white font-bold flex justify-center items-center"
        >
          <span class="pr-2 icon w-8 flex justify-center items-center"
            ><img src="/Baths/dist/img/location.png" style="display: inline" />
          </span>
          <h1 class="flex justify-center items-center">
            Over 5,000 engineers across the UK
          </h1>
        </div>
        <div
          class="text-center text-white font-bold flex justify-center items-center"
        >
          <span class="pr-2 icon w-8 flex justify-center items-center"
            ><img src="/Baths/dist/img/check.png" style="display: inline"
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
            ><img src="/Baths/dist/img/chat.png" style="display: inline"
          /></span>
          <h1 class="flex justify-start items-center">
            Get the best quotes, fast!
          </h1>
        </div>
        <div
          class="text-center text-white font-bold flex justify-center items-center gap-2"
        >
          <span class="icon w-8 flex justify-center items-center"
            ><img src="/Baths/dist/img/location.png" style="display: inline" />
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
            ><img src="/Baths/dist/img/check.png" style="display: inline"
          /></span>
          <h1 class="flex justify-start items-center">
            Gas Safe registered engineers
          </h1>
        </div>
      </div>

      <h3
        class="pt-[50px] text-center text-[55px] max-[360px]:text-[25px] max-[480px]:text-[30px] font-bold text-secondaryColor px-3 max-[480px]:pt-[30px] w-full lg"
      >
        Get your baths deal
      </h3>

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
              <div class="tab text-white text-3xl font-bodyFont">
                <div class="text- text-3xl font-semibold pt-5 text-center p-5">
                  <h1 class="pb-3 text-4xl text-gray-600">
                    Can you add your zip code, please?
                  </h1>
                </div>
                <div
                  class="pt-10 flex justify-center flex-col items-center mt-[10px] sm:mb-[2px]"
                >
                  <input
                    id="zip"
                    type="number"
                    name="zip"
                    pattern="[0-9]*"
                    class="text-xl placeholder-white bg-blue-950 bg-opacity-60 text-white rounded-[7px] block lg:w-8/12 md:w-7/12 sm:w-full p-3.5"
                    placeholder="e.g. 12345"
                    required
                  />

                  <div
                    id="zip-error"
                    class="text-center h-[22px] flex items-center pt-[7px]"
                    style="font-size: 13.5px; color: red"
                  ></div>
                </div>

                <div
                  class="flex justify-center items-center text-center pt-[5px]"
                >
                  <button
                    type="button"
                    onclick="nextPrev(1)"
                    class="group mt-2 gap-x-[2px] h-[57.6px] max-[480px]:w-full duration-btn flex justify-center bg text-xl font-bold text-white bg-secondaryColor hover:bg-opacity-90 rounded-[7px] p-4 w-[90%] lg:w-1/3 md:w-7/12 sm:w-full py-3 mb-2 text-center items-center"
                  >
                    <span>Next</span>

                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="w-[20px] h-6 mt-[4px] group-hover:translate-x-[8px] duration-200"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"
                      ></path>
                    </svg>
                  </button>
                </div>
              </div>

              <div class="tab text-white text-3xl font-bodyFont">
                <input
                  data-store="bathroomPlans"
                  type="text"
                  name="bathroom-plans"
                  class="hidden"
                  value="1"
                />

                <div class="text- text-3xl font-semibold pt-8 text-center p-5">
                  <h1 class="pb-3 text-4xl text-gray-600">
                    What are your bathroom renovation plans?
                  </h1>
                </div>
                <div
                  class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 mx-0 justify-evenly mt-2"
                >
                  <label class="card-radio-btn flex justify-center">
                    <input type="radio" class="card-input-element hidden" />
                    <div
                      class="card card-body mx-0"
                      onclick="nextPrev(1);handelBtnClick('Tub to Shower Conversion','bathroomPlans')"
                      data-btn
                    >
                      <div
                        type="button"
                        class="content_head flex justify-center"
                      >
                        <img src="/Baths/dist/img/tubToshowe.png" />
                      </div>
                      <div
                        id="replacement"
                        class="content_sub font-bold text-4xl"
                        style="color: #444 !important"
                      >
                        Tub to Shower Conversion
                      </div>
                    </div>
                  </label>
                  <label class="card-radio-btn flex justify-center">
                    <input type="radio" class="card-input-element hidden" />
                    <div
                      class="card card-body mx-0"
                      onclick="nextPrev(1);handelBtnClick('Shower Installation','bathroomPlans')"
                    >
                      <div
                        type="button"
                        class="content_head flex justify-center"
                      >
                        <img src="/Baths/dist/img/shower_installation.png" />
                      </div>
                      <div
                        id="repair"
                        class="content_sub font-bold text-4xl"
                        style="color: #444 !important"
                      >
                        Shower Installation
                      </div>
                    </div>
                  </label>
                </div>

                <div
                  class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 mx-0 justify-evenly mt-1"
                >
                  <label class="card-radio-btn flex justify-center">
                    <input type="radio" class="card-input-element hidden" />
                    <div
                      class="card card-body mx-0"
                      onclick="nextPrev(1);handelBtnClick('Bathroom Remodeling','bathroomPlans')"
                    >
                      <div
                        type="button"
                        class="content_head flex justify-center"
                      >
                        <img src="/Baths/dist/img/bathroom_remodeling.png" />
                      </div>
                      <div
                        id="j"
                        class="content_sub font-bold text-4xl"
                        style="color: #444 !important"
                      >
                        Bathroom Remodeling
                      </div>
                    </div>
                  </label>
                  <label class="card-radio-btn flex justify-center">
                    <input type="radio" class="card-input-element hidden" />
                    <div
                      class="card card-body mx-0"
                      onclick="nextPrev(1);handelBtnClick('Fixtures Upgrades','bathroomPlans')"
                    >
                      <div
                        type="button"
                        class="content_head flex justify-center"
                      >
                        <img src="/Baths/dist/img/fixtures_upgrades.png" />
                      </div>
                      <div
                        id="installation"
                        class="content_sub font-bold text-4xl"
                        style="color: #444 !important"
                      >
                        Fixtures Upgrades
                      </div>
                    </div>
                  </label>
                </div>
              </div>

              <div class="tab text-white text-3xl font-bodyFont">
                <div class="text- text-3xl font-semibold pt-5 text-center p-5">
                  <h1 class="pb-3 text-4xl text-gray-600">
                    Where will this project take place?
                  </h1>
                </div>
                <div
                  class="pt-10 flex justify-center flex-col items-center mt-[10px] sm:mb-[2px]"
                >
                  <input
                    id="address"
                    type="text"
                    name="address"
                    class="text-xl placeholder-white bg-blue-950 bg-opacity-60 text-white rounded-[7px] block lg:w-8/12 md:w-7/12 sm:w-full p-3.5"
                    placeholder="e.g. 123 West Main Road"
                    required
                  />
                  <div
                    id="address-error"
                    class="text-center h-[22px] flex items-center pt-[7px]"
                    style="font-size: 13.5px; color: red"
                  ></div>
                </div>
                <div
                  class="flex justify-center items-center text-center pt-[5px]"
                >
                  <button
                    type="button"
                    onclick="nextPrev(1)"
                    class="group mt-2 gap-x-[2px] h-[57.6px] max-[480px]:w-full duration-btn flex justify-center bg text-xl font-bold text-white bg-secondaryColor hover:bg-opacity-90 rounded-[7px] p-4 w-[90%] lg:w-1/3 md:w-7/12 sm:w-full py-3 mb-2 text-center items-center"
                  >
                    <span>Next</span>

                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="w-[20px] h-6 mt-[4px] group-hover:translate-x-[8px] duration-200"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"
                      ></path>
                    </svg>
                  </button>
                </div>
              </div>

              <div class="tab text-white text-4xl font-bodyFont">
                <div class="text- text-3xl font-semibold pt-5 text-center p-5">
                  <h1 class="pb-3 text-4xl text-gray-600">
                    Mention your first and last name
                  </h1>
                </div>
                <div class="pt-10 flex justify-center flex-col items-center">
                  <input
                    id="name"
                    type="text"
                    name="firstName"
                    class="text-xl placeholder-white bg-blue-950 bg-opacity-60 text-white rounded-[7px] block lg:w-8/12 md:w-7/12 sm:w-full p-3.5"
                    placeholder="Enter first Name"
                    required
                  />
                  <span
                    id="firstNmaeError"
                    class="text-[13.5px] flex items-center pt-[7px] h-[22px] lg:w-8/12 md:w-7/12 w-full text-[#ff0000]"
                  ></span>
                </div>
                <div
                  class="pt-[10px] flex justify-center flex-col items-center"
                  style="padding-top: 10px !important"
                >
                  <input
                    id="lname"
                    type="text"
                    name="lastName"
                    class="text-xl placeholder-white bg-blue-950 bg-opacity-60 text-white rounded-[7px] block lg:w-8/12 md:w-7/12 sm:w-full p-3.5"
                    placeholder="Enter last Name"
                    required
                  />
                  <span
                    id="secondNmaeError"
                    class="text-[13.5px] flex items-center pt-[7px] h-[22px] lg:w-8/12 md:w-7/12 w-full text-[#ff0000]"
                  ></span>
                </div>

                <div
                  class="flex justify-center items-center text-center mt-[3px]"
                >
                  <button
                    type="button"
                    onclick="nextPrev(1)"
                    class="group mt-2 gap-x-[2px] h-[57.6px] max-[480px]:w-full duration-btn flex justify-center bg text-xl font-bold text-white bg-secondaryColor hover:bg-opacity-90 rounded-[7px] p-4 w-[90%] lg:w-1/3 md:w-7/12 sm:w-full py-3 mb-2 text-center items-center"
                  >
                    <span>Next</span>

                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="w-[20px] h-6 mt-[4px] group-hover:translate-x-[8px] duration-200"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"
                      ></path>
                    </svg>
                  </button>
                </div>
              </div>

              <div class="tab tab tab text-white text-3xl">
                <div class="text- text-4xl font-semibold pt-5 text-center p-5">
                  <h1 class="pb-3 text-4xl text-gray-600">
                    Enter your email for better communication
                  </h1>
                </div>
                <div
                  class="pt-10 flex justify-center flex-col items-center mt-[10px] sm:mb-[2px]"
                >
                  <input
                    id="email"
                    type="text"
                    name="email"
                    class="text-xl placeholder-white bg-blue-950 bg-opacity-60 text-white rounded-[7px] block lg:w-8/12 md:w-7/12 sm:w-full p-3.5"
                    placeholder="Enter email address"
                    required
                  />

                  <div
                    id="email-error"
                    class="text-center h-[22px] flex items-center pt-[7px]"
                    style="font-size: 13.5px; color: red"
                  ></div>
                </div>

                <div
                  class="flex justify-center items-center text-center pt-[5px]"
                >
                  <button
                    type="button"
                    onclick="nextPrev(1)"
                    class="group mt-2 gap-x-[2px] h-[57.6px] max-[480px]:w-full duration-btn flex justify-center bg text-xl font-bold text-white bg-secondaryColor hover:bg-opacity-90 rounded-[7px] p-4 w-[90%] lg:w-1/3 md:w-7/12 sm:w-full py-3 mb-2 text-center items-center"
                  >
                    <span>Next</span>

                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="w-[20px] h-6 mt-[4px] group-hover:translate-x-[8px] duration-200"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"
                      ></path>
                    </svg>
                  </button>
                </div>
              </div>

              <div class="tab tab tab text-white text-3xl">
                <div class="text- text-3xl font-semibold pt-5 text-center p-5">
                  <h1 class="pb-3 text-4xl text-gray-600">
                    Enter your phone number to get verbal quotes from local
                    contractors:
                  </h1>
                </div>
                <div
                  class="pt-10 flex justify-center flex-col items-center mt-[10px] sm:mb-[2px]"
                >
                  <input
                    id="phone"
                    type="tel"
                    name="phone"
                    class="text-xl placeholder-white bg-blue-950 bg-opacity-60 text-white rounded-[7px] block lg:w-8/12 md:w-7/12 sm:w-full p-3.5"
                    placeholder="Enter phone number"
                    required
                  />
                  <div
                    id="phone-error"
                    class="text-center h-[22px] flex items-center pt-[7px]"
                    style="font-size: 13.5px; color: red"
                  ></div>
                </div>

                <div class="flex justify-center pt-[5px] items-center">
                  <button
                    type="submit"
                    onclick="nextPrev(1)"
                    class="mt-2 h-[57.6px] max-[480px]:w-full duration-btn flex justify-center bg text-xl font-bold text-white bg-secondaryColor hover:bg-opacity-90 rounded-[7px] p-4 w-[90%] lg:w-1/3 md:w-7/12 sm:w-full py-3 mb-2 text-center items-center"
                  >
                    Submit
                  </button>
                </div>
              </div>

              <div style="text-align: center; margin-top: 40px; display: none">
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
                <span class="step"></span>
              </div>

              <div
                style="overflow: auto"
                class="flex justify-center pt-[28px] max-[480px]:pt-[25px]"
              >
                <div
                  class="w-[15%] max-[769px]:w-[40%] flex justify-center items-center pb-[20px]"
                  style="float: right"
                >
                  <button
                    class="group flex justify-center items-center text-xl font-bold rounded-[4px] text-white bg-backBtnBg w-full"
                    type="button"
                    id="prevBtn"
                    onclick="back()"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="w-[20px] h-6 mt-[4px] group-hover:-translate-x-[8px] duration-200 rotate-180"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"
                      ></path>
                    </svg>

                    <span>Back</span>
                  </button>
                </div>
              </div>
            </form>
          </div>

          <section
            class="container xl:w-contanerxl pl-4 pr-4 py-[40px] mx-auto flex justify-center mb-[20px]"
          >
            <div
              class="ads grid grid-cols-2 max-[769px]:grid-cols-1 gap-x-[70px] gap-y-[20px] [&>*]:flex [&>*]:gap-1 [&>*]:items-center [&>*]:text-[24px] max-[1024px]:[&>*]:text-[22px] max-[769px]:[&>*]:text-[20px] max-[360px]:[&>*]:text-[19px]"
            >
              <div
                class="max-[480px]:flex max-[480px]:justify-center max-[480px]:border-b-[2px] max-[480px]:border-[#62b165] max-[480px]:pb-[4px]"
              >
                <span
                  class="flex justify-center items-center pt-1 text-[#257628] max-[480px]:hidden"
                  ><ion-icon name="checkmark-circle"></ion-icon
                ></span>
                <p
                  class="text-[#2d2e2d] max-[480px]:text-[#0b6a0f] max-[480px]:font-bold"
                >
                  Next day installation
                </p>
              </div>
              <div
                class="max-[480px]:flex max-[480px]:justify-center max-[480px]:border-b-[2px] max-[480px]:border-[#62b165] max-[480px]:pb-[4px]"
              >
                <span
                  class="flex justify-center items-center pt-1 text-[#257628] max-[480px]:hidden"
                  ><ion-icon name="checkmark-circle"></ion-icon
                ></span>
                <p
                  class="text-[#2d2e2d] max-[480px]:text-[#0b6a0f] max-[480px]:font-bold"
                >
                  Quotes from local engineers
                </p>
              </div>
              <div
                class="max-[480px]:flex max-[480px]:justify-center max-[480px]:border-b-[2px] max-[480px]:border-[#62b165] max-[480px]:pb-[4px]"
              >
                <span
                  class="flex justify-center items-center pt-1 text-[#257628] max-[480px]:hidden"
                  ><ion-icon name="checkmark-circle"></ion-icon
                ></span>
                <p
                  class="text-[#2d2e2d] max-[480px]:text-[#0b6a0f] max-[480px]:font-bold"
                >
                  1.9 million quotes in 10 years
                </p>
              </div>
              <div
                class="max-[480px]:flex max-[480px]:justify-center max-[480px]:border-b-[2px] max-[480px]:border-[#62b165] max-[480px]:pb-[4px]"
              >
                <span
                  class="flex justify-center items-center pt-1 text-[#257628] max-[480px]:hidden"
                  ><ion-icon name="checkmark-circle"></ion-icon
                ></span>
                <p
                  class="text-[#2d2e2d] max-[480px]:text-[#0b6a0f] max-[480px]:font-bold"
                >
                  Save up to £500 on installation
                </p>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>

    <footer class="py-[80px] px-[40px] bg-secondaryColor relative">
      <section class="triangle min-[480px]:hidden"></section>
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
    <script src="/Baths/dist/img/script.js"></script>
  </body>
</html>
