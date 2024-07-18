@extends('layout.app')
@section('title')
    add product
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">افزودن محصول</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('product.create')}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-full h-auto flex flex-row-reverse justify-start pt-4 mb-10">
                            <label for="title" class="font-semibold ml-5">: نام محصول</label>
                            <input type="text" name="title" id="title" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('title'))
                                <p>{{$errors->first('title')}}</p>
                            @endif
                        </div>
                        <div class="w-full h-auto flex flex-row-reverse justify-start pt-4 mb-10">
                            <label for="title" class="font-semibold ml-5">: توضیحات محصول</label>
                            <textarea name="description" id="description" cols="30" rows="5" class="rounded outline-0 p-2 border border-gray-400"></textarea>
                            @if($errors->has('description'))
                                <p>{{$errors->first('description')}}</p>
                            @endif
                        </div>
                        <input type="submit" value="اضافه کردن" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                        <div class="w-full h-auto flex flex-row-reverse justify-start pt-4 mb-10">
                            <label for="category" class="font-semibold ml-5">: دسته بندی</label>
                            <select name="category" id="category" class="w-2/6 cursor-pointer outline-0 rounded border border-gray-400">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('category'))
                                <p>{{$errors->first('category')}}</p>
                            @endif
                        </div>
                        <div class="w-full h-auto flex flex-row-reverse justify-start pt-4 mb-10">
                            <label for="entity" class="font-semibold ml-5">: موجودیت</label>
                            <select name="entity" id="entity" class="w-2/6 cursor-pointer outline-0 rounded border border-gray-400">
                                <option value=1>موجود</option>
                                <option value=0>ناموجود</option>
                            </select>
                            @if($errors->has('entity'))
                                <p>{{$errors->first('entity')}}</p>
                            @endif
                        </div>
                        <div class="w-full h-auto flex flex-row-reverse justify-start pt-4">
                            <label for="price" class="font-semibold ml-5">: قیمت محصول</label>
                            <input type="number" name="price" id="price" class="w-2/5 h-8 border border-gray-400 rounded outline-0 p-2">
                            @if($errors->has('price'))
                                <p>{{$errors->first('price')}}</p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
    </div>
@endsection
