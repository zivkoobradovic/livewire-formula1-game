<div class="game-holder">
    <div class="game-content">
        <div class="container">
{{-- choose language --}}
<div class="flex items-center mb-4">
    <input id="default-radio-1" type="radio" value="eng" name="" wire:click="changeLanguage" {{$language === 'eng' ? 'checked' : ''}}
        wire:model="language"
        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">English</label>
</div>
<div class="flex items-center">
    <input id="default-radio-2" type="radio" value="arab" name="" wire:click="changeLanguage" {{$language === 'arab' ? 'checked' : ''}}
        wire:model="language"
        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Arabic</label>
</div>
            <!-- Nav tabs -->
            <ul class="nav nav-pills nav-justified" role="tablist">

              @if($language === 'eng')
              <li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab"
                      data-toggle="tab">{{ $translate[$language]['login'] }}</a></li>
              <li role="presentation"><a href="#results" aria-controls="results" role="tab"
                      data-toggle="tab">{{ $translate[$language]['leaderboard'] }}</a></li>

              @else
              <li role="presentation"><a href="#results" aria-controls="results" role="tab"
                      data-toggle="tab">{{ $translate[$language]['leaderboard'] }}</a></li>

              <li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab"
                      data-toggle="tab">{{ $translate[$language]['login'] }}</a></li>

              @endif
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="login">
                    <section class="bg-white dark:bg-blue-500 rounded-2xl lg:w-1/2 lg:m-5 mb-3">
                        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                            <!-- <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Got a technical
                              issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p> -->
                            <form class="space-y-8" wire:submit.prevent="">
                                {{-- @csrf --}}
                                <div class="">
                                    <div wire:loading.delay.longest><svg xmlns:svg="http://www.w3.org/2000/svg"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" width="64px"
                                            height="64px" viewBox="0 0 128 128" xml:space="preserve">
                                            <g>
                                                <path
                                                    d="M82.4 32.2a37.52 37.52 0 0 0-55 25.13L16.97 42.97.92 52.44A64.42 64.42 0 0 1 101.07 12.2l-.26 17.93z"
                                                    fill="#290ac6" />
                                                <path
                                                    d="M82.4 32.2a37.52 37.52 0 0 0-55 25.13L16.97 42.97.92 52.44A64.42 64.42 0 0 1 101.07 12.2l-.26 17.93z"
                                                    fill="#290ac6" transform="rotate(120 64 64)" />
                                                <path
                                                    d="M82.4 32.2a37.52 37.52 0 0 0-55 25.13L16.97 42.97.92 52.44A64.42 64.42 0 0 1 101.07 12.2l-.26 17.93z"
                                                    fill="#290ac6" transform="rotate(240 64 64)" />
                                                <animateTransform attributeName="transform" type="rotate" from="0 64 64"
                                                    to="120 64 64" dur="240ms" repeatCount="indefinite">
                                                </animateTransform>
                                            </g>
                                        </svg></div>
                                    <label for="email" class="block mb-2 text-sm font-medium text-white"
                                    @if ($language === 'arab')
                                        style="width:100%; text-align:right;"
                                    @endif
                                    >
                                        {{ $translate[$language]['email'] }}</label>
                                    <input wire:model="email" wire:click="$refresh('email')" class="form-control"
                                        required>
                                    @error('email') <span class="error">{{ $message }}</span> @enderror
                                </div>

                                @if ($checkingCode)
                                {{-- <div>
                                    <label for="code" class="block mb-2 text-sm font-medium text-white" @if ($language === 'arab')
                                        style="width:100%; text-align:right;"
                                    @endif
                                    >{{ $translate[$language]['code'] }}</label>
                                    <input wire:model="code" class="form-control">
                                    @error('code') <span class="error">{{ $message }}</span> @enderror
                                    {{$codeMessage ? $codeMessage : ''}}
                                </div> --}}
                                @endif


                                @if (!$checkingCode)
                                <div>
                                    <label for="username"
                                        class="block mb-2 text-sm font-medium text-white" @if ($language === 'arab')
                                        style="width:100%; text-align:right;"
                                    @endif
                                    >{{ $translate[$language]['username'] }}</label>
                                    <input wire:model="username"
                                    @if ($playerExists && $status === false)
                                    {{'disabled'}}
                                    @else
                                    {{''}}
                                    @endif class="form-control">
                                    @error('username') <span class="error">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label for="phone" class="block mb-2 text-sm font-medium text-white" @if ($language === 'arab')
                                        style="width:100%; text-align:right;"
                                    @endif
                                    >{{ $translate[$language]['phone'] }}</label>
                                    <input type="phone" id="phone" name="phone" wire:model="phone"
                                    @if ($playerExists && $status === false)
                                    {{'disabled'}}
                                    @else
                                    {{''}}
                                    @endif
                                     class="form-control">
                                    @error('phone') <span class="error">{{ $message }}</span> @enderror
                                </div>

                                <label class="mb-5 text-lg font-medium text-gray-900 dark:text-white" @if ($language === 'arab')
                                        style="width:100%; text-align:right;"
                                    @endif
                                    >{{ $translate[$language]['avatar'] }}</label>
                                <ul class="grid w-full gap-6 md:grid-cols-2 avatar-select">
                                    <li class="boy">
                                        <input type="radio" id="male" name="avatar" value="male" class="peer"
                                            wire:model="avatar" @if ($playerExists && $status === false)
                                    {{'disabled'}}
                                    @else
                                    {{''}}
                                    @endif required>
                                        <label for="male"
                                            class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 peer-checked:bg-blue-800 dark:hover:bg-blue-400">
                                            <div class="block m-auto">
                                                <div class="w-full text-lg font-semibold">{{ $translate[$language]['boy'] }}</div>
                                            </div>
                                        </label>

                                    </li>
                                    <li class="girl">
                                        <input type="radio" id="female" name="avatar" value="female" class="peer" @if ($playerExists && $status === false)
                                    {{'disabled'}}
                                    @else
                                    {{''}}
                                    @endif wire:model="avatar">
                                        <label for="female"
                                            class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-pink-300 peer-checked:border-pink-300 peer-checked:text-pink-300 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 peer-checked:bg-pink-800 dark:hover:bg-pink-400">
                                            <div class="block m-auto">
                                                <div class="w-full text-lg font-semibold">{{ $translate[$language]['girl'] }}</div>
                                            </div>
                                        </label>
                                    </li>
                                </ul>
                                @endif

                                <button wire:click="{{ $playerExists ? 'playAgain' : 'startNewGame' }}"
                                {{-- @if ($playerExists && $status === false)
                                    {{''}}
                                    @elseif ($playerExists && !$correctCode)
                                    {{'hidden disabled'}}
                                    @elseif (!$playerExists)
                                    {{''}}
                                    @endif --}}
                                    class="btn btn-lg btn-primary btn-block {{ $playerExists && $correctCode ? 'bg-green-500 hover:bg-green-300' : 'bg-blue-500  hover:bg-blue-300' }} pushable">

                                    <span class="front">

                                    {{
                                    $playerExists ? $translate[$language]['race_again'] :  $translate[$language]['race'] }}</span></button>
                            </form>
                        </div>
                    </section>


                </div>
                <div role="tabpanel" class="tab-pane" id="results">

                    <section class="col-md-12">
                        @foreach ($topTenPlayers as $player)
                        <div class="result-box">
                            <div class="col-md-2 col-xs-2">
                                {{$loop->iteration}}
                            </div>
                            <div class="col-md-5 col-xs-5">
                                {{$player->username}}
                            </div>
                            <div class="col-md-5 col-xs-5">
                                {{$player->result}}
                            </div>
                        </div>
                        @endforeach
                    </section>
                    <div class="clearfix"></div>


                </div>
            </div>

        </div>

    </div>

</div>
<div class="game-bar">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-xs-12">
                <div class="game-logo text-anime">
                    <img src="{{asset('game/img/logo.svg')}}" alt="">
                </div>
            </div>

        </div>
    </div>

</div>
<div class="game-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="game-footer-logo">
                  <img src="{{asset('game/img/logo_otf.svg')}}">
                </div>
            </div>
        </div>
    </div>
</div>
