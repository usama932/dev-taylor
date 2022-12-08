<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ trans('panel.site_title') }}</title>
      <link rel="shortcut icon" href="../../assets/img/favicon.ico" />
      <link
         rel="apple-touch-icon"
         sizes="76x76"
         href="../../assets/img/apple-icon.png"
         />
      <link
         rel="stylesheet"
         href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
         />
         <script src="https://cdn.tailwindcss.com"></script>
      <link rel="stylesheet" href="../../assets/styles/tailwind.css" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
      <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
      <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
      <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
      <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
      <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/css/perfect-scrollbar.min.css" rel="stylesheet" />
      {{-- 
      <link href="{{ asset('css/custom1.css') }}" rel="stylesheet" />
      --}}
      @yield('styles')
   </head>
   <body class="text-blueGray-700 antialiased">
      <div id="root">
      <nav
         class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
         <div
            class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto"
            >
            <button
               class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
               type="button"
               onclick="toggleNavbar('example-collapse-sidebar')"
               >
            <i class="fas fa-bars"></i>
            </button>
            <a
               class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
               href="/"
               >
            {{ trans('panel.site_title') }}
            </a>
            <ul class="md:hidden items-center flex flex-wrap list-none">
               <li class="inline-block relative">
                  <a
                     class="text-blueGray-500 block py-1 px-3"
                     href="#pablo"
                     onclick="openDropdown(event,'notification-dropdown')"
                     ><i class="fas fa-bell"></i
                     ></a>
                  <div
                     class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                     id="notification-dropdown"
                     >
                     <a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                        >Action</a
                        ><a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                        >Another action</a
                        ><a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                        >Something else here</a
                        >
                     <div
                        class="h-0 my-2 border border-solid border-blueGray-100"
                        ></div>
                     <a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                        >Seprated link</a
                        >
                  </div>
               </li>
               <li class="inline-block relative">
                  <a
                     class="text-blueGray-500 block"
                     href="#pablo"
                     onclick="openDropdown(event,'user-responsive-dropdown')"
                     >
                     <div class="items-center flex">
                        <span
                           class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"
                           ><img
                           alt="..."
                           class="w-full rounded-full align-middle border-none shadow-lg"
                           src="../../assets/img/team-1-800x800.jpg"
                           /></span>
                     </div
                        >
                  </a>
                  <div
                     class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                     id="user-responsive-dropdown"
                     >
                     <a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                        >Action</a
                        ><a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                        >Another action</a
                        ><a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                        >Something else here</a
                        >
                     <div
                        class="h-0 my-2 border border-solid border-blueGray-100"
                        ></div>
                     <a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                        >Seprated link</a
                        >
                  </div>
               </li>
            </ul>
            <div
               class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
               id="example-collapse-sidebar"
               >
               <div
                  class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200"
                  >
                  <div class="flex flex-wrap">
                     <div class="w-6/12">
                        <a
                           class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
                           href="../../index.html"
                           >
                        Notus Tailwind JS
                        </a>
                     </div>
                     <div class="w-6/12 flex justify-end">
                        <button
                           type="button"
                           class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                           onclick="toggleNavbar('example-collapse-sidebar')"
                           >
                        <i class="fas fa-times"></i>
                        </button>
                     </div>
                  </div>
               </div>
               <form class="mt-6 mb-4 md:hidden">
                  <div class="mb-3 pt-0">
                     <input
                        type="text"
                        placeholder="Search"
                        class="border-0 px-3 py-2 h-12 border border-solid border-blueGray-500 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal"
                        />
                  </div>
               </form>
               <!-- Divider -->
               <hr class="my-4 md:min-w-full" />
               <!-- Heading -->
               <h6
                  class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
                  >
                  Admin Layout Pages
               </h6>
               <!-- Navigation -->
               <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                  <li class="items-center">
                     <a
                        href="{{ route("admin.home") }}"
                        class="text-xs uppercase py-3 font-bold block text-pink-500 hover:text-pink-600 "  href="{{ route("admin.home") }}"
                        >
                       <i class="fas fa-fw fa-tachometer-alt mr-2"></i>
                      Dashboard
                     </a>
                  </li>
                  @can('content_page_access')
                    <li class="items-center">
                      <a
                          href="{{ route("admin.content-pages.index") }}"
                          class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500"
                          >
                      <i class="fa-fw fas fa-file mr-2"></i>

                      {{ trans('cruds.contentPage.title') }}
                      </a>
                    </li>
                  @endcan
                  @can('what_we_do_access')
                    <li class="items-center">
                      <a
                          href="{{ route("admin.what-we-dos.index") }}"
                          class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500"
                          >
                        <i class="fa-fw fas fa-briefcase  mr-2">
                        </i>

                      {{ trans('cruds.whatWeDo.title') }}
                      </a>
                    </li>
                  @endcan
                  @can('content_category_access')
                    <li class="items-center">
                      <a
                          href="{{ route("admin.content-categories.index") }}"
                          class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500"
                          >
                        <i class="fa-fw fas fa-sitemap mr-2"> </i>
                      {{ trans('cruds.contentCategory.title') }}
                      </a>
                    </li>
                  @endcan
                  @can('content_tag_access')
                    <li class="items-center">
                      <a
                          href="{{ route("admin.content-tags.index") }}"
                          class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500"
                          >
                       <i class="fa-fw fas fa-tags mr-2"></i>
                      {{ trans('cruds.contentTag.title') }}
                      </a>
                    </li>
                  @endcan
                  @can('case_study_access')
                    <li class="items-center">
                      <a
                         href="{{ route("admin.case-studies.index") }}"
                          class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500"
                          >
                       <i class="fa-fw fas fa-tags mr-2"></i>
                      {{ trans('cruds.caseStudy.title') }}
                      </a>
                    </li>
                  @endcan
                  @can('team_member_access')
                    <li class="items-center">
                      <a
                         href="{{ route("admin.team-members.index") }}"
                          class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500"
                          >
                      <i class="fa-fw fas fa-users mr-2">

                      </i>
                      {{ trans('cruds.teamMember.title') }}
                      </a>
                    </li>
                  @endcan
                  @can('company_access')
                    <li class="items-center">
                      <a
                         href="{{ route("admin.companies.index") }}"
                          class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500"
                          >
                      <i class="fa-fw fas fa-building mr-2"></i>

                      </i>
                      {{ trans('cruds.company.title') }}
                      </a>
                    </li>
                  @endcan
                  @can('page_custom_field_access')
                    <li class="items-center">
                      <a class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500"
                        href="{{ route("admin.page-custom-fields.index") }}" >
                      <i class="fa-fw fas fa-cogs mr-2"> </i>
                      {{ trans('cruds.pageCustomField.title') }}
                      </a>
                    </li>
                  @endcan
                  @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                    @can('profile_password_edit')
                    <li class="items-center">
                    <a class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500"  href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key"></i>
                        {{ trans('global.change_password') }}
                        </a>
                    </li>
                    @endcan
                  @endif
                  <li class="items-center">
                    <a class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500" href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                      <i class="fa-fw fas fa-sign-out-alt"></i>

                      {{ trans('global.logout') }}
                    </a>
                  <li>
                
               </ul>
              
            </div>
         </div>
      </nav>
      <div class="relative md:ml-64 bg-blueGray-50">
         <nav
            class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4"
            >
            <div
               class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4"
               >
               <a
                  class="text-white text-sm uppercase hidden lg:inline-block font-semibold"
                  href="./index.html"
                  >Dashboard</a
                  >

            </div>
         </nav>
         <div class="relative  md:pt-32 pb-16 pt-12" style="background-color:#ffc200">
            <div class="px-4 md:px-10 mx-auto w-full">
            
            </div>
         </div>
         @yield('content')
      </div>
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"></script>
      <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
      <script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
      <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
      <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
      <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
      <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
      <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
      {{-- <script src="{{ asset('js/main.js') }}"></script> --}}
      <script>
         $(function() {
         {{-- let copyButtonTrans = '{{ trans('global.datatables.copy') }}'
         let csvButtonTrans = '{{ trans('global.datatables.csv') }}'
         let excelButtonTrans = '{{ trans('global.datatables.excel') }}'
         let pdfButtonTrans = '{{ trans('global.datatables.pdf') }}'
         let printButtonTrans = '{{ trans('global.datatables.print') }}'
         let colvisButtonTrans = '{{ trans('global.datatables.colvis') }}'
         let selectAllButtonTrans = '{{ trans('global.select_all') }}'
         let selectNoneButtonTrans = '{{ trans('global.deselect_all') }}' --}}
         
         let languages = {
         'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json'
         };
         
         $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, { className: 'btn-md' })
         $.extend(true, $.fn.dataTable.defaults, {
         responsive: true,
         language: {
         url: languages['{{ app()->getLocale() }}']
         },
         columnDefs: [{
         orderable: false,
         className: 'select-checkbox',
         targets: 0
         }, {
         orderable: false,
         searchable: false,
         targets: -1
         }],
         select: {
         style:    'multi+shift',
         selector: 'td:first-child'
         },
         order: [],
         scrollX: true,
         pageLength: 100,
         dom: 'lBfrtip<"actions">',
         buttons: [
         {
         extend: 'selectAll',
         className: 'btn-indigo',
         text: selectAllButtonTrans,
         exportOptions: {
           columns: ':visible'
         },
         action: function(e, dt) {
           e.preventDefault()
           dt.rows().deselect();
           dt.rows({ search: 'applied' }).select();
         }
         },
         {
         extend: 'selectNone',
         className: 'btn-indigo',
         text: selectNoneButtonTrans,
         exportOptions: {
           columns: ':visible'
         }
         },
         {
         extend: 'copy',
         className: 'btn-gray',
         text: copyButtonTrans,
         exportOptions: {
           columns: ':visible'
         }
         },
         {
         extend: 'csv',
         className: 'btn-gray',
         text: csvButtonTrans,
         exportOptions: {
           columns: ':visible'
         }
         },
         {
         extend: 'excel',
         className: 'btn-gray',
         text: excelButtonTrans,
         exportOptions: {
           columns: ':visible'
         }
         },
         {
         extend: 'pdf',
         className: 'btn-gray',
         text: pdfButtonTrans,
         exportOptions: {
           columns: ':visible'
         }
         },
         {
         extend: 'print',
         className: 'btn-gray',
         text: printButtonTrans,
         exportOptions: {
           columns: ':visible'
         }
         },
         {
         extend: 'colvis',
         className: 'btn-gray',
         text: colvisButtonTrans,
         exportOptions: {
           columns: ':visible'
         }
         }
         ]
         });
         });
         
      </script>
      @yield('scripts')
          <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      charset="utf-8"
    ></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script type="text/javascript">
      /* Make dynamic date appear */
      (function () {
        if (document.getElementById("get-current-year")) {
          document.getElementById("get-current-year").innerHTML =
            new Date().getFullYear();
        }
      })();
      /* Sidebar - Side navigation menu on mobile/responsive mode */
      function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("bg-white");
        document.getElementById(collapseID).classList.toggle("m-2");
        document.getElementById(collapseID).classList.toggle("py-3");
        document.getElementById(collapseID).classList.toggle("px-6");
      }
      /* Function for dropdowns */
      function openDropdown(event, dropdownID) {
        let element = event.target;
        while (element.nodeName !== "A") {
          element = element.parentNode;
        }
        Popper.createPopper(element, document.getElementById(dropdownID), {
          placement: "bottom-start"
        });
        document.getElementById(dropdownID).classList.toggle("hidden");
        document.getElementById(dropdownID).classList.toggle("block");
      }

      (function () {
        /* Chart initialisations */
        /* Line Chart */
        var config = {
          type: "line",
          data: {
            labels: [
              "January",
              "February",
              "March",
              "April",
              "May",
              "June",
              "July"
            ],
            datasets: [
              {
                label: new Date().getFullYear(),
                backgroundColor: "#4c51bf",
                borderColor: "#4c51bf",
                data: [65, 78, 66, 44, 56, 67, 75],
                fill: false
              },
              {
                label: new Date().getFullYear() - 1,
                fill: false,
                backgroundColor: "#fff",
                borderColor: "#fff",
                data: [40, 68, 86, 74, 56, 60, 87]
              }
            ]
          },
          options: {
            maintainAspectRatio: false,
            responsive: true,
            title: {
              display: false,
              text: "Sales Charts",
              fontColor: "white"
            },
            legend: {
              labels: {
                fontColor: "white"
              },
              align: "end",
              position: "bottom"
            },
            tooltips: {
              mode: "index",
              intersect: false
            },
            hover: {
              mode: "nearest",
              intersect: true
            },
            scales: {
              xAxes: [
                {
                  ticks: {
                    fontColor: "rgba(255,255,255,.7)"
                  },
                  display: true,
                  scaleLabel: {
                    display: false,
                    labelString: "Month",
                    fontColor: "white"
                  },
                  gridLines: {
                    display: false,
                    borderDash: [2],
                    borderDashOffset: [2],
                    color: "rgba(33, 37, 41, 0.3)",
                    zeroLineColor: "rgba(0, 0, 0, 0)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2]
                  }
                }
              ],
              yAxes: [
                {
                  ticks: {
                    fontColor: "rgba(255,255,255,.7)"
                  },
                  display: true,
                  scaleLabel: {
                    display: false,
                    labelString: "Value",
                    fontColor: "white"
                  },
                  gridLines: {
                    borderDash: [3],
                    borderDashOffset: [3],
                    drawBorder: false,
                    color: "rgba(255, 255, 255, 0.15)",
                    zeroLineColor: "rgba(33, 37, 41, 0)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2]
                  }
                }
              ]
            }
          }
        };
        var ctx = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(ctx, config);

        /* Bar Chart */
        config = {
          type: "bar",
          data: {
            labels: [
              "January",
              "February",
              "March",
              "April",
              "May",
              "June",
              "July"
            ],
            datasets: [
              {
                label: new Date().getFullYear(),
                backgroundColor: "#ed64a6",
                borderColor: "#ed64a6",
                data: [30, 78, 56, 34, 100, 45, 13],
                fill: false,
                barThickness: 8
              },
              {
                label: new Date().getFullYear() - 1,
                fill: false,
                backgroundColor: "#4c51bf",
                borderColor: "#4c51bf",
                data: [27, 68, 86, 74, 10, 4, 87],
                barThickness: 8
              }
            ]
          },
          options: {
            maintainAspectRatio: false,
            responsive: true,
            title: {
              display: false,
              text: "Orders Chart"
            },
            tooltips: {
              mode: "index",
              intersect: false
            },
            hover: {
              mode: "nearest",
              intersect: true
            },
            legend: {
              labels: {
                fontColor: "rgba(0,0,0,.4)"
              },
              align: "end",
              position: "bottom"
            },
            scales: {
              xAxes: [
                {
                  display: false,
                  scaleLabel: {
                    display: true,
                    labelString: "Month"
                  },
                  gridLines: {
                    borderDash: [2],
                    borderDashOffset: [2],
                    color: "rgba(33, 37, 41, 0.3)",
                    zeroLineColor: "rgba(33, 37, 41, 0.3)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2]
                  }
                }
              ],
              yAxes: [
                {
                  display: true,
                  scaleLabel: {
                    display: false,
                    labelString: "Value"
                  },
                  gridLines: {
                    borderDash: [2],
                    drawBorder: false,
                    borderDashOffset: [2],
                    color: "rgba(33, 37, 41, 0.2)",
                    zeroLineColor: "rgba(33, 37, 41, 0.15)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2]
                  }
                }
              ]
            }
          }
        };
        ctx = document.getElementById("bar-chart").getContext("2d");
        window.myBar = new Chart(ctx, config);
      })();
    </script>
   </body>
</html>