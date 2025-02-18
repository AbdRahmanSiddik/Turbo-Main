@if (session('success'))
  <div id="success-notification-content"
    class="py-5 pl-5 pr-14 bg-white border border-slate-200/60 rounded-lg shadow-xl dark:bg-darkmode-600 dark:text-slate-300 dark:border-darkmode-600 hidden flex flex flex">
    <i data-tw-merge data-lucide="check-circle" class="stroke-[1] w-5 h-5 text-success text-success"></i>
    {{-- <img src="{{ asset('landing/assets/img/logo/fav2.png') }}" alt=""> --}}
    <div class="ml-4 mr-4">
      <div class="font-medium">Success!</div>
      <div class="mt-1 text-slate-500">
        {{ session('success') }}
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  <script>
    $(document).ready(function() {
      Toastify({
        node: $("#success-notification-content")
          .clone()
          .removeClass("hidden")[0],
        duration: -1,
        newWindow: true,
        close: true,
        gravity: "top",
        position: "right",
        stopOnFocus: true,
      }).showToast();
    });
  </script>
@endif

@if ($errors->any())
  {{-- @dd($errors->all()) --}}
  <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="warning-modal-preview"
    class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
    <div data-tw-merge
      class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]">
      <div class="p-5 text-center">
        <i data-tw-merge data-lucide="x-circle"
          class="stroke-[1] w-5 h-5 mx-auto mt-3 h-16 w-16 text-warning mx-auto mt-3 h-16 w-16 text-warning"></i>
        <div class="mt-5 text-3xl">Oops...</div>
        <div class="mt-2 text-slate-500">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      </div>

      <div class="border-t border-slate-200/60 p-5 text-center dark:border-darkmode-400">
        <div class="px-5 text-center">
          <button data-tw-merge data-tw-dismiss="modal" type="button"
            class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary w-24 w-24">Ok</button>
        </div>
      </div>
    </div>
  </div>

@endif

<script>
  $(document).ready(function() {
    let errorModal = $('#warning-modal-preview');
    errorModal.addClass('show').css('z-index', 9999);
    // $('body').addClass('overflow-y-hidden');
  });
</script>



@if (session('error'))
<div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="error-code"
    class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
    <div data-tw-merge
      class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]">
      <div class="p-5 text-center">
        <i data-tw-merge data-lucide="x-circle"
          class="stroke-[1] w-5 h-5 mx-auto mt-3 h-16 w-16 text-warning mx-auto mt-3 h-16 w-16 text-warning"></i>
        <div class="mt-5 text-3xl">Oops...</div>
        <div class="mt-2 text-slate-500">
          <ul>
            {{ session('error') }}
          </ul>
        </div>
      </div>

      <div class="border-t border-slate-200/60 p-5 text-center dark:border-darkmode-400">
        <div class="px-5 text-center">
          <button data-tw-merge data-tw-dismiss="modal" type="button"
            class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary w-24 w-24">Ok</button>
        </div>
      </div>
    </div>
  </div>
@endif

<script>
    $(document).ready(function() {
      let errorModal = $('#error-code');
      errorModal.addClass('show').css('z-index', 9999);
      // $('body').addClass('overflow-y-hidden');
    });
  </script>
