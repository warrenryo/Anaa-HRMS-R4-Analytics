<x-app-layout>
    @section('title', 'Dashboard')
    <div class="panel">
        <div class="flex justify-end">
            <!-- vertically centered -->
            <div class="mb-5" x-data="modal">
                <!-- button -->
                <div class="flex items-center justify-center">
                    <button type="button" class="btn btn-info" @click="toggle">Add category</button>
                </div>

                <!-- modal -->
                <div class="fixed inset-0 bg-[black]/60 z-[999] hidden overflow-y-auto" :class="open && '!block'">
                    <div class="flex items-center justify-center min-h-screen px-4" @click.self="open = false">
                        <div x-show="open" x-transition x-transition.duration.300
                            class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg my-8">
                            <div class="flex bg-[#fbfbfb] dark:bg-[#121c2c] items-center justify-between px-5 py-3">
                                <h5 class="font-bold text-lg">Add category</h5>
                                <button type="button" class="text-white-dark hover:text-dark" @click="toggle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                                        <line x1="18" y1="6" x2="6" y2="18">
                                        </line>
                                        <line x1="6" y1="6" x2="18" y2="18">
                                        </line>
                                    </svg>
                                </button>
                            </div>
                            <div class="p-5">
                              <form action="{{ url('submit-category') }}" method="post">
                              @csrf
                                <div>
                                <input name="category" type="text" placeholder="Input category" class="form-input" required />
                                <div class="flex justify-end items-center mt-8">
                                    <button type="button" @click="toggle" class="btn btn-outline-danger">Discard</button>
                                    <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4">Save</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="table-responsive">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th class="text-center">Action </th>
            </tr>
        </thead>
        <tbody>
            @foreach($category as $categories)
            <tr>
                <td>{{$categories->id}}</td>
                <td>{{$categories->category_name}}</td>
                <td class="flex ">
                    <div class="mb-5" x-data="modal">
                        <!-- button -->
                        <div class="flex items-center justify-center">
                            <button type="button" class="btn btn-info" @click="toggle({{$categories->id}})"><i class="fa-regular fa-pen-to-square"></i></button>
                        </div>
                        
                        <!-- modal -->
                        <div class="fixed inset-0 bg-[black]/60 z-[999] hidden overflow-y-auto" :class="open && '!block'">
                            <div class="flex items-center justify-center min-h-screen px-4" @click.self="open = false">
                                <div x-show="open" x-transition x-transition.duration.300 class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg my-8">
                                    <div class="flex bg-[#fbfbfb] dark:bg-[#121c2c] items-center justify-between px-5 py-3">
                                        <h5 class="font-bold text-lg">Edit Category</h5>
                                        <button type="button" class="text-white-dark hover:text-dark" @click="toggle({{$categories->id}})">
                                            Close
                                        </button>
                                    </div>
                                    <div class="p-5">
                                        <form action="{{ url('update-category/id=' . $categories->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div>
                                                <input name="category" type="text" value="{{$categories->category_name}}" placeholder="Input category" class="form-input" required />
                                                <div class="flex justify-end items-center mt-8">
                                                    <button type="button" class="btn btn-outline-danger" @click="toggle({{$categories->id}})">Discard</button>
                                                    <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- standard  -->
                    <div x-data="modal">
                        <!-- button  -->
                        <div class="ml-4 flex items-center justify-center">
                            <button type="button" class="btn btn-danger" @click="toggle({{$categories->id}})"><i class="fa-solid fa-trash"></i></button>
                        </div>
                        
                        <!-- modal  -->
                        <div class="ml-4 fixed inset-0 bg-[black]/60 z-[999] hidden overflow-y-auto" :class="open && '!block'">
                            <div class="flex items-start justify-center min-h-screen px-4" @click.self="open = false">
                                <div x-show="open" x-transition x-transition.duration.300 class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg my-8">
                                <div class="flex py-2 bg-[#fbfbfb] dark:bg-[#121c2c] items-center justify-center">
                                    </div>
                                    <div class="p-5">
                                  
                                        <div class="flex gap-x-4 md:gap-x-7">
                                            <!-- Icon -->
                                            <span class="flex-shrink-0 inline-flex justify-center items-center size-[46px] sm:w-[62px] sm:h-[62px] rounded-full border-4 border-red-50 bg-red-100 text-red-500 dark:bg-red-700 dark:border-red-600 dark:text-red-100">
                                                <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                </svg>
                                            </span>
                                            <!-- End Icon -->

                                            <div class="grow">
                                                <h3 class="mb-2 text-xl font-bold text-gray-800 dark:text-gray-200">
                                                Delete Category
                                                </h3>
                                                <p class="text-gray-500">
                                                Permanently remove your Category and all of its contents from the Vercel platform. This action is not reversible, so please continue with caution.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex justify-end items-center mt-8">
                                            <button type="button" class="btn btn-outline-danger" @click="toggle({{$categories->id}})">Discard</button>
                                            <form action="{{ url('delete-category/id='.$categories->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                                <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4">Delete</button>
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- script -->
</x-app-layout>