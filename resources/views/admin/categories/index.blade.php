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

                    <tr>
                        <td>1</td>

                        <td class="fw-semibold">
                            #HMD-2048
                        </td>

                        <td>Sarah Ahmed</td>

                        <td>
                            <div class="d-flex justify-content-center gap-2">

                                <a href="" class="btn btn-sm btn-primary">
                                    <i class="bi bi-eye"></i>
                                    Detail
                                </a>
                                
                                <a href="" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil-square"></i>
                                    Edit
                                </a>

                                <a href="" class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i>
                                    Delete
                                </a>

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

                    <tr>
                        <td>2</td>

                        <td class="fw-semibold">
                            #HMD-2047
                        </td>

                        <td>Rafi Khan</td>

                        <td>
                            <div class="d-flex justify-content-center gap-2">

                                <a href="" class="btn btn-sm btn-primary">
                                    <i class="bi bi-eye"></i>
                                    Detail
                                </a>
                                
                                <a href="" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil-square"></i>
                                    Edit
                                </a>

                                <a href="" class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i>
                                    Delete
                                </a>

                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </section>
</x-layout>