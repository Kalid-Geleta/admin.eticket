<x-ig-layout>

 
    <div class="py-12 w-full">
     
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- component -->
                    <a onclick="popuphandler(true)" class="focus:ring-2 focus:ring-offset-2 focus:ring-blue-600 mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-blue-700 hover:bg-blue-400 focus:outline-none rounded" href="{{ Route('ig.permissions.create')}}">
                        <p class="text-sm font-medium leading-none text-white">Add permission</p>
                    </a>
                    
<section class="container mx-auto p-6 font-mono">

    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
      <div class="w-full overflow-x-auto">
        @if (session('status') === 'permission-updated')
        <div
              class="mb-2 rounded-lg bg-red-100 px-3 py-3 text-base font-bold text-red-900"
              x-data="{ show: true }"
              x-show="show"
              x-transition
              x-init="setTimeout(() => show = false, 2000)"
              role="alert">
              Permission Updated Successfully
             </div>
         @endif
         @if (session('status') === 'permission-created')
                    <div
                          class="mb-2 rounded-lg bg-red-100 px-3 py-3 text-base font-bold text-red-900"
                          x-data="{ show: true }"
                          x-show="show"
                          x-transition
                          x-init="setTimeout(() => show = false, 2000)"
                          role="alert">
                          Permission Created Successfully
                        </div>
                    @endif

                    @if (session('status') === 'permission-deleted')
                    <div
                          class="mb-2 rounded-lg bg-red-100 px-3 py-3 text-base font-bold text-red-900"
                          x-data="{ show: true }"
                          x-show="show"
                          x-transition
                          x-init="setTimeout(() => show = false, 2000)"
                          role="alert">
                          Permission Deleted Successfully
                        </div>
                    @endif
        <table class="w-full">
          <thead>
            <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
              <th class="px-4 py-3">Name</th>
              <th class="px-4 py-3">Action</th>

            </tr>
          </thead>
          <tbody class="bg-white">
            
            @foreach ($permissions as $permission )
            <tr class="text-gray-700">
              <td class="px-4 py-3 border">
                    <div>
                    <p class="font-semibold text-black">{{$permission->name}}</p>
                    </div>

              </td>
                
              <td class="px-4 py-3 border">
                <div class="flex space-x-2">
                    <a href="{{Route('ig.permissions.edit', $permission->id)}}" class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-green-200 rounded hover:bg-blue-200 focus:outline-none">Edit</a>
                    <form class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-red-200 rounded hover:bg-blue-200 focus:outline-none" method="POST" action="{{Route('ig.permissions.destroy', $permission->id)}}" onsubmit="return confirm('Are you sure you want to delete this permission?');">
                      @csrf
                      @method('DELETE')
                      <button type="submit" data-confrim="Are you sure?">Delete</button>
                      </form>                
                    </div>
          </td>

          </td>
                
            @endforeach 
        </div> 
          </tbody>
        </table>
        
      </div>
    </div>
  </section>               
                 </div>
            </div>
        </div>
    </div>

</x-ig-layout>
