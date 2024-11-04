@extends('admin.admin-layout')

@section('content')

<div class="body-wrapper-inner">
    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="col-lg-8 d-flex align-items-strech">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                            <div class="mb-3 mb-sm-0">
                                <h5 class="card-title fw-semibold">Sales Profit</h5>
                            </div>
                            <div>
                                <select class="form-select">
                                    <option value="1">March 2024</option>
                                    <option value="2">April 2024</option>
                                    <option value="3">May 2024</option>
                                    <option value="4">June 2024</option>
                                </select>
                            </div>
                        </div>
                        <div id="sales-profit"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card bg-danger-subtle shadow-none w-100">
                            <div class="card-body">
                                <div class="d-flex mb-10 pb-1 justify-content-between align-items-center">
                                    <div class="d-flex align-items-center gap-6">
                                        <div
                                            class="rounded-circle-shape bg-danger px-3 py-2 rounded-pill d-inline-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:users-group-rounded-bold-duotone"
                                                class="fs-7 text-white"></iconify-icon>
                                        </div>
                                        <h6 class="mb-0 fs-4 fw-medium text-muted">
                                            Total followers
                                        </h6>
                                    </div>
                                    <div class="dropdown dropstart">
                                        <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical fs-6"></i>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-3"
                                                    href="javascript:void(0)"><i class="fs-4 ti ti-plus"></i>Add</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-3"
                                                    href="javascript:void(0)"><i class="fs-4 ti ti-edit"></i>Edit</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-3"
                                                    href="javascript:void(0)"><i class="fs-4 ti ti-trash"></i>Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row align-items-end justify-content-between">
                                    <div class="col-5">
                                        <h2 class="mb-6 fs-8">4,562</h2>
                                        <span
                                            class="badge rounded-pill border border-muted fw-bold text-muted fs-2 py-1">+23%
                                            last
                                            month</span>
                                    </div>
                                    <div class="col-5">
                                        <div id="total-followers" class="rounded-bars"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card bg-secondary-subtle shadow-none w-100">
                            <div class="card-body">
                                <div class="d-flex mb-10 pb-1 justify-content-between align-items-center">
                                    <div class="d-flex align-items-center gap-6">
                                        <div
                                            class="rounded-circle-shape bg-secondary px-3 py-2 rounded-pill d-inline-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:wallet-2-line-duotone" class="fs-7 text-white">
                                            </iconify-icon>
                                        </div>
                                        <h6 class="mb-0 fs-4 fw-medium text-muted">
                                            Total Income
                                        </h6>
                                    </div>
                                    <div class="dropdown dropstart">
                                        <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical fs-6"></i>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-3"
                                                    href="javascript:void(0)"><i class="fs-4 ti ti-plus"></i>Add</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-3"
                                                    href="javascript:void(0)"><i class="fs-4 ti ti-edit"></i>Edit</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-3"
                                                    href="javascript:void(0)"><i class="fs-4 ti ti-trash"></i>Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row align-items-center justify-content-between pt-4">
                                    <div class="col-5">
                                        <h2 class="mb-6 fs-8 text-nowrap">$6,280</h2>
                                        <span
                                            class="badge rounded-pill border border-muted fw-bold text-muted fs-2 py-1">+18%
                                            last
                                            month</span>
                                    </div>
                                    <div class="col-5">
                                        <div id="total-income"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 d-flex align-items-stretch">
                <div class="card w-100 overflow-hidden">
                    <div class="card-body pb-0">
                        <h4 class="fs-4 mb-1 card-title">Popular Products</h4>
                        <p class="mb-0 card-subtitle">Total 9k Visitors</p>
                    </div>
                    <div data-simplebar class="position-relative">
                        <div class="table-responsive products-tabel" data-simplebar>
                            <table class="table text-nowrap mb-0 align-middle table-hover">
                                <thead class="fs-4">
                                    <tr>
                                        <th class="fs-3 px-4">Products</th>
                                        <th class="fs-3">Payment</th>
                                        <th class="fs-3">Status</th>
                                        <th class="fs-3"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center product">
                                                <img src="../assets/images/products/s1.jpg"
                                                    class="img-fluid flex-shrink-0 rounded" width="60" height="60" />
                                                <div class="ms-3 product-title">
                                                    <h6 class="fs-3 mb-0 text-truncate-2">
                                                        iPhone 13 pro max-Pacific Blue-128GB storage
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="mb-0 fs-4">
                                                $180 <span class="text-muted">/499</span>
                                            </h5>
                                            <p class="text-muted mb-2">Partially paid</p>
                                            <div class="progress bg-light w-100" style="height: 4px">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    aria-label="Example 4px high" style="width: 40%" aria-valuenow="40"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <span
                                                class="badge rounded-pill fs-2 fw-medium bg-secondary-subtle text-secondary">Confirmed</span>
                                        </td>
                                        <td>
                                            <div class="dropdown dropstart">
                                                <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical fs-6"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center gap-3"
                                                            href="javascript:void(0)"><i
                                                                class="fs-4 ti ti-plus"></i>Add</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center gap-3"
                                                            href="javascript:void(0)"><i
                                                                class="fs-4 ti ti-edit"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center gap-3"
                                                            href="javascript:void(0)"><i
                                                                class="fs-4 ti ti-trash"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center product">
                                                <img src="../assets/images/products/s2.jpg"
                                                    class="img-fluid flex-shrink-0 rounded" width="60" height="60" />
                                                <div class="ms-3 product-title">
                                                    <h6 class="fs-3 mb-0 text-truncate-2">
                                                        Apple MacBook Pro 13 inch-M1-8/256GB-space
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="mb-0 fs-4">
                                                $120 <span class="text-muted">/499</span>
                                            </h5>
                                            <p class="text-muted mb-2">Full paid</p>
                                            <div class="progress bg-light w-100" style="height: 4px">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    aria-label="Example 4px high" style="width: 100%"
                                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <span
                                                class="badge rounded-pill fs-2 fw-medium bg-success-subtle text-success">Confirmed</span>
                                        </td>
                                        <td>
                                            <div class="dropdown dropstart">
                                                <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical fs-6"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center gap-3"
                                                            href="javascript:void(0)"><i
                                                                class="fs-4 ti ti-plus"></i>Add</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center gap-3"
                                                            href="javascript:void(0)"><i
                                                                class="fs-4 ti ti-edit"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center gap-3"
                                                            href="javascript:void(0)"><i
                                                                class="fs-4 ti ti-trash"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center product">
                                                <img src="../assets/images/products/s3.jpg"
                                                    class="img-fluid flex-shrink-0 rounded" width="60" height="60" />
                                                <div class="ms-3 product-title">
                                                    <h6 class="fs-3 mb-0 text-truncate-2">
                                                        PlayStation 5 DualSense Wireless Controller
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="mb-0 fs-4">
                                                $120 <span class="text-muted">/499</span>
                                            </h5>
                                            <p class="text-muted mb-2">Cancelled</p>
                                            <div class="progress bg-light w-100" style="height: 4px">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                    aria-label="Example 4px high" style="width: 100%"
                                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <span
                                                class="badge rounded-pill fs-2 fw-medium bg-danger-subtle text-danger">Cancelled</span>
                                        </td>
                                        <td>
                                            <div class="dropdown dropstart">
                                                <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical fs-6"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center gap-3"
                                                            href="javascript:void(0)"><i
                                                                class="fs-4 ti ti-plus"></i>Add</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center gap-3"
                                                            href="javascript:void(0)"><i
                                                                class="fs-4 ti ti-edit"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center gap-3"
                                                            href="javascript:void(0)"><i
                                                                class="fs-4 ti ti-trash"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center product">
                                                <img src="../assets/images/products/s5.jpg"
                                                    class="img-fluid flex-shrink-0 rounded" width="60" height="60" />
                                                <div class="ms-3 product-title">
                                                    <h6 class="fs-3 mb-0 text-truncate-2">
                                                        Amazon Basics Mesh, Mid-Back, Swivel Office
                                                        De...
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="mb-0 fs-4">
                                                $120 <span class="text-muted">/499</span>
                                            </h5>
                                            <p class="text-muted mb-2">Partially paid</p>
                                            <div class="progress bg-light w-100" style="height: 4px">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    aria-label="Example 4px high" style="width: 40%" aria-valuenow="40"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <span
                                                class="badge rounded-pill fs-2 fw-medium bg-secondary-subtle text-secondary">Confirmed</span>
                                        </td>
                                        <td>
                                            <div class="dropdown dropstart">
                                                <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical fs-6"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center gap-3"
                                                            href="javascript:void(0)"><i
                                                                class="fs-4 ti ti-plus"></i>Add</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center gap-3"
                                                            href="javascript:void(0)"><i
                                                                class="fs-4 ti ti-edit"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center gap-3"
                                                            href="javascript:void(0)"><i
                                                                class="fs-4 ti ti-trash"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="d-flex mb-3 justify-content-between align-items-center">
                            <h4 class="mb-0 card-title">Earning Reports</h4>
                            <div class="dropdown">
                                <button id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"
                                    class="rounded-circle btn-transparent rounded-circle btn-sm px-1 btn shadow-none">
                                    <i class="ti ti-dots-vertical fs-6"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">Another
                                            action</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else
                                            here</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex align-items-center justify-content-between py-10 border-bottom">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="rounded-circle-shape bg-primary-subtle me-3 rounded-pill d-inline-flex align-items-center justify-content-center">
                                        <iconify-icon icon="solar:card-line-duotone" class="fs-7 text-primary">
                                        </iconify-icon>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fs-3">Bank Transfer</h6>
                                        <p class="mb-0 fs-2 d-flex align-items-center gap-1">
                                            and +1 more<i class="ti ti-info-circle"></i></i>
                                        </p>
                                    </div>
                                </div>
                                <span
                                    class="badge rounded-pill fw-medium fs-2 d-flex align-items-center bg-success-subtle text-success text-end"><i
                                        class="ti ti-caret-up"></i>16.3%</span>
                            </li>

                            <li class="d-flex align-items-center justify-content-between py-10 border-bottom">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="rounded-circle-shape bg-danger-subtle me-3 rounded-pill d-inline-flex align-items-center justify-content-center">
                                        <iconify-icon icon="solar:wallet-2-line-duotone" class="fs-7 text-danger">
                                        </iconify-icon>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fs-3">Net Profit</h6>
                                        <p class="mb-0 fs-2 d-flex align-items-center gap-1">
                                            and +4 more<i class="ti ti-info-circle"></i></i>
                                        </p>
                                    </div>
                                </div>
                                <span
                                    class="badge rounded-pill fw-medium fs-2 d-flex align-items-center bg-success-subtle text-success text-end"><i
                                        class="ti ti-caret-up"></i>12.55%</span>
                            </li>

                            <li class="d-flex align-items-center justify-content-between py-10 border-bottom">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="rounded-circle-shape bg-secondary-subtle me-3 rounded-pill d-inline-flex align-items-center justify-content-center">
                                        <iconify-icon icon="solar:course-up-line-duotone" class="fs-7 text-secondary">
                                        </iconify-icon>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fs-3">Total Income</h6>
                                        <p class="mb-0 fs-2 d-flex align-items-center gap-1">
                                            and +4 more<i class="ti ti-info-circle"></i></i>
                                        </p>
                                    </div>
                                </div>
                                <span
                                    class="badge rounded-pill fw-medium fs-2 d-flex align-items-center bg-success-subtle text-success text-end"><i
                                        class="ti ti-caret-up"></i>12.55%</span>
                            </li>

                            <li class="d-flex align-items-center justify-content-between py-10 border-bottom">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="rounded-circle-shape bg-light me-3 rounded-pill d-inline-flex align-items-center justify-content-center">
                                        <iconify-icon icon="solar:waterdrops-line-duotone" class="fs-7 text-body-color">
                                        </iconify-icon>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fs-3">Total Expenses</h6>
                                        <p class="mb-0 fs-2 d-flex align-items-center gap-1">
                                            and +2 more<i class="ti ti-info-circle"></i></i>
                                        </p>
                                    </div>
                                </div>
                                <span
                                    class="badge rounded-pill fw-medium fs-2 d-flex align-items-center bg-success-subtle text-success text-end"><i
                                        class="ti ti-caret-up"></i>8.28%</span>
                            </li>

                            <li class="d-flex align-items-center justify-content-between py-10 border-bottom">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="rounded-circle-shape bg-warning-subtle me-3 rounded-pill d-inline-flex align-items-center justify-content-center">
                                        <iconify-icon icon="solar:waterdrops-line-duotone" class="fs-7 text-warning">
                                        </iconify-icon>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fs-3">Marketing</h6>
                                        <p class="mb-0 fs-2 d-flex align-items-center gap-1">
                                            and +3 more<i class="ti ti-info-circle"></i></i>
                                        </p>
                                    </div>
                                </div>
                                <span
                                    class="badge rounded-pill fw-medium fs-2 d-flex align-items-center bg-success-subtle text-success text-end"><i
                                        class="ti ti-caret-up"></i>9.25%</span>
                            </li>
                            <a href="javascript:void(0)" class="fs-4 mt-7 text-center d-block">View more
                                markets</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card overflow-hidden hover-img">
                    <div class="position-relative">
                        <a href="javascript:void(0)">
                            <img src="../assets/images/blog/blog-img1.jpg" class="card-img-top" alt="materialM-img">
                        </a>
                        <span
                            class="badge text-bg-light text-dark fs-2 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">2
                            min Read</span>
                        <img src="../assets/images/profile/user-3.jpg" alt="materialM-img"
                            class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40"
                            height="40" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-title="Georgeanna Ramero">
                    </div>
                    <div class="card-body p-4">
                        <span class="badge text-bg-light fs-2 py-1 px-2 lh-sm  mt-3">Social</span>
                        <a class="d-block my-4 fs-5 text-dark fw-semibold link-primary" href="">As yen
                            tumbles, gadget-loving
                            Japan goes
                            for secondhand iPhones</a>
                        <div class="d-flex align-items-center gap-4">
                            <div class="d-flex align-items-center gap-2">
                                <i class="ti ti-eye text-dark fs-5"></i>9,125
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="ti ti-message-2 text-dark fs-5"></i>3
                            </div>
                            <div class="d-flex align-items-center fs-2 ms-auto">
                                <i class="ti ti-point text-dark"></i>Mon, Dec 19
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card overflow-hidden hover-img">
                    <div class="position-relative">
                        <a href="javascript:void(0)">
                            <img src="../assets/images/blog/blog-img2.jpg" class="card-img-top" alt="materialM-img">
                        </a>
                        <span
                            class="badge text-bg-light text-dark fs-2 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">2
                            min Read</span>
                        <img src="../assets/images/profile/user-2.jpg" alt="materialM-img"
                            class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40"
                            height="40" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-title="Georgeanna Ramero">
                    </div>
                    <div class="card-body p-4">
                        <span class="badge text-bg-light fs-2 py-1 px-2 lh-sm  mt-3">Gadget</span>
                        <a class="d-block my-4 fs-5 text-dark fw-semibold link-primary" href="">Intel loses
                            bid to revive
                            antitrust case
                            against patent foe Fortress</a>
                        <div class="d-flex align-items-center gap-4">
                            <div class="d-flex align-items-center gap-2">
                                <i class="ti ti-eye text-dark fs-5"></i>4,150
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="ti ti-message-2 text-dark fs-5"></i>38
                            </div>
                            <div class="d-flex align-items-center fs-2 ms-auto">
                                <i class="ti ti-point text-dark"></i>Sun, Dec 18
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card overflow-hidden hover-img">
                    <div class="position-relative">
                        <a href="javascript:void(0)">
                            <img src="../assets/images/blog/blog-img3.jpg" class="card-img-top" alt="materialM-img">
                        </a>
                        <span
                            class="badge text-bg-light text-dark fs-2 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">2
                            min Read</span>
                        <img src="../assets/images/profile/user-3.jpg" alt="materialM-img"
                            class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40"
                            height="40" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-title="Georgeanna Ramero">
                    </div>
                    <div class="card-body p-4">
                        <span class="badge text-bg-light fs-2 py-1 px-2 lh-sm  mt-3">Health</span>
                        <a class="d-block my-4 fs-5 text-dark fw-semibold link-primary" href="">COVID
                            outbreak deepens as more
                            lockdowns
                            loom in China</a>
                        <div class="d-flex align-items-center gap-4">
                            <div class="d-flex align-items-center gap-2">
                                <i class="ti ti-eye text-dark fs-5"></i>9,480
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="ti ti-message-2 text-dark fs-5"></i>12
                            </div>
                            <div class="d-flex align-items-center fs-2 ms-auto">
                                <i class="ti ti-point text-dark"></i>Sat, Dec 17
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-6 px-6 text-center">
            <p class="mb-0 fs-4">Design and Developed by <a href="https://www.wrappixel.com/" target="_blank"
                    class="pe-1 text-primary text-decoration-underline">Wrappixel.com</a>
            </p>
        </div>
    </div>
</div>
@endsection