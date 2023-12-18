<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Order') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
<form>
    <div class="space-y-12">  
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Your Order Information</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">Eat Even If You Have little Or No Money.</p>
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="amount" class="block text-sm font-medium leading-6 text-gray-900">How much Money do you have</label>
            <div class="mt-2">
              <input type="number" name="Amount" id="amount" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
            </div>
          </div>
          
          <div class="sm:col-span-4">
            <label for="item" class="block text-sm font-medium leading-6 text-gray-900">Item</label>
            <div class="mt-2">
              <select id="item" name="item" autocomplete="Item" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                <option></option>
                <option>Burger -100Rs</option>
                <option>Roll -200Rs</option>
                <option>Pizza -300Rs</option>
              </select>
            </div>
          </div>

          <div class="sm:col-span-4">
            <label for="quantity" class="block text-sm font-medium leading-6 text-gray-900">Quantity</label>
            <div class="mt-2">
              <input id="quantity" name="quantity" type="number" autocomplete="quantity" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
            </div>
          </div>
  
          
        </div>
      </div>
  
      
  
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
  </form>
  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
