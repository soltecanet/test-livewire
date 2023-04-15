
<div class="flex justify-center px-3 sm:px-6 py-2" >
    <div class="shadow rounded-lg overflow-hidden">
        <div class="bg-white py-2 px-3 rounded-md ">
            <form  wire:submit.prevent="save">
             <div class="px-2">
                   <div class="my-2" >
                    <span class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                        Nuevo Proveedor
                    </span>
                   </div>

                   @include('livewire.proveedores.form-supplier')

                   @include('livewire.proveedores.btns-form-supplier')

             </div>

          </form>
       </div>
    </div>


 </div>

 <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
    <div class="md:flex">
      <div class="md:shrink-0">
        <img class="h-48 w-full object-cover md:h-full md:w-48" src="/img/building.jpg" alt="Modern building architecture">
      </div>
      <div class="p-8">
        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Company retreats</div>
        <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Incredible accommodation for your team</a>
        <p class="mt-2 text-slate-500">Looking to take your team away on a retreat to enjoy awesome food and take in some sunshine? We have a list of places to do just that.</p>
      </div>
    </div>
  </div>



