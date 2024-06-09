
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- head içeriği -->
    <!-- CSS dosyalarınızı burada çağırabilirsiniz -->
    <style>
      
    </style>
</head>
<body>

<x-app-layout>
<x-slot name="header">
    <h2 class=" px-0 sm:px-0 lg:px-0 font-bold text-xl  h-50  leading-tight bg-black text-red p-3">
        {{ __('Admin') }}
    </h2>
</x-slot>

    <main class="mt-6 bg-black">
        <div class="grid gap-10 lg:grid-cols-4 lg:gap-20 bg-black">
            <div>
 
              
            <style>
                body {
        background-image: url('https://get.wallhere.com/photo/black-red-1355785.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    .text-red {
        color: red;
    }

    .underline-red {
        text-decoration: underline red;
    }
</style>

<a href="{{ route('admin.users.index') }}"
    class="flex items-start gap-4 rounded-lg bg-black p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
    <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
        <svg class="size-5 sm:size-6 text-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M17.25 3.55l-1.82 9.374L19.5 9.5l-9.545-1.11L6.75 4.5 4.5 9.5l7.764.924L12.75 17l3.744-6.576L20.25 9.5l-1.93 3.424 1.827 1.124-7.797 1.1 1.82 9.374L12 19.25l-1.82 9.375-1.83-9.374L2.25 13.5l7.77-1.076L12 5.75l1.98 6.674 7.77 1.076-5.1 4.375 1.83 9.374z" />
        </svg>
    </div>

    <div class="pt-3 sm:pt-5 ">
        <h2 class="text-xl font-semibold text-red dark:text-red underline-red">Edit User Informations</h2>

        <p class="mt-4 text-m/relaxed">
            <br>
            <span class="text-red underline-red">search ,edit and delete</span>
        </p>
    </div>

    <svg class="size-6 sh   rink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg"
        fill="none" viewBox="0 0 24 24" stroke-width="1.5">
        <path stroke-linecap="round" stroke-linejoin="round"
            d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
    </svg>
</a>


            </div>

            <div>


            <style>
    .text-red {
        color: red;
    }

    .underline-red {
        text-decoration: underline red;
    }
</style>
            <a href="{{ route('admin.posts.index') }}"
    class="flex items-start gap-4 rounded-lg bg-black p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
    <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
        <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24">
            <g fill="#FF2D20">
                <path
                    d="M8.75 4.5H5.5c-.69 0-1.25.56-1.25 1.25v4.75c0 .69.56 1.25 1.25 1.25h3.25c.69 0 1.25-.56 1.25-1.25V5.75c0-.69-.56-1.25-1.25-1.25Z" />
                <path
                    d="M24 10a3 3 0 0 0-3-3h-2V2.5a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2V20a3.5 3.5 0 0 0 3.5 3.5h17A3.5 3.5 0 0 0 24 20V10ZM3.5 21.5A1.5 1.5 0 0 1 2 20V3a.5.5 0 0 1 .5-.5h14a.5.5 0 0 1 .5.5v17c0 .295.037.588.11.874a.5.5 0 0 1-.484.625L3.5 21.5ZM22 20a1.5 1.5 0 1 1-3 0V9.5a.5.5 0 0 1 .5-.5H21a1 1 0 0 1 1 1v10Z" />
                <path
                    d="M12.751 6.047h2a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-2A.75.75 0 0 1 12 7.3v-.5a.75.75 0 0 1 .751-.753ZM12.751 10.047h2a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-2A.75.75 0 0 1 12 11.3v-.5a.75.75 0 0 1 .751-.753ZM4.751 14.047h10a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-10A.75.75 0 0 1 4 15.3v-.5a.75.75 0 0 1 .751-.753ZM4.75 18.047h7.5a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-7.5A.75.75 0 0 1 4 19.3v-.5a.75.75 0 0 1 .75-.753Z" />
            </g>
        </svg>
    </div>

    <div class="pt-3 sm:pt-5">
        <h2 class="text-xl font-semibold text-red dark:text-red underline-red">Share Post</h2>

        <p class="mt-4 text-m/relaxed text-red underline-red">
    share post by clicking here.
    <br>
     edit and delete posts.
</p>

    </div>

    <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg"
        fill="none" viewBox="0 0 24 24" stroke-width="1.5">
        <path stroke-linecap="round" stroke-linejoin="round"
            d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
    </svg>
</a>


<a href="{{ route('admin.product.index') }}"
    class="flex items-start gap-4 rounded-lg bg-black p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
    <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
        <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24">
            <g fill="#FF2D20">
                <path
                    d="M8.75 4.5H5.5c-.69 0-1.25.56-1.25 1.25v4.75c0 .69.56 1.25 1.25 1.25h3.25c.69 0 1.25-.56 1.25-1.25V5.75c0-.69-.56-1.25-1.25-1.25Z" />
                <path
                    d="M24 10a3 3 0 0 0-3-3h-2V2.5a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2V20a3.5 3.5 0 0 0 3.5 3.5h17A3.5 3.5 0 0 0 24 20V10ZM3.5 21.5A1.5 1.5 0 0 1 2 20V3a.5.5 0 0 1 .5-.5h14a.5.5 0 0 1 .5.5v17c0 .295.037.588.11.874a.5.5 0 0 1-.484.625L3.5 21.5ZM22 20a1.5 1.5 0 1 1-3 0V9.5a.5.5 0 0 1 .5-.5H21a1 1 0 0 1 1 1v10Z" />
                <path
                    d="M12.751 6.047h2a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-2A.75.75 0 0 1 12 7.3v-.5a.75.75 0 0 1 .751-.753ZM12.751 10.047h2a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-2A.75.75 0 0 1 12 11.3v-.5a.75.75 0 0 1 .751-.753ZM4.751 14.047h10a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-10A.75.75 0 0 1 4 15.3v-.5a.75.75 0 0 1 .751-.753ZM4.75 18.047h7.5a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-7.5A.75.75 0 0 1 4 19.3v-.5a.75.75 0 0 1 .75-.753Z" />
            </g>
        </svg>
    </div>

    <div class="pt-3 sm:pt-5">
        <h2 class="text-xl font-semibold text-red dark:text-red underline-red">Product</h2>

        <p class="mt-4 text-m/relaxed text-red underline-red">
          control products by clicking here.
            <br>
            add, edit and delete products.
        </p>
    </div>

    <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg"
        fill="none" viewBox="0 0 24 24" stroke-width="1.5">
        <path stroke-linecap="round" stroke-linejoin="round"
            d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
    </svg>
</a>


            </div>
        </div>
    </main>

    <div class="fixed bottom-10 right-10">
        <div id="draggable-message-box" class="draggable bg-white  p-4 shadow-lg rounded-lg w-16 h-16 cursor-pointer">
            <svg class="w-4 h-4 text-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                    d="M3.02832 10L10.2246 14.8166C10.8661 15.2443 11.1869 15.4581 11.5336 15.5412C11.8399 15.6146 12.1593 15.6146 12.4657 15.5412C12.8124 15.4581 13.1332 15.2443 13.7747 14.8166L20.971 10M10.2981 4.06879L4.49814 7.71127C3.95121 8.05474 3.67775 8.22648 3.4794 8.45864C3.30385 8.66412 3.17176 8.90305 3.09111 9.161C3 9.45244 3 9.77535 3 10.4212V16.8C3 17.9201 3 18.4802 3.21799 18.908C3.40973 19.2843 3.71569 19.5903 4.09202 19.782C4.51984 20 5.07989 20 6.2 20H17.8C18.9201 20 19.4802 20 19.908 19.782C20.2843 19.5903 20.5903 19.2843 20.782 18.908C21 18.4802 21 17.9201 21 16.8V10.4212C21 9.77535 21 9.45244 20.9089 9.161C20.8282 8.90305 20.6962 8.66412 20.5206 8.45864C20.3223 8.22648 20.0488 8.05474 19.5019 7.71127L13.7019 4.06879C13.0846 3.68116 12.776 3.48735 12.4449 3.4118C12.152 3.34499 11.848 3.34499 11.5551 3.4118C11.224 3.48735 10.9154 3.68116 10.2981 4.06879Z"
                    stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>

        <div id="message-box" class="bg-white p-4 shadow-lg rounded-lg w-60 h-60 overflow-y-auto cursor-pointer hidden">
            @foreach ($messages as $message)
                <div class="message border-b border-gray-200 mb-4 pb-4">
                    <p><strong>Name:</strong> <span class="text-xs">{{ $message->name }}</span></p>
                    <p><strong>Email:</strong> <span class="text-xs">{{ $message->email }}</span></p>
                    <p><strong>Message:</strong> <span class="text-xs">{{ $message->message }}</span></p>
                    <p><strong>Created At:</strong> <span class="text-xs">{{ $message->created_at }}</span></p>

                    <!-- Cevap Formu -->
                    <form class="response-form mt-4" method="POST"
                        action="{{ route('admin.reply', ['message' => $message->id]) }}">
                        @csrf
                        <textarea name="reply" rows="3" class="w-full border rounded-md p-2" placeholder="Your reply here..."></textarea>
                        <button type="submit"
                            class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Reply</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
    <script>
        // Mesaj kutusu ve mesaj ikonunu alma
        const messageBox = document.getElementById('message-box');
        const messageIcon = document.getElementById('draggable-message-box');

        // Mesaj ikonuna tıklanınca mesaj kutusunu gösterme işlevi
        messageIcon.addEventListener('click', () => {
            messageBox.classList.toggle('hidden');
        });

        // Mesaj kutusuna tıklandığında küçültme işlevi
        messageBox.addEventListener('click', (e) => {
            if (!e.target.closest('.message')) {
                messageBox.classList.add('hidden');
            }
        });

        // JavaScript kullanarak mesaj kutusunu sürükleyebilme
        const draggableMessageBox = document.getElementById('draggable-message-box');

        // Başlangıç konumu
        let initialX;
        let initialY;
        let offsetX = 0;
        let offsetY = 0;
        let isDragging = false;

        // Fare tuşuna basılırsa sürükleme işlemi başlar
        draggableMessageBox.addEventListener('mousedown', (e) => {
            isDragging = true;
            initialX = e.clientX - offsetX;
            initialY = e.clientY - offsetY;
        });

        // Fare hareket ettirilirse kutu da hareket eder
        draggableMessageBox.addEventListener('mousemove', (e) => {
            if (isDragging) {
                offsetX = e.clientX - initialX;
                offsetY = e.clientY - initialY;
                draggableMessageBox.style.transform = `translate(${offsetX}px, ${offsetY}px)`;
            }
        });

        // Fare tuşu bırakılırsa sürükleme işlemi sona erer
        draggableMessageBox.addEventListener('mouseup', () => {
            isDragging = false;
        });

        // Mesaj kutusunu büyütme işlevi
        draggableMessageBox.addEventListener('click', () => {
            if (messageBox.classList.contains('w-60')) {
                messageBox.classList.remove('w-60', 'h-60', 'overflow-hidden');
                messageBox.classList.add('w-auto', 'h-auto');
            } else {
                messageBox.classList.remove('w-auto', 'h-auto');
                messageBox.classList.add('w-60', 'h-60', 'overflow-hidden');
            }
        });

        // Sayfayı yeniden gönderme işlevi
        const refreshForm = document.getElementById('refresh-form');
        refreshForm.addEventListener('submit', (e) => {
            e.preventDefault();
            window.location.reload();
        });
    </script>
</x-app-layout>
