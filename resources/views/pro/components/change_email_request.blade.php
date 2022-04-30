<div class="form_email_update hidden fixed z-50 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
  
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true" onclick="email_changer_form()" ></div>

    <span class="hidden sm:inline-block sm:align-middle " aria-hidden="true">&#8203;</span>

    <form action="{{route('profile.update_email')}}" method="post" >
        @csrf
        <div class="relative inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
        <div>
            <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-orange-100">
            <svg  class="h-6 w-6 text-orange-400"  stroke="currentColor" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M29 4H3a3 3 0 0 0-3 3v18a3 3 0 0 0 3 3h26a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3zm-.72 2L16 14.77 3.72 6zM30 25a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7.23l13.42 9.58a1 1 0 0 0 1.16 0L30 7.23z"/></svg>
            </div>
            <div class="mt-3 text-center sm:mt-5">
            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title"></h3>
            <div class="my-2">
                <p class="text-sm text-gray-500">un email de confirmation sera envoiyer a votre nouvell email </p>
            </div>
            <div class="flex flex-col items-start my-1">
                    <label class="block text-sm font-medium text-gray-700" for="last_name">Nouvell address email</label>
                    <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-600 focus:border-orange-400 sm:text-sm" type="email" name="email" required name="email">
                </div>
            <div class="flex flex-col items-start my-1">
                    <label class="block text-sm font-medium text-gray-700" for="last_name">mot de pass </label>
                    <input type="password" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-600 focus:border-orange-400 sm:text-sm" required name="email_change_password" >
                </div>
            </div>
        </div>
        <div class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense">
            <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-orange-600 text-base font-medium text-white hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 sm:col-start-2 sm:text-sm">Confirmer</button>
            <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 sm:mt-0 sm:col-start-1 sm:text-sm" onclick="email_changer_form()">Annuler</button>
        </div>
        </div>
    </form>
  </div>
</div>
