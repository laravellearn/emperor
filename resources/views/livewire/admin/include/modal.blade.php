            <!-- Modal -->

            <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">

                <div class="modal-dialog" role="document">

                    <div class="modal-content">

                        <div class="modal-header">

                            <h5 class="modal-title" id="exampleModalLabel">پرسش</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                <span aria-hidden="true close-btn">×</span>

                            </button>

                        </div>

                        <div class="modal-body">

                            <p>آیا از حذف رکورد مطمئن هستید؟</p>

                        </div>

                        <div class="modal-footer">

                            <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">خیر</button>

                            <button type="button" wire:click.prevent="delete()" class="btn btn-danger close-modal"
                                data-dismiss="modal">حذف کن</button>

                        </div>

                    </div>

                </div>

            </div>


