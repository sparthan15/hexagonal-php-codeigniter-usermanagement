<div class="modal fade" tabindex="-1" role="dialog" id="addUserModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-3 shadow">
            <div class="modal-body p-4 text-center">
                <h2 class="fw-bold mb-0">Add user</h2>

                <div class="col-12">
                    <hr class="my-4" />
                    <form class="needs-validation" novalidate>

                        <div class="col-12">
                            <label for="email" class="form-label">Email </label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>

                        </div>
                        <div class="col-12">
                            <label for="password" class="form-label">Password </label>
                            <input type="password" class="form-control" id="password" placeholder="type your password">
                            <div class="invalid-feedback">
                                Please enter a valid password
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer flex-nowrap p-0">
                <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-end"><strong>Save</strong></button>
                <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>