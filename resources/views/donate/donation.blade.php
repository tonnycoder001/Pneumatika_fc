


@extends('layouts.index')

@section('content')

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<body class="bg-gray-100">
    <div class="pt-12">


    <div class="container w-1/2 mx-auto px-4 py-16 rounded-lg bg-white shadow-md"> <header class="bg-white shadow-md py-4 px-8 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-800">Donate</h1>
            <a href="/" class="text-gray-600 hover:text-gray-800">Back to Homepage</a>
        </header>

        <main>
            <section class="mb-4 mt-6">
                <h2 class="text-4xl font-bold text-black mb-4 flex justify-center">Your Support Makes a Difference</h2>
                <p class="text-gray-700 text-lg flex justify-center">Your generous donation will help us continue our mission to nuture young lives. Every contribution, big or small, gets us closer to achieving our goals.</p>
            </section>

            <section class="mb-4 rounded-lg bg-white shadow-md p-4 text-center"> <h3 class="text-xl font-bold text-gray-800 mb-4">Donation Options</h3>
                <p class="text-gray-700 mb-4">We appreciate your support! You can donate through the following methods:</p>
                <ul class="list-disc pl-4">
                    <p>Mobile Money: Send your donation to phone number: <span class="font-bold text-blue-500">0712 345 678</span> (Please specify "Donation" in the message.)</p>
                    <p>Bank Transfer: Account Name: [Your Organization Name], Account Number: <span class="font-bold text-blue-500">1234567890</span> (Bank Name: [Your Bank Name]).</p>
                </ul>
            </section>

            <section class="mb-12">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex justify-center">Spread the Word!</h3>
                <p class="text-gray-700 justify-center flex">Help us reach more people in need by sharing this donation page with your friends and family.</p>
            </div>
@endsection


