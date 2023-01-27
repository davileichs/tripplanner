<x-app-layout title='Destination' :assets="$assets ?? []"  isSelect2="true" isTour="true" isFlatpickr="true" isSwiperSlider="true" :isSidebar="true">

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
                <button type="button" class="btn btn-primary mb-5"  data-bs-toggle="modal" data-bs-target="#modalAddCity">Add City</button>

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="flex-wrap card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4>{{ $destination->name }} </h4>

                                </div>
                            </div>
                            <div class="card-body">
                                @foreach($destination->cities as $city)
                                <div class="d-flex align-items-top">
                                    <h6 class="mb-0 text-left">{{ $city->date_ini }}</h6>
                                    <div class="profile-media ms-3 d-flex">
                                        <div class="profile-dots-pills border-{{ $city->color }}"></div>
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
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <h2 class="mb-3">@money($destination->totalCost)</h2>
                                                <h5>Travel Cost</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <h2 class="mb-3">{{ $destination->totalDays }} days</h2>
                                                <h5>Visit Duration</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <h2 class="mb-3">{{ $destination->totalCities }}</h2>
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

        @foreach($destination->cities as $city)
            <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">{{ $city->name }}</h4>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="nav nav-tabs" id="{{ $city->slug }}Tab" role="tablist">
                                        @foreach ($costtabs as $tab)
                                        <li class="nav-item">
                                            <a class="nav-link {{ ($loop->first) ? 'active' : '' }}" id="{{ $tab->slug }}-tab-{{ $city->slug }}" data-bs-toggle="tab" href="#{{ $tab->slug }}-{{ $city->slug }}" role="tab" aria-selected="true">{{ $tab->name }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    <div class="tab-content" id="{{ $city->slug }}TabContent">

                                        @foreach ($costtabs as $tab)
                                        <div class="tab-pane fade show {{ ($loop->first) ? 'active' : '' }}" id="{{ $tab->slug }}-{{ $city->slug }}" role="tabpanel" aria-labelledby="{{ $tab->slug }}-tab">
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
                                                                @foreach ($city->costs->where('cost_tab_id', $tab->id) as $cost)
                                                                    <tr>
                                                                        <th>{{ $cost->type }}</th>
                                                                        <th>{{ $cost->name }}</th>
                                                                        <th>{{ $cost->price_formated }}</th>
                                                                    </tr>
                                                                @endforeach

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-primary ml-5" data-bs-toggle="modal" data-bs-target="#modalAddCost{{ $city->slug }}">Add Cost</button>
                                        </div>

                                        @endforeach
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex gap flex-column">
                                        @foreach ($costtabs as $tab)
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="bg-soft-{{ $tab->color }} avatar-60 rounded">
                                                <i class="fa-solid {{ $tab->icon }}"></i>
                                            </div>
                                            <div style="width: 100%;">
                                                <div style="width: 100%;">
                                                    <div class="d-flex justify-content-between  ">
                                                        <h6 class="mb-2">{{ $tab->name }}</h6>
                                                        <h6 class="text-body">{{ $city->avgCostTab($tab)['avg'] }}</h6>
                                                    </div>
                                                    <div class="progress bg-soft-{{ $tab->color }} shadow-none w-100" style="height: 6px">
                                                        <div class="progress-bar bg-{{ $tab->color }}" data-toggle="progress-bar"
                                                            role="progressbar" aria-valuenow="{{ $city->avgCostTab($tab)['percentage'] }}" aria-valuemin="0"
                                                            aria-valuemax="100" style="width: {{ $city->avgCostTab($tab)['percentage'] }}%;transition: width 2s ease 0s;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                </div>
            </div>


        @endforeach

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

 <!-- Modal components -->
<div class="modal fade" id="modalAddCity" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title" id="cityLabel">New city</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
             </button>
          </div>
          <form method="POST" action="{{ route('city.store')}}">
            @csrf
          <div class="modal-body">

            <input type="text" class="form-control" name="name" placeholder="name">
            <div class="form-group">
                <label class="form-label" for="date_start">Date start</label>
                <input type="date" class="form-control" name="date_ini" id="date_ini" price="">
            </div>
            <div class="form-group">
                <label class="form-label" for="date_end">Date end</label>
                <input type="date" class="form-control" name="date_end" id="date_end" price="">
            </div>
            <input type="hidden" name="destination_id" price="{{ $destination->id }}" />
          </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-primary" name="submit" price="Submit">Save</button>
          </div>
        </form>
       </div>
    </div>
 </div>
 @foreach ($destination->cities as $city)
    @include('components.modal-cost', ['city' => $city])
 @endforeach

</x-app-layout>
