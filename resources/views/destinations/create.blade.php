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
                <form method="POST" action="{{ route('destination.store')}}">
                    @csrf
                    <input type="text" name="name">

                    <input type="submit" value="OK">
                </form>
            </div>

        </div>
    </div>



</x-app-layout>
