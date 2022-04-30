<template>
  <Create_holiday :open="create_new_holiday" :token="token" />
  <Edit_holiday :open="edit_holiday" :id="selected_holiday_id" :token="token" />
  <Delete_holiday :open="delete_holiday" :day="selected_holiday" :token="token" />

  <div class="bg-white pt-6 shadow sm:rounded-md sm:overflow-hidden">
    <div class="px-6">
      <div class="bg-white">
        <div
          class="
            -ml-4
            -mt-4
            flex
            justify-between
            items-center
            flex-wrap
            sm:flex-no-wrap
          "
        >
          <div class="ml-4 mt-4">
            <h2 class="text-lg leading-6 font-medium text-gray-900">
              les joures férié
            </h2>
          </div>
          <div class="ml-4 mt-4 flex-shrink-0">
            <span class="inline-flex rounded-md shadow-sm">
              <button
                @click="Troggle_side_new_holidays()"
                class="
                  relative
                  inline-flex
                  items-center
                  px-4
                  py-2
                  border border-transparent
                  text-sm
                  leading-5
                  font-medium
                  rounded-md
                  text-white
                  bg-orange-500
                  hover:bg-orange-400
                  focus:outline-none
                  focus:shadow-outline-indigo
                  focus:border-orange-500
                  active:bg-orange-500
                "
                type="button"
              >
                Ajouter
              </button>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-6 flex flex-col">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <div class="overflow-hidden border-t border-gray-200">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                <tr>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider " scope="col ">Date</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider " scope="col ">Nom</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">Fee</th>
                  <th class="relative px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col"> 
                    <span class="sr-only">Voir le reçu</span>
                  </th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <tr v-for="(holiday, index) in holidays" :key="index">
                  <td
                    class="
                      px-6
                      py-4
                      whitespace-nowrap
                      text-sm
                      font-medium
                      text-gray-900
                    "
                  >
                    {{ holiday.date }}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{ holiday.name }}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{ holiday.fee }} €/h
                  </td>
                  <td
                    class="
                      py-4
                      whitespace-nowrap
                      text-right text-sm
                      font-medium
                      flex flex-nowrap
                      sm:gap-4
                    "
                  >
                    <a
                      class="text-green-600 hover:text-green-900"
                      href="#"
                      @click.prevent="Troggle_side_edit_holiday(holiday.id)"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
                        /></svg
                    ></a>
                    <a
                      href="#"
                      @click.prevent="Troggle_delete_holiday(holiday)"
                      class="text-red-600 hover:text-red-900"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                        />
                      </svg>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
            <div
              class="
                bg-white
                px-4
                py-3
                flex
                items-center
                justify-between
                border-t border-gray-200
                sm:px-6
              "
            >
              <div class="flex-1 flex justify-between sm:hidden">
                <a
                  href="#"
                  class="
                    relative
                    inline-flex
                    items-center
                    px-4
                    py-2
                    border border-gray-300
                    text-sm
                    font-medium
                    rounded-md
                    text-gray-700
                    bg-white
                    hover:bg-gray-50
                  "
                >
                  Previous
                </a>
                <a
                  href="#"
                  class="
                    ml-3
                    relative
                    inline-flex
                    items-center
                    px-4
                    py-2
                    border border-gray-300
                    text-sm
                    font-medium
                    rounded-md
                    text-gray-700
                    bg-white
                    hover:bg-gray-50
                  "
                >
                  Next
                </a>
              </div>
              <div
                class="
                  hidden
                  sm:flex-1 sm:flex sm:items-center sm:justify-between
                "
              >
                <div>
                  <p class="text-sm text-gray-700">
                    Affichage de
                    {{ " " }}
                    <span class="font-medium">{{ showing_number }}</span>
                    {{ " " }}
                    résultats sur
                    {{ " " }}
                    <span class="font-medium">{{ total }}</span>
                    {{ " " }}
                   
                  </p>
                </div>
                <div>
                  <nav
                    class="
                      relative
                      z-0
                      inline-flex
                      rounded-md
                      shadow-sm
                      -space-x-px
                    "
                    aria-label="Pagination"
                  >
                    <a
                       v-on="this.Previous_link ? { click: () => get_holidays(Previous_link) } : {click: ($event) => $event.preventDefault() }"
                      class="
                        relative
                        inline-flex
                        items-center
                        px-2
                        py-2
                        rounded-l-md
                        border border-gray-300
                        bg-white
                        text-sm
                        font-medium
                        text-gray-500
                        hover:bg-gray-50
                      "
                      :class="{'bg-gray-100':!this.Previous_link,'hover:bg-gray-100':!this.Previous_link}"
                    >
                      <span class="sr-only">Previous</span>
                      <ChevronLeftIcon class="h-5 w-5" aria-hidden="true" />
                    </a>
                    <!-- Current: "z-10 bg-indigo-50 border-indigo-500 text-indigo-600", Default: "bg-white border-gray-300 text-gray-500 hover:bg-gray-50" -->
                    <a
                      v-for="(link, index) in links"
                      :key="link.id"
                      v-show="index != 0 && index != links_length - 1"
                      @click="get_holidays(link.url)"
                      aria-current="page"
                      :class="{
                        'z-10': link.active,
                        'bg-indigo-50': link.active,
                        'border-indigo-500': link.active,
                        'text-indigo-600': link.active,
                        'bg-white': !link.active,
                        'border-gray-300': !link.active,
                        'text-gray-500': !link.active,
                        'hover:bg-gray-50': !link.active,
                      }"
                      class="
                        relative
                        inline-flex
                        items-center
                        px-4
                        py-2
                        border
                        text-sm
                        font-medium
                      "
                    >
                      {{ link.label }}
                    </a>

                    <a
                     
                       v-on="this.next_link ? { click: () => get_holidays(next_link) } : {click: ($event) => $event.preventDefault() }"
                     
                      class="
                        relative
                        inline-flex
                        items-center
                        px-2
                        py-2
                        rounded-r-md
                        border border-gray-300
                        bg-white
                        text-sm
                        font-medium
                        text-gray-500
                        hover:bg-gray-50
                      "
                    :class="{'bg-gray-100':!this.next_link,'hover:bg-gray-100':!this.next_link}"

                    >
                      <span class="sr-only">Next</span>
                      <ChevronRightIcon class="h-5 w-5" aria-hidden="true" />
                    </a>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

