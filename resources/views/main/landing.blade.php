<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GabungAja</title>
    {{-- Website Icon --}}
    <link rel="icon" href="{{ asset('assets/logo.png') }}">
    {{-- Tailwind CSS --}}
    @vite('resources/css/app.css')
    {{-- Daisy UI CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    {{-- Font Awesome CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="min-h-screen bg-customBg flex flex-col gap-[5rem]">

        {{-- Navbar Component --}}
        <div class="flex flex-col sticky top-0 z-10">
            <div class="bg-customGreen px-6 p-3">
                <div class="flex justify-between items-center">
                    <img src="{{ asset('assets/logo.png') }}" class="w-20 h-20" alt="logo">

                    <div class="flex gap-[4rem]">
                        <a href="#">Home</a>
                        <a href="#ourfeatures">Our Features</a>
                        <a href="#testimonies">Testimonies</a>
                        <a href="#faq">FAQ</a>
                        <a href="#aboutus">About Us</a>
                    </div>

                    


                    <div class="flex">
                        <div class="flex items-stretch">
                            <a href="/login" class="flex bg-customBg w-[5rem] h-[3rem] rounded-xl justify-center items-center text-customBrown">Login</a>
                        </div>
                    </div>
                </div>      
                
            </div>
            
            <div class="z-50 w-full bg-gray-200">
                <div class="relative w-full h-[.5rem] bg-gray-400">
                  <div id="myBar" class="absolute top-0 left-0 h-full bg-customGreen"></div>
                </div>
            </div>
        </div>

        
        
        <div class="w-full h-[25rem] p-[4rem]">
            <div class="flex items-center">
                <div class="flex flex-col gap-[2rem]">
                        <p class="text-black text-6xl w-[50rem]"><span class="text-customBrown">Gabung Aja</span>: Your Ultimate Community and Socializing Platform!
                        </p>

                        <p class="text-2xl w-[40rem]">Experience the thrill of connecting with fellow gamers and enthusiasts. Gabung Aja is your one-stop destination to discover communities, make new friends, and embark on exciting gaming adventures together.</p>
                </div>


                <div class="flex flex-col gap-[1rem]">

                                
                    <div class="avatar">
                        <div class="w-[16rem] rounded">
                          <img src="https://img.freepik.com/free-photo/handsome-man-smiling-happy-face-portrait-close-up_53876-139608.jpg" />
                        </div>
                      </div>

                      <div class="avatar ml-[16rem]">
                        <div class="w-[16rem] rounded">
                          <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                        </div>
                      </div>


                </div>

            </div>
        </div>


        

        <div id="ourfeatures" class="pt-[1rem]"></div>
        <div  class="w-full h-[25rem] p-[4rem] mt-[10rem]" >
            
            <p class="text-center text-6xl">Our Features</p>

            <div class="flex gap-[10rem] justify-center mt-[4rem]">
                <div class="card w-96 bg-base-100 shadow-xl">
                    <figure class="px-10 pt-10">
                        <i class="fa fa-map-marker text-[10rem]"></i>
                    </figure>
                    <div class="card-body items-center text-center">
                      <h2 class="card-title">Shoes!</h2>
                      <p>If a dog chews shoes whose shoes does he choose?</p>
                      <div class="card-actions">
                        <button class="btn btn-primary">Buy Now</button>
                      </div>
                    </div>
                  </div>

                  <div class="card w-96 bg-base-100 shadow-xl">
                    <figure class="px-10 pt-10">
                        <i class="fa fa-map-marker text-[10rem]"></i>
                    </figure>
                    <div class="card-body items-center text-center">
                      <h2 class="card-title">Shoes!</h2>
                      <p>If a dog chews shoes whose shoes does he choose?</p>
                      <div class="card-actions">
                        <button class="btn btn-primary">Buy Now</button>
                      </div>
                    </div>
                  </div>

                  <div class="card w-96 bg-base-100 shadow-xl">
                    <figure class="px-10 pt-10">
                        <i class="fa fa-map-marker text-[10rem]"></i>
                    </figure>
                    <div class="card-body items-center text-center">
                      <h2 class="card-title">Shoes!</h2>
                      <p>If a dog chews shoes whose shoes does he choose?</p>
                      <div class="card-actions">
                        <button class="btn btn-primary">Buy Now</button>
                      </div>
                    </div>
                  </div>
            </div>
        </div>

        <div id="testimonies"></div>
        <div class="w-full h-[40rem] p-[4rem] mt-[10rem] flex justify-center">
            
            <div class="flex flex-col">
                <p class="text-center text-6xl" id="testimonies">Testimonies</p>


                <div class="carousel w-[40rem] h-[30rem] mt-[4rem]">
                    <div id="slide1" class="carousel-item relative w-full">
                      <img src="https://img.daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg" class="w-full" />
                      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide4" class="btn btn-circle">❮</a> 
                        <a href="#slide2" class="btn btn-circle">❯</a>
                      </div>
                    </div> 
                    <div id="slide2" class="carousel-item relative w-full">
                      <img src="https://img.daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.jpg" class="w-full" />
                      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide1" class="btn btn-circle">❮</a> 
                        <a href="#slide3" class="btn btn-circle">❯</a>
                      </div>
                    </div> 
                    <div id="slide3" class="carousel-item relative w-full">
                      <img src="https://img.daisyui.com/images/stock/photo-1414694762283-acccc27bca85.jpg" class="w-full" />
                      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide2" class="btn btn-circle">❮</a> 
                        <a href="#slide4" class="btn btn-circle">❯</a>
                      </div>
                    </div> 
                    <div id="slide4" class="carousel-item relative w-full">
                      <img src="https://img.daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.jpg" class="w-full" />
                      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide3" class="btn btn-circle">❮</a> 
                        <a href="#slide1" class="btn btn-circle">❯</a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>


        <div id="faq"></div>
        <div class="w-full h-[40rem] p-[4rem] mt-[6rem] flex justify-center">
            <div class="flex flex-col gap-[4rem]">
                <p class="text-center text-6xl" id="faq">FAQ</p>

                <div class="flex gap-[4rem]">
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" checked="checked" /> 
                        <div class="collapse-title text-xl font-medium">
                            What kind of communities can I find on Gabung Aja?
                        </div>
                        <div class="collapse-content"> 
                          <p>hello</p>
                        </div>
                      </div>
                      <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Can I create my own community on Gabung Aja?
                        </div>
                        <div class="collapse-content"> 
                          <p>hello</p>
                        </div>
                      </div>
                </div>

                <div class="flex gap-[4rem]">
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" checked="checked" /> 
                        <div class="collapse-title text-xl font-medium">
                            Is Gabung Aja free to use?
                        </div>
                        <div class="collapse-content"> 
                          <p>hello</p>
                        </div>
                      </div>
                      <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Is Gabung Aja accessible on mobile devices?
                        </div>
                        <div class="collapse-content"> 
                          <p>hello</p>
                        </div>
                      </div>
                </div>
            </div>
        </div>

        <div id="aboutus" class="pt-[2rem]"></div>
        <div class="flex flex-col gap-[4rem] mt-[2rem]">
            
            <p class="text-center text-6xl" >About Us</p>

            <ul class="timeline timeline-snap-icon max-md:timeline-compact timeline-vertical">
                <li>
                  <div class="timeline-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                  </div>
                  <div class="timeline-start md:text-end mb-10">
                    <time class="font-mono italic">1984</time>
                    <div class="text-lg font-black">First Macintosh computer</div>
                    The Apple Macintosh—later rebranded as the Macintosh 128K—is the original Apple Macintosh personal computer. It played a pivotal role in establishing desktop publishing as a general office function. The motherboard, a 9 in (23 cm) CRT monitor, and a floppy drive were housed in a beige case with integrated carrying handle; it came with a keyboard and single-button mouse.
                  </div>
                  <hr/>
                </li>
                <li>
                  <hr />
                  <div class="timeline-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                  </div>
                  <div class="timeline-end mb-10">
                    <time class="font-mono italic">1998</time>
                    <div class="text-lg font-black">iMac</div>
                    iMac is a family of all-in-one Mac desktop computers designed and built by Apple Inc. It has been the primary part of Apple's consumer desktop offerings since its debut in August 1998, and has evolved through seven distinct forms
                  </div>
                  <hr />
                </li>
                <li>
                  <hr />
                  <div class="timeline-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                  </div>
                  <div class="timeline-start md:text-end mb-10">
                    <time class="font-mono italic">2001</time>
                    <div class="text-lg font-black">iPod</div>
                    The iPod is a discontinued series of portable media players and multi-purpose mobile devices designed and marketed by Apple Inc. The first version was released on October 23, 2001, about 8+1⁄2 months after the Macintosh version of iTunes was released. Apple sold an estimated 450 million iPod products as of 2022. Apple discontinued the iPod product line on May 10, 2022. At over 20 years, the iPod brand is the oldest to be discontinued by Apple
                  </div>
                  <hr />
                </li>
                <li>
                  <hr />
                  <div class="timeline-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                  </div>
                  <div class="timeline-end mb-10">
                    <time class="font-mono italic">2007</time>
                    <div class="text-lg font-black">iPhone</div>
                    iPhone is a line of smartphones produced by Apple Inc. that use Apple's own iOS mobile operating system. The first-generation iPhone was announced by then-Apple CEO Steve Jobs on January 9, 2007. Since then, Apple has annually released new iPhone models and iOS updates. As of November 1, 2018, more than 2.2 billion iPhones had been sold. As of 2022, the iPhone accounts for 15.6% of global smartphone market share
                  </div>
                  <hr />
                </li>
                <li>
                  <hr />
                  <div class="timeline-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                  </div>
                  <div class="timeline-start md:text-end mb-10">
                    <time class="font-mono italic">2015</time>
                    <div class="text-lg font-black">Apple Watch</div>
                    The Apple Watch is a line of smartwatches produced by Apple Inc. It incorporates fitness tracking, health-oriented capabilities, and wireless telecommunication, and integrates with iOS and other Apple products and services
                  </div>
                </li>
              </ul>
        </div>
       



        





        {{-- Footer Component --}}
        <div class="mt-[10rem]">
            @include('components.footer')
        </div>
        


    </div>
</body>
<script src="https://cdn.tailwindcss.com"></script>
<script>
    // When the user scrolls the page, execute myFunction 
    window.onscroll = function() {myFunction()};
    
    function myFunction() {
      var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
      var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      var scrolled = (winScroll / height) * 100;
      document.getElementById("myBar").style.width = scrolled + "%";
    }
</script>

</html>
