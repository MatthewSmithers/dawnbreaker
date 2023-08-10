<!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->

<div class="relative bg-white">
    <div class="lg:absolute lg:inset-0 lg:left-1/2">
        <img class="h-64 w-full bg-gray-50 object-cover sm:h-80 lg:absolute lg:h-full"
             src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-x=.4&w=2560&h=3413&&q=80"
             alt="">
    </div>
    <div class="pb-24 pt-16 sm:pb-32 sm:pt-24 lg:mx-auto lg:grid lg:max-w-7xl lg:grid-cols-2 lg:pt-32">
        <div class="px-6 lg:px-8">
            <div class="mx-auto max-w-xl lg:mx-0 lg:max-w-lg">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900">Let's work together</h2>
                <p class="mt-2 text-lg leading-8 text-gray-600">Proin volutpat consequat porttitor cras nullam gravida
                    at orci molestie a eu arcu sed ut tincidunt magna.</p>


                <form action="/quote" method="POST" class="mt-16">
                    @csrf
                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                        <div>
                            <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">First
                                name</label>
                            <div class="mt-2.5">
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                       class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                       value="{{ old('first-name') }}"
                                       required
                                >
                                @error('first-name')
                                <p class="text-red-600 mt-1 text-xs">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">
                                Last name
                            </label>
                            <div class="mt-2.5">
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                       class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                       value="{{ old('last-name') }}"
                                       required
                                >
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                            <div class="mt-2.5">
                                <input id="email" name="email" type="email" autocomplete="email"
                                       class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                       value="{{ old('email') }}"
                                       required>
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="company"
                                   class="block text-sm font-semibold leading-6 text-gray-900">Company</label>
                            <div class="mt-2.5">
                                <input type="text" name="company" id="company" autocomplete="organization"
                                       class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                       value="{{ old('company') }}"
                                >
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <div class="flex justify-between text-sm leading-6">
                                <label for="phone" class="block font-semibold text-gray-900">Phone</label>
                                <p id="phone-description" class="text-red-400">*Required</p>
                            </div>
                            <div class="mt-2.5">
                                <input type="tel" name="phone" id="phone" autocomplete="tel"
                                       aria-describedby="phone-description"
                                       class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                       value="{{ old('phone') }}"
                                       required
                                >
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <div class="flex justify-between text-sm leading-6">
                                <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">How can
                                    we help you?</label>
                                <p id="message-description" class="text-gray-400">Max 500 characters</p>
                            </div>
                            <div class="mt-2.5">
                                <textarea id="message" name="message" rows="4" aria-describedby="message-description"
                                          class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                          value="{{ old('message') }}"
                                          required
                                ></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 flex justify-end border-t border-gray-900/10 pt-8">
                        <button type="submit"

                                class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Send message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
