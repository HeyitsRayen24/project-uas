<x-layout>
    <div class="page-heading">
        <div class="page-heading-copy">
            <span class="page-icon">
                <i class="bi bi-tags-fill" aria-hidden="true"></i>
            </span>

            <div>
                <h1 class="h3 mb-1">{{ $title }}</h1>
            </div>
        </div>
    </div>

    <section class="panel">

        <div class="panel-header">
            <div>
                <a href="{{ route('category.create') }}"
                   class="btn btn-primary">

                    <i class="bi bi-plus-circle" aria-hidden="true"></i>
                    Create Category
                </a>
            </div>

            <input class="form-control form-control-sm table-search"
                   type="search"
                   placeholder="Search Category"
                   data-table-search="ordersTable"
                   aria-label="Search Category">
        </div>

        <div class="table-responsive">
            <table class="table align-middle mb-0"
                   id="ordersTable"
                   data-searchable-table>

                <thead>
                    <tr>
                        <th width="80">No</th>
                        <th>Code</th>
                        <th>Category Name</th>
                        <th class="text-center" width="250">
                            Action
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td class="fw-semibold">
                            {{ $category->code }}
                        </td>

                        <td>{{ $category->name }}</td>

                        <td>
                            <div class="d-flex justify-content-center gap-2">

                                <a href="{{  route('category.show', $category)  }}" class="btn btn-sm btn-primary">
                                    <i class="bi bi-eye"></i>
                                    Detail
                                </a>
                                
                                <a href="{{ route('category.edit', $category) }}" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil-square"></i>
                                    Edit
                                </a>

                                <form action="{{ route('category.destroy', $category) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" data-delete>
                                        <i class="bi bi-trash"></i>
                                        Delete
                                    </button>
                                </form>

                                {{-- <button class="btn btn-sm btn-warning"
                                        type="button">

                                    <i class="bi bi-pencil-square"></i>
                                </button>

                                <button class="btn btn-sm btn-danger"
                                        type="button">

                                    <i class="bi bi-trash"></i>
                                </button> --}}

                            </div>
                        </td>
                    </tr>
                        
                    @empty
                    <td class="text-center text-sm text-gray-900 px-6 py-4 whitespace-nowrap" colspan="6">
                        Data Empty
                    </td>    
                    @endforelse


                </tbody>
            </table>
        </div>
    </section>
</x-layout>