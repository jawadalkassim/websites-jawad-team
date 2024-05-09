<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Home Improvement</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link href="/Home_Page/dist/output.css" rel="stylesheet" />
    <style>
      a {
        font-weight: 400;
      }
      .toCenter {
        justify-content: center;
        display: flex;
      }
      .card {
        display: flex !important;
        justify-content: center !important;
      }

      .panel {
        padding: 0 18px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
        background: rgb(141, 209, 246);
      }
      .most-popular {
        padding: 20px 80px 80px 80px;
        background-color: transparent;
        border-radius: 23px;
      }

      .most-popular .item {
        background-color: #ffffff;
        padding: 30px 15px;
        width: 100%;
        height: 460px;
        border-radius: 23px;
        margin-bottom: 30px;
      }

      .most-popular .item .item {
        padding: 0px;
        border-radius: 0px;
        background-color: transparent;
        margin-bottom: 0px;
      }

      .most-popular .item img {
        border-radius: 23px;
      }
      .most-popular .item2 img {
        border-radius: 23px;
      }

      .most-popular .item h4 {
        font-size: 15px;
        margin-top: 20px;
        margin-bottom: 0px;
        display: inline-block;
      }
      .most-popular .item2 h4 {
        font-size: 15px;
        margin-top: 20px;
        margin-bottom: 0px;
        display: inline-block;
      }

      .most-popular .item span {
        color: #666;
        display: block;
        margin-top: 7px;
        font-weight: 400;
      }

      .most-popular .item ul {
        float: right;
        margin-top: 20px;
      }

      .most-popular .item ul li {
        text-align: right;
        color: #fff;
        font-size: 14px;
      }

      .most-popular .item ul li:first-child i {
        color: yellow;
      }

      .most-popular .item ul li:last-child i {
        color: #ec6090;
      }

      .most-popular .main-button {
        text-align: center;
        margin-bottom: -53px;
      }

      .accordeon-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 55px 0;
      }

      @media (max-width: 480px) {
        .accordeon-container {
          padding: 30px 0 55px 0;
        }
      }

      .accordeon-itm {
        width: 65%;
        color: white;
        border-radius: 5px;
        box-shadow: 0px 1px 2px #ffffff;
        overflow: hidden;
        margin: 29px;
        text-align: left;
        background: #48ac50;
      }
      @media (max-width: 1200px) {
        .accordeon-itm {
          width: 70%;
        }
      }
      @media (max-width: 992px) {
        .accordeon-itm {
          width: 90%;
        }
      }
      @media (max-width: 480px) {
        .accordeon-itm {
          width: 95%;
        }
      }
      .accordeon-itm-header {
        position: relative;
        display: flex;
        align-items: center;
        cursor: pointer;
        height: 75px;
        font-weight: bold;
        font-size: 18px;
        padding: 17px 20px;
        padding-right: 31px;
        background: linear-gradient(46deg, #4caf50, rgba(232, 95, 60, 0));
        background-color: #0d8155;
      }

      @media (max-width: 640px) {
        .accordeon-itm-header {
          height: 100px;
        }
      }

      .accordeon-itm-header::after {
        content: "\002B";
        position: absolute;
        font-size: 25px;
        right: 10px;
      }
      .accordeon-itm-header.active::after {
        content: "\2212";
      }
      .accordeon-itm-content {
        max-height: 0;
        overflow: hidden;
        transition: 0.2s ease-out;
      }
      .accordeon-itm-content-inner {
        padding: 20px;
        border-top: 3px solid;
        /* border-image: linear-gradient(to left, #6ab06d, #fff, #22eaff) 1; */
        border-image: linear-gradient(to left, #9e9e9e, #fff, #cddc39) 1;
      }
    </style>
  </head>

  <body class="font-bodyFont">
    <nav class="text-center bg-white xl:w-contanerxl py-[4px] ml-auto mr-auto">
      <div class="flex justify-between items-center max-[480px]:px-[16px]">
        <div
          class="w-2/4 max-[480px]:w-[30%] flex justify-center max-[480px]:justify-start items-center p-2"
        >
          <div class="w-[52px]">
            <img
              src="/Home_Page/dist/img/logo4.svg"
              class="w-full"
              alt="brand"
            />
          </div>
        </div>
        <a
          href=""
          class="pt-3 max w-2/4 max-[480px]:w-[70%] max-[480px]:text-end text-[#275329] decoration-primaryColor font-bold text-xl block pb-3"
          >Get Free Quotes</a
        >
      </div>
    </nav>
    <div class="w-full shadow list-bar" style="background: #379c3bcc">
      <div
        class="grid grid-cols-3 p-3 justify-center xl:w-contanerxl ml-auto mr-auto"
      >
        <div
          class="text-center text-white font-bold flex justify-center items-center"
        >
          <span class="pr-2 icon w-8 flex justify-center items-center"
            ><img src="/Home_Page/dist/img/chat.png" style="display: inline"
          /></span>
          <h1 class="flex justify-center items-center">
            Get the best quotes, fast!
          </h1>
        </div>
        <div
          class="text-center text-white font-bold flex justify-center items-center"
        >
          <span class="pr-2 icon w-8 flex justify-center items-center"
            ><img
              src="/Home_Page/dist/img/location.png"
              style="display: inline"
            />
          </span>
          <h1 class="flex justify-center items-center">
            Over 5,000 engineers across the UK
          </h1>
        </div>
        <div
          class="text-center text-white font-bold flex justify-center items-center"
        >
          <span class="pr-2 icon w-8 flex justify-center items-center"
            ><img src="/Home_Page/dist/img/check.png" style="display: inline"
          /></span>
          <h1 class="flex justify-center items-center">
            Gas Safe registered engineers
          </h1>
        </div>
      </div>
    </div>
    <div>
      <div
        class="w-full grid grid-cols-3 p-3 justify-center shadow list-bar-mobile"
        style="background: #379c3bcc"
      >
        <div
          class="text-center text-white font-bold flex justify-center items-center gap-2"
        >
          <span class="icon w-[24px] flex justify-center items-center"
            ><img src="/Home_Page/dist/img/chat.png" style="display: inline"
          /></span>
          <h1 class="flex justify-start items-center">
            Get the best quotes, fast!
          </h1>
        </div>
        <div
          class="text-center text-white font-bold flex justify-center items-center gap-2"
        >
          <span class="icon w-[24px] flex justify-center items-center"
            ><img
              src="/Home_Page/dist/img/location.png"
              style="display: inline"
            />
          </span>
          <h1 class="flex justify-start items-center">
            Over 5,000 engineers across the US
          </h1>
        </div>
        <div
          class="text-center text-white font-bold flex justify-center items-center gap-2"
          style="padding-bottom: 0px"
        >
          <span class="icon w-[24px] flex justify-center items-center"
            ><img src="/Home_Page/dist/img/check.png" style="display: inline"
          /></span>
          <h1 class="flex justify-start items-center">
            Gas Safe registered engineers
          </h1>
        </div>
      </div>
    </div>

    <div style="background: #fff; padding-top: 20px">
      <div
        class="header container xl:w-contanerxl pl-4 pr-4 flex flex-col justify-center items-center text-center"
      >
        <div class="header-text w-full">
          <h3
            class="text-[55px] max-[769px]:text-[36px] max-[360px]:text-[25px] max-[480px]:text-[27px] font-bold text-secondaryColor py-8 px-3 max-[480px]:py-4 w-full"
          >
            Home Improvement
          </h3>
        </div>
      </div>

      <div class="pb-[30px] pt-[18px]">
        <form class="mx-0">
          <div class="flex justify-center">
            <input
              onkeyup="search()"
              id="searchbar"
              type="search"
              id="default-search"
              class="block w-1/4 p-3 ps-10 text-sm border-2 border-[#0d8155] rounded-lg focus-visible:outline-none focus:shadow-searchInpShadow focus:border-[#4CAF50] bg-white dark:border-gray-600 dark:placeholder-gray-400 text-black lg:w-96"
              placeholder="Search Mockups, Logos..."
              required
            />
          </div>
        </form>
      </div>
      <div class="flex justify-center pt-1">
        <div
          class="grid lg:grid-cols-4 text-secondaryColor font-bold"
          id="c_search"
        >
          <div class="col-span-1"></div>
        </div>
      </div>
      <div class="flex justify-center" id="c1">
        <div class="grid lg:grid-cols-4">
          <div
            class="col-span-1 lg:col-start-1 toCenter hover:scale-105 duration-200"
          >
            <div
              class="col-span-1 card adaptive bg-[#2da09d29] lg:h-50 lg:p-3 m-3"
            >
              <a href="google.com">
                <div>
                  <div class="flex justify-center pt-3">
                    <img
                      class="w-1/3 sm:px-0 py-0 photo"
                      src="/Home_Page/dist/img/appliance.svg"
                      alt="Appliance"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">Appliance</h1>
                </div>
              </a>
            </div>
          </div>

          <div
            class="col-span-1 lg:col-start-2 toCenter hover:scale-105 duration-200"
          >
            <div
              class="col-span-1 card adaptive bg-[#2da09d29] lg:h-50 lg:p-3 m-3"
            >
              <a href="google.com">
                <div>
                  <div class="flex justify-center pt-3">
                    <img
                      class="w-1/3 sm:px-0 py-0 photo"
                      src="/Home_Page/dist/img/house-side.svg"
                      alt="Siding"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">Siding</h1>
                </div>
              </a>
            </div>
          </div>

          <div
            class="col-span-1 lg:col-start-3 toCenter hover:scale-105 duration-200"
          >
            <div
              class="col-span-1 card adaptive bg-[#2da09d29] lg:h-50 lg:p-3 m-3"
            >
              <a href="google.com">
                <div>
                  <div class="flex justify-center pt-3">
                    <img
                      class="w-1/3 sm:px-0 py-0 photo"
                      src="/Home_Page/dist/img/plumber.svg"
                      alt="Plumbing"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">Plumbing</h1>
                </div>
              </a>
            </div>
          </div>

          <div
            class="col-span-1 lg:col-start-4 toCenter hover:scale-105 duration-200"
          >
            <div class="card adaptive bg-[#2da09d29] lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="pt-3 flex justify-center">
                    <img
                      class="w-1/3 sm:px-0 photo"
                      src="/Home_Page/dist/img/carpenter2.svg"
                      alt="Carpenters"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">Carpenters</h1>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="flex justify-center" id="c2">
        <div class="grid lg:grid-cols-4">
          <div
            class="col-span-1 lg:col-start-1 toCenter hover:scale-105 duration-200"
          >
            <div
              class="col-span-1 card adaptive bg-[#2da09d29] lg:h-50 lg:p-3 m-3"
            >
              <a href="google.com">
                <div>
                  <div class="flex justify-center pt-3">
                    <img
                      class="w-1/3 sm:px-0 py-0 photo"
                      src="/Home_Page/dist/img/gutter.svg"
                      alt="Gutter"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">Gutter</h1>
                </div>
              </a>
            </div>
          </div>
          <div
            class="col-span-1 lg:col-start-2 toCenter hover:scale-105 duration-200"
          >
            <div
              class="col-span-1 card adaptive bg-[#2da09d29] lg:h-50 lg:p-3 m-3"
            >
              <a href="google.com">
                <div>
                  <div class="flex justify-center pt-3">
                    <img
                      class="w-1/4 sm:px-0 photo"
                      src="/Home_Page/dist/img/floor.svg"
                      alt="Flooring"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">Flooring</h1>
                </div>
              </a>
            </div>
          </div>
          <div
            class="col-span-1 lg:col-start-3 toCenter hover:scale-105 duration-200"
          >
            <div
              class="col-span-1 card adaptive bg-[#2da09d29] lg:h-50 lg:p-3 m-3"
            >
              <a href="google.com">
                <div>
                  <div class="flex justify-center pt-3">
                    <img
                      class="w-1/3 sm:px-3 photo"
                      src="/Home_Page/dist/img/hvac.svg"
                      alt="HVAC Pros"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">HVAC Pros</h1>
                </div>
              </a>
            </div>
          </div>
          <div
            class="col-span-1 lg:col-start-4 toCenter hover:scale-105 duration-200"
          >
            <div
              class="col-span-1 card adaptive bg-[#2da09d29] lg:h-50 lg:p-3 m-3"
            >
              <a href="google.com">
                <div>
                  <div class="flex justify-center pt-3">
                    <img
                      class="w-1/3 px-[4px] photo"
                      src="/Home_Page/dist/img/roofing.svg"
                      alt="Roofing"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">Roofing</h1>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="flex justify-center pt-6">
        <button
          id="bu"
          class="bg-secondaryColor hover:bg-primaryColor max-[769px]:mt-3 text-white rounded-md bg-showMore px-[45px] py-[13px] w-fit font-bold"
        >
          Show more
        </button>
      </div>

      <div class="flex justify-center flex-col items-center" id="more">
        <div class="grid lg:grid-cols-4">
          <div
            class="col-span-1 lg:col-start-1 toCenter hover:scale-105 duration-200"
          >
            <div class="card adaptive bg-[#2da09d29] lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center pt-3">
                    <img
                      class="w-1/3 sm:px-2 photo"
                      src="/Home_Page/dist/img/bath.svg"
                      alt="Bath"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">Bath</h1>
                </div>
              </a>
            </div>
          </div>
          <div
            class="col-span-1 lg:col-start-2 toCenter hover:scale-105 duration-200"
          >
            <div
              class="col-span-1 card adaptive bg-[#2da09d29] lg:h-50 lg:p-3 m-3"
            >
              <a href="google.com">
                <div>
                  <div class="flex justify-center pt-3">
                    <img
                      class="w-1/3 sm:px-3 photo"
                      src="/Home_Page/dist/img/painter.svg"
                      alt="painters"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">painters</h1>
                </div>
              </a>
            </div>
          </div>
          <div
            class="col-span-1 lg:col-start-3 toCenter hover:scale-105 duration-200"
          >
            <div class="card adaptive bg-[#2da09d29] lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center pt-3">
                    <img
                      class="w-1/3 sm:px-0 photo"
                      src="/Home_Page/dist/img/electrical.svg"
                      alt="Electricians"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">Electricians</h1>
                </div>
              </a>
            </div>
          </div>
          <div
            class="col-span-1 lg:col-start-4 toCenter hover:scale-105 duration-200"
          >
            <div class="card adaptive bg-[#2da09d29] lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center pt-3">
                    <img
                      class="w-1/3 sm:px-0 photo"
                      src="/Home_Page/dist/img/cleaning.svg"
                      alt="Cleaning"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">Cleaning</h1>
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-- // -->
        <div class="grid lg:grid-cols-4">
          <div
            class="col-span-1 lg:col-start-1 toCenter hover:scale-105 duration-200"
          >
            <div class="card adaptive bg-[#2da09d29] lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center pt-3">
                    <img
                      class="w-1/3 sm:px-0 photo"
                      src="/Home_Page/dist/img/Concrete-Contractors.svg"
                      alt="Concrete Contractors"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">
                    Concrete Contractors
                  </h1>
                </div>
              </a>
            </div>
          </div>
          <div
            class="col-span-1 lg:col-start-2 toCenter hover:scale-105 duration-200"
          >
            <div class="card adaptive bg-[#2da09d29] lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center pt-3">
                    <img
                      class="w-1/3 sm:px-0 photo"
                      src="/Home_Page/dist/img/fence.svg"
                      alt="Fence Pros"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">Fence Pros</h1>
                </div>
              </a>
            </div>
          </div>
          <div
            class="col-span-1 lg:col-start-3 toCenter hover:scale-105 duration-200"
          >
            <div class="card adaptive bg-[#2da09d29] lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center pt-3">
                    <img
                      class="w-1/3 sm:px-0 photo"
                      src="/Home_Page/dist/img/car-garage.svg"
                      alt="Garage Door Pros"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">Garage Door Pros</h1>
                </div>
              </a>
            </div>
          </div>
          <div
            class="col-span-1 lg:col-start-4 toCenter hover:scale-105 duration-200"
          >
            <div class="card adaptive bg-[#2da09d29] lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center pt-3">
                    <img
                      class="w-1/3 sm:px-0 photo"
                      src="/Home_Page/dist/img/handyman.svg"
                      alt="Handyman Services"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">Handyman Services</h1>
                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="grid lg:grid-cols-4">
          <div
            class="col-span-1 lg:col-start-1 toCenter hover:scale-105 duration-200"
          >
            <div class="card adaptive bg-[#2da09d29] lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center pt-3">
                    <img
                      class="w-1/3 sm:px-0 photo"
                      src="/Home_Page/dist/img/home-security.svg"
                      alt="Home Security"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">Home Security</h1>
                </div>
              </a>
            </div>
          </div>
          <div
            class="col-span-1 lg:col-start-2 toCenter hover:scale-105 duration-200"
          >
            <div class="card adaptive bg-[#2da09d29] lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center pt-3">
                    <img
                      class="w-1/3 sm:px-0 photo"
                      src="/Home_Page/dist/img/Landscapers.svg"
                      alt="Landscapers"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">Landscapers</h1>
                </div>
              </a>
            </div>
          </div>
          <div
            class="col-span-1 lg:col-start-3 toCenter hover:scale-105 duration-200"
          >
            <div class="card adaptive bg-[#2da09d29] lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center pt-3">
                    <img
                      class="w-1/3 sm:px-0 photo"
                      src="/Home_Page/dist/img/Pest-Control.svg"
                      alt="Pest Control"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">Pest Control</h1>
                </div>
              </a>
            </div>
          </div>
          <div
            class="col-span-1 lg:col-start-4 toCenter hover:scale-105 duration-200"
          >
            <div class="card adaptive bg-[#2da09d29] lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center pt-3">
                    <img
                      class="w-1/3 sm:px-0 photo"
                      src="/Home_Page/dist/img/Remodeling_Contractors.svg"
                      alt="Remodeling Contractors"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">
                    Remodeling Contractors
                  </h1>
                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="grid lg:grid-cols-4">
          <div
            class="col-span-1 lg:col-start-1 toCenter hover:scale-105 duration-200"
          >
            <div class="card adaptive bg-[#2da09d29] lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center pt-3">
                    <img
                      class="w-1/3 sm:px-0 photo"
                      src="/Home_Page/dist/img/Restoration-Contractors.svg"
                      alt=" Restoration Contractors"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">
                    Restoration Contractors
                  </h1>
                </div>
              </a>
            </div>
          </div>
          <div
            class="col-span-1 lg:col-start-2 toCenter hover:scale-105 duration-200"
          >
            <div class="card adaptive bg-[#2da09d29] lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center pt-3">
                    <img
                      class="w-1/3 sm:px-0 photo"
                      src="/Home_Page/dist/img/Solar.svg"
                      alt="Solar"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">Solar</h1>
                </div>
              </a>
            </div>
          </div>
          <div
            class="col-span-1 lg:col-start-3 toCenter hover:scale-105 duration-200"
          >
            <div class="card adaptive bg-[#2da09d29] lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center pt-3">
                    <img
                      class="w-1/3 sm:px-0 photo"
                      src="/Home_Page/dist/img/Tile_Contractors.svg"
                      alt="Tile Contractors"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">Tile Contractors</h1>
                </div>
              </a>
            </div>
          </div>
          <div
            class="col-span-1 lg:col-start-4 toCenter hover:scale-105 duration-200"
          >
            <div class="card adaptive bg-[#2da09d29] lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center pt-3">
                    <img
                      class="w-1/3 sm:px-0 photo"
                      src="/Home_Page/dist/img/Window-Pros.svg"
                      alt="Window Pros"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">Window Pros</h1>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <section class="How instant bg-[#2da09d29] mt-24">
        <div
          class="header container xl:w-contanerxl pl-4 pr-4 flex flex-col justify-center items-center py-8 text-center"
        >
          <div class="header-text w-full">
            <h3
              class="text-[55px] max-[360px]:text-[25px] max-[480px]:text-[26px] font-bold text-secondaryColor py-8 px-3 max-[480px]:py-4 w-full"
            >
              How instant renovate deals Helps You Find Trusted Local Services
            </h3>
          </div>
          <div class="header-para w-4/5 text-center max-[769px]:w-11/12">
            <p
              class="text-gray-600 text-[19px] max-[480px]:text-[16px] leading-8 max-[769px]:leading-6"
            >
              Our job is to find you the professional you need that will save
              you time & money in the long run. And the best part, our services
              are 100% free! Whether you are working on a bathroom remodeling
              project or need a new auto insurance quote, our team of experts
              will connect you with a local professional ready to get started
              today.
            </p>
          </div>
        </div>

        <div
          class="Choose_the_type container xl:w-contanerxl pl-4 pr-4 py-28 max-[480px]:pt-8 max-[480px]:pb-12"
        >
          <div
            class="container-inner [&>*]:flex [&>*]:items-center [&>*]:gap-x-6 [&>*]:justify-center [&>*]:max-[1200px]:gap-x-14 [&>*]:max-[769px]:flex-col-reverse [&>*]:max-[769px]:text-center [&>*]:max-[769px]:gap-y-6"
          >
            <div class="sec1">
              <div
                class="content w-[42%] max-[1200px]:w-[60%] max-[769px]:w-[90%]"
              >
                <p
                  class="header flex justify-start items-start gap-2 pb-3 leading-[1.4] text-gray-600 text-[25px] max-[769px]:block max-[769px]:font-semibold"
                >
                  <span
                    class="flex justify-center items-center text-[22px] mt-3 text-threedColor shadow-spanNum bg-secondaryColor p-[18px] rounded-full w-10 h-10 max-[769px]:hidden max-[769px]:p-[6px] max-[769px]:w-9 max-[769px]:h-9 max-[769px]:text-[17px]"
                    >1</span
                  >
                  Choose the type of service you need
                </p>
                <p class="header-content text-[19px] text-gray-600">
                  Choose the type of professional service you need and the date
                  you need it done by, and we will connect you with the right
                  professional suited for your specific job.
                </p>
              </div>
              <div class="imge w-1/5 flex justify-center max-[769px]:w-full">
                <div
                  class="w-36 rounded-full shadow-imgeShadow max-[769px]:max-w-36 max-[769px]:max-h-36"
                >
                  <img
                    src="/Home_Page/dist/img/services2.png"
                    alt="services"
                    class="w-full"
                  />
                </div>
              </div>
            </div>
            <div class="sec2 min-[769px]:flex-row-reverse pt-24">
              <div
                class="content w-[42%] max-[1200px]:w-[60%] max-[769px]:w-[90%]"
              >
                <p
                  class="header flex justify-start items-start gap-2 pb-3 leading-[1.4] text-gray-600 text-[25px] max-[769px]:block max-[769px]:font-semibold"
                >
                  <span
                    class="flex justify-center items-center text-[22px] mt-3 text-threedColor shadow-spanNum bg-secondaryColor p-[18px] rounded-full w-10 h-10 max-[769px]:hidden max-[769px]:p-[6px] max-[769px]:w-9 max-[769px]:h-9 max-[769px]:text-[17px]"
                    >2</span
                  >
                  Let instant renovate deals find a local pro near you
                </p>
                <p class="header-content text-[19px] text-gray-600">
                  We’ll do the legwork so you don’t have to! Our team will reach
                  out to professionals in your area who are a good match and are
                  well-equipped for the job at hand.
                </p>
              </div>
              <div class="imge w-1/5 flex justify-center max-[769px]:w-full">
                <div
                  class="w-36 rounded-full shadow-imgeShadowMiddle max-[769px]:max-w-36 max-[769px]:max-h-36"
                >
                  <img
                    src="/Home_Page/dist/img/search-location3.png"
                    alt="search"
                    class="w-full"
                  />
                </div>
              </div>
            </div>
            <div class="sec3 pt-24">
              <div
                class="content w-[42%] max-[1200px]:w-[60%] max-[769px]:w-[90%]"
              >
                <p
                  class="header flex justify-start items-center gap-2 pb-3 leading-[1.4] text-gray-600 text-[25px] max-[769px]:block max-[769px]:font-semibold"
                >
                  <span
                    class="flex justify-center items-center text-[22px] text-threedColor shadow-spanNum bg-secondaryColor p-[18px] rounded-full w-10 h-10 max-[769px]:hidden max-[769px]:p-[6px] max-[769px]:w-9 max-[769px]:h-9 max-[769px]:text-[17px]"
                    >3</span
                  >
                  Hire a trusted professional
                </p>
                <p class="header-content text-[19px] text-gray-600">
                  Our team will connect you with a number of local professionals
                  so you can compare and hire the one that best suits your
                  needs. No obligations and Risk-Free.
                </p>
              </div>
              <div class="imge w-1/5 flex justify-center max-[769px]:w-full">
                <div
                  class="w-36 rounded-full shadow-imgeShadow max-[769px]:max-w-36 max-[769px]:max-h-36"
                >
                  <img
                    src="/Home_Page/dist/img/trust.png"
                    alt="trust"
                    class="w-full rounded-full"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="Hire_Pros mt-12">
        <div
          class="header container xl:w-contanerxl pl-4 pr-4 flex flex-col justify-center items-center py-8 text-center"
        >
          <div class="header-text w-full">
            <h3
              class="text-[55px] max-[360px]:text-[25px] max-[480px]:text-[30px] font-bold text-secondaryColor py-8 px-3 max-[480px]:py-4 w-full"
            >
              Hire Pros the Easy Way with instant renovate deals
            </h3>
          </div>
        </div>
        <div
          class="Hire_Pros_type container xl:w-contanerxl pl-4 pr-4 py-14 max-[480px]:pt-10"
        >
          <div
            class="container-inner grid grid-cols-3 max-[1200px]:grid-cols-2 max-[769px]:grid-cols-1 max-[769px]:w-[95%] max-[769px]:mx-auto gap-x-12 max-[1200px]:gap-y-12"
          >
            <div
              class="card-house-one rounded-[37px] overflow-hidden bg-[#6ab06d] shadow-cardImgeShadow"
            >
              <div class="card-img">
                <div
                  class="group cursor-pointer relative border-b-[4px] border-[#fff] overflow-hidden"
                >
                  <img
                    style="width: 100%; height: 230px"
                    src="/Home_Page/dist/img/home-img-4.jpg"
                    alt="home-img"
                    class="rounded-tl-[32px] rounded-tr-[32px] group-hover:rotate-3 group-hover:scale-110 duration-300"
                  />
                  <div
                    class="absolute w-full h-full top-0 left-0 bg-[#6ab06d5c]"
                  ></div>
                </div>
              </div>
              <div
                class="card-content px-4 py-3 text-[15px] text-center text-threedColor"
              >
                <p>
                  We take the guesswork out of calculating moving costs by
                  asking you a series of questions on our “Moving” page.
                  Consider, for instance, the travel distance and type of home
                  you currently live in (i.e. apartment versus a one-story
                  house).
                </p>
              </div>
            </div>

            <div
              class="card-house-one rounded-[37px] overflow-hidden bg-[#6ab06d] shadow-cardImgeShadow"
            >
              <div class="card-img">
                <div
                  class="group cursor-pointer relative border-b-[4px] border-[#fff] overflow-hidden"
                >
                  <img
                    style="width: 100%; height: 230px"
                    src="/Home_Page/dist/img/home-img-6.jpg"
                    alt=""
                    class="rounded-tl-[32px] rounded-tr-[32px] group-hover:rotate-3 group-hover:scale-110 duration-300"
                  />
                  <div
                    class="absolute w-full h-full top-0 left-0 bg-[#6ab06d5c]"
                  ></div>
                </div>
              </div>
              <div
                class="card-content px-4 py-3 text-[15px] text-center text-threedColor"
              >
                <p>
                  Taking each room and square footage into consideration, we
                  select the most skilled home improvement contractors for your
                  specific space that needs remodeling. Areas include the
                  bathroom, living room, kitchen, home office, and back-patio
                  (click on the button above for a full-listing).
                </p>
              </div>
            </div>
            <div
              class="card-house-one rounded-[37px] overflow-hidden bg-[#6ab06d] shadow-cardImgeShadow"
            >
              <div class="card-img">
                <div
                  class="group cursor-pointer relative border-b-[4px] border-[#fff] overflow-hidden"
                >
                  <img
                    style="width: 100%; height: 230px"
                    src="/Home_Page/dist/img/home-img-7.jpg"
                    alt="home-img"
                    class="rounded-tl-[32px] rounded-tr-[32px] group-hover:rotate-3 group-hover:scale-110 duration-300"
                  />
                  <div
                    class="absolute w-full h-full top-0 left-0 bg-[#6ab06d5c]"
                  ></div>
                </div>
              </div>
              <div
                class="card-content px-4 py-3 text-[15px] text-center text-threedColor"
              >
                <p>
                  We know that every home does not use the same materials and
                  resources, and that’s why we make sure to do our research and
                  find you ideal home improvement contractors for your specific
                  roofing needs.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="accordeonele mt-12 bg-[#2da09d29]">
        <div
          class="header container xl:w-contanerxl pl-4 pr-4 flex flex-col justify-center items-center py-8 text-center"
        >
          <div class="header-text w-full">
            <h3
              class="text-[55px] max-[360px]:text-[25px] max-[480px]:text-[26px] max-[480px]:px-1 font-bold text-secondaryColor py-8 px-3 max-[480px]:py-4 w-full"
            >
              How instant renovate deals Helps You Find Trusted Local Services
            </h3>
          </div>

          <div class="accordeon-container">
            <div class="accordeon-itm">
              <div class="accordeon-itm-header">
                Choose the type of service you need
              </div>
              <div class="accordeon-itm-content">
                <p class="accordeon-itm-content-inner">
                  Choose the type of professional service you need and the date
                  you need it done by, and we will connect you with the right
                  professional suited for your specific job.
                </p>
              </div>
            </div>
            <div class="accordeon-itm">
              <div class="accordeon-itm-header">
                Let instant renovate deals find a local pro near you
              </div>
              <div class="accordeon-itm-content">
                <p class="accordeon-itm-content-inner">
                  We’ll do the legwork so you don’t have to! Our team will reach
                  out to professionals in your area who are a good match and are
                  well-equipped for the job at hand.
                </p>
              </div>
            </div>
            <div class="accordeon-itm">
              <div class="accordeon-itm-header">
                Hire a trusted professional
              </div>
              <div class="accordeon-itm-content">
                <p class="accordeon-itm-content-inner">
                  Our team will connect you with a number of local professionals
                  so you can compare and hire the one that best suits your
                  needs. No obligations and Risk-Free.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <script src="/Home_Page/dist/script.js"></script>
  </body>
</html>
