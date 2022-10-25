<div>
    <section class="table-components">
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card-style mb-4">
                        
                        @if ($showUpdate==0)
                            <livewire:suratkeluar.suratkeluar-add/>
                        @else
                            <livewire:suratkeluar.suratkeluar-update/>
                        @endif
                        
                    </div>
                </div>
                <!-- End Col -->
                <div class="col-lg-8">
                    <div class="card-style mb-3">
                            <livewire:suratkeluar.suratkeluar-index/>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>