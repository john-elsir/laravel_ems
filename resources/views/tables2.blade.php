<x-layout>
    <x-table-paginate.table-pagination>
        <x-slot:title>Employee List</x-slot:title>
        
        <x-table-paginate.pagination />
            
        <x-table-paginate.table>
            <thead>
                <tr>
                    <x-table-paginate.th>User</x-table-paginate.th>
                    <x-table-paginate.th>Role</x-table-paginate.th>
                    <x-table-paginate.th>Create</x-table-paginate.th>
                    <x-table-paginate.th>Status</x-table-paginate.th>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <x-table-paginate.td>
                            <div class="flex-shrink-0 w-10 h-10">
                                <img class="w-full h-full rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80" alt="" />
                            </div>

                            <div class="ml-3">
                                <p class="text-gray-900 whitespace-no-wrap">Vera Carpenter</p>
                            </div>
                    </x-table-paginate.td>

                    <x-table-paginate.td>
                        <p class="text-gray-900 whitespace-no-wrap">Admin</p>
                    </x-table-paginate.td>

                    <x-table-paginate.td>
                        <p class="text-gray-900 whitespace-no-wrap">Jan 21, 2020</p>
                    </x-table-paginate.td>

                    <x-table-paginate.td>
                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                            <span class="relative">Activo</span>
                        </span>
                    </x-table-paginate.td>
                </tr>                           
            </tbody>
        </x-table-paginate.table>
    </x-table-paginate.table-pagination>
</x-layout>
