<template>
  <Create_experiance :open="create_new_experiance" :token="token" />
  <Edit_experiance :open="edit_experiance" :id="selected_experiance_id" :token="token"/>
  <delete_experiance :open="delete_experiance" :exp="selected_experiance" :token="token"/>
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
              Expériences
            </h2>
          </div>
          <div class="ml-4 mt-4 flex-shrink-0">
            <span class="inline-flex rounded-md shadow-sm">
              <button
                @click="Troggle_side_new_experiance()"
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
                    Frais
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
                <tr v-for="(experiance,index) in experiances" :key="index">
                  <td class=" px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                    {{experiance.date}}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{experiance.name}}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                   {{experiance.price}} €/h
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
                    <a class="text-green-600 hover:text-green-900" href="#" @click.prevent="Troggle_side_edit_experiance(experiance.id)">
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
                    <a href="#" @click.prevent="Troggle_delete_experiance(experiance)" class="text-red-600 hover:text-red-900">
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
import Create_experiance from "./create.vue";
import Edit_experiance from './edit.vue';
import delete_experiance from './delete.vue'
export default {
  data() {
    return {
      create_new_experiance: false,
      edit_experiance: false,
      delete_experiance: false,
      experiances:{},
      selected_experiance_id:null,
      selected_experiance:null,
    };
  },
  props: ["token"],
  components: {
    Create_experiance,
    Edit_experiance,
    delete_experiance
  },
  created(){
    this.get_experiances();
  },
  methods: {
    Troggle_side_new_experiance() {
      this.create_new_experiance = !this.create_new_experiance;
    },
    Troggle_side_edit_experiance(id) {
      this.selected_experiance_id=id
      this.edit_experiance = !this.edit_experiance;
    },
    Troggle_delete_experiance(exp) {
      if(exp)
      this.selected_experiance=exp
      this.delete_experiance = !this.delete_experiance;
    },
    get_experiances() {
      const config = {
        headers: {
          Authorization: `Bearer ${this.token}`,
        },
      };

      axios
        .get("/api/experiance", config)
        .then((res) => {
          this.experiances = null;
          this.experiances = res.data.data
        })
        .catch((e) => console.error(e.message));
    },
  },
};
</script>

