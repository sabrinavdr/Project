<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta
            name="description"
            content="Responsive HTML Admin Dashboard Template based on Bootstrap 5"
        />
        <meta name="author" content="NobleUI" />
        <meta
            name="keywords"
            content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web"
        />

        <title>Dashboard Admin</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
            rel="stylesheet"
        />
        <!-- End fonts -->

        <!-- core:css -->
        <link
            rel="stylesheet"
            href="{{ asset('template-admin/assets/vendors/core/core.css') }}"
        />
        <!-- endinject -->

        <!-- Plugin css for this page -->
        <link
            rel="stylesheet"
            href="{{
                asset(
                    'template-admin/assets/vendors/flatpickr/flatpickr.min.css'
                )
            }}"
        />
        <link rel="stylesheet" href="{{
                asset(
                    'template-admin/assets/vendors/sweetalert2/sweetalert2.min.css'
                )
            }}">
        <!-- End plugin css for this page -->

        <!-- inject:css -->
        <link
            rel="stylesheet"
            href="{{
                asset(
                    'template-admin/assets/fonts/feather-font/css/iconfont.css'
                )
            }}"
        />
        <link
            rel="stylesheet"
            href="{{
                asset(
                    'template-admin/assets/vendors/flag-icon-css/css/flag-icon.min.css'
                )
            }}"
        />
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link
            rel="stylesheet"
            href="{{
                asset(
                    'template-admin/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css'
                )
            }}"
        />

        <link
            rel="shortcut icon"
            href="{{ asset('images/LogoInternalAudit.jpeg') }}"
        />

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"
        />

        <!-- Form CSS Demo 1 New -->

        <!-- Plugin css for this page -->
        <link
            rel="stylesheet"
            href="{{
                asset('template-admin/assets/vendors/select2/select2.min.css')
            }}"
        />
        <link
            rel="stylesheet"
            href="{{
                asset(
                    'template-admin/assets/vendors/jquery-tags-input/jquery.tagsinput.min.css'
                )
            }}"
        />
        <link
            rel="stylesheet"
            href="{{
                asset('template-admin/assets/vendors/dropzone/dropzone.min.css')
            }}"
        />
        <link
            rel="stylesheet"
            href="{{
                asset(
                    'template-admin/assets/vendors/dropify/dist/dropify.min.css'
                )
            }}"
        />
        <link
            rel="stylesheet"
            href="{{
                asset(
                    'template-admin/assets/vendors/pickr/themes/classic.min.css'
                )
            }}"
        />
        <link
            rel="stylesheet"
            href="{{
                asset(
                    'template-admin/assets/vendors/font-awesome/css/font-awesome.min.css'
                )
            }}"
        />
        <link
            rel="stylesheet"
            href="{{
                asset(
                    'template-admin/assets/vendors/flatpickr/flatpickr.min.css')
            }}"
        />
        <!-- End plugin css for this page -->

        <!-- Layout styles -->
        <link
            rel="stylesheet"
            href="{{ asset('template-admin/assets/css/demo1/style.css') }}"
        />
        <!-- End layout styles -->
        <!-- End CSS Demo 1 -->

        <!-- End plugin css for this page -->
    </head>
    <body>
        <!-- @stack('before-content') -->
        @yield('content')

        <!-- core:js -->
        <script src="{{
                asset('template-admin/assets/vendors/core/core.js')
            }}"></script>

        <!-- endinject -->

        <!-- Plugin js for this page -->
        <script src="{{
                asset('template-admin/assets/vendors/flatpickr/flatpickr.min.js')
            }}"></script>
        <script src="{{
                asset(
                    'template-admin/assets/vendors/apexcharts/apexcharts.min.js'
                )
            }}"></script>
        <!-- End plugin js for this page -->

        <!-- inject:js -->
        <script src="{{
                asset(
                    'template-admin/assets/vendors/feather-icons/feather.min.js'
                )
            }}"></script>
        <script src="{{
                asset('template-admin/assets/js/template.js')
            }}"></script>
        <!-- endinject -->

        <!-- Custom js for this page -->
        <script src="{{
                asset('template-admin/assets/js/dashboard-light.js')
            }}"></script>
        <!-- End custom js for this page -->

        <!-- jsDatatables -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
        <!-- endJsDatatables -->

        <!-- Lottie Files -->
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <!-- End Lottie -->

        <!-- Plugin js for this page -->
        <script src="{{
                asset(
                    'template-admin/assets/vendors/datatables.net/jquery.dataTables.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'template-admin/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js'
                )
            }}"></script>
        <!-- End plugin js for this page -->
        <!-- Plugin js for this page -->
        <script src="{{
                asset(
                    'template-admin/assets/vendors/jquery-validation/jquery.validate.min.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'template-admin/assets/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'template-admin/assets/vendors/inputmask/jquery.inputmask.min.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'template-admin/assets/vendors/select2/select2.min.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'template-admin/assets/vendors/typeahead.js/typeahead.bundle.min.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'template-admin/assets/vendors/jquery-tags-input/jquery.tagsinput.min.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'template-admin/assets/vendors/dropzone/dropzone.min.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'template-admin/assets/vendors/dropify/dist/dropify.min.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'template-admin/assets/vendors/pickr/pickr.min.js')
            }}"></script>
        <script src="{{
                asset(
                    'template-admin/assets/vendors/moment/moment.min.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'template-admin/assets/vendors/flatpickr/flatpickr.min.js'
                )
            }}"></script>
            <script src="{{
                asset(
                    'template-admin/assets/vendors/sweetalert2/sweetalert2.min.js')
            }}"></script>
        <!-- End plugin js for this page -->

        <!-- inject:js -->
        <script src="{{
                asset(
                    'template-admin/assets/vendors/feather-icons/feather.min.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'template-admin/assets/js/template.js'
                )
            }}"></script>
        <!-- endinject -->

        <!-- Custom js for this page -->
        <script src="{{
                asset(
                    'template-admin/assets/js/form-validation.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'template-admin/assets/js/bootstrap-maxlength.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'template-admin/assets/js/inputmask.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'template-admin/assets/js/select2.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'template-admin/assets/js/typeahead.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'template-admin/assets/js/tags-input.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'template-admin/assets/js/dropzone.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'template-admin/assets/js/dropify.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'template-admin/assets/js/pickr.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'template-admin/assets/js/flatpickr.js'
                )
            }}"></script>
            <script src="{{
                asset(
                    'template-admin/assets/js/sweet-alert.js'
                )
            }}"></script>
        <!-- End custom js for this page -->

            
    </body>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#example").DataTable();
        });
    </script>

    <!-- Progress Barr Js Perintah Audit-->
    <script>
        $(document).ready(function () {
            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;
            var current = 1;
            var steps = $("fieldset").length;

            setProgressBar(current);

            $(".next").click(function () {
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li")
                    .eq($("fieldset").index(next_fs))
                    .addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate(
                    { opacity: 0 },
                    {
                        step: function (now) {
                            // for making fielset appear animation
                            opacity = 1 - now;

                            current_fs.css({
                                display: "none",
                                position: "relative",
                            });
                            next_fs.css({ opacity: opacity });
                        },
                        duration: 500,
                    }
                );
                setProgressBar(++current);
            });

            $(".previous").click(function () {
                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li")
                    .eq($("fieldset").index(current_fs))
                    .removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate(
                    { opacity: 0 },
                    {
                        step: function (now) {
                            // for making fielset appear animation
                            opacity = 1 - now;

                            current_fs.css({
                                display: "none",
                                position: "relative",
                            });
                            previous_fs.css({ opacity: opacity });
                        },
                        duration: 500,
                    }
                );
                setProgressBar(--current);
            });

            function setProgressBar(curStep) {
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar").css("width", percent + "%");
            }

            $(".submit").click(function () {
                return false;
            });
        });
    </script>

    <!-- JS DELETE DATA -->
    <script>
        function hapus() {
            return alert("Yakin hapus?");
        }
    </script>
    <!-- END JS DELET DATA -->
    <!-- select data JS -->
    <script src="{{ asset('template-admin/assets/js/select2.js') }}"></script>
    <script src="{{
            asset('template-admin/assets/vendors/select2/select2.min.js')
        }}"></script>
    <!-- end select js -->
</html>

<!-- Modal -->
<div
    class="modal fade"
    id="exampleModal"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    Hapus Data
                </h1>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">Yakin Hapus?</div>
            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-primary"
                    data-bs-dismiss="modal"
                >
                    Yes
                </button>
                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal"
                >
                    No
                </button>
            </div>
        </div>
    </div>
</div>