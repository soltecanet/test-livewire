<div class="flex justify-center px-3 sm:px-6 py-2" >
    <div class="inline-block min-w-[50%] shadow rounded-lg overflow-hidden">
        <div class="bg-white py-2 px-3 rounded-md ">
            <form  wire:submit.prevent="save">
             <div class="px-2">
                   <div class="my-2" >
                    <span class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                        Actualizar Proveedor
                    </span>
                   </div>

{{-- Inicio cuerpo del formulario --}}

<div class="my-2">
    <input
        type="text"
        placeholder="Ingresar Nombre"
        wire:model="supplier.name"
        class="placeholder-gray-300 block mb-2 w-full text-sm text-gray-900 bg-gray-50 rounded-sm border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
        />
   @error('supplier.name') <span class="error text-red-600 text-sm">{{ $message }}</span> @enderror
</div>

<div class="my-2">
    <input
        type="text"
        placeholder="Ingresar Direccion"
        wire:model="supplier.direction"
        class="placeholder-gray-300 block mb-2 w-full text-sm text-gray-900 bg-gray-50 rounded-sm border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
        />
   @error('supplier.direction') <span class="error text-red-600 text-sm">{{ $message }}</span> @enderror
</div>


<div>
    <label for="region_id" class="block text-sm font-medium text-gray-900 dark:text-white">
        Región
    </label>
    <x-form.input-select
        :options="$regiones"
        placeholder="Seleccionar Región"
        wire:model.defer="supplier.region_id"
        wire:change="getComunas($event.target.value)"
        class="placeholder-gray-300 block mb-1 w-full md:w-80 text-sm text-gray-900 bg-gray-50 rounded-sm border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
        />
    @error('supplier.region_id') <span class="error text-red-600 text-sm">{{ $message }}</span> @enderror
</div>

<div>
    <label for="commune_id" class="block text-sm font-medium text-gray-900 dark:text-white">
        Comuna
    </label>
    <x-form.input-select
        :options="$comunas"
        placeholder="Seleccionar Comuna"
        wire:model.defer="supplier.commune_id"
        class="placeholder-gray-300 block mb-1 w-full md:w-80 text-sm text-gray-900 bg-gray-50 rounded-sm border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
        />
    @error('supplier.commune_id') <span class="error text-red-600 text-sm">{{ $message }}</span> @enderror
</div>
</div>


{{-- Fin cuerpo del formulario --}}

{{-- inicio de botones --}}

<div class="py-2 flex justify-end">
    <div class="px-1" >
        <button
        class=" align-middle self-center  bg-blue-600 hover:bg-blue-800 text-white px-3 py-2 rounded-md tracking-tight"
        type="submit">
        Guardar
        </button>
    </div>
    <div class="px-1 pt-2" >
       <a href="{{ route('supplier.index') }}"
        class=" align-middle self-center  bg-blue-600 hover:bg-blue-800 text-white px-3 py-2.5 rounded-md tracking-tight">
           Cancelar
       </a>
   </div>
</div>



{{-- fin de botones --}}


             </div>
            </form>
         </div>
      </div>

   </div>
