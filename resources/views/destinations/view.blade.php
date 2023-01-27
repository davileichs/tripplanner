<x-app-layout title='Destination' :assets="$assets ?? []"  isSelect2="true" isTour="true" isFlatpickr="true" isSwiperSlider="true" :isSidebar="true" isSweetalert="true">

    <!-- Fullcalender CSS -->
    <link rel='stylesheet' href="{{asset('vendor/fullcalendar/core/main.css')}}">
    <link rel='stylesheet' href="{{asset('vendor/fullcalendar/daygrid/main.css')}}">
    <link rel='stylesheet' href="{{asset('vendor/fullcalendar/timegrid/main.css')}}">
    <link rel='stylesheet' href="{{asset('vendor/fullcalendar/list/main.css')}}">

    <!-- Fullcalender Javascript -->
    <script src="{{asset('vendor/fullcalendar/core/main.js')}}"></script>
    <script src="{{asset('vendor/fullcalendar/daygrid/main.js')}}"></script>
    <script src="{{asset('vendor/fullcalendar/timegrid/main.js')}}"></script>
    <script src="{{asset('vendor/fullcalendar/list/main.js')}}"></script>
    <script src="{{asset('vendor/fullcalendar/interaction/main.js')}}"></script>
    <script src="{{asset('vendor/moment.min.js')}}"></script>
    <script src="{{asset('js/plugins/calender.js')}}"></script>



    <div class="row">

        <h4>Destination Overview</h4>

        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-primary mb-5" id="btn-addCity">Add City</button>

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="flex-wrap card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4>Leste Europeu</h4>

                                </div>
                            </div>
                            <div class="card-body">
                                @foreach($cities as $city)
                                <div class="d-flex align-items-top">
                                    <h6 class="mb-0 text-left">{{ $city->date }}</h6>
                                    <div class="profile-media ms-3 d-flex">
                                        <div class="profile-dots-pills border-{{ $city->border_color }}"></div>
                                        <div class="ms-3">
                                            <h6 class="mb-0">{{ $city->name }}</h6>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-8">
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <h2 class="mb-3">1.255€</h2>
                                                <h5>Travel Cost</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <h2 class="mb-3">25 days</h2>
                                                <h5>Visit Duration</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <h2 class="mb-3">11</h2>
                                                <h5>Cities</h5>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div col="col-12">

                                        <iframe class="w-100 " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902543.2003194243!2d-118.04220880485131!3d36.56083290513502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80be29b9f4abb783%3A0x4757dc6be1305318!2sInyo%20National%20Forest!5e0!3m2!1sen!2sin!4v1576668158879!5m2!1sen!2sin"  allowfullscreen=""></iframe>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>

    <div clas="row">
        <h4 class="mb-5">Destination Details</h4>

        <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Frankfurt</h4>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="nav nav-tabs" id="frankfurtTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="tranport-tab-frankfurt" data-bs-toggle="tab" href="#tranport-frankfurt" role="tab" aria-selected="true">Transport</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="accomodation-tab-frankfurt" data-bs-toggle="tab" href="#accomodation-frankfurt" role="tab" aria-selected="false" >Acommodation</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="food-tab-frankfurt" data-bs-toggle="tab" href="#food-frankfurt" role="tab" aria-selected="false">Food/Drinks</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="attractions-tab-frankfurt" data-bs-toggle="tab" href="#attractions-frankfurt" role="tab" aria-selected="false">Attractions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="extra-tab-frankfurt" data-bs-toggle="tab" href="#extra-frankfurt" role="tab" aria-selected="false">Extra</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="frankfurtTabContent">
                                        <div class="tab-pane fade show active" id="tranport-frankfurt" role="tabpanel" aria-labelledby="tranport-tab">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="table-responsive border rounded">
                                                            <table id="datatable" class="table table-striped" role="grid">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Type</th>
                                                                        <th>Name</th>
                                                                        <th>Price</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Flight</th>
                                                                        <th>Lufthansa</th>
                                                                        <th>€225</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Train</th>
                                                                        <th>RMV</th>
                                                                        <th>€5,10</th>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="tab-pane fade" id="accomodation-frankfurt" role="tabpanel" aria-labelledby="accomodation-tab-frankfurt">

                                            </div>
                                            <div class="tab-pane fade" id="food-frankfurt" role="tabpanel" aria-labelledby="food-tab-frankfurt">

                                            </div>
                                            <div class="tab-pane fade" id="attractions-frankfurt" role="tabpanel" aria-labelledby="attractions-tab-frankfurt">

                                            </div>
                                            <div class="tab-pane fade" id="extra-frankfurt" role="tabpanel" aria-labelledby="extra-tab-frankfurt">

                                            </div>
                                    </div>
                                    <button type="button" class="btn btn-primary ml-5" id="btn-addCost">Add Cost</button>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex gap flex-column">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="bg-soft-primary avatar-60 rounded">
                                                <svg class="icon-35" width="35" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M21.9964 8.37513H17.7618C15.7911 8.37859 14.1947 9.93514 14.1911 11.8566C14.1884 13.7823 15.7867 15.3458 17.7618 15.3484H22V15.6543C22 19.0136 19.9636 21 16.5173 21H7.48356C4.03644 21 2 19.0136 2 15.6543V8.33786C2 4.97862 4.03644 3 7.48356 3H16.5138C19.96 3 21.9964 4.97862 21.9964 8.33786V8.37513ZM6.73956 8.36733H12.3796H12.3831H12.3902C12.8124 8.36559 13.1538 8.03019 13.152 7.61765C13.1502 7.20598 12.8053 6.87318 12.3831 6.87491H6.73956C6.32 6.87664 5.97956 7.20858 5.97778 7.61852C5.976 8.03019 6.31733 8.36559 6.73956 8.36733Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.4"
                                                        d="M16.0374 12.2966C16.2465 13.2478 17.0805 13.917 18.0326 13.8996H21.2825C21.6787 13.8996 22 13.5715 22 13.166V10.6344C21.9991 10.2297 21.6787 9.90077 21.2825 9.8999H17.9561C16.8731 9.90338 15.9983 10.8024 16 11.9102C16 12.0398 16.0128 12.1695 16.0374 12.2966Z"
                                                        fill="currentColor"></path>
                                                    <circle cx="18" cy="11.8999" r="1" fill="currentColor">
                                                    </circle>
                                                </svg>
                                            </div>
                                            <div style="width: 100%;">
                                                <div class="d-flex justify-content-between  ">
                                                    <h6 class="mb-2">Transport</h6>
                                                    <h6 class="text-body">$250</h6>
                                                </div>
                                                <div class="progress bg-soft-primary shadow-none w-100" style="height: 6px">
                                                    <div class="progress-bar bg-primary" data-toggle="progress-bar"
                                                        role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                                        aria-valuemax="100" style="width: 80%;transition: width 2s ease 0s;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="bg-soft-info avatar-60 rounded">
                                                <svg class="icon-35" width="35" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M6.447 22C3.996 22 2 19.9698 2 17.4755V12.5144C2 10.0252 3.99 8 6.437 8L17.553 8C20.005 8 22 10.0302 22 12.5256V17.4846C22 19.9748 20.01 22 17.563 22H16.623H6.447Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M11.455 2.22103L8.54604 5.06682C8.24604 5.36094 8.24604 5.83427 8.54804 6.12742C8.85004 6.41959 9.33704 6.41862 9.63704 6.12547L11.23 4.56623V6.06119V14.4515C11.23 14.8654 11.575 15.2014 12 15.2014C12.426 15.2014 12.77 14.8654 12.77 14.4515V4.56623L14.363 6.12547C14.663 6.41862 15.15 6.41959 15.452 6.12742C15.603 5.98036 15.679 5.78849 15.679 5.59566C15.679 5.40477 15.603 5.21291 15.454 5.06682L12.546 2.22103C12.401 2.07981 12.205 1.99995 12 1.99995C11.796 1.99995 11.6 2.07981 11.455 2.22103Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </div>
                                            <div style="width: 100%;">
                                                <div class="d-flex justify-content-between  ">
                                                    <h6 class="mb-2">Accomodation</h6>
                                                    <h6 class="text-body">$0</h6>
                                                </div>
                                                <div class="progress bg-soft-info shadow-none w-100" style="height: 6px">
                                                    <div class="progress-bar bg-info" data-toggle="progress-bar"
                                                        role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                                        aria-valuemax="100" style="width: 0%;transition: width 2s ease 0s;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="bg-soft-success avatar-60 rounded">
                                                <svg class="icon-35" width="35" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M17.554 7.29614C20.005 7.29614 22 9.35594 22 11.8876V16.9199C22 19.4453 20.01 21.5 17.564 21.5L6.448 21.5C3.996 21.5 2 19.4412 2 16.9096V11.8773C2 9.35181 3.991 7.29614 6.438 7.29614H7.378L17.554 7.29614Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M12.5464 16.0374L15.4554 13.0695C15.7554 12.7627 15.7554 12.2691 15.4534 11.9634C15.1514 11.6587 14.6644 11.6597 14.3644 11.9654L12.7714 13.5905L12.7714 3.2821C12.7714 2.85042 12.4264 2.5 12.0004 2.5C11.5754 2.5 11.2314 2.85042 11.2314 3.2821L11.2314 13.5905L9.63742 11.9654C9.33742 11.6597 8.85043 11.6587 8.54843 11.9634C8.39743 12.1168 8.32142 12.3168 8.32142 12.518C8.32142 12.717 8.39743 12.9171 8.54643 13.0695L11.4554 16.0374C11.6004 16.1847 11.7964 16.268 12.0004 16.268C12.2054 16.268 12.4014 16.1847 12.5464 16.0374Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </div>
                                            <div style="width: 100%;">
                                                <div class="d-flex justify-content-between  ">
                                                    <h6 class="mb-2">Food/Drinks</h6>
                                                    <h6 class="text-body">$5</h6>
                                                </div>
                                                <div class="progress bg-soft-success shadow-none w-100" style="height: 6px">
                                                    <div class="progress-bar bg-success" data-toggle="progress-bar"
                                                        role="progressbar" aria-valuenow="5" aria-valuemin="0"
                                                        aria-valuemax="100" style="width: 5%;transition: width 2s ease 0s;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="bg-soft-danger avatar-60 rounded">
                                                <svg class="icon-35" width="35" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M21.9964 8.37513H17.7618C15.7911 8.37859 14.1947 9.93514 14.1911 11.8566C14.1884 13.7823 15.7867 15.3458 17.7618 15.3484H22V15.6543C22 19.0136 19.9636 21 16.5173 21H7.48356C4.03644 21 2 19.0136 2 15.6543V8.33786C2 4.97862 4.03644 3 7.48356 3H16.5138C19.96 3 21.9964 4.97862 21.9964 8.33786V8.37513ZM6.73956 8.36733H12.3796H12.3831H12.3902C12.8124 8.36559 13.1538 8.03019 13.152 7.61765C13.1502 7.20598 12.8053 6.87318 12.3831 6.87491H6.73956C6.32 6.87664 5.97956 7.20858 5.97778 7.61852C5.976 8.03019 6.31733 8.36559 6.73956 8.36733Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.4"
                                                        d="M16.0374 12.2966C16.2465 13.2478 17.0805 13.917 18.0326 13.8996H21.2825C21.6787 13.8996 22 13.5715 22 13.166V10.6344C21.9991 10.2297 21.6787 9.90077 21.2825 9.8999H17.9561C16.8731 9.90338 15.9983 10.8024 16 11.9102C16 12.0398 16.0128 12.1695 16.0374 12.2966Z"
                                                        fill="currentColor"></path>
                                                    <circle cx="18" cy="11.8999" r="1" fill="currentColor">
                                                    </circle>
                                                </svg>
                                            </div>
                                            <div style="width: 100%;">
                                                <div class="d-flex justify-content-between  ">
                                                    <h6 class="mb-2">Extra</h6>
                                                    <h6 class="text-body">$1</h6>
                                                </div>
                                                <div class="progress bg-soft-danger shadow-none w-100" style="height: 6px">
                                                    <div class="progress-bar bg-danger" data-toggle="progress-bar"
                                                        role="progressbar" aria-valuenow="5" aria-valuemin="0"
                                                        aria-valuemax="100" style="width: 5%;transition: width 2s ease 0s;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                </div>


        </div>

    </div>
<!--
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card  ">
                        <div class="card-body">
                            <div id="calendar1" class="calendar-s calender-one"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 -->
</x-app-layout>
