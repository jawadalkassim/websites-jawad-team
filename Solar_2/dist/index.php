<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Solar</title>
    <link href="/Solar_2/dist/output.css" rel="stylesheet" />
  </head>

  <body class="font-bodyFont">
    <nav class="text-center" style="background: white">
      <div class="grid lg:grid-cols-2 md:grid-cols-1 items-center">
        <div class="flex justify-center items-center p-2">
          <img src="/Solar_2/dist/img/logo.png" class="w-1/12 brand" />
        </div>
        <a
          href=""
          class="nav-link pt-3 text-primaryColor decoration-primaryColor font-bold text-xl block lg:text-end sm:text-center md:text-center lg:mx-40 md:mx-0 sm:mx-0 pb-3 lg:w-1/2 sm:w-full"
          >Get Free Quotes</a
        >
      </div>
    </nav>
    <div
      class="w-full grid grid-cols-3 p-3 justify-center shadow list-bar"
      style="background: #6ab06d"
    >
      <div
        class="text-center text-white font-bold flex justify-center items-center"
      >
        <span class="pr-2 icon w-8 flex justify-center items-center"
          ><img src="/Solar_2/dist/img/chat.png" style="display: inline"
        /></span>
        <h1 class="flex justify-center items-center">
          Get the best quotes, fast!
        </h1>
      </div>
      <div
        class="text-center text-white font-bold flex justify-center items-center"
      >
        <span class="pr-2 icon w-8 flex justify-center items-center"
          ><img src="/Solar_2/dist/img/location.png" style="display: inline" />
        </span>
        <h1 class="flex justify-center items-center">
          Over 5,000 engineers across the UK
        </h1>
      </div>
      <div
        class="text-center text-white font-bold flex justify-center items-center"
      >
        <span class="pr-2 icon w-8 flex justify-center items-center"
          ><img src="/Solar_2/dist/img/check.png" style="display: inline"
        /></span>
        <h1 class="flex justify-center items-center">
          Gas Safe registered engineers
        </h1>
      </div>
    </div>
    <div>
      <div
        class="w-full grid grid-cols-3 p-3 justify-center shadow list-bar-mobile"
        style="background: #6ab06d"
      >
        <div
          class="text-center text-white font-bold flex justify-center items-center gap-2"
        >
          <span class="icon w-8 flex justify-center items-center"
            ><img src="/Solar_2/dist/img/chat.png" style="display: inline"
          /></span>
          <h1 class="flex justify-start items-center">
            Get the best quotes, fast!
          </h1>
        </div>
        <div
          class="text-center text-white font-bold flex justify-center items-center gap-2"
        >
          <span class="icon w-8 flex justify-center items-center"
            ><img src="/Solar_2/dist/img/location.png" style="display: inline" />
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
            ><img src="/Solar_2/dist/img/check.png" style="display: inline"
          /></span>
          <h1 class="flex justify-start items-center">
            Gas Safe registered engineers
          </h1>
        </div>
      </div>
      <div style="padding-bottom: 400px; 
      background-color:#038b570f">
      <div
        class="grid lg:grid-cols-12 md:grid-cols-1 sm:grid-cols-1 justify-center items-center lg:pb-44"
        id="grid"
      >
        <div
          class="lg:text-start sm:text-center pt-2 lg:col-span-5 mobile-d"
          style="height: -webkit-fill-available"
        >
          <div class="rate">
            <div class="description flex justify-center">
              <h2
                class="text-5xl text-white font-bold bg-secondaryColor title"
                style="
                  line-height: 1.2;
                  padding: 10px;
                  font-size: 25px;
                  border-radius: 10px;
                "
              >
                Get your solar deal
              </h2>
            </div>
          </div>
        </div>
        <div
          class="lg:pt-10 lg:pt-10 lg:pb-10 flex justify-center lg:col-span-7 sm:col-span-1 border f-form"
          style="border: none"
        >
          <form
            class="bg-white lg:p-10 md:p-0 sm:p-0 lg:w-10/12 rounded shadow-2xl pt-5"
            id="regForm"
            action="/Solar_2/dist/submit-page.php"
          >
            <div class="tab text-white text-3xl font-bodyFont">
              <div class="text- text-3xl font-semibold pt-16 text-center p-5">
                <h1 class="pb-3 text-4xl text-gray-600">
                  What is the location of your project?
                </h1>
              </div>
              <div class="pt-10 flex justify-center">
                <input
                  type="number"
                  pattern="[0-9]*"
                  inputmode="numeric"
                  id="zip"
                  class="text-xl bg-blue-950 bg-opacity-60 placeholder-white text-white rounded-full block lg:w-8/12 md:w-7/12 sm:w-full p-3.5"
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
                  class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-full p-4 lg:w-1/3 md:w-7/12 sm:w-full py-3 mb-2 mt-3 text-center items-center"
                >
                  Next
                </button>
              </div>
            </div>
            <div class="tab text-white text-3xl font-bodyFont">
              <div class="text- text-3xl font-semibold pt-16 text-center p-5">
                <h1 class="pb-3 text-4xl text-gray-600">
                  What type of property do you want a quote for?
                </h1>
              </div>
              <label class="flex justify-center items-center pt-8">
                <input type="radio" class="card-input-element hidden" />
                <button
                  type="button"
                  onclick="radioClick(1)"
                  class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2 text-center items-center"
                >
                  Home
                </button>
              </label>
              <label class="flex justify-center items-center pt-2">
                <input type="radio" class="card-input-element hidden" />
                <button
                  type="button"
                  onclick="radioClick(1)"
                  class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2 text-center items-center"
                >
                  Business
                </button>
              </label>
            </div>
            <div class="tab text-white text-3xl font-bodyFont">
              <div class="text- text-3xl font-semibold pt-16 text-center p-5">
                <h1 class="pb-3 text-4xl text-gray-600">
                  Do you own or rent ?
                </h1>
              </div>
              <label class="flex justify-center items-center pt-8">
                <input type="radio" class="card-input-element hidden" />
                <button
                  type="button"
                  onclick="radioClick(1)"
                  class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2 text-center items-center"
                >
                  I own
                </button>
              </label>
              <label class="flex justify-center items-center pt-2">
                <input type="radio" class="card-input-element hidden" />
                <button
                  type="button"
                  onclick="radioClick(1)"
                  class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2 text-center items-center"
                >
                  I rent
                </button>
              </label>
            </div>
            <div class="tab text-white text-3xl font-bodyFont">
              <div class="text- text-3xl font-semibold pt-16 text-center p-5">
                <h1 class="pb-3 text-4xl text-gray-600">
                  What is your average monthly electric bill?
                </h1>
              </div>
              <label class="flex justify-center items-center pt-8">
                <input type="radio" class="card-input-element hidden" />
                <button
                  type="button"
                  onclick="radioClick(1)"
                  class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2 text-center items-center"
                >
                  Below $150
                </button>
              </label>
              <label class="flex justify-center items-center pt-2">
                <input type="radio" class="card-input-element hidden" />
                <button
                  type="button"
                  onclick="radioClick(1)"
                  class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2 text-center items-center"
                >
                  $150 - $250
                </button>
              </label>
              <label class="flex justify-center items-center pt-2">
                <input type="radio" class="card-input-element hidden" />
                <button
                  type="button"
                  onclick="radioClick(1)"
                  class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2 text-center items-center"
                >
                  $250 - $350
                </button>
              </label>
              <label class="flex justify-center items-center pt-2">
                <input type="radio" class="card-input-element hidden" />
                <button
                  type="button"
                  onclick="radioClick(1)"
                  class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2 text-center items-center"
                >
                  Above $350
                </button>
              </label>
            </div>
            <div class="tab text-white text-3xl font-bodyFont">
              <div class="text- text-3xl font-semibold pt-16 text-center p-5">
                <h1 class="pb-3 text-4xl text-gray-600">
                  Dang! How much shade does your roof get?
                </h1>
              </div>
              <label class="flex justify-center items-center pt-8">
                <input type="radio" class="card-input-element hidden" />
                <button
                  type="button"
                  onclick="radioClick(1)"
                  class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2 text-center items-center"
                >
                  No Shade
                </button>
              </label>
              <label class="flex justify-center items-center pt-2">
                <input type="radio" class="card-input-element hidden" />
                <button
                  type="button"
                  onclick="radioClick(1)"
                  class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2 text-center items-center"
                >
                  Some Shade
                </button>
              </label>
              <label class="flex justify-center items-center pt-2">
                <input type="radio" class="card-input-element hidden" />
                <button
                  type="button"
                  onclick="radioClick(1)"
                  class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2 text-center items-center"
                >
                  A lot of shade
                </button>
              </label>
            </div>
            <div class="tab text-white text-3xl font-bodyFont">
              <div class="text- text-3xl font-semibold pt-16 text-center p-5">
                <h1 class="pb-3 text-4xl text-gray-600">
                  OK, nice. And who is your current electric provider?
                </h1>
              </div>
              <div class="pt-10 flex justify-center">
                <input
                  type="text"
                  class="text-xl bg-blue-950 bg-opacity-60 placeholder-white text-white rounded-full block lg:w-8/12 md:w-7/12 sm:w-full p-3.5"
                  placeholder="Utility Provider"
                  required
                />
              </div>
              <div class="flex justify-center pt-5 items-center text-center">
                <button
                  type="button"
                  onclick="nextPrev(1)"
                  class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-full p-4 lg:w-1/3 md:w-7/12 sm:w-full py-3 mb-2 mt-3 text-center items-center"
                >
                  Next
                </button>
              </div>
            </div>
            <div class="tab text-white text-3xl font-bodyFont">
              <div class="text- text-3xl font-semibold pt-16 text-center p-5">
                <h1 class="pb-3 text-4xl text-gray-600">
                  What is your address?
                </h1>
              </div>
              <div class="pt-10 flex justify-center">
                <input
                  type="text"
                  id="address"
                  class="text-xl bg-blue-950 bg-opacity-60 placeholder-white text-white rounded-full block lg:w-8/12 md:w-7/12 sm:w-full p-3.5"
                  placeholder="e.g. 123 West Main Road"
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
                  class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-full p-4 lg:w-1/3 md:w-7/12 sm:w-full py-3 mb-2 mt-3 text-center items-center"
                >
                  Next
                </button>
              </div>
            </div>
            <div class="tab text-white text-3xl font-bodyFont">
              <div class="text- text-3xl font-semibold pt-16 text-center p-5">
                <h1 class="pb-3 text-4xl text-gray-600">
                  Are you ready to hire? Or just planning and budgeting, for
                  now?
                </h1>
              </div>
              <label class="flex justify-center items-center pt-8">
                <input type="radio" class="card-input-element hidden" />
                <button
                  type="button"
                  onclick="radioClick(1)"
                  class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2 text-center items-center"
                >
                  Ready to hire
                </button>
              </label>
              <label class="flex justify-center items-center pt-2">
                <input type="radio" class="card-input-element hidden" />
                <button
                  type="button"
                  onclick="radioClick(1)"
                  class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2 text-center items-center"
                >
                  Planning And Budgeting
                </button>
              </label>
            </div>
            <div class="tab text-white text-3xl font-bodyFont">
              <div class="text- text-3xl font-semibold pt-16 text-center p-5">
                <h1 class="pb-3 text-4xl text-gray-600">
                  And one last question: when would you like to get your project
                  completed?
                </h1>
              </div>
              <label class="flex justify-center items-center pt-8">
                <input type="radio" class="card-input-element hidden" />
                <button
                  type="button"
                  onclick="radioClick(1)"
                  class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2 text-center items-center"
                >
                  One week
                </button>
              </label>
              <label class="flex justify-center items-center pt-2">
                <input type="radio" class="card-input-element hidden" />
                <button
                  type="button"
                  onclick="radioClick(1)"
                  class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2 text-center items-center"
                >
                  Few weeks
                </button>
              </label>
              <label class="flex justify-center items-center pt-2">
                <input type="radio" class="card-input-element hidden" />
                <button
                  type="button"
                  onclick="radioClick(1)"
                  class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2 text-center items-center"
                >
                  One Month
                </button>
              </label>
              <label class="flex justify-center items-center pt-2">
                <input type="radio" class="card-input-element hidden" />
                <button
                  type="button"
                  onclick="radioClick(1)"
                  class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2 text-center items-center"
                >
                  Few Months
                </button>
              </label>
              <label class="flex justify-center items-center pt-2">
                <input type="radio" class="card-input-element hidden" />
                <button
                  type="button"
                  onclick="radioClick(1)"
                  class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2 text-center items-center"
                >
                  Timing is flexible
                </button>
              </label>
            </div>
            <div class="tab tab tab text-white text-3xl">
              <div class="text- text-4xl font-semibold pt-16 text-center p-5">
                <h1 class="pb-3 text-4xl text-gray-600">What is your email?</h1>
              </div>
              <div class="pt-10 flex justify-center lg:px-0 md:px-5 sm:px-5">
                <input
                  type="tel"
                  id="email"
                  class="text-xl placeholder-white bg-blue-950 bg-opacity-60 text-white rounded-full block lg:w-8/12 md:w-7/12 sm:w-full p-3.5"
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
                  class="bg s text-xl mt-3 gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-full p-4 lg:w-1/3 md:w-7/12 sm:w-full py-3 mb-2 text-center items-center"
                >
                  Next
                </button>
              </div>
            </div>
            <div class="tab text-white text-4xl font-bodyFont">
              <div class="text- text-3xl font-semibold pt-16 text-center p-5">
                <h1 class="pb-3 text-4xl text-gray-600">What is your name?</h1>
              </div>
              <div class="pt-10 flex justify-center">
                <input
                  type="text"
                  id="name"
                  class="text-xl placeholder-white bg-blue-950 bg-opacity-60 text-white rounded-full block lg:w-8/12 md:w-7/12 sm:w-full p-3.5"
                  placeholder="Enter first Name"
                  required
                />
              </div>
              <div class="pt-5 flex justify-center">
                <input
                  id="lname"
                  type="text"
                  class="text-xl placeholder-white bg-blue-950 bg-opacity-60 text-white rounded-full block lg:w-8/12 md:w-7/12 sm:w-full p-3.5"
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
                  class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-full p-4 lg:w-1/3 md:w-7/12 sm:w-full py-3 mb-2 text-center items-center"
                >
                  Next
                </button>
              </div>
            </div>
            <div class="tab tab tab text-white text-3xl">
              <div class="text- text-3xl font-semibold pt-16 text-center p-5">
                <h1 class="pb-3 text-4xl text-gray-600">
                  Wonderful! We are ready to connect you with a contractor
                  Please enter your phone number
                </h1>
              </div>
              <div class="pt-10 flex justify-center lg:px-0 md:px-5 sm:px-5">
                <input
                  type="tel"
                  id="phone"
                  class="text-xl placeholder-white bg-blue-950 bg-opacity-60 text-white rounded-full block lg:w-8/12 md:w-7/12 sm:w-full p-3.5"
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
                  class="mt-3 bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90 rounded-full p-4 lg:w-1/3 md:w-7/12 sm:w-full py-3 mb-2 text-center items-center"
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
              <span class="step"></span>
              <span class="step"></span>
            </div>
            <div style="overflow: auto" class="flex justify-center">
              <div style="float: right">
                <button
                  class="text-xl text-gray-600 font-bold bg-transparent"
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
        <div
          class="lg:text-start sm:text-center lg:pt-10 lg:col-span-5 s2"
          style="height: -webkit-fill-available"
        >
          <div class="rate">
            <div class="description pb-14">
              <h2
                class="text-5xl text-white font-bold bg-secondaryColor title"
                style="line-height: 1.2; padding: 5px"
              >
                Get your solar deal
              </h2>

              <h3 class="text-xl text-[#4c4b4b] font-bold pb-3 pt-1">
                by quickly comparing 3 FREE quotes
              </h3>
              <ul
                class="mt-8 text-[#4c4b4b] text-xl font-semibold"
                style="list-style: circle; list-style-position: inside"
              >
                <li>Next day installation</li>
                <li>Quotes from local engineers</li>
                <li>1.9 million quotes in 10 years</li>
                <li>Save up to £500 on installation</li>
              </ul>
              <div
                class="lg:mt-10 lg:w-9/12 md:w-full sm:w-full flex justify-center py-5 eng-div"
              >
                <div
                  class="lg:w-full md:w-9/12 py-3"
                  style="background: #0d8155; border-radius: 10px"
                >
                  <div class="md:flex justify-center">
                    <h1 class="text-white font-semibold">
                      The smarter way to find approved heating engineers
                    </h1>
                  </div>
                  <h4 class="text-center text-white font-semibold">
                    Excellent 4.8 out of 5
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="/Solar_2/dist/script.js"></script>
  </body>
</html>
