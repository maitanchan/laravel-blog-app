
<style>
    @import url(https://fonts.googleapis.com/css?family=Montserrat);
  
  
  
  svg {
      display: block;
      font: 10.5em 'Montserrat';
      width: 360px;
      height: 300px;
      margin: 0 auto;
  }
  
  .text-copy {
      fill: none;
      stroke: rgb(0, 0, 0);
      stroke-dasharray: 6% 29%;
      stroke-width: 5px;
      stroke-dashoffset: 0%;
      animation: stroke-offset 5.5s infinite linear;
  }
  
  .text-copy:nth-child(1){
      stroke: #000000;
      animation-delay: 2;
  }
  
  .text-copy:nth-child(2){
      stroke: #000000;
      animation-delay: 1s;
  }
  
  .text-copy:nth-child(3){
      stroke: #000000;
      animation-delay: -1s;
  }
  
  .text-copy:nth-child(4){
      stroke: #000000;
      animation-delay: -2s;
  }
  
  .text-copy:nth-child(5){
      stroke: #040404;
      animation-delay: -3s;
  }
  
  @keyframes stroke-offset{
      100% {stroke-dashoffset: -35%;}
  }
  </style>

<x-guest-layout>
    
    <form method="POST" action="{{ route('register') }}">
       
        @csrf
        <div style="width:50px;height:50px; margin-left:50px;margin-top:30px">
            <svg viewBox="0 0 960 300" style="width:300px;height:300px; position: relative;bottom:150px">
                <symbol id="s-text">
                    <text text-anchor="middle" x="50%" y="80%">REGISTER </text>
                <text text-anchor="middle" x="52%" y="80%">REGISTER </text>
                
                </symbol>
            
                <g class = "g-ants">
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                </g>
            </svg>
          </div>
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
