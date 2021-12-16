@extends('layouts.app')
@section('content')
    <div class="background-image grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to become a Content maker?
                </h1>
                <a href="/blog"
                   class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>

        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2017/09/16/12/35/anonymous-2755365_1280.jpg"  width="700" alt="">
        </div>
        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Struggling to be a better web developer?
            </h2>

            <p class="py-8 text-gray-500 text-s">
                text here
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                text here

            </p>
            <a
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>
    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            We are experts in...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Web development
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Object Oriented Programming
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Calculus
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Data structures and algorithm
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>
        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>
        <p class="m-auto w-4/5 text-gray-500">
            paragraphs here
        </p>
    </div>
    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>
                <h3 class="text-xl font-bold py-10">
                    paragraphs
                </h3>
                <a
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2017/10/31/09/55/fingerprint-2904774_1280.jpg" width="700" alt="">
        </div>
    </div>
@endsection
