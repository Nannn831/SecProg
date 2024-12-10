<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-xl font-bold text-center lg:pt-3 lg:text-3xl text-mainblue font-josefin">Welcome To Lapor Pak</h1>
                    <p class="font-bold text-center lg:pt-3  lg:text-mainblue font-josefin">Laporin Kejadian Atau Keluhan Dengan Isi Form Dibawah Ini</p>
  </div>
  <div class="container my-3">
    @if (session('success'))
      <script>
        Swal.fire({
          icon: "success",
          title: "Your Message Sent Successfully!",
          showConfirmButton: false,
          timer: 3000
        });
      </script>
    @endif
  </div>
  <form action="{{ route('inquiryForm.store') }}" method="post"
      class="container flex flex-col items-center justify-center mx-auto">
      @csrf
      <div class="flex flex-wrap justify-center gap-2 xl:gap-4 lg:gap-3">
        <div class="pt-2 xl:w-[500px] lg:w-[400px] md:w-[350px] w-[300px] pb-2 lg:pb-0 text-sm lg:text-base">
          <label for="" class="label-name ml-[18px]">First Name<span style="color: red">*</span></label>
          <input class="w-full px-6 py-4 border-2 border-light rounded-xl" type="text" name="firstName"
            id="first_name" placeholder="" required>
        </div>
        <div class="md:pt-2 xl:w-[500px] lg:w-[400px] md:w-[350px] w-[300px] pb-2 lg:pb-0 text-sm lg:text-base">
          <label for="" class="label-lastName ml-[18px]">Last Name<span style="color: red">*</span></label>
          <input class="w-full px-6 py-4 border-2 border-light rounded-xl" type="text" name="lastName"
            id="last_name" placeholder="" required>
        </div>
      </div>
      <div class="flex flex-wrap justify-center gap-2 xl:gap-4 lg:gap-3">
        <div class="pt-2 xl:w-[500px] lg:w-[400px] md:w-[350px] w-[300px] pb-2 lg:pb-0 text-sm lg:text-base">
          <label for="" class="label-phoneNum ml-[18px]">Phone Number<span style="color: red">*</span></label>
          <input class="w-full px-6 py-4 border-2 border-light rounded-xl" type="number" name="phoneNumber"
            id="phone_number" placeholder="" required>
        </div>
        <div class="md:pt-2 xl:w-[500px] lg:w-[400px] md:w-[350px] w-[300px] pb-2 lg:pb-0 text-sm lg:text-base">
          <label for="" class="label-email ml-[18px]">Email<span style="color: red">*</span></label>
          <input class="w-full px-6 py-4 border-2 border-light rounded-xl" type="email" name="emailAddress"
            id="email" placeholder="" required>
        </div>
      </div>
      <div class="flex flex-wrap justify-center gap-2 xl:gap-4 lg:gap-3">
        <div class="pt-2 xl:w-[1010px] lg:w-[803px] md:w-[702px] w-[300px] text-sm lg:text-base">
          <label for="" class="label-text ml-[18px]">Message<span style="color: red">*</span></label>
          <textarea class="w-full px-6 py-4 border-2 border-light rounded-xl" name="clientMessage" id="message"
            cols="30" rows="10" placeholder=""></textarea>
        </div>
      </div>

      <button type="submit"
        class="flex items-center justify-center px-5 py-2 mt-5 text-center transition-all ease-in-out border-2 rounded-full shadow-md lg:py-3 lg:px-6 mt w-fit text-mainred border-mainred shadow-light hover:bg-mainred hover:border-lightred hover:text-white hover:shadow-lg gap-x-2 hover:gap-x-4 hover:pr-4 duration-400">
        <span class="font-semibold text-[14px] lg:text-base">Send Inquiry</span>
        <i class="text-xl lg:text-2xl bi bi-arrow-right-circle-fill"></i>
      </button>
    </form>
  </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

