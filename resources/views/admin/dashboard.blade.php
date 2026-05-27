<x-layouts.app>

    <div class="min-h-screen flex">

        <!-- SIDEBAR -->
        <aside class="w-[280px] bg-cafe-dark p-6 hidden lg:flex flex-col justify-between">

            <div>

                <div>
                    <h1 class="text-3xl font-bold text-white">
                        BrewNest
                    </h1>

                    <p class="text-white/50 mt-2 text-sm">
                        Admin Dashboard
                    </p>
                </div>

                <div class="mt-12 space-y-3">

                    <a href="#" class="sidebar-link sidebar-link-active">
                        Dashboard
                    </a>

                    <a href="#" class="sidebar-link">
                        Products
                    </a>

                    <a href="#" class="sidebar-link">
                        Categories
                    </a>

                    <a href="#" class="sidebar-link">
                        Orders
                    </a>

                    <a href="#" class="sidebar-link">
                        Customers
                    </a>

                    <a href="#" class="sidebar-link">
                        Transactions
                    </a>

                    <a href="#" class="sidebar-link">
                        Reports
                    </a>

                    <a href="#" class="sidebar-link">
                        Settings
                    </a>

                </div>

            </div>

            <button class="btn-primary w-full">
                Logout
            </button>

        </aside>

        <!-- MAIN -->
        <main class="flex-1 p-8">

            <!-- TOPBAR -->
            <div class="bg-white rounded-[24px] shadow-soft p-6 flex items-center justify-between">

                <div>
                    <h2 class="text-3xl font-bold">
                        Dashboard
                    </h2>

                    <p class="text-cafe-softtext mt-2">
                        Welcome back admin 👋
                    </p>
                </div>

                <div class="flex items-center gap-4">

                    <input type="text" placeholder="Search..." class="input w-[250px] py-3">

                    <div
                        class="w-12 h-12 rounded-full bg-cafe-primary text-white flex items-center justify-center font-bold">
                        A
                    </div>

                </div>

            </div>
            <!-- STATS -->
            <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-6 mt-8">

                <div class="card">
                    <p class="text-cafe-softtext">
                        Total Orders
                    </p>

                    <h2 class="text-4xl font-bold mt-4">
                        1,240
                    </h2>

                    <p class="text-cafe-primary font-medium mt-3 text-sm">
                        +12% this month
                    </p>
                </div>

                <div class="card">
                    <p class="text-cafe-softtext">
                        Revenue
                    </p>

                    <h2 class="text-4xl font-bold mt-4">
                        Rp 12M
                    </h2>

                    <p class="text-cafe-primary font-medium mt-3 text-sm">
                        +8% this month
                    </p>
                </div>

                <div class="card">
                    <p class="text-cafe-softtext">
                        Customers
                    </p>

                    <h2 class="text-4xl font-bold mt-4">
                        892
                    </h2>

                    <p class="text-cafe-primary font-medium mt-3 text-sm">
                        +20% this month
                    </p>
                </div>

                <div class="card">
                    <p class="text-cafe-softtext">
                        Products
                    </p>

                    <h2 class="text-4xl font-bold mt-4">
                        120
                    </h2>

                    <p class="text-cafe-primary font-medium mt-3 text-sm">
                        Active Products
                    </p>
                </div>

            </div>

            <!-- PRODUCT TABLE -->
            <div class="card mt-8 overflow-x-auto">

                <div class="flex items-center justify-between mb-6">

                    <div>
                        <h2 class="text-2xl font-bold">
                            Product List
                        </h2>

                        <p class="text-cafe-softtext mt-2 text-sm">
                            Manage your cafe products
                        </p>
                    </div>

                    <button class="btn-primary">
                        Add Product
                    </button>

                </div>

                <table class="w-full">

                    <thead>
                        <tr class="bg-cafe-surface text-left text-cafe-softtext uppercase text-sm">
                            <th class="p-4 rounded-l-2xl">Product</th>
                            <th class="p-4">Category</th>
                            <th class="p-4">Price</th>
                            <th class="p-4">Stock</th>
                            <th class="p-4 rounded-r-2xl">Status</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach(range(1,5) as $item)
                        <tr class="border-b border-cafe-border hover:bg-cafe-surface/50 transition-all">

                            <td class="p-4 flex items-center gap-4">
                                <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?q=80&w=400"
                                    class="w-14 h-14 rounded-2xl object-cover">

                                <div>
                                    <h3 class="font-semibold">
                                        Caramel Latte
                                    </h3>

                                    <p class="text-sm text-cafe-softtext mt-1">
                                        Premium coffee
                                    </p>
                                </div>
                            </td>

                            <td class="p-4">
                                Coffee
                            </td>

                            <td class="p-4">
                                Rp 35.000
                            </td>

                            <td class="p-4">
                                50
                            </td>

                            <td class="p-4">
                                <span class="bg-cafe-mint text-cafe-primary px-4 py-2 rounded-full text-sm font-medium">
                                    Active
                                </span>
                            </td>

                        </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>

        </main>

    </div>

</x-layouts.app>