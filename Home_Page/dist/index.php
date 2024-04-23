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

    <link href=" /Home_Page/dist/output.css" rel="stylesheet" />
    <style>
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
      .accordeon-itm {
        width: 65%;
        color: white;
        border-radius: 5px;
        box-shadow: 0px 1px 2px #ffffff;
        overflow: hidden;
        margin: 29px;
        text-align: left;
        background: #079db0;
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
        font-weight: bold;
        font-size: 18px;
        padding: 17px 20px;
        padding-right: 31px;
        background-image: linear-gradient(45deg, #e85f3c, transparent);
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
        border-image: linear-gradient(to left, #cc674b, #0f120fbd, #22eaff) 1;
      }
    </style>
  </head>

  <body class="font-bodyFont">
    <nav class="text-center bg-white">
      <div class="grid lg:grid-cols-2 md:grid-cols-1 items-center">
        <div class="flex justify-center items-center p-2">
          <img
            src="/Home_Page/dist/img/brand.png"
            class="w-1/12 brand"
            alt="brand"
          />
        </div>
        <a
          href=""
          class="pt-3 text-primaryColor decoration-primaryColor font-bold text-xl block lg:text-end sm:text-center md:text-center lg:mx-40 md:mx-0 sm:mx-0 pb-3 lg:w-1/2 sm:w-full"
          >Get Free Quotes</a
        >
      </div>
    </nav>
    <div
      class="w-full grid grid-cols-3 p-3 justify-center shadow"
      style="background: #065c8b"
    >
      <div class="text-center text-white font-bold">
        <span class="pr-2 icon"
          ><svg
            style="display: inline; width: 5%"
            class="w-1/12 vg-inline--fa fa-comments"
            aria-hidden="true"
            focusable="false"
            data-prefix="far"
            data-icon="comments"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 576 512"
            data-fa-i2svg=""
          >
            <path
              fill="currentColor"
              d="M532 386.2c27.5-27.1 44-61.1 44-98.2 0-80-76.5-146.1-176.2-157.9C368.3 72.5 294.3 32 208 32 93.1 32 0 103.6 0 192c0 37 16.5 71 44 98.2-15.3 30.7-37.3 54.5-37.7 54.9-6.3 6.7-8.1 16.5-4.4 25 3.6 8.5 12 14 21.2 14 53.5 0 96.7-20.2 125.2-38.8 9.2 2.1 18.7 3.7 28.4 4.9C208.1 407.6 281.8 448 368 448c20.8 0 40.8-2.4 59.8-6.8C456.3 459.7 499.4 480 553 480c9.2 0 17.5-5.5 21.2-14 3.6-8.5 1.9-18.3-4.4-25-.4-.3-22.5-24.1-37.8-54.8zm-392.8-92.3L122.1 305c-14.1 9.1-28.5 16.3-43.1 21.4 2.7-4.7 5.4-9.7 8-14.8l15.5-31.1L77.7 256C64.2 242.6 48 220.7 48 192c0-60.7 73.3-112 160-112s160 51.3 160 112-73.3 112-160 112c-16.5 0-33-1.9-49-5.6l-19.8-4.5zM498.3 352l-24.7 24.4 15.5 31.1c2.6 5.1 5.3 10.1 8 14.8-14.6-5.1-29-12.3-43.1-21.4l-17.1-11.1-19.9 4.6c-16 3.7-32.5 5.6-49 5.6-54 0-102.2-20.1-131.3-49.7C338 339.5 416 272.9 416 192c0-3.4-.4-6.7-.7-10C479.7 196.5 528 238.8 528 288c0 28.7-16.2 50.6-29.7 64z"
            ></path></svg></span
        >Get the best quotes, fast!
      </div>
      <div class="text-center text-white font-bold">
        <span class="pr-2 icon"
          ><svg
            style="display: inline; width: 5%"
            class="w-1/12 svg-inline--fa fa-map-marker-alt"
            aria-hidden="true"
            focusable="false"
            data-prefix="fas"
            data-icon="map-marker-alt"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 384 512"
            data-fa-i2svg=""
          >
            <path
              fill="currentColor"
              d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"
            ></path></svg></span
        >Over 5,000 engineers across the UK
      </div>
      <div class="text-center text-white font-bold">
        <span class="pr-2 icon"
          ><svg
            style="display: inline; width: 5%"
            class="svg-inline--fa fa-check-square"
            aria-hidden="true"
            focusable="false"
            data-prefix="far"
            data-icon="check-square"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 448 512"
            data-fa-i2svg=""
          >
            <path
              fill="currentColor"
              d="M400 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zm0 400H48V80h352v352zm-35.864-241.724L191.547 361.48c-4.705 4.667-12.303 4.637-16.97-.068l-90.781-91.516c-4.667-4.705-4.637-12.303.069-16.971l22.719-22.536c4.705-4.667 12.303-4.637 16.97.069l59.792 60.277 141.352-140.216c4.705-4.667 12.303-4.637 16.97.068l22.536 22.718c4.667 4.706 4.637 12.304-.068 16.971z"
            ></path></svg></span
        >Gas Safe registered engineers
      </div>
    </div>
    <div
      style="
        background-image: radial-gradient(
          ellipse at center,
          #1e5799 0,
          #013652 63%,
          #002031 100%
        );
        padding-top: 40px;
        padding-bottom: 200px;
      "
    >
      <!-- //start home improvement -->
      <div
        class="header container xl:w-contanerxl pl-4 pr-4 flex flex-col justify-center items-center py-8 text-center"
      >
        <div class="header-text w-full">
          <h3
            class="text-[55px] max-[360px]:text-[25px] max-[480px]:text-[35px] font-bold text-secondaryColor py-8 px-3 max-[480px]:py-4 w-full"
          >
            Home Improvement
          </h3>
        </div>
        <div class="header-para w-4/5 text-center max-[769px]:w-11/12">
          <p
            class="text-white text-[19px] max-[480px]:text-[16px] leading-8 max-[769px]:leading-6"
          >
            If you need to hire a home improvement professional that can replace
            your roof, install new windows or even repair your dishwasher, can
            save you time and money by connecting you to a service provider.
            Just click on the tile below for the professional you need to hire.
          </p>
        </div>
      </div>
      <!-- //end home improvement -->

      <div class="pt-10">
        <form class="mx-0">
          <div class="flex justify-center">
            <input
              onkeyup="search()"
              id="searchbar"
              type="search"
              id="default-search"
              class="block w-1/4 p-3 ps-10 text-sm border border-gray-300 rounded-lg bg-white dark:border-gray-600 dark:placeholder-gray-400 text-black focus:ring-blue-500 focus:border-blue-500 lg:w-96"
              placeholder="Search Mockups, Logos..."
              required
            />
          </div>
        </form>
      </div>
      <div class="flex justify-center pt-1">
        <div
          class="grid lg:grid-cols-12 pt-8 text-secondaryColor mt-4 font-bold"
          id="c_search"
        >
          <div class="col-span-1"></div>
        </div>
      </div>
      <div class="flex justify-center pt-1" id="c1">
        <div class="grid lg:grid-cols-12">
          <div class="col-span-1"></div>

          <div class="col-span-2 toCenter">
            <div class="col-span-1 card adaptive bg-white lg:h-50 lg:p-3 m-3">
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

          <div class="col-span-2 toCenter">
            <div class="col-span-1 card adaptive bg-white lg:h-50 lg:p-3 m-3">
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

          <div class="col-span-2 toCenter">
            <div class="col-span-1 card adaptive bg-white lg:h-50 lg:p-3 m-3">
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

          <div class="col-span-2 toCenter">
            <div class="card adaptive bg-white lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center">
                    <img
                      class="w-1/3 sm:px-0 py-3 photo"
                      src="/Home_Page/dist/img/carpenter2.svg"
                      alt="Carpenters"
                    />
                  </div>
                  <h1 class="card-title text-center">Carpenters</h1>
                </div>
              </a>
            </div>
          </div>

          <div class="col-span-2 toCenter">
            <div class="col-span-1 card adaptive bg-white lg:h-50 lg:p-3 m-3">
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
        </div>
      </div>

      <div class="flex justify-center" id="c2">
        <div class="grid lg:grid-cols-12">
          <div class="col-span-1"></div>
          <div class="col-span-2 toCenter">
            <div class="col-span-1 card adaptive bg-white lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center">
                    <img
                      class="w-1/4 sm:px-0 py-3 photo"
                      src="/Home_Page/dist/img/floor.svg"
                      alt="Flooring"
                    />
                  </div>
                  <h1 class="pt-2 card-title text-center">Flooring</h1>
                </div>
              </a>
            </div>
          </div>

          <div class="col-span-2 toCenter">
            <div class="col-span-1 card adaptive bg-white lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center">
                    <img
                      class="w-1/3 sm:px-3 py-4 photo"
                      src="/Home_Page/dist/img/hvac.svg"
                      alt="HVAC Pros"
                    />
                  </div>
                  <h1 class="card-title text-center">HVAC Pros</h1>
                </div>
              </a>
            </div>
          </div>
          <div class="col-span-2 toCenter">
            <div class="col-span-1 card adaptive bg-white lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center">
                    <img
                      class="w-1/3 py-[18px] px-[4px] photo"
                      src="/Home_Page/dist/img/roofing.svg"
                      alt="Roofing"
                    />
                  </div>
                  <h1 class="card-title text-center">Roofing</h1>
                </div>
              </a>
            </div>
          </div>
          <div class="col-span-2 toCenter">
            <div class="card adaptive bg-white lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center">
                    <img
                      class="w-1/3 sm:px-2 py-3 photo"
                      src="/Home_Page/dist/img/bath.svg"
                      alt="Bath"
                    />
                  </div>
                  <h1 class="pt-2 card-title text-center">Bath</h1>
                </div>
              </a>
            </div>
          </div>
          <div class="col-span-2 toCenter">
            <div class="col-span-1 card adaptive bg-white lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center">
                    <img
                      class="w-1/3 sm:px-3 py-4 photo"
                      src="/Home_Page/dist/img/painter.svg"
                      alt="painters"
                    />
                  </div>
                  <h1 class="card-title text-center">painters</h1>
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
        <div class="grid lg:grid-cols-12">
          <div class="col-span-1"></div>
          <div class="col-span-2 toCenter">
            <div class="card adaptive bg-threedColor lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center">
                    <img
                      class="w-1/3 sm:px-0 py-2 photo"
                      src="/Home_Page/dist/img/electrical.svg"
                      alt="Electricians"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">Electricians</h1>
                </div>
              </a>
            </div>
          </div>
          <div class="col-span-2 toCenter">
            <div class="card adaptive bg-white lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center">
                    <img
                      class="w-1/3 sm:px-0 py-2 photo"
                      src="/Home_Page/dist/img/cleaning.svg"
                      alt="Cleaning"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">Cleaning</h1>
                </div>
              </a>
            </div>
          </div>
          <div class="col-span-2 toCenter">
            <div class="card adaptive bg- lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center">
                    <img
                      class="w-1/3 sm:px-0 py-2 photo"
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
          <div class="col-span-2 toCenter">
            <div class="card adaptive bg-threedColor lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center">
                    <img
                      class="w-1/3 sm:px-0 py-2 photo"
                      src="/Home_Page/dist/img/fence.svg"
                      alt="Fence Pros"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">Fence Pros</h1>
                </div>
              </a>
            </div>
          </div>
          <div class="col-span-2 toCenter">
            <div class="card adaptive bg-threedColor lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center">
                    <img
                      class="w-1/3 sm:px-0 py-2 photo"
                      src="/Home_Page/dist/img/car-garage.svg"
                      alt="Garage Door Pros"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">Garage Door Pros</h1>
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-- // -->
        <div class="grid lg:grid-cols-12">
          <div class="col-span-1"></div>
          <div class="col-span-2 toCenter">
            <div class="card adaptive bg-threedColor lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center">
                    <img
                      class="w-1/3 sm:px-0 py-2 photo"
                      src="/Home_Page/dist/img/handyman.svg"
                      alt="Handyman Services"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">Handyman Services</h1>
                </div>
              </a>
            </div>
          </div>
          <div class="col-span-2 toCenter">
            <div class="card adaptive bg-threedColor lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center">
                    <img
                      class="w-1/3 sm:px-0 py-2 photo"
                      src="/Home_Page/dist/img/home-security.svg"
                      alt="Home Security"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">Home Security</h1>
                </div>
              </a>
            </div>
          </div>
          <div class="col-span-2 toCenter">
            <div class="card adaptive bg-threedColor lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center">
                    <img
                      class="w-1/3 sm:px-0 py-2 photo"
                      src="/Home_Page/dist/img/Landscapers.svg"
                      alt="Landscapers"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">Landscapers</h1>
                </div>
              </a>
            </div>
          </div>
          <div class="col-span-2 toCenter">
            <div class="card adaptive bg-threedColor lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center">
                    <img
                      class="w-1/3 sm:px-0 py-2 photo"
                      src="/Home_Page/dist/img/Pest-Control.svg"
                      alt="Pest Control"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">Pest Control</h1>
                </div>
              </a>
            </div>
          </div>
          <div class="col-span-2 toCenter">
            <div class="card adaptive bg-threedColor lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center">
                    <img
                      class="w-1/3 sm:px-0 py-2 photo"
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
        <!-- /// -->
        <div class="grid lg:grid-cols-12">
          <div class="col-span-1"></div>
          <div class="col-span-2 toCenter">
            <div class="card adaptive bg-threedColor lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center">
                    <img
                      class="w-1/3 sm:px-0 py-2 photo"
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
          <div class="col-span-2 toCenter">
            <div class="card adaptive bg-threedColor lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center">
                    <img
                      class="w-1/3 sm:px-0 py-2 photo"
                      src="/Home_Page/dist/img/Solar.svg"
                      alt="Solar"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">Solar</h1>
                </div>
              </a>
            </div>
          </div>
          <div class="col-span-2 toCenter">
            <div class="card adaptive bg-threedColor lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center">
                    <img
                      class="w-1/3 sm:px-0 py-2 photo"
                      src="/Home_Page/dist/img/Tile_Contractors.svg"
                      alt="Tile Contractors"
                    />
                  </div>
                  <h1 class="pt-3 card-title text-center">Tile Contractors</h1>
                </div>
              </a>
            </div>
          </div>
          <div class="col-span-2 toCenter">
            <div class="card adaptive bg-threedColor lg:h-50 lg:p-3 m-3">
              <a href="google.com">
                <div>
                  <div class="flex justify-center">
                    <img
                      class="w-1/3 sm:px-0 py-2 photo"
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

      <!-- start how instant  -->

      <section class="How instant bg-[#ffffff0a] mt-24">
        <div
          class="header container xl:w-contanerxl pl-4 pr-4 flex flex-col justify-center items-center py-8 text-center"
        >
          <div class="header-text w-full">
            <h3
              class="text-[55px] max-[360px]:text-[25px] max-[480px]:text-[35px] font-bold text-secondaryColor py-8 px-3 max-[480px]:py-4 w-full"
            >
              How instant renovatedeals Helps You Find Trusted Local Services
            </h3>
          </div>
          <div class="header-para w-4/5 text-center max-[769px]:w-11/12">
            <p
              class="text-threedColor text-[19px] max-[480px]:text-[16px] leading-8 max-[769px]:leading-6"
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

        <div class="Choose_the_type container xl:w-contanerxl pl-4 pr-4 py-28">
          <div
            class="container-inner [&>*]:flex [&>*]:items-center [&>*]:gap-x-6 [&>*]:justify-center [&>*]:max-[1200px]:gap-x-14 [&>*]:max-[769px]:flex-col-reverse [&>*]:max-[769px]:text-center [&>*]:max-[769px]:gap-y-6"
          >
            <div class="sec1">
              <div
                class="content w-[42%] max-[1200px]:w-[60%] max-[769px]:w-[90%]"
              >
                <p
                  class="header flex justify-start items-start gap-2 pb-3 leading-[1.4] text-threedColor text-[25px] max-[769px]:block"
                >
                  <span
                    class="flex justify-center items-center text-[22px] mt-3 text-threedColor shadow-spanNum bg-secondaryColor p-[18px] rounded-full w-10 h-10 max-[769px]:inline-block max-[769px]:p-[6px] max-[769px]:w-9 max-[769px]:h-9 max-[769px]:text-[17px]"
                    >1</span
                  >
                  Choose the type of service you need
                </p>
                <p class="header-content text-[19px] text-[#ffe3af]">
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
                    src="/Home_Page/dist/img/services.png"
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
                  class="header flex justify-start items-start gap-2 pb-3 leading-[1.4] text-threedColor text-[25px] max-[769px]:block"
                >
                  <span
                    class="flex justify-center items-center text-[22px] mt-3 text-threedColor shadow-spanNum bg-secondaryColor p-[18px] rounded-full w-10 h-10 max-[769px]:inline-block max-[769px]:p-[6px] max-[769px]:w-9 max-[769px]:h-9 max-[769px]:text-[17px]"
                    >2</span
                  >
                  Let instant renovatedeals find a local pro near you
                </p>
                <p class="header-content text-[19px] text-[#ffe3af]">
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
                    src="/Home_Page/dist/img/search-location2.png"
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
                  class="header flex justify-start items-center gap-2 pb-3 leading-[1.4] text-threedColor text-[25px] max-[769px]:block"
                >
                  <span
                    class="flex justify-center items-center text-[22px] text-threedColor shadow-spanNum bg-secondaryColor p-[18px] rounded-full w-10 h-10 max-[769px]:inline-block max-[769px]:p-[6px] max-[769px]:w-9 max-[769px]:h-9 max-[769px]:text-[17px]"
                    >3</span
                  >
                  Hire a trusted professional
                </p>
                <p class="header-content text-[19px] text-[#ffe3af]">
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
                    src="/Home_Page/dist/img/trust4.png"
                    alt="trust"
                    class="w-full rounded-full"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end how instant  -->

      <!-- start  Hire Pros  -->
      <section class="Hire_Pros mt-12">
        <div
          class="header container xl:w-contanerxl pl-4 pr-4 flex flex-col justify-center items-center py-8 text-center"
        >
          <div class="header-text w-full">
            <h3
              class="text-[55px] max-[360px]:text-[25px] max-[480px]:text-[35px] font-bold text-secondaryColor py-8 px-3 max-[480px]:py-4 w-full"
            >
              Hire Pros the Easy Way with instant renovatedeals
            </h3>
          </div>
        </div>
        <div class="Hire_Pros_type container xl:w-contanerxl pl-4 pr-4 py-14">
          <div
            class="container-inner grid grid-cols-3 max-[1200px]:grid-cols-2 max-[769px]:grid-cols-1 max-[769px]:w-[95%] max-[769px]:mx-auto gap-x-12 max-[1200px]:gap-y-12"
          >
            <div
              class="card-house-one rounded-[37px] overflow-hidden bg-[#234658] shadow-cardImgeShadow"
            >
              <div class="card-img">
                <div
                  class="group cursor-pointer relative border-b-[4px] border-[#745737] overflow-hidden"
                >
                  <img
                    src="/Home_Page/dist/img/home-img-1.jpg"
                    alt="home-img"
                    class="rounded-tl-[32px] rounded-tr-[32px] group-hover:rotate-3 group-hover:scale-110 duration-300"
                  />
                  <div
                    class="absolute w-full h-full top-0 left-0 bg-[#c4c4c41f]"
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
              class="card-house-one rounded-[37px] overflow-hidden bg-[#234658] shadow-cardImgeShadow"
            >
              <div class="card-img">
                <div
                  class="group cursor-pointer relative border-b-[4px] border-[#745737] overflow-hidden"
                >
                  <img
                    src="/Home_Page/dist/img/home-img-2.jpg"
                    alt=""
                    class="rounded-tl-[32px] rounded-tr-[32px] group-hover:rotate-3 group-hover:scale-110 duration-300"
                  />
                  <div
                    class="absolute w-full h-full top-0 left-0 bg-[#e5481738]"
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
              class="card-house-one rounded-[37px] overflow-hidden bg-[#234658] shadow-cardImgeShadow"
            >
              <div class="card-img">
                <div
                  class="group cursor-pointer relative border-b-[4px] border-[#745737] overflow-hidden"
                >
                  <img
                    src="/Home_Page/dist/img/home-img-3.jpg"
                    alt="home-img"
                    class="rounded-tl-[32px] rounded-tr-[32px] group-hover:rotate-3 group-hover:scale-110 duration-300"
                  />
                  <div
                    class="absolute w-full h-full top-0 left-0 bg-[#c4c4c41f]"
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
      <!-- end  Hire Pros  -->

      <!-- start accordeon  -->
      <section class="accordeonele mt-12 bg-[#ffffff0a] min-h-[150vh]">
        <div
          class="header container xl:w-contanerxl pl-4 pr-4 flex flex-col justify-center items-center py-8 text-center"
        >
          <div class="header-text w-full">
            <h3
              class="text-[55px] max-[360px]:text-[25px] max-[480px]:text-[40px] max-[480px]:px-1 font-bold text-secondaryColor py-8 px-3 max-[480px]:py-4 w-full"
            >
              How instant renovatedeals Helps You Find Trusted Local Services
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
                Let instant renovatedeals find a local pro near you
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
    <!-- end accordeon  -->

    <script src="/Home_Page/dist/script.js"></script>
  </body>
</html>
