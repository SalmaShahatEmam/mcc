
@extends('site.layouts.app')
@section('title',$blog->name . '|' . getSetting('site_name_' . app()->getLocale()))

@section('content')

@php
$name =$blog->name;
$parent =__("Blogs");
@endphp
<x-sub-header :name="$name" :parent="$parent" />
<section class="news-page">
    <div class="main-container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="news-details">
                    <div class="news-img">
                        <img src="{{   $blog->image_path  }}" alt="" />
                    </div>
                    <div class="news-details-text">
                        <div class="details-header">
                            <h3 >{{ $blog->name }} </h3>
                            <div class="last-news-date">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.11133 1.61121V4.02804" stroke="#666666" stroke-width="1.20842" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M13.5557 1.61121V4.02804" stroke="#666666" stroke-width="1.20842" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3.48535 7.323H17.1807" stroke="#666666" stroke-width="1.20842" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17.584 6.8477V13.6954C17.584 16.1122 16.3756 17.7235 13.556 17.7235H7.11107C4.29143 17.7235 3.08301 16.1122 3.08301 13.6954V6.8477C3.08301 4.43086 4.29143 2.81964 7.11107 2.81964H13.556C16.3756 2.81964 17.584 4.43086 17.584 6.8477Z" stroke="#666666" stroke-width="1.20842" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M10.33 11.0369H10.3373" stroke="#666666" stroke-width="1.61122" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7.3476 11.0369H7.35484" stroke="#666666" stroke-width="1.61122" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7.3476 13.4537H7.35484" stroke="#666666" stroke-width="1.61122" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>


                                <span> {{ $blog->created_at}}</span>

                            </div>
                        </div>
                        <p> {!! $blog->desc !!}</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="last-news">
                    <div class="last_news_header">
                        <h3>{{   __('The latest') }}</h3>
                    </div>
                    <div class="last_news_content">
                        @foreach($other_blogs as $blog)
                        <a href="{{  route('site.blogs.show',$blog->slug) }}" class="last-news-card">
                            <div class="last-img">
                                <img src="{{   $blog->image_path  }}" alt="" />
                            </div>
                            <div class="last-news-text">
                                <p>{{  $blog->name }}</p>
                                <div class="last-news-date">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.11133 1.61121V4.02804" stroke="#666666" stroke-width="1.20842" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13.5557 1.61121V4.02804" stroke="#666666" stroke-width="1.20842" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M3.48535 7.323H17.1807" stroke="#666666" stroke-width="1.20842" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M17.584 6.8477V13.6954C17.584 16.1122 16.3756 17.7235 13.556 17.7235H7.11107C4.29143 17.7235 3.08301 16.1122 3.08301 13.6954V6.8477C3.08301 4.43086 4.29143 2.81964 7.11107 2.81964H13.556C16.3756 2.81964 17.584 4.43086 17.584 6.8477Z" stroke="#666666" stroke-width="1.20842" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10.33 11.0369H10.3373" stroke="#666666" stroke-width="1.61122" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7.3476 11.0369H7.35484" stroke="#666666" stroke-width="1.61122" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7.3476 13.4537H7.35484" stroke="#666666" stroke-width="1.61122" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>

                                    <span>{{ $blog->created_at}}</span>

                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
