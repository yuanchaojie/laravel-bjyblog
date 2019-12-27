@extends('layouts.home')

@section('title', $head['title'])

@section('keywords', $head['keywords'])

@section('description', $head['description'])

@section('content')
    <!-- 左侧列表开始 -->
    <div class="col-xs-12 col-md-12 col-lg-8">
        @if(!empty($tagName))
            <div class="row b-tag-title">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <h2>{!! __('others.article_with_tag', ['tag' => $tagName]) !!}</h2>
                </div>
            </div>
        @endif
        @if(request()->has('wd'))
            <div class="row b-tag-title">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <h2>{!! __('others.search_article', ['word' => clean(request()->input('wd'))]) !!}</h2>
                </div>
            </div>
        @endif
        <!-- 循环文章列表开始 -->
        @foreach($articles as $k => $v)
            <div class="row b-one-article">
                <h3 class="col-xs-12 col-md-12 col-lg-12">
                    <a class="b-oa-title" href="{{ $v->url }}" target="_blank">{{ $v->title }}</a>
                </h3>
                <div class="col-xs-12 col-md-12 col-lg-12 b-date">
                    <ul class="row">
                        <li class="col-xs-5 col-md-2 col-lg-3">
                            <i class="fa fa-user"></i> {{ $v->author }}
                        </li>
                        <li class="col-xs-7 col-md-3 col-lg-3">
                            <i class="fa fa-calendar"></i> {{ $v->created_at }}
                        </li>
                        <li class="col-xs-5 col-md-2 col-lg-2">
                            <i class="fa fa-list-alt"></i> <a href="{{ $v->category->url }}" target="_blank">{{ $v->category->name }}</a>
                        </li>
                        <li class="col-xs-7 col-md-5 col-lg-4 "><i class="fa fa-tags"></i>
                            @foreach($v->tags as $n)
                                <a class="b-tag-name" href="{{ $n->url }}" target="_blank">{{ $n->name }}</a>
                            @endforeach
                        </li>
                    </ul>
                </div>
		<!-- 注释掉封面图和描述部分
		-->
            </div>
        @endforeach
        <!-- 循环文章列表结束 -->

        <!-- 列表分页开始 -->
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12 b-page text-center">
                {{ $articles->appends(['wd' => request()->input('wd')])->links('vendor.pagination.bjypage') }}
            </div>
        </div>
        <!-- 列表分页结束 -->
    </div>
    <!-- 左侧列表结束 -->
@endsection
