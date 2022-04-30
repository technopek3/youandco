<!-- This example requires Tailwind CSS v2.0+ -->
<template>
  <TransitionRoot as="template" :show="open">
    <Dialog
      as="div"
      class="fixed inset-0 overflow-hidden z-20"
      @close="close_panel"
    >
      <div class="absolute inset-0 overflow-hidden">
        <TransitionChild
          as="template"
          enter="ease-in-out duration-500"
          enter-from="opacity-0"
          enter-to="opacity-100"
          leave="ease-in-out duration-500"
          leave-from="opacity-100"
          leave-to="opacity-0"
        >
          <DialogOverlay
            class="
              absolute
              inset-0
              bg-gray-500 bg-opacity-75
              transition-opacity
            "
          />
        </TransitionChild>
        <div
          class="
            pointer-events-none
            fixed
            inset-y-0
            right-0
            flex
            max-w-full
            pl-10
          "
        >
          <TransitionChild
            as="template"
            enter="transform transition ease-in-out duration-500 sm:duration-700"
            enter-from="translate-x-full"
            enter-to="translate-x-0"
            leave="transform transition ease-in-out duration-500 sm:duration-700"
            leave-from="translate-x-0"
            leave-to="translate-x-full"
          >
            <div class="pointer-events-auto relative w-screen max-w-md">
              <TransitionChild
                as="template"
                enter="ease-in-out duration-500"
                enter-from="opacity-0"
                enter-to="opacity-100"
                leave="ease-in-out duration-500"
                leave-from="opacity-100"
                leave-to="opacity-0"
              >
                <div
                  class="
                    absolute
                    top-0
                    left-0
                    -ml-8
                    flex
                    pt-4
                    pr-2
                    sm:-ml-10 sm:pr-4
                  "
                >
                  <button
                    type="button"
                    class="
                      rounded-md
                      text-gray-300
                      hover:text-white
                      focus:outline-none focus:ring-2 focus:ring-white
                    "
                    @click="close_panel"
                  >
                    <span class="sr-only">Close panel</span>
                    <XIcon class="h-6 w-6" aria-hidden="true" />
                  </button>
                </div>
              </TransitionChild>
              <div
                class="
                  flex
                  h-full
                  flex-col
                  overflow-y-scroll
                  bg-white
                  pb-6
                  shadow-xl
                "
              >
                <div class="bg-orange-500 py-6 px-4 sm:px-6">
                  <div class="flex items-center justify-between">
                    <DialogTitle class="text-lg font-medium text-white">
                     Édition du joure férié
                    </DialogTitle>
                  </div>
                  <div class="mt-1">
                    <p class="text-sm text-white">
                      Commencez par remplir les informations ci-dessous pour modifier le joure férié.
                    </p>
                  </div>
                </div>
                <div class="relative mt-6 flex-1 px-4 sm:px-6">
                  <!-- Content::START -->
                  <div class="flex flex-1 flex-col justify-between">
                    <div class="divide-y divide-gray-200 px-1 sm:px-2">
                      <div class="space-y-6 pt-6 pb-5">
                        <div>
                          <label
                            for="project-name"
                            class="block text-sm font-medium text-gray-900"
                            >Nom du joure</label
                          >
                          <div class="mt-1">
                            <input
                              type="text"
                              v-model="name"
                              class="
                                block
                                w-full
                                rounded-md
                                border-gray-300
                                shadow-sm
                                focus:border-orange-500 focus:ring-orange-500
                                sm:text-sm
                              "
                            />
                          </div>
                        </div>
   <div>
                          <label
                            for="project-name"
                            class="block text-sm font-medium text-gray-900"
                          >
                            Date</label
                          >
                          <div class="mt-1">
                            <input
                              type="date"
                              name="project-name"
                              v-model="date"
                              class="
                                block
                                w-full
                                rounded-md
                                border-gray-300
                                shadow-sm
                                focus:border-orange-500 focus:ring-orange-500
                                sm:text-sm
                              "
                            />
                          </div>
                        </div>
                        <div>
                          <label
                            for="project-name"
                            class="block text-sm font-medium text-gray-900"
                          >
                            Prix a ajouter par Heur</label
                          >
                          <div class="mt-1">
                            <input
                              type="number"
                              v-model="price"
                              class="
                                block
                                w-full
                                rounded-md
                                border-gray-300
                                shadow-sm
                                focus:border-orange-500 focus:ring-orange-500
                                sm:text-sm
                              "
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Content::END -->
                </div>
                <div class="flex flex-shrink-0 justify-end px-4 py-4">
                  <button
                    type="button"
                    class="
                      rounded-md
                      border border-gray-300
                      bg-white
                      py-2
                      px-4
                      text-sm
                      font-medium
                      text-gray-700
                      shadow-sm
                      hover:bg-gray-50
                      focus:outline-none
                      focus:ring-2
                      focus:ring-orange-500
                      focus:ring-offset-2
                    "
                    @click="close_panel"
                  >
                    Annuler
                  </button>
                  <button
                    type="submit"
                    class="
                      ml-4
                      inline-flex
                      justify-center
                      rounded-md
                      border border-transparent
                      bg-orange-500
                      py-2
                      px-4
                      text-sm
                      font-medium
                      text-white
                      shadow-sm
                      hover:bg-orange-700
                      focus:outline-none
                      focus:ring-2
                      focus:ring-orange-500
                      focus:ring-offset-2
                    "
                    @click="update_holiday"
                  >
                    Mise a jour
                  </button>
                </div>
              </div>
            </div>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</template>

<script>
import {
  Dialog,
  DialogOverlay,
  DialogTitle,
  TransitionChild,
  TransitionRoot,
} from "@headlessui/vue";
import { XIcon } from "@heroicons/vue/outline";
export default {
  data() {
    return {
      name: "",
      price: 0.00,
      date: Date.now(),
    };
  },
  props: ["open", "token","id"],
  components: {
    Dialog,
    DialogOverlay,
    DialogTitle,
    TransitionChild,
    TransitionRoot,
    XIcon,
  },
  methods: {
    close_panel() {
      this.$parent.Troggle_side_edit_holiday();
    },
    get_holiday() {
      const config = {
        headers: {
          Authorization: `Bearer ${this.token}`,
        },
      };

      axios
        .get(`/api/holiday/${this.id}`, config)
        .then(({data}) => {
        this.name =data.name;
        this.price =data.price;
        this.date = data.date; 
         
        })
        .catch((e) => console.error(e.message));
    },
    update_holiday() {
      const config = {
        headers: {
          Authorization: `Bearer ${this.token}`,
        },
      };

      axios
        .put(`/api/holiday/${this.id}`, { name: this.name, date: this.date, price: this.price }, config)
        .then((res) => {
          this.$parent.get_holidays(),
          this.close_panel();
        })
        .catch((e) => console.error(e.message));
    },
  },
    watch: {
    id: function (newVal, oldVal) {
      if (newVal != null) {
        this.get_holiday();
      }
    },
  },
  setup() {
    return {};
  },
};
</script>