@extends('layouts.app')
@section('title','Residential')
@section('content')

    <x-nav/>
    <x-mobilenav/>
    <h1>Residential</h1>
    <div class="relative bg-gray-800 px-6 py-32 sm:px-12 sm:py-40 lg:px-16">
        <div class="absolute inset-0 overflow-hidden">
            <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-feature-section-full-width.jpg" alt=""
                 class="h-full w-full object-cover object-center">
        </div>
        <div aria-hidden="true" class="absolute inset-0 bg-gray-900 bg-opacity-50"></div>
        <div class="relative mx-auto flex max-w-3xl flex-col items-center text-center">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Residential Cleaning</h2>
            <p class="mt-3 text-xl text-white">To provide you with an estimate, there is usually no need to visit your
                home. We will ask the right questions and fit you with a cleaning package that meets your specific needs
                and budget, then adjust later if needed.
            </p>
            <a href="#"
               class="mt-8 block w-full rounded-md border border-transparent bg-white px-8 py-3 text-base font-medium text-gray-900 hover:bg-gray-100 sm:w-auto">Read
                our story</a>
        </div>
    </div>
    <!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
    <div class="bg-gray-50">
        <div class="mx-auto max-w-7xl py-24 sm:px-2 sm:py-32 lg:px-4">
            <div class="mx-auto max-w-2xl px-4 lg:max-w-none">
                <div class="grid grid-cols-1 items-center gap-x-16 gap-y-10 lg:grid-cols-2">
                    <div>
                        <h2 class="text-4xl font-bold tracking-tight text-gray-900">Customized Routine Cleans</h2>
                        <p class="mt-4 text-gray-500">Now that your home is sparkling, you’ll want to establish a
                            routine with us to keep it that way. We will recommend a Customized Routine Clean Package
                            that fits your lifestyle and budget.
                        </p>
                    </div>
                    <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg bg-gray-100">
                        <img src="https://tailwindui.com/img/ecommerce-images/incentives-07-hero.jpg" alt=""
                             class="object-cover object-center">
                    </div>
                </div>
                <div class="mt-16 grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-3">
                    <div class="sm:flex lg:block">
                        <div class="sm:flex-shrink-0">
                            <img class="h-16 w-16"
                                 src="https://tailwindui.com/img/ecommerce/icons/icon-shipping-simple.svg" alt="">
                        </div>
                        <div class="mt-4 sm:ml-6 sm:mt-0 lg:ml-0 lg:mt-6">
                            <h3 class="text-sm font-medium text-gray-900">Weekly Basic</h3>
                            <p class="mt-2 text-sm text-gray-500">recommended to the working professionals with small
                                children and/or pets who want a clean, organized and welcoming living space but don’t
                                have the time to stay on top of the toys, pet hair, bathroom, kitchen and household
                                basics. The Weekly Basic will bring your clean up to the standard you desire and keep it
                                that way. (See checklist)
                            </p>
                        </div>
                    </div>
                    <div class="sm:flex lg:block">
                        <div class="sm:flex-shrink-0">
                            <img class="h-16 w-16"
                                 src="https://tailwindui.com/img/ecommerce/icons/icon-warranty-simple.svg" alt="">
                        </div>
                        <div class="mt-4 sm:ml-6 sm:mt-0 lg:ml-0 lg:mt-6">
                            <h3 class="text-sm font-medium text-gray-900">10-year warranty</h3>
                            <p class="mt-2 text-sm text-gray-500">If it breaks in the first 10 years we&#039;ll replace
                                it. After that you&#039;re on your own though.</p>
                        </div>
                    </div>
                    <div class="sm:flex lg:block">
                        <div class="sm:flex-shrink-0">
                            <img class="h-16 w-16"
                                 src="https://tailwindui.com/img/ecommerce/icons/icon-exchange-simple.svg" alt="">
                        </div>
                        <div class="mt-4 sm:ml-6 sm:mt-0 lg:ml-0 lg:mt-6">
                            <h3 class="text-sm font-medium text-gray-900">Exchanges</h3>
                            <p class="mt-2 text-sm text-gray-500">If you don&#039;t like it, trade it to one of your
                                friends for something of theirs. Don&#039;t send it here though.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white">


        <main>
            <!-- Pricing section -->
            <div class="isolate overflow-hidden">
                <div class="flow-root bg-gray-900 py-16 sm:pt-32 lg:pb-0">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="relative z-10">
                            <h1 class="mx-auto max-w-4xl text-center text-5xl font-bold tracking-tight text-white">
                                Hassle Free Quoting</h1>
                            <p class="mx-auto mt-4 max-w-2xl text-center text-lg leading-8 text-white/60">Call us today
                                for your Hassle Free Quote or simply send us an email and we’ll call you at your
                                earliest convenience.
                            </p>
                            <div class="mt-16 flex justify-center">
                                <fieldset
                                    class="grid grid-cols-2 gap-x-1 rounded-full bg-white/5 p-1 text-center text-xs font-semibold leading-5 text-white">
                                    <legend class="sr-only">Payment frequency</legend>
                                    <!-- Checked: "bg-indigo-500" -->
                                    <label class="cursor-pointer rounded-full px-2.5 py-1">
                                        <input type="radio" name="frequency" value="monthly" class="sr-only">
                                        <span>Monthly</span>
                                    </label>
                                    <!-- Checked: "bg-indigo-500" -->
                                    <label class="cursor-pointer rounded-full px-2.5 py-1">
                                        <input type="radio" name="frequency" value="annually" class="sr-only">
                                        <span>Annually</span>
                                    </label>
                                </fieldset>
                            </div>
                        </div>
                        <div
                            class="relative mx-auto mt-10 grid max-w-md grid-cols-1 gap-y-8 lg:mx-0 lg:-mb-14 lg:max-w-none lg:grid-cols-3">
                            <svg viewBox="0 0 1208 1024" aria-hidden="true"
                                 class="absolute -bottom-48 left-1/2 h-[64rem] -translate-x-1/2 translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] lg:-top-48 lg:bottom-auto lg:translate-y-0">
                                <ellipse cx="604" cy="512" fill="url(#d25c25d4-6d43-4bf9-b9ac-1842a30a4867)" rx="604"
                                         ry="512"/>
                                <defs>
                                    <radialGradient id="d25c25d4-6d43-4bf9-b9ac-1842a30a4867">
                                        <stop stop-color="#7775D6"/>
                                        <stop offset="1" stop-color="#E935C1"/>
                                    </radialGradient>
                                </defs>
                            </svg>
                            <div
                                class="hidden lg:absolute lg:inset-x-px lg:bottom-0 lg:top-4 lg:block lg:rounded-t-2xl lg:bg-gray-800/80 lg:ring-1 lg:ring-white/10"
                                aria-hidden="true"></div>
                            <div
                                class="relative rounded-2xl bg-gray-800/80 ring-1 ring-white/10 lg:bg-transparent lg:pb-14 lg:ring-0">
                                <div class="p-8 lg:pt-12 xl:p-10 xl:pt-14">
                                    <h2 id="tier-starter" class="text-sm font-semibold leading-6 text-white">
                                        Weekly Basic</h2>
                                    <div
                                        class="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between lg:flex-col lg:items-stretch">
                                        <div class="mt-2 flex items-center gap-x-4">
                                            <!-- Price, update based on frequency toggle state -->
                                            <p class="text-4xl font-bold tracking-tight text-white">$15</p>
                                            <div class="text-sm leading-5">
                                                <p class="text-white">USD</p>
                                                <!-- Payment frequency, update based on frequency toggle state -->
                                                <p class="text-gray-400">Billed monthly</p>
                                            </div>
                                        </div>
                                        <a href="#" aria-describedby="tier-starter"
                                           class="rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 bg-white/10 hover:bg-white/20 focus-visible:outline-white">Buy
                                            this plan</a>
                                    </div>
                                    <div class="mt-8 flow-root sm:mt-10">
                                        <ul role="list"
                                            class="-my-2 divide-y border-t text-sm leading-6 lg:border-t-0 divide-white/5 border-white/5 text-white">
                                            <li class="flex gap-x-3 py-2">
                                                <svg class="h-6 w-5 flex-none text-gray-500" viewBox="0 0 20 20"
                                                     fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                Basic invoicing
                                            </li>
                                            <li class="flex gap-x-3 py-2">
                                                <svg class="h-6 w-5 flex-none text-gray-500" viewBox="0 0 20 20"
                                                     fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                Easy to use accounting
                                            </li>
                                            <li class="flex gap-x-3 py-2">
                                                <svg class="h-6 w-5 flex-none text-gray-500" viewBox="0 0 20 20"
                                                     fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                Mutli-accounts
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="relative rounded-2xl z-10 bg-white shadow-xl ring-1 ring-gray-900/10">
                                <div class="p-8 lg:pt-12 xl:p-10 xl:pt-14">
                                    <h2 id="tier-scale" class="text-sm font-semibold leading-6 text-gray-900">Scale</h2>
                                    <div
                                        class="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between lg:flex-col lg:items-stretch">
                                        <div class="mt-2 flex items-center gap-x-4">
                                            <!-- Price, update based on frequency toggle state -->
                                            <p class="text-4xl font-bold tracking-tight text-gray-900">$60</p>
                                            <div class="text-sm leading-5">
                                                <p class="text-gray-900">USD</p>
                                                <!-- Payment frequency, update based on frequency toggle state -->
                                                <p class="text-gray-500">Billed monthly</p>
                                            </div>
                                        </div>
                                        <a href="#" aria-describedby="tier-scale"
                                           class="rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 bg-indigo-600 shadow-sm hover:bg-indigo-500 focus-visible:outline-indigo-600">Buy
                                            this plan</a>
                                    </div>
                                    <div class="mt-8 flow-root sm:mt-10">
                                        <ul role="list"
                                            class="-my-2 divide-y border-t text-sm leading-6 lg:border-t-0 divide-gray-900/5 border-gray-900/5 text-gray-600">
                                            <li class="flex gap-x-3 py-2">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                                     fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                Advanced invoicing
                                            </li>
                                            <li class="flex gap-x-3 py-2">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                                     fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                Easy to use accounting
                                            </li>
                                            <li class="flex gap-x-3 py-2">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                                     fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                Mutli-accounts
                                            </li>
                                            <li class="flex gap-x-3 py-2">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                                     fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                Tax planning toolkit
                                            </li>
                                            <li class="flex gap-x-3 py-2">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                                     fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                VAT &amp; VATMOSS filing
                                            </li>
                                            <li class="flex gap-x-3 py-2">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                                     fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                Free bank transfers
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="relative rounded-2xl bg-gray-800/80 ring-1 ring-white/10 lg:bg-transparent lg:pb-14 lg:ring-0">
                                <div class="p-8 lg:pt-12 xl:p-10 xl:pt-14">
                                    <h2 id="tier-growth" class="text-sm font-semibold leading-6 text-white">Growth</h2>
                                    <div
                                        class="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between lg:flex-col lg:items-stretch">
                                        <div class="mt-2 flex items-center gap-x-4">
                                            <!-- Price, update based on frequency toggle state -->
                                            <p class="text-4xl font-bold tracking-tight text-white">$30</p>
                                            <div class="text-sm leading-5">
                                                <p class="text-white">USD</p>
                                                <!-- Payment frequency, update based on frequency toggle state -->
                                                <p class="text-gray-400">Billed monthly</p>
                                            </div>
                                        </div>
                                        <a href="#" aria-describedby="tier-growth"
                                           class="rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 bg-white/10 hover:bg-white/20 focus-visible:outline-white">Buy
                                            this plan</a>
                                    </div>
                                    <div class="mt-8 flow-root sm:mt-10">
                                        <ul role="list"
                                            class="-my-2 divide-y border-t text-sm leading-6 lg:border-t-0 divide-white/5 border-white/5 text-white">
                                            <li class="flex gap-x-3 py-2">
                                                <svg class="h-6 w-5 flex-none text-gray-500" viewBox="0 0 20 20"
                                                     fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                Basic invoicing
                                            </li>
                                            <li class="flex gap-x-3 py-2">
                                                <svg class="h-6 w-5 flex-none text-gray-500" viewBox="0 0 20 20"
                                                     fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                Easy to use accounting
                                            </li>
                                            <li class="flex gap-x-3 py-2">
                                                <svg class="h-6 w-5 flex-none text-gray-500" viewBox="0 0 20 20"
                                                     fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                Mutli-accounts
                                            </li>
                                            <li class="flex gap-x-3 py-2">
                                                <svg class="h-6 w-5 flex-none text-gray-500" viewBox="0 0 20 20"
                                                     fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                Tax planning toolkit
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative bg-gray-50 lg:pt-14">
                    <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
                        <!-- Feature comparison (up to lg) -->
                        <section aria-labelledby="mobile-comparison-heading" class="lg:hidden">
                            <h2 id="mobile-comparison-heading" class="sr-only">Feature comparison</h2>

                            <div class="mx-auto max-w-2xl space-y-16">
                                <div class="border-t border-gray-900/10">
                                    <div class="-mt-px w-72 border-t-2 pt-10 md:w-80 border-transparent">
                                        <h3 class="text-sm font-semibold leading-6 text-gray-900">Starter</h3>
                                        <p class="mt-1 text-sm leading-6 text-gray-600">All your essential business
                                            finances, taken care of.</p>
                                    </div>

                                    <div class="mt-10 space-y-10">
                                        <div>
                                            <h4 class="text-sm font-semibold leading-6 text-gray-900">Catered for
                                                business</h4>
                                            <div class="relative mt-6">
                                                <!-- Fake card background -->
                                                <div aria-hidden="true"
                                                     class="absolute inset-y-0 right-0 hidden w-1/2 rounded-lg bg-white shadow-sm sm:block"></div>

                                                <div
                                                    class="relative rounded-lg bg-white shadow-sm sm:rounded-none sm:bg-transparent sm:shadow-none sm:ring-0 ring-1 ring-gray-900/10">
                                                    <dl class="divide-y divide-gray-200 text-sm leading-6">
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Tax Savings</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-indigo-600"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                          clip-rule="evenodd"/>
                                                                </svg>
                                                                <span class="sr-only">Yes</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Easy to use accounting</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-indigo-600"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                          clip-rule="evenodd"/>
                                                                </svg>
                                                                <span class="sr-only">Yes</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Multi-accounts</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <span class="text-gray-900">3 accounts</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Invoicing</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <span class="text-gray-900">3 invoices</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Exclusive offers</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-gray-400"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path
                                                                        d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"/>
                                                                </svg>
                                                                <span class="sr-only">No</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">6 months free advisor</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-gray-400"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path
                                                                        d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"/>
                                                                </svg>
                                                                <span class="sr-only">No</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Mobile and web access</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-gray-400"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path
                                                                        d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"/>
                                                                </svg>
                                                                <span class="sr-only">No</span>
                                                            </dd>
                                                        </div>
                                                    </dl>
                                                </div>

                                                <!-- Fake card border -->
                                                <div aria-hidden="true"
                                                     class="pointer-events-none absolute inset-y-0 right-0 hidden w-1/2 rounded-lg sm:block ring-1 ring-gray-900/10"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="text-sm font-semibold leading-6 text-gray-900">Other perks</h4>
                                            <div class="relative mt-6">
                                                <!-- Fake card background -->
                                                <div aria-hidden="true"
                                                     class="absolute inset-y-0 right-0 hidden w-1/2 rounded-lg bg-white shadow-sm sm:block"></div>

                                                <div
                                                    class="relative rounded-lg bg-white shadow-sm sm:rounded-none sm:bg-transparent sm:shadow-none sm:ring-0 ring-1 ring-gray-900/10">
                                                    <dl class="divide-y divide-gray-200 text-sm leading-6">
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">24/7 customer support</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-indigo-600"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                          clip-rule="evenodd"/>
                                                                </svg>
                                                                <span class="sr-only">Yes</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Instant notifications</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-indigo-600"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                          clip-rule="evenodd"/>
                                                                </svg>
                                                                <span class="sr-only">Yes</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Budgeting tools</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-indigo-600"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                          clip-rule="evenodd"/>
                                                                </svg>
                                                                <span class="sr-only">Yes</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Digital receipts</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-indigo-600"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                          clip-rule="evenodd"/>
                                                                </svg>
                                                                <span class="sr-only">Yes</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Pots to separate money</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-gray-400"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path
                                                                        d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"/>
                                                                </svg>
                                                                <span class="sr-only">No</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Free bank transfers</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-gray-400"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path
                                                                        d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"/>
                                                                </svg>
                                                                <span class="sr-only">No</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Business debit card</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-gray-400"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path
                                                                        d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"/>
                                                                </svg>
                                                                <span class="sr-only">No</span>
                                                            </dd>
                                                        </div>
                                                    </dl>
                                                </div>

                                                <!-- Fake card border -->
                                                <div aria-hidden="true"
                                                     class="pointer-events-none absolute inset-y-0 right-0 hidden w-1/2 rounded-lg sm:block ring-1 ring-gray-900/10"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-t border-gray-900/10">
                                    <div class="-mt-px w-72 border-t-2 pt-10 md:w-80 border-indigo-600">
                                        <h3 class="text-sm font-semibold leading-6 text-indigo-600">Scale</h3>
                                        <p class="mt-1 text-sm leading-6 text-gray-600">The best financial services for
                                            your thriving business.</p>
                                    </div>

                                    <div class="mt-10 space-y-10">
                                        <div>
                                            <h4 class="text-sm font-semibold leading-6 text-gray-900">Catered for
                                                business</h4>
                                            <div class="relative mt-6">
                                                <!-- Fake card background -->
                                                <div aria-hidden="true"
                                                     class="absolute inset-y-0 right-0 hidden w-1/2 rounded-lg bg-white shadow-sm sm:block"></div>

                                                <div
                                                    class="relative rounded-lg bg-white shadow-sm sm:rounded-none sm:bg-transparent sm:shadow-none sm:ring-0 ring-2 ring-indigo-600">
                                                    <dl class="divide-y divide-gray-200 text-sm leading-6">
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Tax Savings</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-indigo-600"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                          clip-rule="evenodd"/>
                                                                </svg>
                                                                <span class="sr-only">Yes</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Easy to use accounting</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-indigo-600"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                          clip-rule="evenodd"/>
                                                                </svg>
                                                                <span class="sr-only">Yes</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Multi-accounts</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <span class="font-semibold text-indigo-600">Unlimited accounts</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Invoicing</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <span class="font-semibold text-indigo-600">Unlimited invoices</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Exclusive offers</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-indigo-600"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                          clip-rule="evenodd"/>
                                                                </svg>
                                                                <span class="sr-only">Yes</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">6 months free advisor</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-indigo-600"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                          clip-rule="evenodd"/>
                                                                </svg>
                                                                <span class="sr-only">Yes</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Mobile and web access</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-indigo-600"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                          clip-rule="evenodd"/>
                                                                </svg>
                                                                <span class="sr-only">Yes</span>
                                                            </dd>
                                                        </div>
                                                    </dl>
                                                </div>

                                                <!-- Fake card border -->
                                                <div aria-hidden="true"
                                                     class="pointer-events-none absolute inset-y-0 right-0 hidden w-1/2 rounded-lg sm:block ring-2 ring-indigo-600"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="text-sm font-semibold leading-6 text-gray-900">Other perks</h4>
                                            <div class="relative mt-6">
                                                <!-- Fake card background -->
                                                <div aria-hidden="true"
                                                     class="absolute inset-y-0 right-0 hidden w-1/2 rounded-lg bg-white shadow-sm sm:block"></div>

                                                <div
                                                    class="relative rounded-lg bg-white shadow-sm sm:rounded-none sm:bg-transparent sm:shadow-none sm:ring-0 ring-2 ring-indigo-600">
                                                    <dl class="divide-y divide-gray-200 text-sm leading-6">
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">24/7 customer support</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-indigo-600"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                          clip-rule="evenodd"/>
                                                                </svg>
                                                                <span class="sr-only">Yes</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Instant notifications</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-indigo-600"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                          clip-rule="evenodd"/>
                                                                </svg>
                                                                <span class="sr-only">Yes</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Budgeting tools</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-indigo-600"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                          clip-rule="evenodd"/>
                                                                </svg>
                                                                <span class="sr-only">Yes</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Digital receipts</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-indigo-600"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                          clip-rule="evenodd"/>
                                                                </svg>
                                                                <span class="sr-only">Yes</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Pots to separate money</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-indigo-600"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                          clip-rule="evenodd"/>
                                                                </svg>
                                                                <span class="sr-only">Yes</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Free bank transfers</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-indigo-600"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                          clip-rule="evenodd"/>
                                                                </svg>
                                                                <span class="sr-only">Yes</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Business debit card</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-indigo-600"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                          clip-rule="evenodd"/>
                                                                </svg>
                                                                <span class="sr-only">Yes</span>
                                                            </dd>
                                                        </div>
                                                    </dl>
                                                </div>

                                                <!-- Fake card border -->
                                                <div aria-hidden="true"
                                                     class="pointer-events-none absolute inset-y-0 right-0 hidden w-1/2 rounded-lg sm:block ring-2 ring-indigo-600"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-t border-gray-900/10">
                                    <div class="-mt-px w-72 border-t-2 pt-10 md:w-80 border-transparent">
                                        <h3 class="text-sm font-semibold leading-6 text-gray-900">Growth</h3>
                                        <p class="mt-1 text-sm leading-6 text-gray-600">Convenient features to take your
                                            business to the next level.</p>
                                    </div>

                                    <div class="mt-10 space-y-10">
                                        <div>
                                            <h4 class="text-sm font-semibold leading-6 text-gray-900">Catered for
                                                business</h4>
                                            <div class="relative mt-6">
                                                <!-- Fake card background -->
                                                <div aria-hidden="true"
                                                     class="absolute inset-y-0 right-0 hidden w-1/2 rounded-lg bg-white shadow-sm sm:block"></div>

                                                <div
                                                    class="relative rounded-lg bg-white shadow-sm sm:rounded-none sm:bg-transparent sm:shadow-none sm:ring-0 ring-1 ring-gray-900/10">
                                                    <dl class="divide-y divide-gray-200 text-sm leading-6">
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Tax Savings</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-indigo-600"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                          clip-rule="evenodd"/>
                                                                </svg>
                                                                <span class="sr-only">Yes</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Easy to use accounting</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-indigo-600"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                          clip-rule="evenodd"/>
                                                                </svg>
                                                                <span class="sr-only">Yes</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Multi-accounts</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <span class="text-gray-900">7 accounts</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Invoicing</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <span class="text-gray-900">10 invoices</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Exclusive offers</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-indigo-600"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                          clip-rule="evenodd"/>
                                                                </svg>
                                                                <span class="sr-only">Yes</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">6 months free advisor</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-indigo-600"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                          clip-rule="evenodd"/>
                                                                </svg>
                                                                <span class="sr-only">Yes</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Mobile and web access</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-gray-400"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path
                                                                        d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"/>
                                                                </svg>
                                                                <span class="sr-only">No</span>
                                                            </dd>
                                                        </div>
                                                    </dl>
                                                </div>

                                                <!-- Fake card border -->
                                                <div aria-hidden="true"
                                                     class="pointer-events-none absolute inset-y-0 right-0 hidden w-1/2 rounded-lg sm:block ring-1 ring-gray-900/10"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="text-sm font-semibold leading-6 text-gray-900">Other perks</h4>
                                            <div class="relative mt-6">
                                                <!-- Fake card background -->
                                                <div aria-hidden="true"
                                                     class="absolute inset-y-0 right-0 hidden w-1/2 rounded-lg bg-white shadow-sm sm:block"></div>

                                                <div
                                                    class="relative rounded-lg bg-white shadow-sm sm:rounded-none sm:bg-transparent sm:shadow-none sm:ring-0 ring-1 ring-gray-900/10">
                                                    <dl class="divide-y divide-gray-200 text-sm leading-6">
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">24/7 customer support</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-indigo-600"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                          clip-rule="evenodd"/>
                                                                </svg>
                                                                <span class="sr-only">Yes</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Instant notifications</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-indigo-600"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                          clip-rule="evenodd"/>
                                                                </svg>
                                                                <span class="sr-only">Yes</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Budgeting tools</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-indigo-600"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                          clip-rule="evenodd"/>
                                                                </svg>
                                                                <span class="sr-only">Yes</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Digital receipts</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-indigo-600"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                          clip-rule="evenodd"/>
                                                                </svg>
                                                                <span class="sr-only">Yes</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Pots to separate money</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-indigo-600"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                          clip-rule="evenodd"/>
                                                                </svg>
                                                                <span class="sr-only">Yes</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Free bank transfers</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-gray-400"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path
                                                                        d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"/>
                                                                </svg>
                                                                <span class="sr-only">No</span>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
                                                            <dt class="pr-4 text-gray-600">Business debit card</dt>
                                                            <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                                                                <svg class="mx-auto h-5 w-5 text-gray-400"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path
                                                                        d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"/>
                                                                </svg>
                                                                <span class="sr-only">No</span>
                                                            </dd>
                                                        </div>
                                                    </dl>
                                                </div>

                                                <!-- Fake card border -->
                                                <div aria-hidden="true"
                                                     class="pointer-events-none absolute inset-y-0 right-0 hidden w-1/2 rounded-lg sm:block ring-1 ring-gray-900/10"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Feature comparison (lg+) -->
                        <section aria-labelledby="comparison-heading" class="hidden lg:block">
                            <h2 id="comparison-heading" class="sr-only">Feature comparison</h2>

                            <div class="grid grid-cols-4 gap-x-8 border-t border-gray-900/10 before:block">
                                <div aria-hidden="true" class="-mt-px">
                                    <div class="border-t-2 pt-10 border-transparent">
                                        <p class="text-sm font-semibold leading-6 text-gray-900">Starter</p>
                                        <p class="mt-1 text-sm leading-6 text-gray-600">Recommended to the working
                                            professionals with small children and/or pets who want a clean, organized
                                            and welcoming living space but don’t have the time to stay on top of the
                                            toys, pet hair, bathroom, kitchen and household basics. The Weekly Basic
                                            will bring your clean up to the standard you desire and keep it that way.
                                            (See checklist)
                                        </p>
                                    </div>
                                </div>
                                <div aria-hidden="true" class="-mt-px">
                                    <div class="border-t-2 pt-10 border-indigo-600">
                                        <p class="text-sm font-semibold leading-6 text-indigo-600">Bi-weekly
                                            Essentials</p>
                                        <p class="mt-1 text-sm leading-6 text-gray-600">An affordable and effective
                                            clean that caters to organized and busy households who desire a basic,
                                            sanitized clean; augmented with bi-weekly disinfecting of the stubborn and
                                            less noticeable (build-up) areas of the home. (See checklist)
                                        </p>
                                    </div>
                                </div>
                                <div aria-hidden="true" class="-mt-px">
                                    <div class="border-t-2 pt-10 border-transparent">
                                        <p class="text-sm font-semibold leading-6 text-gray-900">Monthly Deluxe</p>
                                        <p class="mt-1 text-sm leading-6 text-gray-600">Designed for smaller, more
                                            organized households who can go a little longer between cleans and enjoy the
                                            benefits of a top-to-bottom professional clean on a monthly basis. (See
                                            checklist)
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="-mt-6 space-y-16">
                                <div>
                                    <h3 class="text-sm font-semibold leading-6 text-gray-900">Catered for business</h3>
                                    <div class="relative -mx-8 mt-10">
                                        <!-- Fake card backgrounds -->
                                        <div class="absolute inset-x-8 inset-y-0 grid grid-cols-4 gap-x-8 before:block"
                                             aria-hidden="true">
                                            <div class="h-full w-full rounded-lg bg-white shadow-sm"></div>
                                            <div class="h-full w-full rounded-lg bg-white shadow-sm"></div>
                                            <div class="h-full w-full rounded-lg bg-white shadow-sm"></div>
                                        </div>

                                        <table class="relative w-full border-separate border-spacing-x-8">
                                            <thead>
                                            <tr class="text-left">
                                                <th scope="col">
                                                    <span class="sr-only">Feature</span>
                                                </th>
                                                <th scope="col">
                                                    <span class="sr-only">Starter tier</span>
                                                </th>
                                                <th scope="col">
                                                    <span class="sr-only">Scale tier</span>
                                                </th>
                                                <th scope="col">
                                                    <span class="sr-only">Growth tier</span>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row"
                                                    class="w-1/4 py-3 pr-4 text-left text-sm font-normal leading-6 text-gray-900">
                                                    Tax Savings
                                                    <div class="absolute inset-x-8 mt-3 h-px bg-gray-200"></div>
                                                </th>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Yes</span>
                          </span>
                                                </td>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Yes</span>
                          </span>
                                                </td>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Yes</span>
                          </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"
                                                    class="w-1/4 py-3 pr-4 text-left text-sm font-normal leading-6 text-gray-900">
                                                    Easy to use accounting
                                                    <div class="absolute inset-x-8 mt-3 h-px bg-gray-200"></div>
                                                </th>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Yes</span>
                          </span>
                                                </td>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Yes</span>
                          </span>
                                                </td>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Yes</span>
                          </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"
                                                    class="w-1/4 py-3 pr-4 text-left text-sm font-normal leading-6 text-gray-900">
                                                    Multi-accounts
                                                    <div class="absolute inset-x-8 mt-3 h-px bg-gray-200"></div>
                                                </th>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <span class="text-sm leading-6 text-gray-900">3 accounts</span>
                          </span>
                                                </td>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <span class="text-sm leading-6 font-semibold text-indigo-600">Unlimited accounts</span>
                          </span>
                                                </td>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <span class="text-sm leading-6 text-gray-900">7 accounts</span>
                          </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"
                                                    class="w-1/4 py-3 pr-4 text-left text-sm font-normal leading-6 text-gray-900">
                                                    Invoicing
                                                    <div class="absolute inset-x-8 mt-3 h-px bg-gray-200"></div>
                                                </th>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <span class="text-sm leading-6 text-gray-900">3 invoices</span>
                          </span>
                                                </td>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <span class="text-sm leading-6 font-semibold text-indigo-600">Unlimited invoices</span>
                          </span>
                                                </td>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <span class="text-sm leading-6 text-gray-900">10 invoices</span>
                          </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"
                                                    class="w-1/4 py-3 pr-4 text-left text-sm font-normal leading-6 text-gray-900">
                                                    Exclusive offers
                                                    <div class="absolute inset-x-8 mt-3 h-px bg-gray-200"></div>
                                                </th>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path
                                  d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"/>
                            </svg>
                            <span class="sr-only">No</span>
                          </span>
                                                </td>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Yes</span>
                          </span>
                                                </td>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Yes</span>
                          </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"
                                                    class="w-1/4 py-3 pr-4 text-left text-sm font-normal leading-6 text-gray-900">
                                                    6 months free advisor
                                                    <div class="absolute inset-x-8 mt-3 h-px bg-gray-200"></div>
                                                </th>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path
                                  d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"/>
                            </svg>
                            <span class="sr-only">No</span>
                          </span>
                                                </td>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Yes</span>
                          </span>
                                                </td>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Yes</span>
                          </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"
                                                    class="w-1/4 py-3 pr-4 text-left text-sm font-normal leading-6 text-gray-900">
                                                    Mobile and web access
                                                </th>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path
                                  d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"/>
                            </svg>
                            <span class="sr-only">No</span>
                          </span>
                                                </td>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Yes</span>
                          </span>
                                                </td>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path
                                  d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"/>
                            </svg>
                            <span class="sr-only">No</span>
                          </span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <!-- Fake card borders -->
                                        <div
                                            class="pointer-events-none absolute inset-x-8 inset-y-0 grid grid-cols-4 gap-x-8 before:block"
                                            aria-hidden="true">
                                            <div class="rounded-lg ring-1 ring-gray-900/10"></div>
                                            <div class="rounded-lg ring-2 ring-indigo-600"></div>
                                            <div class="rounded-lg ring-1 ring-gray-900/10"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-sm font-semibold leading-6 text-gray-900">Other perks</h3>
                                    <div class="relative -mx-8 mt-10">
                                        <!-- Fake card backgrounds -->
                                        <div class="absolute inset-x-8 inset-y-0 grid grid-cols-4 gap-x-8 before:block"
                                             aria-hidden="true">
                                            <div class="h-full w-full rounded-lg bg-white shadow-sm"></div>
                                            <div class="h-full w-full rounded-lg bg-white shadow-sm"></div>
                                            <div class="h-full w-full rounded-lg bg-white shadow-sm"></div>
                                        </div>

                                        <table class="relative w-full border-separate border-spacing-x-8">
                                            <thead>
                                            <tr class="text-left">
                                                <th scope="col">
                                                    <span class="sr-only">Feature</span>
                                                </th>
                                                <th scope="col">
                                                    <span class="sr-only">Starter tier</span>
                                                </th>
                                                <th scope="col">
                                                    <span class="sr-only">Scale tier</span>
                                                </th>
                                                <th scope="col">
                                                    <span class="sr-only">Growth tier</span>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row"
                                                    class="w-1/4 py-3 pr-4 text-left text-sm font-normal leading-6 text-gray-900">
                                                    24/7 customer support
                                                    <div class="absolute inset-x-8 mt-3 h-px bg-gray-200"></div>
                                                </th>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Yes</span>
                          </span>
                                                </td>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Yes</span>
                          </span>
                                                </td>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Yes</span>
                          </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"
                                                    class="w-1/4 py-3 pr-4 text-left text-sm font-normal leading-6 text-gray-900">
                                                    Instant notifications
                                                    <div class="absolute inset-x-8 mt-3 h-px bg-gray-200"></div>
                                                </th>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Yes</span>
                          </span>
                                                </td>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Yes</span>
                          </span>
                                                </td>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Yes</span>
                          </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"
                                                    class="w-1/4 py-3 pr-4 text-left text-sm font-normal leading-6 text-gray-900">
                                                    Budgeting tools
                                                    <div class="absolute inset-x-8 mt-3 h-px bg-gray-200"></div>
                                                </th>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Yes</span>
                          </span>
                                                </td>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Yes</span>
                          </span>
                                                </td>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Yes</span>
                          </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"
                                                    class="w-1/4 py-3 pr-4 text-left text-sm font-normal leading-6 text-gray-900">
                                                    Digital receipts
                                                    <div class="absolute inset-x-8 mt-3 h-px bg-gray-200"></div>
                                                </th>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Yes</span>
                          </span>
                                                </td>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Yes</span>
                          </span>
                                                </td>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Yes</span>
                          </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"
                                                    class="w-1/4 py-3 pr-4 text-left text-sm font-normal leading-6 text-gray-900">
                                                    Pots to separate money
                                                    <div class="absolute inset-x-8 mt-3 h-px bg-gray-200"></div>
                                                </th>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path
                                  d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"/>
                            </svg>
                            <span class="sr-only">No</span>
                          </span>
                                                </td>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Yes</span>
                          </span>
                                                </td>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Yes</span>
                          </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"
                                                    class="w-1/4 py-3 pr-4 text-left text-sm font-normal leading-6 text-gray-900">
                                                    Free bank transfers
                                                    <div class="absolute inset-x-8 mt-3 h-px bg-gray-200"></div>
                                                </th>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path
                                  d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"/>
                            </svg>
                            <span class="sr-only">No</span>
                          </span>
                                                </td>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Yes</span>
                          </span>
                                                </td>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path
                                  d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"/>
                            </svg>
                            <span class="sr-only">No</span>
                          </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"
                                                    class="w-1/4 py-3 pr-4 text-left text-sm font-normal leading-6 text-gray-900">
                                                    Business debit card
                                                </th>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path
                                  d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"/>
                            </svg>
                            <span class="sr-only">No</span>
                          </span>
                                                </td>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Yes</span>
                          </span>
                                                </td>
                                                <td class="relative w-1/4 px-4 py-0 text-center">
                          <span class="relative h-full w-full py-3">
                            <svg class="mx-auto h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                              <path
                                  d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"/>
                            </svg>
                            <span class="sr-only">No</span>
                          </span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <!-- Fake card borders -->
                                        <div
                                            class="pointer-events-none absolute inset-x-8 inset-y-0 grid grid-cols-4 gap-x-8 before:block"
                                            aria-hidden="true">
                                            <div class="rounded-lg ring-1 ring-gray-900/10"></div>
                                            <div class="rounded-lg ring-2 ring-indigo-600"></div>
                                            <div class="rounded-lg ring-1 ring-gray-900/10"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

            <!-- FAQ section -->
            <div class="mx-auto mt-24 max-w-7xl divide-y divide-gray-900/10 px-6 sm:mt-56 lg:px-8">
                <h2 class="text-2xl font-bold leading-10 tracking-tight text-gray-900">Frequently asked questions</h2>
                <dl class="mt-10 space-y-8 divide-y divide-gray-900/10">
                    <div class="pt-8 lg:grid lg:grid-cols-12 lg:gap-8">
                        <dt class="text-base font-semibold leading-7 text-gray-900 lg:col-span-5">What&#039;s the best
                            thing about Switzerland?
                        </dt>
                        <dd class="mt-4 lg:col-span-7 lg:mt-0">
                            <p class="text-base leading-7 text-gray-600">I don&#039;t know, but the flag is a big plus.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam
                                fugiat.</p>
                        </dd>
                    </div>

                    <!-- More questions... -->
                </dl>
            </div>
        </main>

        <!-- Footer -->
        <footer class="mt-24 sm:mt-56" aria-labelledby="footer-heading">
            <h2 id="footer-heading" class="sr-only">Footer</h2>
            <div class="mx-auto max-w-7xl px-6 pb-8 lg:px-8">
                <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                    <div class="space-y-8">
                        <img class="h-7" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                             alt="Company name">
                        <p class="text-sm leading-6 text-gray-600">Making the world a better place through constructing
                            elegant hierarchies.</p>
                        <div class="flex space-x-6">
                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                <span class="sr-only">Facebook</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                <span class="sr-only">Instagram</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                <span class="sr-only">Twitter</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                <span class="sr-only">GitHub</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                <span class="sr-only">YouTube</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                        <div class="md:grid md:grid-cols-2 md:gap-8">
                            <div>
                                <h3 class="text-sm font-semibold leading-6 text-gray-900">Solutions</h3>
                                <ul role="list" class="mt-6 space-y-4">
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Marketing</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Analytics</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="text-sm leading-6 text-gray-600 hover:text-gray-900">Commerce</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="text-sm leading-6 text-gray-600 hover:text-gray-900">Insights</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-10 md:mt-0">
                                <h3 class="text-sm font-semibold leading-6 text-gray-900">Support</h3>
                                <ul role="list" class="mt-6 space-y-4">
                                    <li>
                                        <a href="#"
                                           class="text-sm leading-6 text-gray-600 hover:text-gray-900">Pricing</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Documentation</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="text-sm leading-6 text-gray-600 hover:text-gray-900">Guides</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">API
                                            Status</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="md:grid md:grid-cols-2 md:gap-8">
                            <div>
                                <h3 class="text-sm font-semibold leading-6 text-gray-900">Company</h3>
                                <ul role="list" class="mt-6 space-y-4">
                                    <li>
                                        <a href="#"
                                           class="text-sm leading-6 text-gray-600 hover:text-gray-900">About</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Blog</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Jobs</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="text-sm leading-6 text-gray-600 hover:text-gray-900">Press</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="text-sm leading-6 text-gray-600 hover:text-gray-900">Partners</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-10 md:mt-0">
                                <h3 class="text-sm font-semibold leading-6 text-gray-900">Legal</h3>
                                <ul role="list" class="mt-6 space-y-4">
                                    <li>
                                        <a href="#"
                                           class="text-sm leading-6 text-gray-600 hover:text-gray-900">Claim</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="text-sm leading-6 text-gray-600 hover:text-gray-900">Privacy</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="text-sm leading-6 text-gray-600 hover:text-gray-900">Terms</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-16 border-t border-gray-900/10 pt-8 sm:mt-20 lg:mt-24">
                    <p class="text-xs leading-5 text-gray-500">&copy; 2020 Your Company, Inc. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>


    <pre>——(Residential Page)
        To provide you with an estimate, there is usually no need to visit your home. We will ask the right questions and fit you with a cleaning package that meets your specific needs and budget, then adjust later if needed.

        Residential packages include

        Introductory Cleans
        Basic Clean
        Essentials *
        Deluxe

        *Most popular

        Customized Routine Cleans
        Now that your home is sparkling, you’ll want to establish a routine with us to keep it that way.  We     will recommend a Customized Routine Clean Package that fits your lifestyle and budget.

        Routine Cleans include
        Weekly Basic
        Bi-Weekly Essentials
        Monthly Deluxe

        [Icon] Weekly Basic
        The Weekly Basic is recommended to the working professionals with small children and/or pets who want a clean, organized and welcoming living space but don’t have the time to stay on top of the toys, pet hair, bathroom, kitchen and household basics. The Weekly Basic will bring your clean up to the standard you desire and keep it that way. (See checklist)

        [Icon] Bi-weekly Essentials
        The Bi-weekly Essentials is an affordable and effective clean that caters to organized and busy households who desire a basic, sanitized clean; augmented with bi-weekly disinfecting of the stubborn and less noticeable (build-up) areas of the home. (See checklist)

        [ICON] Monthly Deluxe
        The Monthly Deluxe is designed for smaller, more organized households who can go a little longer between cleans and enjoy the benefits of a top-to-bottom professional clean on a monthly  basis. (See checklist)

        Call us today for your Hassle Free Quote or simply send us an email and we’ll call you at your earliest convenience.

    </pre>
@endsection
