<div
    class="container m-auto relative lg:flex items-top justify-center min-h-screen bg-gray-900 sm:items-center sm:pt-0">
    <section class="bg-white dark:bg-blue-500 rounded-2xl lg:w-1/2 lg:m-5 mb-3">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Please
                Enter Your Email to begin the Game
            </h2>
            <!-- <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Got a technical
                        issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p> -->
            <form class="space-y-8" wire:submit.prevent="">
                {{-- @csrf --}}
                <div class="">
                    <div wire:loading.delay.longest> <?xml version="1.0" encoding="UTF-8" standalone="no"?><svg xmlns:svg="http://www.w3.org/2000/svg"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" width="64px"
                        height="64px" viewBox="0 0 128 128" xml:space="preserve">
                        <g>
                            <path d="M82.4 32.2a37.52 37.52 0 0 0-55 25.13L16.97 42.97.92 52.44A64.42 64.42 0 0 1 101.07 12.2l-.26 17.93z"
                                fill="#290ac6" />
                            <path d="M82.4 32.2a37.52 37.52 0 0 0-55 25.13L16.97 42.97.92 52.44A64.42 64.42 0 0 1 101.07 12.2l-.26 17.93z"
                                fill="#290ac6" transform="rotate(120 64 64)" />
                            <path d="M82.4 32.2a37.52 37.52 0 0 0-55 25.13L16.97 42.97.92 52.44A64.42 64.42 0 0 1 101.07 12.2l-.26 17.93z"
                                fill="#290ac6" transform="rotate(240 64 64)" />
                            <animateTransform attributeName="transform" type="rotate" from="0 64 64" to="120 64 64" dur="240ms"
                                repeatCount="indefinite"></animateTransform>
                        </g>
                    </svg></div>
                    <label for="email" class="block mb-2 text-sm font-medium text-white">Your
                        email</label>
                    <input wire:model="email" wire:click="$refresh('email')"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-blue-200 dark:border-green-700 dark:placeholder-gray-400 dark:text-gray-800 dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        placeholder="youremail@please.com" required>
                    @error('email') <span class="error">{{ $message }}</span> @enderror
                </div>

                @if ($checkingCode)
                <div>
                    <label for="code" class="block mb-2 text-sm font-medium text-white">Enter Your Code</label>
                    <input wire:model="code"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-blue-200 dark:border-green-700 dark:placeholder-gray-400 dark:text-gray-800 dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        placeholder="Code">
                    @error('code') <span class="error">{{ $message }}</span> @enderror
                    {{$codeMessage ? $codeMessage : ''}}
                </div>
                @endif




                @if (!$checkingCode)
                <div>
                    <label for="username" class="block mb-2 text-sm font-medium text-white">Username</label>
                    <input wire:model="username" {{ $playerExists ? 'disabled' : '' }}
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-blue-200 dark:border-green-700 dark:placeholder-gray-400 dark:text-gray-800 dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        placeholder="Username">
                    @error('username') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-white">Your
                        Phone (optional)</label>
                    <input type="phone" id="phone" name="phone" wire:model="phone" {{ $playerExists ? 'disabled' : '' }}
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-blue-200 dark:border-green-700 dark:placeholder-gray-400 dark:text-gray-800 dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        placeholder="phone number (optional)">
                    @error('phone') <span class="error">{{ $message }}</span> @enderror
                </div>

                <h3 class="mb-5 text-lg font-medium text-gray-900 dark:text-white">Choose Your Avatar</h3>
                <ul class="grid w-full gap-6 md:grid-cols-2">
                    <li>
                        <input type="radio" id="male" name="avatar" value="male" class="hidden peer" wire:model="avatar"
                            {{ $playerExists ? 'disabled' : '' }} required>
                        <label for="male"
                            class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 peer-checked:bg-blue-800 dark:hover:bg-blue-400">
                            <div class="block m-auto">
                                <div class="w-full text-lg font-semibold">Boy</div>
                            </div>
                        </label>

                    </li>
                    <li>
                        <input type="radio" id="female" name="avatar" value="female" class="hidden peer" {{
                            $playerExists ? 'disabled' : '' }} wire:model="avatar">
                        <label for="female"
                            class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-pink-300 peer-checked:border-pink-300 peer-checked:text-pink-300 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 peer-checked:bg-pink-800 dark:hover:bg-pink-400">
                            <div class="block m-auto">
                                <div class="w-full text-lg font-semibold">Girl</div>
                            </div>
                        </label>
                    </li>
                </ul>
                @endif
                <button wire:click="{{ $playerExists ? 'playAgain' : 'startNewGame' }}" {{$playerExists && !$correctCode
                    ? 'hidden disabled' : '' }}
                    class="text-white py-3 px-5 text-lg font-medium text-center rounded-lg sm:w-fit focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 {{ $playerExists && $correctCode ? 'bg-green-500 hover:bg-green-300' : 'bg-blue-500  hover:bg-blue-300' }}">{{
                    $playerExists ? 'Play Again' : 'Start Game' }}</button>
            </form>
        </div>
    </section>

    <section class="bg-blue-500 rounded-2xl lg:w-1/2 lg:m-5">
        @foreach ($topTenPlayers as $player)
        <div class="flex py-8 lg:py-8 px-4 mx-auto max-w-screen-md
         {{$loop->iteration === 1 ? 'bg-blue-100 text-lg rounded-t-2xl' : ''}}
         {{$loop->iteration === 2 ? 'bg-blue-200' : ''}}
         {{$loop->iteration === 3 ? 'bg-blue-300' : ''}}
         {{$loop->iteration === 4 ? 'bg-blue-400' : ''}}
         {{$loop->iteration === 5 ? 'bg-blue-500' : ''}}
         {{$loop->iteration === 6 ? 'bg-blue-600' : ''}}
         {{$loop->iteration === 7 ? 'bg-blue-700' : ''}}
         {{$loop->iteration === 8 ? 'bg-indigo-700' : ''}}
         {{$loop->iteration === 9 ? 'bg-indigo-800' : ''}}
         {{$loop->iteration === 10 ? 'bg-indigo-900 rounded-b-2xl' : ''}}
         ">
            <div class="w-1/5">
                {{$loop->iteration}}
            </div>
            <div class="w-1/3 mr-auto">
                {{$player->username}}
            </div>
            <div class="w-1/3 ml-auto text-center">
                {{$player->result}}
            </div>
        </div>
        @endforeach
    </section>
</div>