import Create_holiday from "../holidays/create";
import Edit_holiday from "../holidays/edit";
import Delete_holiday from "../holidays/delete";

import { ChevronLeftIcon, ChevronRightIcon } from '@heroicons/vue/solid'

export default {
  data() {
    return {
      create_new_holiday: false,
      edit_holiday: false,
      delete_holiday: false,
      holidays: {},
      selected_holiday_id: null,
      selected_holiday: null,

      links: Array(),
      links_length: 0,
      total: 0,
      showing_number: 0,
      Previous_link: null,
      next_link: null,
      api_url: "/api/holiday",
    };
  },
  props: ["token"],
  components: {
    Create_holiday,
    ChevronLeftIcon,
    ChevronRightIcon,
    Edit_holiday,
    Delete_holiday
  },
  created() {
    this.get_holidays(this.api_url);
  },
  methods: {
    Troggle_side_new_holidays() {
      this.create_new_holiday = !this.create_new_holiday;
    },
    Troggle_side_edit_holiday(id) {
      this.selected_holiday_id = id;
      this.edit_holiday = !this.edit_holiday;
    },
    Troggle_delete_holiday(holiday) {
      if (holiday) this.selected_holiday = holiday;
      this.delete_holiday = !this.delete_holiday;
    },
    get_holidays(url) {
      if (url) this.api_url = url;

      const config = {
        headers: {
          Authorization: `Bearer ${this.token}`,
        },
      };

      axios
        .get(this.api_url, config)
        .then((res) => {
          this.holidays = res.data.data;
          this.links = res.data.meta.links;
        this.showing_number = res.data.data.length;
          this.links_length = this.links.length;
          this.total = res.data.meta.total;
          this.Previous_link = res.data.links.prev;
          this.next_link = res.data.links.next; 
        })
        .catch((e) => console.error(e.message));
    },
  },
};
</script>

