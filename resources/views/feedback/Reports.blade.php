<x-app-layout>
    <div class="container mx-auto mt-4">
        <h1 class="text-2xl font-semibold mb-4">Rstaurant reports</h1>
    </div>
<!--TABLES-->

<div class="table-responsive">
    <table>
        <thead>
            <tr>
                    <th>Report Name</th>
                    <th>Description</th>
                    <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <template x-for="data in tableData" :key="data.id">
                <tr>
                    <td x-text="data.name" class="whitespace-nowrap"></td>
                    <td x-text="data.position"></td>
                    <td x-text="data.office"></td>
                    <td class="text-center">
                        <ul class="flex items-center justify-center gap-2">
                            <li>
                                <a href="javascript:;" x-tooltip="Edit">
                                    <svg> ... </svg>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" x-tooltip="Delete">
                                    <svg> ... </svg>
                                </a>
                            </li>
                        </ul>
                    </td>
                </tr>
            </template>
        </tbody>
        
    </table>
</div>
</x-app-layout>