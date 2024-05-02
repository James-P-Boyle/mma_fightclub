<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    </head>
    <body class="bg-gray-100">
        <header class="relative min-h-screen w-full flex items-center">
            <div class="background-slider">
                <img id="image1" src="./images/hero-1.jpg" alt="Hero Image" class="absolute inset-0 w-full h-full object-cover">
                <img id="image2" src="./images/hero-2.jpg" alt="Hero Image" class="absolute inset-0 w-full h-full object-cover">
                <img id="image3" src="./images/hero-3.jpg" alt="Hero Image" class="absolute inset-0 w-full h-full object-cover">
            </div>
            <div class="absolute inset-0 bg-black bg-opacity-70"></div>
            <div class="w-full relative max-w-[600px] text-white p-4">
                <h1 class="text-4xl lg:text-6xl font-bold">Find your <span class="text-red-700">redy</span> stuff for your room</h1>
                <div class="w-20 h-2 bg-red-700 my-4 divider"></div>
                <p id="dynamicText" class="text-xl mb-10">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus maiores obcaecati, expedita ab cumque repellendus nesciunt laboriosam mollitia maxime. Beatae, quam. Ad maiores laborum eum at possimus repellat magni minus.</p>
                <div class="space-x-2">
                    <button class="hover:scale-105 bg-white text-red-500 text-2xl font-medium px-4 py-2 rounded shadow">Learn More</button>
                    <button class="hover:scale-105 bg-red-500 text-white text-2xl font-medium px-4 py-2 rounded shadow">Contact</button>
                </div>
            </div>
        </header>
        <section class="min-h-[80vh] py-16 flex flex-col justify-center gap-8">

            <div class="grid gap-4 sm:gap-0 sm:grid-cols-4 items-center sm:max-w-[1000px] mx-auto">

                <div class="rounded-xl border border-gray-100 p-4 text-center">
                    <span class="inline-block rounded-lg bg-gray-50 p-3">
                        <svg
                        class="h-10 w-10"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
                        ></path>
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
                        ></path>
                        </svg>
                    </span>
                
            
                    <h2 class="mt-2 font-bold text-lg sm:text-xl">Accountant</h2>
            
                    <p class="sm:text-base sm:text-gray-600">
                        Lorem ipsum dolor sit amet consectetur.
                    </p>
                </div>
                <div class="rounded-xl border border-gray-100 p-4 text-center">
                    <span class="inline-block rounded-lg bg-gray-50 p-3">
                        <svg
                        class="h-10 w-10"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
                        ></path>
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
                        ></path>
                        </svg>
                    </span>
                
            
                    <h2 class="mt-2 font-bold text-lg sm:text-xl">Accountant</h2>
            
                    <p class="sm:text-base sm:text-gray-600">
                        Lorem ipsum dolor sit amet consectetur.
                    </p>
                </div>
                <div class="rounded-xl border border-gray-100 p-4 text-center">
                    <span class="inline-block rounded-lg bg-gray-50 p-3">
                        <svg
                        class="h-10 w-10"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
                        ></path>
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
                        ></path>
                        </svg>
                    </span>
                
            
                    <h2 class="mt-2 font-bold text-lg sm:text-xl">Accountant</h2>
            
                    <p class="sm:text-base sm:text-gray-600">
                        Lorem ipsum dolor sit amet consectetur.
                    </p>
                </div>
                <div class="rounded-xl border border-gray-100 p-4 text-center">
                    <span class="inline-block rounded-lg bg-gray-50 p-3">
                        <svg
                        class="h-10 w-10"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
                        ></path>
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
                        ></path>
                        </svg>
                    </span>
                
            
                    <h2 class="mt-2 font-bold text-lg sm:text-xl">Accountant</h2>
            
                    <p class="sm:text-base sm:text-gray-600">
                        Lorem ipsum dolor sit amet consectetur.
                    </p>
                </div>

            </div>
        </section>

        <section class="bg-black bg-opacity-90 text-white">
         
              <div class="grid md:grid-cols-[2fr_1fr]">

                <div class="w-full h-[600px] md:order-2 bg-center bg-cover" style="background-image: url('https://mdbcdn.b-cdn.net/img/new/ecommerce/vertical/088.jpg');">
                    <!-- Background image is set here -->
                </div>
               
                <div class="px-4 md:px-8 py-12 flex flex-col items-center justify-center gap-6">
                    <div class="w-full">
                        <h4 class="text-2xl font-bold">
                            About us
                          </h4>
                          <div class="w-20 h-2 bg-red-700 my-4 divider"></div>
                    </div>
                
                    <p class="text-xl">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Earum maxime voluptas ipsam aliquam itaque cupiditate
                      provident architecto expedita harum culpa odit, inventore rem
                      molestias laborum repudiandae corporis pariatur quo eius iste!
               
                    </p>
                    <p class="text-xl">
                      Commodi ut nisi assumenda alias maxime necessitatibus ad rem
                      repellat explicabo, reiciendis illum suscipit iusto? Provident
                      dignissimos similique, reiciendis inventore accusantium unde
                      mollitia, deleniti quae atque error id perspiciatis illum.
                      Laboriosam aperiam ab illo dignissimos obcaecati corporis
                    </p>

                    <button class="hover:scale-105 bg-red-500 text-white text-2xl font-medium px-4 py-2 rounded shadow mr-auto">Contact</button>
             
                </div>
         
              </div>
          
        </section>

        {{-- <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
            <h4 class="text-2xl font-bold">
                Contact Us
            </h4>
            <div class="w-20 h-2 bg-red-700 my-4 divider"></div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('send-mail') }}">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                    <input type="name" name="name" id="name" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                    <input type="email" name="email" id="email" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="location" class="block text-gray-700 text-sm font-bold mb-2">Location:</label>
                    <input type="text" name="location" id="location" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Tires Needed:</label>          
                    <div class="mb-2">
                        <input disabled type="radio" name="tires_needed" value="0-100" id="0-100">
                        <label for="0-100" class="line-through text-red-500">0-100</label>
                    </div>
                    <div class="mb-2">
                        <input type="radio" name="tires_needed" value="100-500" id="100-500">
                        <label for="100-500">100-500</label>
                    </div>
                    <div class="mb-2">
                        <input type="radio" name="tires_needed" value="500-1000" id="500-1000">
                        <label for="500-1000">500-1000</label>
                    </div>
                    <div>
                        <input type="radio" name="tires_needed" value="1000+" id="1000+">
                        <label for="1000+">1000+</label>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message (Optional):</label>
                    <textarea name="message" id="message" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
            </form>
        </div> --}}

        <section class="min-h-[80vh] py-16 gap-8 p-4 md:p-8">

            <div class="w-full">
                <h4 class="text-2xl font-bold">
                    Our Tires
                </h4>
                <div class="w-20 h-2 bg-red-700 my-4 divider"></div>
            </div>

        
                <ul class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    <li>
                        <img
                            src="./images/sample-1.jpg"
                            alt=""
                            class="h-[250px] w-full object-cover transition duration-500 group-hover:scale-105"
                        />
                        <div class="relative bg-black text-white bg-opacity-90 p-2 flex flex-col">
                            <h5 class="text-base text-white/80">
                                Tire type
                            </h5>
                
                            <span class="sr-only">Tire Type</span>
                            <span class="tracking-wider text-white">Details</span>
                           
                            <a href="" class="bg-red-500 text-white">Order</a>
                        </div>
                    </li>
                    <li>
                        <img
                            src="./images/sample-1.jpg"
                            alt=""
                            class="h-[250px] w-full object-cover transition duration-500 group-hover:scale-105"
                        />
                        <div class="relative bg-black text-white bg-opacity-90 p-2 flex flex-col">
                            <h5 class="text-base text-white/80">
                                Tire type
                            </h5>
                
                            <span class="sr-only">Tire Type</span>
                            <span class="tracking-wider text-white">Details</span>
                           
                            <a href="" class="bg-red-500 text-white">Order</a>
                        </div>
                    </li>
                    <li>
                        <img
                            src="./images/sample-1.jpg"
                            alt=""
                            class="h-[250px] w-full object-cover transition duration-500 group-hover:scale-105"
                        />
                        <div class="relative bg-black text-white bg-opacity-90 p-2 flex flex-col">
                            <h5 class="text-base text-white/80">
                                Tire type
                            </h5>
                
                            <span class="sr-only">Tire Type</span>
                            <span class="tracking-wider text-white">Details</span>
                           
                            <a href="" class="bg-red-500 text-white">Order</a>
                        </div>
                    </li>
                    <li>
                        <img
                            src="./images/sample-1.jpg"
                            alt=""
                            class="h-[250px] w-full object-cover transition duration-500 group-hover:scale-105"
                        />
                        <div class="relative bg-black text-white bg-opacity-90 p-2 flex flex-col">
                            <h5 class="text-base text-white/80">
                                Tire type
                            </h5>
                
                            <span class="sr-only">Tire Type</span>
                            <span class="tracking-wider text-white">Details</span>
                           
                            <a href="" class="bg-red-500 text-white">Order</a>
                        </div>
                    </li>
                    <li>
                        <img
                            src="./images/sample-1.jpg"
                            alt=""
                            class="h-[250px] w-full object-cover transition duration-500 group-hover:scale-105"
                        />
                        <div class="relative bg-black text-white bg-opacity-90 p-2 flex flex-col">
                            <h5 class="text-base text-white/80">
                                Tire type
                            </h5>
                
                            <span class="sr-only">Tire Type</span>
                            <span class="tracking-wider text-white">Details</span>
                           
                            <a href="" class="bg-red-500 text-white">Order</a>
                        </div>
                    </li>
                    <li>
                        <img
                            src="./images/sample-1.jpg"
                            alt=""
                            class="h-[250px] w-full object-cover transition duration-500 group-hover:scale-105"
                        />
                        <div class="relative bg-black text-white bg-opacity-90 p-2 flex flex-col">
                            <h5 class="text-base text-white/80">
                                Tire type
                            </h5>
                
                            <span class="sr-only">Tire Type</span>
                            <span class="tracking-wider text-white">Details</span>
                           
                            <a href="" class="bg-red-500 text-white">Order</a>
                        </div>
                    </li>
                    <li>
                        <img
                            src="./images/sample-1.jpg"
                            alt=""
                            class="h-[250px] w-full object-cover transition duration-500 group-hover:scale-105"
                        />
                        <div class="relative bg-black text-white bg-opacity-90 p-2 flex flex-col">
                            <h5 class="text-base text-white/80">
                                Tire type
                            </h5>
                
                            <span class="sr-only">Tire Type</span>
                            <span class="tracking-wider text-white">Details</span>
                           
                            <a href="" class="bg-red-500 text-white">Order</a>
                        </div>
                    </li>
                    <li>
                        <img
                            src="./images/sample-1.jpg"
                            alt=""
                            class="h-[250px] w-full object-cover transition duration-500 group-hover:scale-105"
                        />
                        <div class="relative bg-black text-white bg-opacity-90 p-2 flex flex-col">
                            <h5 class="text-base text-white/80">
                                Tire type
                            </h5>
                
                            <span class="sr-only">Tire Type</span>
                            <span class="tracking-wider text-white">Details</span>
                           
                            <a href="" class="bg-red-500 text-white">Order</a>
                        </div>
                    </li>
                
                
                
                
                
   
       

        </section>

        <section class="bg-black bg-opacity-90 text-white min-h-screen grid items-center">
           
            <div class="flex flex-col justify-center p-4 md:p-8">
                <div class="w-full">
                    <h4 class="text-2xl font-bold">
                        Frequently Asked Questions
                    </h4>
                    <div class="w-20 h-2 bg-red-700 my-4 divider"></div>
                </div>
       
              <div class="flex flex-col divide-y divide-gray-700">
                <details>
                  <summary class="py-2 outline-none cursor-pointer focus:underline">How can I place an order?</summary>
                  <div class="px-4 pb-4">
                    <span>You can easily place an order on our website by browsing our product catalog, selecting the items you want, and adding them to your cart. Then, proceed to checkout, where you can provide your shipping and payment information to complete the order.<span>
                  </div>
                </details>
                <details>
                  <summary class="py-2 outline-none cursor-pointer focus:underline">What payment methods do you accept?</summary>
                  <div class="px-4 pb-4">
                    <span>We accept various payment methods, including credit cards, debit cards, net banking, and mobile wallet payments. You can choose the payment option that is most convenient for you during the checkout process.<span>
                  </div>
                </details>
                <details>
                  <summary class="py-2 outline-none cursor-pointer focus:underline">How long does shipping take?</summary>
                  <div class="px-4 pb-4">
                    <span>Shipping times may vary depending on your location and the shipping method chosen. Typically, orders are processed within 1-2 business days, and delivery can take 3-7 business days within India. You will receive a tracking notification once your order is shipped.<span>
                  </div>
                </details>
                <details>
                  <summary class="py-2 outline-none cursor-pointer focus:underline">Can I return a product if I'm not satisfied?</summary>
                  <div class="px-4 pb-4">
                    <span>Yes, we have a hassle-free return policy. If you are not satisfied with your purchase, you can initiate a return within 30 days of receiving the product. Please contact our customer support at <a href="" class="underline">example@gmail.com</a> for assistance.<span>
                  </div>
                </details>
                <details>
                  <summary class="py-2 outline-none cursor-pointer focus:underline">Do you offer international shipping?</summary>
                  <div class="px-4 pb-4">
                    <span>Currently, we only provide shipping services within India. However, we may consider expanding our shipping options to international locations in the future. Please stay updated with our website for any changes in shipping destinations.<span>
                  </div>
                </details>
                <details>
                  <summary class="py-2 outline-none cursor-pointer focus:underline">What is your customer support contact?</summary>
                  <div class="px-4 pb-4">
                    <span>If you have any questions, concerns, or need assistance, you can reach our customer support team at 9911083755 during our business hours, Monday to Saturday from 10 am to 6 pm. You can also contact us via email at <a href="" class="underline">example@gmail.com</a>.<span>
                  </div>
                </details>
                <details>
                  <summary class="py-2 outline-none cursor-pointer focus:underline">What are your terms and conditions?</summary>
                  <div class="px-4 pb-4">
                    <p>You can find our detailed terms and conditions by visiting our 
                      <a href="" class="underline">Terms of Service</a> 
                      page on our website. It includes information about our policies, user guidelines, and more.</p>
                  </div>
                </details>
              </div>
            </div>
        </section>
    
    </body>
</html>
