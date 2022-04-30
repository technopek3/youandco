<template>
  <Create_holiday :open="create_new_holiday" :token="token" />
  
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
                  <th
                    class="
                      px-6
                      py-3
                      text-left text-xs
                      font-medium
                      text-gray-500
                      uppercase
                      tracking-wider
                    "
                    scope="col "
                  >
                    Date
                  </th>
                  <th
                    class="
                      px-6
                      py-3
                      text-left text-xs
                      font-medium
                      text-gray-500
                      uppercase
                      tracking-wider
                    "
                    scope="col "
                  >
                    Nom
                  </th>
                  <th
                    class="
                      px-6
                      py-3
                      text-left text-xs
                      font-medium
                      text-gray-500
                      uppercase
                      tracking-wider
                    "
                    scope="col "
                  >
                    Fee
                  </th>
                  <!--`relative` is added here due to a weird bug in Safari that causes `sr-only` headings to introduce overflow on the body on mobile. -->
                  <th
                    class="
                      relative
                      px-6
                      py-3
                      text-left text-xs
                      font-medium
                      text-gray-500
                      uppercase
                      tracking-wider
                    "
                    scope="col "
                  >
                    <span class="sr-only">Voir le reçu</span>
                  </th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <tr v-for="(holiday,index) in holidays" :key="index">
                  <td class=" px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                    {{holiday.date}}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{holiday.name}}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                   {{holiday.fee}} €/h
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
                    <a class="text-green-600 hover:text-green-900" href="#" @click.prevent="Troggle_side_edit_holiday(holiday.id)">
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
                    <a href="#" @click.prevent="Troggle_delete_holiday(holiday)" class="text-red-600 hover:text-red-900">
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
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Create_holiday from '../holidays/create'
export default {
  data() {
    return {
      create_new_holiday: false,
      edit_holiday: false,
      delete_holiday: false,
      holidays:{},
      selected_holiday_id:null,
      selected_holiday:null,
    };
  },
  props: ["token"],
  components: {
   Create_holiday
  },
  created(){
    this.get_holidays();
  },
  methods: {
    Troggle_side_new_holidays() {
      this.create_new_holiday = !this.create_new_holiday;
    },
    Troggle_side_edit_holiday(id) {
      this.selected_holiday_id=id
      this.edit_holiday = !this.edit_holiday;
    },
    Troggle_delete_holiday(holiday) {
      if(holiday)
      this.selected_holiday=holiday
      this.delete_holiday = !this.delete_holiday;
    },
    get_holidays() {
      const config = {
        headers: {
          Authorization: `Bearer ${this.token}`,
        },
      };

      axios
        .get("/api/holiday", config)
        .then((res) => {
          this.holidays = null;
          this.holidays = res.data.data
        })
        .catch((e) => console.error(e.message));
    },
  },
};
</script>

