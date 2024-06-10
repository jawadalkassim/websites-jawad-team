<div class="pt-8 sm:pt-16 pb-8">
  <h2
    class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300"
  >
    What is your address?
  </h2>
  <p
    class="mt-2 text-gray-700 text-md sm:text-lg leading-6 font-normal text-center transition ease-in-out duration-300 hidden"
  ></p>

  <div
    class="py-4 md:py-8 px-8 text-sm leading-4 ease-in-out duration-300 mx-auto max-w-sm"
  >
    <div class="relative w-full text-sm leading-4 py-2">
      <label
        for="address"
        class="block pl-0.5 text-sm font-medium text-gray-900"
      >
        Street Address
      </label>
      <input
        type="text"
        name="address"
        id="gm-autocomplete"
        class="peer block mt-0.5 px-4 py-4 border border-gray-400 rounded-md shadow-sm focus:border-blue-500 focus:z-10 w-full text-lg placeholder-shown:not-empty"
        placeholder="Street Address"
        value="<?php if ($_SESSION['address']) echo $_SESSION['address']; ?>"
        required
      />

      <div
        class="custom-error text-rose-500 text-xs text-left pt-1 transition ease-in-out duration-300 hidden"
      >
        This field is required. PO Box addresses not allowed.
      </div>
    </div>

    <div class="relative w-full text-sm leading-4 py-2">
      <label for="city" class="block pl-0.5 text-sm font-medium text-gray-900">
        City
      </label>
      <input
        type="text"
        name="city"
        id="city"
        class="peer block mt-0.5 px-4 py-4 border border-gray-400 rounded-md shadow-sm focus:border-blue-500 focus:z-10 w-full text-lg placeholder-shown:not-empty"
        placeholder="City"
        value="<?php if ($_SESSION['city']) echo $_SESSION['city']; ?>"
        required
      />

      <div
        class="custom-error text-rose-500 text-xs text-left pt-1 transition ease-in-out duration-300 hidden"
      >
        This field is required.
      </div>
    </div>

    <div class="relative w-full text-sm leading-4 py-2">
      <label for="state" class="block pl-0.5 text-sm font-medium text-gray-900">
        State
      </label>
      <select
        name="state"
        id="state"
        class="peer block mt-0.5 pl-4 pr-10 py-4 bg-white border border-gray-400 rounded-md shadow-sm focus:border-sky-400 focus:z-10 ring-0 outline-0 w-full text-lg"
        required
      >
        <option class="text-gray-500" value="" selected disabled hidden>
          Select State
        </option>
        <?php
                          foreach ($state_list as $key =>
        $value) { if($key === $_SESSION['state']){ echo '
        <option value="'.$key.'" selected>'.$value.'</option>
        '; } else { echo '
        <option value="'.$key.'">'.$value.'</option>
        '; } } ?>
      </select>

      <div
        class="custom-error text-rose-500 text-xs text-left pt-1 transition ease-in-out duration-300 hidden"
      >
        This field is required.
      </div>
    </div>

    <div class="relative w-full text-sm leading-4 py-2">
      <label for="zip" class="block pl-0.5 text-sm font-medium text-gray-900">
        Zip Code
      </label>
      <input
        type="text"
        name="zip"
        id="zip"
        class="peer block mt-0.5 px-4 py-4 border border-gray-400 rounded-md shadow-sm focus:border-blue-500 focus:z-10 w-full text-lg placeholder-shown:not-empty"
        placeholder="Zip Code"
        minlength="5"
        maxlength="5"
        value="<?php if ($_SESSION['zip']) echo $_SESSION['zip']; ?>"
        required
      />

      <div
        class="custom-error text-rose-500 text-xs text-left pt-1 transition ease-in-out duration-300 hidden"
      >
        This field is required.
      </div>

      <input type="hidden" name="street_number" />
      <input type="hidden" name="street_name" />
    </div>
  </div>

  <div class="py-4 sm:py-8 mx-auto max-w-2xl text-center">
    <button
      type="button"
      class="flex items-center justify-center bg-custom-blue py-4 px-4 rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b-4 border-b-custom-dark-blue"
      data-action="next-step"
    >
      Continue
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
        fill="currentColor"
        class="w-6 h-6 ml-2 md:w-8 md:h-8"
      >
        <path
          fill-rule="evenodd"
          d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z"
          clip-rule="evenodd"
        />
      </svg>
    </button>
  </div>

  <div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
    <div class="flex items-start w-full">
      <div class="flex-shrink-0">
        <img
          class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border-4 border-gray-200"
          src="/assets/images/agent.jpg"
          alt="Sender Avatar"
        />
      </div>
      <div class="ml-3 agent-chat">
        <div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
          <p class="text-sm sm:text-md text-gray-600">
            Please enter the address you want the plan to be assocaited with.
          </p>
        </div>
        <p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">
          Sarah, <span class="current-time"></span>
        </p>
      </div>
    </div>
  </div>
</div>
