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

    <section class="row g-3">
        <div class="col-12 col-xl-12">
            <form class="panel needs-validation">

                <div class="panel-header">
                    <div>
                        <h2 class="h5 mb-1 section-title"><i class="bi bi-tags-fill" aria-hidden="true"></i><span>Category Information</span></h2>
                    </div>
                </div>

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label" for="name">Category Name</label>
                        <input class="form-control" id="name" name="name" type="text">

                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="code">Category Code</label>
                        <input class="form-control" id="code" name="code" type="text">

                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-end gap-2 mt-4">
                    <button class="btn btn-primary" type="submit">
                        <i class="bi bi-tags-fill" aria-hidden="true"></i> 
                        Create Category
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-layout>