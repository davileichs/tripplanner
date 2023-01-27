<x-app-layout :assets="$assets ?? []" title="Home" isSelect2="true" isFlatpickr="true"
     :isBanner="false" >
    <div class="row">

    @foreach($destinations as $destination)
    <div class="col-lg-4">
        <div class="card  h-100">
            <div class="card-header d-flex align-items-center justify-content-between pb-4">
                <div class="header-title">
                    <div class="d-flex flex-wrap">
                        <div class="media-support-info mt-2">
                            <h5 class="mb-0"><a href="{{ route('destination.show', $destination )}}"> {{ $destination->name }}</a></h5>
                            <p class="mb-0 text-primary">{{ $destination->date_ini }} - {{ $destination->date_end }}</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-body p-0">
                <div class="">
                    <a href="{{ route('destination.show', $destination )}}"><img src="{{ asset('images/pages/03-page.jpg') }}"
                            alt="post-image" class="img-fluid"></a>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <div class="col-lg-4">
        <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between pb-4">
                <div class="header-title">
                    <div class="d-flex flex-wrap">
                        <div class="media-support-info mt-2">
                            <h5 class="mb-0"></h5>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-body p-0 d-flex align-self-center">
                <div class="user-post align-self-center" data-bs-toggle="modal" data-bs-target="#modalAddDestination">

                    <a href="javascript:void(0);"><svg class="icon-128" width="72" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.33 2H16.66C20.06 2 22 3.92 22 7.33V16.67C22 20.06 20.07 22 16.67 22H7.33C3.92 22 2 20.06 2 16.67V7.33C2 3.92 3.92 2 7.33 2ZM12.82 12.83H15.66C16.12 12.82 16.49 12.45 16.49 11.99C16.49 11.53 16.12 11.16 15.66 11.16H12.82V8.34C12.82 7.88 12.45 7.51 11.99 7.51C11.53 7.51 11.16 7.88 11.16 8.34V11.16H8.33C8.11 11.16 7.9 11.25 7.74 11.4C7.59 11.56 7.5 11.769 7.5 11.99C7.5 12.45 7.87 12.82 8.33 12.83H11.16V15.66C11.16 16.12 11.53 16.49 11.99 16.49C12.45 16.49 12.82 16.12 12.82 15.66V12.83Z" fill="currentColor"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

    </div>

</div>

<!-- Modal components -->
<div class="modal fade" id="modalAddDestination" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title" id="destinationLabel">New Destination</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
             </button>
          </div>
          <form method="POST" action="{{ route('destination.store')}}">
            @csrf
          <div class="modal-body">

            <input type="text" class="form-control" name="name" placeholder="Name">
            <div class="form-group">
                <label class="form-label" for="date_start">Date start</label>
                <input type="date" class="form-control" name="date_ini" id="date_ini" value="">
            </div>
            <div class="form-group">
                <label class="form-label" for="date_end">Date end</label>
                <input type="date" class="form-control" name="date_end" id="date_end" value="">
            </div>

          </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-primary" name="submit" value="Submit">Save</button>
          </div>
        </form>
       </div>
    </div>
 </div>

</x-app-layout>



