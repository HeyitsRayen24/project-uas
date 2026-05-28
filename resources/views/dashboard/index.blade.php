<x-layout>
    <div class="page-heading">
        <div class="page-heading-copy">
            <span class="page-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
            <div>
                <h1 class="h3 mb-1">{{ $title }}</h1>
            </div>
        </div>
    </div>
    <section class="row g-3 mt-1" aria-label="Dashboard metrics">
        <div class="col-12 col-sm-6 col-xl-3">
            <article class="metric-card metric-primary">
                <div class="metric-top">
                    <span class="metric-label">Category</span>
                    <span class="metric-icon"><i class="bi bi-tags-fill" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">$48,240</div>
            </article>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <article class="metric-card metric-success">
                <div class="metric-top">
                    <span class="metric-label">Product</span>
                    <span class="metric-icon"><i class="bi bi-cart-check-fill" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">1,284</div>
            </article>
        </div>

        {{-- <div class="col-12 col-sm-6 col-xl-3">
            <article class="metric-card metric-warning">
                <div class="metric-top">
                    <span class="metric-label">Customers</span>
                    <span class="metric-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">8,742</div>
                <div class="metric-meta">
                    <span class="text-success">+5.1%</span>
                    <span>active users</span>
                </div>
            </article>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <article class="metric-card metric-danger">
                <div class="metric-top">
                    <span class="metric-label">Tickets</span>
                    <span class="metric-icon"><i class="bi bi-life-preserver" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">36</div>
                <div class="metric-meta">
                    <span class="text-danger">3 urgent</span>
                    <span>need review</span>
                </div>
            </article>
        </div> --}}
    </section>
</x-layout>