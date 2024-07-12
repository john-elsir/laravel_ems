<x-layout>
    
    <h3 class="text-gray-700 text-3xl font-medium">Employee List</h3>

    <div class="mt-4">
        <div class="flex flex-wrap -mx-6">
            <x-card>
                <x-slot:cardIcon>
                    <svg class="h-8 w-8 text-white" viewBox="0 0 28 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.2 9.08889C18.2 11.5373 16.3196 13.5222 14 13.5222C11.6804 13.5222 9.79999 11.5373 9.79999 9.08889C9.79999 6.64043 11.6804 4.65556 14 4.65556C16.3196 4.65556 18.2 6.64043 18.2 9.08889Z" fill="currentColor"/>
                        <path d="M25.2 12.0444C25.2 13.6768 23.9464 15 22.4 15C20.8536 15 19.6 13.6768 19.6 12.0444C19.6 10.4121 20.8536 9.08889 22.4 9.08889C23.9464 9.08889 25.2 10.4121 25.2 12.0444Z" fill="currentColor"/>
                        <path d="M19.6 22.3889C19.6 19.1243 17.0927 16.4778 14 16.4778C10.9072 16.4778 8.39999 19.1243 8.39999 22.3889V26.8222H19.6V22.3889Z" fill="currentColor"/>
                        <path d="M8.39999 12.0444C8.39999 13.6768 7.14639 15 5.59999 15C4.05359 15 2.79999 13.6768 2.79999 12.0444C2.79999 10.4121 4.05359 9.08889 5.59999 9.08889C7.14639 9.08889 8.39999 10.4121 8.39999 12.0444Z" fill="currentColor"/>
                        <path d="M22.4 26.8222V22.3889C22.4 20.8312 22.0195 19.3671 21.351 18.0949C21.6863 18.0039 22.0378 17.9556 22.4 17.9556C24.7197 17.9556 26.6 19.9404 26.6 22.3889V26.8222H22.4Z" fill="currentColor"/>
                        <path d="M6.64896 18.0949C5.98058 19.3671 5.59999 20.8312 5.59999 22.3889V26.8222H1.39999V22.3889C1.39999 19.9404 3.2804 17.9556 5.59999 17.9556C5.96219 17.9556 6.31367 18.0039 6.64896 18.0949Z" fill="currentColor"/>
                    </svg>
                </x-slot:cardIcon>
                <x-slot:count> {{ count($totalEmployees) }}</x-slot:count>
                Total Employees
            </x-card>            
        </div>
    </div>

    <div class="mt-8">
        
    </div>

    <x-table-paginate.table-pagination>
        <x-slot:title>Employee List</x-slot:title>
        
        <x-table-paginate.pagination />
            
        <x-table-paginate.table>
            <thead>
                <tr>
                    <x-table-paginate.th>Name</x-table-paginate.th>
                    <x-table-paginate.th>Position</x-table-paginate.th>
                    <x-table-paginate.th>Nationality</x-table-paginate.th>
                    <x-table-paginate.th>Project Location</x-table-paginate.th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($employees as $employee)     
                    @php
                        $fullname = $employee->first_name . ' ' . $employee->last_name;
                    @endphp 
                    <tr>
                        <x-table-paginate.td>
                                <div class="flex-shrink-0 w-10 h-10">
                                    <img class="w-full h-full rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80" alt="" />
                                </div>

                                <div class="ml-3">
                                    <div class="text-sm leading-5 font-medium text-gray-900">
                                        {{ $fullname }}
                                    </div>
                                    <div class="text-sm leading-5 text-gray-500">Budge No: {{  $employee->emp_id }}</div>
                                    <div class="text-sm leading-5 text-gray-500">Contact No: {{  $employee->contact }}</div>
                                </div>
                        </x-table-paginate.td>

                        <x-table-paginate.td>
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{ $employee->occupation }}
                            </p>
                        </x-table-paginate.td>

                        <x-table-paginate.td>
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{ $employee->nationality }}
                            </p>
                        </x-table-paginate.td>

                        <x-table-paginate.td>
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{ $employee->project_location }}
                            </p>
                        </x-table-paginate.td>
                    </tr>  
                @endforeach                         
            </tbody>
        </x-table-paginate.table>
        <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
            {{-- <span class="text-xs xs:text-sm text-gray-900">Showing 1 to 4 of 50 Entries</span>

            <div class="inline-flex mt-2 xs:mt-0">
                <button class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">Prev</button>
                <button class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">Next</button>
            </div> --}}
            {{ $employees->links() }}
        </div>
    </x-table-paginate.table-pagination>
    
</x-layout>
