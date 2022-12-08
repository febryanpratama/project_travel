@extends('layouts.base_admin')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row invoice-edit">
        <!-- Invoice Edit-->
        <div class="col-lg-9 col-12 mb-lg-0 mb-4">
            <div class="card invoice-preview-card">
                <div class="card-body">
                    <div class="row p-sm-3 p-0">
                        <div class="col-md-6 mb-md-0 mb-4">
                            <div class="d-flex svg-illustration mb-4 gap-2">
                                <svg width="26px" height="26px" viewBox="0 0 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>icon</title>
                                    <defs>
                                        <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
                                            <stop stop-color="#5A8DEE" offset="0%"></stop>
                                            <stop stop-color="#699AF9" offset="100%"></stop>
                                        </linearGradient>
                                        <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="linearGradient-2">
                                            <stop stop-color="#FDAC41" offset="0%"></stop>
                                            <stop stop-color="#E38100" offset="100%"></stop>
                                        </linearGradient>
                                    </defs>
                                    <g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Login---V2" transform="translate(-667.000000, -290.000000)">
                                            <g id="Login" transform="translate(519.000000, 244.000000)">
                                                <g id="Logo" transform="translate(148.000000, 42.000000)">
                                                    <g id="icon" transform="translate(0.000000, 4.000000)">
                                                        <path
                                                            d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5423509 4.74623858,13.2027679 4.78318172,12.8686032 L8.54810407,12.8689442 C8.48567157,13.19852 8.45300462,13.5386269 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.5386269,8.45300462 13.19852,8.48567157 12.8689442,8.54810407 L12.8686032,4.78318172 C13.2027679,4.74623858 13.5423509,4.72727273 13.8863636,4.72727273 Z"
                                                            id="Combined-Shape"
                                                            fill="#4880EA"
                                                        ></path>
                                                        <path
                                                            d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z"
                                                            id="Combined-Shape2"
                                                            fill="url(#linearGradient-1)"
                                                        ></path>
                                                        <rect id="Rectangle" fill="url(#linearGradient-2)" x="0" y="0" width="7.68181818" height="7.68181818"></rect>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>

                                <span class="app-brand-text h3 mb-0 fw-bold">Frest</span>
                            </div>
                            <p class="mb-1">Office 149, 450 South Brand Brooklyn</p>
                            <p class="mb-1">San Diego County, CA 91905, USA</p>
                            <p class="mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
                        </div>
                        <div class="col-md-6">
                            <dl class="row mb-2">
                                <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end">
                                    <span class="h4 text-capitalize mb-0 text-nowrap">Invoice #</span>
                                </dt>
                                <dd class="col-sm-6 d-flex justify-content-md-end">
                                    <div class="w-px-150">
                                        <input type="text" class="form-control" disabled="" placeholder="3492" value="{{ $data->transaction->merchant_ref }}" id="invoiceId" />
                                    </div>
                                </dd>
                                <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end">
                                    <span class="fw-normal">Date:</span>
                                </dt>
                                <dd class="col-sm-6 d-flex justify-content-md-end">
                                    <div class="w-px-150">
                                        <input type="text" class="form-control invoice-date flatpickr-input" placeholder="YYYY-MM-DD" value="{{ Carbon\Carbon::parse($data->transaction->cart->start_date)->format('d M Y') }}" readonly readonly="readonly" />
                                    </div>
                                </dd>
                                <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end">
                                    <span class="fw-normal">Due Date:</span>
                                </dt>
                                <dd class="col-sm-6 d-flex justify-content-md-end">
                                    <div class="w-px-150">
                                        <input type="text" class="form-control due-date flatpickr-input" placeholder="YYYY-MM-DD" value="{{ Carbon\Carbon::parse($data->transaction->cart->end_date)->format('d M Y') }}" readonly readonly="readonly" />
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <hr class="my-4 mx-n4" />

                    <div class="row p-sm-3 p-0">
                        <div class="col-md-6 col-sm-5 col-12 mb-sm-0 mb-4">
                            <h6 class="pb-2">Invoice To:</h6>
                            <p class="mb-1">{{ ucfirst($data->borrower->name) }}</p>
                            <p class="mb-1">Shelby Company Limited</p>
                            <p class="mb-1">{{ $data->borrower->address }}</p>
                            <p class="mb-1">{{ $data->borrower->phone_number_1 }}</p>
                            <p class="mb-0">{{ $data->borrower->email }}</p>
                        </div>
                        <div class="col-md-6 col-sm-7">
                            <h6 class="pb-2">Bill To:</h6>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="pe-3">Total Due:</td>
                                        <td>Rp {{ number_format($data->transaction->amount_received+$data->transaction->total_fee) }}</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-3">Payment Method:</td>
                                        <td>{{ $data->transaction->payment_name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-3">Country:</td>
                                        <td>Indonesia</td>
                                    </tr>
                                    {{-- <tr>
                                        <td class="pe-3">IBAN:</td>
                                        <td>ETD95476213874685</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-3">SWIFT code:</td>
                                        <td>BR91905</td>
                                    </tr> --}}
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <hr class="mx-n4" />

                    <form class="source-item py-sm-3">
                        <div class="mb-3" data-repeater-list="group-a">
                            <div class="repeater-wrapper pt-0 pt-md-4" data-repeater-item="">
                                <div class="d-flex border rounded position-relative pe-0">
                                    <div class="row w-100 m-0 p-3">
                                        <div class="col-md-3 col-12 mb-md-0 mb-3 ps-md-0">
                                            <p class="mb-2 repeater-title">Name Car</p>
                                            <input type="text" value="{{ $data->car->name_car }}" class="form-control" readonly disabled>
                                        </div>
                                        <div class="col-md-3 col-12 mb-md-0 mb-3">
                                            <p class="mb-2 repeater-title">Start Date</p>
                                            <input type="text" class="form-control invoice-item-price mb-2" value="{{ $data->transaction->cart->start_date }}" placeholder="{{ $data->transaction->cart->start_date }}" readonly disabled min="12" />
                                        </div>
                                        <div class="col-md-3 col-12 mb-md-0 mb-3">
                                            <p class="mb-2 repeater-title">End Date</p>
                                            <input type="text" class="form-control invoice-item-price mb-2" value="{{ $data->transaction->cart->end_date }}" placeholder="{{ $data->transaction->cart->end_date }}" readonly disabled min="12" />
                                        </div>
                                        {{-- <div class="col-md-2 col-12 mb-md-0 mb-3">
                                            <p class="mb-2 repeater-title">Qty</p>
                                            <input type="number" class="form-control invoice-item-qty" value="1" placeholder="1" min="1" max="50" />
                                        </div> --}}
                                        <div class="col-md-3 col-12 pe-0">
                                            <p class="mb-2 repeater-title">Price</p>
                                            <p class="mb-0">RP. {{ number_format($data->transaction->amount_received) }}</p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-center justify-content-between border-start p-2">
                                        <i class="bx bx-x fs-4 text-muted cursor-pointer" data-repeater-delete=""></i>
                                        <div class="dropdown">
                                            <i class="bx bx-cog bx-xs text-muted cursor-pointer more-options-dropdown" role="button" id="dropdownMenuButton" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"> </i>
                                            <div class="dropdown-menu dropdown-menu-end w-px-300 p-3" aria-labelledby="dropdownMenuButton">
                                                <div class="row g-3">
                                                    <div class="col-12">
                                                        <label for="discountInput" class="form-label">Discount(%)</label>
                                                        <input type="number" class="form-control" id="discountInput" min="0" max="100" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="taxInput1" class="form-label">Tax 1</label>
                                                        <select name="group-a[0][tax-1-input]" id="taxInput1" class="form-select tax-select">
                                                            <option value="0%" selected="">0%</option>
                                                            <option value="1%">1%</option>
                                                            <option value="10%">10%</option>
                                                            <option value="18%">18%</option>
                                                            <option value="40%">40%</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="taxInput2" class="form-label">Tax 2</label>
                                                        <select name="group-a[0][tax-2-input]" id="taxInput2" class="form-select tax-select">
                                                            <option value="0%" selected="">0%</option>
                                                            <option value="1%">1%</option>
                                                            <option value="10%">10%</option>
                                                            <option value="18%">18%</option>
                                                            <option value="40%">40%</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="dropdown-divider my-3"></div>
                                                <button type="button" class="btn btn-label-primary btn-apply-changes">Apply</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="button" class="btn btn-primary" data-repeater-create="">Add Item</button>
                            </div>
                        </div>
                    </form>

                    <hr class="my-4 mx-n4" />

                    <div class="row py-sm-3">
                        <div class="col-md-6 mb-md-0 mb-3">
                            <div class="d-flex align-items-center mb-3">
                                <label for="salesperson" class="form-label me-5 fw-semibold">Salesperson:</label>
                                <input type="text" class="form-control" id="salesperson" placeholder="Edward Crowley" value="Edward Crowley" />
                            </div>
                            <input type="text" class="form-control" id="invoiceMsg" placeholder="Thanks for your business" value="Thanks for your business" />
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <div class="invoice-calculations">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="w-px-100">Subtotal:</span>
                                    <span class="fw-semibold">$5000.25</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="w-px-100">Discount:</span>
                                    <span class="fw-semibold">$00.00</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="w-px-100">Tax:</span>
                                    <span class="fw-semibold">$100.00</span>
                                </div>
                                <hr />
                                <div class="d-flex justify-content-between">
                                    <span class="w-px-100">Total:</span>
                                    <span class="fw-semibold">$5100.25</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4" />

                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="note" class="form-label fw-semibold">Note:</label>
                                <textarea class="form-control" rows="2" id="note">It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance projects. Thank You!</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Invoice Edit-->

        <!-- Invoice Actions -->
        <div class="col-lg-3 col-12 invoice-actions">
            <div class="card mb-4">
                <div class="card-body">
                    <button class="btn btn-primary d-grid w-100" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                        <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="bx bx-paper-plane bx-xs me-3"></i>Send Invoice</span>
                    </button>
                    <div class="d-flex my-3">
                        <a href="app-invoice-preview.html" class="btn btn-label-secondary w-100 me-3">Preview</a>
                        <button type="button" class="btn btn-label-secondary w-100">Save</button>
                    </div>
                    <button class="btn btn-primary d-grid w-100" data-bs-toggle="offcanvas" data-bs-target="#addPaymentOffcanvas">
                        <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="bx bx-dollar bx-xs me-3"></i>Add Payment</span>
                    </button>
                </div>
            </div>
            <div>
                <p class="mb-2">Accept payments via</p>
                <select class="form-select mb-4">
                    <option value="Bank Account">Bank Account</option>
                    <option value="Paypal">Paypal</option>
                    <option value="Card">Credit/Debit Card</option>
                    <option value="UPI Transfer">UPI Transfer</option>
                </select>
                <div class="d-flex justify-content-between mb-2">
                    <label for="payment-terms" class="mb-0">Payment Terms</label>
                    <label class="switch switch-primary me-0">
                        <input type="checkbox" class="switch-input" id="payment-terms" checked="" />
                        <span class="switch-toggle-slider">
                            <span class="switch-on">
                                <i class="bx bx-check"></i>
                            </span>
                            <span class="switch-off">
                                <i class="bx bx-x"></i>
                            </span>
                        </span>
                        <span class="switch-label"></span>
                    </label>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <label for="client-notes" class="mb-0">Client Notes</label>
                    <label class="switch switch-primary me-0">
                        <input type="checkbox" class="switch-input" id="client-notes" />
                        <span class="switch-toggle-slider">
                            <span class="switch-on">
                                <i class="bx bx-check"></i>
                            </span>
                            <span class="switch-off">
                                <i class="bx bx-x"></i>
                            </span>
                        </span>
                        <span class="switch-label"></span>
                    </label>
                </div>
                <div class="d-flex justify-content-between">
                    <label for="payment-stub" class="mb-0">Payment Stub</label>
                    <label class="switch switch-primary me-0">
                        <input type="checkbox" class="switch-input" id="payment-stub" />
                        <span class="switch-toggle-slider">
                            <span class="switch-on">
                                <i class="bx bx-check"></i>
                            </span>
                            <span class="switch-off">
                                <i class="bx bx-x"></i>
                            </span>
                        </span>
                        <span class="switch-label"></span>
                    </label>
                </div>
            </div>
        </div>
        <!-- /Invoice Actions -->
    </div>

    <!-- Offcanvas -->
    <!-- Send Invoice Sidebar -->
    <div class="offcanvas offcanvas-end" id="sendInvoiceOffcanvas" aria-hidden="true">
        <div class="offcanvas-header border-bottom">
            <h6 class="offcanvas-title">Send Invoice</h6>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body flex-grow-1">
            <form>
                <div class="mb-3">
                    <label for="invoice-from" class="form-label">From</label>
                    <input type="text" class="form-control" id="invoice-from" value="shelbyComapny@email.com" placeholder="company@email.com" />
                </div>
                <div class="mb-3">
                    <label for="invoice-to" class="form-label">To</label>
                    <input type="text" class="form-control" id="invoice-to" value="qConsolidated@email.com" placeholder="company@email.com" />
                </div>
                <div class="mb-3">
                    <label for="invoice-subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="invoice-subject" value="Invoice of purchased Admin Templates" placeholder="Invoice regarding goods" />
                </div>
                <div class="mb-3">
                    <label for="invoice-message" class="form-label">Message</label>
                    <textarea class="form-control" name="invoice-message" id="invoice-message" cols="3" rows="8">
Dear Queen Consolidated,
          Thank you for your business, always a pleasure to work with you!
          We have generated a new invoice in the amount of $95.59
          We would appreciate payment of this invoice by 05/11/2021
                    </textarea>
                </div>
                <div class="mb-4">
                    <span class="badge bg-label-primary">
                        <i class="bx bx-link bx-xs"></i>
                        <span class="align-middle">Invoice Attached</span>
                    </span>
                </div>
                <div class="mb-3 d-flex flex-wrap">
                    <button type="button" class="btn btn-primary me-3" data-bs-dismiss="offcanvas">Send</button>
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /Send Invoice Sidebar -->
    <!-- Add Payment Sidebar -->
    <div class="offcanvas offcanvas-end" id="addPaymentOffcanvas" aria-hidden="true">
        <div class="offcanvas-header border-bottom">
            <h6 class="offcanvas-title">Add Payment</h6>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body flex-grow-1">
            <div class="d-flex justify-content-between bg-lighter p-2 mb-3">
                <p class="mb-0">Invoice Balance:</p>
                <p class="fw-bold mb-0">$5000.00</p>
            </div>
            <form>
                <div class="mb-3">
                    <label class="form-label" for="invoiceAmount">Payment Amount</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="text" id="invoiceAmount" name="invoiceAmount" class="form-control invoice-amount" placeholder="100" />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="payment-date">Payment Date</label>
                    <input id="payment-date" class="form-control invoice-date flatpickr-input" type="text" readonly="readonly" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="payment-method">Payment Method</label>
                    <select class="form-select" id="payment-method">
                        <option value="" selected="" disabled="">Select payment method</option>
                        <option value="Cash">Cash</option>
                        <option value="Bank Transfer">Bank Transfer</option>
                        <option value="Debit Card">Debit Card</option>
                        <option value="Credit Card">Credit Card</option>
                        <option value="Paypal">Paypal</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="form-label" for="payment-note">Internal Payment Note</label>
                    <textarea class="form-control" id="payment-note" rows="2"></textarea>
                </div>
                <div class="mb-3 d-flex flex-wrap">
                    <button type="button" class="btn btn-primary me-3" data-bs-dismiss="offcanvas">Send</button>
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /Add Payment Sidebar -->
    <!-- /Offcanvas -->
</div>

@endsection